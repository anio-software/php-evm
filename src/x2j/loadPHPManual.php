<?php

namespace AnioSoftware\X2J;

function loadPHPManual(X2JContext $ctx): int|float {
	$start = \hrtime(true);

	loadPHPClassLikes($ctx);
	loadPHPConstants($ctx);
	loadPHPFunctions($ctx);

	return (\hrtime(true) - $start) / 1E6;
}
