<?php

namespace AnioSoftware\X2J\PHP;

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
}
