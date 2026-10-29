<?php

namespace AnioSoftware\EVM\XML;

final class InternalVisitContext {
	readonly public \Closure $visitor;

	public function __construct(callable $visitor) {
		$this->visitor = \Closure::fromCallable($visitor);
	}
}

function visitDescendantsImpl(
	\DOMNode $node,
	InternalVisitContext $context,
	string $path,
	int $depth
): ?VisitAction {
	foreach ($node->childNodes as $child) {
		if (!$child instanceof \DOMElement) continue;

		$localName = $child->localName ?? "?";
		$newPath = \strlen($path) ? "$path/".$localName : $localName;
		$visitContext = new VisitContext($newPath, $depth);

		$action = ($context->visitor)($child, $visitContext);

		if ($action === VisitAction::Stop) {
			return $action;
		}

		if ($action === VisitAction::StopDescending) {
			continue;
		}

		if (visitDescendantsImpl($child, $context, $newPath, $depth + 1) === VisitAction::Stop) {
			return VisitAction::Stop;
		}
	}

	return NULL;
}

function visitDescendants(\DOMNode $node, callable $visitor): void {
	visitDescendantsImpl($node, new InternalVisitContext($visitor), "", 0);
}
