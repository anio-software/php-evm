<?php

use AnioSoftware\EVM as EVM;

require_once __DIR__."/../php/index.php";
require_once __DIR__."/../xml/index.php";
require_once __DIR__."/../evm/index.php";

$options = new EVM\EVMOptions("./example/manual.xml");
$context = new EVM\EVMContext($options);

$elapsed = (int)$context->loadPHPManual();

\fwrite(\STDERR, "Took {$elapsed}ms to fully load PHP manual:\n");
\fwrite(\STDERR, \str_repeat("-", 60)."\n");
$context->printStatistics(\STDERR);
\fwrite(\STDERR, \str_repeat("-", 60)."\n");
