<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM\PHP as PHP;

function createFunctionAlias(
	PHP\PHPDefinitionMetadata $metadata,
	PHP\PHPNamespace $namespace,
	string $referenceId,
	string $name,
	string $originalName
): PHP\PHPFunctionAlias {
	return PHP\PHPFunctionAlias::create(
		$metadata,
		$namespace,
		$referenceId,
		$name,
		$originalName
	);
}
