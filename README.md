# EVM

🐘 EVM (**E**asy **V**irtual **M**anual) is a small library that makes it easy to access the official PHP manual programmatically.

### Example: convert to JSON

(This example assumes you already have the [PHP's documentation in XML format](https://doc.php.net/guide/local-setup.md).)

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

$statistics = $context->loadPHPManual();

\fwrite(\STDERR, $statistics->toString());

echo \json_encode($context->manual, JSON_PRETTY_PRINT)."\n";
```

Example output:

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
