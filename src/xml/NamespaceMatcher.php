<?php

namespace AnioSoftware\EVM\XML;

final class NamespaceMatcher {
	private function __construct(
		private NamespaceMatcherPolicy $policy,
		private string|null $ns = NULL
	) {}

	public function matchesDOMElement(\DOMElement $element): bool {
		return $this->matches($element->namespaceURI);
	}

	public function matchesDOMAttr(\DOMAttr $attr): bool {
		return $this->matches($attr->namespaceURI);
	}

	public function matches(string|null $ns): bool {
		if ($this->policy === NamespaceMatcherPolicy::kAny) {
			return true;
		}

		return $this->ns === $ns;
	}

	static public function any(): self {
		static $instance = NULL;

		$instance ??= new self(NamespaceMatcherPolicy::kAny);

		return $instance;
	}

	static public function specific(string|null $ns): self {
		return new self(NamespaceMatcherPolicy::kSpecific, $ns);
	}
}
