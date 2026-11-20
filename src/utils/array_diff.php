<?php

namespace AnioSoftware\EVM\Utils;

function array_diff(
	array $before,
	array $after,
	callable $equals
): ArrayDiffResult {
	$removed  = \array_diff_key($before, $after);
	$added    = \array_diff_key($after, $before);
	$retained = \array_intersect_key($before, $after);

	$modified = [];

	foreach (\array_keys($retained) as $key) {
		$beforeValue = $before[$key];
		$afterValue  = $after[$key];

		if (!$equals($beforeValue, $afterValue)) {
			$modified[$key] = $afterValue;
		}
	}

	return new ArrayDiffResult(
		removed  : $removed,
		added    : $added,
		retained : $retained,
		modified : $modified
	);
}
