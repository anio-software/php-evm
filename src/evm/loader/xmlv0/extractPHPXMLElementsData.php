<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

function extractPHPXMLElementsData(
	LoaderInstance $loaderInstance
): array {
	$map = [];

	foreach ($loaderInstance->getPHPDefinitionXMLMappings()->entries() as [$kind]) {
		$map[$kind->value] = [];
	}

	return $map;
}
