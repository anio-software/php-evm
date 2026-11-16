<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPLogicalPropertiesSerializationOptions {
	public function __construct(
		public bool $resolveParents = false,
		public string $logicalPropertyPrefix = "#",
		public string $inheritedPropertyPrefix = "@"
	) {}

	static public function defaults(): self {
		static $instance = NULL;

		return $instance ??= new self;
	}
}
