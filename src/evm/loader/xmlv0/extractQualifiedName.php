<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

function extractQualifiedName(
	LoaderInstance $loaderInstance,
	EVM\PHP\PHPDefinitionKind $kind,
	\DOMElement $root,
	?\DOMElement $synopsis
): ?string {
	if ($kind === EVM\PHP\PHPDefinitionKind::kConstant ||
	    $kind === EVM\PHP\PHPDefinitionKind::kFunction ||
	    $kind === EVM\PHP\PHPDefinitionKind::kFunctionAlias) {
		$selector = $loaderInstance->pathSelectorFactory(
			$root,
			$kind === EVM\PHP\PHPDefinitionKind::kConstant
			        ? "term/constant"
			        : "refnamediv/refname"
		);

		$element = EVM\XML\selectFirstMatchingDescendant($root, $selector);

		return $element ? \trim($element->textContent) : NULL;
	}
	else if ($kind === EVM\PHP\PHPDefinitionKind::kEnum      ||
	         $kind === EVM\PHP\PHPDefinitionKind::kInterface ||
	         $kind === EVM\PHP\PHPDefinitionKind::kClass) {
		static $map = [
			"enumname"    => "enumname",
			"oointerface" => "interfacename",
			"ooexception" => "exceptionname",
			"ooclass"     => "classname"
		];

		if (!$synopsis) {
			return NULL;
		}

		$firstElement = $synopsis->firstElementChild;

		if (!$firstElement) {
			return NULL;
		} else if (!\array_key_exists($firstElement->localName, $map)) {
			return NULL;
		}

		if ($kind === EVM\PHP\PHPDefinitionKind::kEnum) {
			return \trim($firstElement->textContent);
		}

		$element = EVM\XML\selectFirstMatchingChild(
			$firstElement, $loaderInstance->elementSelectorFactory($map[$firstElement->localName])
		);

		return $element ? \trim($element->textContent) : NULL;
	}

	return NULL;
}
