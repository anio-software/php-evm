<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPFunction extends PHPReference implements \JsonSerializable {
	private function __construct(
		string $referenceId,
		public string $name,
		private array $parameters,
		public bool $isVariadic,
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
			$this->isVariadic,
			$this->returnType
		);
	}

	public function withVariadic(bool $variadic): self {
		return new self(
			$this->referenceId,
			$this->name,
			$this->parameters,
			$variadic,
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
		return new self($referenceId, $name, [], false, $returnType);
	}

	public function jsonSerialize(): mixed {
		return [
			"referenceId" => $this->referenceId,
			"name"        => $this->name,
			"parameters"  => $this->parameters,
			"isVariadic"  => $this->isVariadic,
			"returnType"  => $this->returnType
		];
	}
}
