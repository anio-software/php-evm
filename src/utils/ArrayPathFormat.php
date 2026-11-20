<?php

namespace AnioSoftware\EVM\Utils;

enum ArrayPathFormat: string {
	case kParentheses    = "()";
	case kCurlyBrackets  = "{}";
	case kSquareBrackets = "[]";
}
