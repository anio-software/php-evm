<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPNumberLiteral extends PHPLiteral {
	public function __construct(int|float $value, ?string $sourceCode = NULL) {
		parent::__construct($value, $sourceCode);
	}

	abstract public function getNumberLiteralKind(): PHPNumberLiteralKind;

	final public function getLiteralKind(): PHPLiteralKind {
		return PHPLiteralKind::kNumber;
	}

	public function getLogicalProperties(): PHPLogicalPropertySet {
		return PHPLogicalPropertySet::create(
			parent::getLogicalProperties(),
			PHPLogicalPropertyDomain::kNumberLiteral
		)
		->withProperty(PHPLogicalProperty::kNumberLiteralKind, $this->getNumberLiteralKind());
	}
}
