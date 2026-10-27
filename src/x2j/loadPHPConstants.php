<?php

namespace AnioSoftware\X2J;

function loadPHPConstants(X2JContext $ctx): void {
	$diagnostics = $ctx->diagnosticsFor(X2JDiagnosticMessageOrigin::loadPHPConstants);

	$constants = XML\select(
		$ctx->doc->documentElement,
		new XML\AndSelector(
			$ctx->manual->tagSelectorFactory("varlistentry"),
			PHP\PHPManual::refIdSelectorFactory()
		)
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
		}

		$qualifier = PHP\PHPManual::parseQualifiedName(
			\trim($const->textContent)
		);

		$ns = $ctx->manual->getOrCreateNamespace($qualifier["namespace"]);
		$inst = PHP\PHPConstant::create($ns, $refId, $qualifier["localName"]);
		$ns->addConstant($inst);
	}
}
