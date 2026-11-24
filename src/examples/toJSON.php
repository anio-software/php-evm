#!/usr/bin/env php
<?php

use AnioSoftware\EVM as EVM;

require_once __DIR__."/../evm/index.php";

if (\sizeof($argv) !== 2) {
	\fwrite(\STDERR, "Usage: toJSON.php <path-to-manual.xml> > manual.json\n");
	\exit(2);
}

$result = EVM\load(
	new EVM\EVMOptions,
	new EVM\Loader\XMLv0\Loader(
		manualPath: $argv[1]
	)
);

\fwrite(\STDERR, $result->statistics->toString());

echo \json_encode(
	$result->phpManual, \JSON_PRETTY_PRINT | \JSON_UNESCAPED_SLASHES
)."\n";
