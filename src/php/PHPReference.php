<?php

namespace AnioSoftware\EVM\PHP;

readonly class PHPReference extends PHPLogicalObject {
	private PHPLogicalPropertySet $props;

	public function __construct(
		public string $referenceId
	) {}

	public function getLogicalProperties(): PHPLogicalPropertySet {
		return PHPLogicalPropertySetBuilder::create(
			NULL, PHPLogicalPropertyDomain::kReference
		)
		->withProperty(PHPLogicalProperty::kReferenceId, $this->referenceId)
		->finalize();
	}
}
