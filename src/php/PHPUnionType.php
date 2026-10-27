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
		} else if ($this->containsType(PHPBuiltinTypeKind::Mixed->toType())) {
			return PHPBuiltinTypeKind::Mixed->toType();
		}

		return \count($this->members) === 1 ? $this->members[0] : $this;
	}

	public function getTypeCollectionKind(): PHPTypeCollectionKind {
		return PHPTypeCollectionKind::Union;
	}

	public function getTypeOperator(): PHPTypeOperator {
		return PHPTypeOperator::Pipe;
	}

	public function getNullableMemberType(): ?PHPType {
		if (\count($this->members) !== 2) {
			return NULL;
		}

		$nullIndex = $this->indexOf(PHPBuiltinTypeKind::Null->toType());

		if ($nullIndex === -1) {
			return NULL;
		}

		$otherIndex = $nullIndex === 0 ? 1 : 0;

		if ($this->members[$otherIndex]->isCompoundType()) {
			return NULL;
		}

		return $this->members[$otherIndex];
	}

	public function isRepresentableInCode(): bool {
		if (!parent::isRepresentableInCode()) {
			return false;
		}

		$nMembers = \count($this->members);

		if ($this->containsType(PHPBuiltinTypeKind::Mixed->toType()) && $nMembers > 1) {
			// "mixed" cannot be combined with other types in a union
			return false;
		} else if ($this->containsType(PHPUnspecifiedType::instance()) && $nMembers > 1) {
			// "unspecified" cannot be combined with other types in a union
			return false;
		} else if ($this->containsType(PHPBuiltinTypeKind::Void->toType()) && $nMembers > 1) {
			// "void" cannot be combined with other types in a union
			return false;
		}

		return true;
	}

	public function toCode(): ?string {
		$type = $this->collapse();

		if (!$type->isRepresentableInCode()) {
			return NULL;
		}

		if ($type instanceof self) {
			$member = $type->getNullableMemberType();

			if ($member !== NULL) {
				return "?".$member->render();
			}
		}

		return $type->render();
	}

	public function toNullable(): PHPType {
		$nullType = PHPBuiltinTypeKind::Null->toType();

		if ($this->containsType($nullType)) {
			return $this;
		}

		return new self($this, $nullType);
	}
}
