<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPFunctionAlias extends PHPDefinition {
	private PHPLogicalPropertySet $props;

	private function __construct(
		PHPDefinitionMetadata $metadata,
		PHPNamespace $namespace,
		string $referenceId,
		string $name,
		public string $originalName
	) {
		parent::__construct(
			PHPDefinitionKind::kFunctionAlias,
			$metadata,
			$namespace,
			$referenceId,
			$name
		);

		# note: make sure to initialize this property last
		$this->props = PHPLogicalPropertySetBuilder::create(
			parent::getLogicalPropertySet(),
			PHPLogicalPropertyDomain::kFunctionAlias
		)
		->withProperty(PHPLogicalProperty::kFunctionAliasOriginalName, $this->originalName)
		->finalize();
	}

	static public function create(
		PHPDefinitionMetadata $metadata,
		PHPNamespace $namespace,
		string $referenceId,
		string $name,
		string $originalName
	): self {
		return new self(
			$metadata,
			$namespace,
			$referenceId,
			$name,
			$originalName
		);
	}

	public function getLogicalPropertySet(): PHPLogicalPropertySet {
		return $this->props;
	}
}
