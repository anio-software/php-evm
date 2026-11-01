<?php

namespace AnioSoftware\EVM\XML;

final readonly class VisitContext {
	public function __construct(
		public int $depth,
		public string $path
	) {}

	public function descend(\DOMElement $el): self {
		$localName = $el->localName;

		if ($localName === NULL) {
			throw new \RuntimeException("localName must not be NULL.");
		}

		$newPath = \strlen($this->path) ? $this->path."/$localName" : $localName;

		return new self(
			$this->depth + 1,
			$newPath
		);
	}
}
