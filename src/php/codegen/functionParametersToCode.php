<?php

namespace AnioSoftware\X2J\PHP\CodeGen;

use AnioSoftware\X2J\PHP as PHP;

function functionParametersToCode(PHP\PHPFunction $func, bool $references = false, bool $types = false, bool $initializer = false): string {
	$ret  = "(";

	foreach ($func->getParameters() as $param) {
		$paramTypeCode = $param->type->toCode() ?? "";
		$ret .= ($types && \strlen($paramTypeCode)) ? $paramTypeCode." " : "";
		$ret .= ($param->isVariadic() ? "..." : "");
		$ret .= ($references && $param->isReference() ? "&" : "");
		$ret .= "\$".$param->name;

		if ($initializer && $param->initializer !== NULL) {
			$ret .= " = ".$param->initializer;
		}

		$ret .= (!$param->isLast() ? ", " : "");
	}

	$ret .= ")";

	return $ret;
}
