<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPFloatLiteral extends PHPNumberLiteral {
	public function __construct(
		float $value,
		?string $sourceCode = NULL
	) {
		parent::__construct($value, $sourceCode);

		if (!\is_finite($value)) {
			throw new \InvalidArgumentException("Float literal must be finite.");
		}
	}

	public function getNumberLiteralKind(): PHPNumberLiteralKind {
		return PHPNumberLiteralKind::kInteger;
	}

	public function renderExpression(): string {
		$str = (string)$this->value;

		if (
			!\str_contains($str, ".") &&
			!\str_contains($str, "E") &&
			!\str_contains($str, "e")
		) {
			$str .= ".0";
		}

		return $str;
	}
}
