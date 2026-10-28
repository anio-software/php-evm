<?php

namespace AnioSoftware\EVM\XML;

function select(
	\DOMNode $node,
	DOMSelector $sel,
	int $maxDepth = -1,
	bool $stopOnMatch = false
): array {
	$ret = [];

	visit(
		$node,
		static function(\DOMElement $child, VisitContext $ctx)
		use ($maxDepth, $sel, &$ret, $stopOnMatch) {
			if ($sel->matches($child)) {
				$ret[] = $child;

				if ($stopOnMatch) {
					return VisitAction::Stop;
				}
			}

			if ($maxDepth >= 0 && $ctx->depth >= $maxDepth) {
				return VisitAction::SkipChildren;
			}
		}
	);

	return $ret;
}
