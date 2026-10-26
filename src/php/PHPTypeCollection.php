<?php

namespace AnioSoftware\X2J\PHP;

abstract readonly class PHPTypeCollection implements PHPType {
	final protected array $members;

	public function __construct(PHPType $type, PHPType ...$types) {
		$unique = [];

		foreach ([$type, ...$types] as $member) {
			$unique[$member->getTypeId()] = $member;
		}

		\ksort($unique, \SORT_STRING);

		$this->members = \array_values($unique);
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

		$matched = [];

		foreach ($members1 as $member1) {
			$found = false;

			foreach ($members2 as $i => $member2) {
				if (!\array_key_exists($i, $matched) && $member1->isEqualTo($member2)) {
					$matched[$i] = true;

					$found = true;

					break;
				}
			}

			if (!$found) {
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

	abstract public function getTypeCollectionKind(): PHPTypeCollectionKind;
	abstract public function getTypeMembers(): array;
	abstract public function getTypeOperator(): PHPTypeOperator;
}
