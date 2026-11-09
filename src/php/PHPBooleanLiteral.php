<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPBooleanLiteral extends PHPLiteral {
	private function __construct(bool $value) {
		parent::__construct($value);
	}

	public function getLiteralKind(): PHPLiteralKind {
		return PHPLiteralKind::kBoolean;
	}

	public function renderExpression(): string {
		return $this->getValue() ? "true" : "false";
	}

	static public function instance(bool $value): self {
		static $trueInstance  = NULL;
		static $falseInstance = NULL;

		$trueInstance  ??= new self(true);
		$falseInstance ??= new self(false);

		return $value ? $trueInstance : $falseInstance;
	}
}
