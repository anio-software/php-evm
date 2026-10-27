<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPUnknownType extends PHPType {
	private function __construct() {}

	public function jsonSerialize(): mixed {
		return [
			"typeKind" => "UnknownType"
		];
	}

	public function getTypeKind(): PHPTypeKind {
		return PHPTypeKind::kUnknown;
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

	public function isRepresentableInCode(): bool {
		return false;
	}

	public function isCompoundType(): bool {
		return false;
	}

	public function toNullable(): PHPType {
		return $this;
	}

	public function getNamespace(): ?PHPNamespace {
		return NULL;
	}

	static public function instance(): self {
		static $instance = NULL;

		$instance ??= new self;

		return $instance;
	}
}
