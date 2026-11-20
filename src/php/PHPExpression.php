<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPExpression implements PHPStructuredObject {
	use PHPStructuredObjectBehavior;

	private PHPLogicalPropertySet $props;

	public function __construct(
		public PHPExpressionKind $kind,
		private ?string $sourceCode = NULL
	) {
		# note: make sure to initialize this property last
		$this->props = PHPLogicalPropertySetBuilder::create(
			NULL, PHPLogicalPropertyDomain::kExpression
		)
		->withProperty(PHPLogicalProperty::kExpressionKind      , $this->kind)
		->withProperty(PHPLogicalProperty::kExpressionSourceCode, $this->sourceCode)
		->finalize();
	}

	final public function getSourceCode(): ?string {
		return $this->sourceCode;
	}

	final public function render(): string {
		return $this->sourceCode ?? $this->renderExpression();
	}

	final public function getExpressionKind(): PHPExpressionKind {
		return $this->kind;
	}

	abstract public function renderExpression(): string;
	abstract public function isRepresentableInCode(): bool;

	public function getLogicalPropertySet(): PHPLogicalPropertySet {
		return $this->props;
	}
}
