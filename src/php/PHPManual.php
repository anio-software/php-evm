<?php

namespace AnioSoftware\X2J\PHP;

use AnioSoftware\X2J\XML as XML;

final class PHPManual {
	private array $classes = [];
	private array $interfaces = [];
	private array $enums = [];
	private array $constants = [];
	private array $functions = [];

	public function addClass(PHPClass $class) {
		$this->classes[$class->name] = $class;
	}

	public function addInterface(PHPInterface $interface) {
		$this->interfaces[$interface->name] = $interface;
	}

	public function addEnum(PHPEnum $enum) {
		$this->enums[$enum->name] = $enum;
	}

	public function addConstant(PHPConstant $const) {
		$this->constants[$const->name] = $const;
	}

	public function addFunction(PHPFunction $func) {
		$this->functions[$func->name] = $func;
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

	public function addReference(PHPReference $ref) {
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
		} else {
			throw new \RuntimeException("Unknown PHPReference instance.");
		}
	}

	public const DOCBOOK_NS = "http://docbook.org/ns/docbook";
	public const XMLID_NS   = "http://www.w3.org/XML/1998/namespace";

	static public function tagSelectorFactory(string $tagName): XML\DOMSelector {
		return new XML\TagSelector(self::DOCBOOK_NS, $tagName);
	}

	static public function refIdSelectorFactory(): XML\DOMSelector {
		return new XML\AttributeSelector(self::XMLID_NS, "id");
	}

	static public function getRefIdAttribute(\DOMElement $el): string {
		return $el->getAttributeNS(self::XMLID_NS, "id");
	}
}
