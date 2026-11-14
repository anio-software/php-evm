<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPNamespace extends PHPLogicalPropertiesObject {
	private PHPNamespaceState $state;

	public function __construct(
		private string $name,
		private ?self $parent = NULL
	) {
		$this->state = new PHPNamespaceState;

		foreach (PHPDefinitionKind::cases() as $case) {
			$this->state->definitionsByKind[$case->value] = [];
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
		$str = \implode("\\", $pieces);

		return \count($pieces) ? "\\$str" : $str;
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

		$this->state->namespaces[$namespace->getName()] = $namespace;
	}

	public function getNamespaces(): array {
		return $this->state->namespaces;
	}

	private function indexByName(array $definitions): array {
		$ret = [];

		foreach ($definitions as $id => $definition) {
			$ret[$definition->name] = $definition;
		}

		return $ret;
	}

	public function getDefinitions(?PHPDefinitionKind $kind = NULL): array {
		if (!$kind) {
			// no re-index because of potential naming collisions
			return $this->state->definitions;
		}

		return $this->indexByName($this->state->definitionsByKind[$kind->value]);
	}

	public function getClasses(): array {
		return $this->getDefinitions(PHPDefinitionKind::kClass);
	}

	public function getInterfaces(): array {
		return $this->getDefinitions(PHPDefinitionKind::kInterface);
	}

	public function getEnums(): array {
		return $this->getDefinitions(PHPDefinitionKind::kEnum);
	}

	public function getConstants(): array {
		return $this->getDefinitions(PHPDefinitionKind::kConstant);
	}

	public function getFunctions(): array {
		return $this->getDefinitions(PHPDefinitionKind::kFunction);
	}

	public function getFunctionAliases(): array {
		return $this->getDefinitions(PHPDefinitionKind::kFunctionAlias);
	}

	public function addDefinition(PHPDefinition $def): void {
		$id   = $def->getDefinitionId();
		$kind = $def->getDefinitionKind()->value;

		if (\array_key_exists($id, $this->state->definitions)) {
			throw new \RuntimeException(
				"A definition with this id ($id) was already added to this namespace."
			);
		}

		$this->state->definitions[$id] = $def;
		$this->state->definitionsByKind[$kind][$id] = $def;
	}

	//public function jsonSerialize(): mixed {}
}
