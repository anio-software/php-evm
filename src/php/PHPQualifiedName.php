<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPQualifiedName {
	public function __construct(
		public string $localName,
		public string $namespace
	) {}
}
