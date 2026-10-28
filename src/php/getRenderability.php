<?php

namespace AnioSoftware\EVM\PHP;

function getRenderability(PHPReference $ref): Renderability {
	if ($ref instanceof PHPFunction) {
		return getFunctionRenderability($ref);
	}

	throw new \RuntimeException("Unable to determine renderability.");
}
