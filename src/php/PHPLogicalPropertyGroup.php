<?php

namespace AnioSoftware\EVM\PHP;

enum PHPLogicalPropertyGroup: string implements \JsonSerializable {
	case kReference          = "reference";

	case kDefinition         = "definition";
	case kDefinitionMetadata = "definitionMetadata";

	case kExpression         = "expression";

	case kLiteral            = "literal";
	case kStringLiteral      = "stringLiteral";
	case kNumberLiteral      = "numberLiteral";
	case kIntegerLiteral     = "integerLiteral";
	case kConstantFetch      = "constantFetch";

	case kNamespace          = "namespace";

	case kType               = "type";
	case kNamedType          = "namedType";
	case kBuiltinType        = "builtinType";
	case kTypeCollection     = "typeCollection";

	case kFunctionAlias      = "functionAlias";
	case kFunctionParameter  = "functionParameter";
	case kFunction           = "function";

	public function jsonSerialize(): mixed {
		return jsonSerializeEnumObject($this);
	}
}
