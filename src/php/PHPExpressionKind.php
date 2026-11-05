<?php

namespace AnioSoftware\EVM\PHP;

enum PHPExpressionKind: string {
	case kLiteral     = "literal";
	case kPlaceholder = "placeholder";
	case kRaw         = "raw";
	// ... more to be added
}
