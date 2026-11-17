<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPLogicalPropertySet {
	private array $inheritanceChain;
	private string $inheritanceChainString;

	private function __construct(
		private ?self $parent,
		private PHPLogicalPropertyDomain $domain,
		private HashMap $properties
	) {
		$current = $this;
		$chain = [];

		while ($current) {
			$chain[] = $current;

			$current = $current->getParent();
		}

		$this->inheritanceChain = \array_reverse($chain);
		$this->inheritanceChainString = \implode(
			"/",
			\array_map(static function(self $that): string {
				return $that->getDomain()->name;
			}, $this->inheritanceChain)
		);
	}

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

		$inheritanceChain = $options->resolveParents ? $this->inheritanceChain : [$this];
		$lastIndex = \count($inheritanceChain) - 1;
		$domain = $this->getDomain()->value;
		$arr = [];

		$arr[
			PHPLogicalProperty::kLogicalPropertyDomainPath->value
		] = $this->inheritanceChainString;

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
