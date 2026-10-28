<?php

namespace AnioSoftware\X2J;

enum X2JDiagnosticMessageOrigin {
	case kLoadPHPClassLikes;
	case kLoadPHPConstants;
	case kLoadPHPFunctions;
	case kUnspecified;
}
