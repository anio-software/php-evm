<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPRawExpression extends PHPExpression {
	public function __construct(
		private string $code
	) {}

	public function getCode(): string {
		return $this->code;
	}

	public function getExpressionKind(): PHPExpressionKind {
		return PHPExpressionKind::kRaw;
	}

	public function render(): string {
		return $this->code;
	}

	public function jsonSerialize(): mixed {
		return [
			...parent::jsonSerialize(),
			"code" => $this->getCode()
		];
	}
}
