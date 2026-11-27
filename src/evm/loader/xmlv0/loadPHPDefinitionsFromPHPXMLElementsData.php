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

		$definition = Factory\createDefinition($kind, new Factory\FactoryContext(
			loaderInstance : $loaderInstance,
			elementData    : $elementData,
			metadata       : $metadata,
			namespace      : $namespace
		));

		if ($definition === NULL) {
			continue;
		}

		$namespace->addDefinition($definition);
	}
}
