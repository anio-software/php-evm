<?php

namespace AnioSoftware\X2J\PHP;

final class PHPNamespace {
	private array $namespaces      = [];
	private array $classes         = [];
	private array $interfaces      = [];
	private array $enums           = [];
	private array $constants       = [];
	private array $functions       = [];
	private array $functionAliases = [];

	public function __construct(
		private string $name,
		private ?self $parent = NULL
	) {}

	public function getName(): string {
		return $this->name;
	}

	public function getParent(): ?self {
		return $this->parent;
	}

	public function addNamespace(self $namespace): void {
		if ($namespace->getParent() !== $this) {
			throw new \InvalidArgumentException(
				"The namespace's parent must be this namespace."
			);
		}

		$this->namespaces[$namespace->getName()] = $namespace;
	}

	public function addClass(PHPClass $class): void {
		$this->classes[$class->name] = $class;
	}

	public function addInterface(PHPInterface $interface): void {
		$this->interfaces[$interface->name] = $interface;
	}

	public function addEnum(PHPEnum $enum): void {
		$this->enums[$enum->name] = $enum;
	}

	public function addConstant(PHPConstant $const): void {
		$this->constants[$const->name] = $const;
	}

	public function addFunction(PHPFunction $func): void {
		$this->functions[$func->name] = $func;
	}

	public function addFunctionAlias(PHPFunctionAlias $alias): void {
		$this->functionAliases[$alias->name] = $alias;
	}

	public function getNamespaces(): array {
		return $this->namespaces;
	}

	public function getClasses(): array {
		return $this->classes;
	}

	public function getInterfaces(): array {
		return $this->interfaces;
	}

	public function getEnums(): array {
		return $this->enums;
	}

	public function getConstants(): array {
		return $this->constants;
	}

	public function getFunctions(): array {
		return $this->functions;
	}

	public function getFunctionAliases(): array {
		return $this->functionAliases;
	}

	public function addReference(PHPReference $ref): void {
		if ($ref instanceof PHPClass) {
			$this->addClass($ref);
		} else if ($ref instanceof PHPInterface) {
			$this->addInterface($ref);
		} else if ($ref instanceof PHPEnum) {
			$this->addEnum($ref);
		} else if ($ref instanceof PHPConstant) {
			$this->addConstant($ref);
		} else if ($ref instanceof PHPFunction) {
			$this->addFunction($ref);
		} else if ($ref instanceof PHPFunctionAlias) {
			$this->addFunctionAlias($ref);
		} else {
			throw new \RuntimeException("Unknown PHPReference instance.");
		}
	}

	static public function globalNamespace(): self {
		static $instance = NULL;

		return $instance ??= new self("", NULL);
	}
}
