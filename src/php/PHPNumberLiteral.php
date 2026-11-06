<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPNumberLiteral extends PHPLiteral {
	public function __construct(int|float $value, ?string $sourceCode = NULL) {
		parent::__construct($value, $sourceCode);
	}

	final public function getLiteralKind(): PHPLiteralKind {
		return PHPLiteralKind::kNumber;
	}
}
