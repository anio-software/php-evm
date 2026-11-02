<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPInterface extends PHPDefinition {
	private function __construct(
		PHPDefinitionMetadata $metadata,
		PHPNamespace $namespace,
		string $referenceId,
		string $name
	) {
		parent::__construct($metadata, $namespace, $referenceId, $name);
	}

	public function getDefinitionKind(): PHPDefinitionKind {
		return PHPDefinitionKind::kInterface;
	}

	static public function create(
		PHPDefinitionMetadata $metadata,
		PHPNamespace $namespace,
		string $referenceId,
		string $name
	): self {
		return new self($metadata, $namespace, $referenceId, $name);
	}
}
