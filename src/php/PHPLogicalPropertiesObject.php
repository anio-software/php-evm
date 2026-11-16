<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPLogicalPropertiesObject implements \JsonSerializable {
	abstract protected function provideLogicalProperties(): PHPLogicalProperties;

	final public function getLogicalProperties(): PHPLogicalProperties {
		return $this->provideLogicalProperties(); // tbd
	}

	final public function jsonSerialize(): mixed {
		return $this->getLogicalProperties();
	}
}
