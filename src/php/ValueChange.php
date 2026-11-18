<?php

namespace AnioSoftware\EVM\PHP;

final readonly class ValueChange {
	public function __construct(
		public mixed $oldValue,
		public mixed $newValue
	) {}
}
