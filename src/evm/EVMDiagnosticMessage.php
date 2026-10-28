<?php

namespace AnioSoftware\EVM;

readonly class EVMDiagnosticMessage {
	public function __construct(
		public EVMDiagnosticMessageSeverity $severity,
		public string $message
	) {}
}
