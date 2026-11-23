<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

final class LoaderInstance extends EVM\EVMLoaderInstance {
	public function __construct(
		readonly protected Implementation $loader,
		EVM\EVMOptions $options
	) {
		parent::__construct($options);
	}

	public function load(): EVM\EVMLoadResult {
		return new EVM\EVMLoadResult;
	}
}
