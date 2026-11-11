<?php

use AnioSoftware\EVM as EVM;

require_once __DIR__."/src/evm/index.php";

// Load the PHP manuals.
$context1 = new EVM\EVMContext(new EVM\EVMOptions(__DIR__."/example/manual.xml"));
$context2 = new EVM\EVMContext(new EVM\EVMOptions(__DIR__."/example/manual2.xml"));

$context1->loadPHPManual();
$context2->loadPHPManual();

// Compute diff
$diff = $context1->getPHPManualIndex()->diff(
	$context2->getPHPManualIndex()
);

foreach ($diff->removed as $definition) {
	echo red("-")." definition ".prettyDefName($definition, "\\red")." was removed\n";
}

foreach ($diff->added as $definition) {
	echo green("+")." definition ".prettyDefName($definition, "\\green")." was added\n";
}

foreach ($diff->changed as $definition) {
	echo yellow("*")." definition ".prettyDefName($definition->after, "\\yellow")." was changed:\n\n";

	$diff = $definition->getDiff();

	foreach ($diff->removed as $key => $value) {
		echo "    ".red("-")." property ".red($key)." was removed\n";
	}

	foreach ($diff->added as $key => $value) {
		echo "    ".green("+")." property ".green($key)." was added\n";
	}

	foreach ($diff->changed as $key => $value) {
		echo "    ".yellow("*")." property ".yellow($key)." was changed\n";
	}

	echo "\n";
}

function prettyDefName(EVM\PHP\PHPDefinition $def, callable $colorize): string {
	return ($colorize)(
		$def->getFullyQualifiedName()
	)." ".\gray("(".$def->getDefinitionKind()->name.")");
}

function colorize(int $colorSequence, string $str): string {
	return \posix_isatty(\STDOUT) ? "\033[".$colorSequence."m".$str."\033[0m" : $str;
}

function gray(string $str): string {
	return colorize(90, $str);
}

function red(string $str): string {
	return colorize(31, $str);
}

function green(string $str): string {
	return colorize(32, $str);
}

function yellow(string $str): string {
	return colorize(33, $str);
}
