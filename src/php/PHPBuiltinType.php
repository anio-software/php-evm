<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPBuiltinType extends PHPType {
	private function __construct(
		private PHPBuiltinTypeKind $kind
	) {}

	static public function fromKind(PHPBuiltinTypeKind $kind): self {
		static $instances = [];

		$instances[$kind->name] ??= new self($kind);

		return $instances[$kind->name];
	}

	public function getTypeKind(): PHPTypeKind {
		return PHPTypeKind::kBuiltin;
	}

	public function jsonSerialize(): mixed {
		return [
			...parent::jsonSerialize(),
			"kind" => $this->getBuiltinKind()->value
		];
	}

	public function getBuiltinKind(): PHPBuiltinTypeKind {
		return $this->kind;
	}

	public function getTypeId(): string {
		return "builtin:".$this->kind->name;
	}

	public function isEqualTo(PHPType $t): bool {
		if (!($t instanceof self)) {
			return false;
		}

		return $t->kind === $this->kind;
	}

	public function render(): string {
		return $this->kind->value;
	}

	public function isRepresentableInCode(): bool {
		return $this->kind !== PHPBuiltinTypeKind::kResource;
	}

	public function isCompoundType(): bool {
		return false;
	}

	public function toNullable(): PHPType {
		if (
			$this->kind === PHPBuiltinTypeKind::kMixed ||
			$this->kind === PHPBuiltinTypeKind::kNull  ||
			$this->kind === PHPBuiltinTypeKind::kNever
		) {
			return $this;
		}

		return new PHPUnionType(
			PHPBuiltinTypeKind::kNull->toType(),
			$this
		);
	}

	public function getNamespace(): ?PHPNamespace {
		return NULL;
	}
}
