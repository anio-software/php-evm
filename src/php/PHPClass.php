<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPClass extends PHPDefinition {
	private function __construct(
		PHPNamespace $namespace,
		string $referenceId,
		string $name
	) {
		parent::__construct($namespace, $referenceId, $name);
	}

	static public function create(
		PHPNamespace $namespace,
		string $referenceId,
		string $name
	): self {
		return new self($namespace, $referenceId, $name);
	}
}
