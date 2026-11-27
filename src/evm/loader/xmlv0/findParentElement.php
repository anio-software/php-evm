<?php

namespace AnioSoftware\EVM\Loader\XMLv0;

use AnioSoftware\EVM as EVM;

function findParentElement(
	LoaderInstance $loaderInstance,
	\DOMElement $root,
	string $tagName
): ?\DOMElement {
	$parentElement = NULL;
	$selector = $loaderInstance->elementSelectorFactory($tagName);

	EVM\XML\visitParents(
		$root,
		static function(\DOMNode $node) use ($selector, &$parentElement): ?EVM\XML\VisitAction {
			if ($selector->matches($node)) {
				$parentElement = $node;

				return EVM\XML\VisitAction::Stop;
			}

			return NULL;
		}
	);

	return $parentElement;
}
