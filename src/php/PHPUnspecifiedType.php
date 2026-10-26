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

	public function isEqualTo(PHPType $t): bool {
		return $t instanceof self;
	}

	public function render(): string {
		return "";
	}

	public function isRepresentableInCode(): bool {
		return true;
	}

	static public function instance(): self {
		static $instance = NULL;

		$instance ??= new self;

		return $instance;
	}
}
