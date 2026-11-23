<?php

namespace AnioSoftware\EVM;

function load(
	EVMOptions $options,
	EVMLoader $loader
): EVMLoadResult {
	return $loader->createInstance($options)->load();
}
