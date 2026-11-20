<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM\PHP as PHP;

function createClass(
	EVMBitsFactoryContext $ctx,
	string $name
): PHP\PHPClass {
	return PHP\PHPClass::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$name
	);
}
