<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPConstantFetchExpression extends PHPExpression {
	private PHPLogicalPropertySet $props;

	public function __construct(
		private PHPConstant $constant,
		?string $sourceCode = NULL
	) {
		parent::__construct(
			PHPExpressionKind::kConstantFetch,
			$sourceCode
		);

		# note: make sure to initialize this property last
		$this->props = PHPLogicalPropertySetBuilder::create(
			parent::getLogicalProperties(),
			PHPLogicalPropertyDomain::kConstantFetch
		)
		->withProperty(PHPLogicalProperty::kConstantFetchConstant, $this->constant)
		->finalize();
	}

	public function getConstant(): PHPConstant {
		return $this->constant;
	}

	public function renderExpression(): string {
		return $this->constant->getFullyQualifiedName();
	}

	public function isRepresentableInCode(): bool {
		return true;
	}

	public function getLogicalProperties(): PHPLogicalPropertySet {
		return $this->props;
	}
}
