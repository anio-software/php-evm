<?php

namespace AnioSoftware\EVM\PHP;

function stable_json_encode(array|\JsonSerializable $data): string {
	if ($data instanceof \JsonSerializable) {
		$data = $data->jsonSerialize();
	}

	// make sure array is sorted recursively
	ksort_r($data, \SORT_STRING);

	return \json_encode(
		$data,
		\JSON_THROW_ON_ERROR
	);
}
