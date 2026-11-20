<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPDefinitionMetadata implements PHPStructuredObject {
	use PHPStructuredObjectBehavior;

	private PHPLogicalPropertySet $props;

	public function __construct(
		public PHPExtensionMembership $extensionMembership,
		public ?string $bookId = NULL
	) {
		# note: make sure to initialize this property last
		$this->props = PHPLogicalPropertySetBuilder::create(
			NULL, PHPLogicalPropertyDomain::kDefinitionMetadata
		)
		->withProperty(PHPLogicalProperty::kDefinitionMetadataExtensionMembership, $this->extensionMembership)
		->withProperty(PHPLogicalProperty::kDefinitionMetadataBookId             , $this->bookId)
		->finalize();
	}

	public function getLogicalPropertySet(): PHPLogicalPropertySet {
		return $this->props;
	}
}
