<?php

namespace AnioSoftware\EVM;

final class EVMContext {
	readonly public \DOMDocument  $doc;
	readonly public PHP\PHPManual $manual;
	private ?PHP\PHPManualIndex $manualIndex = NULL;

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
		if ($this->statistics !== NULL) {
			return $this->statistics;
		}

		$elapsedTimeMsClassLikes =
		$elapsedTimeMsConstants  =
		$elapsedTimeMsFunctions  = 0;

		$elapsedTimeMs = EVMTimingStatistics::measure(
			function() use (
				&$elapsedTimeMsClassLikes,
				&$elapsedTimeMsConstants,
				&$elapsedTimeMsFunctions
			) : void {
				$elapsedTimeMsClassLikes = EVMTimingStatistics::measure(
					fn () => loadPHPClassLikes($this)
				);

				$this->manualIndex = $this->manual->buildIndex();

				$elapsedTimeMsConstants = EVMTimingStatistics::measure(
					fn () => loadPHPConstants($this)
				);

				$this->manualIndex = $this->manual->buildIndex();

				$elapsedTimeMsFunctions = EVMTimingStatistics::measure(
					fn () => loadPHPFunctions($this)
				);

				$this->manualIndex = $this->manual->buildIndex();
			}
		);

		$this->statistics = new EVMStatistics(
			timing: new EVMTimingStatistics(
				elapsedTimeMsClassLikes: $elapsedTimeMsClassLikes,
				elapsedTimeMsConstants : $elapsedTimeMsConstants,
				elapsedTimeMsFunctions : $elapsedTimeMsFunctions,
				elapsedTimeMs          : $elapsedTimeMs
			),

			nLoadedNamespaces      : \count($this->manualIndex->getNamespaces()),
			nLoadedClasses         : \count($this->manualIndex->getClasses()),
			nLoadedInterfaces      : \count($this->manualIndex->getInterfaces()),
			nLoadedEnums           : \count($this->manualIndex->getEnums()),
			nLoadedFunctions       : \count($this->manualIndex->getFunctions()),
			nLoadedFunctionAliases : \count($this->manualIndex->getFunctionAliases()),
			nLoadedConstants       : \count($this->manualIndex->getConstants())
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
