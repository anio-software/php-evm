<?php

namespace AnioSoftware\EVM;

final class EVMDiagnostics {
	public function __construct(
		private \Closure $addDiagnosticMessage,
		readonly public EVMDiagnosticMessageOrigin $origin
	) {}

	public function add(X2JDiagnosticMessage $msg): void {
		($this->addDiagnosticMessage)($msg);
	}

	public function addReferenceIgnored(string $referenceId): void {
		$this->add(
			new X2JReferenceIgnoredDiagnosticMessage($referenceId)
		);
	}

	public function addWarning(string $message): void {
		$this->add(
			new X2JDiagnosticMessage(
				EVMDiagnosticMessageSeverity::kWarning, $message
			)
		);
	}
}
