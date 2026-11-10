<?php

namespace AnioSoftware\EVM\PHP;

function jsonSerializeEnumObject(object $enum): string {
	return $enum->name;
}
