<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPEnum extends PHPDefinition implements \JsonSerializable {
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

	public function jsonSerialize(): mixed {
		return [
			"referenceId" => $this->referenceId,
			"name"        => $this->name
		];
	}
}
