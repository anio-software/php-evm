<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPLiteral extends PHPExpression {
	final protected mixed $value;

	public function __construct(mixed $value, ?string $sourceCode = NULL) {
		parent::__construct($sourceCode);

		$this->value = $value;
	}

	final public function isRepresentableInCode(): bool {
		return true;
	}

	final public function getValue(): mixed {
		return $this->value;
	}

	final public function getExpressionKind(): PHPExpressionKind {
		return PHPExpressionKind::kLiteral;
	}

	abstract public function getLiteralKind(): PHPLiteralKind;

	protected function provideLogicalProperties(): array {
		return [
			...parent::provideLogicalProperties(),

			PHPLogicalProperty::kLiteralKind->value  => $this->getLiteralKind(),
			PHPLogicalProperty::kLiteralValue->value => $this->value
		];
	}
}
