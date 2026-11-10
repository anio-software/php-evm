<?php

namespace AnioSoftware\EVM\PHP;

enum PHPTypeKind: string implements \JsonSerializable {
	case kBuiltin      = "builtin";
	case kNamed        = "named";
	case kUnion        = "union";
	case kIntersection = "intersection";
	case kUnspecified  = "unspecified";
	case kUnknown      = "unknown";

	public function jsonSerialize(): mixed {
		return jsonSerializeEnumObject($this);
	}
}
