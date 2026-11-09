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

	public function jsonSerialize(): mixed {
		return [
			...parent::jsonSerialize(),
			"numberLiteralKind" => $this->getNumberLiteralKind()
		];
	}
}
