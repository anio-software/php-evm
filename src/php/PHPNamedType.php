<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPNamedType implements PHPType {
	public function __construct(
		public string $name
	) {}

	public function jsonSerialize(): mixed {
		return [
			"typeKind" => "NamedType",
			"name"     => $this->name
		];
	}

	public function getTypeId(): string {
		return "named:".$this->name;
	}

	public function render(): string {
		return "\\".$this->name;
	}
}
