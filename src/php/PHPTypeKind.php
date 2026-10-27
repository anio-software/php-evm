<?php

namespace AnioSoftware\X2J\PHP;

enum PHPTypeKind: string {
	case kBuiltin      = "builtin";
	case kNamed        = "named";
	case kUnion        = "union";
	case kIntersection = "intersection";
	case kUnspecified  = "unspecified";
	case kUnknown      = "unknown";
}
