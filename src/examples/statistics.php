<?php

use AnioSoftware\EVM as EVM;

require_once __DIR__."/../php/index.php";
require_once __DIR__."/../xml/index.php";
require_once __DIR__."/../evm/index.php";

$options = new EVM\EVMOptions("./example/manual.xml");
$context = new EVM\EVMContext($options);

$statistics = $context->loadPHPManual();

\fwrite(\STDERR, $statistics->toString());
