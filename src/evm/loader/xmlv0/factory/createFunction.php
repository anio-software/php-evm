<?php

namespace AnioSoftware\EVM\Loader\XMLv0\Factory;

use AnioSoftware\EVM as EVM;

function createFunction(FactoryContext $ctx): ?EVM\PHP\PHPFunction {
	return EVM\PHP\PHPFunction::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$ctx->localName,
		EVM\PHP\PHPUnknownType::instance()
	);
}
