<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPLogicalPropertySet {
	private function __construct(
		private ?self $parent,
		private PHPLogicalPropertyDomain $domain,
		private HashMap $properties
	) {}

	public function getProperties(): array {
		return $this->properties->entries();
	}

	public function getDomain(): PHPLogicalPropertyDomain {
		return $this->domain;
	}

	public function getParent(): ?self {
		return $this->parent;
	}

	public function getHash(): string {
		return \hash(
			"sha1", stable_json_encode(
				$this->toCanonicalized()
			)
		);
	}

	public function isEqualTo(self $that): bool {
		return $this->getHash() === $that->getHash();
	}

	public function withProperty(PHPLogicalProperty $prop, mixed $value): self {
		if (!\str_starts_with($prop->value, $this->domain->value.".")) {
			throw new \InvalidArgumentException("Cannot add property ({$prop->value}) to foreign domain '{$this->domain->value}'.");
		}

		return new self(
			$this->parent,
			$this->domain,
			HashMap::from(
				$this->properties,
				new HashMap([
					[$prop, $value]
				])
			)
		);
	}

	private function getInheritanceChain(): array {
		$arr = [];
		$current = $this;

		while ($current) {
			$arr[] = $current;

			$current = $current->getParent();
		}

		return \array_reverse($arr);
	}

	public function toArray(
		?PHPLogicalPropertySetArrayOptions $options = NULL
	): array {
		$options ??= PHPLogicalPropertySetArrayOptions::defaults();

		$normalizeValue = static function($value) use ($options, &$normalizeValue) {
			if ($value instanceof self) {
				return $value->toArray($options);
			}

			return \is_array($value) ? \array_map($normalizeValue, $value) : $value;
		};

		$inheritanceChain = $options->resolveParents ? $this->getInheritanceChain() : [$this];
		$lastIndex = \count($inheritanceChain) - 1;
		$domain = $this->getDomain()->value;
		$arr = [];

		$arr[PHPLogicalProperty::kLogicalPropertyDomain->value] = \array_map(
			static function(self $props): string {
				return $props->getDomain()->name;
			}, $inheritanceChain
		);

		for ($i = 0; $i <= $lastIndex; ++$i) {
			$props = $inheritanceChain[$i];

			$keyPrefix = $i === $lastIndex ? $options->logicalPropertyPrefix : $options->inheritedPropertyPrefix;

			foreach ($props->getProperties() as [$pKey, $pValue]) {
				$key = $pKey->value;

				if (\str_starts_with($key, $domain.".")) {
					$key = \substr($key, \strlen($domain."."));
				}

				$arr[$keyPrefix.$key] = $normalizeValue($pValue);
			}
		}

		return $arr;
	}

	public function toCanonicalized(): array {
		return $this->toArray(
			PHPLogicalPropertySetArrayOptions::canonicalFormat()
		);
	}

	static public function create(
		?self $parent,
		PHPLogicalPropertyDomain $domain
	): self {
		return new self(
			$parent,
			$domain,
			new HashMap
		);
	}
}
