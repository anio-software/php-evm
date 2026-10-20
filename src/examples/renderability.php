<?php

use AnioSoftware\X2J as X2J;
use AnioSoftware\X2J\PHP as PHP;

require_once __DIR__."/../php/index.php";
require_once __DIR__."/../xml/index.php";
require_once __DIR__."/../x2j/index.php";

$options = new X2J\X2JOptions("./example/manual.xml");
$context = new X2J\X2JContext($options);

$elapsed = (int)X2J\loadPHPManual($context);

\fwrite(\STDERR, "Took {$elapsed}ms to fully load PHP manual:\n");
\fwrite(\STDERR, \str_repeat("-", 60)."\n");
$context->printStatistics(\STDERR);
\fwrite(\STDERR, \str_repeat("-", 60)."\n");

foreach ($context->manual->getFunctions() as $fn) {
	$renderability = PHP\getRenderability($fn);

	if ($renderability === PHP\Renderability::Renderable) {
		continue;
	} else if ($renderability === PHP\Renderability::FunctionNamespacedFunction) {
		continue;
	} else if ($renderability === PHP\Renderability::FunctionHaltCompiler) {
		continue;
	} else if ($renderability === PHP\Renderability::FunctionIniGetParameterInitializer) {
		continue;
	}

	echo \str_pad($fn->name, 40, " ")." ".$renderability->value."\n";
}
