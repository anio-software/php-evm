<?php

namespace AnioSoftware\EVM\PHP;

final class PHPLogicalPropertySetBuilder {
	private function __construct(
		private ?PHPLogicalPropertySet $parent,
		private PHPLogicalPropertyDomain $domain,
		private HashMap $properties
	) {}

	public function withProperty(PHPLogicalProperty $prop, mixed $value): self {
		if (!\str_starts_with($prop->value, $this->domain->value.".")) {
			throw new \InvalidArgumentException("Cannot add property ({$prop->value}) to foreign domain '{$this->domain->value}'.");
		}

		$this->properties->set($prop, $value);

		return $this;
	}

	public function finalize(): PHPLogicalPropertySet {
		return new PHPLogicalPropertySet(
			$this->parent,
			$this->domain,
			$this->properties
		);
	}

	static public function create(
		?PHPLogicalPropertySet $parent,
		PHPLogicalPropertyDomain $domain
	): self {
		return new self(
			$parent,
			$domain,
			new HashMap
		);
	}
}
