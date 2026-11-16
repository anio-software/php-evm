<?php

namespace AnioSoftware\EVM\PHP;

function array_diff(
	array $before,
	array $after,
	callable $equals
): DiffResult {
	$removed  = \array_diff_key($before, $after);
	$added    = \array_diff_key($after, $before);
	$retained = \array_intersect_key($before, $after);

	$changed = [];

	foreach (\array_keys($retained) as $key) {
		$beforeValue = $before[$key];
		$afterValue  = $after[$key];

		if (!$equals($beforeValue, $afterValue)) {
			$changed[$key] = $afterValue;
		}
	}

	return new DiffResult(
		removed  : $removed,
		added    : $added,
		retained : $retained,
		changed  : $changed
	);
}
