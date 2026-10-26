<?php

namespace AnioSoftware\X2J\PHP;

function isNullableType(PHPType $type): bool {
	if ($type->isEqualTo(PHPBuiltinTypeKind::Mixed->toType())) {
		return true;
	} else if ($type->isEqualTo(PHPBuiltinTypeKind::Null->toType())) {
		return true;
	}

	if ($type instanceof PHPUnionType) {
		foreach ($type->getTypeMembers() as $member) {
			if (isNullableType($member)) {
				return true;
			}
		}
	}

	return false;
}
