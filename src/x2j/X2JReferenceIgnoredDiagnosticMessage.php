<?php

namespace AnioSoftware\X2J;

readonly class X2JReferenceIgnoredDiagnosticMessage extends X2JDiagnosticMessage {
	public function __construct(
		readonly public string $referenceId
	) {
		parent::__construct(
			X2JDiagnosticMessageSeverity::Notice,
			"Ignoring reference '$referenceId'."
		);
	}
}
