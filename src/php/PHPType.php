<?php

namespace AnioSoftware\X2J\PHP;

abstract readonly class PHPType implements \JsonSerializable {
	abstract public function getTypeId(): string;
	abstract public function isEqualTo(PHPType $t): bool;
	abstract public function render(): string;
	abstract public function isCompoundType(): bool;
	abstract public function isRepresentableInCode(): bool;

	public function toCode(): string|false {
		if (!$this->isRepresentableInCode()) {
			return false;
		}

		return $this->render();
	}
}
