<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPLogicalPropertiesObject implements \JsonSerializable {
	abstract public function getLogicalPropertyGroup(): PHPLogicalPropertyGroup;
	abstract protected function provideLogicalProperties(): array;

	final public function getLogicalProperties(): array {
		return $this->provideLogicalProperties(); // tbd
	}

	final public function jsonSerialize(): mixed {
		return $this->getLogicalProperties();
	}
}
