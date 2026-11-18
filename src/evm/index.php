<?php

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

require_once __DIR__."/bits/getPHPDocAttribute.php";
require_once __DIR__."/bits/getPHPExtensionMembershipFromDOMElement.php";
require_once __DIR__."/bits/getBookIdFromDOMElement.php";
require_once __DIR__."/bits/createPHPDefinitionMetadataFromDOMElement.php";
require_once __DIR__."/bits/createPHPTypeFromDOMElement.php";
require_once __DIR__."/bits/loadPHPClassLikes.php";
require_once __DIR__."/bits/loadPHPConstants.php";
require_once __DIR__."/bits/loadPHPFunctions.php";
require_once __DIR__."/loadPHPManual.php";
