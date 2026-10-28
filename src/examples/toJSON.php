#!/usr/bin/env php
<?php

use AnioSoftware\EVM as EVM;

require_once __DIR__."/../php/index.php";
require_once __DIR__."/../xml/index.php";
require_once __DIR__."/../evm/index.php";

if (\sizeof($argv) !== 2) {
	\fwrite(\STDERR, "Usage: toJSON.php <path-to-manual.xml> > manual.json\n");
	\exit(2);
}

$options = new EVM\EVMOptions($argv[1]);
$context = new EVM\EVMContext($options);

$statistics = $context->loadPHPManual();

\fwrite(\STDERR, $statistics->toString());

echo \json_encode($context->manual, JSON_PRETTY_PRINT)."\n";
