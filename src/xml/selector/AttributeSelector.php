<?php

namespace AnioSoftware\EVM\XML;

// This DOMSelector selects a specific attribute like the id attribute in <div id="something">
readonly class AttributeSelector implements DOMSelector {
	public function __construct(
		public string|null $ns,
		public string $name,
		public ?string $value = NULL
	) {}

	public function matches(\DOMNode $node): bool {
		if (!$node instanceof \DOMElement) return false;

		foreach ($node->attributes as $attribute) {
			if ($attribute->localName !== $this->name) {
				continue;
			}

			if ($attribute->namespaceURI !== $this->ns) {
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
