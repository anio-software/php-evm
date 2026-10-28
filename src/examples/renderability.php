<?php

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\PHP as PHP;

require_once __DIR__."/../php/index.php";
require_once __DIR__."/../xml/index.php";
require_once __DIR__."/../evm/index.php";

$options = new EVM\EVMOptions("./example/manual.xml");
$context = new EVM\EVMContext($options);

$statistics = $context->loadPHPManual();

\fwrite(\STDERR, $statistics->toString());

foreach ($context->manual->getFunctions() as $fn) {
	$renderability = PHP\getRenderability($fn);

	if ($renderability === PHP\Renderability::kRenderable) {
		continue;
	} else if ($renderability === PHP\Renderability::kFunctionHaltCompiler) {
		continue;
	} else if ($renderability === PHP\Renderability::kFunctionIniGetParameterInitializer) {
		continue;
	}

	echo \str_pad($fn->name, 40, " ")." ".$renderability->value."\n";
}
