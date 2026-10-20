<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPFunctionAlias extends PHPReference implements \JsonSerializable {
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

	public function jsonSerialize(): mixed {
		return [
			"referenceId"  => $this->referenceId,
			"name"         => $this->name,
			"originalName" => $this->originalName
		];
	}
}
