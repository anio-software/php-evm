<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPPlaceholderExpression extends PHPExpression {
	private function __construct() {
		parent::__construct(NULL);
	}

	public function getExpressionKind(): PHPExpressionKind {
		return PHPExpressionKind::kPlaceholder;
	}

	public function render(): string {
		return "?";
	}

	public function isRepresentableInCode(): bool {
		return false;
	}

	static public function instance(): self {
		static $instance = NULL;

		return $instance ??= new self;
	}
}
