<?php

namespace AnioSoftware\EVM\PHP;

enum PHPIntegerRadix: string implements \JsonSerializable {
	case kDecimal     = "decimal";
	case kHexadecimal = "hexadecimal";
	case kOctal       = "octal";
	case kBinary      = "binary";

	public function parseWithoutPrefix(string $str): int|float {
		return match($this) {
			self::kDecimal     => (int)$str,
			self::kHexadecimal => \hexdec($str),
			self::kOctal       => \octdec($str),
			self::kBinary      => \bindec($str)
		};
	}

	public function getRadix(): int {
		return match($this) {
			self::kDecimal     => 10,
			self::kHexadecimal => 16,
			self::kOctal       => 8,
			self::kBinary      => 2
		};
	}

	public function jsonSerialize(): mixed {
		return jsonSerializeEnumObject($this);
	}
}
