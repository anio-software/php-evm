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

	public function isRepresentableInCode(): bool {
		if (!parent::isRepresentableInCode()) {
			return false;
		}

		$nMembers = \count($this->members);

		if ($this->containsType(PHPBuiltinType::Mixed) && $nMembers > 1) {
			// "mixed" cannot be combined with other types in a union
			return false;
		} else if ($this->containsType(PHPUnspecifiedType::instance()) && $nMembers > 1) {
			// "unspecified" cannot be combined with other types in a union
			return false;
		}

		return true;
	}
}
