<?php

namespace AnioSoftware\EVM\PHP;

enum Renderability: string {
	case kRenderable                              = "renderable";

	case kFunctionUnknownReturnType               = "function_unknown_return_type";

	case kFunctionVariadicParameterMismatch       = "function_variadic_parameter_mismatch";
	case kFunctionRequiredParameterAfterOptional  = "function_required_parameter_after_optional";
	case kFunctionUnknownParameterType            = "function_unknown_parameter_type";
	case kFunctionUnsupportedParameterInitializer = "function_unsupported_parameter_initializer";
	case kFunctionIniGetParameterInitializer      = "function_ini_get_parameter_initializer";

	case kFunctionHaltCompiler                    = "function_halt_compiler";
}
