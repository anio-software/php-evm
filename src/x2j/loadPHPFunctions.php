<?php

namespace AnioSoftware\X2J;

function getFunctionParameterInt(
	X2JDiagnostics $diagnostics,
	string $refId,
	\DOMElement $methodparam,
	\DOMElement $parameter,
	bool &$isVariadic
): PHP\PHPFunctionParameter {
	$parameterName = \trim($parameter->textContent);
	$isReference   = $parameter->attributes->getNamedItem("role")?->value === "reference";
	$isOptional    = $methodparam->attributes->getNamedItem("choice")?->value === "opt";
	$isVariadic    = $methodparam->attributes->getNamedItem("rep")?->value === "repeat";
	$initializer   = NULL;

	if ($isOptional) {
		$el = XML\selectFirstMatchingChild(
			$methodparam,
			PHP\PHPManual::tagSelectorFactory("initializer")
		);

		if ($el) {
			$initializer = \trim($el->textContent);
		}
	}

	if ($isOptional && $initializer === NULL) {
		$diagnostics->addWarning("isOptional and initializer is NULL for $refId");

		$initializer = "?";
	}

	return PHP\PHPFunctionParameter::create(
		$parameterName,
		createPHPTypeFromDOMElement(
			XML\selectFirstMatchingChild(
				$methodparam,
				PHP\PHPManual::tagSelectorFactory("type")
			)
		),
		$isReference,
		$initializer
	);
}

function getFunctionParametersInt(
	X2JDiagnostics $diagnostics,
	string $refId,
	\DOMElement $methodsynopsis,
	bool &$isVariadic
) {
	$methodparams = XML\select(
		$methodsynopsis,
		PHP\PHPManual::tagSelectorFactory("methodparam"),
		0
	);

	$ret = [];
	$isVariadic = false;

	foreach ($methodparams as $methodparam) {
		$parameter = XML\selectFirstMatchingChild(
			$methodparam,
			PHP\PHPManual::tagSelectorFactory("parameter")
		);

		if (!$parameter) {
			$diagnostics->addWarning("no <parameter> for $refId");

			continue;
		}

		$isVariadicParameter = false;

		$ret[] = getFunctionParameterInt(
			$diagnostics,
			$refId,
			$methodparam,
			$parameter,
			$isVariadicParameter
		);

		if ($isVariadicParameter) {
			$isVariadic = true;
		}
	}

	return $ret;
}

function getFunctionInt(
	X2JDiagnostics $diagnostics,
	string $refId,
	string $functionName,
	\DOMElement $methodsynopsis
): PHP\PHPFunction {
	$isVariadic = false;
	$returnType = createPHPTypeFromDOMElement(
		XML\selectFirstMatchingChild(
			$methodsynopsis, PHP\PHPManual::tagSelectorFactory("type")
		)
	);
	$func   = PHP\PHPFunction::create($refId, $functionName, $returnType);
	$params = getFunctionParametersInt($diagnostics, $refId, $methodsynopsis, $isVariadic);

	foreach ($params as $param) {
		$func = $func->withFunctionParameter($param);
	}

	return $isVariadic ? $func->withVariadic(true) : $func;
}

function loadPHPFunctions(X2JContext $ctx): void {
	$diagnostics = $ctx->diagnosticsFor(X2JDiagnosticMessageOrigin::loadPHPFunctions);

	$refentries = XML\select(
		$ctx->doc->documentElement,
		new XML\AndSelector(
			PHP\PHPManual::tagSelectorFactory("refentry"),
			PHP\PHPManual::refIdSelectorFactory()
		)
	);

	foreach ($refentries as $refentry) {
		$refId = PHP\PHPManual::getRefIdAttribute($refentry);

		if (!\str_starts_with($refId, "function.")) {
			continue;
		}

		$refname = XML\selectFirstMatchingDescendant(
			$refentry,
			PHP\PHPManual::tagSelectorFactory("refname")
		);

		if (!$refname) {
			$diagnostics->addWarning("refname is null for $refId");

			continue;
		}

		$functionName = \trim($refname->textContent);

		$refpurpose = XMl\selectFirstMatchingDescendant(
			$refentry,
			PHP\PHPManual::tagSelectorFactory("refpurpose")
		);

		if (!$refpurpose) {
			$diagnostics->addWarning("refpurpose is null");

			continue;
		}

		if (\str_starts_with(\strtolower(\trim($refpurpose->textContent)), "alias of")) {
			$el = XML\selectFirstMatchingChild(
				$refpurpose,
				new XML\OrSelector(
					PHP\PHPManual::tagSelectorFactory("function"),
					PHP\PHPManual::tagSelectorFactory("methodname")
				)
			);

			if (!$el) {
				$diagnostics->addWarning("no <function> or <methodname> tag for $refId");

				continue;
			}

			$ctx->manual->addFunctionAlias(
				PHP\PHPFunctionAlias::create(
					$refId,
					$functionName,
					\trim($el->textContent)
				)
			);

			continue;
		}

		$methodsynopsis = XML\selectFirstMatchingDescendant(
			$refentry, PHP\PHPManual::tagSelectorFactory("methodsynopsis")
		);

		if (!$methodsynopsis) {
			$diagnostics->addWarning("methodsynopsis is null for $refId.");

			continue;
		}

		$ctx->manual->addFunction(
			getFunctionInt($diagnostics, $refId, $functionName, $methodsynopsis)
		);
	}
}
