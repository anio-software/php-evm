<?php

namespace AnioSoftware\EVM\Utils;

final class ArrayDiffResultAccumulator {
	private array $removed  = [];
	private array $added    = [];
	private array $retained = [];
	private array $modified = [];

	public function addChanges(ArrayDiffResult $changes): void {
		foreach ($changes->removed as $item) {
			$this->removed[] = $item;
		}

		foreach ($changes->added as $item) {
			$this->added[] = $item;
		}

		foreach ($changes->retained as $item) {
			$this->retained[] = $item;
		}

		foreach ($changes->modified as $item) {
			$this->modified[] = $item;
		}
	}

	public function build(): ArrayDiffResult {
		return new ArrayDiffResult(
			removed  : $this->removed,
			added    : $this->added,
			retained : $this->retained,
			modified : $this->modified
		);
	}
}
