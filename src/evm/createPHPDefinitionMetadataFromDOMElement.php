<?php

namespace AnioSoftware\EVM;

function createPHPDefinitionMetadataFromDOMElement(
	EVMContext $ctx,
	\DOMElement $el
): PHP\PHPDefinitionMetadata {
	$extensionMembership = Bits\getPHPExtensionMembershipFromDOMElement($el);
	$bookId = Bits\getBookIdFromDOMElement($ctx, $el);

	return new PHP\PHPDefinitionMetadata($extensionMembership, $bookId);
}
