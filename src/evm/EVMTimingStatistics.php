<?php

namespace AnioSoftware\EVM;

final readonly class EVMTimingStatistics {
	public function __construct(
		public int|float $elapsedTimeMsClassLikes,
		public int|float $elapsedTimeMsConstants,
		public int|float $elapsedTimeMsFunctions,
		public int|float $elapsedTimeMs,
	) {}
}
