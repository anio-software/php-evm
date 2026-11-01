<?php

namespace AnioSoftware\EVM\XML;

function visitDescendantsImpl(
	\DOMNode $node,
	InternalVisitContext $context,
	string $path,
	int $depth
): ?VisitAction {
	return NULL;
}

function visitDescendants(\DOMNode $node, callable $visitor): void {
	visitDescendantsImpl($node, new InternalVisitContext($visitor), "", 0);
}
