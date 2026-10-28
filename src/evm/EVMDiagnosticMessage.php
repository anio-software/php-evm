<?php

namespace AnioSoftware\EVM;

readonly class X2JDiagnosticMessage {
	public function __construct(
		public EVMDiagnosticMessageSeverity $severity,
		public string $message
	) {}
}
