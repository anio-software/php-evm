<?php

namespace AnioSoftware\EVM\XML;

/**
 * @template T of DOMSelector
 * @param T $sel
 * @return (T is ElementSelector ? \DOMElement|null : (T is AttributeSelector ? \DOMAttr|null : \DOMNode|null))
 */
function selectFirstMatchingDescendant(\DOMNode $node, DOMSelector $sel): ?\DOMNode {
	$ret = select($node, $sel, -1, true);

	return \count($ret) ? $ret[0] : NULL;
}
