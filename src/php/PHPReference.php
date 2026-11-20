<?php

namespace AnioSoftware\EVM\PHP;

readonly class PHPReference implements PHPStructuredObject {
	use PHPStructuredObjectBehavior;

	private PHPLogicalPropertySet $props;

	public function __construct(
		public string $referenceId
	) {
		# note: make sure to initialize this property last
		$this->props = PHPLogicalPropertySetBuilder::create(
			NULL, PHPLogicalPropertyDomain::kReference
		)
		->withProperty(PHPLogicalProperty::kReferenceId, $this->referenceId)
		->finalize();
	}

	public function getLogicalPropertySet(): PHPLogicalPropertySet {
		return $this->props;
	}
}
