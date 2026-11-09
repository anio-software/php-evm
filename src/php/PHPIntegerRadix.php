<?php

namespace AnioSoftware\EVM\PHP;

enum PHPIntegerRadix: string {
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

	static public function detectAndParse(string $str, bool $negative = false): array|null {
		if (\str_contains($str, ".")) {
			return NULL;
		} else if (\substr($str, 0, 1) === "-") {
			return self::detectAndParse(\substr($str, 1), !$negative);
		}

		$normalized = \strtolower($str);
		$radix      = NULL;
		$value      = NULL;

		if (\str_starts_with($normalized, "0x")) {
			$radix = self::kHexadecimal;
			$value = \substr($str, 2);
		} else if (\str_starts_with($normalized, "0b")) {
			$radix = self::kBinary;
			$value = \substr($str, 2);
		} else if (\str_starts_with($normalized, "0o")) {
			$radix = self::kOctal;
			$value = \substr($str, 2);
		} else if (\str_starts_with($normalized, "0") && \strlen($normalized) >= 2) {
			$radix = self::kOctal;
			$value = \substr($str, 1);
		} else if (\is_numeric($str)) {
			$radix = self::kDecimal;
			$value = $str;
		} else {
			return NULL;
		}

		return [
			"value" => $radix->parseWithoutPrefix($value) * ($negative ? -1 : 1),
			"radix" => $radix
		];
	}
}
