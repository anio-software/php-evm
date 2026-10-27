<?php

namespace AnioSoftware\X2J\PHP;

final class PHPNamespace implements \JsonSerializable {
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

	public function getFullyQualifiedName(): string {
		$pieces = [];
		$current = $this;

		while ($current && $current->getName() !== "") {
			$pieces[] = $current->getName();
			$current = $current->getParent();
		}

		$pieces = \array_reverse($pieces);

		return \implode("\\", $pieces);
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

	public function addDefinition(PHPDefinition $def): void {
		if ($def instanceof PHPClass) {
			$this->addClass($def);
		} else if ($def instanceof PHPInterface) {
			$this->addInterface($def);
		} else if ($def instanceof PHPEnum) {
			$this->addEnum($def);
		} else if ($def instanceof PHPConstant) {
			$this->addConstant($def);
		} else if ($def instanceof PHPFunction) {
			$this->addFunction($def);
		} else if ($def instanceof PHPFunctionAlias) {
			$this->addFunctionAlias($def);
		} else {
			throw new \RuntimeException("Unknown PHPDefinition instance.");
		}
	}

	public function jsonSerialize(): mixed {
		return [
			"name"               => $this->name,
			"fullyQualifiedName" => $this->getFullyQualifiedName(),
			"namespaces"         => $this->namespaces,
			"classes"            => $this->classes,
			"interfaces"         => $this->interfaces,
			"enums"              => $this->enums,
			"constants"          => $this->constants,
			"functions"          => $this->functions,
			"functionAliases"    => $this->functionAliases
		];
	}
}
