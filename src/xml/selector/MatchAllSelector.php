<?php

namespace AnioSoftware\X2J\XML;

readonly class MatchAllSelector implements DOMSelector {
	public function __construct() {}

	public function matches(\DOMNode $node): bool {
		return true;
	}
}
