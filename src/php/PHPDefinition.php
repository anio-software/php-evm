<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPDefinition extends PHPReference {
	private PHPLogicalPropertySet $props;

	public function __construct(
		public PHPDefinitionKind $kind,
		public PHPDefinitionMetadata $metadata,
		public PHPNamespace $namespace,
		string $referenceId,
		public string $name
	) {
		parent::__construct($referenceId);

		# note: make sure to initialize this property last
		$this->props = PHPLogicalPropertySetBuilder::create(
			parent::getLogicalProperties(),
			PHPLogicalPropertyDomain::kDefinition
		)
		->withProperty(PHPLogicalProperty::kDefinitionMetadata           , $this->metadata)
		->withProperty(PHPLogicalProperty::kDefinitionKind               , $this->kind)
		->withProperty(PHPLogicalProperty::kDefinitionNamespace          , $this->namespace->getFullyQualifiedName())
		->withProperty(PHPLogicalProperty::kDefinitionName               , $this->name)
		->withProperty(PHPLogicalProperty::kDefinitionFullyQualifiedName , $this->getFullyQualifiedName())
		->finalize();
	}

	final public function getDefinitionKind(): PHPDefinitionKind {
		return $this->kind;
	}

	final public function getDefinitionId(): string {
		return static::class.":".$this->getFullyQualifiedName();
	}

	final public function getFullyQualifiedName(): string {
		return $this->namespace->getFullyQualifiedName()."\\".$this->name;
	}

	public function getLogicalProperties(): PHPLogicalPropertySet {
		return $this->props;
	}
}
