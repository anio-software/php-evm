<?php

namespace AnioSoftware\EVM\Bits;

use AnioSoftware\EVM\PHP as PHP;

function parsePHPFunctionParameterInitializer(
	?PHP\PHPManualIndex $index,
	?PHP\PHPType $parameterType,
	string $string
): PHP\PHPExpression {
	// unwrap nullable type unions
	// e.g. convert "?int" type to "int"
	if ($parameterType && $parameterType instanceof PHP\PHPUnionType) {
		$unwrapped = $parameterType->getNullableMemberType();

		if ($unwrapped !== NULL) {
			$parameterType = $unwrapped;
		}
	}

	$normalized = \trim(\strtolower($string));

	if ($normalized === "null") {
		return PHP\PHPNullLiteral::instance();
	} else if ($normalized === "true") {
		return PHP\PHPBooleanLiteral::instance(true);
	} else if ($normalized === "false") {
		return PHP\PHPBooleanLiteral::instance(false);
	} else if ($normalized === "?") {
		return PHP\PHPPlaceholderExpression::instance();
	}

	$constants = $index?->getConstants() ?? [];

	if (\array_key_exists("\\$string", $constants)) {
		return new PHP\PHPConstantFetchExpression($constants["\\$string"]);
	}

	if ($parameterType && $parameterType->isBuiltinType(PHP\PHPBuiltinTypeKind::kFloat)) {
		return new PHP\PHPFloatLiteral((float)$string, $string);
	}

	$intValue = PHP\PHPIntegerLiteral::tryParse($string);

	if ($intValue !== NULL) {
		return $intValue;
	}

	$stringValue = PHP\PHPDoubleQuotedStringLiteral::tryParse($string);

	if ($stringValue !== NULL) {
		return $stringValue;
	}

	return new PHP\PHPRawExpression($string);
}
