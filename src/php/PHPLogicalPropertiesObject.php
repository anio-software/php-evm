<?php

namespace AnioSoftware\EVM\PHP;

abstract class PHPLogicalPropertiesObject implements \JsonSerializable {
	abstract public function getLogicalProperties(): array;

	final public function jsonSerialize(): mixed {
		return $this->getLogicalProperties();
	}
}
