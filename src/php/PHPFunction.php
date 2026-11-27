<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPFunction extends PHPDefinition {
	private PHPLogicalPropertySet $props;

	public const int FLAG_VARIADIC = 1 << 0;

	private function __construct(
		PHPDefinitionMetadata $metadata,
		PHPNamespace $namespace,
		string $referenceId,
		string $name,
		private array $parameters,
		public int $flags,
		public PHPType $returnType
	) {
		parent::__construct(
			PHPDefinitionKind::kFunction,
			$metadata,
			$namespace,
			$referenceId,
			$name
		);

		# note: make sure to initialize this property last
		$this->props = PHPLogicalPropertySetBuilder::create(
			parent::getLogicalPropertySet(),
			PHPLogicalPropertyDomain::kFunction
		)
		->withProperty(PHPLogicalProperty::kFunctionParameters  , $this->parameters)
		->withProperty(PHPLogicalProperty::kFunctionFlags       , $this->flags)
		->withProperty(PHPLogicalProperty::kFunctionReturnType  , $this->returnType)
		->finalize();
	}

	public function returnsValue(): bool {
		if ($this->returnType->isBuiltinType(PHPBuiltinTypeKind::kVoid)) {
			return false;
		} else if ($this->returnType->isBuiltinType(PHPBuiltinTypeKind::kNever)) {
			return false;
		}

		return true;
	}

	public function isLanguageConstruct(): bool {
		static $languageConstructs = [
			"\\__halt_compiler" => true, // __halt_compiler()
			//"\\die"           => true, // die() is an alias of exit()
			"\\empty"           => true, // empty()
			"\\isset"           => true, // isset()
			"\\list"            => true, // list()
			"\\print"           => true, // print()
			"\\eval"            => true, // eval()
			"\\array"           => true, // array()
			"\\exit"            => true, // exit()
			"\\unset"           => true  // unset()
		];

		$name = \strtolower($this->getFullyQualifiedName());

		return \array_key_exists($name, $languageConstructs);
	}

	public function isVariadic(): bool {
		return ($this->flags & self::FLAG_VARIADIC) !== 0;
	}

	public function withFlags(int $flags): self {
		return new self(
			$this->metadata,
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

	public function isLastFunctionParameter(PHPFunctionParameter $param): bool {
		$index = \array_search($param, $this->parameters, true);

		if ($index === false) {
			return false;
		}

		return ($index + 1) === \count($this->parameters);
	}

	public function renderParameters(
		bool $references = false,
		bool $types = false,
		bool $initializer = false
	): string {
		$ret = "(";

		foreach ($this->getParameters() as $param) {
			$ret .= $param->render($references, $types, $initializer);
			$ret .= (!$this->isLastFunctionParameter($param) ? ", " : "");
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
		PHPDefinitionMetadata $metadata,
		PHPNamespace $namespace,
		string $referenceId,
		string $name,
		PHPType $returnType,
		array $parameters = []
	): self {
		$flags = 0;

		foreach ($parameters as $parameter) {
			if (!($parameter instanceof PHPFunctionParameter)) {
				throw new \InvalidArgumentException(
					"Every parameter must be an instance of PHPFunctionParameter."
				);
			}

			if ($parameter->isVariadic()) {
				$flags |= self::FLAG_VARIADIC;
			}
		}

		return new self(
			$metadata,
			$namespace,
			$referenceId,
			$name,
			$parameters,
			$flags,
			$returnType
		);
	}

	public function getLogicalPropertySet(): PHPLogicalPropertySet {
		return $this->props;
	}
}
