<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPIntersectionType extends PHPTypeCollection {
	public function __construct(
		PHPType $type, PHPType ...$types
	) {
		parent::__construct($type, ...$types);
	}

	public function getTypeKind(): PHPTypeKind {
		return PHPTypeKind::kIntersection;
	}

	public function getTypeOperator(): PHPTypeOperator {
		return PHPTypeOperator::kAmpersand;
	}

	public function isRepresentableInCode(): bool {
		if (!parent::isRepresentableInCode()) {
			return false;
		}

		return true; // tbd
	}

	public function toNullable(): PHPType {
		return new PHPUnionType(
			$this, PHPBuiltinTypeKind::kNull->toType()
		);
	}
}
