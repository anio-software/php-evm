<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPLiteral extends PHPExpression {
	final protected mixed $value;

	public function __construct(mixed $value, ?string $sourceCode = NULL) {
		parent::__construct(
			PHPExpressionKind::kLiteral,
			$sourceCode
		);

		$this->value = $value;
	}

	final public function isRepresentableInCode(): bool {
		return true;
	}

	final public function getValue(): mixed {
		return $this->value;
	}

	abstract public function getLiteralKind(): PHPLiteralKind;

	public function getLogicalProperties(): PHPLogicalPropertySet {
		return PHPLogicalPropertySetBuilder::create(
			parent::getLogicalProperties(),
			PHPLogicalPropertyDomain::kLiteral
		)
		->withProperty(PHPLogicalProperty::kLiteralKind , $this->getLiteralKind())
		->withProperty(PHPLogicalProperty::kLiteralValue, $this->value)
		->finalize();
	}
}
