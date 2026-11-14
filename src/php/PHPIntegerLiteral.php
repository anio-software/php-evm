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

	public function getNumberLiteralKind(): PHPNumberLiteralKind {
		return PHPNumberLiteralKind::kInteger;
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

	//public function jsonSerialize(): mixed {}

	static public function parse(string $str, bool $negative = false): ?self {
		if (\str_contains($str, ".")) {
			return NULL;
		} else if (\substr($str, 0, 1) === "-") {
			return self::parse(\substr($str, 1), !$negative);
		}

		$normalized = \strtolower($str);
		$radix      = NULL;
		$value      = NULL;

		if (\str_starts_with($normalized, "0x")) {
			$radix = PHPIntegerRadix::kHexadecimal;
			$value = \substr($str, 2);
		} else if (\str_starts_with($normalized, "0b")) {
			$radix = PHPIntegerRadix::kBinary;
			$value = \substr($str, 2);
		} else if (\str_starts_with($normalized, "0o")) {
			$radix = PHPIntegerRadix::kOctal;
			$value = \substr($str, 2);
		} else if (\str_starts_with($normalized, "0") && \strlen($normalized) >= 2) {
			$radix = PHPIntegerRadix::kOctal;
			$value = \substr($str, 1);
		} else if (\is_numeric($str)) {
			$radix = PHPIntegerRadix::kDecimal;
			$value = $str;
		} else {
			return NULL;
		}

		return new self(
			$radix->parseWithoutPrefix($value) * ($negative ? -1 : 1),
			$radix,
			$str
		);
	}
}
