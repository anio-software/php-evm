<?php

namespace AnioSoftware\EVM;

final readonly class EVMStatistics {
	public function __construct(
		public EVMTimingStatistics $timing,
		public int $nLoadedNamespaces,
		public int $nLoadedEnums,
		public int $nLoadedInterfaces,
		public int $nLoadedClasses,
		public int $nLoadedConstants,
		public int $nLoadedFunctions,
		public int $nLoadedFunctionAliases
	) {}

	public function toString(): string {
		$str  = $this->timing;
		$str .= "Loaded ".$this->nLoadedNamespaces." namespaces\n";
		$str .= "Loaded ".$this->nLoadedEnums." enums\n";
		$str .= "Loaded ".$this->nLoadedInterfaces." interfaces\n";
		$str .= "Loaded ".$this->nLoadedClasses." classes\n";
		$str .= "Loaded ".$this->nLoadedConstants." constants\n";
		$str .= "Loaded ".$this->nLoadedFunctions." functions\n";
		$str .= "Loaded ".$this->nLoadedFunctionAliases." function aliases\n";

		return $str;
	}
}
