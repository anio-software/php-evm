<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPLogicalObject implements \JsonSerializable {
	abstract public function getLogicalPropertySet(): PHPLogicalPropertySet;

	final public function isLogicallyEqualTo(self $that): bool {
		return $this->getLogicalPropertySet()->isEqualTo(
			$that->getLogicalPropertySet()
		);
	}

	final public function getLogicalHash(): string {
		return $this->getLogicalPropertySet()->getHash();
	}

	final public function jsonSerialize(): mixed {
		return canonicalizeLogicalObject($this);
	}
}
