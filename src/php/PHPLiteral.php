<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPLiteral extends PHPExpression {
	final protected mixed $value;

	public function __construct(mixed $value) {
		$this->value = $value;
	}

	final public function getValue(): mixed {
		return $this->value;
	}

	final public function getExpressionKind(): PHPExpressionKind {
		return PHPExpressionKind::kLiteral;
	}

	abstract public function getLiteralKind(): PHPLiteralKind;

	final public function jsonSerialize(): mixed {
		return [
			...parent::jsonSerialize(),
			"literalKind" => $this->getLiteralKind()
		];
	}
}
