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

	public function toString(): string {
		$elapsed = (int)$this->elapsedTimeMs;

		$str  = "Took {$elapsed}ms to fully load PHP manual:\n";

		$str .= "Loaded ".$this->nLoadedNamespaces." namespaces\n";
		$str .= "Loaded ".$this->nLoadedClasses." classes\n";
		$str .= "Loaded ".$this->nLoadedInterfaces." interfaces\n";
		$str .= "Loaded ".$this->nLoadedEnums." enums\n";
		$str .= "Loaded ".$this->nLoadedFunctions." functions\n";
		$str .= "Loaded ".$this->nLoadedFunctionAliases." function aliases\n";
		$str .= "Loaded ".$this->nLoadedConstants." constants\n";

		return $str;
	}
}
