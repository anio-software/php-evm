<?php

namespace AnioSoftware\X2J\PHP\CodeGen;

use AnioSoftware\X2J\PHP as PHP;

function typeToCode(PHP\PHPType $type): string {
	if ($type instanceof PHP\PHPUnionType) {
		$type = $type->collapse();
	}

	if ($type->isRepresentableInCode()) {
		if ($type instanceof PHP\PHPUnionType) {
			$member = $type->getNullableMemberType();

			if ($member !== NULL) {
				return "?".$member->render();
			}
		}

		return $type->render();
	}

	return "/* ".$type->render()." */";
}
