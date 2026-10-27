<?php

namespace AnioSoftware\X2J\PHP;

use AnioSoftware\X2J\XML as XML;

final class PHPManual implements \JsonSerializable {
	readonly private PHPNamespace $globalNamespace;

	public function __construct() {
		$this->globalNamespace = PHPNamespace::globalNamespace();
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

	static public function parseQualifiedName(string $name): array {
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

	public const DOCBOOK_NS = "http://docbook.org/ns/docbook";
	public const XMLID_NS   = "http://www.w3.org/XML/1998/namespace";

	static public function tagSelectorFactory(string $tagName): XML\DOMSelector {
		return new XML\TagSelector(self::DOCBOOK_NS, $tagName);
	}

	static public function refIdSelectorFactory(): XML\DOMSelector {
		return new XML\AttributeSelector(self::XMLID_NS, "id");
	}

	static public function getRefIdAttribute(\DOMElement $el): string {
		return $el->getAttributeNS(self::XMLID_NS, "id");
	}

	public function jsonSerialize(): mixed {
		return [
			"globalNamespace" => $this->globalNamespace
		];
	}
}
