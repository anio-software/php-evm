<?php

namespace AnioSoftware\X2J\PHP;

interface PHPType extends \JsonSerializable {
	public function getTypeKey(): string;
}
