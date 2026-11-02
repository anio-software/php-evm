<?php

namespace AnioSoftware\EVM;

function createPHPDefinitionMetadataFromDOMElement(
	EVMContext $ctx,
	\DOMElement $el
): PHP\PHPDefinitionMetadata {
	$extensionMembership = getPHPExtensionMembershipFromDOMElement($el);

	return new PHP\PHPDefinitionMetadata(
		$extensionMembership, NULL
	);
}
