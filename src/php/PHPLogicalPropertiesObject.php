<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPLogicalPropertiesObject implements \JsonSerializable {
	abstract public function getLogicalPropertyGroup(): PHPLogicalPropertyGroup;
	abstract protected function provideLogicalProperties(): array;

	static private function resolve(array $properties): array {
		$arr = [];

		foreach ($properties as $key => $value) {
			if ($value instanceof self) {
				$value = $value->getLogicalProperties();
			} else if (\is_array($value)) {
				$value = self::resolve($value);
			}

			$arr[$key] = $value;
		}

		return $arr;
	}

	final public function getLogicalProperties(): array {
		return self::resolve($this->provideLogicalProperties());
	}

	final public function jsonSerialize(): mixed {
		return $this->getLogicalProperties();
	}
}
