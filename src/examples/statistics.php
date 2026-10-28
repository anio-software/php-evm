<?php

use AnioSoftware\X2J as X2J;

require_once __DIR__."/../php/index.php";
require_once __DIR__."/../xml/index.php";
require_once __DIR__."/../evm/index.php";

$options = new X2J\X2JOptions("./example/manual.xml");
$context = new X2J\X2JContext($options);

$elapsed = (int)X2J\loadPHPManual($context);

\fwrite(\STDERR, "Took {$elapsed}ms to fully load PHP manual:\n");
\fwrite(\STDERR, \str_repeat("-", 60)."\n");
$context->printStatistics(\STDERR);
\fwrite(\STDERR, \str_repeat("-", 60)."\n");
