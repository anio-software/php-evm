<?php

namespace AnioSoftware\EVM;

readonly class X2JReferenceIgnoredDiagnosticMessage extends X2JDiagnosticMessage {
	public function __construct(
		readonly public string $referenceId
	) {
		parent::__construct(
			EVMDiagnosticMessageSeverity::kNotice,
			"Ignoring reference '$referenceId'."
		);
	}
}
