<?php

require_once __DIR__."/src/evm/index.php";

function getDescendants(string $baseClass): array {
	$descendants = [];

	foreach (\get_declared_classes() as $class) {
		$reflection = new \ReflectionClass($class);
		$parent     = $reflection->getParentClass();

		if ($parent !== false && $parent->getName() === $baseClass) {
			$descendants[$class] = getDescendants($class);
		}
	}

	return $descendants;
}

function printTree(array $tree, array $stack = []) {
	$depth   = \count($stack);
	$classes = \array_keys($tree);
	$pad     = "    ";

	for ($i = 0; $i < \count($classes); ++$i) {
		$class = $classes[$i];
		$isLastEntry = ($i + 1) >= \count($classes);

		for ($j = 0; $j < $depth; ++$j) {
			echo (!$stack[$j] ? "│" : " ").$pad;
		}

		echo $isLastEntry ? "└──" : "├──";
		echo \substr($class, \strlen("AnioSoftware\\EVM\\PHP\\"));
		echo "\n";

		printTree($tree[$class], [...$stack, $isLastEntry]);
	}
}

printTree(
	getDescendants("AnioSoftware\\EVM\PHP\\PHPStructuredObject")
);
