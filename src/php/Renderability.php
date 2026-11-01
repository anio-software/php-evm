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
	case kFunctionIsset                           = "function_isset"; // unused
	case kFunctionUnset                           = "function_unset"; // unused
	case kFunctionEcho                            = "function_echo"; // unused
	case kFunctionPrint                           = "function_print"; // unused
	case kFunctionEval                            = "function_eval"; // unused
	case kFunctionExit                            = "function_exit"; // unused
	case kFunctionDie                             = "function_die"; // unused
	case kFunctionEmpty                           = "function_empty"; // unused
	case kFunctionArray                           = "function_array"; // unused
	case kFunctionList                            = "function_list"; // unused
}
