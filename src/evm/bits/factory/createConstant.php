<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM\PHP as PHP;

function createConstant(
	PHP\PHPDefinitionMetadata $metadata,
	PHP\PHPNamespace $namespace,
	string $referenceId,
	string $name
): PHP\PHPConstant {
	return PHP\PHPConstant::create(
		$metadata,
		$namespace,
		$referenceId,
		$name
	);
}
