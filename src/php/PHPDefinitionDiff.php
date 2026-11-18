<?php

namespace AnioSoftware\EVM\PHP;

final readonly class PHPDefinitionDiff {
	public ArrayDiffResult $diff;

	public function __construct(
		public PHPDefinition $before,
		public PHPDefinition $after
	) {
		if ($before->getDefinitionKind() !== $after->getDefinitionKind()) {
			throw new \InvalidArgumentException(
				"Cannot diff definitions of different kinds."
			);
		}

		$pathFormat = ArrayPathFormat::kSquareBrackets;

		$dataBefore = array_flatten($before->toCanonicalizedArray(), $pathFormat);
		$dataAfter  = array_flatten($after->toCanonicalizedArray(), $pathFormat);

		$this->diff = array_diff(
			$dataBefore,
			$dataAfter,
			static function(mixed $a, mixed $b): bool {
				return stable_json_encode($a) === stable_json_encode($b);
			}
		);
	}
}
