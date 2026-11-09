<?php

namespace AnioSoftware\EVM\PHP;

function parsePHPFunctionParameterInitializer(
	?PHPManualIndex $index,
	?PHPType $parameterType,
	string $string
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

	$constants = $index?->getConstants() ?? [];

	if (\array_key_exists("\\$string", $constants)) {
		return new PHPConstantFetchExpression($constants["\\$string"]);
	}

	if ($parameterType && $parameterType->isBuiltinType(PHPBuiltinTypeKind::kFloat)) {
		return new PHPFloatLiteral((float)$string, $string);
	}

	$intValue = PHPIntegerLiteral::parse($string);

	if ($intValue !== NULL) {
		return $intValue;
	}

	$stringValue = PHPDoubleQuotedStringLiteral::parse($string);

	if ($stringValue !== NULL) {
		return $stringValue;
	}

	return new PHPRawExpression($string);
}
