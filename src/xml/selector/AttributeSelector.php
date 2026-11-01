<?php

namespace AnioSoftware\EVM\XML;

// This DOMSelector selects a specific attribute like the id attribute in <div id="something">
readonly class AttributeSelector implements DOMSelector {
	private NamespaceMatcher $nsMatcher;

	public function __construct(
		?NamespaceMatcher $nsMatcher,
		public string $name,
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

			if ($attribute->localName !== $this->name) {
				continue;
			}

			if ($this->value === NULL) {
				return true;
			}

			return $this->value === $attribute->value;
		}

		return false;
	}
}
