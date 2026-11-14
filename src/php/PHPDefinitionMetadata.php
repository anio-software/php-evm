<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPDefinitionMetadata extends PHPLogicalPropertiesObject {
	public function __construct(
		public PHPExtensionMembership $extensionMembership,
		public ?string $bookId = NULL
	) {}

	//public function jsonSerialize(): mixed {}
}
