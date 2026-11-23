<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

readonly class Implementation extends EVM\EVMLoader {
	public function createInstance(
		EVM\EVMOptions $options
	): EVM\EVMLoaderInstance {
		return new LoaderInstance($this, $options);
	}
}
