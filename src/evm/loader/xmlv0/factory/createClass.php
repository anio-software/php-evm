<?php

namespace AnioSoftware\EVM\Loader\XMLv0\Factory;

use AnioSoftware\EVM as EVM;

function createClass(FactoryContext $ctx): ?EVM\PHP\PHPClass {
	return EVM\PHP\PHPClass::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$ctx->localName
	);
}
