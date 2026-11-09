<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPConstantFetchExpression extends PHPExpression {
	public function __construct(
		private PHPConstant $constant,
		?string $sourceCode = NULL
	) {
		parent::__construct($sourceCode);
	}

	public function getConstant(): PHPConstant {
		return $this->constant;
	}

	public function getExpressionKind(): PHPExpressionKind {
		return PHPExpressionKind::kConstantFetch;
	}

	public function renderExpression(): string {
		return $this->constant->getFullyQualifiedName();
	}

	public function isRepresentableInCode(): bool {
		return true;
	}

	public function jsonSerialize(): mixed {
		return [
			...parent::jsonSerialize(),
			"constant" => $this->constant
		];
	}
}
