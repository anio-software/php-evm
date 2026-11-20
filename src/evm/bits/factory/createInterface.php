<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM\PHP as PHP;

function createInterface(
	EVMBitsFactoryContext $ctx,
	string $name
): PHP\PHPInterface {
	return PHP\PHPInterface::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$name
	);
}
