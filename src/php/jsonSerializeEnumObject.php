<?php

namespace AnioSoftware\EVM\PHP;

function jsonSerializeEnumObject(\UnitEnum $enum): string {
	return $enum->name;
}
