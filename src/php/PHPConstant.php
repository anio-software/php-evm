<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPConstant extends PHPDefinition {
	private function __construct(
		PHPDefinitionMetadata $metadata,
		PHPNamespace $namespace,
		string $referenceId,
		string $name
	) {
		parent::__construct(
			PHPDefinitionKind::kConstant,
			$metadata,
			$namespace,
			$referenceId,
			$name
		);
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
