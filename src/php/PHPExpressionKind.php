<?php

namespace AnioSoftware\EVM\PHP;

enum PHPExpressionKind: string implements \JsonSerializable {
	case kLiteral       = "literal";
	case kPlaceholder   = "placeholder";
	case kRaw           = "raw";
	case kConstantFetch = "constantFetch";
	// ... more to be added

	public function jsonSerialize(): mixed {
		return jsonSerializeEnumObject($this);
	}
}
