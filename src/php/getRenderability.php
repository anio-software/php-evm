<?php

namespace AnioSoftware\X2J\PHP;

function getRenderability(PHPFunction $func): Renderability {
	if ($func->returnType instanceof PHPUnknownType) {
		return Renderability::FunctionUnknownReturnType;
	}

	$params = $func->getParameters();
	$nParams = \count($params);

	if ($nParams) {
		$lastParam = $params[$nParams - 1];

		if ($func->isVariadic && !$lastParam->isVariadic) {
			return Renderability::FunctionVariadicParameterMismatch;
		}
	}

	$optionalParametersBegun = false;

	foreach ($params as $param) {
		if (!$optionalParametersBegun && $param->isOptional) {
			$optionalParametersBegun = true;
		}

		if ($optionalParametersBegun && !$param->isOptional && !$param->isVariadic) {
			return Renderability::FunctionRequiredParameterAfterOptional;
		}

		if ($param->type instanceof PHPUnknownType) {
			return Renderability::FunctionUnknownParameterType;
		} else if ($param->initializer === "?") {
			return Renderability::FunctionUnsupportedParameterInitializer;
		}

		if ($param->initializer !== NULL && \str_starts_with($param->initializer, "ini_get(")) {
			return Renderability::FunctionIniGetParameterInitializer;
		}
	}

	if ($func->name === "__halt_compiler") {
		return Renderability::FunctionHaltCompiler;
	} else if (\str_contains($func->name, "\\")) {
		return Renderability::FunctionNamespacedFunction;
	}

	return Renderability::Renderable;
}
