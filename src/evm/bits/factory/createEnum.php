<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM\PHP as PHP;

function createEnum(
	PHP\PHPDefinitionMetadata $metadata,
	PHP\PHPNamespace $namespace,
	string $referenceId,
	string $name
): PHP\PHPEnum {
	return PHP\PHPEnum::create(
		$metadata,
		$namespace,
		$referenceId,
		$name
	);
}
