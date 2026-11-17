<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPDefinitionMetadata extends PHPLogicalObject {
	public function __construct(
		public PHPExtensionMembership $extensionMembership,
		public ?string $bookId = NULL
	) {}

	protected function provideLogicalProperties(): PHPLogicalPropertySet {
		return PHPLogicalPropertySet::create(
			NULL, PHPLogicalPropertyGroup::kDefinitionMetadata
		)
		->withProperty(PHPLogicalProperty::kDefinitionMetadataExtensionMembership, $this->extensionMembership)
		->withProperty(PHPLogicalProperty::kDefinitionMetadataBookId             , $this->bookId);
	}
}
