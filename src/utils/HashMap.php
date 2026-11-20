<?php

namespace AnioSoftware\EVM\Utils;

final class HashMap implements \IteratorAggregate, \Countable {
	private \SplObjectStorage $objects;
	private array $scalars = [];

	public function __construct(array $initial = []) {
		$this->objects = new \SplObjectStorage;

		foreach ($initial as [$key, $value]) {
			$this->set($key, $value);
		}
	}

	public function set(mixed $key, mixed $value): void {
		if (\is_object($key)) {
			$this->objects->offsetSet($key, $value);
		} else {
			$this->scalars[$key] = $value;
		}
	}

	public function has(mixed $key): bool {
		if (\is_object($key)) {
			return $this->objects->offsetExists($key);
		}

		return \array_key_exists($key, $this->scalars);
	}

	public function get(mixed $key): mixed {
		if (!$this->has($key)) {
			throw new \OutOfBoundsException("Key not found in hash map.");
		}

		if (\is_object($key)) {
			return $this->objects->offsetGet($key);
		}

		return $this->scalars[$key];
	}

	public function remove(mixed $key): void {
		if (\is_object($key)) {
			$this->objects->offsetUnset($key);
		} else {
			unset($this->scalars[$key]);
		}
	}

	public function count(): int {
		return $this->objects->count(\COUNT_NORMAL) + \count($this->scalars);
	}

	public function getIterator(): \Traversable {
		foreach ($this->objects as $key) {
			yield [$key, $this->objects->offsetGet($key)];
		}

		foreach ($this->scalars as $key => $value) {
			yield [$key, $value];
		}
	}

	public function keys(): array {
		$keys = [];

		foreach ($this as [$key]) {
			$keys[] = $key;
		}

		return $keys;
	}

	public function entries(): array {
		$arr = [];

		foreach ($this as $entry) {
			$arr[] = $entry;
		}

		return $arr;
	}

	static public function from(self $arg, self ...$args): self {
		$ret = new self;

		foreach ([$arg, ...$args] as $map) {
			foreach ($map as [$key, $value]) {
				$ret->set($key, $value);
			}
		}

		return $ret;
	}
}
