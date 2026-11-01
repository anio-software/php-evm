<?php

namespace AnioSoftware\EVM\XML;

readonly class MatchAllSelector implements DOMSelector {
	public function matches(\DOMNode $node): bool {
		return true;
	}
}
