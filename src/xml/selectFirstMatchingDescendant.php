<?php

namespace AnioSoftware\EVM\XML;

function selectFirstMatchingDescendant(\DOMNode $node, DOMSelector $sel): ?\DOMElement {
	$ret = select($node, $sel, -1, true);

	return \count($ret) ? $ret[0] : NULL;
}
