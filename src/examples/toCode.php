#!/usr/bin/env php
<?php

use AnioSoftware\EVM as EVM;

require_once __DIR__."/../evm/index.php";

if (\sizeof($argv) !== 4) {
	\fwrite(\STDERR, "Usage: toCode.php <path-to-manual.xml> iface|base <filter.php> > code.php\n");
	\exit(2);
}

$kind    = $argv[2] === "iface" ? "iface" : "base";
$filter  = require $argv[3];

function handlePHPFunction(EVM\PHP\PHPFunction $fn, bool $last): void {
	global $kind;

	$bookId = $fn->metadata->bookId ?? "(null)";
	$membership = $fn->metadata->extensionMembership->name;

	echo "\t/* bookId: $bookId ; membership = $membership */\n";
	echo "\tpublic function ";
	echo $fn->renderSignature();

	echo ($kind === "iface" ? ";" : " {");
	echo "\n";

	if ($kind === "base") {
		echo "\t\t";

		if ($fn->returnsValue()) {
			echo "return ";
		}

		echo $fn->getFullyQualifiedName();
		echo $fn->renderParameters();
		echo ";\n";

		echo "\t}\n";
	}

	if ($kind === "base" && !$last) echo "\n";
}

// Load the PHP manual.
$result = EVM\load(
	EVM\EVMOptions::default(),
	new EVM\Loader\XMLv0\Loader(
		manualPath: $argv[1]
	)
);

echo "<?php\n\n";

echo ($kind === "iface" ? "interface X" : "class X")." {\n";

$fns = $result->phpManual->getOrBuildIndex()->getFunctions();
$fns = \array_filter($fns, static function(EVM\PHP\PHPFunction $fn) use ($filter) : bool {
	return $filter($fn);
});

\ksort($fns, \SORT_STRING);

$nFns = \count($fns);
$index = 0;

foreach ($fns as $fn) {
	handlePHPFunction($fn, ($index + 1) === $nFns);

	++$index;
}

echo "}\n";
