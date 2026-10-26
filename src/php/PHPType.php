<?php

namespace AnioSoftware\X2J\PHP;

interface PHPType extends \JsonSerializable {
	public function getTypeId(): string;
	public function isEqualTo(PHPType $t): bool;
	public function render(): string;
}
