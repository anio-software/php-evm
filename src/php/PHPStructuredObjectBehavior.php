<?php

namespace AnioSoftware\EVM\PHP;

use AnioSoftware\EVM\Utils as Utils;

trait PHPStructuredObjectBehavior {
	abstract public function getLogicalPropertySet(): PHPLogicalPropertySet;

	final public function isLogicallyEqualTo(PHPStructuredObject $that): bool {
		$a = Bits\canonicalizeStructuredObject($this);
		$b = Bits\canonicalizeStructuredObject($that);

		return Utils\stable_json_encode($a) === Utils\stable_json_encode($b);
	}

	final public function logicalDiff(PHPStructuredObject $that): PHPStructuredObjectDiff {
		return new PHPStructuredObjectDiff($this, $that);
	}

	final public function toCanonicalizedArray(): array {
		return Bits\canonicalizeStructuredObject($this);
	}

	final public function jsonSerialize(): mixed {
		return $this->toCanonicalizedArray();
	}
}
