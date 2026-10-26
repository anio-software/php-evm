<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPUnionType extends PHPTypeCollection {
	public function __construct(
		PHPType $type, PHPType ...$types
	) {
		parent::__construct($type, ...$types);
	}

	public function getTypeCollectionKind(): PHPTypeCollectionKind {
		return PHPTypeCollectionKind::Union;
	}

	public function getTypeOperator(): PHPTypeOperator {
		return PHPTypeOperator::Pipe;
	}

	public function isRepresentableInCode(): bool {
		if (!parent::isRepresentableInCode()) {
			return false;
		}

		return true; // tbd
	}
}
