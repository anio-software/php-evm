#!/usr/bin/env php
<?php

use AnioSoftware\EVM as EVM;

require_once __DIR__."/../php/index.php";
require_once __DIR__."/../xml/index.php";
require_once __DIR__."/../evm/index.php";

if (\sizeof($argv) !== 4) {
	\fwrite(\STDERR, "Usage: toCode.php <path-to-manual.xml> iface|base <filter.php> > code.php\n");
	\exit(2);
}

$kind    = $argv[2] === "iface" ? "iface" : "base";
$filter  = require $argv[3];

function handlePHPFunction(EVM\PHP\PHPFunction $fn): void {
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

$options = new EVM\EVMOptions($argv[1]);
$context = new EVM\EVMContext($options);

$context->loadPHPManual();

echo "<?php\n";

echo ($kind === "iface" ? "interface X" : "class X")." {\n";

EVM\PHP\visitNamespace(
	$context->manual->getGlobalNamespace(),

	static function($node): void {
		if (!($node instanceof EVM\PHP\PHPFunction)) {
			return;
		}

		handlePHPFunction($node);
	},

	EVM\PHP\PHPNamespaceVisitFlags::VisitFunctions |
	EVM\PHP\PHPNamespaceVisitFlags::VisitNamespaces
);

echo "}\n";
