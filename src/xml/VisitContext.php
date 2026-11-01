<?php

namespace AnioSoftware\EVM\XML;

final readonly class VisitContext {
	public function __construct(
		public int $depth,
		public string $path
	) {}
}
