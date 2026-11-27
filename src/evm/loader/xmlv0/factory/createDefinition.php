<?php

namespace AnioSoftware\EVM\Loader\XMLv0\Factory;

use AnioSoftware\EVM as EVM;

function createDefinition(
	EVM\PHP\PHPDefinitionKind $kind,
	FactoryContext $ctx
): ?EVM\PHP\PHPDefinition {
	return match($kind) {
		EVM\PHP\PHPDefinitionKind::kEnum          => createEnum($ctx),
		EVM\PHP\PHPDefinitionKind::kInterface     => createInterface($ctx),
		EVM\PHP\PHPDefinitionKind::kClass         => createClass($ctx),
		EVM\PHP\PHPDefinitionKind::kConstant      => createConstant($ctx),
		EVM\PHP\PHPDefinitionKind::kFunction      => createFunction($ctx),
		EVM\PHP\PHPDefinitionKind::kFunctionAlias => createFunctionAlias($ctx),
		default                                   => NULL
	};
}
