<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPStringLiteral extends PHPLiteral {
	public function __construct(string $value, ?string $sourceCode = NULL) {
		parent::__construct($value, $sourceCode);
	}

	abstract public function getStringLiteralKind(): PHPStringLiteralKind;

	final public function getLiteralKind(): PHPLiteralKind {
		return PHPLiteralKind::kString;
	}

	protected function provideLogicalProperties(): PHPLogicalPropertySet {
		return PHPLogicalPropertySet::create(
			parent::provideLogicalProperties(),
			PHPLogicalPropertyGroup::kStringLiteral
		)
		->withProperty(PHPLogicalProperty::kStringLiteralKind, $this->getStringLiteralKind());
	}
}
