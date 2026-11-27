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

	$parameters = [];

	$methodParams = EVM\XML\select(
		$ctx->elementData->dom->synopsis,
		$ctx->loaderInstance->elementSelectorFactory("methodparam"),
		0
	);

	foreach ($methodParams as $methodParam) {
		$parameterElement = EVM\XML\selectFirstMatchingChild(
			$methodParam,
			$ctx->loaderInstance->elementSelectorFactory("parameter")
		);

		if ($parameterElement === NULL) {
			return NULL;
		}

		$parameter = _createFunctionParameter($ctx, $methodParam, $parameterElement);

		if ($parameter === NULL) {
			return NULL;
		}

		$parameters[] = $parameter;
	}

	return EVM\PHP\PHPFunction::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$ctx->localName,
		XMLv0\extractPHPType($ctx->loaderInstance, $returnType),
		$parameters
	);
}
