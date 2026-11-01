<?php

namespace AnioSoftware\EVM\XML;

function visitDescendantsImpl(
	\DOMNode $parent,
	\Closure $visitor,
	VisitContext $context
): ?VisitAction {
	if ($parent instanceof \DOMElement) {
		$context = $context->descend($parent);
	}

	foreach ($parent->childNodes as $child) {
		$action = ($visitor)($child, $context);

		if ($action === VisitAction::Stop) {
			return VisitAction::Stop;
		}

		if ($action === VisitAction::StopDescending) {
			continue;
		}

		if (visitDescendantsImpl($child, $visitor, $context) === VisitAction::Stop) {
			return VisitAction::Stop;
		}
	}

	return NULL;
}

function visitDescendants(\DOMNode $node, callable $visitor): void {
	visitDescendantsImpl(
		$node,
		\Closure::fromCallable($visitor),
		new VisitContext(0, "")
	);
}
