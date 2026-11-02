<?php

namespace AnioSoftware\EVM;

function createPHPDefinitionMetadataFromDOMElement(
	EVMContext $ctx,
	\DOMElement $el
): PHP\PHPDefinitionMetadata {
	$extensionMembership = getPHPExtensionMembershipFromDOMElement($el);
	$bookId = getBookIdFromDOMElement($ctx, $el);

	return new PHP\PHPDefinitionMetadata($extensionMembership, $bookId);
}
