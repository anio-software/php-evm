<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\XML as XML;
use AnioSoftware\EVM\PHP as PHP;
use AnioSoftware\EVM\Bits as Bits;

function createFunction(
	PHP\PHPDefinitionMetadata $metadata,
	EVM\EVMDiagnostics $diagnostics,
	EVM\EVMContext $ctx,
	PHP\PHPNamespace $ns,
	string $refId,
	string $functionName,
	\DOMElement $methodsynopsis
): PHP\PHPFunction {
	$returnType = Bits\createPHPTypeFromDOMElement(
		$ctx,
		XML\selectFirstMatchingChild(
			$methodsynopsis, $ctx->manual->elementSelectorFactory("type")
		)
	);
	$func   = PHP\PHPFunction::create($metadata, $ns, $refId, $functionName, $returnType);
	$params = createFunctionParameters($diagnostics, $ctx, $refId, $methodsynopsis);

	$isVariadic = false;
	foreach ($params as $param) {
		$func = $func->withFunctionParameter($param);

		if ($param->isVariadic()) $isVariadic = true;
	}

	return $isVariadic ? $func->withFlags(
		PHP\PHPFunction::FLAG_VARIADIC
	) : $func;
}
