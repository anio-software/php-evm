<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPExpression implements \JsonSerializable {
	abstract public function getExpressionKind(): PHPExpressionKind;
	abstract public function render(): string;
	abstract public function isRepresentableInCode(): bool;

	public function jsonSerialize(): mixed {
		return [
			"expressionKind" => $this->getExpressionKind()
		];
	}
}
