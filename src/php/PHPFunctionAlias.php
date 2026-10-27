<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPFunctionAlias extends PHPDefinition implements \JsonSerializable {
	private function __construct(
		PHPNamespace $namespace,
		string $referenceId,
		string $name,
		public string $originalName
	) {
		parent::__construct($namespace, $referenceId, $name);
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
			"referenceId"  => $this->referenceId,
			"name"         => $this->name,
			"originalName" => $this->originalName
		];
	}
}
