<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM\PHP as PHP;

function createConstant(
	EVMBitsFactoryContext $ctx,
	string $name
): PHP\PHPConstant {
	return PHP\PHPConstant::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$name
	);
}
