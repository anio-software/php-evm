<?php

namespace AnioSoftware\EVM;

function getPHPDocAttribute(
	\DOMProcessingInstruction $instruction,
	string $name
): ?string {
	$dom = new \DOMDocument();
	$fragment = $dom->createDocumentFragment();

	if (!$fragment->appendXML("<phpdoc {$instruction->data}/>")) {
		return NULL;
	}

	$parsed = $fragment->firstChild;

	if (!($parsed instanceof \DOMElement)) {
		return NULL;
	} else if (!$parsed->hasAttribute($name)) {
		return NULL;
	}

	return $parsed->getAttribute($name);
}
