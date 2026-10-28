<?php

namespace AnioSoftware\X2J;

final class X2JDiagnostics {
	public function __construct(
		private \Closure $addDiagnosticMessage,
		readonly public X2JDiagnosticMessageOrigin $origin
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
				X2JDiagnosticMessageSeverity::kWarning, $message
			)
		);
	}
}
