<?php

namespace AnioSoftware\EVM\Bits;

use AnioSoftware\EVM as EVM;
use AnioSoftware\EVM\XML as XML;
use AnioSoftware\EVM\PHP as PHP;

function loadPHPClassLikes(
	EVM\EVMContext $evmContext
): void {
	$diagnostics = $evmContext->diagnosticsFor(EVM\EVMDiagnosticMessageOrigin::kLoadPHPClassLikes);
	$references = $evmContext->manual->getElementsWithReferenceIdAttribute(
		$evmContext->doc, "reference"
	);

	$orSelector = new XML\OrSelector(
		$evmContext->manual->elementSelectorFactory("classsynopsis"),
		$evmContext->manual->elementSelectorFactory("enumsynopsis"),
	);

	foreach ($references as $reference) {
		$referenceId = $evmContext->manual->getRefIdAttribute($reference);

		if (
			!\str_starts_with($referenceId, "class.") &&
			!\str_starts_with($referenceId, "enum.")
		) {
			continue;
		}

		$packagesynopsis = XML\selectFirstMatchingDescendant(
			$reference, $evmContext->manual->elementSelectorFactory("packagesynopsis")
		);

		$namespaceStr = "";

		if ($packagesynopsis) {
			$package = XML\selectFirstMatchingChild(
				$packagesynopsis, $evmContext->manual->elementSelectorFactory("package")
			);

			$namespaceStr = $package->textContent;
		}

		$synopsis = XML\selectFirstMatchingDescendant($reference, $orSelector);

		if (!$synopsis) {
			$diagnostics->addWarning("no classsynopsis or enumsynopsis for $referenceId");

			continue;
		}

		$firstElement = XML\selectFirstMatchingChild($synopsis, new XML\ElementSelector);

		if (!$firstElement) {
			$diagnostics->addWarning("no firstElement for $referenceId");

			continue;
		}

		static $map = [
			"ooclass"     => ["tag" => "classname"    , "class" => PHP\PHPClass::class],
			"ooexception" => ["tag" => "exceptionname", "class" => PHP\PHPClass::class],
			"oointerface" => ["tag" => "interfacename", "class" => PHP\PHPInterface::class],
			"enumname"    => ["tag" => "enumname"     , "class" => PHP\PHPEnum::class]
		];

		$kind = $firstElement->localName;

		if (!\array_key_exists($kind, $map)) {
			$diagnostics->addWarning("unmapped localName $kind for $referenceId");

			continue;
		}

		if ($kind === "enumname") {
			$name = \trim($firstElement->textContent);
		} else {
			$name = \trim(
				XML\selectFirstMatchingDescendant(
					$firstElement,
					$evmContext->manual->elementSelectorFactory($map[$kind]["tag"])
				)->textContent
			);
		}

		$class = $map[$kind]["class"];
		$name = \strlen($namespaceStr) ? "$namespaceStr\\$name" : $name;
		$qualifier = $evmContext->manual->parseQualifiedName($name);

		$factoryCtx = new Factory\EVMBitsFactoryContext(
			evmContext  : $evmContext,
			diagnostics : $diagnostics,
			metadata    : createPHPDefinitionMetadataFromDOMElement($evmContext, $reference),
			namespace   : $evmContext->manual->getOrCreateNamespace($qualifier["namespace"]),
			referenceId : $referenceId
		);

		$inst = match($class) {
			PHP\PHPClass::class => Factory\createClass(
				$factoryCtx, $qualifier["localName"]
			),

			PHP\PHPInterface::class => Factory\createInterface(
				$factoryCtx, $qualifier["localName"]
			),

			PHP\PHPEnum::class => Factory\createEnum(
				$factoryCtx, $qualifier["localName"]
			)
		};

		$factoryCtx->namespace->addDefinition($inst);
	}
}
