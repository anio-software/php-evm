<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPManualIndexChanges {
	public function __construct(
		public array $removed,
		public array $added,
		public array $retained
	) {}
}
