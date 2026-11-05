<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPPlaceholderExpression extends PHPExpression {
	private function __construct() {}

	public function getExpressionKind(): PHPExpressionKind {
		return PHPExpressionKind::kPlaceholder;
	}

	public function render(): string {
		return "?";
	}

	static public function instance(): self {
		static $instance = NULL;

		return $instance ??= new self;
	}
}
