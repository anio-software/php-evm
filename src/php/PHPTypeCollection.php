<?php

namespace AnioSoftware\X2J\PHP;

abstract readonly class PHPTypeCollection implements PHPType {
	final public function getTypeId(): string {
		return getTypeCollectionId($this);
	}

	abstract public function getTypeCollectionKind(): PHPTypeCollectionKind;
	abstract public function getTypeMembers(): array;
	abstract public function getTypeOperator(): PHPTypeOperator;
}
