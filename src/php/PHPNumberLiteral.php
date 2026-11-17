<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPNumberLiteral extends PHPLiteral {
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

	abstract public function getNumberLiteralKind(): PHPNumberLiteralKind;

	public function getLogicalProperties(): PHPLogicalPropertySet {
		return PHPLogicalPropertySetBuilder::create(
			parent::getLogicalProperties(),
			PHPLogicalPropertyDomain::kNumberLiteral
		)
		->withProperty(PHPLogicalProperty::kNumberLiteralKind, $this->getNumberLiteralKind())
		->finalize();
	}
}
