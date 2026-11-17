<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPStringLiteral extends PHPLiteral {
	public function __construct(
		public PHPStringLiteralKind $stringLiteralKind,
		string $value,
		?string $sourceCode = NULL
	) {
		parent::__construct(
			PHPLiteralKind::kString,
			$value,
			$sourceCode
		);
	}

	final public function getStringLiteralKind(): PHPStringLiteralKind {
		return $this->stringLiteralKind;
	}

	public function getLogicalProperties(): PHPLogicalPropertySet {
		return PHPLogicalPropertySetBuilder::create(
			parent::getLogicalProperties(),
			PHPLogicalPropertyDomain::kStringLiteral
		)
		->withProperty(PHPLogicalProperty::kStringLiteralKind, $this->getStringLiteralKind())
		->finalize();
	}
}
