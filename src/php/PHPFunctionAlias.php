<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPFunctionAlias extends PHPDefinition {
	private function __construct(
		PHPNamespace $namespace,
		string $referenceId,
		string $name,
		public string $originalName
	) {
		parent::__construct($namespace, $referenceId, $name);
	}

	public function getDefinitionKind(): PHPDefinitionKind {
		return PHPDefinitionKind::kFunctionAlias;
	}

	static public function create(
		PHPNamespace $namespace,
		string $referenceId,
		string $name,
		string $originalName
	): self {
		return new self($namespace, $referenceId, $name, $originalName);
	}

	public function jsonSerialize(): mixed {
		return [
			...parent::jsonSerialize(),
			"originalName" => $this->originalName
		];
	}
}
