<?php

namespace AnioSoftware\EVM\XML;

function visitSiblings(\DOMNode $node, callable $visitor, bool $forwards = true): bool {
	$getNextSibling = static function(\DOMNode $theNode) use ($forwards) {
		return $forwards ? $theNode->nextSibling : $theNode->previousSibling;
	};

	$current = $getNextSibling($node);

	while ($current) {
		$action = ($visitor)($current);

		if ($action === VisitAction::Stop) {
			return true;
		}

		$current = $getNextSibling($current);
	}

	return false;
}
