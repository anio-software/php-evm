<?php

namespace AnioSoftware\EVM\Bits;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\XML as XML;

function loadPHPConstants(
	EVM\EVMContext $evmContext
): void {
	$diagnostics = $evmContext->diagnosticsFor(EVM\EVMDiagnosticMessageOrigin::kLoadPHPConstants);
	$constants = $evmContext->manual->getElementsWithReferenceIdAttribute(
		$evmContext->doc, "varlistentry"
	);

	foreach ($constants as $constant) {
		$referenceId = $evmContext->manual->getRefIdAttribute($constant);

		if (!\str_starts_with($referenceId, "constant.")) {
			continue;
		}

		$const = XML\selectFirstMatchingDescendant(
			$constant, $evmContext->manual->elementSelectorFactory("constant")
		);

		if (!$const) {
			$diagnostics->addWarning("no <constant> tag for $referenceId");

			continue;
		} else if ($const->hasAttribute("linkend")) {
			$diagnostics->addWarning("constant with refId $referenceId is marked as linkend, ignoring");

			continue;
		}

		$qualifier = $evmContext->manual->parseQualifiedName(
			\trim($const->textContent)
		);

		$factoryCtx = new Factory\EVMBitsFactoryContext(
			evmContext  : $evmContext,
			diagnostics : $diagnostics,
			metadata    : createPHPDefinitionMetadataFromDOMElement($evmContext, $constant),
			namespace   : $evmContext->manual->getOrCreateNamespace($qualifier["namespace"]),
			referenceId : $referenceId
		);

		$inst = Factory\createConstant(
			$factoryCtx,
			$qualifier["localName"]
		);

		$factoryCtx->namespace->addDefinition($inst);
	}
}
