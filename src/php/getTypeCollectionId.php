<?php

namespace AnioSoftware\X2J\PHP;

function getTypeCollectionId(PHPTypeCollection $col): string {
	$types = \array_map(static function(PHPType $type) {
		return $type->getTypeId();
	}, $col->getTypeMembers());

	\sort($types);

	$key  = $col->getTypeCollectionKind()->value.":";
	$key .= "(".\implode($col->getTypeOperator()->value, $types).")";

	return $key;
}
