<?php

namespace AnioSoftware\X2J\PHP;

function visitNamespace(
	PHPNamespace $ns,
	callable $cb,
	int $flags = PHPNamespaceVisitFlags::VisitAll
): void {
	static $map = [
		PHPDefinitionKind::kClass->value         => PHPNamespaceVisitFlags::VisitClasses,
		PHPDefinitionKind::kInterface->value     => PHPNamespaceVisitFlags::VisitInterfaces,
		PHPDefinitionKind::kEnum->value          => PHPNamespaceVisitFlags::VisitEnums,
		PHPDefinitionKind::kConstant->value      => PHPNamespaceVisitFlags::VisitConstants,
		PHPDefinitionKind::kFunction->value      => PHPNamespaceVisitFlags::VisitFunctions,
		PHPDefinitionKind::kFunctionAlias->value => PHPNamespaceVisitFlags::VisitFunctionAliases
	];

	$cb = \Closure::fromCallable($cb);

	foreach ($map as $kind => $flag) {
		if (($flags & $flag) === 0) continue;

		$kind = PHPDefinitionKind::from($kind);

		foreach ($ns->getDefinitions($kind) as $definition) {
			$cb($definition);
		}
	}

	if (($flags & PHPNamespaceVisitFlags::VisitNamespaces) !== 0) {
		$cb($ns);

		foreach ($ns->getNamespaces() as $nested) {
			visitNamespace($nested, $cb, $flags);
		}
	}
}
