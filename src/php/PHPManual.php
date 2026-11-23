<?php

namespace AnioSoftware\EVM\PHP;

final class PHPManual implements PHPStructuredObject {
	use PHPStructuredObjectBehavior;

	private ?PHPManualIndex $index = NULL;

	public function __construct(
		readonly private PHPNamespace $globalNamespace
	) {}

	public function buildIndex(): PHPManualIndex {
		$this->index = new PHPManualIndex($this);

		return $this->index;
	}

	public function getGlobalNamespace(): PHPNamespace {
		return $this->globalNamespace;
	}

	public function getOrCreateNamespace(string $path): PHPNamespace {
		if ($path === "") {
			return $this->globalNamespace;
		}

		$currentNamespace = $this->globalNamespace;

		foreach (\explode("\\", $path) as $piece) {
			$namespaces = $currentNamespace->getNamespaces();

			if (\array_key_exists($piece, $namespaces)) {
				$currentNamespace = $namespaces[$piece];
			} else {
				$newNamespace = new PHPNamespace($piece, $currentNamespace);

				$currentNamespace->addNamespace($newNamespace);
				$currentNamespace = $newNamespace;
			}
		}

		return $currentNamespace;
	}

	public function parseQualifiedName(string $name): PHPQualifiedName {
		if (\str_starts_with($name, "\\")) {
			$name = \substr($name, 1);
		}

		$parts = \explode("\\", $name);
		$localName = \array_pop($parts);

		return new PHPQualifiedName(
			localName : $localName,
			namespace : \implode("\\", $parts)
		);
	}

	public function getLogicalPropertySet(): PHPLogicalPropertySet {
		return PHPLogicalPropertySetBuilder::create(
			NULL, PHPLogicalPropertyDomain::kManual
		)
		->withProperty(PHPLogicalProperty::kManualEnums          , PHPManualEnums::instance())
		->withProperty(PHPLogicalProperty::kManualGlobalNamespace, $this->globalNamespace)
		->finalize();
	}
}
