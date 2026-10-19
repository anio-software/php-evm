<?php

namespace AnioSoftware\X2J\PHP;

function renderPHPFunctionParameters(PHPFunction $func, bool $references = false, bool $types = false, bool $initializer = false): string {
	$params = $func->getParameters();
	$nParams = \count($params);

	$ret  = "(";

	for ($i = 0; $i < $nParams; ++$i) {
		$param = $params[$i];

		$ret .= ($types ? renderPHPType($param->type)." " : "");
		$ret .= ($param->isVariadic ? "..." : "");
		$ret .= ($references && $param->isReference ? "&" : "");
		$ret .= "\$".$param->name;

		if ($initializer && $param->initializer !== NULL) {
			$ret .= " = ".$param->initializer;
		}

		$ret .= (($i + 1) !== $nParams ? ", " : "");
	}

	$ret .= ")";

	return $ret;
}
