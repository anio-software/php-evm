<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

function findPHPDocInstruction(
	\DOMElement $root
): ?\DOMProcessingInstruction {
	$phpDocInstruction = NULL;

	EVM\XML\visitParents(
		$root,
		static function(\DOMNode $node) use (&$phpDocInstruction) {
			return EVM\XML\visitSiblings(
				$node,
				static function(\DOMNode $node) use (&$phpDocInstruction) {
					if (!$node instanceof \DOMProcessingInstruction) {
						return;
					} else if ($node->target !== "phpdoc") {
						return;
					}

					$phpDocInstruction = $node;

					return EVM\XML\VisitAction::Stop;
				},
				false
			) ? EVM\XML\VisitAction::Stop : NULL;
		}
	);

	return $phpDocInstruction;
}
