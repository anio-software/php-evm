<?php

namespace AnioSoftware\EVM\PHP;

enum PHPLogicalProperty: string implements \JsonSerializable {
	// common definition properties
	case kDefinitionMetadata                    = "definition.metadata";
	case kDefinitionKind                        = "definition.kind";
	case kDefinitionNamespace                   = "definition.namespace";
	case kDefinitionReferenceId                 = "definition.referenceId";
	case kDefinitionName                        = "definition.name";
	case kDefinitionFullyQualifiedName          = "definition.fullyQualifiedName";

	case kDefinitionMetadataExtensionMembership = "definitionMetadata.extensionMembership";
	case kDefinitionMetadataBookId              = "definitionMetadata.bookId";

	// expressions
	case kExpressionKind                        = "expression.kind";
	case kExpressionSourceCode                  = "expression.sourceCode";

	// literals
	case kLiteralKind                           = "literal.kind";
	case kLiteralValue                          = "literal.value";

	case kStringLiteralKind                     = "stringLiteral.kind";
	case kNumberLiteralKind                     = "numberLiteral.kind";
	case kIntegerLiteralRadix                   = "integerLiteral.radix";

	case kConstantFetchConstant                 = "constantFetch.constant";

	// namespace
	case kNamespaceName                         = "namespace.name";
	case kNamespaceFullyQualifiedName           = "namespace.fullyQualifiedName";
	case kNamespaceNamespaces                   = "namespace.namespaces";
	case kNamespaceClasses                      = "namespace.classes";
	case kNamespaceInterfaces                   = "namespace.interfaces";
	case kNamespaceEnums                        = "namespace.enums";
	case kNamespaceConstants                    = "namespace.constants";
	case kNamespaceFunctions                    = "namespace.functions";
	case kNamespaceFunctionAliases              = "namespace.functionAliases";

	// types
	case kTypeKind                              = "type.kind";
	case kTypeNamespace                         = "type.namespace";

	case kNamedTypeName                         = "namedType.name";
	case kNamedTypeFullyQualifiedName           = "namedType.fullyQualifiedName";

	case kBuiltinTypeKind                       = "builtinType.kind";

	case kTypeCollectionMembers                 = "typeCollection.members";

	// functions
	case kFunctionAliasOriginalName             = "functionAlias.originalName";

	case kFunctionParameterName                 = "functionParameter.name";
	case kFunctionParameterType                 = "functionParameter.type";
	case kFunctionParameterInitializer          = "functionParameter.initializer";
	case kFunctionParameterFlags                = "functionParameter.flags";

	case kFunctionParameters                    = "function.parameters";
	case kFunctionFlags                         = "function.flags";
	case kFunctionReturnType                    = "function.returnType";

	public function jsonSerialize(): mixed {
		return jsonSerializeEnumObject($this);
	}
}
