<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM\XML as XML;
use AnioSoftware\EVM\PHP as PHP;
use AnioSoftware\EVM\Bits as Bits;

function createFunction(
	EVMBitsFactoryContext $ctx,
	string $functionName,
	\DOMElement $methodsynopsis
): PHP\PHPFunction {
	$returnType = Bits\createPHPTypeFromDOMElement(
		$ctx->evmContext,
		XML\selectFirstMatchingChild(
			$methodsynopsis, $ctx->evmContext->manual->elementSelectorFactory("type")
		)
	);

	$func = PHP\PHPFunction::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$functionName,
		$returnType
	);

	$params = createFunctionParameters(
		$ctx,
		$methodsynopsis
	);

	$isVariadic = false;

	foreach ($params as $param) {
		$func = $func->withFunctionParameter($param);

		if ($param->isVariadic()) $isVariadic = true;
	}

	return $isVariadic ? $func->withFlags(
		PHP\PHPFunction::FLAG_VARIADIC
	) : $func;
}
