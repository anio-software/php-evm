<?php

namespace AnioSoftware\X2J\PHP;

function getRenderability(PHPFunction $func): Renderability {
	if ($func->returnType instanceof PHPUnknownType) {
		return Renderability::UnknownReturnType;
	}

	$params = $func->getParameters();
	$nParams = \count($params);

	if ($nParams) {
		$lastParam = $params[$nParams - 1];

		if ($func->isVariadic && !$lastParam->isVariadic) {
			return Renderability::VariadicParameterMismatch;
		}
	}

	$optionalParametersBegun = false;

	foreach ($params as $param) {
		if (!$optionalParametersBegun && $param->isOptional) {
			$optionalParametersBegun = true;
		}

		if ($optionalParametersBegun && !$param->isOptional) {
			return Renderability::RequiredParameterAfterOptional;
		}

		if ($param->type instanceof PHPUnknownType) {
			return Renderability::UnknownParameterType;
		} else if ($param->initializer === "?") {
			return Renderability::UnsupportedParameterInitializer;
		}

		if ($param->initializer !== NULL && \str_starts_with($param->initializer, "ini_get(")) {
			return Renderability::IniGetParameterInitializer;
		}
	}

	if ($func->name === "__halt_compiler") {
		return Renderability::HaltCompiler;
	} else if (\str_contains($func->name, "\\")) {
		return Renderability::NamespacedFunction;
	}

	return Renderability::Renderable;
}
