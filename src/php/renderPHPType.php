<?php

namespace AnioSoftware\X2J\PHP;

function renderPHPType(PHPType $type): string {
	$type = collapsePHPType($type);

	if ($type instanceof PHPBuiltinType) {
		return $type->value;
	} else if ($type instanceof PHPNamedType) {
		return $type->name;
	} else if ($type instanceof PHPUnionType) {
		$types = \array_map(static function(PHPType $t) {
			return renderPHPType($t);
		}, $type->members);

		return \implode(" | ", $types);
	} else if ($type instanceof PHPUnknownType) {
		return "mixed /* unknown type */";
	}

	throw new \RuntimeException("Unable to render type.");
}
