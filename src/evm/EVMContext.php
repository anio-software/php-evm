<?php

namespace AnioSoftware\EVM;

final class EVMContext {
	readonly public \DOMDocument  $doc;
	readonly public PHP\PHPManual $manual;

	private ?EVMStatistics $statistics = NULL;
	private array $diagnosticsObjects  = [];
	private array $diagnostics         = [];

	public const DOCBOOK_NS = "http://docbook.org/ns/docbook";
	public const XMLID_NS   = "http://www.w3.org/XML/1998/namespace";

	public function __construct(
		readonly public EVMOptions $options
	) {
		$this->doc = XML\loadDocument($options->manualPath);
		$this->manual = new PHP\PHPManual(
			$options->globalNamespace ?? new PHP\PHPNamespace("", NULL),
			self::XMLID_NS,
			self::DOCBOOK_NS
		);
	}

	public function loadPHPManual(): EVMStatistics {
		if ($this->statistics) {
			return $this->statistics;
		}

		$start = \hrtime(true);

		loadPHPClassLikes($this);
		loadPHPConstants($this);
		loadPHPFunctions($this);

		$elapsedTimeMs = (\hrtime(true) - $start) / 1E6;

		$this->statistics = new EVMStatistics(
			elapsedTimeMs          : $elapsedTimeMs,
			nLoadedNamespaces      : \count($this->manual->getNamespaces()),
			nLoadedClasses         : \count($this->manual->getClasses()),
			nLoadedInterfaces      : \count($this->manual->getInterfaces()),
			nLoadedEnums           : \count($this->manual->getEnums()),
			nLoadedFunctions       : \count($this->manual->getFunctions()),
			nLoadedFunctionAliases : \count($this->manual->getFunctionAliases()),
			nLoadedConstants       : \count($this->manual->getConstants())
		);

		return $this->statistics;
	}

	public function diagnosticsFor(EVMDiagnosticMessageOrigin $origin): EVMDiagnostics {
		if (\array_key_exists($origin->name, $this->diagnosticsObjects)) {
			return $this->diagnosticsObjects[$origin->name];
		}

		$inst = new EVMDiagnostics(function(EVMDiagnosticMessage $msg) {
			$this->diagnostics[] = $msg;
		}, $origin);

		$this->diagnosticsObjects[$origin->name] = $inst;

		return $inst;
	}

	public function getDiagnosticMessages(): array {
		return $this->diagnostics;
	}
}
