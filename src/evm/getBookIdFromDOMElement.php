<?php

namespace AnioSoftware\EVM;

function getBookIdFromDOMElement(
	EVMContext $ctx,
	\DOMElement $el
): ?string {
	$bookId = NULL;
	$matcher = $ctx->manual->elementSelectorFactory("book");

	XML\visitParents(
		$el,
		static function(\DOMNode $node) use ($ctx, $matcher, &$bookId) {
			if (!$matcher->matches($node)) {
				return;
			}

			$bookId = $ctx->manual->getRefIdAttribute($node);

			return XML\VisitAction::Stop;
		}
	);

	return $bookId;
}
