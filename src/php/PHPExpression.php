<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPExpression implements \JsonSerializable {
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

	//public function jsonSerialize(): mixed {}
}
