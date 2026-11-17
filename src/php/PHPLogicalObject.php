<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPLogicalObject implements \JsonSerializable {
	abstract protected function provideLogicalProperties(): PHPLogicalPropertySet;

	// The separation of provideLogicalProperties() and getLogicalProperties()
	// is an artefact of the old code base.
	final public function getLogicalProperties(): PHPLogicalPropertySet {
		return $this->provideLogicalProperties();
	}

	final public function isLogicallyEqualTo(self $that): bool {
		return $this->getLogicalProperties()->isEqualTo(
			$that->getLogicalProperties()
		);
	}

	final public function jsonSerialize(): mixed {
		return $this->provideLogicalProperties()->toCanonicalized();
	}
}
