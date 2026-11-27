<?php

namespace AnioSoftware\EVM\Loader\XMLv0\Factory;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\Loader\XMLv0 as XMLv0;

function createFunction(FactoryContext $ctx): ?EVM\PHP\PHPFunction {
	if ($ctx->elementData->dom->synopsis === NULL) {
		return NULL;
	}

	$returnType = EVM\XML\selectFirstMatchingChild(
		$ctx->elementData->dom->synopsis,
		$ctx->loaderInstance->elementSelectorFactory("type")
	);

	if ($returnType === NULL) {
		return NULL;
	}

	return EVM\PHP\PHPFunction::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$ctx->localName,
		XMLv0\extractPHPType($ctx->loaderInstance, $returnType)
	);
}
