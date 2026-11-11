<?php

namespace AnioSoftware\EVM\PHP;

function array_flattenImplementation(
	array $array, string|ArrayPathFormat $pathFormat, string $path
): array {
	$glue = static function(
		string $path,
		string $key
	) use ($pathFormat) : string {
		return match($pathFormat) {
			ArrayPathFormat::kParentheses    => $path."(".$key.")",
			ArrayPathFormat::kCurlyBrackets  => $path."{".$key."}",
			ArrayPathFormat::kSquareBrackets => $path."[".$key."]",
			default                          => $path.$pathFormat.$key
		};
	};

	$newArray = [];

	foreach ($array as $key => $value) {
		$keyPath = \strlen($path) ? $glue($path, $key) : $key;

		if (\is_array($value) && \count($value)) {
			foreach (array_flattenImplementation($value, $pathFormat, $keyPath) as $innerKeyPath => $innerValue) {
				$newArray[$innerKeyPath] = $innerValue;
			}
		} else {
			$newArray[$keyPath] = $value;
		}
	}

	return $newArray;
}

function array_flatten(array $array, string|ArrayPathFormat $pathFormat = "."): array {
	return array_flattenImplementation($array, $pathFormat, "");
}
