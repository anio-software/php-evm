<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPUnionType implements PHPType {
	public array $members;

	public function __construct(
		PHPType $type, PHPType ...$types
	) {
		$this->members = [$type, ...$types];
	}

	public function jsonSerialize(): mixed {
		return [
			"typeKind" => "UnionType",
			"members"  => $this->members
		];
	}

	public function key(): string {
		return "union:tbd";
	}
}
