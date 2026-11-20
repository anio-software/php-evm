<?php

namespace AnioSoftware\EVM\PHP;

trait PHPStructuredObjectBehavior {
	private PHPLogicalPropertySet $props;

	abstract public function getLogicalPropertySet(): PHPLogicalPropertySet;

	final public function isLogicallyEqualTo(self $that): bool {
		$a = canonicalizeStructuredObject($this);
		$b = canonicalizeStructuredObject($that);

		return stable_json_encode($a) === stable_json_encode($b);
	}

	final public function logicalDiff(self $that): PHPStructuredObjectDiff {
		return new PHPStructuredObjectDiff($this, $that);
	}

	final public function toCanonicalizedArray(): array {
		return canonicalizeStructuredObject($this);
	}

	final public function jsonSerialize(): mixed {
		return $this->toCanonicalizedArray();
	}
}
