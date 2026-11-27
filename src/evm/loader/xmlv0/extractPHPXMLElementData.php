<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

function extractPHPXMLElementData(
	LoaderInstance $loaderInstance,
	PHPDefinitionXMLMapping $mapping,
	\DOMElement $element,
	string $referenceId
): ?PHPXMLElementData {
	$kind                = NULL;
	$synopsis            = NULL;
	$packageSynopsis     = NULL;
	$packageName         = NULL;
	$bookId              = NULL;
	$extensionMembership = NULL;

	if ($mapping->synopsisTagName) {
		$synopsis = EVM\XML\selectFirstMatchingDescendant(
			$element,
			$loaderInstance->elementSelectorFactory($mapping->synopsisTagName)
		);

		if ($synopsis === NULL) {
			return NULL;
		}

		$firstElement = $synopsis->firstElementChild;

		if ($firstElement === NULL) {
			return NULL;
		}

		$localName = $firstElement->localName;

		if ($localName === "ooclass" || $localName === "ooexception") {
			$kind = EVM\PHP\PHPDefinitionKind::kClass;
		} else if ($localName === "oointerface") {
			$kind = EVM\PHP\PHPDefinitionKind::kInterface;
		} else if ($localName === "enumname") {
			$kind = EVM\PHP\PHPDefinitionKind::kEnum;
		} else if ($mapping->synopsisTagName === "methodsynopsis") {
			$kind = EVM\PHP\PHPDefinitionKind::kFunction;
		}

		//
		// this is way faster than trying to select <packagesynopsis>
		// with EVM\XML\selectFirstMatchingDescendant() !
		//
		$packageSynopsis = findParentElement($loaderInstance, $synopsis, "packagesynopsis");

		if ($packageSynopsis) {
			$packageNameElement = EVM\XML\selectFirstMatchingChild(
				$packageSynopsis, $loaderInstance->elementSelectorFactory("package")
			);

			if ($packageNameElement) {
				$packageName = \trim($packageNameElement->textContent);
			}
		}
	} else if (\str_starts_with($referenceId, "constant.")) {
		$kind = EVM\PHP\PHPDefinitionKind::kConstant;
	} else if (\str_starts_with($referenceId, "function.")) {
		$kind = EVM\PHP\PHPDefinitionKind::kFunctionAlias;
	}

	if ($kind === NULL) {
		return NULL;
	}

	$name = extractQualifiedName($loaderInstance, $kind, $element, $synopsis);

	if ($name === NULL) {
		return NULL;
	}

	if ($packageName !== NULL) {
		$name = "$packageName\\$name";
	}

	$book = findParentElement($loaderInstance, $element, "book");

	if ($book !== NULL) {
		$bookId = $loaderInstance->getReferenceIdAttribute($book);
	}

	$phpDoc = findPHPDocInstruction($element);

	if ($phpDoc !== NULL) {
		$membershipAttr = getPHPDocAttribute($phpDoc, "extension-membership");

		if ($membershipAttr !== NULL) {
			$extensionMembership = EVM\PHP\PHPExtensionMembership::tryFrom($membershipAttr);
		}
	}

	$domData = new PHPXMLElementDOMData(
		synopsis        : $synopsis,
		packageSynopsis : $packageSynopsis,
		book            : $book,
		phpDoc          : $phpDoc
	);

	return new PHPXMLElementData(
		kind                : $kind,
		name                : $loaderInstance->phpManual->parseQualifiedName($name),
		root                : $element,
		referenceId         : $referenceId,
		bookId              : $bookId,
		packageName         : $packageName,
		extensionMembership : $extensionMembership ?? EVM\PHP\PHPExtensionMembership::kUnspecified,
		dom                 : $domData
	);
}
