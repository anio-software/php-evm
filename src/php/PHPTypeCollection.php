<?php

namespace AnioSoftware\X2J\PHP;

abstract readonly class PHPTypeCollection implements PHPType {
	final protected array $members;

	static private function flatten(
		PHPTypeCollectionKind $kind, PHPType $type, PHPType ...$types
	): array {
		$unique = [];

		foreach ([$type, ...$types] as $member) {
			if (!($member instanceof self)) {
				$unique[$member->getTypeId()] = $member;

				continue;
			} else if ($member->getTypeCollectionKind() !== $kind) {
				$unique[$member->getTypeId()] = $member;

				continue;
			}

			foreach ($member->getTypeMembers() as $nested) {
				$unique[$nested->getTypeId()] = $nested;
			}
		}

		\ksort($unique, \SORT_STRING);

		return \array_values($unique);
	}

	public function __construct(PHPType $type, PHPType ...$types) {
		$this->members = self::flatten(
			$this->getTypeCollectionKind(),
			$type,
			...$types
		);
	}

	final public function getTypeId(): string {
		$types = \array_map(static function(PHPType $type) {
			return $type->getTypeId();
		}, $this->getTypeMembers());

		$key  = $this->getTypeCollectionKind()->value.":";
		$key .= "(".\implode($this->getTypeOperator()->value, $types).")";

		return $key;
	}

	final public function isEqualTo(PHPType $t): bool {
		if (!($t instanceof self)) {
			// not a type collection
			return false;
		} else if ($t->getTypeCollectionKind() !== $this->getTypeCollectionKind()) {
			// not the same kind of type collection
			return false;
		}

		$members1 = $t->getTypeMembers();
		$members2 = $this->getTypeMembers();

		if (\count($members1) !== \count($members2)) {
			// not the same count of members
			return false;
		}

		for ($i = 0; $i < \count($members1); ++$i) {
			$member1 = $members1[$i];
			$member2 = $members2[$i];

			if (!$member1->isEqualTo($member2)) {
				return false;
			}
		}

		return true;
	}

	final public function containsType(PHPType $t): bool {
		foreach ($this->getTypeMembers() as $member) {
			if ($member->isEqualTo($t)) {
				return true;
			}
		}

		return false;
	}

	final public function getTypeMembers(): array {
		return $this->members;
	}

	final public function containsTypeCollection(): bool {
		foreach ($this->getTypeMembers() as $member) {
			if ($member instanceof self) {
				return true;
			}
		}

		return false;
	}

	final public function render(): string {
		return self::renderTypeCollection($this);
	}

	final public function jsonSerialize(): mixed {
		$kind = \ucfirst($this->getTypeCollectionKind()->value);

		return [
			"typeKind" => "{$kind}Type",
			"members"  => $this->members
		];
	}

	abstract public function getTypeCollectionKind(): PHPTypeCollectionKind;
	abstract public function getTypeOperator(): PHPTypeOperator;

	public function isRepresentableInCode(): bool {
		foreach ($this->getTypeMembers() as $member) {
			if (!$member->isRepresentableInCode()) {
				return false;
			}
		}

		return true;
	}

	final public function isCompoundType(): bool {
		return true;
	}

	static private function renderTypeCollection(self $col, bool $nested = false): string {
		$members = \array_map(static function(PHPType $type) {
			if ($type instanceof self) {
				return self::renderTypeCollection($type, true);
			}

			return $type->render();
		}, $col->getTypeMembers());

		$ret = \implode($col->getTypeOperator()->value, $members);

		return $nested ? "($ret)" : $ret;
	}
}
