<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPLogicalPropertySet {
	private array $inheritanceChain;
	private string $path;
	private string $hash;

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

		$this->hash = $this->computeHash();
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

	private function computeHash(): string {
		return \hash(
			"sha1", stable_json_encode(
				$this->toCanonicalized()
			)
		);
	}

	public function getHash(): string {
		return $this->hash;
	}

	public function isEqualTo(self $that): bool {
		return $this->getHash() === $that->getHash();
	}
}
