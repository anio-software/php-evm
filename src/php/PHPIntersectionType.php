<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPIntersectionType implements PHPType {
	public array $members;

	public function __construct(
		PHPType $type, PHPType ...$types
	) {
		$this->members = [$type, ...$types];
	}

	public function jsonSerialize(): mixed {
		return [
			"typeKind" => "IntersectionType",
			"members"  => $this->members
		];
	}
}
