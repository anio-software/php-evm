<?php

namespace AnioSoftware\EVM\Bits;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\XML as XML;

function loadPHPFunctions(EVM\EVMContext $ctx): void {
	$diagnostics = $ctx->diagnosticsFor(EVM\EVMDiagnosticMessageOrigin::kLoadPHPFunctions);
	$refentries = $ctx->manual->getElementsWithReferenceIdAttribute(
		$ctx->doc, "refentry"
	);

	$orSelector = new XML\OrSelector(
		$ctx->manual->elementSelectorFactory("function"),
		$ctx->manual->elementSelectorFactory("methodname")
	);

	foreach ($refentries as $refentry) {
		$refId = $ctx->manual->getRefIdAttribute($refentry);

		if (!\str_starts_with($refId, "function.")) {
			continue;
		}

		$refname = XML\selectFirstMatchingDescendant(
			$refentry,
			$ctx->manual->elementSelectorFactory("refname")
		);

		if (!$refname) {
			$diagnostics->addWarning("refname is null for $refId");

			continue;
		}

		$functionName = \trim($refname->textContent);
		$qualifier    = $ctx->manual->parseQualifiedName($functionName);
		$ns = $ctx->manual->getOrCreateNamespace($qualifier["namespace"]);
		$metadata = createPHPDefinitionMetadataFromDOMElement($ctx, $refentry);

		$refpurpose = XML\selectFirstMatchingDescendant(
			$refentry,
			$ctx->manual->elementSelectorFactory("refpurpose")
		);

		if (!$refpurpose) {
			$diagnostics->addWarning("refpurpose is null");

			continue;
		}

		if (\str_starts_with(\strtolower(\trim($refpurpose->textContent)), "alias of")) {
			$el = XML\selectFirstMatchingChild($refpurpose, $orSelector);

			if (!$el) {
				$diagnostics->addWarning("no <function> or <methodname> tag for $refId");

				continue;
			}

			$ns->addDefinition(
				Factory\createFunctionAlias(
					$metadata,
					$ns,
					$refId,
					$qualifier["localName"],
					\trim($el->textContent)
				)
			);

			continue;
		}

		$methodsynopsis = XML\selectFirstMatchingDescendant(
			$refentry, $ctx->manual->elementSelectorFactory("methodsynopsis")
		);

		if (!$methodsynopsis) {
			$diagnostics->addWarning("methodsynopsis is null for $refId.");

			continue;
		}

		$inst = Factory\createFunction(
			$metadata,
			$diagnostics,
			$ctx,
			$ns,
			$refId,
			$qualifier["localName"],
			$methodsynopsis
		);

		$ns->addDefinition($inst);
	}
}
