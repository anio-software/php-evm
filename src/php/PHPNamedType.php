<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPNamedType extends PHPType {
	private PHPLogicalPropertySet $props;

	public function __construct(
		PHPNamespace $namespace,
		public string $name
	) {
		parent::__construct(
			PHPTypeKind::kNamed,
			$namespace
		);

		# note: make sure to initialize this property last
		$this->props = PHPLogicalPropertySetBuilder::create(
			parent::getLogicalPropertySet(),
			PHPLogicalPropertyDomain::kNamedType
		)
		->withProperty(PHPLogicalProperty::kNamedTypeName              , $this->name)
		->withProperty(PHPLogicalProperty::kNamedTypeFullyQualifiedName, $this->getFullyQualifiedName())
		->finalize();
	}

	public function getFullyQualifiedName(): string {
		return $this->namespace->getFullyQualifiedName()."\\".$this->name;
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
		return new PHPUnionType($this, PHPBuiltinTypeKind::kNull->toType());
	}

	public function getLogicalPropertySet(): PHPLogicalPropertySet {
		return $this->props;
	}
}
