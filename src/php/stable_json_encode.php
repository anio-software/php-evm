<?php

namespace AnioSoftware\EVM\PHP;

function stable_json_encode(mixed $data): string {
	if ($data instanceof \JsonSerializable) {
		$data = $data->jsonSerialize();
	}

	// make sure arrays are sorted recursively
	if (\is_array($data)) {
		ksort_r($data, \SORT_STRING);
	}

	return \json_encode(
		$data,
		\JSON_THROW_ON_ERROR
	);
}
