<?php

namespace AnioSoftware\EVM\PHP;

enum ArrayPathFormat: string {
	case kParentheses    = "()";
	case kCurlyBrackets  = "{}";
	case kSquareBrackets = "[]";
}
