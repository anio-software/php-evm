<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPUnknownType implements PHPType {
	public function jsonSerialize(): mixed {
		return [
			"typeKind" => "UnknownType"
		];
	}

	public function key(): string {
		return "unknown";
	}
}
