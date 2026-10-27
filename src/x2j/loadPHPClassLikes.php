<?php

namespace AnioSoftware\X2J;

function loadPHPClassLikes(X2JContext $ctx): void {
	$diagnostics = $ctx->diagnosticsFor(X2JDiagnosticMessageOrigin::kLoadPHPClassLikes);
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
			$reference, $ctx->manual->tagSelectorFactory("packagesynopsis")
		);

		$namespace = "";

		if ($packagesynopsis) {
			$package = XML\selectFirstMatchingChild(
				$packagesynopsis, $ctx->manual->tagSelectorFactory("package")
			);

			$namespace = $package->textContent;
		}

		$synopsis = XML\selectFirstMatchingDescendant(
			$reference,
			new XML\OrSelector(
				$ctx->manual->tagSelectorFactory("classsynopsis"),
				$ctx->manual->tagSelectorFactory("enumsynopsis"),
			)
		);

		if (!$synopsis) {
			$diagnostics->addWarning("no classsynopsis or enumsynopsis for $refId");

			continue;
		}

		$firstChild = XML\selectFirstMatchingChild($synopsis, new XML\MatchAllSelector());

		if (!$firstChild) {
			$diagnostics->addWarning("no firstChild for $refId");

			continue;
		}

		static $map = [
			"ooclass"     => ["tag" => "classname"    , "class" => PHP\PHPClass::class],
			"ooexception" => ["tag" => "exceptionname", "class" => PHP\PHPClass::class],
			"oointerface" => ["tag" => "interfacename", "class" => PHP\PHPInterface::class],
			"enumname"    => ["tag" => "enumname"     , "class" => PHP\PHPEnum::class]
		];

		$kind = $firstChild->localName;

		if (!\array_key_exists($kind, $map)) {
			$diagnostics->addWarning("unmapped localName $kind for $refId");

			continue;
		}

		if ($kind === "enumname") {
			$name = \trim($firstChild->textContent);
		} else {
			$name = \trim(
				XML\selectFirstMatchingDescendant(
					$firstChild,
					$ctx->manual->tagSelectorFactory($map[$kind]["tag"])
				)->textContent
			);
		}

		$class = $map[$kind]["class"];
		$name = \strlen($namespace) ? "$namespace\\$name" : $name;
		$qualifier = $ctx->manual->parseQualifiedName($name);
		$ns = $ctx->manual->getOrCreateNamespace($qualifier["namespace"]);
		$inst = $class::create($ns, $refId, $qualifier["localName"]);

		$ns->addDefinition($inst);
	}
}
