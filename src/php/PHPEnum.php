<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPEnum extends PHPDefinition {
	private function __construct(
		PHPNamespace $namespace,
		string $referenceId,
		string $name
	) {
		parent::__construct($namespace, $referenceId, $name);
	}

	public function getDefinitionKind(): PHPDefinitionKind {
		return PHPDefinitionKind::kEnum;
	}

	static public function create(
		PHPNamespace $namespace,
		string $referenceId,
		string $name
	): self {
		return new self($namespace, $referenceId, $name);
	}
}
