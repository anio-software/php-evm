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
		$refId = $evmContext->manual->getRefIdAttribute($constant);

		if (!\str_starts_with($refId, "constant.")) {
			continue;
		}

		$const = XML\selectFirstMatchingDescendant(
			$constant, $evmContext->manual->elementSelectorFactory("constant")
		);

		if (!$const) {
			$diagnostics->addWarning("no <constant> tag for $refId");

			continue;
		} else if ($const->hasAttribute("linkend")) {
			$diagnostics->addWarning("constant with refId $refId is marked as linkend, ignoring");

			continue;
		}

		$qualifier = $evmContext->manual->parseQualifiedName(
			\trim($const->textContent)
		);

		$ns = $evmContext->manual->getOrCreateNamespace($qualifier["namespace"]);
		$metadata = createPHPDefinitionMetadataFromDOMElement($evmContext, $constant);
		$inst = Factory\createConstant(
			$metadata,
			$ns,
			$refId,
			$qualifier["localName"]
		);

		$ns->addDefinition($inst);
	}
}
