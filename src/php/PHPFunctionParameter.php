<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPFunctionParameter {
	private function __construct(
		public string $name,
		public PHPType $type,
		public bool $isReference,
		public bool $isOptional,
		public string|null $initializer,
		public bool $isVariadic
	) {}

	static public function create(
		string $name,
		PHPType $type,
		bool $isReference,
		string|null $initializer = NULL,
		bool $isVariadic = false
	): self {
		$isOptional = $initializer !== NULL;

		// only make type nullable when initializer is NULL
		if ($isOptional && \strtolower($initializer) === "null") {
			$type = makePHPTypeNullable($type);
		}

		return new self(
			$name,
			$type,
			$isReference,
			$isOptional,
			$initializer,
			$isVariadic
		);
	}
}
