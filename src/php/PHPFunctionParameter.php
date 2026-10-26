<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPFunctionParameter implements \JsonSerializable {
	public const int FLAG_OPTIONAL  = 1 << 0;
	public const int FLAG_VARIADIC  = 1 << 1;
	public const int FLAG_REFERENCE = 1 << 2;
	public const int FLAG_LAST      = 1 << 7;

	private function __construct(
		public string $name,
		public PHPType $type,
		public string|null $initializer,
		public int $flags
	) {}

	public function isReference(): bool {
		return ($this->flags & self::FLAG_REFERENCE) !== 0;
	}

	public function isOptional(): bool {
		return ($this->flags & self::FLAG_OPTIONAL) !== 0;
	}

	public function isVariadic(): bool {
		return ($this->flags & self::FLAG_VARIADIC) !== 0;
	}

	public function isLast(): bool {
		return ($this->flags & self::FLAG_LAST) !== 0;
	}

	public function withFlags(int $flags): self {
		return new self(
			$this->name,
			$this->type,
			$this->initializer,
			$flags
		);
	}

	static public function create(
		string $name,
		PHPType $type,
		bool $isReference,
		string|null $initializer = NULL,
		bool $isVariadic = false
	): self {
		$isOptional = $initializer !== NULL;

		// only make type nullable when initializer is NULL
		if ($isOptional && \strtolower($initializer) === "null") {
			$type = makeTypeNullable($type);
		}

		$flags = 0;

		if ($isReference) $flags |= self::FLAG_REFERENCE;
		if ($isVariadic)  $flags |= self::FLAG_VARIADIC;
		if ($isOptional)  $flags |= self::FLAG_OPTIONAL;

		return new self(
			$name,
			$type,
			$initializer,
			$flags
		);
	}

	public function render(
		bool $references = false,
		bool $types = false,
		bool $initializer = false
	): string {
		$ret = "";

		if ($types) {
			$paramTypeCode = $this->type->toCode();

			if ($paramTypeCode !== NULL) {
				if (\strlen($paramTypeCode)) {
					$ret .= "$paramTypeCode ";
				}
			} else {
				$rendered = $this->type->render();

				if (\strlen($rendered)) {
					$ret .= "/* $rendered */ ";
				}
			}
		}

		$ret .= ($references && $this->isReference() ? "&" : "");
		$ret .= ($this->isVariadic() ? "..." : "");
		$ret .= "\$".$this->name;

		if ($initializer && $this->initializer !== NULL) {
			if ($this->initializer !== "?") {
				$ret .= " = ".$this->initializer;
			} else {
				$ret .= "/* = ".$this->initializer." */";
			}
		}

		return $ret;
	}

	public function jsonSerialize(): mixed {
		return [
			"name"        => $this->name,
			"type"        => $this->type,
			"initializer" => $this->initializer,
			"flags"       => $this->flags
		];
	}
}
