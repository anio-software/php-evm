<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

final readonly class PHPXMLElementDOMData {
	public function __construct(
		public ?\DOMElement $synopsis,
		public ?\DOMElement $packageSynopsis,
		public ?\DOMElement $book,
		public ?\DOMProcessingInstruction $phpDoc
	) {}
}
