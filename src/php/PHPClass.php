<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPClass extends PHPReference {
	private function __construct(
		string $referenceId,
		public string $className
	) {
		parent::__construct($referenceId);
	}

	static public function create(
		string $referenceId,
		string $className
	): self {
		return new self($referenceId, $className);
	}
}
