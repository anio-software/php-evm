<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPIntegerLiteral extends PHPNumberLiteral {
	public function __construct(
		int $value,
		private PHPIntegerRadix $radix = PHPIntegerRadix::kDecimal,
		?string $sourceCode = NULL
	) {
		parent::__construct($value, $sourceCode);
	}

	public function getNumberRadix(): PHPIntegerRadix {
		return $this->radix;
	}

	public function renderExpression(): string {
		// todo: handle PHP_INT_MIN
		$sign  = (0 > $this->value) ? "-" : "";
		$value = \abs($this->value);

		$str = match($this->radix) {
			PHPIntegerRadix::kDecimal     => (string)$value,
			PHPIntegerRadix::kHexadecimal => "0x".\dechex($value),
			PHPIntegerRadix::kOctal       => "0".\decoct($value),
			PHPIntegerRadix::kBinary      => "0b".\decbin($value)
		};

		return "$sign$str";
	}

	public function jsonSerialize(): mixed {
		return [
			...parent::jsonSerialize(),
			"radix" => $this->radix->getRadix()
		];
	}
}
