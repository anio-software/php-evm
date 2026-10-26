<?php

namespace AnioSoftware\X2J\PHP;

final readonly class PHPUnionType extends PHPTypeCollection {
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

	public function getTypeCollectionKind(): PHPTypeCollectionKind {
		return PHPTypeCollectionKind::Union;
	}

	public function getTypeMembers(): array {
		return $this->members;
	}

	public function getTypeOperator(): PHPTypeOperator {
		return PHPTypeOperator::Pipe;
	}

	public function render(): string {
		return renderTypeCollection($this);
	}
}
