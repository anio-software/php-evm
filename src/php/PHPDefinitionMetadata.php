<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPDefinitionMetadata extends PHPLogicalObject {
	public function __construct(
		public PHPExtensionMembership $extensionMembership,
		public ?string $bookId = NULL
	) {}

	public function getLogicalProperties(): PHPLogicalPropertySet {
		return PHPLogicalPropertySetBuilder::create(
			NULL, PHPLogicalPropertyDomain::kDefinitionMetadata
		)
		->withProperty(PHPLogicalProperty::kDefinitionMetadataExtensionMembership, $this->extensionMembership)
		->withProperty(PHPLogicalProperty::kDefinitionMetadataBookId             , $this->bookId)
		->finalize();
	}
}
