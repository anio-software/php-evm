<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM\PHP as PHP;

function createFunctionAlias(
	EVMBitsFactoryContext $ctx,
	string $name,
	string $originalName
): PHP\PHPFunctionAlias {
	return PHP\PHPFunctionAlias::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$name,
		$originalName
	);
}
