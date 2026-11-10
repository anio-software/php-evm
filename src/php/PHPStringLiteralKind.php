<?php

namespace AnioSoftware\EVM\PHP;

enum PHPStringLiteralKind: string implements \JsonSerializable {
	case kSingleQuoted = "singleQuoted";
	case kDoubleQuoted = "doubleQuoted";
	// ... more to be added

	public function jsonSerialize(): mixed {
		return jsonSerializeEnumObject($this);
	}
}
