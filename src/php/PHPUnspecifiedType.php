<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPUnspecifiedType implements PHPType {
	public function jsonSerialize(): mixed {
		return [
			"typeKind" => "UnspecifiedType"
		];
	}

	public function getTypeId(): string {
		return "unspecified";
	}
}
