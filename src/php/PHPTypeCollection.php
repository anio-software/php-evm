<?php

namespace AnioSoftware\X2J\PHP;

interface PHPTypeCollection extends PHPType {
	public function getTypeCollectionKind(): PHPTypeCollectionKind;
	public function getTypeMembers(): array;
	public function getTypeOperator(): PHPTypeOperator;
}
