<?php

namespace AnioSoftware\EVM\PHP;

enum PHPNumberLiteralKind: string implements \JsonSerializable {
	case kFloat   = "float";
	case kInteger = "integer";

	public function jsonSerialize(): mixed {
		return jsonSerializeEnumObject($this);
	}
}
