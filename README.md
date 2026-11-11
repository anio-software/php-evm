# 🐘 EVM - Easy Virtual Manual

EVM is a small library that makes it easy to access the official PHP manual programmatically.
EVM provides an object-oriented API for navigating the PHP manual and inspecting definitions, parameters, and types.

## Examples

The examples below assume you already have the [PHP's documentation in XML format](https://doc.php.net/guide/local-setup.md).

### ⚙️ Example: inspect PHP functions

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
$function = $context->getPHPManualIndex()->getFunctions()["\\strpos"];

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
		echo " with initializer = ".$parameter->initializer->render();
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

### 🔍 Example: show changes between two manual.xml files

```php
<?php

use AnioSoftware\EVM as EVM;

require_once __DIR__."/src/evm/index.php";

// Load the PHP manuals.
$context1 = new EVM\EVMContext(new EVM\EVMOptions(__DIR__."/example/manual.xml"));
$context2 = new EVM\EVMContext(new EVM\EVMOptions(__DIR__."/example/manual2.xml"));

$context1->loadPHPManual();
$context2->loadPHPManual();

// Compute diff
$diff = $context1->getPHPManualIndex()->diff(
	$context2->getPHPManualIndex()
);

foreach ($diff->removed as $definition) {
	echo red("-")." definition ".prettyDefName($definition, "\\red")." was removed\n";
}

foreach ($diff->added as $definition) {
	echo green("+")." definition ".prettyDefName($definition, "\\green")." was added\n";
}

foreach ($diff->changed as $definition) {
	echo yellow("*")." definition ".prettyDefName($definition->after, "\\yellow")." was changed\n";
}

function prettyDefName(EVM\PHP\PHPDefinition $def, callable $colorize): string {
	return ($colorize)(
		$def->getFullyQualifiedName()
	)." ".\gray("(".$def->getDefinitionKind()->name.")");
}

function gray(string $str): string {
	return \posix_isatty(\STDOUT) ? "\033[90m".$str."\033[0m" : $str;
}

function red(string $str): string {
	return \posix_isatty(\STDOUT) ? "\033[31m".$str."\033[0m" : $str;
}

function green(string $str): string {
	return \posix_isatty(\STDOUT) ? "\033[32m".$str."\033[0m" : $str;
}

function yellow(string $str): string {
	return \posix_isatty(\STDOUT) ? "\033[33m".$str."\033[0m" : $str;
}
```

This generates output like:

<pre class="terminal"><span style="color:#e5534b">-</span> definition <span style="color:#e5534b">\pg_service</span> <span style="color:#6e7681">(kFunction)</span> was removed
<span style="color:#57ab5a">+</span> definition <span style="color:#57ab5a">\Time\Duration</span> <span style="color:#6e7681">(kClass)</span> was added
<span style="color:#57ab5a">+</span> definition <span style="color:#57ab5a">\Time\TimeException</span> <span style="color:#6e7681">(kClass)</span> was added
<span style="color:#57ab5a">+</span> definition <span style="color:#57ab5a">\POSIX_SC_OPEN_MAX</span> <span style="color:#6e7681">(kConstant)</span> was added
<span style="color:#57ab5a">+</span> definition <span style="color:#57ab5a">\CURLOPT_SSL_SIGNATURE_ALGORITHMS</span> <span style="color:#6e7681">(kConstant)</span> was added
<span style="color:#57ab5a">+</span> definition <span style="color:#57ab5a">\clamp</span> <span style="color:#6e7681">(kFunction)</span> was added
<span style="color:#57ab5a">+</span> definition <span style="color:#57ab5a">\curl_multi_get_handles</span> <span style="color:#6e7681">(kFunction)</span> was added
<span style="color:#c69026">*</span> definition <span style="color:#c69026">\oci_set_call_timeout</span> <span style="color:#6e7681">(kFunction)</span> was changed
<span style="color:#c69026">*</span> definition <span style="color:#c69026">\ltrim</span> <span style="color:#6e7681">(kFunction)</span> was changed
<span style="color:#c69026">*</span> definition <span style="color:#c69026">\rtrim</span> <span style="color:#6e7681">(kFunction)</span> was changed
<span style="color:#c69026">*</span> definition <span style="color:#c69026">\trim</span> <span style="color:#6e7681">(kFunction)</span> was changed
</pre>

### 🧩 Example: convert to JSON

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
Took 806ms to fully load PHP manual:
Spent 517ms for class likes
Spent 85ms for constants
Spent 197ms for functions
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
            "initializer": {
                "expressionKind": "literal",
                "sourceCode": "\" \"",
                "literalKind": "string",
                "value": " ",
                "stringLiteralKind": "doubleQuoted"
            },
            "flags": 1
        },
        {
            "name": "pad_type",
            "type": {
                "typeKind": "builtin",
                "kind": "int"
            },
            "initializer": {
                "expressionKind": "constantFetch",
                "constant": {
                    "definitionMetadata": {
                        "extensionMembership": "core",
                        "bookId": "book.strings"
                    },
                    "definitionKind": "constant",
                    "namespace": "",
                    "referenceId": "constant.str-pad-right",
                    "name": "STR_PAD_RIGHT",
                    "fullyQualifiedName": "\\STR_PAD_RIGHT"
                }
            },
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

## API

> [!WARNING]
> This project and its API are a work in progress. The API is currently **NOT stable** and may change at any time without notice.
> Do not rely on it in production environments.

### Type Hierarchy

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

## Todo

- Formalize JSON format.
- Formalize PHP api.
- Add the ability to create the same object structure from the json file:
For example: `$manualFromXml = new PHPManual("manual.xml"); $manualFromJson = new PHPManual("manual.json")`
