<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM\PHP as PHP;

function createClass(
	PHP\PHPDefinitionMetadata $metadata,
	PHP\PHPNamespace $namespace,
	string $referenceId,
	string $name
): PHP\PHPClass {
	return PHP\PHPClass::create(
		$metadata,
		$namespace,
		$referenceId,
		$name
	);
}
