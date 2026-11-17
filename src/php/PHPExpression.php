<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPExpression extends PHPLogicalObject {
	public function __construct(
		private ?string $sourceCode = NULL
	) {}

	final public function getSourceCode(): ?string {
		return $this->sourceCode;
	}

	final public function render(): string {
		return $this->sourceCode ?? $this->renderExpression();
	}

	abstract public function getExpressionKind(): PHPExpressionKind;
	abstract public function renderExpression(): string;
	abstract public function isRepresentableInCode(): bool;

	protected function provideLogicalProperties(): PHPLogicalProperties {
		return PHPLogicalProperties::create(
			NULL, PHPLogicalPropertyGroup::kExpression
		)
		->withProperty(PHPLogicalProperty::kExpressionKind      , $this->getExpressionKind())
		->withProperty(PHPLogicalProperty::kExpressionSourceCode, $this->sourceCode);
	}
}
