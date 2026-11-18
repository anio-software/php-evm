<?php

namespace AnioSoftware\EVM\PHP;

final class PHPLogicalObjectDiffLazy {
	private ?PHPStructuredObjectDiff $cache = NULL;

	public function __construct(
		readonly public PHPDefinition $before,
		readonly public PHPDefinition $after
	) {}

	public function getDiff(): ArrayDiffResult {
		$this->cache ??= new PHPStructuredObjectDiff($this->before, $this->after);

		return $this->cache->diff;
	}
}
