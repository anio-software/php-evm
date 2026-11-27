<?php

require_once __DIR__."/PHPXMLElementDOMData.php";
require_once __DIR__."/PHPXMLElementData.php";
require_once __DIR__."/findParentElement.php";
require_once __DIR__."/findPHPDocInstruction.php";
require_once __DIR__."/getPHPDocAttribute.php";
require_once __DIR__."/extractQualifiedName.php";
require_once __DIR__."/extractPHPXMLElementData.php";
require_once __DIR__."/extractPHPXMLElementsData.php";
require_once __DIR__."/mapStringToPHPType.php";
require_once __DIR__."/extractPHPType.php";
require_once __DIR__."/parsePHPFunctionParameterInitializer.php";

require_once __DIR__."/factory/FactoryContext.php";
require_once __DIR__."/factory/createEnum.php";
require_once __DIR__."/factory/createInterface.php";
require_once __DIR__."/factory/createClass.php";
require_once __DIR__."/factory/createConstant.php";
require_once __DIR__."/factory/_createFunctionParameter.php";
require_once __DIR__."/factory/createFunction.php";
require_once __DIR__."/factory/createFunctionAlias.php";
require_once __DIR__."/factory/createDefinition.php";

require_once __DIR__."/loadPHPDefinitionsFromPHPXMLElementsData.php";
require_once __DIR__."/PHPDefinitionXMLMapping.php";
require_once __DIR__."/LoaderInstance.php";
require_once __DIR__."/Loader.php";
