<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPIntersectionType extends PHPTypeCollection {
	public function __construct(
		PHPType $type, PHPType ...$types
	) {
		parent::__construct($type, ...$types);
	}

	public function jsonSerialize(): mixed {
		return [
			"typeKind" => "IntersectionType",
			"members"  => $this->members
		];
	}

	public function getTypeCollectionKind(): PHPTypeCollectionKind {
		return PHPTypeCollectionKind::Intersection;
	}

	public function getTypeOperator(): PHPTypeOperator {
		return PHPTypeOperator::Ampersand;
	}

	public function render(): string {
		return renderTypeCollection($this);
	}
}
