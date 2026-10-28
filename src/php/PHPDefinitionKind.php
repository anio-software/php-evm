<?php

namespace AnioSoftware\EVM\PHP;

enum PHPDefinitionKind: string {
	case kClass         = "class";
	case kInterface     = "interface";
	case kEnum          = "enum";
	case kConstant      = "constant";
	case kFunction      = "function";
	case kFunctionAlias = "functionAlias";
}
