<?php

namespace AnioSoftware\EVM;

enum EVMDiagnosticMessageOrigin {
	case kLoadPHPClassLikes;
	case kLoadPHPConstants;
	case kLoadPHPFunctions;
	case kUnspecified;
}
