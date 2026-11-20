<?php

namespace AnioSoftware\EVM\PHP\Bits;

function jsonSerializeEnumObject(\UnitEnum $enum): string {
	return $enum->name;
}
