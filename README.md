# X2J

A small program that makes it easy for a program to consume the information inside PHP's XML handbook.

### Example: convert to JSON

```php
#!/usr/bin/env php
<?php

use AnioSoftware\X2J as X2J;

require_once __DIR__."/php/index.php";
require_once __DIR__."/xml/index.php";
require_once __DIR__."/x2j/index.php";

if (\sizeof($argv) !== 2) {
	\fwrite(\STDERR, "Usage: toJSON.php <path-to-manual.xml> > manual.json\n");
	\exit(2);
}

$options = new X2J\X2JOptions($argv[1]);
$context = new X2J\X2JContext($options);

X2J\loadPHPManual($context);

echo \json_encode($context->manual, JSON_PRETTY_PRINT)."\n";
```

Example output:

```json
"str_pad": {
    "name": "str_pad",
    "parameters": [
        {
            "name": "string",
            "type": {
                "typeKind": "BuiltinType",
                "value": "string"
            },
            "isReference": false,
            "isOptional": false,
            "initializer": null,
            "isVariadic": false
        },
        {
            "name": "length",
            "type": {
                "typeKind": "BuiltinType",
                "value": "int"
            },
            "isReference": false,
            "isOptional": false,
            "initializer": null,
            "isVariadic": false
        },
        {
            "name": "pad_string",
            "type": {
                "typeKind": "UnionType",
                "members": [
                    {
                        "typeKind": "BuiltinType",
                        "value": "null"
                    },
                    {
                        "typeKind": "BuiltinType",
                        "value": "string"
                    }
                ]
            },
            "isReference": false,
            "isOptional": true,
            "initializer": "\" \"",
            "isVariadic": false
        },
        {
            "name": "pad_type",
            "type": {
                "typeKind": "UnionType",
                "members": [
                    {
                        "typeKind": "BuiltinType",
                        "value": "null"
                    },
                    {
                        "typeKind": "BuiltinType",
                        "value": "int"
                    }
                ]
            },
            "isReference": false,
            "isOptional": true,
            "initializer": "STR_PAD_RIGHT",
            "isVariadic": false
        }
    ],
    "isVariadic": false,
    "returnType": {
        "typeKind": "BuiltinType",
        "value": "string"
    }
}
```
