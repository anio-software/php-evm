<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPIntersectionType implements PHPTypeCollection {
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

	public function getTypeKey(): string {
		return getTypeCollectionKey($this);
	}

	public function getTypeCollectionKind(): PHPTypeCollectionKind {
		return PHPTypeCollectionKind::Intersection;
	}

	public function getTypeMembers(): array {
		return $this->members;
	}

	public function getTypeOperator(): PHPTypeOperator {
		return PHPTypeOperator::Ampersand;
	}
}
