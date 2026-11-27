<?php

namespace AnioSoftware\EVM;

final readonly class EVMLoadResult {
	public function __construct(
		public EVMStatistics $statistics,
		public PHP\PHPManual $phpManual
	) {}
}
