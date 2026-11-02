<?php

namespace AnioSoftware\EVM;

function loadPHPClassLikes(EVMContext $ctx): void {
	$diagnostics = $ctx->diagnosticsFor(EVMDiagnosticMessageOrigin::kLoadPHPClassLikes);
	$references = $ctx->manual->getElementsWithReferenceIdAttribute(
		$ctx->doc, "reference"
	);

	foreach ($references as $reference) {
		$refId = $ctx->manual->getRefIdAttribute($reference);

		if (
			!\str_starts_with($refId, "class.") &&
			!\str_starts_with($refId, "enum.")
		) {
			continue;
		}

		$packagesynopsis = XML\selectFirstMatchingDescendant(
			$reference, $ctx->manual->elementSelectorFactory("packagesynopsis")
		);

		$namespace = "";

		if ($packagesynopsis) {
			$package = XML\selectFirstMatchingChild(
				$packagesynopsis, $ctx->manual->elementSelectorFactory("package")
			);

			$namespace = $package->textContent;
		}

		$synopsis = XML\selectFirstMatchingDescendant(
			$reference,
			new XML\OrSelector(
				$ctx->manual->elementSelectorFactory("classsynopsis"),
				$ctx->manual->elementSelectorFactory("enumsynopsis"),
			)
		);

		if (!$synopsis) {
			$diagnostics->addWarning("no classsynopsis or enumsynopsis for $refId");

			continue;
		}

		$firstElement = XML\selectFirstMatchingChild($synopsis, new XML\ElementSelector);

		if (!$firstElement) {
			$diagnostics->addWarning("no firstElement for $refId");

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
			$diagnostics->addWarning("unmapped localName $kind for $refId");

			continue;
		}

		if ($kind === "enumname") {
			$name = \trim($firstElement->textContent);
		} else {
			$name = \trim(
				XML\selectFirstMatchingDescendant(
					$firstElement,
					$ctx->manual->elementSelectorFactory($map[$kind]["tag"])
				)->textContent
			);
		}

		$class = $map[$kind]["class"];
		$name = \strlen($namespace) ? "$namespace\\$name" : $name;
		$qualifier = $ctx->manual->parseQualifiedName($name);
		$ns = $ctx->manual->getOrCreateNamespace($qualifier["namespace"]);
		$metadata = createPHPDefinitionMetadataFromDOMElement($ctx, $reference);
		$inst = $class::create($metadata, $ns, $refId, $qualifier["localName"]);

		$ns->addDefinition($inst);
	}
}
