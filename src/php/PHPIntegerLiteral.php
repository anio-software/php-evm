<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPIntegerLiteral extends PHPNumberLiteral {
	public function __construct(
		int $value,
		private PHPNumberRadix $radix = PHPNumberRadix::kDecimal,
		?string $sourceCode = NULL
	) {
		parent::__construct($value, $sourceCode);
	}

	public function getNumberRadix(): PHPNumberRadix {
		return $this->radix;
	}

	public function render(): string {
		// todo: handle PHP_INT_MIN
		$sign  = (0 > $this->value) ? "-" : "";
		$value = \abs($this->value);

		$str = match($this->radix) {
			PHPNumberRadix::kDecimal     => (string)$value,
			PHPNumberRadix::kHexadecimal => "0x".\dechex($value),
			PHPNumberRadix::kOctal       => "0".\decoct($value),
			PHPNumberRadix::kBinary      => "0b".\decbin($value)
		};

		return "$sign$str";
	}
}
