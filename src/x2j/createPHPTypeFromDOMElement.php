<?php

namespace AnioSoftware\X2J;

function createPHPTypeFromDOMElement(
	X2JContext $ctx,
	\DOMElement $element
): PHP\PHPType {
	return PHP\PHPBuiltinType::Void;
}
