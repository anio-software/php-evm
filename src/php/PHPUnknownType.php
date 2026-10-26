<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPUnknownType implements PHPType {
	public function jsonSerialize(): mixed {
		return [
			"typeKind" => "UnknownType"
		];
	}

	public function getTypeId(): string {
		return "unknown";
	}

	public function isEqualTo(PHPType $t): bool {
		return $t instanceof self;
	}

	public function render(): string {
		return "unknown";
	}
}
