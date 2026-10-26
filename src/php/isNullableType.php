<?php

namespace AnioSoftware\X2J\PHP;

function isNullableType(PHPType $type): bool {
	if ($type->isBuiltinType(PHPBuiltinTypeKind::Mixed)) {
		return true;
	} else if ($type->isBuiltinType(PHPBuiltinTypeKind::Null)) {
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
