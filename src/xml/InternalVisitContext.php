<?php

namespace AnioSoftware\X2J\XML;

final class InternalVisitContext {
	readonly public \Closure $visitor;

	public function __construct(callable $visitor) {
		$this->visitor = \Closure::fromCallable($visitor);
	}
}
