<?php

namespace AnioSoftware\EVM\PHP;

enum PHPNumberRadix: string {
	case kDecimal     = "decimal";
	case kHexadecimal = "hexadecimal";
	case kOctal       = "octal";
	case kBinary      = "binary";
}
