<?php

use AnioSoftware\EVM as EVM;

require_once __DIR__."/src/evm/index.php";

// Load the PHP manual.
$options = new EVM\EVMOptions(__DIR__."/example/manual.xml");
$context = new EVM\EVMContext($options);

$context->loadPHPManual();

// Retrieve a function from the manual.
$function = $context->manual->getGlobalNamespace()->getFunctions()["strpos"];

// Print the function signature.
echo "Signature: ".$function->renderSignature()."\n\n";

// Inspect its parameters.
foreach ($function->getParameters() as $parameter) {
	echo "Parameter: \$".$parameter->name;

	if ($parameter->isOptional()) {
		echo " (optional)";
	}

	echo " of type '".$parameter->type->render()."'";

	if ($parameter->initializer !== NULL) {
		echo " with initializer = ".$parameter->initializer;
	}

	echo "\n";
}

// Inspect the return type.
$returnType = $function->returnType;

echo "\nReturns: ".$returnType->render()."\n";

if ($returnType instanceof EVM\PHP\PHPUnionType) {
	echo "\n";

	foreach ($returnType->getTypeMembers() as $member) {
		echo "Union type member: ".$member->render()."\n";
	}
}
