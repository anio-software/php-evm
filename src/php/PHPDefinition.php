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
		$data = $this->jsonSerialize();

		// sort data for stable hash output
		ksort_r($data, \SORT_STRING);

		return \hash(
			"sha1", \json_encode($data, \JSON_THROW_ON_ERROR)
		);
	}

	public function jsonSerialize(): mixed {
		return [
			"definitionMetadata" => $this->metadata,
			"definitionKind"     => $this->getDefinitionKind(),
			"namespace"          => $this->namespace->getFullyQualifiedName(),
			"referenceId"        => $this->referenceId,
			"name"               => $this->name,
			"fullyQualifiedName" => $this->getFullyQualifiedName()
		];
	}
}
