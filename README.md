# 🐘 EVM

EVM (**E**asy **V**irtual **M**anual) is a small library that makes it easy to access the official PHP manual programmatically.

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
