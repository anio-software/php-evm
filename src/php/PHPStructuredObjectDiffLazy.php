<?php

namespace AnioSoftware\EVM\PHP;

use AnioSoftware\EVM\Utils as Utils;

final class PHPStructuredObjectDiffLazy {
	private ?PHPStructuredObjectDiff $cache = NULL;

	public function __construct(
		readonly public PHPDefinition $before,
		readonly public PHPDefinition $after
	) {}

	public function getDiff(): Utils\ArrayDiffResult {
		$this->cache ??= new PHPStructuredObjectDiff($this->before, $this->after);

		return $this->cache->diff;
	}
}
