<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

function mapStringToPHPType(
	LoaderInstance $loaderInstance,
	string $typeString
): EVM\PHP\PHPType {
	foreach (EVM\PHP\PHPBuiltinTypeKind::cases() as $case) {
		if (\strtolower($case->value) === \strtolower($typeString)) {
			return $case->toType();
		}
	}

	$definitions = $loaderInstance->getOrBuildIndex()->getDefinitions();
	$fullyQualifiedName = \str_starts_with($typeString, "\\") ? $typeString : "\\$typeString";

	if (\array_key_exists($fullyQualifiedName, $definitions["enum"]) ||
	    \array_key_exists($fullyQualifiedName, $definitions["interface"]) ||
	    \array_key_exists($fullyQualifiedName, $definitions["class"])) {
		$qualifier = $loaderInstance->phpManual->parseQualifiedName($fullyQualifiedName);
		$namespace = $loaderInstance->phpManual->getOrCreateNamespace($qualifier->namespace);

		return new EVM\PHP\PHPNamedType($namespace, $qualifier->localName);
	}

	return EVM\PHP\PHPUnknownType::instance();
}
