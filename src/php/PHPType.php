<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPType extends PHPLogicalObject {
	public function __construct(
		public PHPTypeKind $kind,
		public ?PHPNamespace $namespace
	) {
		// tbd
	}

	final public function getNamespace(): ?PHPNamespace {
		return $this->namespace;
	}

	final public function getTypeKind(): PHPTypeKind {
		return $this->kind;
	}

	abstract public function getTypeId(): string;
	abstract public function isEqualTo(PHPType $t): bool;
	abstract public function render(): string;
	abstract public function isCompoundType(): bool;
	abstract public function isRepresentableInCode(): bool;
	abstract public function toNullable(): PHPType;

	final public function isBuiltinType(PHPBuiltinTypeKind $kind): bool {
		if (!($this instanceof PHPBuiltinType)) {
			return false;
		}

		return $this->getBuiltinKind() === $kind;
	}

	public function toCode(): ?string {
		if (!$this->isRepresentableInCode()) {
			return NULL;
		}

		return $this->render();
	}

	public function getLogicalProperties(): PHPLogicalPropertySet {
		$ns = $this->getNamespace();
		$ns = $ns ? $ns->getFullyQualifiedName() : NULL;

		return PHPLogicalPropertySetBuilder::create(
			NULL, PHPLogicalPropertyDomain::kType
		)
		->withProperty(PHPLogicalProperty::kTypeKind     , $this->kind)
		->withProperty(PHPLogicalProperty::kTypeNamespace, $ns)
		->finalize();
	}
}
