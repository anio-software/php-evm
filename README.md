# X2J

A small program that makes it easy for a program to consume the information inside PHP's XML handbook.

### Example: convert to JSON

```php
#!/usr/bin/env php
<?php

use AnioSoftware\EVM as EVM;

require_once __DIR__."/../php/index.php";
require_once __DIR__."/../xml/index.php";
require_once __DIR__."/../evm/index.php";

if (\sizeof($argv) !== 2) {
	\fwrite(\STDERR, "Usage: toJSON.php <path-to-manual.xml> > manual.json\n");
	\exit(2);
}

$options = new EVM\EVMOptions($argv[1]);
$context = new EVM\EVMContext($options);

EVM\loadPHPManual($context);

echo \json_encode($context->manual, JSON_PRETTY_PRINT)."\n";
```

Example output:

```json
"str_pad": {
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
