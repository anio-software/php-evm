<?php

namespace AnioSoftware\EVM;

final readonly class EVMOptions {
	public function __construct(
		public ?PHP\PHPNamespace $globalNamespace = NULL
	) {}
}
