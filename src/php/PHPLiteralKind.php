<?php

namespace AnioSoftware\EVM\PHP;

enum PHPLiteralKind: string implements \JsonSerializable {
	case kNull    = "null";
	case kBoolean = "boolean";
	case kNumber  = "number";
	case kString  = "string";
	// ... more to be added

	public function jsonSerialize(): mixed {
		return jsonSerializeEnumObject($this);
	}
}
