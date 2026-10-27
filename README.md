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
    "namespace": "",
    "referenceId": "function.str-pad",
    "name": "str_pad",
    "fullyQualifiedName": "\\str_pad",
    "parameters": [
        {
            "name": "string",
            "type": {
                "typeKind": "BuiltinType",
                "value": "string"
            },
            "initializer": null,
            "flags": 0
        },
        {
            "name": "length",
            "type": {
                "typeKind": "BuiltinType",
                "value": "int"
            },
            "initializer": null,
            "flags": 0
        },
        {
            "name": "pad_string",
            "type": {
                "typeKind": "BuiltinType",
                "value": "string"
            },
            "initializer": "\" \"",
            "flags": 1
        },
        {
            "name": "pad_type",
            "type": {
                "typeKind": "BuiltinType",
                "value": "int"
            },
            "initializer": "STR_PAD_RIGHT",
            "flags": 129
        }
    ],
    "flags": 0,
    "returnType": {
        "typeKind": "BuiltinType",
        "value": "string"
    }
}
```
