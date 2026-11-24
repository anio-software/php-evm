<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

final class LoaderInstance extends EVM\EVMLoaderInstance {
	readonly public EVM\PHP\PHPNamespace $phpGlobalNamespace;
	readonly public EVM\PHP\PHPManual $phpManual;

	public function __construct(
		readonly protected Loader $loader,
		EVM\EVMOptions $options
	) {
		parent::__construct($options);

		$globalNamespace = $options->globalNamespace ?? new EVM\PHP\PHPNamespace("", NULL);
		$this->phpGlobalNamespace = $globalNamespace;

		$this->phpManual = new EVM\PHP\PHPManual($this->phpGlobalNamespace);
	}

	public function load(): EVM\EVMLoadResult {
		$enums           = loadDefinitions(EVM\PHP\PHPDefinitionKind::kEnum, $this);
		$interfaces      = loadDefinitions(EVM\PHP\PHPDefinitionKind::kInterface, $this);
		$classes         = loadDefinitions(EVM\PHP\PHPDefinitionKind::kClass, $this);
		$constants       = loadDefinitions(EVM\PHP\PHPDefinitionKind::kConstant, $this);
		$functions       = loadDefinitions(EVM\PHP\PHPDefinitionKind::kFunction, $this);
		$functionAliases = loadDefinitions(EVM\PHP\PHPDefinitionKind::kFunctionAlias, $this);
		$total = $enums + $interfaces + $classes + $constants + $functions + $functionAliases;

		$timing = new EVM\EVMTimingStatistics(
			enums           : $enums,
			interfaces      : $interfaces,
			classes         : $classes,
			constants       : $constants,
			functions       : $functions,
			functionAliases : $functionAliases,
			total           : $total
		);

		$statistics = new EVM\EVMStatistics(
			timing                 : $timing,
			nLoadedNamespaces      : 0, // tbd
			nLoadedEnums           : 0, // tbd
			nLoadedInterfaces      : 0, // tbd
			nLoadedClasses         : 0, // tbd
			nLoadedConstants       : 0, // tbd
			nLoadedFunctions       : 0, // tbd
			nLoadedFunctionAliases : 0  // tbd
		);

		return new EVM\EVMLoadResult($statistics, $this->phpManual);
	}
}
