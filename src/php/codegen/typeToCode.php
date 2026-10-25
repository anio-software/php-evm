<?php

namespace AnioSoftware\X2J\PHP;

function unionToNullableTypeStringInt(PHPUnionType $type): string|false {
	if (\count($type->members) !== 2) {
		return false;
	}

	$nullIndex = \array_search(PHPBuiltinType::Null, $type->members, true);

	if ($nullIndex === false) {
		return false;
	}

	$otherType = $type->members[$nullIndex === 0 ? 1 : 0];

	if ($otherType instanceof PHPBuiltinType) {
		return "?".typeToCode($otherType);
	} else if ($otherType instanceof PHPNamedType) {
		return "?".typeToCode($otherType);
	}

	return false;
}

function typeToCode(PHPType $type): string {
	if ($type instanceof PHPBuiltinType) {
		return $type->value;
	} else if ($type instanceof PHPNamedType) {
		return "\\".$type->name;
	} else if ($type instanceof PHPUnionType) {
		$nullableType = unionToNullableTypeStringInt($type);

		if ($nullableType !== false) {
			return $nullableType;
		}

		$types = \array_map(static function(PHPType $t) {
			return typeToCode($t);
		}, $type->members);

		return \implode("|", $types);
	} else if ($type instanceof PHPUnspecifiedType) {
		return "";
	} else if ($type instanceof PHPUnknownType) {
		return "mixed /* unknown type */";
	}

	throw new \RuntimeException("Unable to render type.");
}
