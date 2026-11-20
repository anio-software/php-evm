<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPManualEnums implements PHPStructuredObject {
	use PHPStructuredObjectBehavior;

	private PHPLogicalPropertySet $props;

	private function __construct() {
		# note: make sure to initialize this property last
		$this->props = PHPLogicalPropertySetBuilder::create(
			NULL, PHPLogicalPropertyDomain::kManualEnums
		)
		->withProperty(PHPLogicalProperty::kManualEnumsTypeKind           , PHPTypeKind::cases())
		->withProperty(PHPLogicalProperty::kManualEnumsBuiltinTypeKind    , PHPBuiltinTypeKind::cases())
		->withProperty(PHPLogicalProperty::kManualEnumsDefinitionKind     , PHPDefinitionKind::cases())
		->withProperty(PHPLogicalProperty::kManualEnumsExtensionMembership, PHPExtensionMembership::cases())
		->finalize();
	}

	public function getLogicalPropertySet(): PHPLogicalPropertySet {
		return $this->props;
	}

	static public function instance(): self {
		static $instance = NULL;

		return $instance ??= new self;
	}
}
