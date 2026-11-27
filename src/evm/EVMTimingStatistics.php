<?php

namespace AnioSoftware\EVM;

final readonly class EVMTimingStatistics {
	public int|float $total;

	public function __construct(
		public int|float $enums,
		public int|float $interfaces,
		public int|float $classes,
		public int|float $constants,
		public int|float $functions,
		public int|float $functionAliases,
		public array $additional = []
	) {
		$total  = 0;

		$total += $this->enums;
		$total += $this->interfaces;
		$total += $this->classes;
		$total += $this->constants;
		$total += $this->functions;
		$total += $this->functionAliases;

		foreach ($additional as $value) {
			$total += $value;
		}

		$this->total = $total;
	}

	public function __toString(): string {
		$total           = (int)$this->total;
		$enums           = (int)$this->enums;
		$interfaces      = (int)$this->interfaces;
		$classes         = (int)$this->classes;
		$constants       = (int)$this->constants;
		$functions       = (int)$this->functions;
		$functionAliases = (int)$this->functionAliases;

		$str  = "Spent {$enums}ms for enums\n";
		$str .= "Spent {$interfaces}ms for interfaces\n";
		$str .= "Spent {$classes}ms for classes\n";
		$str .= "Spent {$constants}ms for constants\n";
		$str .= "Spent {$functions}ms for functions\n";
		$str .= "Spent {$functionAliases}ms for function aliases\n";

		foreach ($this->additional as $category => $value) {
			$value = (int)$value;

			$str .= "Spent {$value}ms for {$category}\n";
		}

		$str .= "> Spent {$total}ms in total <\n";

		return $str;
	}

	static public function measure(callable $fn): float {
		$start = \hrtime(true);

		$fn();

		$elapsed = \hrtime(true) - $start;

		return ($elapsed / 1E6);
	}
}
