<?php

namespace AnioSoftware\X2J\PHP;

abstract class PHPNamespaceVisitFlags {
	public const VisitNamespaces      = (1 << 0);
	public const VisitClasses         = (1 << 1);
	public const VisitInterfaces      = (1 << 2);
	public const VisitEnums           = (1 << 3);
	public const VisitConstants       = (1 << 4);
	public const VisitFunctions       = (1 << 5);
	public const VisitFunctionAliases = (1 << 6);

	public const VisitAll = self::VisitNamespaces
	                      | self::VisitClasses
	                      | self::VisitInterfaces
	                      | self::VisitEnums
	                      | self::VisitConstants
	                      | self::VisitFunctions
	                      | self::VisitFunctionAliases;
}
