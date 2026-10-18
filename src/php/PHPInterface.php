<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPInterface extends PHPReference {
	private function __construct(
		string $referenceId,
		public string $interfaceName
	) {
		parent::__construct($referenceId);
	}

	static public function create(
		string $referenceId,
		string $interfaceName
	): self {
		return new self($referenceId, $interfaceName);
	}
}
