<?php

namespace AnioSoftware\X2J\PHP;

readonly abstract class PHPDefinition extends PHPReference {
	public function __construct(
		public PHPNamespace $namespace,
		string $referenceId,
		public string $name
	) {
		parent::__construct($referenceId);
	}
}
