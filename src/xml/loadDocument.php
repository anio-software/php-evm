<?php

namespace AnioSoftware\EVM\XML;

function loadDocument(string $filePath): \DOMDocument {
	$doc = new \DOMDocument;

	if (!@$doc->load($filePath)) {
		throw new \RuntimeException("Unable to parse XML file '$filePath'.");
	}

	return $doc;
}
