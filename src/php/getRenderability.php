<?php

namespace AnioSoftware\X2J\PHP;

function getRenderability(PHPFunction $func): bool {
	if ($func->returnType instanceof PHPUnknownType) {
		return false;
	}

	$params = $func->getParameters();
	$nParams = \count($params);

	if ($nParams) {
		$lastParam = $params[$nParams - 1];

		if ($func->isVariadic && !$lastParam->isVariadic) {
			return false;
		}
	}

	$optionalParametersBegun = false;

	foreach ($params as $param) {
		if (!$optionalParametersBegun && $param->isOptional) {
			$optionalParametersBegun = true;
		}

		if ($optionalParametersBegun && !$param->isOptional) {
			return false;
		}

		if ($param->type instanceof PHPUnknownType) {
			return false;
		} else if ($param->initializer === "?") {
			return false;
		}

		if ($param->initializer !== NULL && \str_starts_with($param->initializer, "ini_get(")) {
			return false;
		}
	}

	if ($func->name === "__halt_compiler") {
		return false;
	} else if (\str_contains($func->name, "\\")) {
		return false;
	}

	return true;
}
