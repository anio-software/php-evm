<?php

namespace AnioSoftware\X2J\PHP;

abstract readonly class PHPType implements \JsonSerializable {
	abstract public function getNamespace(): ?PHPNamespace;
	abstract public function getTypeKind(): PHPTypeKind;
	abstract public function getTypeId(): string;
	abstract public function isEqualTo(PHPType $t): bool;
	abstract public function render(): string;
	abstract public function isCompoundType(): bool;
	abstract public function isRepresentableInCode(): bool;
	abstract public function toNullable(): PHPType;

	final public function isBuiltinType(PHPBuiltinTypeKind $kind): bool {
		if (!($this instanceof PHPBuiltinType)) {
			return false;
		}

		return $this->getBuiltinKind() === $kind;
	}

	public function toCode(): ?string {
		if (!$this->isRepresentableInCode()) {
			return NULL;
		}

		return $this->render();
	}

	public function jsonSerialize(): mixed {
		$arr = [
			"typeKind" => $this->getTypeKind()
		];

		$ns = $this->getNamespace();

		if ($ns) {
			$arr["namespace"] = $ns->getFullyQualifiedName();
		}

		return $arr;
	}
}
