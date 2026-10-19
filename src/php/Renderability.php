<?php

namespace AnioSoftware\X2J\PHP;

enum Renderability: string {
	case Renderable                      = "renderable";

	case UnknownReturnType               = "unknown_return_type";

	case VariadicParameterMismatch       = "variadic_parameter_mismatch";
	case RequiredParameterAfterOptional  = "required_parameter_after_optional";
	case UnknownParameterType            = "unknown_parameter_type";
	case UnsupportedParameterInitializer = "unsupported_parameter_initializer";
	case IniGetParameterInitializer      = "ini_get_parameter_initializer";

	case HaltCompiler                    = "halt_compiler";
	case NamespacedFunction              = "namespaced_function";
}
