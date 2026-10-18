<?php

namespace AnioSoftware\X2J;

final class X2JContext {
	readonly public \DOMDocument $doc;
	readonly public PHP\PHPManual $manual;
	private array $diagnosticsObjects = [];
	private array $diagnostics = [];

	public function __construct(
		readonly public X2JOptions $options
	) {
		$this->doc = XML\loadDocument($options->manualPath);
		$this->manual = new PHP\PHPManual;
	}

	public function diagnosticsFor(X2JDiagnosticMessageOrigin $origin): X2JDiagnostics {
		if (\array_key_exists($origin->name, $this->diagnosticsObjects)) {
			return $this->diagnosticsObjects[$origin->name];
		}

		$inst = new X2JDiagnostics(function(X2JDiagnosticMessage $msg) {
			$this->diagnostics[] = $msg;
		}, $origin);

		$this->diagnosticsObjects[$origin->name] = $inst;

		return $inst;
	}

	public function getDiagnosticMessages(): array {
		return $this->diagnostics;
	}
}
