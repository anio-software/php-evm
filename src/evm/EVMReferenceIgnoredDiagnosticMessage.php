<?php

namespace AnioSoftware\EVM;

readonly class EVMReferenceIgnoredDiagnosticMessage extends EVMDiagnosticMessage {
	public function __construct(
		readonly public string $referenceId
	) {
		parent::__construct(
			EVMDiagnosticMessageSeverity::kNotice,
			"Ignoring reference '$referenceId'."
		);
	}
}
