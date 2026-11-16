<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPLogicalPropertiesObject implements \JsonSerializable {
	abstract protected function provideLogicalProperties(): PHPLogicalProperties;

	final public function getLogicalProperties(
		bool $resolveParents = false
	): array {
		return $this->provideLogicalProperties(); // tbd
	}

	final public function jsonSerialize(): mixed {
		return $this->getLogicalProperties();
	}
}
