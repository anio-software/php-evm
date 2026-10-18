<?php

namespace AnioSoftware\X2J\PHP;

readonly abstract class PHPReference {
	public function __construct(
		public string $referenceId
	) {}
}
