<?php

namespace AnioSoftware\EVM\PHP;

enum PHPDefinitionKind: string implements \JsonSerializable {
	case kClass         = "class";
	case kInterface     = "interface";
	case kEnum          = "enum";
	case kConstant      = "constant";
	case kFunction      = "function";
	case kFunctionAlias = "functionAlias";

	public function jsonSerialize(): mixed {
		return jsonSerializeEnumObject($this);
	}
}
