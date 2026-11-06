<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPRawExpression extends PHPExpression {
	public function getExpressionKind(): PHPExpressionKind {
		return PHPExpressionKind::kRaw;
	}

	public function render(): string {
		return $this->getSourceCode();
	}

	public function isRepresentableInCode(): bool {
		return true;
	}
}
