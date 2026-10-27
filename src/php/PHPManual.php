<?php

namespace AnioSoftware\X2J\PHP;

use AnioSoftware\X2J\XML as XML;

final class PHPManual implements \JsonSerializable {
	readonly private PHPNamespace $globalNamespace;

	public function __construct(
		private string $xmlIdNamespace,
		private string $docbookNamespace
	) {
		$this->globalNamespace = new PHPNamespace("", NULL);
	}

	public function getGlobalNamespace(): PHPNamespace {
		return $this->globalNamespace;
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
		return new XML\TagSelector($this->docbookNamespace, $tagName);
	}

	public function refIdSelectorFactory(): XML\DOMSelector {
		return new XML\AttributeSelector($this->xmlIdNamespace, "id");
	}

	public function getRefIdAttribute(\DOMElement $el): string {
		return $el->getAttributeNS($this->xmlIdNamespace, "id");
	}

	public function jsonSerialize(): mixed {
		return [
			"globalNamespace" => $this->globalNamespace
		];
	}
}
