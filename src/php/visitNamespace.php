<?php

namespace AnioSoftware\X2J\PHP;

function visitNamespace(
	PHPNamespace $ns,
	callable $cb,
	int $flags = PHPNamespaceVisitFlags::VisitAll
): void {
	$cb = \Closure::fromCallable($cb);

	$visitClasses         = ($flags & PHPNamespaceVisitFlags::VisitClasses) !== 0;
	$visitInterfaces      = ($flags & PHPNamespaceVisitFlags::VisitInterfaces) !== 0;
	$visitEnums           = ($flags & PHPNamespaceVisitFlags::VisitEnums) !== 0;
	$visitConstants       = ($flags & PHPNamespaceVisitFlags::VisitConstants) !== 0;
	$visitFunctions       = ($flags & PHPNamespaceVisitFlags::VisitFunctions) !== 0;
	$visitFunctionAliases = ($flags & PHPNamespaceVisitFlags::VisitFunctionAliases) !== 0;
	$visitNamespaces      = ($flags & PHPNamespaceVisitFlags::VisitNamespaces) !== 0;

	if ($visitClasses) {
		foreach ($ns->getClasses() as $class) {
			$cb($class);
		}
	}

	if ($visitInterfaces) {
		foreach ($ns->getInterfaces() as $iface) {
			$cb($iface);
		}
	}

	if ($visitEnums) {
		foreach ($ns->getEnums() as $enum) {
			$cb($enum);
		}
	}

	if ($visitConstants) {
		foreach ($ns->getConstants() as $const) {
			$cb($const);
		}
	}

	if ($visitFunctions) {
		foreach ($ns->getFunctions() as $fn) {
			$cb($fn);
		}
	}

	if ($visitFunctionAliases) {
		foreach ($ns->getFunctionAliases() as $fn) {
			$cb($fn);
		}
	}

	if ($visitNamespaces) {
		foreach ($ns->getNamespaces() as $nested) {
			visitNamespace($nested, $cb, $flags);
		}
	}
}
