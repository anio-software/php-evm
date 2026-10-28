<?php

namespace AnioSoftware\EVM;

function getFunctionParameterInt(
	EVMDiagnostics $diagnostics,
	EVMContext $ctx,
	string $refId,
	\DOMElement $methodparam,
	\DOMElement $parameter
): PHP\PHPFunctionParameter {
	$parameterName = \trim($parameter->textContent);
	$isReference   = $parameter->attributes->getNamedItem("role")?->value === "reference";
	$isOptional    = $methodparam->attributes->getNamedItem("choice")?->value === "opt";
	$isVariadic    = $methodparam->attributes->getNamedItem("rep")?->value === "repeat";
	$initializer   = NULL;

	if ($isOptional) {
		$el = XML\selectFirstMatchingChild(
			$methodparam,
			$ctx->manual->tagSelectorFactory("initializer")
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
			$ctx,
			XML\selectFirstMatchingChild(
				$methodparam,
				$ctx->manual->tagSelectorFactory("type")
			)
		),
		$isReference,
		$initializer,
		$isVariadic
	);
}

function getFunctionParametersInt(
	EVMDiagnostics $diagnostics,
	EVMContext $ctx,
	string $refId,
	\DOMElement $methodsynopsis
) {
	$methodparams = XML\select(
		$methodsynopsis,
		$ctx->manual->tagSelectorFactory("methodparam"),
		0
	);

	$ret = [];

	foreach ($methodparams as $methodparam) {
		$parameter = XML\selectFirstMatchingChild(
			$methodparam,
			$ctx->manual->tagSelectorFactory("parameter")
		);

		if (!$parameter) {
			$diagnostics->addWarning("no <parameter> for $refId");

			continue;
		}

		$ret[] = getFunctionParameterInt(
			$diagnostics,
			$ctx,
			$refId,
			$methodparam,
			$parameter
		);
	}

	return $ret;
}

function getFunctionInt(
	EVMDiagnostics $diagnostics,
	EVMContext $ctx,
	PHP\PHPNamespace $ns,
	string $refId,
	string $functionName,
	\DOMElement $methodsynopsis
): PHP\PHPFunction {
	$returnType = createPHPTypeFromDOMElement(
		$ctx,
		XML\selectFirstMatchingChild(
			$methodsynopsis, $ctx->manual->tagSelectorFactory("type")
		)
	);
	$func   = PHP\PHPFunction::create($ns, $refId, $functionName, $returnType);
	$params = getFunctionParametersInt($diagnostics, $ctx, $refId, $methodsynopsis);

	$isVariadic = false;
	foreach ($params as $param) {
		$func = $func->withFunctionParameter($param);

		if ($param->isVariadic()) $isVariadic = true;
	}

	return $isVariadic ? $func->withFlags(
		PHP\PHPFunction::FLAG_VARIADIC
	) : $func;
}

function loadPHPFunctions(EVMContext $ctx): void {
	$diagnostics = $ctx->diagnosticsFor(X2JDiagnosticMessageOrigin::kLoadPHPFunctions);
	$refentries = $ctx->manual->getElementsWithReferenceIdAttribute(
		$ctx->doc, "refentry"
	);

	foreach ($refentries as $refentry) {
		$refId = $ctx->manual->getRefIdAttribute($refentry);

		if (!\str_starts_with($refId, "function.")) {
			continue;
		}

		$refname = XML\selectFirstMatchingDescendant(
			$refentry,
			$ctx->manual->tagSelectorFactory("refname")
		);

		if (!$refname) {
			$diagnostics->addWarning("refname is null for $refId");

			continue;
		}

		$functionName = \trim($refname->textContent);
		$qualifier    = $ctx->manual->parseQualifiedName($functionName);
		$ns = $ctx->manual->getOrCreateNamespace($qualifier["namespace"]);

		$refpurpose = XML\selectFirstMatchingDescendant(
			$refentry,
			$ctx->manual->tagSelectorFactory("refpurpose")
		);

		if (!$refpurpose) {
			$diagnostics->addWarning("refpurpose is null");

			continue;
		}

		if (\str_starts_with(\strtolower(\trim($refpurpose->textContent)), "alias of")) {
			$el = XML\selectFirstMatchingChild(
				$refpurpose,
				new XML\OrSelector(
					$ctx->manual->tagSelectorFactory("function"),
					$ctx->manual->tagSelectorFactory("methodname")
				)
			);

			if (!$el) {
				$diagnostics->addWarning("no <function> or <methodname> tag for $refId");

				continue;
			}

			$ns->addDefinition(
				PHP\PHPFunctionAlias::create(
					$ns,
					$refId,
					$qualifier["localName"],
					\trim($el->textContent)
				)
			);

			continue;
		}

		$methodsynopsis = XML\selectFirstMatchingDescendant(
			$refentry, $ctx->manual->tagSelectorFactory("methodsynopsis")
		);

		if (!$methodsynopsis) {
			$diagnostics->addWarning("methodsynopsis is null for $refId.");

			continue;
		}

		$inst = getFunctionInt(
			$diagnostics,
			$ctx,
			$ns,
			$refId,
			$qualifier["localName"],
			$methodsynopsis
		);

		$ns->addDefinition($inst);
	}
}
