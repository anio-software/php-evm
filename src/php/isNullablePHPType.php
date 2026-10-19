<?php

namespace AnioSoftware\X2J\PHP;

function isNullablePHPType(PHPType $type): bool {
	if ($type === PHPBuiltinType::Mixed || $type === PHPBuiltinType::Null) {
		return true;
	}

	if ($type instanceof PHPUnionType) {
		foreach ($type->members as $member) {
			if (isNullablePHPType($member)) {
				return true;
			}
		}
	}

	return false;
}
