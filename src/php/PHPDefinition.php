<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPDefinition extends PHPReference {
	public function __construct(
		public PHPDefinitionKind $kind,
		public PHPDefinitionMetadata $metadata,
		public PHPNamespace $namespace,
		string $referenceId,
		public string $name
	) {
		parent::__construct($referenceId);
	}

	abstract public function getDefinitionKind(): PHPDefinitionKind;

	final public function getDefinitionId(): string {
		return static::class.":".$this->getFullyQualifiedName();
	}

	final public function getFullyQualifiedName(): string {
		return $this->namespace->getFullyQualifiedName()."\\".$this->name;
	}

	public function getLogicalProperties(): PHPLogicalPropertySet {
		return PHPLogicalPropertySetBuilder::create(
			parent::getLogicalProperties(),
			PHPLogicalPropertyDomain::kDefinition
		)
		->withProperty(PHPLogicalProperty::kDefinitionMetadata           , $this->metadata)
		->withProperty(PHPLogicalProperty::kDefinitionKind               , $this->getDefinitionKind())
		->withProperty(PHPLogicalProperty::kDefinitionNamespace          , $this->namespace->getFullyQualifiedName())
		->withProperty(PHPLogicalProperty::kDefinitionName               , $this->name)
		->withProperty(PHPLogicalProperty::kDefinitionFullyQualifiedName , $this->getFullyQualifiedName())
		->finalize();
	}
}
