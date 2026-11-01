<?php

namespace AnioSoftware\EVM\XML;

// This DOMSelector selects a specific dom tag like <body>
readonly class ElementSelector implements DOMSelector {
	private NamespaceMatcher $nsMatcher;

	public function __construct(
		?NamespaceMatcher $nsMatcher,
		public string $tagName
	) {
		$this->nsMatcher = $nsMatcher ?? NamespaceMatcher::any();
	}

	public function matches(\DOMNode $node): bool {
		if (!$node instanceof \DOMElement) return false;
		if (!$this->nsMatcher->matchesDOMElement($node)) return false;

		return $node->localName === $this->tagName;
	}
}
