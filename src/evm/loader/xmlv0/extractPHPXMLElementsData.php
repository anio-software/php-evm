<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

function extractPHPXMLElementsData(
	LoaderInstance $loaderInstance
): array {
	$map         = [];
	$xmlElements = [];
	$mappings    = [];
	$unresolved  = [];

	foreach ($loaderInstance->getPHPDefinitionXMLMappings()->entries() as [$kind, $definitionMapping]) {
		$map[$kind->value] = [];

		$xmlMappingKey = $definitionMapping->getXMLMappingKey();

		if (!\array_key_exists($xmlMappingKey, $mappings)) {
			$mappings[$xmlMappingKey] = [$definitionMapping];
		} else if (!\in_array($definitionMapping, $mappings[$xmlMappingKey], true)) {
			$mappings[$xmlMappingKey][] = $definitionMapping;
		}

		if (\array_key_exists($xmlMappingKey, $xmlElements)) {
			continue;
		}

		$elements = $loaderInstance->getElementsWithReferenceIdAttribute(
			$definitionMapping->tagName
		);

		$xmlElements[$xmlMappingKey] = [];

		foreach ($elements as $element) {
			$referenceId = $loaderInstance->getReferenceIdAttribute($element);

			if (!\str_starts_with($referenceId, $definitionMapping->referenceIdPrefix)) {
				continue;
			}

			$unresolved[$referenceId] = true;
			$xmlElements[$xmlMappingKey][] = $element;
		}
	}

	foreach ($xmlElements as $xmlMappingKey => $elements) {
		foreach ($elements as $element) {
			$referenceId = $loaderInstance->getReferenceIdAttribute($element);

			if (!\array_key_exists($referenceId, $unresolved)) {
				continue;
			}

			foreach ($mappings[$xmlMappingKey] as $definitionMapping) {
				$data = extractPHPXMLElementData(
					$loaderInstance,
					$definitionMapping,
					$element,
					$referenceId
				);

				if ($data) {
					unset($unresolved[$referenceId]);

					$map[$data->kind->value][] = $data;

					break;
				}
			}
		}
	}

	return $map;
}
