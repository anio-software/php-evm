#!/usr/bin/env php
<?php

use AnioSoftware\EVM as X2J;

require_once __DIR__."/../php/index.php";
require_once __DIR__."/../xml/index.php";
require_once __DIR__."/../evm/index.php";

if (\sizeof($argv) !== 4) {
	\fwrite(\STDERR, "Usage: toCode.php <path-to-manual.xml> iface|base <filter.php> > code.php\n");
	\exit(2);
}

$kind    = $argv[2] === "iface" ? "iface" : "base";
$filter  = require $argv[3];

function handlePHPFunction(X2J\PHP\PHPFunction $fn): void {
	global $kind, $filter;

	if (!$filter($fn)) {
		return;
	}

	echo "\tpublic function ";
	echo $fn->renderSignature();

	echo ($kind === "iface" ? ";" : " {");
	echo "\n";

	if ($kind === "base") {
		echo "\t\t";

		if ($fn->returnsValue()) {
			echo "return ";
		}

		echo "\\".$fn->name;
		echo $fn->renderParameters();
		echo ";\n";

		echo "\t}\n";
	}

	if ($kind === "base") echo "\n";
}

$options = new X2J\X2JOptions($argv[1]);
$context = new X2J\EVMContext($options);

X2J\loadPHPManual($context);

echo "<?php\n";

echo ($kind === "iface" ? "interface X" : "class X")." {\n";

X2J\PHP\visitNamespace(
	$context->manual->getGlobalNamespace(),

	static function($node): void {
		if (!($node instanceof X2J\PHP\PHPFunction)) {
			return;
		}

		handlePHPFunction($node);
	},

	X2J\PHP\PHPNamespaceVisitFlags::VisitFunctions |
	X2J\PHP\PHPNamespaceVisitFlags::VisitNamespaces
);

echo "}\n";
