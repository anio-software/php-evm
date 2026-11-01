<?php

namespace AnioSoftware\EVM\XML;

// This DOMSelector selects a specific dom tag like <body>
readonly class ElementSelector implements DOMSelector {
	public function __construct(
		public string|null $ns,
		public string $tagName
	) {}

	public function matches(\DOMNode $node): bool {
		if (!$node instanceof \DOMElement) return false;
		if ($node->namespaceURI !== $this->ns) return false;

		return $node->localName === $this->tagName;
	}
}
