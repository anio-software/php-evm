<?php

namespace AnioSoftware\EVM;

final readonly class EVMOptions {
	public function __construct(
		public ?PHP\PHPNamespace $globalNamespace = NULL
	) {}

	static public function default(): self {
		static $instance = NULL;

		$instance ??= new self(NULL);

		return $instance;
	}
}
