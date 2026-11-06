<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPExpression implements \JsonSerializable {
	final private ?string $sourceCode;

	public function __construct(?string $sourceCode = NULL) {
		$this->sourceCode = $sourceCode;
	}

	final public function getSourceCode(): ?string {
		return $this->sourceCode;
	}

	abstract public function getExpressionKind(): PHPExpressionKind;
	abstract public function render(): string;
	abstract public function isRepresentableInCode(): bool;

	public function jsonSerialize(): mixed {
		return [
			"expressionKind" => $this->getExpressionKind()
		];
	}
}
