<?php

require_once __DIR__."/../utils/index.php";
require_once __DIR__."/../xml/index.php";
require_once __DIR__."/../php/index.php";

require_once __DIR__."/EVMDiagnosticMessageSeverity.php";
require_once __DIR__."/EVMDiagnosticMessageOrigin.php";
require_once __DIR__."/EVMDiagnosticMessage.php";
require_once __DIR__."/EVMReferenceIgnoredDiagnosticMessage.php";
require_once __DIR__."/EVMDiagnostics.php";

require_once __DIR__."/EVMOptions.php";
require_once __DIR__."/EVMTimingStatistics.php";
require_once __DIR__."/EVMStatistics.php";
require_once __DIR__."/EVMContext.php";

require_once __DIR__."/bits/factory/EVMBitsFactoryContext.php";
require_once __DIR__."/bits/factory/createFunctionAlias.php";
require_once __DIR__."/bits/factory/createFunctionParameter.php";
require_once __DIR__."/bits/factory/createFunctionParameters.php";
require_once __DIR__."/bits/factory/createFunction.php";
require_once __DIR__."/bits/factory/createClass.php";
require_once __DIR__."/bits/factory/createInterface.php";
require_once __DIR__."/bits/factory/createEnum.php";
require_once __DIR__."/bits/factory/createConstant.php";

require_once __DIR__."/bits/getPHPDocAttribute.php";
require_once __DIR__."/bits/getPHPExtensionMembershipFromDOMElement.php";
require_once __DIR__."/bits/getBookIdFromDOMElement.php";
require_once __DIR__."/bits/createPHPDefinitionMetadataFromDOMElement.php";
require_once __DIR__."/bits/createPHPTypeFromDOMElement.php";
require_once __DIR__."/bits/parsePHPFunctionParameterInitializer.php";
require_once __DIR__."/bits/loadPHPClassLikes.php";
require_once __DIR__."/bits/loadPHPConstants.php";
require_once __DIR__."/bits/loadPHPFunctions.php";

require_once __DIR__."/loadPHPManual.php";
