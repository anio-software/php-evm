<?php

namespace AnioSoftware\EVM;

final readonly class X2JOptions {
	public function __construct(
		public string $manualPath,
		public ?PHP\PHPNamespace $globalNamespace = NULL
	) {}
}
