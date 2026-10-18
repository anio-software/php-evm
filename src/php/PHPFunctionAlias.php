<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPFunctionAlias extends PHPReference {
	private function __construct(
		string $referenceId,
		public string $name,
		public string $originalName
	) {
		parent::__construct($referenceId);
	}

	static public function create(
		string $referenceId,
		string $name,
		string $originalName
	): self {
		return new self($referenceId, $name, $originalName);
	}
}
