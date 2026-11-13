<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPLogicalPropertiesObject implements \JsonSerializable {
	abstract public function getLogicalPropertyGroup(): PHPLogicalPropertyGroup;
	abstract protected function provideLogicalProperties(): array;

	static private function resolve(
		?PHPLogicalPropertyGroup $group,
		array $properties
	): array {
		$arr = [];

		if ($group) {
			$arr[
				PHPLogicalProperty::kLogicalPropertyGroup->value
			] = $group->value;
		}

		foreach ($properties as $key => $value) {
			if ($value instanceof self) {
				$value = $value->getLogicalProperties();
			} else if (\is_array($value)) {
				$value = self::resolve(
					\array_is_list($value) ? NULL : $group,
					$value
				);
			}

			// remove group prefix if it matches the current group
			if ($group && \str_starts_with($key, $group->value.".")) {
				$key = \substr($key, \strlen($group->value."."));
			}

			$arr[$key] = $value;
		}

		return $arr;
	}

	final public function getLogicalProperties(): array {
		return self::resolve(
			$this->getLogicalPropertyGroup(),
			$this->provideLogicalProperties()
		);
	}

	final public function jsonSerialize(): mixed {
		return $this->getLogicalProperties();
	}
}
