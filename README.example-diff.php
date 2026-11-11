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
	echo yellow("*")." definition ".prettyDefName($definition->after, "\\yellow")." was changed\n";
}

function prettyDefName(EVM\PHP\PHPDefinition $def, callable $colorize): string {
	return ($colorize)(
		$def->getFullyQualifiedName()
	)." ".\gray("(".$def->getDefinitionKind()->name.")");
}

function gray(string $str): string {
	return \posix_isatty(\STDOUT) ? "\033[90m".$str."\033[0m" : $str;
}

function red(string $str): string {
	return \posix_isatty(\STDOUT) ? "\033[31m".$str."\033[0m" : $str;
}

function green(string $str): string {
	return \posix_isatty(\STDOUT) ? "\033[32m".$str."\033[0m" : $str;
}

function yellow(string $str): string {
	return \posix_isatty(\STDOUT) ? "\033[33m".$str."\033[0m" : $str;
}
