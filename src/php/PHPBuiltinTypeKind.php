<?php

namespace AnioSoftware\X2J\PHP;

enum PHPBuiltinTypeKind: string {
	case kMixed    = "mixed";
	case kNever    = "never";
	case kVoid     = "void";

	case kObject   = "object";
	case kResource = "resource";
	case kArray    = "array";
	case kString   = "string";
	case kFloat    = "float";
	case kInt      = "int";
	case kBool     = "bool";
	case kCallable = "callable";
	case kIterable = "iterable";

	case kTrue     = "true";
	case kFalse    = "false";
	case kNull     = "null";

	public function toType(): PHPType {
		return PHPBuiltinType::fromKind($this);
	}
}
