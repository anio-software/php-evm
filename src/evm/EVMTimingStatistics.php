<?php

namespace AnioSoftware\EVM;

final readonly class EVMTimingStatistics {
	public function __construct(
		public int|float $elapsedTimeMsClassLikes,
		public int|float $elapsedTimeMsConstants,
		public int|float $elapsedTimeMsFunctions,
		public int|float $elapsedTimeMs,
	) {}

	static public function measure(callable $fn): float {
		$start = \hrtime(true);

		$fn();

		$elapsed = \hrtime(true) - $start;

		return ($elapsed / 1E6);
	}
}
