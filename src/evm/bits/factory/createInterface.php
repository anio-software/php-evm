<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM\PHP as PHP;

function createInterface(
	PHP\PHPDefinitionMetadata $metadata,
	PHP\PHPNamespace $namespace,
	string $referenceId,
	string $name
): PHP\PHPInterface {
	return PHP\PHPInterface::create(
		$metadata,
		$namespace,
		$referenceId,
		$name
	);
}
