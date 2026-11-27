<?php

namespace AnioSoftware\EVM\XML;

final readonly class ElementAncestrySelector implements DOMSelector {
	public function __construct(
		public \DOMElement $root,
		public array $selectorChain
	) {}

	private function getAncestorChain(\DOMElement $element): array|false {
		$chain   = [];
		$current = $element;

		while ($current) {
			$chain[] = $current;

			$current = $current->parentElement;

			if ($current === $this->root) {
				return \array_reverse($chain);
			}
		}

		return false;
	}

	public function matches(\DOMNode $node): bool {
		if (!($node instanceof \DOMElement)) {
			return false;
		}

		$chain = $this->getAncestorChain($node);

		if ($chain === false) {
			return false;
		} else if (\count($chain) !== \count($this->selectorChain)) {
			return false;
		}

		for ($i = 0; $i < \count($chain); ++$i) {
			if (!$this->selectorChain[$i]->matches($chain[$i])) {
				return false;
			}
		}

		return true;
	}
}
