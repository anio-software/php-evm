<?php

namespace AnioSoftware\X2J\XML;

interface DOMSelector {
	public function matches(\DOMNode $node): bool;
}
