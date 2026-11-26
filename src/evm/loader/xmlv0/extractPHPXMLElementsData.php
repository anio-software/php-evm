<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

function extractPHPXMLElementsData(
	LoaderInstance $loaderInstance
): EVM\Utils\HashMap {
	$map = new EVM\Utils\HashMap;

	foreach ($loaderInstance->getPHPDefinitionXMLMappings()->keys() as $kind) {
		$map->set($kind, []);
	}

	return $map;
}
