<?php

namespace AnioSoftware\EVM\XML;

interface DOMSelector {
	public function matches(\DOMNode $node): bool;
}
