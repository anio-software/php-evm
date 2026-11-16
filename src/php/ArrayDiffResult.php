<?php

namespace AnioSoftware\EVM\PHP;

final readonly class ArrayDiffResult {
	public function __construct(
		public array $removed,
		public array $added,
		public array $retained,
		public array $changed
	) {}

	public function getChangeCount(): int {
		$count = \count($this->removed) + \count($this->added);

		foreach ($this->changed as $changed) {
			$count += $changed instanceof self ? $changed->getChangeCount() : 1;
		}

		return $count;
	}
}
