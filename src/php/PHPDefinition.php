<?php

namespace AnioSoftware\X2J\PHP;

readonly abstract class PHPDefinition extends PHPReference implements \JsonSerializable {
	public function __construct(
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

	public function jsonSerialize(): mixed {
		return [
			"definitionKind"     => $this->getDefinitionKind(),
			"namespace"          => $this->namespace->getFullyQualifiedName(),
			"referenceId"        => $this->referenceId,
			"name"               => $this->name,
			"fullyQualifiedName" => $this->getFullyQualifiedName()
		];
	}
}
