<?php

namespace AnioSoftware\EVM\Bits;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\PHP as PHP;

function createPHPDefinitionMetadataFromDOMElement(
	EVM\EVMContext $ctx,
	\DOMElement $el
): PHP\PHPDefinitionMetadata {
	$extensionMembership = getPHPExtensionMembershipFromDOMElement($el);
	$bookId = getBookIdFromDOMElement($ctx, $el);

	return new PHP\PHPDefinitionMetadata($extensionMembership, $bookId);
}
