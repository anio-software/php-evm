<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPUnionType implements PHPTypeCollection {
	public array $members;

	public function __construct(
		PHPType $type, PHPType ...$types
	) {
		$this->members = [$type, ...$types];
	}

	public function jsonSerialize(): mixed {
		return [
			"typeKind" => "UnionType",
			"members"  => $this->members
		];
	}

	public function getTypeKey(): string {
		$types = \array_map(static function(PHPType $type) {
			return $type->getTypeKey();
		}, $this->members);

		\sort($types);

		return "union:(".\implode("|", $types).")";
	}

	public function getTypeCollectionKind(): PHPTypeCollectionKind {
		return PHPTypeCollectionKind::Union;
	}

	public function getTypeMembers(): array {
		return $this->members;
	}

	public function getTypeOperator(): PHPTypeOperator {
		return PHPTypeOperator::Pipe;
	}
}
