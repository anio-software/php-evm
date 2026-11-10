<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPDiff {
	public function __construct(
		public array $removed,
		public array $added,
		public array $retained,
		public array $changed
	) {}
}
