<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPConstant extends PHPReference implements \JsonSerializable {
	private function __construct(
		string $referenceId,
		public string $name
	) {
		parent::__construct($referenceId);
	}

	static public function create(
		string $referenceId,
		string $name
	): self {
		return new self($referenceId, $name);
	}

	public function jsonSerialize(): mixed {
		return [
			"referenceId" => $this->referenceId,
			"name"        => $this->name
		];
	}
}
