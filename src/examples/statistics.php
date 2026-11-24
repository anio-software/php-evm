<?php

use AnioSoftware\EVM as EVM;

require_once __DIR__."/../evm/index.php";

$result = EVM\load(
	new EVM\EVMOptions,
	new EVM\Loader\XMLv0\Loader(
		manualPath: "example/manual.xml"
	)
);

\fwrite(\STDERR, $result->statistics->toString());
