<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPLogicalProperties {
	private string $hash;

	private function __construct(
		private ?self $parent,
		private PHPLogicalPropertyGroup $group,
		private HashMap $properties
	) {
		$this->hash = \hash(
			"sha1", stable_json_encode(
				$this->serialize(true, "L:", "I:")
			)
		);
	}

	public function getProperties(): array {
		return $this->properties->entries();
	}

	public function getGroup(): PHPLogicalPropertyGroup {
		return $this->group;
	}

	public function getParent(): ?self {
		return $this->parent;
	}

	public function getHash(): string {
		return $this->hash;
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

	private function getInheritanceChain(): array {
		$arr = [];
		$current = $this;

		while ($current) {
			$arr[] = $current;

			$current = $current->getParent();
		}

		return \array_reverse($arr);
	}

	public function serialize(
		bool $resolveParents = false,
		string $logicalPropertyPrefix = "",
		string $inheritedPropertyPrefix = ""
	): array {
		$args  = \func_get_args();
		$serialize = static function($value) use (&$args, &$serialize) {
			if ($value instanceof self) {
				return $value->serialize(...$args);
			}

			return \is_array($value) ? \array_map($serialize, $value) : $value;
		};

		$inheritanceChain = $this->getInheritanceChain();
		$lastIndex = \count($inheritanceChain) - 1;
		$group = $this->getGroup()->value;
		$arr = [];

		$arr[PHPLogicalProperty::kLogicalPropertyGroup->value] = \array_map(
			static function(self $props): string {
				return $props->getGroup()->name;
			}, $inheritanceChain
		);

		for ($i = 0; $i <= $lastIndex; ++$i) {
			$props = $inheritanceChain[$i];

			$keyPrefix = $i === $lastIndex ? $logicalPropertyPrefix : $inheritedPropertyPrefix;

			foreach ($props->getProperties() as [$pKey, $pValue]) {
				$key = $pKey->value;

				if (\str_starts_with($key, $group.".")) {
					$key = \substr($key, \strlen($group."."));
				}

				$arr[$keyPrefix.$key] = $serialize($pValue);
			}
		}

		return $arr;
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
