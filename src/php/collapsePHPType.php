<?php

namespace AnioSoftware\X2J\PHP;

function collapsePHPType(PHPType $type): PHPType {
	if ($type === PHPBuiltinType::Resource) {
		return PHPBuiltinType::Mixed;
	}

	if ($type instanceof PHPUnionType) {
		foreach ($type->members as $member) {
			if (collapsePHPType($member) === PHPBuiltinType::Mixed) {
				return PHPBuiltinType::Mixed;
			}
		}
	}

	return $type;
}
