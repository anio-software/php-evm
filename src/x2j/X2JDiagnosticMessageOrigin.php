<?php

namespace AnioSoftware\X2J;

enum X2JDiagnosticMessageOrigin {
	case loadPHPClassLikes;
	case loadPHPConstants;
	case loadPHPFunctions;
	case Unspecified;
}
