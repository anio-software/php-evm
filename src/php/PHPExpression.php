<?php

namespace AnioSoftware\EVM\PHP;

abstract readonly class PHPExpression implements \JsonSerializable {
	abstract public function getExpressionKind(): PHPExpressionKind;
	abstract public function render(): string;

	public function jsonSerialize(): mixed {
		return [
			"expressionKind" => $this->getExpressionKind()
		];
	}
}
