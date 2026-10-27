<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPNamedType extends PHPType {
	public function __construct(
		public PHPNamespace $namespace,
		public string $name
	) {}

	public function jsonSerialize(): mixed {
		return [
			"typeKind" => "NamedType",
			"name"     => $this->name
		];
	}

	public function getTypeId(): string {
		return "named:".$this->name;
	}

	public function isEqualTo(PHPType $t): bool {
		if (!($t instanceof self)) {
			return false;
		}

		return $t->name === $this->name;
	}

	public function render(): string {
		return "\\".$this->name;
	}

	public function isRepresentableInCode(): bool {
		return true;
	}

	public function isCompoundType(): bool {
		return false;
	}

	public function toNullable(): PHPType {
		return new PHPUnionType($this, PHPBuiltinTypeKind::Null->toType());
	}

	public function getNamespace(): ?PHPNamespace {
		return $this->namespace;
	}
}
