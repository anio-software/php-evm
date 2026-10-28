<?php

namespace AnioSoftware\EVM\XML;

final readonly class VisitContext {
	public function __construct(
		public string $path,
		public int $depth
	) {}
}
