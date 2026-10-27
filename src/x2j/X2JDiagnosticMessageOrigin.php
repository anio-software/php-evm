<?php

namespace AnioSoftware\X2J;

enum X2JDiagnosticMessageOrigin {
	case LoadPHPClassLikes;
	case LoadPHPConstants;
	case LoadPHPFunctions;
	case Unspecified;
}
