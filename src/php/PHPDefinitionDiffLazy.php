<?php

namespace AnioSoftware\EVM\PHP;

final class PHPDefinitionDiffLazy {
	private ?PHPDefinitionDiff $cache = NULL;

	public function __construct(
		readonly public PHPDefinition $before,
		readonly public PHPDefinition $after
	) {}

	public function getDiff(): DiffResult {
		$this->cache ??= new PHPDefinitionDiff($this->before, $this->after);

		return $this->cache->diff;
	}
}
