#!/usr/bin/env php
<?php

use AnioSoftware\X2J as X2J;

require_once __DIR__."/../php/index.php";
require_once __DIR__."/../xml/index.php";
require_once __DIR__."/../evm/index.php";

if (\sizeof($argv) !== 2) {
	\fwrite(\STDERR, "Usage: toJSON.php <path-to-manual.xml> > manual.json\n");
	\exit(2);
}

$options = new X2J\X2JOptions($argv[1]);
$context = new X2J\X2JContext($options);

X2J\loadPHPManual($context);

echo \json_encode($context->manual, JSON_PRETTY_PRINT)."\n";
