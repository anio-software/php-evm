<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPLogicalProperties {
	private function __construct(
		private ?self $parent,
		private PHPLogicalPropertyGroup $group,
		private HashMap $properties
	) {}

	public function getProperties(): array {
		return $this->properties->entries();
	}

	public function getGroup(): PHPLogicalPropertyGroup {
		return $this->group;
	}

	public function getParent(): ?self {
		return $this->parent;
	}

	public function withProperty(PHPLogicalProperty $prop, mixed $value): self {
		if (!\str_starts_with($prop->value, $this->group->value.".")) {
			throw new \InvalidArgumentException("Cannot add property ({$prop->value}) to foreign group '{$this->group->value}'.");
		}

		return new self(
			$this->parent,
			$this->group,
			HashMap::from(
				$this->properties,
				new HashMap([
					[$prop, $value]
				])
			)
		);
	}

	static public function create(
		?self $parent,
		PHPLogicalPropertyGroup $group
	): self {
		return new self(
			$parent,
			$group,
			new HashMap
		);
	}
}
