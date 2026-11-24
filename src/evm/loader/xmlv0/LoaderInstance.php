<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

final class LoaderInstance extends EVM\EVMLoaderInstance {
	readonly public EVM\PHP\PHPNamespace $phpGlobalNamespace;
	readonly public EVM\PHP\PHPManual $phpManual;

	public function __construct(
		readonly protected Loader $loader,
		EVM\EVMOptions $options
	) {
		parent::__construct($options);

		$globalNamespace = $options->globalNamespace ?? new EVM\PHP\PHPNamespace("", NULL);
		$this->phpGlobalNamespace = $globalNamespace;
		$this->phpManual = new EVM\PHP\PHPManual($this->phpGlobalNamespace);
	}

	public function load(): EVM\EVMLoadResult {
		return new EVM\EVMLoadResult;
	}
}
