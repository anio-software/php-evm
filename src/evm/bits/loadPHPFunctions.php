<?php

namespace AnioSoftware\EVM\Bits;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\XML as XML;
use AnioSoftware\EVM\PHP as PHP;

function createFunctionParameterInt(
	EVM\EVMDiagnostics $diagnostics,
	EVM\EVMContext $ctx,
	string $refId,
	\DOMElement $methodparam,
	\DOMElement $parameter
): PHP\PHPFunctionParameter {
	$parameterName = \trim($parameter->textContent);
	$isReference   = $parameter->attributes->getNamedItem("role")?->value === "reference";
	$isOptional    = $methodparam->attributes->getNamedItem("choice")?->value === "opt";
	$isVariadic    = $methodparam->attributes->getNamedItem("rep")?->value === "repeat";
	$initializer   = NULL;
	$parameterType = createPHPTypeFromDOMElement(
		$ctx,
		XML\selectFirstMatchingChild(
			$methodparam,
			$ctx->manual->elementSelectorFactory("type")
		)
	);

	if ($isOptional) {
		$el = XML\selectFirstMatchingChild(
			$methodparam,
			$ctx->manual->elementSelectorFactory("initializer")
		);

		if ($el) {
			$initializer = parsePHPFunctionParameterInitializer(
				$ctx->getPHPManualIndex(),
				$parameterType,
				$el->textContent
			);
		}
	}

	if ($isOptional && $initializer === NULL) {
		$diagnostics->addWarning("isOptional and initializer is NULL for $refId");

		$initializer = PHP\PHPPlaceholderExpression::instance();
	}

	return PHP\PHPFunctionParameter::create(
		$parameterName,
		$parameterType,
		$isReference,
		$initializer,
		$isVariadic
	);
}

function createFunctionParametersInt(
	EVM\EVMDiagnostics $diagnostics,
	EVM\EVMContext $ctx,
	string $refId,
	\DOMElement $methodsynopsis
): array {
	$methodparams = XML\select(
		$methodsynopsis,
		$ctx->manual->elementSelectorFactory("methodparam"),
		0
	);

	$ret = [];

	foreach ($methodparams as $methodparam) {
		$parameter = XML\selectFirstMatchingChild(
			$methodparam,
			$ctx->manual->elementSelectorFactory("parameter")
		);

		if (!$parameter) {
			$diagnostics->addWarning("no <parameter> for $refId");

			continue;
		}

		$ret[] = createFunctionParameterInt(
			$diagnostics,
			$ctx,
			$refId,
			$methodparam,
			$parameter
		);
	}

	return $ret;
}

function createFunctionInt(
	PHP\PHPDefinitionMetadata $metadata,
	EVM\EVMDiagnostics $diagnostics,
	EVM\EVMContext $ctx,
	PHP\PHPNamespace $ns,
	string $refId,
	string $functionName,
	\DOMElement $methodsynopsis
): PHP\PHPFunction {
	$returnType = createPHPTypeFromDOMElement(
		$ctx,
		XML\selectFirstMatchingChild(
			$methodsynopsis, $ctx->manual->elementSelectorFactory("type")
		)
	);
	$func   = PHP\PHPFunction::create($metadata, $ns, $refId, $functionName, $returnType);
	$params = createFunctionParametersInt($diagnostics, $ctx, $refId, $methodsynopsis);

	$isVariadic = false;
	foreach ($params as $param) {
		$func = $func->withFunctionParameter($param);

		if ($param->isVariadic()) $isVariadic = true;
	}

	return $isVariadic ? $func->withFlags(
		PHP\PHPFunction::FLAG_VARIADIC
	) : $func;
}

function loadPHPFunctions(EVM\EVMContext $ctx): void {
	$diagnostics = $ctx->diagnosticsFor(EVM\EVMDiagnosticMessageOrigin::kLoadPHPFunctions);
	$refentries = $ctx->manual->getElementsWithReferenceIdAttribute(
		$ctx->doc, "refentry"
	);

	$orSelector = new XML\OrSelector(
		$ctx->manual->elementSelectorFactory("function"),
		$ctx->manual->elementSelectorFactory("methodname")
	);

	foreach ($refentries as $refentry) {
		$refId = $ctx->manual->getRefIdAttribute($refentry);

		if (!\str_starts_with($refId, "function.")) {
			continue;
		}

		$refname = XML\selectFirstMatchingDescendant(
			$refentry,
			$ctx->manual->elementSelectorFactory("refname")
		);

		if (!$refname) {
			$diagnostics->addWarning("refname is null for $refId");

			continue;
		}

		$functionName = \trim($refname->textContent);
		$qualifier    = $ctx->manual->parseQualifiedName($functionName);
		$ns = $ctx->manual->getOrCreateNamespace($qualifier["namespace"]);
		$metadata = createPHPDefinitionMetadataFromDOMElement($ctx, $refentry);

		$refpurpose = XML\selectFirstMatchingDescendant(
			$refentry,
			$ctx->manual->elementSelectorFactory("refpurpose")
		);

		if (!$refpurpose) {
			$diagnostics->addWarning("refpurpose is null");

			continue;
		}

		if (\str_starts_with(\strtolower(\trim($refpurpose->textContent)), "alias of")) {
			$el = XML\selectFirstMatchingChild($refpurpose, $orSelector);

			if (!$el) {
				$diagnostics->addWarning("no <function> or <methodname> tag for $refId");

				continue;
			}

			$ns->addDefinition(
				PHP\PHPFunctionAlias::create(
					$metadata,
					$ns,
					$refId,
					$qualifier["localName"],
					\trim($el->textContent)
				)
			);

			continue;
		}

		$methodsynopsis = XML\selectFirstMatchingDescendant(
			$refentry, $ctx->manual->elementSelectorFactory("methodsynopsis")
		);

		if (!$methodsynopsis) {
			$diagnostics->addWarning("methodsynopsis is null for $refId.");

			continue;
		}

		$inst = createFunctionInt(
			$metadata,
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
