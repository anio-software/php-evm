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
		if (!$node->hasAttributeNS($this->ns, $this->name)) return false;

		if ($this->value === NULL) {
			return true;
		}

		return $node->getAttributeNS($this->ns, $this->name) === $this->value;
	}
}
