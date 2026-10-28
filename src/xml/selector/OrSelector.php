<?php

namespace AnioSoftware\EVM\XML;

readonly class OrSelector implements DOMSelector {
	private array $selectors;

	public function __construct(DOMSelector $sel1, DOMSelector ...$args) {
		$this->selectors = [$sel1, ...$args];
	}

	public function matches(\DOMNode $node): bool {
		foreach ($this->selectors as $sel) {
			if ($sel->matches($node)) {
				return true;
			}
		}

		return false;
	}
}
