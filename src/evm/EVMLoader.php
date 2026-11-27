<?php

namespace AnioSoftware\EVM;

readonly abstract class EVMLoader {
	abstract public function createInstance(
		EVMOptions $options
	): EVMLoaderInstance;
}
