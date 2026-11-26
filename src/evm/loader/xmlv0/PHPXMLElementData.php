<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

final readonly class PHPXMLElementData {
	public function __construct(
		public EVM\PHP\PHPDefinitionKind $kind,
		public EVM\PHP\PHPQualifiedName $name,
		public \DOMElement $root,
		public string $referenceId,
		public ?string $bookId,
		public ?string $packageName,
		public EVM\PHP\PHPExtensionMembership $extensionMembership,
		public PHPXMLElementDOMData $dom
	) {}
}
