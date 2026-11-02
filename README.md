# 🐘 EVM - Easy Virtual Manual

EVM is a small library that makes it easy to access the official PHP manual programmatically.

> [!WARNING]
> This project and its API are a work in progress. The API is currently **NOT stable** and may change at any time without notice.
>
> Do not rely on it in production environments.

## Type Hierarchy

```
├── PHPFunctionParameter
├── PHPManual
├── PHPNamespace
├── PHPReference
│   └── PHPDefinition
│       ├── PHPClass
│       ├── PHPConstant
│       ├── PHPEnum
│       ├── PHPFunction
│       ├── PHPFunctionAlias
│       └── PHPInterface
└── PHPType
    ├── PHPBuiltinType
    ├── PHPNamedType
    ├── PHPTypeCollection
    │   ├── PHPIntersectionType
    │   └── PHPUnionType
    ├── PHPUnknownType
    └── PHPUnspecifiedType
```

## Examples

The examples below assume you already have the [PHP's documentation in XML format](https://doc.php.net/guide/local-setup.md).

### ⚙️ Example: inspect PHP functions

EVM provides an object-oriented API for navigating the PHP manual and inspecting definitions, parameters, and types.
The following example demonstrates how to retrieve a function and inspect its signature and parameters:

```php
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
```

Example output:

```
Signature: strpos(string $haystack, string $needle, int $offset = 0): false|int

Parameter: $haystack of type 'string'
Parameter: $needle of type 'string'
Parameter: $offset (optional) of type 'int' with initializer = 0

Returns: false|int

Union type member: false
Union type member: int
```

This example illustrates how EVM exposes PHP manual definitions as objects, allowing applications to inspect function signatures, parameter types, default values, and return types without having to parse the XML documentation themselves.

### Example: convert to JSON

> [!NOTE]
> At the moment, the JSON representation does not include all information from the PHP manual.
> Some elements, such as class methods, are still missing or not completely represented.

The PHP manual is easier for machines to consume in JSON format than XML because JSON offers a simpler, more lightweight, and predictable data structure.
Its key-value format makes it straightforward to process and extract information.
JSON is also natively supported by most modern programming languages, making it easier to integrate with scripts, developer tools, and automated systems.

**Unfortunately, the PHP reference manual is not distributed in JSON format.**

The following example demonstrates how to convert the existing XML manual into JSON:

```php
<?php

use AnioSoftware\EVM as EVM;

require_once __DIR__."/src/evm/index.php";

$options = new EVM\EVMOptions(__DIR__."/example/manual.xml");
$context = new EVM\EVMContext($options);

$statistics = $context->loadPHPManual();

\fwrite(\STDERR, $statistics->toString());

echo \json_encode($context->manual, JSON_PRETTY_PRINT)."\n";
```

Example output:

```
Took 3752ms to fully load PHP manual:
Loaded 63 namespaces
Loaded 767 classes
Loaded 30 interfaces
Loaded 8 enums
Loaded 3399 functions
Loaded 182 function aliases
Loaded 4853 constants
```

```json
"str_pad": {
    "definitionMetadata": {
        "extensionMembership": "core",
        "bookId": "book.strings"
    },
    "definitionKind": "function",
    "namespace": "",
    "referenceId": "function.str-pad",
    "name": "str_pad",
    "fullyQualifiedName": "\\str_pad",
    "parameters": [
        {
            "name": "string",
            "type": {
                "typeKind": "builtin",
                "kind": "string"
            },
            "initializer": null,
            "flags": 0
        },
        {
            "name": "length",
            "type": {
                "typeKind": "builtin",
                "kind": "int"
            },
            "initializer": null,
            "flags": 0
        },
        {
            "name": "pad_string",
            "type": {
                "typeKind": "builtin",
                "kind": "string"
            },
            "initializer": "\" \"",
            "flags": 1
        },
        {
            "name": "pad_type",
            "type": {
                "typeKind": "builtin",
                "kind": "int"
            },
            "initializer": "STR_PAD_RIGHT",
            "flags": 129
        }
    ],
    "flags": 0,
    "returnType": {
        "typeKind": "builtin",
        "kind": "string"
    }
}
```
