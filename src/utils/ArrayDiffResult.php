<?php

namespace AnioSoftware\EVM\Utils;

final readonly class ArrayDiffResult {
	public function __construct(
		public array $removed,
		public array $added,
		public array $retained,
		public array $modified
	) {}

	public function getChangeCount(): int {
		$count = \count($this->removed) + \count($this->added);

		foreach ($this->modified as $modified) {
			$count += $modified instanceof self ? $modified->getChangeCount() : 1;
		}

		return $count;
	}
}
