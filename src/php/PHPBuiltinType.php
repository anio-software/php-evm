<?php

namespace AnioSoftware\X2J\PHP;

enum PHPBuiltinType: string implements PHPType {
	case Mixed    = "mixed";
	case Never    = "never";
	case Void     = "void";

	case Object   = "object";
	case Resource = "resource";
	case Array    = "array";
	case String   = "string";
	case Float    = "float";
	case Int      = "int";
	case Bool     = "bool";
	case Callable = "callable";
	case Iterable = "iterable";

	case True     = "true";
	case False    = "false";
	case Null     = "null";

	public function jsonSerialize(): mixed {
		return [
			"typeKind" => "BuiltinType",
			"value"    => $this->value
		];
	}

	public function getTypeId(): string {
		return "builtin:".$this->name;
	}

	public function render(): string {
		return $this->value;
	}
}
