<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPFunction extends PHPDefinition implements \JsonSerializable {
	public const int FLAG_VARIADIC = 1 << 0;

	private function __construct(
		PHPNamespace $namespace,
		string $referenceId,
		public string $name,
		private array $parameters,
		public int $flags,
		public PHPType $returnType
	) {
		parent::__construct($namespace, $referenceId);
	}

	public function returnsValue(): bool {
		if ($this->returnType->isBuiltinType(PHPBuiltinTypeKind::Void)) {
			return false;
		} else if ($this->returnType->isBuiltinType(PHPBuiltinTypeKind::Never)) {
			return false;
		}

		return true;
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
			$this->namespace,
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
			$this->namespace,
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

	public function renderParameters(
		bool $references = false,
		bool $types = false,
		bool $initializer = false
	): string {
		$ret = "(";

		foreach ($this->getParameters() as $param) {
			$ret .= $param->render($references, $types, $initializer);
			$ret .= (!$param->isLast() ? ", " : "");
		}

		$ret .= ")";

		return $ret;
	}

	public function renderSignature(?string $newName = NULL): string {
		$ret = "";

		$ret .= $newName !== NULL ? $newName : $this->name;
		$ret .= $this->renderParameters(true, true, true);

		$returnTypeCode = $this->returnType->toCode();

		if ($returnTypeCode !== NULL) {
			if (\strlen($returnTypeCode)) {
				$ret .= ": $returnTypeCode";
			}
		} else {
			$rendered = $this->returnType->render();

			if (\strlen($rendered)) {
				$ret .= "/* : $rendered */";
			}
		}

		return $ret;
	}

	static public function create(
		PHPNamespace $namespace,
		string $referenceId,
		string $name,
		PHPType $returnType
	): self {
		return new self($namespace, $referenceId, $name, [], 0, $returnType);
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
