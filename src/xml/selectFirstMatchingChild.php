<?php

namespace AnioSoftware\X2J\XML;

function selectFirstMatchingChild(\DOMNode $node, DOMSelector $sel): ?\DOMElement {
	$ret = select($node, $sel, 0, true);

	return \count($ret) ? $ret[0] : NULL;
}
