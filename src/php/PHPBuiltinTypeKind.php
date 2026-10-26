<?php

namespace AnioSoftware\X2J\PHP;

enum PHPBuiltinTypeKind: string {
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
}
