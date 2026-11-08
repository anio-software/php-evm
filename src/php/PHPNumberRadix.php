<?php

namespace AnioSoftware\EVM\PHP;

enum PHPNumberRadix: string {
	case kDecimal     = "decimal";
	case kHexadecimal = "hexadecimal";
	case kOctal       = "octal";
	case kBinary      = "binary";

	public function getRadix(): int {
		return match($this) {
			self::kDecimal     => 10,
			self::kHexadecimal => 16,
			self::kOctal       => 8,
			self::kBinary      => 2
		};
	}
}
