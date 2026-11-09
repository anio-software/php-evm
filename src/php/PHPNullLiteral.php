<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPNullLiteral extends PHPLiteral {
	private function __construct() {
		parent::__construct(NULL);
	}

	public function getLiteralKind(): PHPLiteralKind {
		return PHPLiteralKind::kNull;
	}

	public function renderExpression(): string {
		return "NULL";
	}

	static public function instance(): self {
		static $instance = NULL;

		return $instance ??= new self;
	}
}
