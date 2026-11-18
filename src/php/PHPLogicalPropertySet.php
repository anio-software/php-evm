<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPLogicalPropertySet {
	private array $inheritanceChain;
	private string $path;

	public function __construct(
		private ?self $parent,
		private PHPLogicalPropertyDomain $domain,
		private HashMap $properties
	) {
		$this->inheritanceChain = [
			...($parent?->getInheritanceChain() ?? []),
			$this
		];

		$this->path = $parent !== null
		            ? $parent->getPath()."/".$domain->name
		            : $domain->name;
	}

	public function entries(): array {
		return $this->properties->entries();
	}

	public function keys(): array {
		return $this->properties->keys();
	}

	public function getDomain(): PHPLogicalPropertyDomain {
		return $this->domain;
	}

	public function getParent(): ?self {
		return $this->parent;
	}

	public function getInheritanceChain(): array {
		return $this->inheritanceChain;
	}

	public function getPath(): string {
		return $this->path;
	}
}
