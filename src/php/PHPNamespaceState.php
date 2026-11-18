<?php

namespace AnioSoftware\EVM\PHP;

final class PHPNamespaceState {
	public array $definitions       = [];
	public array $definitionsByKind = [];
	public array $namespaces        = [];
}
