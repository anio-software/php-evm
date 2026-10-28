<?php

namespace AnioSoftware\EVM;

function loadPHPManual(EVMContext $ctx): int|float {
	$start = \hrtime(true);

	loadPHPClassLikes($ctx);
	loadPHPConstants($ctx);
	loadPHPFunctions($ctx);

	return (\hrtime(true) - $start) / 1E6;
}
