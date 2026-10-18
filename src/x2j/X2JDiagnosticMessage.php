<?php

namespace AnioSoftware\X2J;

readonly class X2JDiagnosticMessage {
	public function __construct(
		public X2JDiagnosticMessageSeverity $severity,
		public string $message
	) {}
}
