<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPDefinition extends PHPReference {
	public function __construct(
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

	final public function hash(): string {
		return \hash(
			"sha1", stable_json_encode($this)
		);
	}

	protected function provideLogicalProperties(): array {
		return [
			...parent::provideLogicalProperties(),

			PHPLogicalProperty::kDefinitionMetadata->value           => $this->metadata,
			PHPLogicalProperty::kDefinitionKind->value               => $this->getDefinitionKind(),
			PHPLogicalProperty::kDefinitionNamespace->value          => $this->namespace->getFullyQualifiedName(),
			PHPLogicalProperty::kDefinitionName->value               => $this->name,
			PHPLogicalProperty::kDefinitionFullyQualifiedName->value => $this->getFullyQualifiedName()
		];
	}
}
