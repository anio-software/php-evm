<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPInterface extends PHPDefinition {
	private function __construct(
		PHPNamespace $namespace,
		string $referenceId,
		public string $name
	) {
		parent::__construct($namespace, $referenceId);
	}

	static public function create(
		PHPNamespace $namespace,
		string $referenceId,
		string $name
	): self {
		return new self($namespace, $referenceId, $name);
	}
}
