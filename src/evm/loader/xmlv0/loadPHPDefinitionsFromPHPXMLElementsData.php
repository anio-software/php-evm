<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

function loadPHPDefinitionsFromPHPXMLElementsData(
	EVM\PHP\PHPDefinitionKind $kind,
	LoaderInstance $loaderInstance,
	array $elementsData
): void {
	foreach ($elementsData as $elementData) {
		$metadata = new EVM\PHP\PHPDefinitionMetadata(
			$elementData->extensionMembership,
			$elementData->bookId
		);

		$namespace = $loaderInstance->phpManual->getOrCreateNamespace(
			$elementData->name->namespace
		);

		$ctx = new Factory\FactoryContext(
			loaderInstance : $loaderInstance,
			elementData    : $elementData,
			metadata       : $metadata,
			namespace      : $namespace
		);

		$definition = match($kind) {
			EVM\PHP\PHPDefinitionKind::kEnum          => Factory\createEnum($ctx),
			EVM\PHP\PHPDefinitionKind::kInterface     => Factory\createInterface($ctx),
			EVM\PHP\PHPDefinitionKind::kClass         => Factory\createClass($ctx),
			EVM\PHP\PHPDefinitionKind::kConstant      => Factory\createConstant($ctx),
			EVM\PHP\PHPDefinitionKind::kFunction      => Factory\createFunction($ctx),
			EVM\PHP\PHPDefinitionKind::kFunctionAlias => Factory\createFunctionAlias($ctx),
			default                                   => NULL
		};

		if ($definition === NULL) {
			continue;
		}

		$namespace->addDefinition($definition);
	}
}
