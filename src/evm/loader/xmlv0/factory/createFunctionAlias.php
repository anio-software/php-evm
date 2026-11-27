<?php

namespace AnioSoftware\EVM\Loader\XMLv0\Factory;

use AnioSoftware\EVM as EVM;

function createFunctionAlias(FactoryContext $ctx): ?EVM\PHP\PHPFunctionAlias {
	$refPurpose = EVM\XML\selectFirstMatchingDescendant(
		$ctx->elementData->root, $ctx->loaderInstance->pathSelectorFactory(
			$ctx->elementData->root, "refnamediv/refpurpose"
		)
	);

	if ($refPurpose === NULL) {
		return NULL;
	}

	$aliasOf = EVM\XML\selectFirstMatchingChild(
		$refPurpose,
		new EVM\XML\OrSelector(
			$ctx->loaderInstance->elementSelectorFactory("function"),
			$ctx->loaderInstance->elementSelectorFactory("methodname"),
		)
	);

	if ($aliasOf === NULL) {
		return NULL;
	}

	return EVM\PHP\PHPFunctionAlias::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$ctx->localName,
		\trim($aliasOf->textContent)
	);
}
