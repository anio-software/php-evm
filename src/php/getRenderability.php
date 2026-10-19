<?php

namespace AnioSoftware\X2J\PHP;

function getRenderability(PHPReference $ref): Renderability {
	if ($ref instanceof PHPFunction) {
		return getFunctionRenderability($ref);
	}

	throw new \RuntimeException("Unable to determine renderability.");
}
