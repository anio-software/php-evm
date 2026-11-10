<?php

namespace AnioSoftware\EVM\PHP;

enum PHPTypeOperator: string implements \JsonSerializable {
	case kPipe = "|";
	case kAmpersand = "&";

	public function jsonSerialize(): mixed {
		return jsonSerializeEnumObject($this);
	}
}
