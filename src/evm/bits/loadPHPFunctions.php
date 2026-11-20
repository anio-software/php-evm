<?php

namespace AnioSoftware\EVM\Bits;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\XML as XML;

function loadPHPFunctions(
	EVM\EVMContext $evmContext
): void {
	$diagnostics = $evmContext->diagnosticsFor(EVM\EVMDiagnosticMessageOrigin::kLoadPHPFunctions);
	$refentries = $evmContext->manual->getElementsWithReferenceIdAttribute(
		$evmContext->doc, "refentry"
	);

	$orSelector = new XML\OrSelector(
		$evmContext->manual->elementSelectorFactory("function"),
		$evmContext->manual->elementSelectorFactory("methodname")
	);

	foreach ($refentries as $refentry) {
		$referenceId = $evmContext->manual->getRefIdAttribute($refentry);

		if (!\str_starts_with($referenceId, "function.")) {
			continue;
		}

		$refname = XML\selectFirstMatchingDescendant(
			$refentry,
			$evmContext->manual->elementSelectorFactory("refname")
		);

		if (!$refname) {
			$diagnostics->addWarning("refname is null for $referenceId");

			continue;
		}

		$functionName = \trim($refname->textContent);
		$qualifier = $evmContext->manual->parseQualifiedName($functionName);
		$namespace = $evmContext->manual->getOrCreateNamespace($qualifier["namespace"]);
		$metadata = createPHPDefinitionMetadataFromDOMElement($evmContext, $refentry);

		$refpurpose = XML\selectFirstMatchingDescendant(
			$refentry,
			$evmContext->manual->elementSelectorFactory("refpurpose")
		);

		if (!$refpurpose) {
			$diagnostics->addWarning("refpurpose is null");

			continue;
		}

		if (\str_starts_with(\strtolower(\trim($refpurpose->textContent)), "alias of")) {
			$el = XML\selectFirstMatchingChild($refpurpose, $orSelector);

			if (!$el) {
				$diagnostics->addWarning("no <function> or <methodname> tag for $referenceId");

				continue;
			}

			$namespace->addDefinition(
				Factory\createFunctionAlias(
					$metadata,
					$namespace,
					$referenceId,
					$qualifier["localName"],
					\trim($el->textContent)
				)
			);

			continue;
		}

		$methodsynopsis = XML\selectFirstMatchingDescendant(
			$refentry, $evmContext->manual->elementSelectorFactory("methodsynopsis")
		);

		if (!$methodsynopsis) {
			$diagnostics->addWarning("methodsynopsis is null for $referenceId.");

			continue;
		}

		$inst = Factory\createFunction(
			$metadata,
			$diagnostics,
			$evmContext,
			$namespace,
			$referenceId,
			$qualifier["localName"],
			$methodsynopsis
		);

		$namespace->addDefinition($inst);
	}
}
