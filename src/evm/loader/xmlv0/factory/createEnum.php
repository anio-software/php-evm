<?php

namespace AnioSoftware\EVM\Loader\XMLv0\Factory;

use AnioSoftware\EVM as EVM;

function createEnum(FactoryContext $ctx): ?EVM\PHP\PHPEnum {
	return EVM\PHP\PHPEnum::create(
		$ctx->metadata,
		$ctx->namespace,
		$ctx->referenceId,
		$ctx->localName
	);
}
