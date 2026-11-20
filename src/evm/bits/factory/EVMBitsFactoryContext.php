<?php

namespace AnioSoftware\EVM\Bits\Factory;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\PHP as PHP;

final readonly class EVMBitsFactoryContext {
	public function __construct(
		public EVM\EVMContext $evmContext,
		public EVM\EVMDiagnostics $diagnostics,
		public PHP\PHPDefinitionMetadata $metadata,
		public PHP\PHPNamespace $namespace,
		public string $referenceId
	) {}
}
