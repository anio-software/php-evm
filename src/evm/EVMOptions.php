<?php

namespace AnioSoftware\EVM;

final readonly class EVMOptions {
	public function __construct(
		public string $manualPath,
		public ?PHP\PHPNamespace $globalNamespace = NULL
	) {}
}
