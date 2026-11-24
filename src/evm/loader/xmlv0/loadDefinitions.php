<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

function loadDefinitions(
	EVM\PHP\PHPDefinitionKind $kind,
	LoaderInstance $loaderInstance
): int {
	return (int)EVM\EVMTimingStatistics::measure(
		static function() use ($kind, $loaderInstance): void {

		}
	);
}
