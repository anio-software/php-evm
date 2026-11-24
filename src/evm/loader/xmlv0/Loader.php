<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

readonly class Loader extends EVM\EVMLoader {
	public function __construct(
		public string $manualPath
	) {}

	public function createInstance(
		EVM\EVMOptions $options
	): EVM\EVMLoaderInstance {
		return new LoaderInstance($this, $options);
	}
}
