<?php

namespace AnioSoftware\EVM\PHP;

readonly class PHPReference extends PHPLogicalObject {
	public function __construct(
		public string $referenceId
	) {}

	protected function provideLogicalProperties(): PHPLogicalPropertySet {
		return PHPLogicalPropertySet::create(
			NULL, PHPLogicalPropertyGroup::kReference
		)
		->withProperty(PHPLogicalProperty::kReferenceId, $this->referenceId);
	}
}
