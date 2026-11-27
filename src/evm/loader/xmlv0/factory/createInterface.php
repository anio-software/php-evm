<?php

namespace AnioSoftware\EVM\Loader\XMLv0\Factory;

use AnioSoftware\EVM as EVM;

function createInterface(FactoryContext $ctx): ?EVM\PHP\PHPInterface {
	return EVM\PHP\PHPInterface::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$ctx->localName
	);
}
