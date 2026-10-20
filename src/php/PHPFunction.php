<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPFunction extends PHPReference implements \JsonSerializable {
	public const int FLAG_VARIADIC = 1 << 0;

	private function __construct(
		string $referenceId,
		public string $name,
		private array $parameters,
		public int $flags,
		public PHPType $returnType
	) {
		parent::__construct($referenceId);
	}

	public function withFunctionParameter(
		PHPFunctionParameter $param
	): self {
		$newParameters = [];

		foreach ($this->parameters as $p) {
			$newParameters[] = $p->withFlags(
				$p->flags & ~(PHPFunctionParameter::FLAG_LAST)
			);
		}

		$newParameters[] = $param->withFlags(
			$param->flags | PHPFunctionParameter::FLAG_LAST
		);

		return new self(
			$this->referenceId,
			$this->name,
			$newParameters,
			$this->flags,
			$this->returnType
		);
	}

	public function isVariadic(): bool {
		return ($this->flags & self::FLAG_VARIADIC) !== 0;
	}

	public function withFlags(int $flags): self {
		return new self(
			$this->referenceId,
			$this->name,
			$this->parameters,
			$flags,
			$this->returnType
		);
	}

	public function getParameters(): array {
		return $this->parameters;
	}

	static public function create(
		string $referenceId,
		string $name,
		PHPType $returnType
	): self {
		return new self($referenceId, $name, [], 0, $returnType);
	}

	public function jsonSerialize(): mixed {
		return [
			"referenceId" => $this->referenceId,
			"name"        => $this->name,
			"parameters"  => $this->parameters,
			"flags"       => $this->flags,
			"returnType"  => $this->returnType
		];
	}
}
