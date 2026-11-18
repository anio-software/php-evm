<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPStructuredObject implements \JsonSerializable {
	abstract public function getLogicalPropertySet(): PHPLogicalPropertySet;

	final public function isLogicallyEqualTo(self $that): bool {
		$a = canonicalizeLogicalObject($this);
		$b = canonicalizeLogicalObject($that);

		return stable_json_encode($a) === stable_json_encode($b);
	}

	final public function logicalDiff(self $that): PHPLogicalObjectDiff {
		return new PHPLogicalObjectDiff($this, $that);
	}

	final public function toCanonicalizedArray(): array {
		return canonicalizeLogicalObject($this);
	}

	final public function jsonSerialize(): mixed {
		return $this->toCanonicalizedArray();
	}
}
