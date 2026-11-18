<?php

namespace AnioSoftware\EVM\Bits;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\XML as XML;

function getBookIdFromDOMElement(
	EVM\EVMContext $ctx,
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
