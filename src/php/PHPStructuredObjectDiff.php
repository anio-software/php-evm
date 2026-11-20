<?php

namespace AnioSoftware\EVM\PHP;

use AnioSoftware\EVM\Utils as Utils;

final readonly class PHPStructuredObjectDiff {
	public ArrayDiffResult $diff;

	public function __construct(
		public PHPStructuredObject $before,
		public PHPStructuredObject $after
	) {
		$pathFormat = Utils\ArrayPathFormat::kSquareBrackets;

		$dataBefore = Utils\array_flatten($before->toCanonicalizedArray(), $pathFormat);
		$dataAfter  = Utils\array_flatten($after->toCanonicalizedArray(), $pathFormat);

		$this->diff = array_diff(
			$dataBefore,
			$dataAfter,
			static function(mixed $a, mixed $b): bool {
				return Utils\stable_json_encode($a) === Utils\stable_json_encode($b);
			}
		);
	}
}
