<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM\XML as XML;

function createFunctionParameters(
	EVMBitsFactoryContext $ctx,
	\DOMElement $methodsynopsis
): array {
	$methodparams = XML\select(
		$methodsynopsis,
		$ctx->evmContext->manual->elementSelectorFactory("methodparam"),
		0
	);

	$ret = [];

	foreach ($methodparams as $methodparam) {
		$parameter = XML\selectFirstMatchingChild(
			$methodparam,
			$ctx->evmContext->manual->elementSelectorFactory("parameter")
		);

		if (!$parameter) {
			$ctx->diagnostics->addWarning("no <parameter> for {$ctx->referenceId}");

			continue;
		}

		$ret[] = createFunctionParameter(
			$ctx,
			$methodparam,
			$parameter
		);
	}

	return $ret;
}
