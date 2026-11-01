<?php

namespace AnioSoftware\EVM\XML;

function visitDescendantsImpl(
): ?VisitAction {
	return NULL;
}

function visitDescendants(\DOMNode $node, callable $visitor): void {
	visitDescendantsImpl();
}
