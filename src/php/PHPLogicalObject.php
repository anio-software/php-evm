<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPLogicalObject implements \JsonSerializable {
	abstract public function getLogicalProperties(): PHPLogicalPropertySet;

	final public function isLogicallyEqualTo(self $that): bool {
		return $this->getLogicalProperties()->isEqualTo(
			$that->getLogicalProperties()
		);
	}

	final public function getLogicalHash(): string {
		return $this->getLogicalProperties()->getHash();
	}

	final public function toLogicalArray(bool $resolveParents = true): array {
		$normalizeValue = static function($value) use (&$normalizeValue, $resolveParents) {
			if ($value instanceof self) {
				return $value->toLogicalArray($resolveParents);
			}

			return \is_array($value) ? \array_map($normalizeValue, $value) : $value;
		};

		$arr = [];

		$props = $this->getLogicalProperties()->toArray(
			PHPLogicalPropertySetArrayOptions::canonicalFormat()
			->withResolveParents($resolveParents)
		);

		foreach ($props as $key => $value) {
			$arr[$key] = $normalizeValue($value);
		}

		return $arr;
	}

	final public function jsonSerialize(): mixed {
		return $this->toLogicalArray(true);
	}
}
