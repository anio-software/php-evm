<?php

namespace AnioSoftware\EVM\PHP;

function parsePHPFunctionParameterInitializer(
	string $string
): PHPExpression {
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
