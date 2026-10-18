<?php

namespace AnioSoftware\X2J;

function mapTypeStringInt(X2JContext $ctx, string $typeName): PHP\PHPType {
	foreach (PHP\PHPBuiltinType::cases() as $case) {
		if (\strtolower($case->value) === \strtolower($typeName)) {
			return $case;
		}
	}

	$manual = $ctx->manual;

	if (\array_key_exists($typeName, $manual->getClasses())) {
		return new PHP\PHPNamedType($typeName);
	}

	if (\array_key_exists($typeName, $manual->getInterfaces())) {
		return new PHP\PHPNamedType($typeName);
	}

	if (\array_key_exists($typeName, $manual->getEnums())) {
		return new PHP\PHPNamedType($typeName);
	}

	$ctx->diagnosticsFor(
		X2JDiagnosticMessageOrigin::Unspecified
	)->addWarning("don't know how to map string '$typeName' to a type.");

	return new PHP\PHPUnknownType;
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
