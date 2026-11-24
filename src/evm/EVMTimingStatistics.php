<?php

namespace AnioSoftware\EVM;

final readonly class EVMTimingStatistics {
	public function __construct(
		public int|float $enums,
		public int|float $interfaces,
		public int|float $classes,
		public int|float $constants,
		public int|float $functions,
		public int|float $functionAliases,
		public int|float $total
	) {}

	static public function measure(callable $fn): float {
		$start = \hrtime(true);

		$fn();

		$elapsed = \hrtime(true) - $start;

		return ($elapsed / 1E6);
	}
}
