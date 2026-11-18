<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPNumberLiteral extends PHPLiteral {
	private PHPLogicalPropertySet $props;

	public function __construct(
		public PHPNumberLiteralKind $numberLiteralKind,
		int|float $value,
		?string $sourceCode = NULL
	) {
		parent::__construct(
			PHPLiteralKind::kNumber,
			$value,
			$sourceCode
		);

		# note: make sure to initialize this property last
		$this->props = PHPLogicalPropertySetBuilder::create(
			parent::getLogicalPropertySet(),
			PHPLogicalPropertyDomain::kNumberLiteral
		)
		->withProperty(PHPLogicalProperty::kNumberLiteralKind, $this->numberLiteralKind)
		->finalize();
	}

	final public function getNumberLiteralKind(): PHPNumberLiteralKind {
		return $this->numberLiteralKind;
	}

	public function getLogicalPropertySet(): PHPLogicalPropertySet {
		return $this->props;
	}
}
