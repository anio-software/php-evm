<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPEnum extends PHPReference {
	private function __construct(
		string $referenceId,
		public string $enumName
	) {
		parent::__construct($referenceId);
	}

	static public function create(
		string $referenceId,
		string $enumName
	): self {
		return new self($referenceId, $enumName);
	}
}
