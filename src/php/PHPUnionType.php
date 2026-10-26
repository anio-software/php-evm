<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPUnionType extends PHPTypeCollection {
	public function __construct(
		PHPType $type, PHPType ...$types
	) {
		parent::__construct($type, ...$types);
	}

	public function collapse(): PHPType {
		if ($this->containsType(PHPUnspecifiedType::instance())) {
			return PHPUnspecifiedType::instance();
		} else if ($this->containsType(PHPBuiltinType::Mixed)) {
			return PHPBuiltinType::Mixed;
		}

		return $this;
	}

	public function getTypeCollectionKind(): PHPTypeCollectionKind {
		return PHPTypeCollectionKind::Union;
	}

	public function getTypeOperator(): PHPTypeOperator {
		return PHPTypeOperator::Pipe;
	}
}
