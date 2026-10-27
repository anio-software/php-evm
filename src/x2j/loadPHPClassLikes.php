<?php

namespace AnioSoftware\X2J;

function loadPHPClassLikes(X2JContext $ctx): void {
	$diagnostics = $ctx->diagnosticsFor(X2JDiagnosticMessageOrigin::loadPHPClassLikes);

	$references = XML\select(
		$ctx->doc->documentElement,
		new XML\AndSelector(
			PHP\PHPManual::tagSelectorFactory("reference"),
			PHP\PHPManual::refIdSelectorFactory()
		)
	);

	foreach ($references as $reference) {
		$refId = PHP\PHPManual::getRefIdAttribute($reference);

		if (
			!\str_starts_with($refId, "class.") &&
			!\str_starts_with($refId, "enum.")
		) {
			continue;
		}

		$packagesynopsis = XML\selectFirstMatchingDescendant(
			$reference, PHP\PHPManual::tagSelectorFactory("packagesynopsis")
		);

		$namespace = "";

		if ($packagesynopsis) {
			$package = XML\selectFirstMatchingChild(
				$packagesynopsis, PHP\PHPManual::tagSelectorFactory("package")
			);

			$namespace = $package->textContent;
		}

		$synopsis = XML\selectFirstMatchingDescendant(
			$reference,
			new XML\OrSelector(
				PHP\PHPManual::tagSelectorFactory("classsynopsis"),
				PHP\PHPManual::tagSelectorFactory("enumsynopsis"),
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
					PHP\PHPManual::tagSelectorFactory($map[$kind]["tag"])
				)->textContent
			);
		}

		$class = $map[$kind]["class"];
		$name = \strlen($namespace) ? "$namespace\\$name" : $name;
		$qualifier = PHP\PHPManual::parseQualifiedName($name);
		$ns = $ctx->manual->getOrCreateNamespace($qualifier["namespace"]);
		$inst = $class::create($ns, $refId, $qualifier["localName"]);

		$ns->addDefinition($inst);
	}
}
