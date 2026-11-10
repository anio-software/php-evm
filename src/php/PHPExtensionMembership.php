<?php

namespace AnioSoftware\EVM\PHP;

enum PHPExtensionMembership: string implements \JsonSerializable {
	case kCore            = "core";
	case kBundled         = "bundled";
	case kBundledExternal = "bundledexternal";
	case kPECL            = "pecl";
	case kUnspecified     = "unspecified";

	public function jsonSerialize(): mixed {
		return jsonSerializeEnumObject($this);
	}
}
