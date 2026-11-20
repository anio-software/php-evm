<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\XML as XML;

function createFunctionParameters(
	EVM\EVMDiagnostics $diagnostics,
	EVM\EVMContext $evmContext,
	string $referenceId,
	\DOMElement $methodsynopsis
): array {
	$methodparams = XML\select(
		$methodsynopsis,
		$evmContext->manual->elementSelectorFactory("methodparam"),
		0
	);

	$ret = [];

	foreach ($methodparams as $methodparam) {
		$parameter = XML\selectFirstMatchingChild(
			$methodparam,
			$evmContext->manual->elementSelectorFactory("parameter")
		);

		if (!$parameter) {
			$diagnostics->addWarning("no <parameter> for $referenceId");

			continue;
		}

		$ret[] = createFunctionParameter(
			$diagnostics,
			$evmContext,
			$referenceId,
			$methodparam,
			$parameter
		);
	}

	return $ret;
}
