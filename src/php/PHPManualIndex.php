<?php

namespace AnioSoftware\EVM\PHP;

//
// this class represents an immutable index of the php manual
//
final readonly class PHPManualIndex {
	private array $definitions;
	private array $namespaces;

	public function __construct(
		private PHPManual $manual
	) {
		$definitions = $namespaces = [];

		// store definitions by kind because of
		// potential name collisions, for example:
		// a class can have the same name as a function
		foreach (PHPDefinitionKind::cases() as $kind) {
			$definitions[$kind->value] = [];
		}

		visitNamespace(
			$this->manual->getGlobalNamespace(),
			static function($node) use (&$definitions, &$namespaces): void {
				if ($node instanceof PHPNamespace) {
					$key = $node->getFullyQualifiedName();

					if (\array_key_exists($key, $namespaces)) {
						throw new \LogicException("Detected a namespace name collision.");
					}

					$namespaces[$key] = $node;

					return;
				} else if (!($node instanceof PHPDefinition)) {
					return;
				}

				$kind = $node->getDefinitionKind();
				$key  = $node->getFullyQualifiedName();

				if (\array_key_exists($key, $definitions[$kind->value])) {
					throw new \LogicException("Detected a name collision.");
				}

				$definitions[$kind->value][$key] = $node;
			},
			PHPNamespaceVisitFlags::VisitAll
		);

		$this->definitions = $definitions;
		$this->namespaces  = $namespaces;
	}

	public function diffDefinitionsOfKind(self $that, PHPDefinitionKind $kind): DiffResult {
		$before = $this->definitions[$kind->value];
		$after  = $that->getDefinitions()[$kind->value];

		$removed  = \array_diff_key($before, $after);
		$added    = \array_diff_key($after, $before);
		$retained = \array_intersect_key($before, $after);

		$changed = [];

		foreach (\array_keys($retained) as $name) {
			$definitionBefore = $before[$name];
			$definitionAfter  = $after[$name];

			if ($definitionBefore->hash() !== $definitionAfter->hash()) {
				$changed[$name] = $definitionAfter;
			}
		}

		return new DiffResult(
			added    : $added,
			removed  : $removed,
			retained : $retained,
			changed  : $changed
		);
	}

	public function diffDefinitions(self $that): array {
		$ret = [];

		foreach (PHPDefinitionKind::cases() as $kind) {
			$ret[$kind->value] = $this->diffDefinitionsOfKind($that, $kind);
		}

		return $ret;
	}

	public function diff(self $that): DiffResult {
		$acc = new DiffResultAccumulator;

		foreach (PHPDefinitionKind::cases() as $kind) {
			$acc->addChanges(
				$this->diffDefinitionsOfKind($that, $kind)
			);
		}

		return $acc->build();
	}

	public function getDefinitions(): array {
		return $this->definitions;
	}

	public function getDefinitionsOfKind(PHPDefinitionKind $kind): array {
		return $this->definitions[$kind->value];
	}

	public function getNamespaces(): array {
		return $this->namespaces;
	}

	public function getClasses(): array {
		return $this->getDefinitionsOfKind(PHPDefinitionKind::kClass);
	}

	public function getInterfaces(): array {
		return $this->getDefinitionsOfKind(PHPDefinitionKind::kInterface);
	}

	public function getEnums(): array {
		return $this->getDefinitionsOfKind(PHPDefinitionKind::kEnum);
	}

	public function getConstants(): array {
		return $this->getDefinitionsOfKind(PHPDefinitionKind::kConstant);
	}

	public function getFunctions(): array {
		return $this->getDefinitionsOfKind(PHPDefinitionKind::kFunction);
	}

	public function getFunctionAliases(): array {
		return $this->getDefinitionsOfKind(PHPDefinitionKind::kFunctionAlias);
	}
}
