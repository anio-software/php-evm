<?php

namespace AnioSoftware\X2J\PHP;

use AnioSoftware\X2J\XML as XML;

final class PHPManual implements \JsonSerializable {
	public function __construct(
		readonly private PHPNamespace $globalNamespace,
		readonly private string $xmlIdNamespace,
		readonly private string $docBookNamespace
	) {}

	public function getGlobalNamespace(): PHPNamespace {
		return $this->globalNamespace;
	}

	public function getDefinitionsOfKind(PHPDefinitionKind $kind): array {
		$arr = [];

		visitNamespace(
			$this->globalNamespace,
			static function($node) use ($kind, &$arr): void {
				if (!($node instanceof PHPDefinition)) {
					return;
				} else if ($node->getDefinitionKind() !== $kind) {
					return;
				}

				$arr[] = $node;
			},
			PHPNamespaceVisitFlags::VisitAll
		);

		return $arr;
	}

	public function getClasses(): array {
		return $this->getDefinitionsOfKind(PHPDefinitionKind::kClass);
	}

	public function getInterfaces(): array {
		return $this->getDefinitionsOfKind(PHPDefinitionKind::kInterface);
	}

	public function getEnums(): array {
		return $this->getDefinitionsOfKind(PHPDefinitionKind::kEnum);
	}

	public function getConstants(): array {
		return $this->getDefinitionsOfKind(PHPDefinitionKind::kConstant);
	}

	public function getFunctions(): array {
		return $this->getDefinitionsOfKind(PHPDefinitionKind::kFunction);
	}

	public function getFunctionAliases(): array {
		return $this->getDefinitionsOfKind(PHPDefinitionKind::kFunctionAlias);
	}

	public function getOrCreateNamespace(string $path): PHPNamespace {
		if ($path === "") {
			return $this->globalNamespace;
		}

		$currentNamespace = $this->globalNamespace;

		foreach (\explode("\\", $path) as $piece) {
			$namespaces = $currentNamespace->getNamespaces();

			if (\array_key_exists($piece, $namespaces)) {
				$currentNamespace = $namespaces[$piece];
			} else {
				$newNamespace = new PHPNamespace($piece, $currentNamespace);

				$currentNamespace->addNamespace($newNamespace);
				$currentNamespace = $newNamespace;
			}
		}

		return $currentNamespace;
	}

	public function parseQualifiedName(string $name): array {
		if (\str_starts_with($name, "\\")) {
			$name = \substr($name, 1);
		}

		$parts = \explode("\\", $name);
		$localName = \array_pop($parts);

		return [
			"localName" => $localName,
			"namespace" => \implode("\\", $parts)
		];
	}

	public function tagSelectorFactory(string $tagName): XML\DOMSelector {
		return new XML\TagSelector($this->docBookNamespace, $tagName);
	}

	public function refIdSelectorFactory(): XML\DOMSelector {
		return new XML\AttributeSelector($this->xmlIdNamespace, "id");
	}

	public function getRefIdAttribute(\DOMElement $el): string {
		return $el->getAttributeNS($this->xmlIdNamespace, "id");
	}

	public function getElementsWithReferenceIdAttribute(
		\DOMDocument $doc,
		string $docBookTagName
	): array {
		return XML\select(
			$doc->documentElement,
			new XML\AndSelector(
				$this->tagSelectorFactory($docBookTagName),
				$this->refIdSelectorFactory()
			)
		);
	}

	public function jsonSerialize(): mixed {
		return [
			"globalNamespace" => $this->globalNamespace
		];
	}
}
