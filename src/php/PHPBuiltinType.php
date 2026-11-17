<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPBuiltinType extends PHPType {
	private function __construct(
		private PHPBuiltinTypeKind $builtinKind
	) {
		parent::__construct(
			NULL
		);
	}

	static public function fromKind(PHPBuiltinTypeKind $kind): self {
		static $instances = [];

		$instances[$kind->name] ??= new self($kind);

		return $instances[$kind->name];
	}

	public function getTypeKind(): PHPTypeKind {
		return PHPTypeKind::kBuiltin;
	}

	public function getBuiltinKind(): PHPBuiltinTypeKind {
		return $this->builtinKind;
	}

	public function getTypeId(): string {
		return "builtin:".$this->builtinKind->name;
	}

	public function isEqualTo(PHPType $t): bool {
		if (!($t instanceof self)) {
			return false;
		}

		return $t->builtinKind === $this->builtinKind;
	}

	public function render(): string {
		return $this->builtinKind->value;
	}

	public function isRepresentableInCode(): bool {
		return $this->builtinKind !== PHPBuiltinTypeKind::kResource;
	}

	public function isCompoundType(): bool {
		return false;
	}

	public function toNullable(): PHPType {
		if (
			$this->builtinKind === PHPBuiltinTypeKind::kMixed ||
			$this->builtinKind === PHPBuiltinTypeKind::kNull  ||
			$this->builtinKind === PHPBuiltinTypeKind::kNever
		) {
			return $this;
		}

		return new PHPUnionType(
			PHPBuiltinTypeKind::kNull->toType(),
			$this
		);
	}

	public function getLogicalProperties(): PHPLogicalPropertySet {
		return PHPLogicalPropertySetBuilder::create(
			parent::getLogicalProperties(),
			PHPLogicalPropertyDomain::kBuiltinType
		)
		->withProperty(PHPLogicalProperty::kBuiltinTypeKind, $this->getBuiltinKind())
		->finalize();
	}
}
