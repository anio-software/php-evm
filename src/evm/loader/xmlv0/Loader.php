<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

readonly class Loader extends EVM\EVMLoader {
	// this is here because it doesn't change across loader instances
	readonly private EVM\Utils\HashMap $phpDefinitionXMLMappings;

	public const DOCBOOK_NS = "http://docbook.org/ns/docbook";
	public const XMLID_NS   = "http://www.w3.org/XML/1998/namespace";

	public function __construct(
		public string $manualPath
	) {
		$this->phpDefinitionXMLMappings = new EVM\Utils\HashMap([
			// enums
			[
				EVM\PHP\PHPDefinitionKind::kEnum,
				new PHPDefinitionXMLMapping(
					tagName           : "reference",
					referenceIdPrefix : "enum."
				)
			],
			// interfaces
			[
				EVM\PHP\PHPDefinitionKind::kInterface,
				new PHPDefinitionXMLMapping(
					tagName           : "reference",
					referenceIdPrefix : "class."
				)
			],
			// classes
			[
				EVM\PHP\PHPDefinitionKind::kClass,
				new PHPDefinitionXMLMapping(
					tagName           : "reference",
					referenceIdPrefix : "class."
				)
			],
			// constants
			[
				EVM\PHP\PHPDefinitionKind::kConstant,
				new PHPDefinitionXMLMapping(
					tagName           : "varlistentry",
					referenceIdPrefix : "constant."
				)
			],
			// functions
			[
				EVM\PHP\PHPDefinitionKind::kFunction,
				new PHPDefinitionXMLMapping(
					tagName           : "refentry",
					referenceIdPrefix : "function."
				)
			],
			// function aliases
			[
				EVM\PHP\PHPDefinitionKind::kFunctionAlias,
				new PHPDefinitionXMLMapping(
					tagName           : "refentry",
					referenceIdPrefix : "function."
				)
			]
		]);
	}

	public function getPHPDefinitionXMLMappings(): EVM\Utils\HashMap {
		return $this->phpDefinitionXMLMappings;
	}

	public function createInstance(
		EVM\EVMOptions $options
	): EVM\EVMLoaderInstance {
		return new LoaderInstance($this, self::XMLID_NS, self::DOCBOOK_NS, $options);
	}
}
