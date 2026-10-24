<?php

namespace AnioSoftware\X2J\PHP;

function collapseType(PHPType $type): PHPType {
	if ($type === PHPBuiltinType::Resource) {
		return PHPBuiltinType::Mixed;
	}

	if ($type instanceof PHPUnionType) {
		foreach ($type->members as $member) {
			if (collapseType($member) === PHPBuiltinType::Mixed) {
				return PHPBuiltinType::Mixed;
			}
		}
	}

	return $type;
}
