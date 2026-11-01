<?php

namespace AnioSoftware\EVM\XML;

// This DOMSelector selects a specific attribute like the id attribute in <div id="something">
readonly class AttributeSelector implements DOMSelector {
	private NamespaceMatcher $nsMatcher;

	public function __construct(
		?NamespaceMatcher $nsMatcher = NULL,
		public ?string $name = NULL,
		public ?string $value = NULL
	) {
		$this->nsMatcher = $nsMatcher ?? NamespaceMatcher::any();
	}

	public function matches(\DOMNode $node): bool {
		if (!$node instanceof \DOMElement) return false;

		foreach ($node->attributes as $attribute) {
			if (!$this->nsMatcher->matchesDOMAttr($attribute)) {
				continue;
			}

			// match name
			if ($this->name !== NULL) {
				if ($attribute->localName !== $this->name) {
					continue;
				}
			}

			// match value
			if ($this->value !== NULL) {
				if ($attribute->value !== $this->value) {
					continue;
				}
			}

			// it's a match
			return true;
		}

		return false;
	}
}
