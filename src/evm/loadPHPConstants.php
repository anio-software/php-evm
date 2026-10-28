<?php

namespace AnioSoftware\X2J;

function loadPHPConstants(X2JContext $ctx): void {
	$diagnostics = $ctx->diagnosticsFor(X2JDiagnosticMessageOrigin::kLoadPHPConstants);
	$constants = $ctx->manual->getElementsWithReferenceIdAttribute(
		$ctx->doc, "varlistentry"
	);

	foreach ($constants as $constant) {
		$refId = $ctx->manual->getRefIdAttribute($constant);

		if (!\str_starts_with($refId, "constant.")) {
			continue;
		}

		$const = XML\selectFirstMatchingDescendant(
			$constant, $ctx->manual->tagSelectorFactory("constant")
		);

		if (!$const) {
			$diagnostics->addWarning("no <constant> tag for $refId");

			continue;
		} else if ($const->hasAttribute("linkend")) {
			$diagnostics->addWarning("constant with refId $refId is marked as linkend, ignoring");

			continue;
		}

		$qualifier = $ctx->manual->parseQualifiedName(
			\trim($const->textContent)
		);

		$ns = $ctx->manual->getOrCreateNamespace($qualifier["namespace"]);
		$inst = PHP\PHPConstant::create($ns, $refId, $qualifier["localName"]);
		$ns->addDefinition($inst);
	}
}
