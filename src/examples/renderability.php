<?php

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\PHP as PHP;

require_once __DIR__."/../evm/index.php";

// Load the PHP manual.
$result = EVM\load(
	EVM\EVMOptions::default(),
	new EVM\Loader\XMLv0\Loader(
		manualPath: "example/manual.xml"
	)
);

\fwrite(\STDERR, $result->statistics->toString());

foreach ($result->phpManual->getOrBuildIndex()->getFunctions() as $fn) {
	$renderability = PHP\getRenderability($fn);

	if ($renderability === PHP\Renderability::kRenderable) {
		continue;
	} else if ($renderability === PHP\Renderability::kFunctionIniGetParameterInitializer) {
		continue;
	}

	echo \str_pad($fn->name, 40, " ")." ".$renderability->value."\n";
}
