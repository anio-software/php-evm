<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPNamedType extends PHPType {
	public function __construct(
		public PHPNamespace $namespace,
		public string $name
	) {}

	public function getTypeKind(): PHPTypeKind {
		return PHPTypeKind::kNamed;
	}

	public function getFullyQualifiedName(): string {
		return $this->namespace->getFullyQualifiedName()."\\".$this->name;
	}

	public function jsonSerialize(): mixed {
		return [
			"typeKind"           => "NamedType",
			"namespace"          => $this->namespace->getFullyQualifiedName(),
			"name"               => $this->name,
			"fullyQualifiedName" => $this->getFullyQualifiedName()
		];
	}

	public function getTypeId(): string {
		return "named:".$this->getFullyQualifiedName();
	}

	public function isEqualTo(PHPType $t): bool {
		if (!($t instanceof self)) {
			return false;
		}

		return $t->getFullyQualifiedName() === $this->getFullyQualifiedName();
	}

	public function render(): string {
		return $this->getFullyQualifiedName();
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
