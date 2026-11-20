<?php

namespace AnioSoftware\EVM\PHP;

interface PHPStructuredObject extends \JsonSerializable {
	public function getLogicalPropertySet(): PHPLogicalPropertySet;

	public function isLogicallyEqualTo(self $that): bool;

	public function logicalDiff(self $that): PHPStructuredObjectDiff;

	public function toCanonicalizedArray(): array;

	public function jsonSerialize(): mixed;
}
