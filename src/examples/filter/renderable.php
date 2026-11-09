<?php

namespace AnioSoftware\EVM;

return function(PHP\PHPFunction $fn): bool {
	if ($fn->metadata->extensionMembership === PHP\PHPExtensionMembership::kPECL) {
		return false;
	}

	return PHP\getRenderability($fn) === PHP\Renderability::kRenderable;
};
