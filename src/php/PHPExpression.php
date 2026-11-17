<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPExpression extends PHPLogicalObject {
	public function __construct(
		public PHPExpressionKind $kind,
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

	public function getLogicalProperties(): PHPLogicalPropertySet {
		return PHPLogicalPropertySetBuilder::create(
			NULL, PHPLogicalPropertyDomain::kExpression
		)
		->withProperty(PHPLogicalProperty::kExpressionKind      , $this->getExpressionKind())
		->withProperty(PHPLogicalProperty::kExpressionSourceCode, $this->sourceCode)
		->finalize();
	}
}
