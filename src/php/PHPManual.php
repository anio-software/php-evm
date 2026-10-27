<?php

namespace AnioSoftware\X2J\PHP;

use AnioSoftware\X2J\XML as XML;

final class PHPManual implements \JsonSerializable {
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
		return [];
	}
}
