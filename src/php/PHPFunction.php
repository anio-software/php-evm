<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPFunction extends PHPReference {
	private function __construct(
		string $referenceId,
		public string $name,
		private array $parameters,
		public PHPType $returnType
	) {
		parent::__construct($referenceId);
	}

	public function withFunctionParameter(
		PHPFunctionParameter $param
	): self {
		return new self(
			$this->referenceId,
			$this->name,
			[...$this->parameters, $param],
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
		return new self($referenceId, $name, [], $returnType);
	}
}
