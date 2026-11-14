<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPDefinition extends PHPReference implements \JsonSerializable {
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

	//public function jsonSerialize(): mixed {}
}
