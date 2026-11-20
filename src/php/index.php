<?php

require_once __DIR__."/ValueChange.php";
require_once __DIR__."/bits/jsonSerializeEnumObject.php";
require_once __DIR__."/bits/canonicalizeStructuredObject.php";

require_once __DIR__."/PHPLogicalProperty.php";
require_once __DIR__."/PHPLogicalPropertyDomain.php";
require_once __DIR__."/PHPLogicalPropertySet.php";
require_once __DIR__."/PHPLogicalPropertySetBuilder.php";
require_once __DIR__."/PHPStructuredObjectBehavior.php";
require_once __DIR__."/PHPStructuredObject.php";

require_once __DIR__."/PHPExtensionMembership.php";
require_once __DIR__."/PHPReference.php";
require_once __DIR__."/PHPDefinitionKind.php";
require_once __DIR__."/PHPDefinitionMetadata.php";
require_once __DIR__."/PHPDefinition.php";
require_once __DIR__."/PHPStructuredObjectDiff.php";
require_once __DIR__."/PHPStructuredObjectDiffLazy.php";

require_once __DIR__."/PHPTypeKind.php";
require_once __DIR__."/PHPType.php";
require_once __DIR__."/PHPTypeOperator.php";
require_once __DIR__."/PHPTypeCollection.php";
require_once __DIR__."/PHPBuiltinTypeKind.php";
require_once __DIR__."/PHPBuiltinType.php";
require_once __DIR__."/PHPNamedType.php";
require_once __DIR__."/PHPUnionType.php";
require_once __DIR__."/PHPIntersectionType.php";
require_once __DIR__."/PHPUnknownType.php";
require_once __DIR__."/PHPUnspecifiedType.php";
require_once __DIR__."/Renderability.php";
require_once __DIR__."/getFunctionRenderability.php";
require_once __DIR__."/getRenderability.php";

require_once __DIR__."/PHPExpressionKind.php";
require_once __DIR__."/PHPExpression.php";
require_once __DIR__."/PHPLiteralKind.php";
require_once __DIR__."/PHPLiteral.php";
require_once __DIR__."/PHPNullLiteral.php";
require_once __DIR__."/PHPBooleanLiteral.php";
require_once __DIR__."/PHPPlaceholderExpression.php";
require_once __DIR__."/PHPRawExpression.php";
require_once __DIR__."/PHPIntegerRadix.php";
require_once __DIR__."/PHPNumberLiteralKind.php";
require_once __DIR__."/PHPNumberLiteral.php";
require_once __DIR__."/PHPIntegerLiteral.php";
require_once __DIR__."/PHPFloatLiteral.php";
require_once __DIR__."/PHPConstantFetchExpression.php";
require_once __DIR__."/PHPStringLiteralKind.php";
require_once __DIR__."/PHPStringLiteral.php";
require_once __DIR__."/PHPDoubleQuotedStringLiteral.php";

require_once __DIR__."/PHPFunctionParameter.php";
require_once __DIR__."/PHPFunction.php";
require_once __DIR__."/PHPFunctionAlias.php";

require_once __DIR__."/PHPClass.php";
require_once __DIR__."/PHPInterface.php";
require_once __DIR__."/PHPEnum.php";
require_once __DIR__."/PHPConstant.php";

require_once __DIR__."/PHPNamespace.php";
require_once __DIR__."/PHPNamespaceVisitFlags.php";
require_once __DIR__."/visitNamespace.php";
require_once __DIR__."/PHPManualEnums.php";
require_once __DIR__."/PHPManual.php";
require_once __DIR__."/PHPManualIndex.php";
