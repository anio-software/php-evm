<?php

namespace AnioSoftware\X2J\PHP;

function makePHPTypeNullable(PHPType $type): PHPType {
	if (isNullablePHPType($type)) {
		return $type;
	}

	if ($type instanceof PHPUnionType) {
		return new PHPUnionType(
			PHPBuiltinType::Null, ...$type->members
		);
	}

	return new PHPUnionType(PHPBuiltinType::Null, $type);
}
