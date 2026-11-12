<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPLogicalPropertiesObject implements \JsonSerializable {
	abstract public function getLogicalPropertyGroup(): PHPLogicalPropertyGroup;
	abstract public function getLogicalProperties(): array;

	final public function jsonSerialize(): mixed {
		return $this->getLogicalProperties();
	}
}
