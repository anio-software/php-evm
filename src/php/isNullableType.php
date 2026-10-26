<?php

namespace AnioSoftware\X2J\PHP;

function isNullableType(PHPType $type): bool {
	if ($type === PHPBuiltinType::Mixed || $type === PHPBuiltinType::Null) {
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
