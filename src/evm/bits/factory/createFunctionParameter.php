<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\XML as XML;
use AnioSoftware\EVM\PHP as PHP;
use AnioSoftware\EVM\Bits as Bits;

function createFunctionParameter(
	EVM\EVMDiagnostics $diagnostics,
	EVM\EVMContext $evmContext,
	string $referenceId,
	\DOMElement $methodparam,
	\DOMElement $parameter
): PHP\PHPFunctionParameter {
	$parameterName = \trim($parameter->textContent);
	$isReference   = $parameter->attributes->getNamedItem("role")?->value === "reference";
	$isOptional    = $methodparam->attributes->getNamedItem("choice")?->value === "opt";
	$isVariadic    = $methodparam->attributes->getNamedItem("rep")?->value === "repeat";
	$initializer   = NULL;
	$parameterType = Bits\createPHPTypeFromDOMElement(
		$evmContext,
		XML\selectFirstMatchingChild(
			$methodparam,
			$evmContext->manual->elementSelectorFactory("type")
		)
	);

	if ($isOptional) {
		$el = XML\selectFirstMatchingChild(
			$methodparam,
			$evmContext->manual->elementSelectorFactory("initializer")
		);

		if ($el) {
			$initializer = Bits\parsePHPFunctionParameterInitializer(
				$evmContext->getPHPManualIndex(),
				$parameterType,
				$el->textContent
			);
		}
	}

	if ($isOptional && $initializer === NULL) {
		$diagnostics->addWarning("isOptional and initializer is NULL for $referenceId");

		$initializer = PHP\PHPPlaceholderExpression::instance();
	}

	return PHP\PHPFunctionParameter::create(
		$parameterName,
		$parameterType,
		$isReference,
		$initializer,
		$isVariadic
	);
}
