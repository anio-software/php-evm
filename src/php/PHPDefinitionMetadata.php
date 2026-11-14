<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPDefinitionMetadata implements \JsonSerializable {
	public function __construct(
		public PHPExtensionMembership $extensionMembership,
		public ?string $bookId = NULL
	) {}

	//public function jsonSerialize(): mixed {}
}
