<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPLogicalPropertiesObject implements \JsonSerializable {
	abstract protected function provideLogicalProperties(): PHPLogicalProperties;

	// The separation of provideLogicalProperties() and getLogicalProperties()
	// is an artefact of the old code base.
	final public function getLogicalProperties(): PHPLogicalProperties {
		return $this->provideLogicalProperties();
	}

	final public function jsonSerialize(): mixed {
		return $this->provideLogicalProperties()->toCanonicalized();
	}
}
