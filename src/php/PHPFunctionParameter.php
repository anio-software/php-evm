<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPFunctionParameter {
	private function __construct(
		public string $name,
		public PHPType $type,
		public bool $isReference,
		public bool $isOptional,
		public string|null $initializer
	) {}

	static public function create(
		string $name,
		PHPType $type,
		bool $isReference,
		string|null $initializer = NULL
	): self {
		$isOptional = $initializer !== NULL;

		if ($isOptional && !isNullablePHPType($type)) {
			$type = makePHPTypeNullable($type);
		}

		return new self($name, $type, $isReference, $isOptional, $initializer);
	}
}
