<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\XML as XML;

function createFunctionParameters(
	EVM\EVMDiagnostics $diagnostics,
	EVM\EVMContext $ctx,
	string $refId,
	\DOMElement $methodsynopsis
): array {
	$methodparams = XML\select(
		$methodsynopsis,
		$ctx->manual->elementSelectorFactory("methodparam"),
		0
	);

	$ret = [];

	foreach ($methodparams as $methodparam) {
		$parameter = XML\selectFirstMatchingChild(
			$methodparam,
			$ctx->manual->elementSelectorFactory("parameter")
		);

		if (!$parameter) {
			$diagnostics->addWarning("no <parameter> for $refId");

			continue;
		}

		$ret[] = createFunctionParameter(
			$diagnostics,
			$ctx,
			$refId,
			$methodparam,
			$parameter
		);
	}

	return $ret;
}
