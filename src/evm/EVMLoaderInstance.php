<?php

namespace AnioSoftware\EVM;

abstract class EVMLoaderInstance {
	protected function __construct(
		readonly protected EVMOptions $options
	) {}

	abstract public function load(): EVMLoadResult;
}
