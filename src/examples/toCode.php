#!/usr/bin/env php
<?php

use AnioSoftware\X2J as X2J;

require_once __DIR__."/../php/index.php";
require_once __DIR__."/../xml/index.php";
require_once __DIR__."/../x2j/index.php";

if (\sizeof($argv) !== 4) {
	\fwrite(\STDERR, "Usage: toCode.php <path-to-manual.xml> iface|base <filter.php> > code.php\n");
	\exit(2);
}

$kind    = $argv[2] === "iface" ? "iface" : "base";
$filter  = require $argv[3];
$options = new X2J\X2JOptions($argv[1]);
$context = new X2J\X2JContext($options);

X2J\loadPHPManual($context);

echo "<?php\n";

echo ($kind === "iface" ? "interface X" : "class X")." {\n";

foreach ($context->manual->getFunctions() as $fn) {
	if (!$filter($fn)) continue;

	echo "\tpublic function ";
	echo $fn->name;
	echo X2J\PHP\CodeGen\functionParametersToCode($fn, true, true, true);

	$returnTypeCode = X2J\PHP\CodeGen\typeToCode($fn->returnType);

	if (\strlen($returnTypeCode)) {
		echo ": $returnTypeCode";
	}

	echo ($kind === "iface" ? ";" : " {");
	echo "\n";

	if ($kind === "base") {
		echo "\t\t";

		if ($fn->returnType !== X2J\PHP\PHPBuiltinType::Void) {
			echo "return ";
		}

		echo "\\".$fn->name;
		echo X2J\PHP\CodeGen\functionParametersToCode($fn);
		echo ";\n";

		echo "\t}\n";
	}

	if ($kind === "base") echo "\n";
}

echo "}\n";
