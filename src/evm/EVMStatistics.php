<?php

namespace AnioSoftware\EVM;

final readonly class EVMStatistics {
	public function __construct(
		public int|float $elapsedTimeMs,
		public int $nLoadedNamespaces,
		public int $nLoadedClasses,
		public int $nLoadedInterfaces,
		public int $nLoadedEnums,
		public int $nLoadedFunctions,
		public int $nLoadedFunctionAliases,
		public int $nLoadedConstants
	) {}
}
