<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPExpression extends PHPLogicalPropertiesObject {
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

	public function getLogicalPropertyGroup(): PHPLogicalPropertyGroup {
		return PHPLogicalPropertyGroup::kExpression;
	}

	protected function provideLogicalProperties(): array {
		return [
			PHPLogicalProperty::kExpressionKind->value       => $this->getExpressionKind(),
			PHPLogicalProperty::kExpressionSourceCode->value => $this->sourceCode
		];
	}
}
