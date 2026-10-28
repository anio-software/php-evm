<?php

namespace AnioSoftware\EVM;

readonly class X2JDiagnosticMessage {
	public function __construct(
		public X2JDiagnosticMessageSeverity $severity,
		public string $message
	) {}
}
