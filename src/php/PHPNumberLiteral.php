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
	}

	final public function getNumberLiteralKind(): PHPNumberLiteralKind {
		return $this->numberLiteralKind;
	}

	public function getLogicalProperties(): PHPLogicalPropertySet {
		return PHPLogicalPropertySetBuilder::create(
			parent::getLogicalProperties(),
			PHPLogicalPropertyDomain::kNumberLiteral
		)
		->withProperty(PHPLogicalProperty::kNumberLiteralKind, $this->numberLiteralKind)
		->finalize();
	}
}
