<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

final class LoaderInstance extends EVM\EVMLoaderInstance {
	readonly public EVM\PHP\PHPNamespace $phpGlobalNamespace;
	readonly public EVM\PHP\PHPManual $phpManual;
	readonly public \DOMDocument $domDocument;
	readonly private EVM\XML\AttributeSelector $referenceIdSelector;
	private ?EVM\PHP\PHPManualIndex $phpManualIndex = NULL;
	private array $elementSelectorFactoryCache = [];
	private array $pathSelectorFactoryCache = [];

	public function __construct(
		readonly protected Loader $loader,
		readonly public string $xmlIdNamespace,
		readonly public string $docBookNamespace,
		EVM\EVMOptions $options
	) {
		parent::__construct($options);

		$globalNamespace = $options->globalNamespace ?? new EVM\PHP\PHPNamespace("", NULL);
		$this->phpGlobalNamespace = $globalNamespace;

		$this->phpManual = new EVM\PHP\PHPManual($this->phpGlobalNamespace);
		$this->domDocument = EVM\XML\loadDocument($loader->manualPath);
		$this->referenceIdSelector = new EVM\XML\AttributeSelector(
			EVM\XML\NamespaceMatcher::specific($this->xmlIdNamespace),
			"id"
		);
	}

	public function getPHPDefinitionXMLMappings(): EVM\Utils\HashMap {
		return $this->loader->getPHPDefinitionXMLMappings();
	}

	public function referenceIdSelectorFactory(): EVM\XML\AttributeSelector {
		return $this->referenceIdSelector;
	}

	public function getReferenceIdAttribute(\DOMElement $el): string {
		return $el->getAttributeNS($this->xmlIdNamespace, "id");
	}

	public function pathSelectorFactory(\DOMElement $root, string $path): EVM\XML\DOMSelector {
		if (!\array_key_exists($path, $this->pathSelectorFactoryCache)) {
			$chain = [];

			foreach (\explode("/", $path) as $tagName) {
				$chain[] = $this->elementSelectorFactory($tagName);
			}

			$this->pathSelectorFactoryCache[$path] = $chain;
		}

		return new EVM\XML\ElementAncestrySelector(
			$root, $this->pathSelectorFactoryCache[$path]
		);
	}

	public function elementSelectorFactory(string $tagName): EVM\XML\ElementSelector {
		if (!\array_key_exists($tagName, $this->elementSelectorFactoryCache)) {
			$this->elementSelectorFactoryCache[$tagName] = new EVM\XML\ElementSelector(
				EVM\XML\NamespaceMatcher::specific($this->docBookNamespace),
				$tagName
			);
		}

		return $this->elementSelectorFactoryCache[$tagName];
	}

	public function getElementsWithReferenceIdAttribute(
		string $docBookTagName
	): array {
//		// this is the initial implementation of this method
//		// however, testing has shown this is a major bottleneck
//		// so it's implemented differently.

//		return EVM\XML\select(
//			$this->domDocument->documentElement,
//			new EVM\XML\AndSelector(
//				$this->elementSelectorFactory($docBookTagName),
//				$this->referenceIdSelectorFactory()
//			)
//		);

		// this is ~4.5 times faster
		$elements = $this->domDocument->getElementsByTagNameNS(
			$this->docBookNamespace, $docBookTagName
		);

		$arr = [];

		foreach ($elements as $element) {
			if (!$element->hasAttributeNS($this->xmlIdNamespace, "id")) {
				continue;
			}

			$arr[] = $element;
		}

		return $arr;
	}

	public function updateIndex(): void {
		$this->phpManualIndex = $this->phpManual->buildIndex();
	}

	public function load(): EVM\EVMLoadResult {
		$data = extractPHPXMLElementsData($this);

		$timing = new EVM\Utils\HashMap;

		foreach ($this->getPHPDefinitionXMLMappings()->entries() as [$kind]) {
			$elapsedTime = (int)EVM\EVMTimingStatistics::measure(
				function() use ($kind, $data) {
					loadPHPDefinitionsFromPHPXMLElementsData(
						$kind, $this, $data[$kind->value]
					);

					$this->updateIndex();
				}
			);

			$timing->set($kind, $elapsedTime);
		}

		$enums           = $timing->get(EVM\PHP\PHPDefinitionKind::kEnum);
		$interfaces      = $timing->get(EVM\PHP\PHPDefinitionKind::kInterface);
		$classes         = $timing->get(EVM\PHP\PHPDefinitionKind::kClass);
		$constants       = $timing->get(EVM\PHP\PHPDefinitionKind::kConstant);
		$functions       = $timing->get(EVM\PHP\PHPDefinitionKind::kFunction);
		$functionAliases = $timing->get(EVM\PHP\PHPDefinitionKind::kFunctionAlias);

		$timing = new EVM\EVMTimingStatistics(
			enums           : $enums,
			interfaces      : $interfaces,
			classes         : $classes,
			constants       : $constants,
			functions       : $functions,
			functionAliases : $functionAliases
		);

		$index = $this->phpManualIndex;

		$statistics = new EVM\EVMStatistics(
			timing                 : $timing,
			nLoadedNamespaces      : \count($index->getNamespaces()),
			nLoadedEnums           : \count($index->getEnums()),
			nLoadedInterfaces      : \count($index->getInterfaces()),
			nLoadedClasses         : \count($index->getClasses()),
			nLoadedConstants       : \count($index->getConstants()),
			nLoadedFunctions       : \count($index->getFunctions()),
			nLoadedFunctionAliases : \count($index->getFunctionAliases())
		);

		return new EVM\EVMLoadResult($statistics, $this->phpManual);
	}
}
