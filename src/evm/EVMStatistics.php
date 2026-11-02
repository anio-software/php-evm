<?php

namespace AnioSoftware\EVM;

final readonly class EVMStatistics {
	public function __construct(
		public EVMTimingStatistics $timing,
		public int $nLoadedNamespaces,
		public int $nLoadedClasses,
		public int $nLoadedInterfaces,
		public int $nLoadedEnums,
		public int $nLoadedFunctions,
		public int $nLoadedFunctionAliases,
		public int $nLoadedConstants
	) {}

	public function toString(): string {
		$elapsed    = (int)$this->timing->elapsedTimeMs;
		$classLikes = (int)$this->timing->elapsedTimeMsClassLikes;
		$constants  = (int)$this->timing->elapsedTimeMsConstants;
		$functions  = (int)$this->timing->elapsedTimeMsFunctions;

		$str  = "Took {$elapsed}ms to fully load PHP manual:\n";

		$str .= "Spent {$classLikes}ms for class likes\n";
		$str .= "Spent {$constants}ms for constants\n";
		$str .= "Spent {$functions}ms for functions\n";

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
