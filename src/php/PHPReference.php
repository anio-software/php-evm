<?php

namespace AnioSoftware\EVM\PHP;

readonly abstract class PHPReference {
	public function __construct(
		public string $referenceId
	) {}
}
