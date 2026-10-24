<?php

namespace AnioSoftware\X2J\PHP;

function renderPHPFunctionParameters(PHPFunction $func, bool $references = false, bool $types = false, bool $initializer = false): string {
	$ret  = "(";

	foreach ($func->getParameters() as $param) {
		$ret .= ($types ? renderType($param->type)." " : "");
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
