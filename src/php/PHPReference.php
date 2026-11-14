<?php

namespace AnioSoftware\EVM\PHP;

readonly class PHPReference extends PHPLogicalPropertiesObject {
	public function __construct(
		public string $referenceId
	) {}
}
