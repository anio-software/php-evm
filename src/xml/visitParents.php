<?php

namespace AnioSoftware\EVM\XML;

function visitParents(\DOMNode $node, callable $visitor): void {
	$current = $node->parentNode;

	while ($current) {
		$action = ($visitor)($current);

		if ($action === VisitAction::Stop) {
			return;
		}

		$current = $current->parentNode;
	}
}
