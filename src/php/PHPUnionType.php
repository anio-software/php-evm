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

		return \count($this->members) === 1 ? $this->members[0] : $this;
	}

	public function getTypeCollectionKind(): PHPTypeCollectionKind {
		return PHPTypeCollectionKind::Union;
	}

	public function getTypeOperator(): PHPTypeOperator {
		return PHPTypeOperator::Pipe;
	}

	public function representsNullableType(): bool {
		if (\count($this->members) !== 2) {
			return false;
		}

		$nullIndex = $this->indexOf(PHPBuiltinType::Null);

		if ($nullIndex === -1) {
			return false;
		}

		$otherIndex = $nullIndex === 0 ? 1 : 0;

		return !$this->members[$otherIndex]->isCompoundType();
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
		} else if ($this->containsType(PHPBuiltinType::Void) && $nMembers > 1) {
			// "void" cannot be combined with other types in a union
			return false;
		}

		return true;
	}
}
