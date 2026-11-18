<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPBuiltinType extends PHPType {
	private PHPLogicalPropertySet $props;

	private function __construct(
		private PHPBuiltinTypeKind $builtinKind
	) {
		parent::__construct(
			PHPTypeKind::kBuiltin,
			NULL
		);

		# note: make sure to initialize this property last
		$this->props = PHPLogicalPropertySetBuilder::create(
			parent::getLogicalPropertySet(),
			PHPLogicalPropertyDomain::kBuiltinType
		)
		->withProperty(PHPLogicalProperty::kBuiltinTypeKind, $this->builtinKind)
		->finalize();
	}

	static public function fromKind(PHPBuiltinTypeKind $kind): self {
		static $instances = [];

		$instances[$kind->name] ??= new self($kind);

		return $instances[$kind->name];
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

		return $t->getBuiltinKind() === $this->builtinKind;
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

	public function getLogicalPropertySet(): PHPLogicalPropertySet {
		return $this->props;
	}
}
