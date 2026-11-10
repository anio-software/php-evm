<?php

namespace AnioSoftware\EVM\PHP;

final class PHPDiffAccumulator {
	private array $removed  = [];
	private array $added    = [];
	private array $retained = [];
	private array $changed  = [];

	public function addChanges(PHPDiff $changes): void {
		foreach ($changes->removed as $item) {
			$this->removed[] = $item;
		}

		foreach ($changes->added as $item) {
			$this->added[] = $item;
		}

		foreach ($changes->retained as $item) {
			$this->retained[] = $item;
		}

		foreach ($changes->changed as $item) {
			$this->changed[] = $item;
		}
	}

	public function build(): PHPDiff {
		return new PHPDiff(
			removed  : $this->removed,
			added    : $this->added,
			retained : $this->retained,
			changed  : $this->changed
		);
	}
}
