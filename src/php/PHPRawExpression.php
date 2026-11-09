<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPRawExpression extends PHPExpression {
	public function __construct(string $sourceCode) {
		parent::__construct($sourceCode);
	}

	public function getExpressionKind(): PHPExpressionKind {
		return PHPExpressionKind::kRaw;
	}

	public function renderExpression(): string {
		return $this->getSourceCode();
	}

	public function isRepresentableInCode(): bool {
		return true;
	}
}
