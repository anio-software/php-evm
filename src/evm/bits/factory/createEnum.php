<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM\PHP as PHP;

function createEnum(
	EVMBitsFactoryContext $ctx,
	string $name
): PHP\PHPEnum {
	return PHP\PHPEnum::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$name
	);
}
