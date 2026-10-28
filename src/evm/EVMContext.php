<?php

namespace AnioSoftware\EVM;

final class EVMContext {
	readonly public \DOMDocument $doc;
	readonly public PHP\PHPManual $manual;
	private array $diagnosticsObjects = [];
	private array $diagnostics = [];

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

	public function loadPHPManual(): int|float {
		$start = \hrtime(true);

		loadPHPClassLikes($this);
		loadPHPConstants($this);
		loadPHPFunctions($this);

		return (\hrtime(true) - $start) / 1E6;
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

	public function getStatisticsAsString(): string {
		$m = $this->manual;

		$str  = "Loaded ".\count($m->getNamespaces())." namespaces\n";
		$str .= "Loaded ".\count($m->getClasses())." classes\n";
		$str .= "Loaded ".\count($m->getInterfaces())." interfaces\n";
		$str .= "Loaded ".\count($m->getEnums())." enums\n";
		$str .= "Loaded ".\count($m->getFunctions())." functions\n";
		$str .= "Loaded ".\count($m->getFunctionAliases())." function aliases\n";
		$str .= "Loaded ".\count($m->getConstants())." constants\n";

		return $str;
	}

	public function printStatistics(mixed $stream): void {
		\fwrite($stream, $this->getStatisticsAsString());
	}
}
