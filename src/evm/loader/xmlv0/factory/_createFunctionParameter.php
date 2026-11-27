<?php

namespace AnioSoftware\EVM\Loader\XMLv0\Factory;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\Loader\XMLv0 as XMLv0;

function _createFunctionParameter(
	FactoryContext $ctx,
	\DOMElement $methodParam,
	\DOMElement $parameter
): ?EVM\PHP\PHPFunctionParameter {
	$name = \trim($parameter->textContent);

	$isReference = $parameter->attributes->getNamedItem("role")?->value === "reference";
	$isOptional  = $methodParam->attributes->getNamedItem("choice")?->value === "opt";
	$isVariadic  = $methodParam->attributes->getNamedItem("rep")?->value === "repeat";

	$initializer = NULL;

	$typeElement = EVM\XML\selectFirstMatchingChild(
		$methodParam,
		$ctx->loaderInstance->elementSelectorFactory("type")
	);

	if ($typeElement === NULL) {
		return NULL;
	}

	$type = XMLv0\extractPHPType($ctx->loaderInstance, $typeElement);

	if ($isOptional) {
		$initializerElement = EVM\XML\selectFirstMatchingChild(
			$methodParam,
			$ctx->loaderInstance->elementSelectorFactory("initializer")
		);

		if ($initializerElement === NULL) {
			// todo: emit warning here
			$initializer = EVM\PHP\PHPPlaceholderExpression::instance();
		} else {
			$initializer = XMLv0\parsePHPFunctionParameterInitializer(
				$ctx->loaderInstance->getOrBuildIndex(),
				$type,
				$initializerElement->textContent
			);
		}
	}

	return EVM\PHP\PHPFunctionParameter::create(
		$name,
		$type,
		$isReference,
		$initializer,
		$isVariadic
	);
}
