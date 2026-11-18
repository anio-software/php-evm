<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPStringLiteral extends PHPLiteral {
	private PHPLogicalPropertySet $props;

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

		# note: make sure to initialize this property last
		$this->props = PHPLogicalPropertySetBuilder::create(
			parent::getLogicalProperties(),
			PHPLogicalPropertyDomain::kStringLiteral
		)
		->withProperty(PHPLogicalProperty::kStringLiteralKind, $this->stringLiteralKind)
		->finalize();
	}

	final public function getStringLiteralKind(): PHPStringLiteralKind {
		return $this->stringLiteralKind;
	}

	public function getLogicalProperties(): PHPLogicalPropertySet {
		return $this->props;
	}
}
