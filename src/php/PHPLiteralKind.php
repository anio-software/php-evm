<?php

namespace AnioSoftware\EVM\PHP;

enum PHPLiteralKind: string {
	case kNull    = "null";
	case kBoolean = "boolean";
	case kNumber  = "number";
	case kString  = "string";
	// ... more to be added
}
