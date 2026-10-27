<?php

namespace AnioSoftware\X2J;

function loadPHPConstants(X2JContext $ctx): void {
	$diagnostics = $ctx->diagnosticsFor(X2JDiagnosticMessageOrigin::loadPHPConstants);

	$constants = XML\select(
		$ctx->doc->documentElement,
		new XML\AndSelector(
			PHP\PHPManual::tagSelectorFactory("varlistentry"),
			PHP\PHPManual::refIdSelectorFactory()
		)
	);

	foreach ($constants as $constant) {
		$refId = PHP\PHPManual::getRefIdAttribute($constant);

		if (!\str_starts_with($refId, "constant.")) {
			continue;
		}

		$const = XML\selectFirstMatchingDescendant(
			$constant, PHP\PHPManual::tagSelectorFactory("constant")
		);

		if (!$const) {
			$diagnostics->addWarning("no <constant> tag for $refId");

			continue;
		}

		$qualifier = PHP\PHPManual::parseQualifiedName(
			\trim($const->textContent)
		);

		$inst = PHP\PHPConstant::create($refId, $qualifier["localName"]);

		$ctx->manual
			->getOrCreateNamespace($qualifier["namespace"])
			->addConstant($inst);
	}
}
