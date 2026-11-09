<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPDoubleQuotedStringLiteral extends PHPStringLiteral {
	public function __construct(string $value, ?string $sourceCode = NULL) {
		parent::__construct($value, $sourceCode);
	}

	public function renderExpression(): string {
		// todo: this is technically incomplete
		return '"'.\strtr($this->value, [
			'\\' => '\\\\',
			'"'  => '\\"',
			'$'  => '\\$',
			"\n" => '\\n',
			"\r" => '\\r',
			"\t" => '\\t',
			"\v" => '\\v',
			"\e" => '\\e',
			"\f" => '\\f',
			"\0" => '\\x00'
		]).'"';
	}

	public function getStringLiteralKind(): PHPStringLiteralKind {
		return PHPStringLiteralKind::kDoubleQuoted;
	}

	static public function parse(string $string): ?self {
		if (!\str_starts_with($string, '"')) {
			return NULL;
		} else if (!\str_ends_with($string, '"')) {
			return NULL;
		}

		// todo: this is technically incomplete
		return new self(
			\stripcslashes(
				\substr($string, 1, -1)
			), $string
		);
	}
}
