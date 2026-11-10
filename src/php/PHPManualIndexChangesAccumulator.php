<?php

namespace AnioSoftware\EVM\PHP;

final class PHPManualIndexChangesAccumulator {
	private array $removed  = [];
	private array $added    = [];
	private array $retained = [];

	public function addChanges(PHPManualIndexChanges $changes): void {
		foreach ($changes->removed as $item) {
			$this->removed[] = $item;
		}

		foreach ($changes->added as $item) {
			$this->added[] = $item;
		}

		foreach ($changes->retained as $item) {
			$this->retained[] = $item;
		}
	}

	public function build(): PHPManualIndexChanges {
		return new PHPManualIndexChanges(
			removed  : $this->removed,
			added    : $this->added,
			retained : $this->retained
		);
	}
}
