<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

final class LoaderInstance extends EVM\EVMLoaderInstance {
	readonly public EVM\PHP\PHPNamespace $phpGlobalNamespace;
	readonly public EVM\PHP\PHPManual $phpManual;
	readonly public \DOMDocument $domDocument;
	private ?EVM\PHP\PHPManualIndex $phpManualIndex = NULL;
	private array $xmlElementsCache = [];

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
		$this->xmlElementsCache = [];

		foreach ($this->loader->getPHPDefinitionXMLMappings()->entries() as [, $value]) {
			if (!\array_key_exists($value->tagName, $this->xmlElementsCache)) {
				$this->xmlElementsCache[$value->tagName] = [];
			}

			$arr = &$this->xmlElementsCache[$value->tagName];

			if (!\array_key_exists($value->referenceIdPrefix, $arr)) {
				$arr[$value->referenceIdPrefix] = NULL;
			}
		}

		$this->domDocument = EVM\XML\loadDocument($loader->manualPath);
	}

	public function getPHPDefinitionXMLMappingForKind(
		EVM\PHP\PHPDefinitionKind $kind
	): PHPDefinitionXMLMapping {
		return $this->loader->getPHPDefinitionXMLMappings()->get($kind);
	}

	public function &getXMLElementsCacheForMapping(PHPDefinitionXMLMapping $mapping): ?array {
		return $this->xmlElementsCache[$mapping->tagName][$mapping->referenceIdPrefix];
	}

	public function updateIndex(): void {
		$this->phpManualIndex = $this->phpManual->buildIndex();
	}

	public function load(): EVM\EVMLoadResult {
		$enums           = loadDefinitions(EVM\PHP\PHPDefinitionKind::kEnum, $this);
		$interfaces      = loadDefinitions(EVM\PHP\PHPDefinitionKind::kInterface, $this);
		$classes         = loadDefinitions(EVM\PHP\PHPDefinitionKind::kClass, $this);
		$constants       = loadDefinitions(EVM\PHP\PHPDefinitionKind::kConstant, $this);
		$functions       = loadDefinitions(EVM\PHP\PHPDefinitionKind::kFunction, $this);
		$functionAliases = loadDefinitions(EVM\PHP\PHPDefinitionKind::kFunctionAlias, $this);
		$total = $enums + $interfaces + $classes + $constants + $functions + $functionAliases;

		$timing = new EVM\EVMTimingStatistics(
			enums           : $enums,
			interfaces      : $interfaces,
			classes         : $classes,
			constants       : $constants,
			functions       : $functions,
			functionAliases : $functionAliases,
			total           : $total
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
