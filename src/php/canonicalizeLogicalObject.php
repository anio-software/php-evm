<?php

namespace AnioSoftware\EVM\PHP;

function canonicalizeLogicalObject(
	PHPStructuredObject $obj
): array {
	$arr = [];

	$arr[
		PHPLogicalProperty::kLogicalPropertyDomainPath->value
	] = $obj->getLogicalPropertySet()->getPath();

	$chain = $obj->getLogicalPropertySet()->getInheritanceChain();
	$lastIndex = \count($chain) - 1;
	$domain = $chain[$lastIndex]->getDomain()->value;

	$normalizeValue = static function(
		mixed $value
	) use(&$normalizeValue): mixed {
		if ($value instanceof PHPStructuredObject) {
			return canonicalizeLogicalObject($value);
		}

		return \is_array($value) ? \array_map($normalizeValue, $value) : $value;
	};

	for ($i = 0; $i <= $lastIndex; ++$i) {
		$keyPrefix = ($i === $lastIndex) ? "#" : "@";

		foreach ($chain[$i]->entries() as [$key, $value]) {
			$key = $key->value;

			if (\str_starts_with($key, $domain.".")) {
				$key = \substr($key, \strlen($domain."."));
			}

			$arr[$keyPrefix.$key] = $normalizeValue($value);
		}
	}

	return $arr;
}
