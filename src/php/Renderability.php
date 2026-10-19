<?php

namespace AnioSoftware\X2J\PHP;

enum Renderability: string {
	case Renderable                              = "renderable";

	case FunctionUnknownReturnType               = "function_unknown_return_type";

	case FunctionVariadicParameterMismatch       = "function_variadic_parameter_mismatch";
	case FunctionRequiredParameterAfterOptional  = "function_required_parameter_after_optional";
	case FunctionUnknownParameterType            = "function_unknown_parameter_type";
	case FunctionUnsupportedParameterInitializer = "function_unsupported_parameter_initializer";
	case FunctionIniGetParameterInitializer      = "function_ini_get_parameter_initializer";

	case FunctionHaltCompiler                    = "function_halt_compiler";
	case FunctionNamespacedFunction              = "function_namespaced_function";
}
