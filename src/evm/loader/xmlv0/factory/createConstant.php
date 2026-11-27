<?php

namespace AnioSoftware\EVM\Loader\XMLv0\Factory;

use AnioSoftware\EVM as EVM;

function createConstant(FactoryContext $ctx): ?EVM\PHP\PHPConstant {
	$constant = EVM\XML\selectFirstMatchingDescendant(
		$ctx->elementData->root, $ctx->loaderInstance->pathSelectorFactory(
			$ctx->elementData->root, "term/constant"
		)
	);

	if ($constant && $constant->hasAttribute("linkend")) {
		return NULL;
	}

	return EVM\PHP\PHPConstant::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$ctx->localName
	);
}
