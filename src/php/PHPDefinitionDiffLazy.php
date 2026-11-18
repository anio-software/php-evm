<?php

namespace AnioSoftware\EVM\PHP;

final class PHPDefinitionDiffLazy {
	private ?PHPLogicalObjectDiff $cache = NULL;

	public function __construct(
		readonly public PHPDefinition $before,
		readonly public PHPDefinition $after
	) {}

	public function getDiff(): ArrayDiffResult {
		$this->cache ??= new PHPLogicalObjectDiff($this->before, $this->after);

		return $this->cache->diff;
	}
}
