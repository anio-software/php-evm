<?php

namespace AnioSoftware\EVM;

function loadPHPManual(string $path): EVMContext {
	$context = new EVMContext(
		new EVMOptions($path)
	);

	$context->loadPHPManual();

	return $context;
}
