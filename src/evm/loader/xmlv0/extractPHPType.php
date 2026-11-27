<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

function extractPHPType(
	LoaderInstance $loaderInstance,
	\DOMElement $root
): ?EVM\PHP\PHPType {
	if ($root->attributes->getNamedItem("class")?->value === "union") {
		$types = [];

		foreach ($root->childNodes as $child) {
			if (!($child instanceof \DOMElement)) continue;
			if ($child->localName !== "type") continue;

			$types[] = extractPHPType($loaderInstance, $child);
		}

		return new EVM\PHP\PHPUnionType(...$types);
	}

	return mapStringToPHPType($loaderInstance, \trim($root->textContent));
}
