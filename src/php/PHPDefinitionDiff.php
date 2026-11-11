<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPDefinitionDiff {
	public DiffResult $diff;

	public function __construct(
		public PHPDefinition $before,
		public PHPDefinition $after
	) {
		if ($before->getDefinitionKind() !== $after->getDefinitionKind()) {
			throw new \InvalidArgumentException(
				"Cannot diff definitions of different kinds."
			);
		}

		$pathFormat = "/";

		$dataBefore = array_flatten($before->jsonSerialize(), $pathFormat);
		$dataAfter  = array_flatten($after->jsonSerialize(), $pathFormat);

		$this->diff = array_diff(
			$dataBefore,
			$dataAfter,
			static function(mixed $a, mixed $b): bool {
				return stable_json_encode($a) === stable_json_encode($b);
			}
		);
	}
}
