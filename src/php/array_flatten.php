<?php

namespace AnioSoftware\EVM\PHP;

function array_flattenImplementation(
	array $array, string $keyDelimiter, string $path
): array {
	$newArray = [];

	foreach ($array as $key => $value) {
		$keyPath = \strlen($path) ? $path.$keyDelimiter.$key : $key;

		if (\is_array($value) && \count($value)) {
			foreach (array_flattenImplementation($value, $keyDelimiter, $keyPath) as $innerKeyPath => $innerValue) {
				$newArray[$innerKeyPath] = $innerValue;
			}
		} else {
			$newArray[$keyPath] = $value;
		}
	}

	return $newArray;
}

function array_flatten(array $array, string $keyDelimiter = "."): array {
	return array_flattenImplementation($array, $keyDelimiter, "");
}
