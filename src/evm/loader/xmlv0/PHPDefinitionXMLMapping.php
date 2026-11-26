<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

final readonly class PHPDefinitionXMLMapping {
	public function __construct(
		public string $tagName,
		public string $referenceIdPrefix,
		public ?string $synopsisTagName
	) {}

	public function getXMLMappingKey(): string {
		return \serialize([
			$this->tagName,
			$this->referenceIdPrefix
		]);
	}
}
