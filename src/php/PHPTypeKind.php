<?php

namespace AnioSoftware\X2J\PHP;

enum PHPTypeKind: string {
	case kBuiltin      = "builtinType";
	case kNamed        = "namedType";
	case kUnion        = "unionType";
	case kIntersection = "intersectionType";
	case kUnspecified  = "unspecified";
	case kUnknown      = "unknown";
}
