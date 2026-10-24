<?php

namespace AnioSoftware\X2J\PHP;

function normalizeType(PHPType $type): PHPType {
	if ($type instanceof PHPTypeCollection) {
		$typeClass = \get_class($type);
		$unique = [];

		foreach ($type->getTypeMembers() as $member) {
			$member = normalizeType($member);

			if (!($member instanceof PHPTypeCollection)) {
				$unique[$member->getTypeId()] = $member;

				continue;
			}
			// if the type collection is of the same kind we can flatten its member
			else if ($type->getTypeCollectionKind() !== $member->getTypeCollectionKind()) {
				$unique[$member->getTypeId()] = $member;

				continue;
			}

			foreach ($member->getTypeMembers() as $nested) {
				$unique[$nested->getTypeId()] = $nested;
			}
		}

		\ksort($unique);
		$members = \array_values($unique);

		if (\count($members) === 1) {
			return $members[0];
		}

		return new $typeClass(...$members);
	}

	return $type;
}
