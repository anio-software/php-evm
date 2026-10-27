<?php

namespace AnioSoftware\X2J\PHP;

final class PHPNamespace implements \JsonSerializable {
	private array $definitions     = [];
	private array $definitionByKind = [];

	private array $namespaces      = [];

	public function __construct(
		private string $name,
		private ?self $parent = NULL
	) {
		foreach (PHPDefinitionKind::cases() as $case) {
			$this->definitionByKind[$case->value] = [];
		}
	}

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

	public function getNamespaces(): array {
		return $this->namespaces;
	}

	public function getClasses(): array {
		return [];
	}

	public function getInterfaces(): array {
		return [];
	}

	public function getEnums(): array {
		return [];
	}

	public function getConstants(): array {
		return [];
	}

	public function getFunctions(): array {
		return [];
	}

	public function getFunctionAliases(): array {
		return [];
	}

	public function addDefinition(PHPDefinition $def): void {
		$id   = $def->getId();
		$kind = $def->getKind()->value;
		$fqn  = $def->getFullyQualifiedName();

		$this->definitions[$id] = $def;
		$this->definitionByKind[$kind][$fqn] = $id;
	}

	public function jsonSerialize(): mixed {
		return [
			"name"               => $this->name,
			"fullyQualifiedName" => $this->getFullyQualifiedName(),
			"namespaces"         => $this->getNamespaces(),
			"classes"            => $this->getClasses(),
			"interfaces"         => $this->getInterfaces(),
			"enums"              => $this->getEnums(),
			"constants"          => $this->getConstants(),
			"functions"          => $this->getFunctions(),
			"functionAliases"    => $this->getFunctionAliases()
		];
	}
}
