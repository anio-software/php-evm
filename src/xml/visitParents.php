<?php

namespace AnioSoftware\EVM\XML;

function visitParents(\DOMNode $node, callable $visitor): bool {
	$current = $node->parentNode;

	while ($current) {
		$action = ($visitor)($current);

		if ($action === VisitAction::Stop) {
			return true;
		}

		$current = $current->parentNode;
	}

	return false;
}
