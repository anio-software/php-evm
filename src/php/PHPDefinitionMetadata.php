<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPDefinitionMetadata extends PHPLogicalPropertiesObject {
	public function __construct(
		public PHPExtensionMembership $extensionMembership,
		public ?string $bookId = NULL
	) {}

	protected function provideLogicalProperties(): array {
		return [
			PHPLogicalProperty::kDefinitionMetadataExtensionMembership->value => $this->extensionMembership,
			PHPLogicalProperty::kDefinitionMetadataBookId->value              => $this->bookId
		];
	}
}
