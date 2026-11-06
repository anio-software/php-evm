<?php

namespace AnioSoftware\EVM\PHP;

function parsePHPFunctionParameterInitializer(
	?PHPType $parameterType, string $string
): PHPExpression {
	// unwrap nullable type unions
	// e.g. convert "?int" type to "int"
	if ($parameterType && $parameterType instanceof PHPUnionType) {
		$unwrapped = $parameterType->getNullableMemberType();

		if ($unwrapped !== NULL) {
			$parameterType = $unwrapped;
		}
	}

	$normalized = \trim(\strtolower($string));

	if ($normalized === "null") {
		return PHPNullLiteral::instance();
	} else if ($normalized === "true") {
		return PHPBooleanLiteral::instance(true);
	} else if ($normalized === "false") {
		return PHPBooleanLiteral::instance(false);
	} else if ($normalized === "?") {
		return PHPPlaceholderExpression::instance();
	}

	return new PHPRawExpression($string);
}
