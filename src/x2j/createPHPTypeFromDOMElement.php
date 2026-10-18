<?php

namespace AnioSoftware\X2J;

function createPHPTypeFromDOMElement(\DOMElement $element): PHP\PHPType {
	return PHP\PHPBuiltinType::Void;
}
