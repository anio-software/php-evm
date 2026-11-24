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
				new PHPDefinitionXMLMapping("reference", "enum.")
			],
			// interfaces
			[
				EVM\PHP\PHPDefinitionKind::kInterface,
				new PHPDefinitionXMLMapping("reference", "class.")
			],
			// classes
			[
				EVM\PHP\PHPDefinitionKind::kClass,
				new PHPDefinitionXMLMapping("reference", "class.")
			],
			// constants
			[
				EVM\PHP\PHPDefinitionKind::kConstant,
				new PHPDefinitionXMLMapping("varlistentry", "constant.")
			],
			// functions
			[
				EVM\PHP\PHPDefinitionKind::kFunction,
				new PHPDefinitionXMLMapping("refentry", "function.")
			],
			// function aliases
			[
				EVM\PHP\PHPDefinitionKind::kFunctionAlias,
				new PHPDefinitionXMLMapping("refentry", "function.")
			]
		]);
	}

	public function getPHPDefinitionXMLMappings(): EVM\Utils\HashMap {
		return $this->phpDefinitionXMLMappings;
	}

	public function createInstance(
		EVM\EVMOptions $options
	): EVM\EVMLoaderInstance {
		return new LoaderInstance($this, $options);
	}
}
