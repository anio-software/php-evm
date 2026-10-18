<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPNamedType implements PHPType {
	public function __construct(
		public string $name
	) {}
}

