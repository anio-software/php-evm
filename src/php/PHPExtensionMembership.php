<?php

namespace AnioSoftware\EVM\PHP;

enum PHPExtensionMembership: string {
	case kCore            = "core";
	case kBundled         = "bundled";
	case kBundledExternal = "bundledexternal";
	case kPECL            = "pecl";
	case kUnspecified     = "unspecified";
}
