<?php

namespace AnioSoftware\X2J\XML;

final class InternalVisitContext {
	readonly public \Closure $visitor;

	public function __construct(callable $visitor) {
		$this->visitor = \Closure::fromCallable($visitor);
	}
}

function visitImpl(
	\DOMNode $node,
	InternalVisitContext $context,
	string $path,
	int $depth
): ?VisitAction {
	foreach ($node->childNodes as $child) {
		if (!$child instanceof \DOMElement) continue;

		$localName = $child->localName ?? "?";
		$newPath = \strlen($path) ? "$path/".$localName : $localName;

		$action = ($context->visitor)($child, new VisitContext($newPath, $depth));

		if ($action === VisitAction::Stop) {
			return $action;
		}

		if ($action === VisitAction::SkipChildren) {
			continue;
		}

		if (visitImpl($child, $context, $newPath, $depth + 1) === VisitAction::Stop) {
			return VisitAction::Stop;
		}
	}

	return NULL;
}

function visit(\DOMNode $node, callable $visitor): void {
	visitImpl($node, new InternalVisitContext($visitor), "", 0);
}
