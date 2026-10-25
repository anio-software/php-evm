<?php

namespace AnioSoftware\X2J\PHP\CodeGen;

use AnioSoftware\X2J\PHP as PHP;

function unionToNullableTypeStringInt(PHP\PHPUnionType $type): string|false {
	if (\count($type->members) !== 2) {
		return false;
	}

	$nullIndex = \array_search(PHP\PHPBuiltinType::Null, $type->members, true);

	if ($nullIndex === false) {
		return false;
	}

	$otherType = $type->members[$nullIndex === 0 ? 1 : 0];

	if ($otherType instanceof PHP\PHPBuiltinType) {
		return "?".typeToCode($otherType);
	} else if ($otherType instanceof PHP\PHPNamedType) {
		return "?".typeToCode($otherType);
	}

	return false;
}

function typeToCode(PHP\PHPType $type): string {
	if ($type instanceof PHP\PHPBuiltinType) {
		return $type->value;
	} else if ($type instanceof PHP\PHPNamedType) {
		return "\\".$type->name;
	} else if ($type instanceof PHP\PHPUnionType) {
		$nullableType = unionToNullableTypeStringInt($type);

		if ($nullableType !== false) {
			return $nullableType;
		}

		$types = \array_map(static function(PHP\PHPType $t) {
			return typeToCode($t);
		}, $type->members);

		return \implode("|", $types);
	} else if ($type instanceof PHP\PHPUnspecifiedType) {
		return "";
	} else if ($type instanceof PHP\PHPUnknownType) {
		return "mixed /* unknown type */";
	}

	throw new \RuntimeException("Unable to render type.");
}
