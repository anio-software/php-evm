<?php

namespace AnioSoftware\EVM;

function mapTypeStringInt(X2JContext $ctx, string $typeName): PHP\PHPType {
	foreach (PHP\PHPBuiltinTypeKind::cases() as $case) {
		if (\strtolower($case->value) === \strtolower($typeName)) {
			return $case->toType();
		}
	}

	$qualifier = $ctx->manual->parseQualifiedName($typeName);
	$typeName = $qualifier["localName"];
	$namespace = $ctx->manual->getOrCreateNamespace($qualifier["namespace"]);

	if (\array_key_exists($typeName, $namespace->getClasses())) {
		return new PHP\PHPNamedType($namespace, $typeName);
	}

	if (\array_key_exists($typeName, $namespace->getInterfaces())) {
		return new PHP\PHPNamedType($namespace, $typeName);
	}

	if (\array_key_exists($typeName, $namespace->getEnums())) {
		return new PHP\PHPNamedType($namespace, $typeName);
	}

	$ctx->diagnosticsFor(
		X2JDiagnosticMessageOrigin::kUnspecified
	)->addWarning("don't know how to map string '$typeName' to a type.");

	return PHP\PHPUnknownType::instance();
}

function createPHPTypeFromDOMElement(
	X2JContext $ctx,
	\DOMElement $element
): PHP\PHPType {
	if ($element->attributes->getNamedItem("class")?->value === "union") {
		$types = [];

		foreach ($element->childNodes as $child) {
			if (!($child instanceof \DOMElement)) continue;
			if ($child->localName !== "type") continue;

			$types[] = createPHPTypeFromDOMElement($ctx, $child);
		}

		return new PHP\PHPUnionType(...$types);
	}

	return mapTypeStringInt($ctx, \trim($element->textContent));
}
