<?php

namespace AnioSoftware\EVM\PHP;

final class Hash {
	private bool $finalized = false;
	readonly private \HashContext $hashContext;

	public function __construct(
		readonly public HashAlgo $algo
	) {
		$this->hashContext = \hash_init($algo->value);
	}

	public function update(string $data, string ...$args): self {
		if ($this->finalized) {
			throw new \LogicException("Hash has already been finalized.");
		}

		\hash_update($this->hashContext, $data);

		foreach ($args as $arg) {
			\hash_update($this->hashContext, $arg);
		}

		return $this;
	}

	public function finalize(): string {
		if ($this->finalized) {
			throw new \LogicException("Hash has already been finalized.");
		}

		$this->finalized = true;

		return \hash_final($this->hashContext);
	}
}
