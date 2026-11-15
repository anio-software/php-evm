<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPDefinitionMetadata extends PHPLogicalPropertiesObject {
	public function __construct(
		public PHPExtensionMembership $extensionMembership,
		public ?string $bookId = NULL
	) {}

	public function getLogicalPropertyGroup(): PHPLogicalPropertyGroup {
		return PHPLogicalPropertyGroup::kDefinitionMetadata;
	}

	protected function provideLogicalProperties(): array {
		return [
			PHPLogicalProperty::kDefinitionMetadataExtensionMembership->value => $this->extensionMembership,
			PHPLogicalProperty::kDefinitionMetadataBookId->value              => $this->bookId
		];
	}
}
