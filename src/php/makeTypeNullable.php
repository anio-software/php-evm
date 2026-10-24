<?php

namespace AnioSoftware\X2J\PHP;

function makeTypeNullable(PHPType $type): PHPType {
	if (isNullableType($type)) {
		return $type;
	}

	if ($type instanceof PHPUnionType) {
		return new PHPUnionType(
			PHPBuiltinType::Null, ...$type->members
		);
	}

	return new PHPUnionType(PHPBuiltinType::Null, $type);
}
