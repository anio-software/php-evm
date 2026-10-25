<?php

namespace AnioSoftware\X2J\PHP;

function renderTypeCollection(PHPTypeCollection $col, bool $nested = false): string {
	$members = \array_map(static function(PHPType $type) {
		if ($type instanceof PHPTypeCollection) {
			return renderTypeCollection($type, true);
		}

		return $type->render();
	}, $col->getTypeMembers());

	$ret = \implode($col->getTypeOperator()->value, $members);

	return $nested ? "($ret)" : $ret;
}
