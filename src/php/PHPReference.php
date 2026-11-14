<?php

namespace AnioSoftware\EVM\PHP;

readonly class PHPReference extends PHPLogicalPropertiesObject {
	public function __construct(
		public string $referenceId
	) {}

	public function getLogicalPropertyGroup(): PHPLogicalPropertyGroup {
		return PHPLogicalPropertyGroup::kReference;
	}

	protected function provideLogicalProperties(): array {
		return [];
	}
}
