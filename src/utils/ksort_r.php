<?php

namespace AnioSoftware\EVM\PHP;

// like ksort() but recursive
function ksort_r(array &$input, int $flags = \SORT_REGULAR): true {
	if (!\array_is_list($input)) {
		\ksort($input, $flags);
	}

	foreach ($input as &$element) {
		if (\is_array($element)) {
			ksort_r($element, $flags);
		}
	}

	return true;
}
