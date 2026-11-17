<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPLogicalPropertySetArrayOptions {
	public function __construct(
		public bool $resolveParents = false,
		public string $logicalPropertyPrefix = "#",
		public string $inheritedPropertyPrefix = "@"
	) {}

	public function withResolveParents(bool $value): self {
		return new self(
			$value,
			$this->logicalPropertyPrefix,
			$this->inheritedPropertyPrefix
		);
	}

	public function withLogicalPropertyPrefix(string $prefix): self {
		return new self(
			$this->resolveParents,
			$prefix,
			$this->inheritedPropertyPrefix
		);
	}

	public function withInheritedPropertyPrefix(string $prefix): self {
		return new self(
			$this->resolveParents,
			$this->logicalPropertyPrefix,
			$prefix
		);
	}

	static public function defaults(): self {
		static $instance = NULL;

		return $instance ??= new self;
	}

	static public function canonicalFormat(): self {
		static $instance = NULL;

		return $instance ??= new self(
			resolveParents          : true,
			logicalPropertyPrefix   : "#",
			inheritedPropertyPrefix : "@"
		);
	}
}
