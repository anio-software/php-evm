<?php

namespace AnioSoftware\X2J\PHP;

function getFunctionRenderability(PHPFunction $func): Renderability {
	if ($func->returnType instanceof PHPUnknownType) {
		return Renderability::kFunctionUnknownReturnType;
	}

	$params = $func->getParameters();
	$nParams = \count($params);

	if ($nParams) {
		$lastParam = $params[$nParams - 1];

		if ($func->isVariadic() && !$lastParam->isVariadic()) {
			return Renderability::kFunctionVariadicParameterMismatch;
		}
	}

	$optionalParametersBegun = false;

	foreach ($params as $param) {
		if (!$optionalParametersBegun && $param->isOptional()) {
			$optionalParametersBegun = true;
		}

		if ($optionalParametersBegun && !$param->isOptional() && !$param->isVariadic()) {
			return Renderability::kFunctionRequiredParameterAfterOptional;
		}

		if ($param->type instanceof PHPUnknownType) {
			return Renderability::kFunctionUnknownParameterType;
		} else if ($param->initializer === "?") {
			return Renderability::kFunctionUnsupportedParameterInitializer;
		}

		if ($param->initializer !== NULL && \str_starts_with($param->initializer, "ini_get(")) {
			return Renderability::kFunctionIniGetParameterInitializer;
		}
	}

	if ($func->name === "__halt_compiler") {
		return Renderability::kFunctionHaltCompiler;
	}

	return Renderability::kRenderable;
}
