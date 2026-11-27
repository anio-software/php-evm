<?php

namespace AnioSoftware\EVM\Loader\XMLv0\Factory;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\Loader\XMLv0 as XMLv0;

final readonly class FactoryContext {
	public string $referenceId;
	public string $localName;

	public function __construct(
		public XMLv0\LoaderInstance $loaderInstance,
		public XMLv0\PHPXMLElementData $elementData,
		public EVM\PHP\PHPDefinitionMetadata $metadata,
		public EVM\PHP\PHPNamespace $namespace
	) {
		$this->referenceId = $elementData->referenceId;
		$this->localName   = $elementData->name->localName;
	}
}
