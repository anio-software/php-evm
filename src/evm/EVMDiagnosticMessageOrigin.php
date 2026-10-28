<?php

namespace AnioSoftware\EVM;

enum X2JDiagnosticMessageOrigin {
	case kLoadPHPClassLikes;
	case kLoadPHPConstants;
	case kLoadPHPFunctions;
	case kUnspecified;
}
