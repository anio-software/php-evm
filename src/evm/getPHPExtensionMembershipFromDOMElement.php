<?php

namespace AnioSoftware\EVM\Bits;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\XML as XML;
use AnioSoftware\EVM\PHP as PHP;

function getPHPExtensionMembershipFromDOMElement(
	\DOMElement $element
): PHP\PHPExtensionMembership {
	$membership = NULL;

	XML\visitParents(
		$element,
		static function(\DOMNode $node) use (&$membership) {
			return XML\visitSiblings(
				$node,
				static function(\DOMNode $node) use (&$membership) {
					if (!$node instanceof \DOMProcessingInstruction) {
						return;
					} else if ($node->target !== "phpdoc") {
						return;
					}

					$attributeValue = EVM\getPHPDocAttribute($node, "extension-membership");

					if ($attributeValue === NULL) {
						return;
					}

					$membership = PHP\PHPExtensionMembership::from($attributeValue);

					return XML\VisitAction::Stop;
				},
				false
			) ? XML\VisitAction::Stop : NULL;
		}
	);

	return $membership ?? PHP\PHPExtensionMembership::kUnspecified;
}
