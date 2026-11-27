<?php

namespace AnioSoftware\EVM\Loader\XMLv0\Factory;

use AnioSoftware\EVM as EVM;

function createFunctionAlias(FactoryContext $ctx): ?EVM\PHP\PHPFunctionAlias {
	return EVM\PHP\PHPFunctionAlias::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$ctx->localName,
		"x"
	);
}
