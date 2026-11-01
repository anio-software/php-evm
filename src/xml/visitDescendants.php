<?php

namespace AnioSoftware\EVM\XML;

function visitDescendantsImpl(
	\DOMNode $parent,
	\Closure $visitor,
	VisitContext $context
): ?VisitAction {
	return NULL;
}

function visitDescendants(\DOMNode $node, callable $visitor): void {
	visitDescendantsImpl(
		$node,
		\Closure::fromCallable($visitor),
		new VisitContext(0, "")
	);
}
