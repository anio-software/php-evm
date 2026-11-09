<?php

class X {
	/* bookId: book.dom ; membership = kBundledExternal */
	public function import_simplexml(object $node): \Dom\Attr|\Dom\Element {
		return \Dom\import_simplexml($node);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function __autoload(string $class): void {
		\__autoload($class);
	}

	/* bookId: book.math ; membership = kCore */
	public function abs(float|int $num): float|int {
		return \abs($num);
	}

	/* bookId: book.math ; membership = kCore */
	public function acos(float $num): float {
		return \acos($num);
	}

	/* bookId: book.math ; membership = kCore */
	public function acosh(float $num): float {
		return \acosh($num);
	}

	/* bookId: book.strings ; membership = kCore */
	public function addcslashes(string $string, string $characters): string {
		return \addcslashes($string, $characters);
	}

	/* bookId: book.strings ; membership = kCore */
	public function addslashes(string $string): string {
		return \addslashes($string);
	}

	/* bookId: book.apache ; membership = kBundled */
	public function apache_child_terminate(): void {
		\apache_child_terminate();
	}

	/* bookId: book.apache ; membership = kBundled */
	public function apache_get_modules(): array {
		return \apache_get_modules();
	}

	/* bookId: book.apache ; membership = kBundled */
	public function apache_get_version(): false|string {
		return \apache_get_version();
	}

	/* bookId: book.apache ; membership = kBundled */
	public function apache_getenv(string $variable, bool $walk_to_top = false): false|string {
		return \apache_getenv($variable, $walk_to_top);
	}

	/* bookId: book.apache ; membership = kBundled */
	public function apache_lookup_uri(string $filename): false|object {
		return \apache_lookup_uri($filename);
	}

	/* bookId: book.apache ; membership = kBundled */
	public function apache_note(string $note_name, ?string $note_value = NULL): false|string {
		return \apache_note($note_name, $note_value);
	}

	/* bookId: book.apache ; membership = kBundled */
	public function apache_request_headers(): array {
		return \apache_request_headers();
	}

	/* bookId: book.apache ; membership = kBundled */
	public function apache_response_headers(): array {
		return \apache_response_headers();
	}

	/* bookId: book.apache ; membership = kBundled */
	public function apache_setenv(string $variable, string $value, bool $walk_to_top = false): bool {
		return \apache_setenv($variable, $value, $walk_to_top);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_all(array $array, callable $callback): bool {
		return \array_all($array, $callback);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_any(array $array, callable $callback): bool {
		return \array_any($array, $callback);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_change_key_case(array $array, int $case = \CASE_LOWER): array {
		return \array_change_key_case($array, $case);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_chunk(array $array, int $length, bool $preserve_keys = false): array {
		return \array_chunk($array, $length, $preserve_keys);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_column(array $array, int|null|string $column_key, int|null|string $index_key = NULL): array {
		return \array_column($array, $column_key, $index_key);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_combine(array $keys, array $values): array {
		return \array_combine($keys, $values);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_count_values(array $array): array {
		return \array_count_values($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_diff(array $array, array ...$arrays): array {
		return \array_diff($array, ...$arrays);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_diff_assoc(array $array, array ...$arrays): array {
		return \array_diff_assoc($array, ...$arrays);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_diff_key(array $array, array ...$arrays): array {
		return \array_diff_key($array, ...$arrays);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_fill(int $start_index, int $count, mixed $value): array {
		return \array_fill($start_index, $count, $value);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_fill_keys(array $keys, mixed $value): array {
		return \array_fill_keys($keys, $value);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_filter(array $array, ?callable $callback = NULL, int $mode = 0): array {
		return \array_filter($array, $callback, $mode);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_find(array $array, callable $callback): mixed {
		return \array_find($array, $callback);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_find_key(array $array, callable $callback): mixed {
		return \array_find_key($array, $callback);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_first(array $array): mixed {
		return \array_first($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_flip(array $array): array {
		return \array_flip($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_intersect(array $array, array ...$arrays): array {
		return \array_intersect($array, ...$arrays);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_intersect_assoc(array $array, array ...$arrays): array {
		return \array_intersect_assoc($array, ...$arrays);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_intersect_key(array $array, array ...$arrays): array {
		return \array_intersect_key($array, ...$arrays);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_is_list(array $array): bool {
		return \array_is_list($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_key_exists(/* bool|float|int|null|resource|string */ $key, array $array): bool {
		return \array_key_exists($key, $array);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_key_first(array $array): int|null|string {
		return \array_key_first($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_key_last(array $array): int|null|string {
		return \array_key_last($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_keys(array $array): array {
		return \array_keys($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_last(array $array): mixed {
		return \array_last($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_map(?callable $callback, array $array, array ...$arrays): array {
		return \array_map($callback, $array, ...$arrays);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_merge(array ...$arrays): array {
		return \array_merge(...$arrays);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_merge_recursive(array ...$arrays): array {
		return \array_merge_recursive(...$arrays);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_multisort(array &$array1, mixed $array1_sort_order = \SORT_ASC, mixed $array1_sort_flags = \SORT_REGULAR, mixed ...$rest): true {
		return \array_multisort($array1, $array1_sort_order, $array1_sort_flags, ...$rest);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_pad(array $array, int $length, mixed $value): array {
		return \array_pad($array, $length, $value);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_pop(array &$array): mixed {
		return \array_pop($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_product(array $array): float|int {
		return \array_product($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_push(array &$array, mixed ...$values): int {
		return \array_push($array, ...$values);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_rand(array $array, int $num = 1): array|int|string {
		return \array_rand($array, $num);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_reduce(array $array, callable $callback, mixed $initial = NULL): mixed {
		return \array_reduce($array, $callback, $initial);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_replace(array $array, array ...$replacements): array {
		return \array_replace($array, ...$replacements);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_replace_recursive(array $array, array ...$replacements): array {
		return \array_replace_recursive($array, ...$replacements);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_reverse(array $array, bool $preserve_keys = false): array {
		return \array_reverse($array, $preserve_keys);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_search(mixed $needle, array $haystack, bool $strict = false): false|int|string {
		return \array_search($needle, $haystack, $strict);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_shift(array &$array): mixed {
		return \array_shift($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_slice(array $array, int $offset, ?int $length = NULL, bool $preserve_keys = false): array {
		return \array_slice($array, $offset, $length, $preserve_keys);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_splice(array &$array, int $offset, ?int $length = NULL, mixed $replacement = []): array {
		return \array_splice($array, $offset, $length, $replacement);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_sum(array $array): float|int {
		return \array_sum($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_unique(array $array, int $flags = \SORT_STRING): array {
		return \array_unique($array, $flags);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_unshift(array &$array, mixed ...$values): int {
		return \array_unshift($array, ...$values);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_values(array $array): array {
		return \array_values($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_walk(array|object &$array, callable $callback, mixed $arg = NULL): true {
		return \array_walk($array, $callback, $arg);
	}

	/* bookId: book.array ; membership = kCore */
	public function array_walk_recursive(array|object &$array, callable $callback, mixed $arg = NULL): true {
		return \array_walk_recursive($array, $callback, $arg);
	}

	/* bookId: book.array ; membership = kCore */
	public function arsort(array &$array, int $flags = \SORT_REGULAR): true {
		return \arsort($array, $flags);
	}

	/* bookId: book.math ; membership = kCore */
	public function asin(float $num): float {
		return \asin($num);
	}

	/* bookId: book.math ; membership = kCore */
	public function asinh(float $num): float {
		return \asinh($num);
	}

	/* bookId: book.array ; membership = kCore */
	public function asort(array &$array, int $flags = \SORT_REGULAR): true {
		return \asort($array, $flags);
	}

	/* bookId: book.info ; membership = kCore */
	public function assert(mixed $assertion, null|string|\Throwable $description = NULL): bool {
		return \assert($assertion, $description);
	}

	/* bookId: book.math ; membership = kCore */
	public function atan(float $num): float {
		return \atan($num);
	}

	/* bookId: book.math ; membership = kCore */
	public function atan2(float $y, float $x): float {
		return \atan2($y, $x);
	}

	/* bookId: book.math ; membership = kCore */
	public function atanh(float $num): float {
		return \atanh($num);
	}

	/* bookId: book.url ; membership = kCore */
	public function base64_decode(string $string, bool $strict = false): false|string {
		return \base64_decode($string, $strict);
	}

	/* bookId: book.url ; membership = kCore */
	public function base64_encode(string $string): string {
		return \base64_encode($string);
	}

	/* bookId: book.math ; membership = kCore */
	public function base_convert(string $num, int $from_base, int $to_base): string {
		return \base_convert($num, $from_base, $to_base);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function basename(string $path, string $suffix = ""): string {
		return \basename($path, $suffix);
	}

	/* bookId: book.bc ; membership = kBundled */
	public function bcadd(string $num1, string $num2, ?int $scale = NULL): string {
		return \bcadd($num1, $num2, $scale);
	}

	/* bookId: book.bc ; membership = kBundled */
	public function bcceil(string $num): string {
		return \bcceil($num);
	}

	/* bookId: book.bc ; membership = kBundled */
	public function bccomp(string $num1, string $num2, ?int $scale = NULL): int {
		return \bccomp($num1, $num2, $scale);
	}

	/* bookId: book.bc ; membership = kBundled */
	public function bcdiv(string $num1, string $num2, ?int $scale = NULL): string {
		return \bcdiv($num1, $num2, $scale);
	}

	/* bookId: book.bc ; membership = kBundled */
	public function bcdivmod(string $num1, string $num2, ?int $scale = NULL): array {
		return \bcdivmod($num1, $num2, $scale);
	}

	/* bookId: book.bc ; membership = kBundled */
	public function bcfloor(string $num): string {
		return \bcfloor($num);
	}

	/* bookId: book.bc ; membership = kBundled */
	public function bcmod(string $num1, string $num2, ?int $scale = NULL): string {
		return \bcmod($num1, $num2, $scale);
	}

	/* bookId: book.bc ; membership = kBundled */
	public function bcmul(string $num1, string $num2, ?int $scale = NULL): string {
		return \bcmul($num1, $num2, $scale);
	}

	/* bookId: book.bc ; membership = kBundled */
	public function bcpow(string $num, string $exponent, ?int $scale = NULL): string {
		return \bcpow($num, $exponent, $scale);
	}

	/* bookId: book.bc ; membership = kBundled */
	public function bcpowmod(string $num, string $exponent, string $modulus, ?int $scale = NULL): string {
		return \bcpowmod($num, $exponent, $modulus, $scale);
	}

	/* bookId: book.bc ; membership = kBundled */
	public function bcround(string $num, int $precision = 0, \RoundingMode $mode = RoundingMode::HalfAwayFromZero): string {
		return \bcround($num, $precision, $mode);
	}

	/* bookId: book.bc ; membership = kBundled */
	public function bcscale(int $scale): int {
		return \bcscale($scale);
	}

	/* bookId: book.bc ; membership = kBundled */
	public function bcsqrt(string $num, ?int $scale = NULL): string {
		return \bcsqrt($num, $scale);
	}

	/* bookId: book.bc ; membership = kBundled */
	public function bcsub(string $num1, string $num2, ?int $scale = NULL): string {
		return \bcsub($num1, $num2, $scale);
	}

	/* bookId: book.strings ; membership = kCore */
	public function bin2hex(string $string): string {
		return \bin2hex($string);
	}

	/* bookId: book.gettext ; membership = kBundledExternal */
	public function bind_textdomain_codeset(string $domain, ?string $codeset = NULL): false|string {
		return \bind_textdomain_codeset($domain, $codeset);
	}

	/* bookId: book.math ; membership = kCore */
	public function bindec(string $binary_string): float|int {
		return \bindec($binary_string);
	}

	/* bookId: book.gettext ; membership = kBundledExternal */
	public function bindtextdomain(string $domain, ?string $directory = NULL): false|string {
		return \bindtextdomain($domain, $directory);
	}

	/* bookId: book.var ; membership = kCore */
	public function boolval(mixed $value): bool {
		return \boolval($value);
	}

	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzclose(/* resource */ $bz): bool {
		return \bzclose($bz);
	}

	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzcompress(string $data, int $block_size = 4, int $work_factor = 0): int|string {
		return \bzcompress($data, $block_size, $work_factor);
	}

	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzdecompress(string $data, bool $use_less_memory = false): false|int|string {
		return \bzdecompress($data, $use_less_memory);
	}

	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzerrno(/* resource */ $bz): int {
		return \bzerrno($bz);
	}

	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzerror(/* resource */ $bz): array {
		return \bzerror($bz);
	}

	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzerrstr(/* resource */ $bz): string {
		return \bzerrstr($bz);
	}

	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzflush(/* resource */ $bz): bool {
		return \bzflush($bz);
	}

	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzopen(/* resource|string */ $file, string $mode)/* : false|resource */ {
		return \bzopen($file, $mode);
	}

	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzread(/* resource */ $bz, int $length = 1024): false|string {
		return \bzread($bz, $length);
	}

	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzwrite(/* resource */ $bz, string $data, ?int $length = NULL): false|int {
		return \bzwrite($bz, $data, $length);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function cal_days_in_month(int $calendar, int $month, int $year): int {
		return \cal_days_in_month($calendar, $month, $year);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function cal_from_jd(int $julian_day, int $calendar): array {
		return \cal_from_jd($julian_day, $calendar);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function cal_info(int $calendar = 1): array {
		return \cal_info($calendar);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function cal_to_jd(int $calendar, int $month, int $day, int $year): int {
		return \cal_to_jd($calendar, $month, $day, $year);
	}

	/* bookId: book.funchand ; membership = kCore */
	public function call_user_func(callable $callback, mixed ...$args): mixed {
		return \call_user_func($callback, ...$args);
	}

	/* bookId: book.funchand ; membership = kCore */
	public function call_user_func_array(callable $callback, array $args): mixed {
		return \call_user_func_array($callback, $args);
	}

	/* bookId: book.math ; membership = kCore */
	public function ceil(float|int $num): float {
		return \ceil($num);
	}

	/* bookId: book.dir ; membership = kCore */
	public function chdir(string $directory): bool {
		return \chdir($directory);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function checkdate(int $month, int $day, int $year): bool {
		return \checkdate($month, $day, $year);
	}

	/* bookId: book.network ; membership = kCore */
	public function checkdnsrr(string $hostname, string $type = "MX"): bool {
		return \checkdnsrr($hostname, $type);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function chgrp(string $filename, int|string $group): bool {
		return \chgrp($filename, $group);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function chmod(string $filename, int $permissions): bool {
		return \chmod($filename, $permissions);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function chown(string $filename, int|string $user): bool {
		return \chown($filename, $user);
	}

	/* bookId: book.strings ; membership = kCore */
	public function chr(int $codepoint): string {
		return \chr($codepoint);
	}

	/* bookId: book.dir ; membership = kCore */
	public function chroot(string $directory): bool {
		return \chroot($directory);
	}

	/* bookId: book.strings ; membership = kCore */
	public function chunk_split(string $string, int $length = 76, string $separator = "\r\n"): string {
		return \chunk_split($string, $length, $separator);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function class_alias(string $class, string $alias, bool $autoload = true): bool {
		return \class_alias($class, $alias, $autoload);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function class_exists(string $class, bool $autoload = true): bool {
		return \class_exists($class, $autoload);
	}

	/* bookId: book.spl ; membership = kCore */
	public function class_implements(object|string $object_or_class, bool $autoload = true): array|false {
		return \class_implements($object_or_class, $autoload);
	}

	/* bookId: book.spl ; membership = kCore */
	public function class_parents(object|string $object_or_class, bool $autoload = true): array|false {
		return \class_parents($object_or_class, $autoload);
	}

	/* bookId: book.spl ; membership = kCore */
	public function class_uses(object|string $object_or_class, bool $autoload = true): array|false {
		return \class_uses($object_or_class, $autoload);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function clearstatcache(bool $clear_realpath_cache = false, string $filename = ""): void {
		\clearstatcache($clear_realpath_cache, $filename);
	}

	/* bookId: book.info ; membership = kCore */
	public function cli_get_process_title(): ?string {
		return \cli_get_process_title();
	}

	/* bookId: book.info ; membership = kCore */
	public function cli_set_process_title(string $title): bool {
		return \cli_set_process_title($title);
	}

	/* bookId: book.dir ; membership = kCore */
	public function closedir(/* null|resource */ $dir_handle = NULL): void {
		\closedir($dir_handle);
	}

	/* bookId: book.network ; membership = kCore */
	public function closelog(): true {
		return \closelog();
	}

	/* bookId: book.com ; membership = kBundled */
	public function com_create_guid(): false|string {
		return \com_create_guid();
	}

	/* bookId: book.com ; membership = kBundled */
	public function com_event_sink(\variant $variant, object $sink_object, array|null|string $sink_interface = NULL): bool {
		return \com_event_sink($variant, $sink_object, $sink_interface);
	}

	/* bookId: book.com ; membership = kBundled */
	public function com_get_active_object(string $prog_id, ?int $codepage = NULL): \variant {
		return \com_get_active_object($prog_id, $codepage);
	}

	/* bookId: book.com ; membership = kBundled */
	public function com_load_typelib(string $typelib, bool $case_insensitive = true): bool {
		return \com_load_typelib($typelib, $case_insensitive);
	}

	/* bookId: book.com ; membership = kBundled */
	public function com_message_pump(int $timeout_milliseconds = 0): bool {
		return \com_message_pump($timeout_milliseconds);
	}

	/* bookId: book.com ; membership = kBundled */
	public function com_print_typeinfo(string|\variant $variant, ?string $dispatch_interface = NULL, bool $display_sink = false): bool {
		return \com_print_typeinfo($variant, $dispatch_interface, $display_sink);
	}

	/* bookId: book.array ; membership = kCore */
	public function compact(array|string $var_name, array|string ...$var_names): array {
		return \compact($var_name, ...$var_names);
	}

	/* bookId: book.misc ; membership = kCore */
	public function connection_aborted(): int {
		return \connection_aborted();
	}

	/* bookId: book.misc ; membership = kCore */
	public function connection_status(): int {
		return \connection_status();
	}

	/* bookId: book.misc ; membership = kCore */
	public function constant(string $name): mixed {
		return \constant($name);
	}

	/* bookId: book.strings ; membership = kCore */
	public function convert_cyr_string(string $str, string $from, string $to): string {
		return \convert_cyr_string($str, $from, $to);
	}

	/* bookId: book.strings ; membership = kCore */
	public function convert_uudecode(string $string): false|string {
		return \convert_uudecode($string);
	}

	/* bookId: book.strings ; membership = kCore */
	public function convert_uuencode(string $string): string {
		return \convert_uuencode($string);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function copy(string $from, string $to, /* null|resource */ $context = NULL): bool {
		return \copy($from, $to, $context);
	}

	/* bookId: book.math ; membership = kCore */
	public function cos(float $num): float {
		return \cos($num);
	}

	/* bookId: book.math ; membership = kCore */
	public function cosh(float $num): float {
		return \cosh($num);
	}

	/* bookId: book.array ; membership = kCore */
	public function count(array|\Countable $value, int $mode = \COUNT_NORMAL): int {
		return \count($value, $mode);
	}

	/* bookId: book.strings ; membership = kCore */
	public function count_chars(string $string, int $mode = 0): array|string {
		return \count_chars($string, $mode);
	}

	/* bookId: book.strings ; membership = kCore */
	public function crc32(string $string): int {
		return \crc32($string);
	}

	/* bookId: book.funchand ; membership = kCore */
	public function create_function(string $args, string $code): string {
		return \create_function($args, $code);
	}

	/* bookId: book.strings ; membership = kCore */
	public function crypt(string $string, string $salt): string {
		return \crypt($string, $salt);
	}

	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_alnum(mixed $text): bool {
		return \ctype_alnum($text);
	}

	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_alpha(mixed $text): bool {
		return \ctype_alpha($text);
	}

	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_cntrl(mixed $text): bool {
		return \ctype_cntrl($text);
	}

	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_digit(mixed $text): bool {
		return \ctype_digit($text);
	}

	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_graph(mixed $text): bool {
		return \ctype_graph($text);
	}

	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_lower(mixed $text): bool {
		return \ctype_lower($text);
	}

	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_print(mixed $text): bool {
		return \ctype_print($text);
	}

	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_punct(mixed $text): bool {
		return \ctype_punct($text);
	}

	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_space(mixed $text): bool {
		return \ctype_space($text);
	}

	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_upper(mixed $text): bool {
		return \ctype_upper($text);
	}

	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_xdigit(mixed $text): bool {
		return \ctype_xdigit($text);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_close(\CurlHandle $handle): void {
		\curl_close($handle);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_copy_handle(\CurlHandle $handle): false|\CurlHandle {
		return \curl_copy_handle($handle);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_errno(\CurlHandle $handle): int {
		return \curl_errno($handle);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_error(\CurlHandle $handle): string {
		return \curl_error($handle);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_escape(\CurlHandle $handle, string $string): false|string {
		return \curl_escape($handle, $string);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_exec(\CurlHandle $handle): bool|string {
		return \curl_exec($handle);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_getinfo(\CurlHandle $handle, ?int $option = NULL): mixed {
		return \curl_getinfo($handle, $option);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_init(?string $url = NULL): false|\CurlHandle {
		return \curl_init($url);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_add_handle(\CurlMultiHandle $multi_handle, \CurlHandle $handle): int {
		return \curl_multi_add_handle($multi_handle, $handle);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_close(\CurlMultiHandle $multi_handle): void {
		\curl_multi_close($multi_handle);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_errno(\CurlMultiHandle $multi_handle): int {
		return \curl_multi_errno($multi_handle);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_exec(\CurlMultiHandle $multi_handle, int &$still_running): int {
		return \curl_multi_exec($multi_handle, $still_running);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_getcontent(\CurlHandle $handle): ?string {
		return \curl_multi_getcontent($handle);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_info_read(\CurlMultiHandle $multi_handle, ?int &$queued_messages = NULL): array|false {
		return \curl_multi_info_read($multi_handle, $queued_messages);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_init(): \CurlMultiHandle {
		return \curl_multi_init();
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_remove_handle(\CurlMultiHandle $multi_handle, \CurlHandle $handle): int {
		return \curl_multi_remove_handle($multi_handle, $handle);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_select(\CurlMultiHandle $multi_handle, float $timeout = 1.0): int {
		return \curl_multi_select($multi_handle, $timeout);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_setopt(\CurlMultiHandle $multi_handle, int $option, mixed $value): bool {
		return \curl_multi_setopt($multi_handle, $option, $value);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_strerror(int $error_code): ?string {
		return \curl_multi_strerror($error_code);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_pause(\CurlHandle $handle, int $flags): int {
		return \curl_pause($handle, $flags);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_reset(\CurlHandle $handle): void {
		\curl_reset($handle);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_setopt(\CurlHandle $handle, int $option, mixed $value): bool {
		return \curl_setopt($handle, $option, $value);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_setopt_array(\CurlHandle $handle, array $options): bool {
		return \curl_setopt_array($handle, $options);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_share_close(\CurlShareHandle $share_handle): void {
		\curl_share_close($share_handle);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_share_errno(\CurlShareHandle $share_handle): int {
		return \curl_share_errno($share_handle);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_share_init(): \CurlShareHandle {
		return \curl_share_init();
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_share_init_persistent(array $share_options): \CurlSharePersistentHandle {
		return \curl_share_init_persistent($share_options);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_share_setopt(\CurlShareHandle $share_handle, int $option, mixed $value): bool {
		return \curl_share_setopt($share_handle, $option, $value);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_share_strerror(int $error_code): ?string {
		return \curl_share_strerror($error_code);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_strerror(int $error_code): ?string {
		return \curl_strerror($error_code);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_unescape(\CurlHandle $handle, string $string): false|string {
		return \curl_unescape($handle, $string);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_upkeep(\CurlHandle $handle): bool {
		return \curl_upkeep($handle);
	}

	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_version(): array|false {
		return \curl_version();
	}

	/* bookId: book.array ; membership = kCore */
	public function current(array|object $array): mixed {
		return \current($array);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function date(string $format, ?int $timestamp = NULL): string {
		return \date($format, $timestamp);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function date_create(string $datetime = "now", ?\DateTimeZone $timezone = NULL): false|\DateTime {
		return \date_create($datetime, $timezone);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function date_create_immutable(string $datetime = "now", ?\DateTimeZone $timezone = NULL): false|\DateTimeImmutable {
		return \date_create_immutable($datetime, $timezone);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function date_default_timezone_get(): string {
		return \date_default_timezone_get();
	}

	/* bookId: book.datetime ; membership = kCore */
	public function date_default_timezone_set(string $timezoneId): bool {
		return \date_default_timezone_set($timezoneId);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function date_parse(string $datetime): array {
		return \date_parse($datetime);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function date_parse_from_format(string $format, string $datetime): array {
		return \date_parse_from_format($format, $datetime);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function date_sun_info(int $timestamp, float $latitude, float $longitude): array {
		return \date_sun_info($timestamp, $latitude, $longitude);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function date_sunrise(int $timestamp, int $returnFormat = \SUNFUNCS_RET_STRING, ?float $latitude = NULL, ?float $longitude = NULL, ?float $zenith = NULL, ?float $utcOffset = NULL): false|float|int|string {
		return \date_sunrise($timestamp, $returnFormat, $latitude, $longitude, $zenith, $utcOffset);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function date_sunset(int $timestamp, int $returnFormat = \SUNFUNCS_RET_STRING, ?float $latitude = NULL, ?float $longitude = NULL, ?float $zenith = NULL, ?float $utcOffset = NULL): false|float|int|string {
		return \date_sunset($timestamp, $returnFormat, $latitude, $longitude, $zenith, $utcOffset);
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_close(\Dba\Connection $dba): void {
		\dba_close($dba);
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_delete(array|string $key, \Dba\Connection $dba): bool {
		return \dba_delete($key, $dba);
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_exists(array|string $key, \Dba\Connection $dba): bool {
		return \dba_exists($key, $dba);
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_fetch(array|string $key, \Dba\Connection $dba, int $skip = 0): false|string {
		return \dba_fetch($key, $dba, $skip);
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_firstkey(\Dba\Connection $dba): false|string {
		return \dba_firstkey($dba);
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_handlers(bool $full_info = false): array {
		return \dba_handlers($full_info);
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_insert(array|string $key, string $value, \Dba\Connection $dba): bool {
		return \dba_insert($key, $value, $dba);
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_key_split(false|null|string $key): array|false {
		return \dba_key_split($key);
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_list(): array {
		return \dba_list();
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_nextkey(\Dba\Connection $dba): false|string {
		return \dba_nextkey($dba);
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_open(string $path, string $mode, ?string $handler = NULL, int $permission = 0644, int $map_size = 0, ?int $flags = NULL): false|\Dba\Connection {
		return \dba_open($path, $mode, $handler, $permission, $map_size, $flags);
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_optimize(\Dba\Connection $dba): bool {
		return \dba_optimize($dba);
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_popen(string $path, string $mode, ?string $handler = NULL, int $permission = 0644, int $map_size = 0, ?int $flags = NULL): false|\Dba\Connection {
		return \dba_popen($path, $mode, $handler, $permission, $map_size, $flags);
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_replace(array|string $key, string $value, \Dba\Connection $dba): bool {
		return \dba_replace($key, $value, $dba);
	}

	/* bookId: book.dba ; membership = kBundled */
	public function dba_sync(\Dba\Connection $dba): bool {
		return \dba_sync($dba);
	}

	/* bookId: book.gettext ; membership = kBundledExternal */
	public function dcgettext(string $domain, string $message, int $category): string {
		return \dcgettext($domain, $message, $category);
	}

	/* bookId: book.gettext ; membership = kBundledExternal */
	public function dcngettext(string $domain, string $singular, string $plural, int $count, int $category): string {
		return \dcngettext($domain, $singular, $plural, $count, $category);
	}

	/* bookId: book.errorfunc ; membership = kCore */
	public function debug_backtrace(int $options = \DEBUG_BACKTRACE_PROVIDE_OBJECT, int $limit = 0): array {
		return \debug_backtrace($options, $limit);
	}

	/* bookId: book.errorfunc ; membership = kCore */
	public function debug_print_backtrace(int $options = 0, int $limit = 0): void {
		\debug_print_backtrace($options, $limit);
	}

	/* bookId: book.var ; membership = kCore */
	public function debug_zval_dump(mixed $value, mixed ...$values): void {
		\debug_zval_dump($value, ...$values);
	}

	/* bookId: book.math ; membership = kCore */
	public function decbin(int $num): string {
		return \decbin($num);
	}

	/* bookId: book.math ; membership = kCore */
	public function dechex(int $num): string {
		return \dechex($num);
	}

	/* bookId: book.math ; membership = kCore */
	public function decoct(int $num): string {
		return \decoct($num);
	}

	/* bookId: book.misc ; membership = kCore */
	public function define(string $constant_name, mixed $value, bool $case_insensitive = false): bool {
		return \define($constant_name, $value, $case_insensitive);
	}

	/* bookId: book.misc ; membership = kCore */
	public function defined(string $constant_name): bool {
		return \defined($constant_name);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function deflate_add(\DeflateContext $context, string $data, int $flush_mode = \ZLIB_SYNC_FLUSH): false|string {
		return \deflate_add($context, $data, $flush_mode);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function deflate_init(int $encoding, array|object $options = []): false|\DeflateContext {
		return \deflate_init($encoding, $options);
	}

	/* bookId: book.math ; membership = kCore */
	public function deg2rad(float $num): float {
		return \deg2rad($num);
	}

	/* bookId: book.gettext ; membership = kBundledExternal */
	public function dgettext(string $domain, string $message): string {
		return \dgettext($domain, $message);
	}

	/* bookId: book.dir ; membership = kCore */
	public function dir(string $directory, /* null|resource */ $context = NULL): false|\Directory {
		return \dir($directory, $context);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function dirname(string $path, int $levels = 1): string {
		return \dirname($path, $levels);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function disk_free_space(string $directory): false|float {
		return \disk_free_space($directory);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function disk_total_space(string $directory): false|float {
		return \disk_total_space($directory);
	}

	/* bookId: book.info ; membership = kCore */
	public function dl(string $extension_filename): bool {
		return \dl($extension_filename);
	}

	/* bookId: book.gettext ; membership = kBundledExternal */
	public function dngettext(string $domain, string $singular, string $plural, int $count): string {
		return \dngettext($domain, $singular, $plural, $count);
	}

	/* bookId: book.network ; membership = kCore */
	public function dns_get_record(string $hostname, int $type = \DNS_ANY, ?array &$authoritative_name_servers = NULL, ?array &$additional_records = NULL, bool $raw = false): array|false {
		return \dns_get_record($hostname, $type, $authoritative_name_servers, $additional_records, $raw);
	}

	/* bookId: book.dom ; membership = kBundledExternal */
	public function dom_import_simplexml(object $node): \DOMAttr|\DOMElement {
		return \dom_import_simplexml($node);
	}

	/* bookId: book.array ; membership = kCore */
	public function each(array|object &$array): array {
		return \each($array);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function easter_date(?int $year = NULL, int $mode = \CAL_EASTER_DEFAULT): int {
		return \easter_date($year, $mode);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function easter_days(?int $year = NULL, int $mode = \CAL_EASTER_DEFAULT): int {
		return \easter_days($year, $mode);
	}

	/* bookId: book.strings ; membership = kCore */
	public function echo(string ...$expressions): void {
		\echo(...$expressions);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_describe(\EnchantBroker $broker): array {
		return \enchant_broker_describe($broker);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_dict_exists(\EnchantBroker $broker, string $tag): bool {
		return \enchant_broker_dict_exists($broker, $tag);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_free(\EnchantBroker $broker): bool {
		return \enchant_broker_free($broker);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_free_dict(\EnchantDictionary $dictionary): bool {
		return \enchant_broker_free_dict($dictionary);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_get_dict_path(\EnchantBroker $broker, int $type): false|string {
		return \enchant_broker_get_dict_path($broker, $type);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_get_error(\EnchantBroker $broker): false|string {
		return \enchant_broker_get_error($broker);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_init(): false|\EnchantBroker {
		return \enchant_broker_init();
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_list_dicts(\EnchantBroker $broker): array {
		return \enchant_broker_list_dicts($broker);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_request_dict(\EnchantBroker $broker, string $tag): false|\EnchantDictionary {
		return \enchant_broker_request_dict($broker, $tag);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_request_pwl_dict(\EnchantBroker $broker, string $filename): false|\EnchantDictionary {
		return \enchant_broker_request_pwl_dict($broker, $filename);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_set_dict_path(\EnchantBroker $broker, int $type, string $path): bool {
		return \enchant_broker_set_dict_path($broker, $type, $path);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_set_ordering(\EnchantBroker $broker, string $tag, string $ordering): bool {
		return \enchant_broker_set_ordering($broker, $tag, $ordering);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_add(\EnchantDictionary $dictionary, string $word): void {
		\enchant_dict_add($dictionary, $word);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_add_to_session(\EnchantDictionary $dictionary, string $word): void {
		\enchant_dict_add_to_session($dictionary, $word);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_check(\EnchantDictionary $dictionary, string $word): bool {
		return \enchant_dict_check($dictionary, $word);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_describe(\EnchantDictionary $dictionary): array {
		return \enchant_dict_describe($dictionary);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_get_error(\EnchantDictionary $dictionary): false|string {
		return \enchant_dict_get_error($dictionary);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_is_added(\EnchantDictionary $dictionary, string $word): bool {
		return \enchant_dict_is_added($dictionary, $word);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_quick_check(\EnchantDictionary $dictionary, string $word, ?array &$suggestions = NULL): bool {
		return \enchant_dict_quick_check($dictionary, $word, $suggestions);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_remove(\EnchantDictionary $dictionary, string $word): void {
		\enchant_dict_remove($dictionary, $word);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_remove_from_session(\EnchantDictionary $dictionary, string $word): void {
		\enchant_dict_remove_from_session($dictionary, $word);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_store_replacement(\EnchantDictionary $dictionary, string $misspelled, string $correct): void {
		\enchant_dict_store_replacement($dictionary, $misspelled, $correct);
	}

	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_suggest(\EnchantDictionary $dictionary, string $word): array {
		return \enchant_dict_suggest($dictionary, $word);
	}

	/* bookId: book.array ; membership = kCore */
	public function end(array|object &$array): mixed {
		return \end($array);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function enum_exists(string $enum, bool $autoload = true): bool {
		return \enum_exists($enum, $autoload);
	}

	/* bookId: book.errorfunc ; membership = kCore */
	public function error_clear_last(): void {
		\error_clear_last();
	}

	/* bookId: book.errorfunc ; membership = kCore */
	public function error_get_last(): ?array {
		return \error_get_last();
	}

	/* bookId: book.errorfunc ; membership = kCore */
	public function error_log(string $message, int $message_type = 0, ?string $destination = NULL, ?string $additional_headers = NULL): bool {
		return \error_log($message, $message_type, $destination, $additional_headers);
	}

	/* bookId: book.errorfunc ; membership = kCore */
	public function error_reporting(?int $error_level = NULL): int {
		return \error_reporting($error_level);
	}

	/* bookId: book.exec ; membership = kCore */
	public function escapeshellarg(string $arg): string {
		return \escapeshellarg($arg);
	}

	/* bookId: book.exec ; membership = kCore */
	public function escapeshellcmd(string $command): string {
		return \escapeshellcmd($command);
	}

	/* bookId: book.exec ; membership = kCore */
	public function exec(string $command, ?array &$output = NULL, ?int &$result_code = NULL): false|string {
		return \exec($command, $output, $result_code);
	}

	/* bookId: book.exif ; membership = kBundled */
	public function exif_imagetype(string $filename): false|int {
		return \exif_imagetype($filename);
	}

	/* bookId: book.exif ; membership = kBundled */
	public function exif_read_data(/* resource|string */ $file, ?string $required_sections = NULL, bool $as_arrays = false, bool $read_thumbnail = false): array|false {
		return \exif_read_data($file, $required_sections, $as_arrays, $read_thumbnail);
	}

	/* bookId: book.exif ; membership = kBundled */
	public function exif_tagname(int $index): false|string {
		return \exif_tagname($index);
	}

	/* bookId: book.exif ; membership = kBundled */
	public function exif_thumbnail(/* resource|string */ $file, ?int &$width = NULL, ?int &$height = NULL, ?int &$image_type = NULL): false|string {
		return \exif_thumbnail($file, $width, $height, $image_type);
	}

	/* bookId: book.math ; membership = kCore */
	public function exp(float $num): float {
		return \exp($num);
	}

	/* bookId: book.strings ; membership = kCore */
	public function explode(string $separator, string $string, int $limit = \PHP_INT_MAX): array {
		return \explode($separator, $string, $limit);
	}

	/* bookId: book.math ; membership = kCore */
	public function expm1(float $num): float {
		return \expm1($num);
	}

	/* bookId: book.info ; membership = kCore */
	public function extension_loaded(string $extension): bool {
		return \extension_loaded($extension);
	}

	/* bookId: book.array ; membership = kCore */
	public function extract(array &$array, int $flags = \EXTR_OVERWRITE, string $prefix = ""): int {
		return \extract($array, $flags, $prefix);
	}

	/* bookId: book.mail ; membership = kCore */
	public function ezmlm_hash(string $addr): int {
		return \ezmlm_hash($addr);
	}

	/* bookId: book.fpm ; membership = kCore */
	public function fastcgi_finish_request(): bool {
		return \fastcgi_finish_request();
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fclose(/* resource */ $stream): bool {
		return \fclose($stream);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fdatasync(/* resource */ $stream): bool {
		return \fdatasync($stream);
	}

	/* bookId: book.math ; membership = kCore */
	public function fdiv(float $num1, float $num2): float {
		return \fdiv($num1, $num2);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function feof(/* resource */ $stream): bool {
		return \feof($stream);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fflush(/* resource */ $stream): bool {
		return \fflush($stream);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fgetc(/* resource */ $stream): false|string {
		return \fgetc($stream);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fgetcsv(/* resource */ $stream, ?int $length = NULL, string $separator = ",", string $enclosure = "\"", string $escape = "\\"): array|false {
		return \fgetcsv($stream, $length, $separator, $enclosure, $escape);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fgets(/* resource */ $stream, ?int $length = NULL): false|string {
		return \fgets($stream, $length);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function file(string $filename, int $flags = 0, /* null|resource */ $context = NULL): array|false {
		return \file($filename, $flags, $context);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function file_exists(string $filename): bool {
		return \file_exists($filename);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function file_get_contents(string $filename, bool $use_include_path = false, /* null|resource */ $context = NULL, int $offset = 0, ?int $length = NULL): false|string {
		return \file_get_contents($filename, $use_include_path, $context, $offset, $length);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function file_put_contents(string $filename, mixed $data, int $flags = 0, /* null|resource */ $context = NULL): false|int {
		return \file_put_contents($filename, $data, $flags, $context);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fileatime(string $filename): false|int {
		return \fileatime($filename);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function filectime(string $filename): false|int {
		return \filectime($filename);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function filegroup(string $filename): false|int {
		return \filegroup($filename);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fileinode(string $filename): false|int {
		return \fileinode($filename);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function filemtime(string $filename): false|int {
		return \filemtime($filename);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fileowner(string $filename): false|int {
		return \fileowner($filename);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fileperms(string $filename): false|int {
		return \fileperms($filename);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function filesize(string $filename): false|int {
		return \filesize($filename);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function filetype(string $filename): false|string {
		return \filetype($filename);
	}

	/* bookId: book.filter ; membership = kBundled */
	public function filter_has_var(int $input_type, string $var_name): bool {
		return \filter_has_var($input_type, $var_name);
	}

	/* bookId: book.filter ; membership = kBundled */
	public function filter_id(string $name): false|int {
		return \filter_id($name);
	}

	/* bookId: book.filter ; membership = kBundled */
	public function filter_input(int $type, string $var_name, int $filter = \FILTER_DEFAULT, array|int $options = 0): mixed {
		return \filter_input($type, $var_name, $filter, $options);
	}

	/* bookId: book.filter ; membership = kBundled */
	public function filter_input_array(int $type, array|int $options = \FILTER_DEFAULT, bool $add_empty = true): array|false|null {
		return \filter_input_array($type, $options, $add_empty);
	}

	/* bookId: book.filter ; membership = kBundled */
	public function filter_list(): array {
		return \filter_list();
	}

	/* bookId: book.filter ; membership = kBundled */
	public function filter_var(mixed $value, int $filter = \FILTER_DEFAULT, array|int $options = 0): mixed {
		return \filter_var($value, $filter, $options);
	}

	/* bookId: book.filter ; membership = kBundled */
	public function filter_var_array(array $array, array|int $options = \FILTER_DEFAULT, bool $add_empty = true): array|false|null {
		return \filter_var_array($array, $options, $add_empty);
	}

	/* bookId: book.fileinfo ; membership = kBundled */
	public function finfo_buffer(\finfo $finfo, string $string, int $flags = \FILEINFO_NONE, /* null|resource */ $context = NULL): false|string {
		return \finfo_buffer($finfo, $string, $flags, $context);
	}

	/* bookId: book.fileinfo ; membership = kBundled */
	public function finfo_close(\finfo $finfo): true {
		return \finfo_close($finfo);
	}

	/* bookId: book.fileinfo ; membership = kBundled */
	public function finfo_file(\finfo $finfo, string $filename, int $flags = \FILEINFO_NONE, /* null|resource */ $context = NULL): false|string {
		return \finfo_file($finfo, $filename, $flags, $context);
	}

	/* bookId: book.fileinfo ; membership = kBundled */
	public function finfo_open(int $flags = \FILEINFO_NONE, ?string $magic_database = NULL): false|\finfo {
		return \finfo_open($flags, $magic_database);
	}

	/* bookId: book.fileinfo ; membership = kBundled */
	public function finfo_set_flags(\finfo $finfo, int $flags): true {
		return \finfo_set_flags($finfo, $flags);
	}

	/* bookId: book.var ; membership = kCore */
	public function floatval(mixed $value): float {
		return \floatval($value);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function flock(/* resource */ $stream, int $operation, ?int &$would_block = NULL): bool {
		return \flock($stream, $operation, $would_block);
	}

	/* bookId: book.math ; membership = kCore */
	public function floor(float|int $num): float {
		return \floor($num);
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function flush(): void {
		\flush();
	}

	/* bookId: book.math ; membership = kCore */
	public function fmod(float $num1, float $num2): float {
		return \fmod($num1, $num2);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fnmatch(string $pattern, string $filename, int $flags = 0): bool {
		return \fnmatch($pattern, $filename, $flags);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fopen(string $filename, string $mode, bool $use_include_path = false, /* null|resource */ $context = NULL)/* : false|resource */ {
		return \fopen($filename, $mode, $use_include_path, $context);
	}

	/* bookId: book.funchand ; membership = kCore */
	public function forward_static_call(callable $callback, mixed ...$args): mixed {
		return \forward_static_call($callback, ...$args);
	}

	/* bookId: book.funchand ; membership = kCore */
	public function forward_static_call_array(callable $callback, array $args): mixed {
		return \forward_static_call_array($callback, $args);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fpassthru(/* resource */ $stream): int {
		return \fpassthru($stream);
	}

	/* bookId: book.fpm ; membership = kCore */
	public function fpm_get_status(): array|false {
		return \fpm_get_status();
	}

	/* bookId: book.math ; membership = kCore */
	public function fpow(float $num, float $exponent): float {
		return \fpow($num, $exponent);
	}

	/* bookId: book.strings ; membership = kCore */
	public function fprintf(/* resource */ $stream, string $format, mixed ...$values): int {
		return \fprintf($stream, $format, ...$values);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fputcsv(/* resource */ $stream, array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n"): false|int {
		return \fputcsv($stream, $fields, $separator, $enclosure, $escape, $eol);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fread(/* resource */ $stream, int $length): false|string {
		return \fread($stream, $length);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function frenchtojd(int $month, int $day, int $year): int {
		return \frenchtojd($month, $day, $year);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fscanf(/* resource */ $stream, string $format, mixed &...$vars): array|false|int|null {
		return \fscanf($stream, $format, ...$vars);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fseek(/* resource */ $stream, int $offset, int $whence = \SEEK_SET): int {
		return \fseek($stream, $offset, $whence);
	}

	/* bookId: book.network ; membership = kCore */
	public function fsockopen(string $hostname, int $port = 1, ?int &$error_code = NULL, ?string &$error_message = NULL, ?float $timeout = NULL)/* : false|resource */ {
		return \fsockopen($hostname, $port, $error_code, $error_message, $timeout);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fstat(/* resource */ $stream): array|false {
		return \fstat($stream);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fsync(/* resource */ $stream): bool {
		return \fsync($stream);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function ftell(/* resource */ $stream): false|int {
		return \ftell($stream);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function ftok(string $filename, string $project_id): int {
		return \ftok($filename, $project_id);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_alloc(\FTP\Connection $ftp, int $size, ?string &$response = NULL): bool {
		return \ftp_alloc($ftp, $size, $response);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_append(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = \FTP_BINARY): bool {
		return \ftp_append($ftp, $remote_filename, $local_filename, $mode);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_cdup(\FTP\Connection $ftp): bool {
		return \ftp_cdup($ftp);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_chdir(\FTP\Connection $ftp, string $directory): bool {
		return \ftp_chdir($ftp, $directory);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_chmod(\FTP\Connection $ftp, int $permissions, string $filename): false|int {
		return \ftp_chmod($ftp, $permissions, $filename);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_close(\FTP\Connection $ftp): bool {
		return \ftp_close($ftp);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_connect(string $hostname, int $port = 21, int $timeout = 90): false|\FTP\Connection {
		return \ftp_connect($hostname, $port, $timeout);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_delete(\FTP\Connection $ftp, string $filename): bool {
		return \ftp_delete($ftp, $filename);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_exec(\FTP\Connection $ftp, string $command): bool {
		return \ftp_exec($ftp, $command);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_fget(\FTP\Connection $ftp, /* resource */ $stream, string $remote_filename, int $mode = \FTP_BINARY, int $offset = 0): bool {
		return \ftp_fget($ftp, $stream, $remote_filename, $mode, $offset);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_fput(\FTP\Connection $ftp, string $remote_filename, /* resource */ $stream, int $mode = \FTP_BINARY, int $offset = 0): bool {
		return \ftp_fput($ftp, $remote_filename, $stream, $mode, $offset);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_get(\FTP\Connection $ftp, string $local_filename, string $remote_filename, int $mode = \FTP_BINARY, int $offset = 0): bool {
		return \ftp_get($ftp, $local_filename, $remote_filename, $mode, $offset);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_get_option(\FTP\Connection $ftp, int $option): bool|int {
		return \ftp_get_option($ftp, $option);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_login(\FTP\Connection $ftp, string $username, string $password): bool {
		return \ftp_login($ftp, $username, $password);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_mdtm(\FTP\Connection $ftp, string $filename): int {
		return \ftp_mdtm($ftp, $filename);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_mkdir(\FTP\Connection $ftp, string $directory): false|string {
		return \ftp_mkdir($ftp, $directory);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_mlsd(\FTP\Connection $ftp, string $directory): array|false {
		return \ftp_mlsd($ftp, $directory);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_nb_continue(\FTP\Connection $ftp): int {
		return \ftp_nb_continue($ftp);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_nb_fget(\FTP\Connection $ftp, /* resource */ $stream, string $remote_filename, int $mode = \FTP_BINARY, int $offset = 0): int {
		return \ftp_nb_fget($ftp, $stream, $remote_filename, $mode, $offset);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_nb_fput(\FTP\Connection $ftp, string $remote_filename, /* resource */ $stream, int $mode = \FTP_BINARY, int $offset = 0): int {
		return \ftp_nb_fput($ftp, $remote_filename, $stream, $mode, $offset);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_nb_get(\FTP\Connection $ftp, string $local_filename, string $remote_filename, int $mode = \FTP_BINARY, int $offset = 0): false|int {
		return \ftp_nb_get($ftp, $local_filename, $remote_filename, $mode, $offset);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_nb_put(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = \FTP_BINARY, int $offset = 0): false|int {
		return \ftp_nb_put($ftp, $remote_filename, $local_filename, $mode, $offset);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_nlist(\FTP\Connection $ftp, string $directory): array|false {
		return \ftp_nlist($ftp, $directory);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_pasv(\FTP\Connection $ftp, bool $enable): bool {
		return \ftp_pasv($ftp, $enable);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_put(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = \FTP_BINARY, int $offset = 0): bool {
		return \ftp_put($ftp, $remote_filename, $local_filename, $mode, $offset);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_pwd(\FTP\Connection $ftp): false|string {
		return \ftp_pwd($ftp);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_raw(\FTP\Connection $ftp, string $command): ?array {
		return \ftp_raw($ftp, $command);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_rawlist(\FTP\Connection $ftp, string $directory, bool $recursive = false): array|false {
		return \ftp_rawlist($ftp, $directory, $recursive);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_rename(\FTP\Connection $ftp, string $from, string $to): bool {
		return \ftp_rename($ftp, $from, $to);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_rmdir(\FTP\Connection $ftp, string $directory): bool {
		return \ftp_rmdir($ftp, $directory);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_set_option(\FTP\Connection $ftp, int $option, bool|int $value): true {
		return \ftp_set_option($ftp, $option, $value);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_site(\FTP\Connection $ftp, string $command): bool {
		return \ftp_site($ftp, $command);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_size(\FTP\Connection $ftp, string $filename): int {
		return \ftp_size($ftp, $filename);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_ssl_connect(string $hostname, int $port = 21, int $timeout = 90): false|\FTP\Connection {
		return \ftp_ssl_connect($hostname, $port, $timeout);
	}

	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_systype(\FTP\Connection $ftp): false|string {
		return \ftp_systype($ftp);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function ftruncate(/* resource */ $stream, int $size): bool {
		return \ftruncate($stream, $size);
	}

	/* bookId: book.funchand ; membership = kCore */
	public function func_get_arg(int $position): mixed {
		return \func_get_arg($position);
	}

	/* bookId: book.funchand ; membership = kCore */
	public function func_get_args(): array {
		return \func_get_args();
	}

	/* bookId: book.funchand ; membership = kCore */
	public function func_num_args(): int {
		return \func_num_args();
	}

	/* bookId: book.funchand ; membership = kCore */
	public function function_exists(string $function): bool {
		return \function_exists($function);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function fwrite(/* resource */ $stream, string $data, ?int $length = NULL): false|int {
		return \fwrite($stream, $data, $length);
	}

	/* bookId: book.info ; membership = kCore */
	public function gc_collect_cycles(): int {
		return \gc_collect_cycles();
	}

	/* bookId: book.info ; membership = kCore */
	public function gc_disable(): void {
		\gc_disable();
	}

	/* bookId: book.info ; membership = kCore */
	public function gc_enable(): void {
		\gc_enable();
	}

	/* bookId: book.info ; membership = kCore */
	public function gc_enabled(): bool {
		return \gc_enabled();
	}

	/* bookId: book.info ; membership = kCore */
	public function gc_mem_caches(): int {
		return \gc_mem_caches();
	}

	/* bookId: book.info ; membership = kCore */
	public function gc_status(): array {
		return \gc_status();
	}

	/* bookId: book.image ; membership = kBundled */
	public function gd_info(): array {
		return \gd_info();
	}

	/* bookId: book.misc ; membership = kCore */
	public function get_browser(?string $user_agent = NULL, bool $return_array = false): array|false|object {
		return \get_browser($user_agent, $return_array);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function get_called_class(): string {
		return \get_called_class();
	}

	/* bookId: book.info ; membership = kCore */
	public function get_cfg_var(string $option): array|false|string {
		return \get_cfg_var($option);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function get_class_methods(object|string $object_or_class): array {
		return \get_class_methods($object_or_class);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function get_class_vars(string $class): array {
		return \get_class_vars($class);
	}

	/* bookId: book.info ; membership = kCore */
	public function get_current_user(): string {
		return \get_current_user();
	}

	/* bookId: book.var ; membership = kCore */
	public function get_debug_type(mixed $value): string {
		return \get_debug_type($value);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function get_declared_classes(): array {
		return \get_declared_classes();
	}

	/* bookId: book.classobj ; membership = kCore */
	public function get_declared_interfaces(): array {
		return \get_declared_interfaces();
	}

	/* bookId: book.classobj ; membership = kCore */
	public function get_declared_traits(): array {
		return \get_declared_traits();
	}

	/* bookId: book.info ; membership = kCore */
	public function get_defined_constants(bool $categorize = false): array {
		return \get_defined_constants($categorize);
	}

	/* bookId: book.funchand ; membership = kCore */
	public function get_defined_functions(bool $exclude_disabled = true): array {
		return \get_defined_functions($exclude_disabled);
	}

	/* bookId: book.var ; membership = kCore */
	public function get_defined_vars(): array {
		return \get_defined_vars();
	}

	/* bookId: book.errorfunc ; membership = kCore */
	public function get_error_handler(): ?callable {
		return \get_error_handler();
	}

	/* bookId: book.errorfunc ; membership = kCore */
	public function get_exception_handler(): ?callable {
		return \get_exception_handler();
	}

	/* bookId: book.info ; membership = kCore */
	public function get_extension_funcs(string $extension): array|false {
		return \get_extension_funcs($extension);
	}

	/* bookId: book.url ; membership = kCore */
	public function get_headers(string $url, bool $associative = false, /* null|resource */ $context = NULL): array|false {
		return \get_headers($url, $associative, $context);
	}

	/* bookId: book.strings ; membership = kCore */
	public function get_html_translation_table(int $table = \HTML_SPECIALCHARS, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, string $encoding = "UTF-8"): array {
		return \get_html_translation_table($table, $flags, $encoding);
	}

	/* bookId: book.info ; membership = kCore */
	public function get_include_path(): false|string {
		return \get_include_path();
	}

	/* bookId: book.info ; membership = kCore */
	public function get_included_files(): array {
		return \get_included_files();
	}

	/* bookId: book.info ; membership = kCore */
	public function get_loaded_extensions(bool $zend_extensions = false): array {
		return \get_loaded_extensions($zend_extensions);
	}

	/* bookId: book.info ; membership = kCore */
	public function get_magic_quotes_gpc(): false {
		return \get_magic_quotes_gpc();
	}

	/* bookId: book.info ; membership = kCore */
	public function get_magic_quotes_runtime(): false {
		return \get_magic_quotes_runtime();
	}

	/* bookId: book.classobj ; membership = kCore */
	public function get_mangled_object_vars(object $object): array {
		return \get_mangled_object_vars($object);
	}

	/* bookId: book.url ; membership = kCore */
	public function get_meta_tags(string $filename, bool $use_include_path = false): array|false {
		return \get_meta_tags($filename, $use_include_path);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function get_object_vars(object $object): array {
		return \get_object_vars($object);
	}

	/* bookId: book.var ; membership = kCore */
	public function get_resource_id(/* resource */ $resource): int {
		return \get_resource_id($resource);
	}

	/* bookId: book.var ; membership = kCore */
	public function get_resource_type(/* resource */ $resource): string {
		return \get_resource_type($resource);
	}

	/* bookId: book.info ; membership = kCore */
	public function get_resources(?string $type = NULL): array {
		return \get_resources($type);
	}

	/* bookId: book.apache ; membership = kBundled */
	public function getallheaders(): array {
		return \getallheaders();
	}

	/* bookId: book.dir ; membership = kCore */
	public function getcwd(): false|string {
		return \getcwd();
	}

	/* bookId: book.datetime ; membership = kCore */
	public function getdate(?int $timestamp = NULL): array {
		return \getdate($timestamp);
	}

	/* bookId: book.info ; membership = kCore */
	public function getenv(?string $name = NULL, bool $local_only = false): array|false|string {
		return \getenv($name, $local_only);
	}

	/* bookId: book.network ; membership = kCore */
	public function gethostbyaddr(string $ip): false|string {
		return \gethostbyaddr($ip);
	}

	/* bookId: book.network ; membership = kCore */
	public function gethostbyname(string $hostname): string {
		return \gethostbyname($hostname);
	}

	/* bookId: book.network ; membership = kCore */
	public function gethostbynamel(string $hostname): array|false {
		return \gethostbynamel($hostname);
	}

	/* bookId: book.network ; membership = kCore */
	public function gethostname(): false|string {
		return \gethostname();
	}

	/* bookId: book.image ; membership = kBundled */
	public function getimagesize(string $filename, ?array &$image_info = NULL): array|false {
		return \getimagesize($filename, $image_info);
	}

	/* bookId: book.image ; membership = kBundled */
	public function getimagesizefromstring(string $string, ?array &$image_info = NULL): array|false {
		return \getimagesizefromstring($string, $image_info);
	}

	/* bookId: book.info ; membership = kCore */
	public function getlastmod(): false|int {
		return \getlastmod();
	}

	/* bookId: book.network ; membership = kCore */
	public function getmxrr(string $hostname, array &$hosts, ?array &$weights = NULL): bool {
		return \getmxrr($hostname, $hosts, $weights);
	}

	/* bookId: book.info ; membership = kCore */
	public function getmygid(): false|int {
		return \getmygid();
	}

	/* bookId: book.info ; membership = kCore */
	public function getmyinode(): false|int {
		return \getmyinode();
	}

	/* bookId: book.info ; membership = kCore */
	public function getmypid(): false|int {
		return \getmypid();
	}

	/* bookId: book.info ; membership = kCore */
	public function getmyuid(): false|int {
		return \getmyuid();
	}

	/* bookId: book.info ; membership = kCore */
	public function getopt(string $short_options, array $long_options = [], ?int &$rest_index = NULL): array|false {
		return \getopt($short_options, $long_options, $rest_index);
	}

	/* bookId: book.network ; membership = kCore */
	public function getprotobyname(string $protocol): false|int {
		return \getprotobyname($protocol);
	}

	/* bookId: book.network ; membership = kCore */
	public function getprotobynumber(int $protocol): false|string {
		return \getprotobynumber($protocol);
	}

	/* bookId: book.random ; membership = kCore */
	public function getrandmax(): int {
		return \getrandmax();
	}

	/* bookId: book.info ; membership = kCore */
	public function getrusage(int $mode = 0): array|false {
		return \getrusage($mode);
	}

	/* bookId: book.network ; membership = kCore */
	public function getservbyname(string $service, string $protocol): false|int {
		return \getservbyname($service, $protocol);
	}

	/* bookId: book.network ; membership = kCore */
	public function getservbyport(int $port, string $protocol): false|string {
		return \getservbyport($port, $protocol);
	}

	/* bookId: book.gettext ; membership = kBundledExternal */
	public function gettext(string $message): string {
		return \gettext($message);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function gettimeofday(bool $as_float = false): array|float {
		return \gettimeofday($as_float);
	}

	/* bookId: book.var ; membership = kCore */
	public function gettype(mixed $value): string {
		return \gettype($value);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function glob(string $pattern, int $flags = 0): array|false {
		return \glob($pattern, $flags);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function gmdate(string $format, ?int $timestamp = NULL): string {
		return \gmdate($format, $timestamp);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function gmmktime(int $hour, ?int $minute = NULL, ?int $second = NULL, ?int $month = NULL, ?int $day = NULL, ?int $year = NULL): false|int {
		return \gmmktime($hour, $minute, $second, $month, $day, $year);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_abs(int|string|\GMP $num): \GMP {
		return \gmp_abs($num);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_add(int|string|\GMP $num1, int|string|\GMP $num2): \GMP {
		return \gmp_add($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_and(int|string|\GMP $num1, int|string|\GMP $num2): \GMP {
		return \gmp_and($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_binomial(int|string|\GMP $n, int $k): \GMP {
		return \gmp_binomial($n, $k);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_clrbit(\GMP $num, int $index): void {
		\gmp_clrbit($num, $index);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_cmp(int|string|\GMP $num1, int|string|\GMP $num2): int {
		return \gmp_cmp($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_com(int|string|\GMP $num): \GMP {
		return \gmp_com($num);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_div_q(int|string|\GMP $num1, int|string|\GMP $num2, int $rounding_mode = \GMP_ROUND_ZERO): \GMP {
		return \gmp_div_q($num1, $num2, $rounding_mode);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_div_qr(int|string|\GMP $num1, int|string|\GMP $num2, int $rounding_mode = \GMP_ROUND_ZERO): array {
		return \gmp_div_qr($num1, $num2, $rounding_mode);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_div_r(int|string|\GMP $num1, int|string|\GMP $num2, int $rounding_mode = \GMP_ROUND_ZERO): \GMP {
		return \gmp_div_r($num1, $num2, $rounding_mode);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_divexact(int|string|\GMP $num1, int|string|\GMP $num2): \GMP {
		return \gmp_divexact($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_export(int|string|\GMP $num, int $word_size = 1, int $flags = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN): string {
		return \gmp_export($num, $word_size, $flags);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_fact(int|string|\GMP $num): \GMP {
		return \gmp_fact($num);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_gcd(int|string|\GMP $num1, int|string|\GMP $num2): \GMP {
		return \gmp_gcd($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_gcdext(int|string|\GMP $num1, int|string|\GMP $num2): array {
		return \gmp_gcdext($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_hamdist(int|string|\GMP $num1, int|string|\GMP $num2): int {
		return \gmp_hamdist($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_import(string $data, int $word_size = 1, int $flags = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN): \GMP {
		return \gmp_import($data, $word_size, $flags);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_init(int|string $num, int $base = 0): \GMP {
		return \gmp_init($num, $base);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_intval(int|string|\GMP $num): int {
		return \gmp_intval($num);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_invert(int|string|\GMP $num1, int|string|\GMP $num2): false|\GMP {
		return \gmp_invert($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_jacobi(int|string|\GMP $num1, int|string|\GMP $num2): int {
		return \gmp_jacobi($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_kronecker(int|string|\GMP $num1, int|string|\GMP $num2): int {
		return \gmp_kronecker($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_lcm(int|string|\GMP $num1, int|string|\GMP $num2): \GMP {
		return \gmp_lcm($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_legendre(int|string|\GMP $num1, int|string|\GMP $num2): int {
		return \gmp_legendre($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_mod(int|string|\GMP $num1, int|string|\GMP $num2): \GMP {
		return \gmp_mod($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_mul(int|string|\GMP $num1, int|string|\GMP $num2): \GMP {
		return \gmp_mul($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_neg(int|string|\GMP $num): \GMP {
		return \gmp_neg($num);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_nextprime(int|string|\GMP $num): \GMP {
		return \gmp_nextprime($num);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_or(int|string|\GMP $num1, int|string|\GMP $num2): \GMP {
		return \gmp_or($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_perfect_power(int|string|\GMP $num): bool {
		return \gmp_perfect_power($num);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_perfect_square(int|string|\GMP $num): bool {
		return \gmp_perfect_square($num);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_popcount(int|string|\GMP $num): int {
		return \gmp_popcount($num);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_pow(int|string|\GMP $num, int $exponent): \GMP {
		return \gmp_pow($num, $exponent);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_powm(int|string|\GMP $num, int|string|\GMP $exponent, int|string|\GMP $modulus): \GMP {
		return \gmp_powm($num, $exponent, $modulus);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_prob_prime(int|string|\GMP $num, int $repetitions = 10): int {
		return \gmp_prob_prime($num, $repetitions);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_random(int $limiter = 20): \GMP {
		return \gmp_random($limiter);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_random_bits(int $bits): \GMP {
		return \gmp_random_bits($bits);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_random_range(int|string|\GMP $min, int|string|\GMP $max): \GMP {
		return \gmp_random_range($min, $max);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_random_seed(int|string|\GMP $seed): void {
		\gmp_random_seed($seed);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_root(int|string|\GMP $num, int $nth): \GMP {
		return \gmp_root($num, $nth);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_rootrem(int|string|\GMP $num, int $nth): array {
		return \gmp_rootrem($num, $nth);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_scan0(int|string|\GMP $num1, int $start): int {
		return \gmp_scan0($num1, $start);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_scan1(int|string|\GMP $num1, int $start): int {
		return \gmp_scan1($num1, $start);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_setbit(\GMP $num, int $index, bool $value = true): void {
		\gmp_setbit($num, $index, $value);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_sign(int|string|\GMP $num): int {
		return \gmp_sign($num);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_sqrt(int|string|\GMP $num): \GMP {
		return \gmp_sqrt($num);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_sqrtrem(int|string|\GMP $num): array {
		return \gmp_sqrtrem($num);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_strval(int|string|\GMP $num, int $base = 10): string {
		return \gmp_strval($num, $base);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_sub(int|string|\GMP $num1, int|string|\GMP $num2): \GMP {
		return \gmp_sub($num1, $num2);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_testbit(int|string|\GMP $num, int $index): bool {
		return \gmp_testbit($num, $index);
	}

	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_xor(int|string|\GMP $num1, int|string|\GMP $num2): \GMP {
		return \gmp_xor($num1, $num2);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function gmstrftime(string $format, ?int $timestamp = NULL): false|string {
		return \gmstrftime($format, $timestamp);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_extract(string $haystack, int $size, int $type = \GRAPHEME_EXTR_COUNT, int $offset = 0, ?int &$next = NULL): false|string {
		return \grapheme_extract($haystack, $size, $type, $offset, $next);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_levenshtein(string $string1, string $string2, int $insertion_cost = 1, int $replacement_cost = 1, int $deletion_cost = 1, string $locale = ""): false|int {
		return \grapheme_levenshtein($string1, $string2, $insertion_cost, $replacement_cost, $deletion_cost, $locale);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_str_split(string $string, int $length = 1): array|false {
		return \grapheme_str_split($string, $length);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_stripos(string $haystack, string $needle, int $offset = 0, string $locale = ""): false|int {
		return \grapheme_stripos($haystack, $needle, $offset, $locale);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_stristr(string $haystack, string $needle, bool $beforeNeedle = false, string $locale = ""): false|string {
		return \grapheme_stristr($haystack, $needle, $beforeNeedle, $locale);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_strlen(string $string): false|int|null {
		return \grapheme_strlen($string);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_strpos(string $haystack, string $needle, int $offset = 0, string $locale = ""): false|int {
		return \grapheme_strpos($haystack, $needle, $offset, $locale);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_strripos(string $haystack, string $needle, int $offset = 0, string $locale = ""): false|int {
		return \grapheme_strripos($haystack, $needle, $offset, $locale);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_strrpos(string $haystack, string $needle, int $offset = 0, string $locale = ""): false|int {
		return \grapheme_strrpos($haystack, $needle, $offset, $locale);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_strstr(string $haystack, string $needle, bool $beforeNeedle = false, string $locale = ""): false|string {
		return \grapheme_strstr($haystack, $needle, $beforeNeedle, $locale);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_substr(string $string, int $offset, ?int $length = NULL, string $locale = ""): false|string {
		return \grapheme_substr($string, $offset, $length, $locale);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function gregoriantojd(int $month, int $day, int $year): int {
		return \gregoriantojd($month, $day, $year);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzclose(/* resource */ $stream): bool {
		return \gzclose($stream);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzcompress(string $data, int $level = 1, int $encoding = \ZLIB_ENCODING_DEFLATE): false|string {
		return \gzcompress($data, $level, $encoding);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzdecode(string $data, int $max_length = 0): false|string {
		return \gzdecode($data, $max_length);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzdeflate(string $data, int $level = 1, int $encoding = \ZLIB_ENCODING_RAW): false|string {
		return \gzdeflate($data, $level, $encoding);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzencode(string $data, int $level = 1, int $encoding = \ZLIB_ENCODING_GZIP): false|string {
		return \gzencode($data, $level, $encoding);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzeof(/* resource */ $stream): bool {
		return \gzeof($stream);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzfile(string $filename, bool $use_include_path = false): array|false {
		return \gzfile($filename, $use_include_path);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzgetc(/* resource */ $stream): false|string {
		return \gzgetc($stream);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzgets(/* resource */ $stream, ?int $length = NULL): false|string {
		return \gzgets($stream, $length);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzinflate(string $data, int $max_length = 0): false|string {
		return \gzinflate($data, $max_length);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzopen(string $filename, string $mode, bool $use_include_path = false)/* : false|resource */ {
		return \gzopen($filename, $mode, $use_include_path);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzpassthru(/* resource */ $stream): int {
		return \gzpassthru($stream);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzread(/* resource */ $stream, int $length): false|string {
		return \gzread($stream, $length);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzrewind(/* resource */ $stream): bool {
		return \gzrewind($stream);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzseek(/* resource */ $stream, int $offset, int $whence = \SEEK_SET): int {
		return \gzseek($stream, $offset, $whence);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gztell(/* resource */ $stream): false|int {
		return \gztell($stream);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzuncompress(string $data, int $max_length = 0): false|string {
		return \gzuncompress($data, $max_length);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function gzwrite(/* resource */ $stream, string $data, ?int $length = NULL): false|int {
		return \gzwrite($stream, $data, $length);
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash(string $algo, string $data, bool $binary = false, array $options = []): string {
		return \hash($algo, $data, $binary, $options);
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash_algos(): array {
		return \hash_algos();
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash_copy(\HashContext $context): \HashContext {
		return \hash_copy($context);
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash_equals(string $known_string, string $user_string): bool {
		return \hash_equals($known_string, $user_string);
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash_file(string $algo, string $filename, bool $binary = false, array $options = []): false|string {
		return \hash_file($algo, $filename, $binary, $options);
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash_final(\HashContext $context, bool $binary = false): string {
		return \hash_final($context, $binary);
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash_hkdf(string $algo, string $key, int $length = 0, string $info = "", string $salt = ""): string {
		return \hash_hkdf($algo, $key, $length, $info, $salt);
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash_hmac(string $algo, string $data, string $key, bool $binary = false): string {
		return \hash_hmac($algo, $data, $key, $binary);
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash_hmac_algos(): array {
		return \hash_hmac_algos();
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash_hmac_file(string $algo, string $filename, string $key, bool $binary = false): false|string {
		return \hash_hmac_file($algo, $filename, $key, $binary);
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash_init(string $algo, int $flags = 0, string $key = "", array $options = []): \HashContext {
		return \hash_init($algo, $flags, $key, $options);
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash_pbkdf2(string $algo, string $password, string $salt, int $iterations, int $length = 0, bool $binary = false, array $options = []): string {
		return \hash_pbkdf2($algo, $password, $salt, $iterations, $length, $binary, $options);
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash_update(\HashContext $context, string $data): true {
		return \hash_update($context, $data);
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash_update_file(\HashContext $context, string $filename, /* null|resource */ $stream_context = NULL): bool {
		return \hash_update_file($context, $filename, $stream_context);
	}

	/* bookId: book.hash ; membership = kCore */
	public function hash_update_stream(\HashContext $context, /* resource */ $stream, int $length = 1): int {
		return \hash_update_stream($context, $stream, $length);
	}

	/* bookId: book.network ; membership = kCore */
	public function header(string $header, bool $replace = true, int $response_code = 0): void {
		\header($header, $replace, $response_code);
	}

	/* bookId: book.network ; membership = kCore */
	public function header_register_callback(callable $callback): bool {
		return \header_register_callback($callback);
	}

	/* bookId: book.network ; membership = kCore */
	public function header_remove(?string $name = NULL): void {
		\header_remove($name);
	}

	/* bookId: book.network ; membership = kCore */
	public function headers_list(): array {
		return \headers_list();
	}

	/* bookId: book.network ; membership = kCore */
	public function headers_sent(?string &$filename = NULL, ?int &$line = NULL): bool {
		return \headers_sent($filename, $line);
	}

	/* bookId: book.strings ; membership = kCore */
	public function hebrev(string $string, int $max_chars_per_line = 0): string {
		return \hebrev($string, $max_chars_per_line);
	}

	/* bookId: book.strings ; membership = kCore */
	public function hebrevc(string $hebrew_text, int $max_chars_per_line = 0): string {
		return \hebrevc($hebrew_text, $max_chars_per_line);
	}

	/* bookId: book.strings ; membership = kCore */
	public function hex2bin(string $string): false|string {
		return \hex2bin($string);
	}

	/* bookId: book.math ; membership = kCore */
	public function hexdec(string $hex_string): float|int {
		return \hexdec($hex_string);
	}

	/* bookId: book.misc ; membership = kCore */
	public function highlight_file(string $filename, bool $return = false): bool|string {
		return \highlight_file($filename, $return);
	}

	/* bookId: book.misc ; membership = kCore */
	public function highlight_string(string $string, bool $return = false): string|true {
		return \highlight_string($string, $return);
	}

	/* bookId: book.misc ; membership = kCore */
	public function hrtime(bool $as_number = false): array|false|float|int {
		return \hrtime($as_number);
	}

	/* bookId: book.strings ; membership = kCore */
	public function html_entity_decode(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = NULL): string {
		return \html_entity_decode($string, $flags, $encoding);
	}

	/* bookId: book.strings ; membership = kCore */
	public function htmlentities(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = NULL, bool $double_encode = true): string {
		return \htmlentities($string, $flags, $encoding, $double_encode);
	}

	/* bookId: book.strings ; membership = kCore */
	public function htmlspecialchars(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = NULL, bool $double_encode = true): string {
		return \htmlspecialchars($string, $flags, $encoding, $double_encode);
	}

	/* bookId: book.strings ; membership = kCore */
	public function htmlspecialchars_decode(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401): string {
		return \htmlspecialchars_decode($string, $flags);
	}

	/* bookId: book.url ; membership = kCore */
	public function http_build_query(array|object $data, string $numeric_prefix = "", ?string $arg_separator = NULL, int $encoding_type = \PHP_QUERY_RFC1738): string {
		return \http_build_query($data, $numeric_prefix, $arg_separator, $encoding_type);
	}

	/* bookId: book.network ; membership = kCore */
	public function http_clear_last_response_headers(): void {
		\http_clear_last_response_headers();
	}

	/* bookId: book.network ; membership = kCore */
	public function http_get_last_response_headers(): ?array {
		return \http_get_last_response_headers();
	}

	/* bookId: book.network ; membership = kCore */
	public function http_response_code(int $response_code = 0): bool|int {
		return \http_response_code($response_code);
	}

	/* bookId: book.math ; membership = kCore */
	public function hypot(float $x, float $y): float {
		return \hypot($x, $y);
	}

	/* bookId: book.iconv ; membership = kBundled */
	public function iconv(string $from_encoding, string $to_encoding, string $string): false|string {
		return \iconv($from_encoding, $to_encoding, $string);
	}

	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_get_encoding(string $type = "all"): array|false|string {
		return \iconv_get_encoding($type);
	}

	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_mime_decode(string $string, int $mode = 0, ?string $encoding = NULL): false|string {
		return \iconv_mime_decode($string, $mode, $encoding);
	}

	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_mime_decode_headers(string $headers, int $mode = 0, ?string $encoding = NULL): array|false {
		return \iconv_mime_decode_headers($headers, $mode, $encoding);
	}

	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_mime_encode(string $field_name, string $field_value, array $options = []): false|string {
		return \iconv_mime_encode($field_name, $field_value, $options);
	}

	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_set_encoding(string $type, string $encoding): bool {
		return \iconv_set_encoding($type, $encoding);
	}

	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_strlen(string $string, ?string $encoding = NULL): false|int {
		return \iconv_strlen($string, $encoding);
	}

	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_strpos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): false|int {
		return \iconv_strpos($haystack, $needle, $offset, $encoding);
	}

	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_strrpos(string $haystack, string $needle, ?string $encoding = NULL): false|int {
		return \iconv_strrpos($haystack, $needle, $encoding);
	}

	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_substr(string $string, int $offset, ?int $length = NULL, ?string $encoding = NULL): false|string {
		return \iconv_substr($string, $offset, $length, $encoding);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function idate(string $format, ?int $timestamp = NULL): false|int {
		return \idate($format, $timestamp);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function idn_to_ascii(string $domain, int $flags = \IDNA_DEFAULT, int $variant = \INTL_IDNA_VARIANT_UTS46, ?array &$idna_info = NULL): false|string {
		return \idn_to_ascii($domain, $flags, $variant, $idna_info);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function idn_to_utf8(string $domain, int $flags = \IDNA_DEFAULT, int $variant = \INTL_IDNA_VARIANT_UTS46, ?array &$idna_info = NULL): false|string {
		return \idn_to_utf8($domain, $flags, $variant, $idna_info);
	}

	/* bookId: book.misc ; membership = kCore */
	public function ignore_user_abort(?bool $enable = NULL): int {
		return \ignore_user_abort($enable);
	}

	/* bookId: book.image ; membership = kBundled */
	public function image_type_to_extension(int $image_type, bool $include_dot = true): false|string {
		return \image_type_to_extension($image_type, $include_dot);
	}

	/* bookId: book.image ; membership = kBundled */
	public function image_type_to_mime_type(int $image_type): string {
		return \image_type_to_mime_type($image_type);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageaffine(\GdImage $image, array $affine, ?array $clip = NULL): false|\GdImage {
		return \imageaffine($image, $affine, $clip);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageaffinematrixconcat(array $matrix1, array $matrix2): array|false {
		return \imageaffinematrixconcat($matrix1, $matrix2);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageaffinematrixget(int $type, array|float $options): array|false {
		return \imageaffinematrixget($type, $options);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagealphablending(\GdImage $image, bool $enable): true {
		return \imagealphablending($image, $enable);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageantialias(\GdImage $image, bool $enable): true {
		return \imageantialias($image, $enable);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagearc(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $start_angle, int $end_angle, int $color): true {
		return \imagearc($image, $center_x, $center_y, $width, $height, $start_angle, $end_angle, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageavif(\GdImage $image, /* null|resource|string */ $file = NULL, int $quality = 1, int $speed = 1): bool {
		return \imageavif($image, $file, $quality, $speed);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagebmp(\GdImage $image, /* null|resource|string */ $file = NULL, bool $compressed = true): bool {
		return \imagebmp($image, $file, $compressed);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagechar(\GdImage $image, int|\GdFont $font, int $x, int $y, string $char, int $color): true {
		return \imagechar($image, $font, $x, $y, $char, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecharup(\GdImage $image, int|\GdFont $font, int $x, int $y, string $char, int $color): true {
		return \imagecharup($image, $font, $x, $y, $char, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolorallocate(\GdImage $image, int $red, int $green, int $blue): false|int {
		return \imagecolorallocate($image, $red, $green, $blue);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolorallocatealpha(\GdImage $image, int $red, int $green, int $blue, int $alpha): false|int {
		return \imagecolorallocatealpha($image, $red, $green, $blue, $alpha);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolorat(\GdImage $image, int $x, int $y): false|int {
		return \imagecolorat($image, $x, $y);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolorclosest(\GdImage $image, int $red, int $green, int $blue): int {
		return \imagecolorclosest($image, $red, $green, $blue);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolorclosestalpha(\GdImage $image, int $red, int $green, int $blue, int $alpha): int {
		return \imagecolorclosestalpha($image, $red, $green, $blue, $alpha);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolorclosesthwb(\GdImage $image, int $red, int $green, int $blue): int {
		return \imagecolorclosesthwb($image, $red, $green, $blue);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolordeallocate(\GdImage $image, int $color): true {
		return \imagecolordeallocate($image, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolorexact(\GdImage $image, int $red, int $green, int $blue): int {
		return \imagecolorexact($image, $red, $green, $blue);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolorexactalpha(\GdImage $image, int $red, int $green, int $blue, int $alpha): int {
		return \imagecolorexactalpha($image, $red, $green, $blue, $alpha);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolormatch(\GdImage $image1, \GdImage $image2): true {
		return \imagecolormatch($image1, $image2);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolorresolve(\GdImage $image, int $red, int $green, int $blue): int {
		return \imagecolorresolve($image, $red, $green, $blue);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolorresolvealpha(\GdImage $image, int $red, int $green, int $blue, int $alpha): int {
		return \imagecolorresolvealpha($image, $red, $green, $blue, $alpha);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolorset(\GdImage $image, int $color, int $red, int $green, int $blue, int $alpha = 0): ?false {
		return \imagecolorset($image, $color, $red, $green, $blue, $alpha);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolorsforindex(\GdImage $image, int $color): array {
		return \imagecolorsforindex($image, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolorstotal(\GdImage $image): int {
		return \imagecolorstotal($image);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecolortransparent(\GdImage $image, ?int $color = NULL): int {
		return \imagecolortransparent($image, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageconvolution(\GdImage $image, array $matrix, float $divisor, float $offset): bool {
		return \imageconvolution($image, $matrix, $divisor, $offset);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecopy(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height): true {
		return \imagecopy($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $src_width, $src_height);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecopymerge(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height, int $pct): true {
		return \imagecopymerge($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $src_width, $src_height, $pct);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecopymergegray(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height, int $pct): true {
		return \imagecopymergegray($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $src_width, $src_height, $pct);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecopyresampled(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_width, int $dst_height, int $src_width, int $src_height): true {
		return \imagecopyresampled($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_width, $dst_height, $src_width, $src_height);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecopyresized(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_width, int $dst_height, int $src_width, int $src_height): true {
		return \imagecopyresized($dst_image, $src_image, $dst_x, $dst_y, $src_x, $src_y, $dst_width, $dst_height, $src_width, $src_height);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreate(int $width, int $height): false|\GdImage {
		return \imagecreate($width, $height);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromavif(string $filename): false|\GdImage {
		return \imagecreatefromavif($filename);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefrombmp(string $filename): false|\GdImage {
		return \imagecreatefrombmp($filename);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromgd(string $filename): false|\GdImage {
		return \imagecreatefromgd($filename);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromgd2(string $filename): false|\GdImage {
		return \imagecreatefromgd2($filename);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromgd2part(string $filename, int $x, int $y, int $width, int $height): false|\GdImage {
		return \imagecreatefromgd2part($filename, $x, $y, $width, $height);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromgif(string $filename): false|\GdImage {
		return \imagecreatefromgif($filename);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromjpeg(string $filename): false|\GdImage {
		return \imagecreatefromjpeg($filename);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefrompng(string $filename): false|\GdImage {
		return \imagecreatefrompng($filename);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromstring(string $data): false|\GdImage {
		return \imagecreatefromstring($data);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromtga(string $filename): false|\GdImage {
		return \imagecreatefromtga($filename);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromwbmp(string $filename): false|\GdImage {
		return \imagecreatefromwbmp($filename);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromwebp(string $filename): false|\GdImage {
		return \imagecreatefromwebp($filename);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromxbm(string $filename): false|\GdImage {
		return \imagecreatefromxbm($filename);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromxpm(string $filename): false|\GdImage {
		return \imagecreatefromxpm($filename);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecreatetruecolor(int $width, int $height): false|\GdImage {
		return \imagecreatetruecolor($width, $height);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecrop(\GdImage $image, array $rectangle): false|\GdImage {
		return \imagecrop($image, $rectangle);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagecropauto(\GdImage $image, int $mode = \IMG_CROP_DEFAULT, float $threshold = 0.5, int $color = 1): false|\GdImage {
		return \imagecropauto($image, $mode, $threshold, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagedashedline(\GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color): true {
		return \imagedashedline($image, $x1, $y1, $x2, $y2, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagedestroy(\GdImage $image): true {
		return \imagedestroy($image);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageellipse(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $color): true {
		return \imageellipse($image, $center_x, $center_y, $width, $height, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagefill(\GdImage $image, int $x, int $y, int $color): true {
		return \imagefill($image, $x, $y, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagefilledarc(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $start_angle, int $end_angle, int $color, int $style): true {
		return \imagefilledarc($image, $center_x, $center_y, $width, $height, $start_angle, $end_angle, $color, $style);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagefilledellipse(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $color): true {
		return \imagefilledellipse($image, $center_x, $center_y, $width, $height, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagefilledpolygon(\GdImage $image, array $points, int $color): bool {
		return \imagefilledpolygon($image, $points, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagefilledrectangle(\GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color): true {
		return \imagefilledrectangle($image, $x1, $y1, $x2, $y2, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagefilltoborder(\GdImage $image, int $x, int $y, int $border_color, int $color): true {
		return \imagefilltoborder($image, $x, $y, $border_color, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagefilter(\GdImage $image, int $filter, array|bool|float|int ...$args): bool {
		return \imagefilter($image, $filter, ...$args);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageflip(\GdImage $image, int $mode): true {
		return \imageflip($image, $mode);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagefontheight(int|\GdFont $font): int {
		return \imagefontheight($font);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagefontwidth(int|\GdFont $font): int {
		return \imagefontwidth($font);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageftbbox(float $size, float $angle, string $font_filename, string $string, array $options = []): array|false {
		return \imageftbbox($size, $angle, $font_filename, $string, $options);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagefttext(\GdImage $image, float $size, float $angle, int $x, int $y, int $color, string $font_filename, string $text, array $options = []): array|false {
		return \imagefttext($image, $size, $angle, $x, $y, $color, $font_filename, $text, $options);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagegammacorrect(\GdImage $image, float $input_gamma, float $output_gamma): true {
		return \imagegammacorrect($image, $input_gamma, $output_gamma);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagegd(\GdImage $image, ?string $file = NULL): bool {
		return \imagegd($image, $file);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagegd2(\GdImage $image, ?string $file = NULL, int $chunk_size = 128, int $mode = \IMG_GD2_RAW): bool {
		return \imagegd2($image, $file, $chunk_size, $mode);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagegetclip(\GdImage $image): array {
		return \imagegetclip($image);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagegetinterpolation(\GdImage $image): int {
		return \imagegetinterpolation($image);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagegif(\GdImage $image, /* null|resource|string */ $file = NULL): bool {
		return \imagegif($image, $file);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagegrabscreen(): false|\GdImage {
		return \imagegrabscreen();
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagegrabwindow(int $handle, bool $client_area = false): false|\GdImage {
		return \imagegrabwindow($handle, $client_area);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageinterlace(\GdImage $image, ?bool $enable = NULL): bool {
		return \imageinterlace($image, $enable);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageistruecolor(\GdImage $image): bool {
		return \imageistruecolor($image);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagejpeg(\GdImage $image, /* null|resource|string */ $file = NULL, int $quality = 1): bool {
		return \imagejpeg($image, $file, $quality);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagelayereffect(\GdImage $image, int $effect): true {
		return \imagelayereffect($image, $effect);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageline(\GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color): true {
		return \imageline($image, $x1, $y1, $x2, $y2, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageloadfont(string $filename): false|\GdFont {
		return \imageloadfont($filename);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageopenpolygon(\GdImage $image, array $points, int $color): bool {
		return \imageopenpolygon($image, $points, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagepalettecopy(\GdImage $dst, \GdImage $src): void {
		\imagepalettecopy($dst, $src);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagepalettetotruecolor(\GdImage $image): bool {
		return \imagepalettetotruecolor($image);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagepng(\GdImage $image, /* null|resource|string */ $file = NULL, int $quality = 1, int $filters = 1): bool {
		return \imagepng($image, $file, $quality, $filters);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagepolygon(\GdImage $image, array $points, int $color): bool {
		return \imagepolygon($image, $points, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagerectangle(\GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color): true {
		return \imagerectangle($image, $x1, $y1, $x2, $y2, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imageresolution(\GdImage $image, ?int $resolution_x = NULL, ?int $resolution_y = NULL): array|true {
		return \imageresolution($image, $resolution_x, $resolution_y);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagerotate(\GdImage $image, float $angle, int $background_color): false|\GdImage {
		return \imagerotate($image, $angle, $background_color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagesavealpha(\GdImage $image, bool $enable): true {
		return \imagesavealpha($image, $enable);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagescale(\GdImage $image, int $width, int $height = 1, int $mode = \IMG_BILINEAR_FIXED): false|\GdImage {
		return \imagescale($image, $width, $height, $mode);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagesetbrush(\GdImage $image, \GdImage $brush): true {
		return \imagesetbrush($image, $brush);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagesetclip(\GdImage $image, int $x1, int $y1, int $x2, int $y2): true {
		return \imagesetclip($image, $x1, $y1, $x2, $y2);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagesetinterpolation(\GdImage $image, int $method = \IMG_BILINEAR_FIXED): bool {
		return \imagesetinterpolation($image, $method);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagesetpixel(\GdImage $image, int $x, int $y, int $color): true {
		return \imagesetpixel($image, $x, $y, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagesetstyle(\GdImage $image, array $style): bool {
		return \imagesetstyle($image, $style);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagesetthickness(\GdImage $image, int $thickness): true {
		return \imagesetthickness($image, $thickness);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagesettile(\GdImage $image, \GdImage $tile): true {
		return \imagesettile($image, $tile);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagestring(\GdImage $image, int|\GdFont $font, int $x, int $y, string $string, int $color): true {
		return \imagestring($image, $font, $x, $y, $string, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagestringup(\GdImage $image, int|\GdFont $font, int $x, int $y, string $string, int $color): true {
		return \imagestringup($image, $font, $x, $y, $string, $color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagesx(\GdImage $image): int {
		return \imagesx($image);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagesy(\GdImage $image): int {
		return \imagesy($image);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagetruecolortopalette(\GdImage $image, bool $dither, int $num_colors): bool {
		return \imagetruecolortopalette($image, $dither, $num_colors);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagettfbbox(float $size, float $angle, string $font_filename, string $string, array $options = []): array|false {
		return \imagettfbbox($size, $angle, $font_filename, $string, $options);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagettftext(\GdImage $image, float $size, float $angle, int $x, int $y, int $color, string $font_filename, string $text, array $options = []): array|false {
		return \imagettftext($image, $size, $angle, $x, $y, $color, $font_filename, $text, $options);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagetypes(): int {
		return \imagetypes();
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagewbmp(\GdImage $image, /* null|resource|string */ $file = NULL, ?int $foreground_color = NULL): bool {
		return \imagewbmp($image, $file, $foreground_color);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagewebp(\GdImage $image, /* null|resource|string */ $file = NULL, int $quality = 1): bool {
		return \imagewebp($image, $file, $quality);
	}

	/* bookId: book.image ; membership = kBundled */
	public function imagexbm(\GdImage $image, ?string $filename, ?int $foreground_color = NULL): bool {
		return \imagexbm($image, $filename, $foreground_color);
	}

	/* bookId: book.strings ; membership = kCore */
	public function implode(string $separator, array $array): string {
		return \implode($separator, $array);
	}

	/* bookId: book.array ; membership = kCore */
	public function in_array(mixed $needle, array $haystack, bool $strict = false): bool {
		return \in_array($needle, $haystack, $strict);
	}

	/* bookId: book.network ; membership = kCore */
	public function inet_ntop(string $ip): false|string {
		return \inet_ntop($ip);
	}

	/* bookId: book.network ; membership = kCore */
	public function inet_pton(string $ip): false|string {
		return \inet_pton($ip);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function inflate_add(\InflateContext $context, string $data, int $flush_mode = \ZLIB_SYNC_FLUSH): false|string {
		return \inflate_add($context, $data, $flush_mode);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function inflate_get_read_len(\InflateContext $context): int {
		return \inflate_get_read_len($context);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function inflate_get_status(\InflateContext $context): int {
		return \inflate_get_status($context);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function inflate_init(int $encoding, array|object $options = []): false|\InflateContext {
		return \inflate_init($encoding, $options);
	}

	/* bookId: book.info ; membership = kCore */
	public function ini_get(string $option): false|string {
		return \ini_get($option);
	}

	/* bookId: book.info ; membership = kCore */
	public function ini_get_all(?string $extension = NULL, bool $details = true): array|false {
		return \ini_get_all($extension, $details);
	}

	/* bookId: book.info ; membership = kCore */
	public function ini_parse_quantity(string $shorthand): int {
		return \ini_parse_quantity($shorthand);
	}

	/* bookId: book.info ; membership = kCore */
	public function ini_restore(string $option): void {
		\ini_restore($option);
	}

	/* bookId: book.info ; membership = kCore */
	public function ini_set(string $option, bool|float|int|null|string $value): false|string {
		return \ini_set($option, $value);
	}

	/* bookId: book.math ; membership = kCore */
	public function intdiv(int $num1, int $num2): int {
		return \intdiv($num1, $num2);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function interface_exists(string $interface, bool $autoload = true): bool {
		return \interface_exists($interface, $autoload);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function intl_error_name(int $errorCode): string {
		return \intl_error_name($errorCode);
	}

	/* bookId: book.intl ; membership = kBundled */
	public function intl_get_error_code(): int {
		return \intl_get_error_code();
	}

	/* bookId: book.intl ; membership = kBundled */
	public function intl_get_error_message(): string {
		return \intl_get_error_message();
	}

	/* bookId: book.intl ; membership = kBundled */
	public function intl_is_failure(int $errorCode): bool {
		return \intl_is_failure($errorCode);
	}

	/* bookId: book.var ; membership = kCore */
	public function intval(mixed $value, int $base = 10): int {
		return \intval($value, $base);
	}

	/* bookId: book.network ; membership = kCore */
	public function ip2long(string $ip): false|int {
		return \ip2long($ip);
	}

	/* bookId: book.image ; membership = kBundled */
	public function iptcembed(string $iptc_data, string $filename, int $spool = 0): bool|string {
		return \iptcembed($iptc_data, $filename, $spool);
	}

	/* bookId: book.image ; membership = kBundled */
	public function iptcparse(string $iptc_block): array|false {
		return \iptcparse($iptc_block);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function is_a(mixed $object_or_class, string $class, bool $allow_string = false): bool {
		return \is_a($object_or_class, $class, $allow_string);
	}

	/* bookId: book.var ; membership = kCore */
	public function is_array(mixed $value): bool {
		return \is_array($value);
	}

	/* bookId: book.var ; membership = kCore */
	public function is_bool(mixed $value): bool {
		return \is_bool($value);
	}

	/* bookId: book.var ; membership = kCore */
	public function is_callable(mixed $value, bool $syntax_only = false, ?string &$callable_name = NULL): bool {
		return \is_callable($value, $syntax_only, $callable_name);
	}

	/* bookId: book.var ; membership = kCore */
	public function is_countable(mixed $value): bool {
		return \is_countable($value);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function is_dir(string $filename): bool {
		return \is_dir($filename);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function is_executable(string $filename): bool {
		return \is_executable($filename);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function is_file(string $filename): bool {
		return \is_file($filename);
	}

	/* bookId: book.math ; membership = kCore */
	public function is_finite(float $num): bool {
		return \is_finite($num);
	}

	/* bookId: book.var ; membership = kCore */
	public function is_float(mixed $value): bool {
		return \is_float($value);
	}

	/* bookId: book.math ; membership = kCore */
	public function is_infinite(float $num): bool {
		return \is_infinite($num);
	}

	/* bookId: book.var ; membership = kCore */
	public function is_int(mixed $value): bool {
		return \is_int($value);
	}

	/* bookId: book.var ; membership = kCore */
	public function is_iterable(mixed $value): bool {
		return \is_iterable($value);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function is_link(string $filename): bool {
		return \is_link($filename);
	}

	/* bookId: book.math ; membership = kCore */
	public function is_nan(float $num): bool {
		return \is_nan($num);
	}

	/* bookId: book.var ; membership = kCore */
	public function is_null(mixed $value): bool {
		return \is_null($value);
	}

	/* bookId: book.var ; membership = kCore */
	public function is_numeric(mixed $value): bool {
		return \is_numeric($value);
	}

	/* bookId: book.var ; membership = kCore */
	public function is_object(mixed $value): bool {
		return \is_object($value);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function is_readable(string $filename): bool {
		return \is_readable($filename);
	}

	/* bookId: book.var ; membership = kCore */
	public function is_resource(mixed $value): bool {
		return \is_resource($value);
	}

	/* bookId: book.var ; membership = kCore */
	public function is_scalar(mixed $value): bool {
		return \is_scalar($value);
	}

	/* bookId: book.soap ; membership = kBundledExternal */
	public function is_soap_fault(mixed $object): bool {
		return \is_soap_fault($object);
	}

	/* bookId: book.var ; membership = kCore */
	public function is_string(mixed $value): bool {
		return \is_string($value);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function is_subclass_of(mixed $object_or_class, string $class, bool $allow_string = true): bool {
		return \is_subclass_of($object_or_class, $class, $allow_string);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function is_uploaded_file(string $filename): bool {
		return \is_uploaded_file($filename);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function is_writable(string $filename): bool {
		return \is_writable($filename);
	}

	/* bookId: book.spl ; membership = kCore */
	public function iterator_apply(\Traversable $iterator, callable $callback, ?array $args = NULL): int {
		return \iterator_apply($iterator, $callback, $args);
	}

	/* bookId: book.spl ; membership = kCore */
	public function iterator_count(array|\Traversable $iterator): int {
		return \iterator_count($iterator);
	}

	/* bookId: book.spl ; membership = kCore */
	public function iterator_to_array(array|\Traversable $iterator, bool $preserve_keys = true): array {
		return \iterator_to_array($iterator, $preserve_keys);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function jddayofweek(int $julian_day, int $mode = \CAL_DOW_DAYNO): int|string {
		return \jddayofweek($julian_day, $mode);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function jdmonthname(int $julian_day, int $mode): string {
		return \jdmonthname($julian_day, $mode);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function jdtofrench(int $julian_day): string {
		return \jdtofrench($julian_day);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function jdtogregorian(int $julian_day): string {
		return \jdtogregorian($julian_day);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function jdtojewish(int $julian_day, bool $hebrew = false, int $flags = 0): string {
		return \jdtojewish($julian_day, $hebrew, $flags);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function jdtojulian(int $julian_day): string {
		return \jdtojulian($julian_day);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function jdtounix(int $julian_day): int {
		return \jdtounix($julian_day);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function jewishtojd(int $month, int $day, int $year): int {
		return \jewishtojd($month, $day, $year);
	}

	/* bookId: book.image ; membership = kBundled */
	public function jpeg2wbmp(string $jpegname, string $wbmpname, int $dest_height, int $dest_width, int $threshold): bool {
		return \jpeg2wbmp($jpegname, $wbmpname, $dest_height, $dest_width, $threshold);
	}

	/* bookId: book.json ; membership = kCore */
	public function json_decode(string $json, ?bool $associative = NULL, int $depth = 512, int $flags = 0): mixed {
		return \json_decode($json, $associative, $depth, $flags);
	}

	/* bookId: book.json ; membership = kCore */
	public function json_encode(mixed $value, int $flags = 0, int $depth = 512): false|string {
		return \json_encode($value, $flags, $depth);
	}

	/* bookId: book.json ; membership = kCore */
	public function json_last_error(): int {
		return \json_last_error();
	}

	/* bookId: book.json ; membership = kCore */
	public function json_last_error_msg(): string {
		return \json_last_error_msg();
	}

	/* bookId: book.json ; membership = kCore */
	public function json_validate(string $json, int $depth = 512, int $flags = 0): bool {
		return \json_validate($json, $depth, $flags);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function juliantojd(int $month, int $day, int $year): int {
		return \juliantojd($month, $day, $year);
	}

	/* bookId: book.array ; membership = kCore */
	public function key(array|object $array): int|null|string {
		return \key($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function krsort(array &$array, int $flags = \SORT_REGULAR): true {
		return \krsort($array, $flags);
	}

	/* bookId: book.array ; membership = kCore */
	public function ksort(array &$array, int $flags = \SORT_REGULAR): true {
		return \ksort($array, $flags);
	}

	/* bookId: book.strings ; membership = kCore */
	public function lcfirst(string $string): string {
		return \lcfirst($string);
	}

	/* bookId: book.random ; membership = kCore */
	public function lcg_value(): float {
		return \lcg_value();
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function lchgrp(string $filename, int|string $group): bool {
		return \lchgrp($filename, $group);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function lchown(string $filename, int|string $user): bool {
		return \lchown($filename, $user);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_8859_to_t61(string $value): false|string {
		return \ldap_8859_to_t61($value);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_add(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): bool {
		return \ldap_add($ldap, $dn, $entry, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_add_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): false|\LDAP\Result {
		return \ldap_add_ext($ldap, $dn, $entry, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_bind(\LDAP\Connection $ldap, ?string $dn = NULL, ?string $password = NULL): bool {
		return \ldap_bind($ldap, $dn, $password);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_bind_ext(\LDAP\Connection $ldap, ?string $dn = NULL, ?string $password = NULL, ?array $controls = NULL): false|\LDAP\Result {
		return \ldap_bind_ext($ldap, $dn, $password, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_compare(\LDAP\Connection $ldap, string $dn, string $attribute, string $value, ?array $controls = NULL): bool|int {
		return \ldap_compare($ldap, $dn, $attribute, $value, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_connect(?string $uri = NULL): false|\LDAP\Connection {
		return \ldap_connect($uri);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_control_paged_result(/* resource */ $link, int $pagesize, bool $iscritical = false, string $cookie = ""): bool {
		return \ldap_control_paged_result($link, $pagesize, $iscritical, $cookie);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_count_entries(\LDAP\Connection $ldap, \LDAP\Result $result): int {
		return \ldap_count_entries($ldap, $result);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_count_references(\LDAP\Connection $ldap, \LDAP\Result $result): int {
		return \ldap_count_references($ldap, $result);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_delete(\LDAP\Connection $ldap, string $dn, ?array $controls = NULL): bool {
		return \ldap_delete($ldap, $dn, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_delete_ext(\LDAP\Connection $ldap, string $dn, ?array $controls = NULL): false|\LDAP\Result {
		return \ldap_delete_ext($ldap, $dn, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_dn2ufn(string $dn): false|string {
		return \ldap_dn2ufn($dn);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_err2str(int $errno): string {
		return \ldap_err2str($errno);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_errno(\LDAP\Connection $ldap): int {
		return \ldap_errno($ldap);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_error(\LDAP\Connection $ldap): string {
		return \ldap_error($ldap);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_escape(string $value, string $ignore = "", int $flags = 0): string {
		return \ldap_escape($value, $ignore, $flags);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_exop_passwd(\LDAP\Connection $ldap, string $user = "", string $old_password = "", string $new_password = "", ?array &$controls = NULL): bool|string {
		return \ldap_exop_passwd($ldap, $user, $old_password, $new_password, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_exop_refresh(\LDAP\Connection $ldap, string $dn, int $ttl): false|int {
		return \ldap_exop_refresh($ldap, $dn, $ttl);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_exop_sync(\LDAP\Connection $ldap, string $request_oid, ?string $request_data = NULL, ?array $controls = NULL, ?string &$response_data = NULL, ?string &$response_oid = NULL): bool|\LDAP\Result {
		return \ldap_exop_sync($ldap, $request_oid, $request_data, $controls, $response_data, $response_oid);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_exop_whoami(\LDAP\Connection $ldap): false|string {
		return \ldap_exop_whoami($ldap);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_explode_dn(string $dn, int $with_attrib): array|false {
		return \ldap_explode_dn($dn, $with_attrib);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_first_attribute(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): false|string {
		return \ldap_first_attribute($ldap, $entry);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_first_entry(\LDAP\Connection $ldap, \LDAP\Result $result): false|\LDAP\ResultEntry {
		return \ldap_first_entry($ldap, $result);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_first_reference(\LDAP\Connection $ldap, \LDAP\Result $result): false|\LDAP\ResultEntry {
		return \ldap_first_reference($ldap, $result);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_free_result(\LDAP\Result $result): bool {
		return \ldap_free_result($result);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_get_attributes(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): array {
		return \ldap_get_attributes($ldap, $entry);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_get_dn(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): false|string {
		return \ldap_get_dn($ldap, $entry);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_get_entries(\LDAP\Connection $ldap, \LDAP\Result $result): array|false {
		return \ldap_get_entries($ldap, $result);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_get_option(?\LDAP\Connection $ldap, int $option, array|int|null|string &$value = NULL): bool {
		return \ldap_get_option($ldap, $option, $value);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_get_values(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry, string $attribute): array|false {
		return \ldap_get_values($ldap, $entry, $attribute);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_get_values_len(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry, string $attribute): array|false {
		return \ldap_get_values_len($ldap, $entry, $attribute);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_list(array|\LDAP\Connection $ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = 1, int $timelimit = 1, int $deref = \LDAP_DEREF_NEVER, ?array $controls = NULL): array|false|\LDAP\Result {
		return \ldap_list($ldap, $base, $filter, $attributes, $attributes_only, $sizelimit, $timelimit, $deref, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_mod_add(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): bool {
		return \ldap_mod_add($ldap, $dn, $entry, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_mod_add_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): false|\LDAP\Result {
		return \ldap_mod_add_ext($ldap, $dn, $entry, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_mod_del(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): bool {
		return \ldap_mod_del($ldap, $dn, $entry, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_mod_del_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): false|\LDAP\Result {
		return \ldap_mod_del_ext($ldap, $dn, $entry, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_mod_replace(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): bool {
		return \ldap_mod_replace($ldap, $dn, $entry, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_mod_replace_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): false|\LDAP\Result {
		return \ldap_mod_replace_ext($ldap, $dn, $entry, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_modify_batch(\LDAP\Connection $ldap, string $dn, array $modifications_info, ?array $controls = NULL): bool {
		return \ldap_modify_batch($ldap, $dn, $modifications_info, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_next_attribute(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): false|string {
		return \ldap_next_attribute($ldap, $entry);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_next_entry(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): false|\LDAP\ResultEntry {
		return \ldap_next_entry($ldap, $entry);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_next_reference(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): false|\LDAP\ResultEntry {
		return \ldap_next_reference($ldap, $entry);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_parse_exop(\LDAP\Connection $ldap, \LDAP\Result $result, ?string &$response_data = NULL, ?string &$response_oid = NULL): bool {
		return \ldap_parse_exop($ldap, $result, $response_data, $response_oid);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_parse_reference(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry, array &$referrals): bool {
		return \ldap_parse_reference($ldap, $entry, $referrals);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_parse_result(\LDAP\Connection $ldap, \LDAP\Result $result, int &$error_code, ?string &$matched_dn = NULL, ?string &$error_message = NULL, ?array &$referrals = NULL, ?array &$controls = NULL): bool {
		return \ldap_parse_result($ldap, $result, $error_code, $matched_dn, $error_message, $referrals, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_read(array|\LDAP\Connection $ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = 1, int $timelimit = 1, int $deref = \LDAP_DEREF_NEVER, ?array $controls = NULL): array|false|\LDAP\Result {
		return \ldap_read($ldap, $base, $filter, $attributes, $attributes_only, $sizelimit, $timelimit, $deref, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_rename(\LDAP\Connection $ldap, string $dn, string $new_rdn, string $new_parent, bool $delete_old_rdn, ?array $controls = NULL): bool {
		return \ldap_rename($ldap, $dn, $new_rdn, $new_parent, $delete_old_rdn, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_rename_ext(\LDAP\Connection $ldap, string $dn, string $new_rdn, string $new_parent, bool $delete_old_rdn, ?array $controls = NULL): false|\LDAP\Result {
		return \ldap_rename_ext($ldap, $dn, $new_rdn, $new_parent, $delete_old_rdn, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_sasl_bind(\LDAP\Connection $ldap, ?string $dn = NULL, ?string $password = NULL, ?string $mech = NULL, ?string $realm = NULL, ?string $authc_id = NULL, ?string $authz_id = NULL, ?string $props = NULL): bool {
		return \ldap_sasl_bind($ldap, $dn, $password, $mech, $realm, $authc_id, $authz_id, $props);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_search(array|\LDAP\Connection $ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = 1, int $timelimit = 1, int $deref = \LDAP_DEREF_NEVER, ?array $controls = NULL): array|false|\LDAP\Result {
		return \ldap_search($ldap, $base, $filter, $attributes, $attributes_only, $sizelimit, $timelimit, $deref, $controls);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_set_option(?\LDAP\Connection $ldap, int $option, array|bool|int|string $value): bool {
		return \ldap_set_option($ldap, $option, $value);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_set_rebind_proc(\LDAP\Connection $ldap, ?callable $callback): bool {
		return \ldap_set_rebind_proc($ldap, $callback);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_sort(/* resource */ $link, /* resource */ $result, string $sortfilter): bool {
		return \ldap_sort($link, $result, $sortfilter);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_start_tls(\LDAP\Connection $ldap): bool {
		return \ldap_start_tls($ldap);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_t61_to_8859(string $value): false|string {
		return \ldap_t61_to_8859($value);
	}

	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_unbind(\LDAP\Connection $ldap): bool {
		return \ldap_unbind($ldap);
	}

	/* bookId: book.strings ; membership = kCore */
	public function levenshtein(string $string1, string $string2, int $insertion_cost = 1, int $replacement_cost = 1, int $deletion_cost = 1): int {
		return \levenshtein($string1, $string2, $insertion_cost, $replacement_cost, $deletion_cost);
	}

	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_clear_errors(): void {
		\libxml_clear_errors();
	}

	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_disable_entity_loader(bool $disable = true): bool {
		return \libxml_disable_entity_loader($disable);
	}

	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_get_errors(): array {
		return \libxml_get_errors();
	}

	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_get_external_entity_loader(): ?callable {
		return \libxml_get_external_entity_loader();
	}

	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_get_last_error(): false|\LibXMLError {
		return \libxml_get_last_error();
	}

	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_set_external_entity_loader(?callable $resolver_function): true {
		return \libxml_set_external_entity_loader($resolver_function);
	}

	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_set_streams_context(/* resource */ $context): void {
		\libxml_set_streams_context($context);
	}

	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_use_internal_errors(?bool $use_errors = NULL): bool {
		return \libxml_use_internal_errors($use_errors);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function link(string $target, string $link): bool {
		return \link($target, $link);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function linkinfo(string $path): false|int {
		return \linkinfo($path);
	}

	/* bookId: book.litespeed ; membership = kBundled */
	public function litespeed_finish_request(): bool {
		return \litespeed_finish_request();
	}

	/* bookId: book.strings ; membership = kCore */
	public function localeconv(): array {
		return \localeconv();
	}

	/* bookId: book.datetime ; membership = kCore */
	public function localtime(?int $timestamp = NULL, bool $associative = false): array {
		return \localtime($timestamp, $associative);
	}

	/* bookId: book.math ; membership = kCore */
	public function log(float $num, float $base = \M_E): float {
		return \log($num, $base);
	}

	/* bookId: book.math ; membership = kCore */
	public function log10(float $num): float {
		return \log10($num);
	}

	/* bookId: book.math ; membership = kCore */
	public function log1p(float $num): float {
		return \log1p($num);
	}

	/* bookId: book.network ; membership = kCore */
	public function long2ip(int $ip): string {
		return \long2ip($ip);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function lstat(string $filename): array|false {
		return \lstat($filename);
	}

	/* bookId: book.strings ; membership = kCore */
	public function ltrim(string $string, string $characters = " \n\r\t\v\x00"): string {
		return \ltrim($string, $characters);
	}

	/* bookId: book.mail ; membership = kCore */
	public function mail(string $to, string $subject, string $message, array|string $additional_headers = [], string $additional_params = ""): bool {
		return \mail($to, $subject, $message, $additional_headers, $additional_params);
	}

	/* bookId: book.math ; membership = kCore */
	public function max(mixed $value, mixed ...$values): mixed {
		return \max($value, ...$values);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_check_encoding(array|null|string $value = NULL, ?string $encoding = NULL): bool {
		return \mb_check_encoding($value, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_chr(int $codepoint, ?string $encoding = NULL): false|string {
		return \mb_chr($codepoint, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_convert_case(string $string, int $mode, ?string $encoding = NULL): string {
		return \mb_convert_case($string, $mode, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_convert_encoding(array|string $string, string $to_encoding, array|null|string $from_encoding = NULL): array|false|string {
		return \mb_convert_encoding($string, $to_encoding, $from_encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_convert_kana(string $string, string $mode = "KV", ?string $encoding = NULL): string {
		return \mb_convert_kana($string, $mode, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_convert_variables(string $to_encoding, array|string $from_encoding, mixed &$var, mixed &...$vars): false|string {
		return \mb_convert_variables($to_encoding, $from_encoding, $var, ...$vars);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_decode_mimeheader(string $string): string {
		return \mb_decode_mimeheader($string);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_decode_numericentity(string $string, array $map, ?string $encoding = NULL): string {
		return \mb_decode_numericentity($string, $map, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_detect_encoding(string $string, array|null|string $encodings = NULL, bool $strict = false): false|string {
		return \mb_detect_encoding($string, $encodings, $strict);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_detect_order(array|null|string $encoding = NULL): array|bool {
		return \mb_detect_order($encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_encode_mimeheader(string $string, ?string $charset = NULL, ?string $transfer_encoding = NULL, string $newline = "\r\n", int $indent = 0): string {
		return \mb_encode_mimeheader($string, $charset, $transfer_encoding, $newline, $indent);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_encode_numericentity(string $string, array $map, ?string $encoding = NULL, bool $hex = false): string {
		return \mb_encode_numericentity($string, $map, $encoding, $hex);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_encoding_aliases(string $encoding): array {
		return \mb_encoding_aliases($encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg(string $pattern, string $string, ?array &$matches = NULL): bool {
		return \mb_ereg($pattern, $string, $matches);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_match(string $pattern, string $string, ?string $options = NULL): bool {
		return \mb_ereg_match($pattern, $string, $options);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_replace(string $pattern, string $replacement, string $string, ?string $options = NULL): false|null|string {
		return \mb_ereg_replace($pattern, $replacement, $string, $options);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_replace_callback(string $pattern, callable $callback, string $string, ?string $options = NULL): false|null|string {
		return \mb_ereg_replace_callback($pattern, $callback, $string, $options);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_search(?string $pattern = NULL, ?string $options = NULL): bool {
		return \mb_ereg_search($pattern, $options);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_search_getpos(): int {
		return \mb_ereg_search_getpos();
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_search_getregs(): array|false {
		return \mb_ereg_search_getregs();
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_search_init(string $string, ?string $pattern = NULL, ?string $options = NULL): bool {
		return \mb_ereg_search_init($string, $pattern, $options);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_search_pos(?string $pattern = NULL, ?string $options = NULL): array|false {
		return \mb_ereg_search_pos($pattern, $options);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_search_regs(?string $pattern = NULL, ?string $options = NULL): array|false {
		return \mb_ereg_search_regs($pattern, $options);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_search_setpos(int $offset): bool {
		return \mb_ereg_search_setpos($offset);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_eregi(string $pattern, string $string, ?array &$matches = NULL): bool {
		return \mb_eregi($pattern, $string, $matches);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_eregi_replace(string $pattern, string $replacement, string $string, ?string $options = NULL): false|null|string {
		return \mb_eregi_replace($pattern, $replacement, $string, $options);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_get_info(string $type = "all"): array|false|int|null|string {
		return \mb_get_info($type);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_http_input(?string $type = NULL): array|false|string {
		return \mb_http_input($type);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_http_output(?string $encoding = NULL): bool|string {
		return \mb_http_output($encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_internal_encoding(?string $encoding = NULL): bool|string {
		return \mb_internal_encoding($encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_language(?string $language = NULL): bool|string {
		return \mb_language($language);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_lcfirst(string $string, ?string $encoding = NULL): string {
		return \mb_lcfirst($string, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_list_encodings(): array {
		return \mb_list_encodings();
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ltrim(string $string, ?string $characters = NULL, ?string $encoding = NULL): string {
		return \mb_ltrim($string, $characters, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ord(string $string, ?string $encoding = NULL): false|int {
		return \mb_ord($string, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_output_handler(string $string, int $status): string {
		return \mb_output_handler($string, $status);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_parse_str(string $string, array &$result): bool {
		return \mb_parse_str($string, $result);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_preferred_mime_name(string $encoding): false|string {
		return \mb_preferred_mime_name($encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_regex_encoding(?string $encoding = NULL): bool|string {
		return \mb_regex_encoding($encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_regex_set_options(?string $options = NULL): string {
		return \mb_regex_set_options($options);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_rtrim(string $string, ?string $characters = NULL, ?string $encoding = NULL): string {
		return \mb_rtrim($string, $characters, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_scrub(string $string, ?string $encoding = NULL): string {
		return \mb_scrub($string, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_send_mail(string $to, string $subject, string $message, array|string $additional_headers = [], ?string $additional_params = NULL): bool {
		return \mb_send_mail($to, $subject, $message, $additional_headers, $additional_params);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_split(string $pattern, string $string, int $limit = 1): array|false {
		return \mb_split($pattern, $string, $limit);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_str_pad(string $string, int $length, string $pad_string = " ", int $pad_type = \STR_PAD_RIGHT, ?string $encoding = NULL): string {
		return \mb_str_pad($string, $length, $pad_string, $pad_type, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_str_split(string $string, int $length = 1, ?string $encoding = NULL): array {
		return \mb_str_split($string, $length, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strcut(string $string, int $start, ?int $length = NULL, ?string $encoding = NULL): string {
		return \mb_strcut($string, $start, $length, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strimwidth(string $string, int $start, int $width, string $trim_marker = "", ?string $encoding = NULL): string {
		return \mb_strimwidth($string, $start, $width, $trim_marker, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_stripos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): false|int {
		return \mb_stripos($haystack, $needle, $offset, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_stristr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = NULL): false|string {
		return \mb_stristr($haystack, $needle, $before_needle, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strlen(string $string, ?string $encoding = NULL): int {
		return \mb_strlen($string, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strpos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): false|int {
		return \mb_strpos($haystack, $needle, $offset, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strrchr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = NULL): false|string {
		return \mb_strrchr($haystack, $needle, $before_needle, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strrichr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = NULL): false|string {
		return \mb_strrichr($haystack, $needle, $before_needle, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strripos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): false|int {
		return \mb_strripos($haystack, $needle, $offset, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strrpos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): false|int {
		return \mb_strrpos($haystack, $needle, $offset, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strstr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = NULL): false|string {
		return \mb_strstr($haystack, $needle, $before_needle, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strtolower(string $string, ?string $encoding = NULL): string {
		return \mb_strtolower($string, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strtoupper(string $string, ?string $encoding = NULL): string {
		return \mb_strtoupper($string, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strwidth(string $string, ?string $encoding = NULL): int {
		return \mb_strwidth($string, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_substitute_character(int|null|string $substitute_character = NULL): bool|int|string {
		return \mb_substitute_character($substitute_character);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_substr(string $string, int $start, ?int $length = NULL, ?string $encoding = NULL): string {
		return \mb_substr($string, $start, $length, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_substr_count(string $haystack, string $needle, ?string $encoding = NULL): int {
		return \mb_substr_count($haystack, $needle, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_trim(string $string, ?string $characters = NULL, ?string $encoding = NULL): string {
		return \mb_trim($string, $characters, $encoding);
	}

	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ucfirst(string $string, ?string $encoding = NULL): string {
		return \mb_ucfirst($string, $encoding);
	}

	/* bookId: book.strings ; membership = kCore */
	public function md5(string $string, bool $binary = false): string {
		return \md5($string, $binary);
	}

	/* bookId: book.strings ; membership = kCore */
	public function md5_file(string $filename, bool $binary = false): false|string {
		return \md5_file($filename, $binary);
	}

	/* bookId: book.info ; membership = kCore */
	public function memory_get_peak_usage(bool $real_usage = false): int {
		return \memory_get_peak_usage($real_usage);
	}

	/* bookId: book.info ; membership = kCore */
	public function memory_get_usage(bool $real_usage = false): int {
		return \memory_get_usage($real_usage);
	}

	/* bookId: book.info ; membership = kCore */
	public function memory_reset_peak_usage(): void {
		\memory_reset_peak_usage();
	}

	/* bookId: book.strings ; membership = kCore */
	public function metaphone(string $string, int $max_phonemes = 0): string {
		return \metaphone($string, $max_phonemes);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function method_exists(object|string $object_or_class, string $method): bool {
		return \method_exists($object_or_class, $method);
	}

	/* bookId: book.mhash ; membership = kBundled */
	public function mhash(int $algo, string $data, ?string $key = NULL): false|string {
		return \mhash($algo, $data, $key);
	}

	/* bookId: book.mhash ; membership = kBundled */
	public function mhash_count(): int {
		return \mhash_count();
	}

	/* bookId: book.mhash ; membership = kBundled */
	public function mhash_get_block_size(int $algo): false|int {
		return \mhash_get_block_size($algo);
	}

	/* bookId: book.mhash ; membership = kBundled */
	public function mhash_get_hash_name(int $algo): false|string {
		return \mhash_get_hash_name($algo);
	}

	/* bookId: book.mhash ; membership = kBundled */
	public function mhash_keygen_s2k(int $algo, string $password, string $salt, int $length): false|string {
		return \mhash_keygen_s2k($algo, $password, $salt, $length);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function microtime(bool $as_float = false): float|string {
		return \microtime($as_float);
	}

	/* bookId: book.fileinfo ; membership = kBundled */
	public function mime_content_type(/* resource|string */ $filename): false|string {
		return \mime_content_type($filename);
	}

	/* bookId: book.math ; membership = kCore */
	public function min(mixed $value, mixed ...$values): mixed {
		return \min($value, ...$values);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function mkdir(string $directory, int $permissions = 0777, bool $recursive = false, /* null|resource */ $context = NULL): bool {
		return \mkdir($directory, $permissions, $recursive, $context);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function mktime(int $hour, ?int $minute = NULL, ?int $second = NULL, ?int $month = NULL, ?int $day = NULL, ?int $year = NULL): false|int {
		return \mktime($hour, $minute, $second, $month, $day, $year);
	}

	/* bookId: book.strings ; membership = kCore */
	public function money_format(string $format, float $number): string {
		return \money_format($format, $number);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function move_uploaded_file(string $from, string $to): bool {
		return \move_uploaded_file($from, $to);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function msg_get_queue(int $key, int $permissions = 0666): false|\SysvMessageQueue {
		return \msg_get_queue($key, $permissions);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function msg_queue_exists(int $key): bool {
		return \msg_queue_exists($key);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function msg_receive(\SysvMessageQueue $queue, int $desired_message_type, int &$received_message_type, int $max_message_size, mixed &$message, bool $unserialize = true, int $flags = 0, ?int &$error_code = NULL): bool {
		return \msg_receive($queue, $desired_message_type, $received_message_type, $max_message_size, $message, $unserialize, $flags, $error_code);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function msg_remove_queue(\SysvMessageQueue $queue): bool {
		return \msg_remove_queue($queue);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function msg_send(\SysvMessageQueue $queue, int $message_type, bool|float|int|string $message, bool $serialize = true, bool $blocking = true, ?int &$error_code = NULL): bool {
		return \msg_send($queue, $message_type, $message, $serialize, $blocking, $error_code);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function msg_set_queue(\SysvMessageQueue $queue, array $data): bool {
		return \msg_set_queue($queue, $data);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function msg_stat_queue(\SysvMessageQueue $queue): array|false {
		return \msg_stat_queue($queue);
	}

	/* bookId: book.random ; membership = kCore */
	public function mt_getrandmax(): int {
		return \mt_getrandmax();
	}

	/* bookId: book.random ; membership = kCore */
	public function mt_rand(): int {
		return \mt_rand();
	}

	/* bookId: book.random ; membership = kCore */
	public function mt_srand(?int $seed = NULL, int $mode = \MT_RAND_MT19937): void {
		\mt_srand($seed, $mode);
	}

	/* bookId: book.mysqli ; membership = kBundledExternal */
	public function mysqli_get_client_stats(): array {
		return \mysqli_get_client_stats();
	}

	/* bookId: book.mysqli ; membership = kBundledExternal */
	public function mysqli_get_links_stats(): array {
		return \mysqli_get_links_stats();
	}

	/* bookId: book.array ; membership = kCore */
	public function natcasesort(array &$array): true {
		return \natcasesort($array);
	}

	/* bookId: book.array ; membership = kCore */
	public function natsort(array &$array): true {
		return \natsort($array);
	}

	/* bookId: book.network ; membership = kCore */
	public function net_get_interfaces(): array|false {
		return \net_get_interfaces();
	}

	/* bookId: book.array ; membership = kCore */
	public function next(array|object &$array): mixed {
		return \next($array);
	}

	/* bookId: book.gettext ; membership = kBundledExternal */
	public function ngettext(string $singular, string $plural, int $count): string {
		return \ngettext($singular, $plural, $count);
	}

	/* bookId: book.strings ; membership = kCore */
	public function nl2br(string $string, bool $use_xhtml = true): string {
		return \nl2br($string, $use_xhtml);
	}

	/* bookId: book.strings ; membership = kCore */
	public function nl_langinfo(int $item): false|string {
		return \nl_langinfo($item);
	}

	/* bookId: book.strings ; membership = kCore */
	public function number_format(float $num, int $decimals = 0, ?string $decimal_separator = ".", ?string $thousands_separator = ","): string {
		return \number_format($num, $decimals, $decimal_separator, $thousands_separator);
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_clean(): bool {
		return \ob_clean();
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_end_clean(): bool {
		return \ob_end_clean();
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_end_flush(): bool {
		return \ob_end_flush();
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_flush(): bool {
		return \ob_flush();
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_get_clean(): false|string {
		return \ob_get_clean();
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_get_contents(): false|string {
		return \ob_get_contents();
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_get_flush(): false|string {
		return \ob_get_flush();
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_get_length(): false|int {
		return \ob_get_length();
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_get_level(): int {
		return \ob_get_level();
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_get_status(bool $full_status = false): array {
		return \ob_get_status($full_status);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function ob_gzhandler(string $data, int $flags): false|string {
		return \ob_gzhandler($data, $flags);
	}

	/* bookId: book.iconv ; membership = kBundled */
	public function ob_iconv_handler(string $contents, int $status): string {
		return \ob_iconv_handler($contents, $status);
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_implicit_flush(bool $enable = true): void {
		\ob_implicit_flush($enable);
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_list_handlers(): array {
		return \ob_list_handlers();
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_start(?callable $callback = NULL, int $chunk_size = 0, int $flags = \PHP_OUTPUT_HANDLER_STDFLAGS): bool {
		return \ob_start($callback, $chunk_size, $flags);
	}

	/* bookId: book.math ; membership = kCore */
	public function octdec(string $octal_string): float|int {
		return \octdec($octal_string);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_autocommit(\Odbc\Connection $odbc, ?bool $enable = NULL): bool|int {
		return \odbc_autocommit($odbc, $enable);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_binmode(\Odbc\Result $statement, int $mode): true {
		return \odbc_binmode($statement, $mode);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_close(\Odbc\Connection $odbc): void {
		\odbc_close($odbc);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_close_all(): void {
		\odbc_close_all();
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_columnprivileges(\Odbc\Connection $odbc, ?string $catalog, string $schema, string $table, string $column): false|\Odbc\Result {
		return \odbc_columnprivileges($odbc, $catalog, $schema, $table, $column);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_columns(\Odbc\Connection $odbc, ?string $catalog = NULL, ?string $schema = NULL, ?string $table = NULL, ?string $column = NULL): false|\Odbc\Result {
		return \odbc_columns($odbc, $catalog, $schema, $table, $column);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_commit(\Odbc\Connection $odbc): bool {
		return \odbc_commit($odbc);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_connect(string $dsn, ?string $user = NULL, ?string $password = NULL, int $cursor_option = \SQL_CUR_USE_DRIVER): false|\Odbc\Connection {
		return \odbc_connect($dsn, $user, $password, $cursor_option);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_connection_string_is_quoted(string $str): bool {
		return \odbc_connection_string_is_quoted($str);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_connection_string_quote(string $str): string {
		return \odbc_connection_string_quote($str);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_connection_string_should_quote(string $str): bool {
		return \odbc_connection_string_should_quote($str);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_cursor(\Odbc\Result $statement): false|string {
		return \odbc_cursor($statement);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_data_source(\Odbc\Connection $odbc, int $fetch_type): array|false|null {
		return \odbc_data_source($odbc, $fetch_type);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_error(?\Odbc\Connection $odbc = NULL): string {
		return \odbc_error($odbc);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_errormsg(?\Odbc\Connection $odbc = NULL): string {
		return \odbc_errormsg($odbc);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_exec(\Odbc\Connection $odbc, string $query): false|\Odbc\Result {
		return \odbc_exec($odbc, $query);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_execute(\Odbc\Result $statement, array $params = []): bool {
		return \odbc_execute($statement, $params);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_fetch_array(\Odbc\Result $statement, ?int $row = NULL): array|false {
		return \odbc_fetch_array($statement, $row);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_fetch_into(\Odbc\Result $statement, array &$array, ?int $row = NULL): false|int {
		return \odbc_fetch_into($statement, $array, $row);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_fetch_object(\Odbc\Result $statement, ?int $row = NULL): false|\stdClass {
		return \odbc_fetch_object($statement, $row);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_fetch_row(\Odbc\Result $statement, ?int $row = NULL): bool {
		return \odbc_fetch_row($statement, $row);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_field_len(\Odbc\Result $statement, int $field): false|int {
		return \odbc_field_len($statement, $field);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_field_name(\Odbc\Result $statement, int $field): false|string {
		return \odbc_field_name($statement, $field);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_field_num(\Odbc\Result $statement, string $field): false|int {
		return \odbc_field_num($statement, $field);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_field_scale(\Odbc\Result $statement, int $field): false|int {
		return \odbc_field_scale($statement, $field);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_field_type(\Odbc\Result $statement, int $field): false|string {
		return \odbc_field_type($statement, $field);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_foreignkeys(\Odbc\Connection $odbc, ?string $pk_catalog, string $pk_schema, string $pk_table, string $fk_catalog, string $fk_schema, string $fk_table): false|\Odbc\Result {
		return \odbc_foreignkeys($odbc, $pk_catalog, $pk_schema, $pk_table, $fk_catalog, $fk_schema, $fk_table);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_free_result(\Odbc\Result $statement): true {
		return \odbc_free_result($statement);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_gettypeinfo(\Odbc\Connection $odbc, int $data_type = 0): false|\Odbc\Result {
		return \odbc_gettypeinfo($odbc, $data_type);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_longreadlen(\Odbc\Result $statement, int $length): true {
		return \odbc_longreadlen($statement, $length);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_next_result(\Odbc\Result $statement): bool {
		return \odbc_next_result($statement);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_num_fields(\Odbc\Result $statement): int {
		return \odbc_num_fields($statement);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_num_rows(\Odbc\Result $statement): int {
		return \odbc_num_rows($statement);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_pconnect(string $dsn, ?string $user = NULL, ?string $password = NULL, int $cursor_option = \SQL_CUR_USE_DRIVER): false|\Odbc\Connection {
		return \odbc_pconnect($dsn, $user, $password, $cursor_option);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_prepare(\Odbc\Connection $odbc, string $query): false|\Odbc\Result {
		return \odbc_prepare($odbc, $query);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_primarykeys(\Odbc\Connection $odbc, ?string $catalog, string $schema, string $table): false|\Odbc\Result {
		return \odbc_primarykeys($odbc, $catalog, $schema, $table);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_procedurecolumns(\Odbc\Connection $odbc, ?string $catalog = NULL, ?string $schema = NULL, ?string $procedure = NULL, ?string $column = NULL): false|\Odbc\Result {
		return \odbc_procedurecolumns($odbc, $catalog, $schema, $procedure, $column);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_procedures(\Odbc\Connection $odbc, ?string $catalog = NULL, ?string $schema = NULL, ?string $procedure = NULL): false|\Odbc\Result {
		return \odbc_procedures($odbc, $catalog, $schema, $procedure);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_result(\Odbc\Result $statement, int|string $field): bool|null|string {
		return \odbc_result($statement, $field);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_result_all(\Odbc\Result $statement, string $format = ""): false|int {
		return \odbc_result_all($statement, $format);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_rollback(\Odbc\Connection $odbc): bool {
		return \odbc_rollback($odbc);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_setoption(\Odbc\Connection|\Odbc\Result $odbc, int $which, int $option, int $value): bool {
		return \odbc_setoption($odbc, $which, $option, $value);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_specialcolumns(\Odbc\Connection $odbc, int $type, ?string $catalog, string $schema, string $table, int $scope, int $nullable): false|\Odbc\Result {
		return \odbc_specialcolumns($odbc, $type, $catalog, $schema, $table, $scope, $nullable);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_statistics(\Odbc\Connection $odbc, ?string $catalog, string $schema, string $table, int $unique, int $accuracy): false|\Odbc\Result {
		return \odbc_statistics($odbc, $catalog, $schema, $table, $unique, $accuracy);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_tableprivileges(\Odbc\Connection $odbc, ?string $catalog, string $schema, string $table): false|\Odbc\Result {
		return \odbc_tableprivileges($odbc, $catalog, $schema, $table);
	}

	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_tables(\Odbc\Connection $odbc, ?string $catalog = NULL, ?string $schema = NULL, ?string $table = NULL, ?string $types = NULL): false|\Odbc\Result {
		return \odbc_tables($odbc, $catalog, $schema, $table, $types);
	}

	/* bookId: book.opcache ; membership = kCore */
	public function opcache_compile_file(string $filename): bool {
		return \opcache_compile_file($filename);
	}

	/* bookId: book.opcache ; membership = kCore */
	public function opcache_get_configuration(): array|false {
		return \opcache_get_configuration();
	}

	/* bookId: book.opcache ; membership = kCore */
	public function opcache_get_status(bool $include_scripts = true): array|false {
		return \opcache_get_status($include_scripts);
	}

	/* bookId: book.opcache ; membership = kCore */
	public function opcache_invalidate(string $filename, bool $force = false): bool {
		return \opcache_invalidate($filename, $force);
	}

	/* bookId: book.opcache ; membership = kCore */
	public function opcache_is_script_cached(string $filename): bool {
		return \opcache_is_script_cached($filename);
	}

	/* bookId: book.opcache ; membership = kCore */
	public function opcache_is_script_cached_in_file_cache(string $filename): bool {
		return \opcache_is_script_cached_in_file_cache($filename);
	}

	/* bookId: book.opcache ; membership = kCore */
	public function opcache_jit_blacklist(\Closure $closure): void {
		\opcache_jit_blacklist($closure);
	}

	/* bookId: book.opcache ; membership = kCore */
	public function opcache_reset(): bool {
		return \opcache_reset();
	}

	/* bookId: book.dir ; membership = kCore */
	public function opendir(string $directory, /* null|resource */ $context = NULL)/* : false|resource */ {
		return \opendir($directory, $context);
	}

	/* bookId: book.network ; membership = kCore */
	public function openlog(string $prefix, int $flags, int $facility): true {
		return \openlog($prefix, $flags, $facility);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_cipher_iv_length(string $cipher_algo): false|int {
		return \openssl_cipher_iv_length($cipher_algo);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_cipher_key_length(string $cipher_algo): false|int {
		return \openssl_cipher_key_length($cipher_algo);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_cms_decrypt(string $input_filename, string $output_filename, string|\OpenSSLCertificate $certificate, array|null|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key = NULL, int $encoding = \OPENSSL_ENCODING_SMIME): bool {
		return \openssl_cms_decrypt($input_filename, $output_filename, $certificate, $private_key, $encoding);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_cms_encrypt(string $input_filename, string $output_filename, array|string|\OpenSSLCertificate $certificate, ?array $headers, int $flags = 0, int $encoding = \OPENSSL_ENCODING_SMIME, int|string $cipher_algo = \OPENSSL_CIPHER_AES_128_CBC): bool {
		return \openssl_cms_encrypt($input_filename, $output_filename, $certificate, $headers, $flags, $encoding, $cipher_algo);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_cms_read(string $input_filename, array &$certificates): bool {
		return \openssl_cms_read($input_filename, $certificates);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_cms_sign(string $input_filename, string $output_filename, string|\OpenSSLCertificate $certificate, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, ?array $headers, int $flags = 0, int $encoding = \OPENSSL_ENCODING_SMIME, ?string $untrusted_certificates_filename = NULL): bool {
		return \openssl_cms_sign($input_filename, $output_filename, $certificate, $private_key, $headers, $flags, $encoding, $untrusted_certificates_filename);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_cms_verify(string $input_filename, int $flags = 0, ?string $certificates = NULL, array $ca_info = [], ?string $untrusted_certificates_filename = NULL, ?string $content = NULL, ?string $pk7 = NULL, ?string $sigfile = NULL, int $encoding = \OPENSSL_ENCODING_SMIME): bool {
		return \openssl_cms_verify($input_filename, $flags, $certificates, $ca_info, $untrusted_certificates_filename, $content, $pk7, $sigfile, $encoding);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_csr_export(string|\OpenSSLCertificateSigningRequest $csr, string &$output, bool $no_text = true): bool {
		return \openssl_csr_export($csr, $output, $no_text);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_csr_export_to_file(string|\OpenSSLCertificateSigningRequest $csr, string $output_filename, bool $no_text = true): bool {
		return \openssl_csr_export_to_file($csr, $output_filename, $no_text);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_csr_get_public_key(string|\OpenSSLCertificateSigningRequest $csr, bool $short_names = true): false|\OpenSSLAsymmetricKey {
		return \openssl_csr_get_public_key($csr, $short_names);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_csr_get_subject(string|\OpenSSLCertificateSigningRequest $csr, bool $short_names = true): array|false {
		return \openssl_csr_get_subject($csr, $short_names);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_csr_new(array $distinguished_names, ?\OpenSSLAsymmetricKey &$private_key, ?array $options = NULL, ?array $extra_attributes = NULL): bool|\OpenSSLCertificateSigningRequest {
		return \openssl_csr_new($distinguished_names, $private_key, $options, $extra_attributes);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_csr_sign(string|\OpenSSLCertificateSigningRequest $csr, null|string|\OpenSSLCertificate $ca_certificate, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, int $days, ?array $options = NULL, int $serial = 0, ?string $serial_hex = NULL): false|\OpenSSLCertificate {
		return \openssl_csr_sign($csr, $ca_certificate, $private_key, $days, $options, $serial, $serial_hex);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_decrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", ?string $tag = NULL, string $aad = ""): false|string {
		return \openssl_decrypt($data, $cipher_algo, $passphrase, $options, $iv, $tag, $aad);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_dh_compute_key(string $public_key, \OpenSSLAsymmetricKey $private_key): false|string {
		return \openssl_dh_compute_key($public_key, $private_key);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_digest(string $data, string $digest_algo, bool $binary = false): false|string {
		return \openssl_digest($data, $digest_algo, $binary);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_encrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", ?string &$tag = NULL, string $aad = "", int $tag_length = 16): false|string {
		return \openssl_encrypt($data, $cipher_algo, $passphrase, $options, $iv, $tag, $aad, $tag_length);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_error_string(): false|string {
		return \openssl_error_string();
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_free_key(\OpenSSLAsymmetricKey $key): void {
		\openssl_free_key($key);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_get_cert_locations(): array {
		return \openssl_get_cert_locations();
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_get_cipher_methods(bool $aliases = false): array {
		return \openssl_get_cipher_methods($aliases);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_get_curve_names(): array|false {
		return \openssl_get_curve_names();
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_get_md_methods(bool $aliases = false): array {
		return \openssl_get_md_methods($aliases);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_open(string $data, string &$output, string $encrypted_key, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, string $cipher_algo, ?string $iv = NULL): bool {
		return \openssl_open($data, $output, $encrypted_key, $private_key, $cipher_algo, $iv);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_password_hash(string $algo, string $password, array $options = []): string {
		return \openssl_password_hash($algo, $password, $options);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_password_verify(string $algo, string $password, string $hash): bool {
		return \openssl_password_verify($algo, $password, $hash);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pbkdf2(string $password, string $salt, int $key_length, int $iterations, string $digest_algo = "sha1"): false|string {
		return \openssl_pbkdf2($password, $salt, $key_length, $iterations, $digest_algo);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs12_export(string|\OpenSSLCertificate $certificate, string &$output, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, string $passphrase, array $options = []): bool {
		return \openssl_pkcs12_export($certificate, $output, $private_key, $passphrase, $options);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs12_export_to_file(string|\OpenSSLCertificate $certificate, string $output_filename, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, string $passphrase, array $options = []): bool {
		return \openssl_pkcs12_export_to_file($certificate, $output_filename, $private_key, $passphrase, $options);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs12_read(string $pkcs12, array &$certificates, string $passphrase): bool {
		return \openssl_pkcs12_read($pkcs12, $certificates, $passphrase);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs7_decrypt(string $input_filename, string $output_filename, string|\OpenSSLCertificate $certificate, array|null|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key = NULL): bool {
		return \openssl_pkcs7_decrypt($input_filename, $output_filename, $certificate, $private_key);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs7_encrypt(string $input_filename, string $output_filename, array|string|\OpenSSLCertificate $certificate, ?array $headers, int $flags = 0, int $cipher_algo = \OPENSSL_CIPHER_AES_128_CBC): bool {
		return \openssl_pkcs7_encrypt($input_filename, $output_filename, $certificate, $headers, $flags, $cipher_algo);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs7_read(string $data, array &$certificates): bool {
		return \openssl_pkcs7_read($data, $certificates);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs7_sign(string $input_filename, string $output_filename, string|\OpenSSLCertificate $certificate, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, ?array $headers, int $flags = PKCS7_DETACHED, ?string $untrusted_certificates_filename = NULL): bool {
		return \openssl_pkcs7_sign($input_filename, $output_filename, $certificate, $private_key, $headers, $flags, $untrusted_certificates_filename);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs7_verify(string $input_filename, int $flags, ?string $signers_certificates_filename = NULL, array $ca_info = [], ?string $untrusted_certificates_filename = NULL, ?string $content = NULL, ?string $output_filename = NULL): bool|int {
		return \openssl_pkcs7_verify($input_filename, $flags, $signers_certificates_filename, $ca_info, $untrusted_certificates_filename, $content, $output_filename);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_derive(array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $public_key, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, int $key_length = 0): false|string {
		return \openssl_pkey_derive($public_key, $private_key, $key_length);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_export(array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $key, string &$output, ?string $passphrase = NULL, ?array $options = NULL): bool {
		return \openssl_pkey_export($key, $output, $passphrase, $options);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_export_to_file(array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $key, string $output_filename, ?string $passphrase = NULL, ?array $options = NULL): bool {
		return \openssl_pkey_export_to_file($key, $output_filename, $passphrase, $options);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_free(\OpenSSLAsymmetricKey $key): void {
		\openssl_pkey_free($key);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_get_details(\OpenSSLAsymmetricKey $key): array|false {
		return \openssl_pkey_get_details($key);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_get_private(array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, ?string $passphrase = NULL): false|\OpenSSLAsymmetricKey {
		return \openssl_pkey_get_private($private_key, $passphrase);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_get_public(array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $public_key): false|\OpenSSLAsymmetricKey {
		return \openssl_pkey_get_public($public_key);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_new(?array $options = NULL): false|\OpenSSLAsymmetricKey {
		return \openssl_pkey_new($options);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_private_decrypt(string $data, string &$decrypted_data, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, int $padding = \OPENSSL_PKCS1_PADDING, ?string $digest_algo = NULL): bool {
		return \openssl_private_decrypt($data, $decrypted_data, $private_key, $padding, $digest_algo);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_private_encrypt(string $data, string &$encrypted_data, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, int $padding = \OPENSSL_PKCS1_PADDING): bool {
		return \openssl_private_encrypt($data, $encrypted_data, $private_key, $padding);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_public_decrypt(string $data, string &$decrypted_data, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $public_key, int $padding = \OPENSSL_PKCS1_PADDING): bool {
		return \openssl_public_decrypt($data, $decrypted_data, $public_key, $padding);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_public_encrypt(string $data, string &$encrypted_data, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $public_key, int $padding = \OPENSSL_PKCS1_PADDING, ?string $digest_algo = NULL): bool {
		return \openssl_public_encrypt($data, $encrypted_data, $public_key, $padding, $digest_algo);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_random_pseudo_bytes(int $length, ?bool &$strong_result = NULL): string {
		return \openssl_random_pseudo_bytes($length, $strong_result);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_seal(string $data, string &$sealed_data, array &$encrypted_keys, array $public_key, string $cipher_algo, ?string &$iv = NULL): false|int {
		return \openssl_seal($data, $sealed_data, $encrypted_keys, $public_key, $cipher_algo, $iv);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_sign(string $data, string &$signature, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, int|string $algorithm = \OPENSSL_ALGO_SHA1, int $padding = 0): bool {
		return \openssl_sign($data, $signature, $private_key, $algorithm, $padding);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_spki_export(string $spki): false|string {
		return \openssl_spki_export($spki);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_spki_export_challenge(string $spki): false|string {
		return \openssl_spki_export_challenge($spki);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_spki_new(\OpenSSLAsymmetricKey $private_key, string $challenge, int $digest_algo = \OPENSSL_ALGO_MD5): false|string {
		return \openssl_spki_new($private_key, $challenge, $digest_algo);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_spki_verify(string $spki): bool {
		return \openssl_spki_verify($spki);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_verify(string $data, string $signature, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $public_key, int|string $algorithm = \OPENSSL_ALGO_SHA1, int $padding = 0): false|int {
		return \openssl_verify($data, $signature, $public_key, $algorithm, $padding);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_check_private_key(string|\OpenSSLCertificate $certificate, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key): bool {
		return \openssl_x509_check_private_key($certificate, $private_key);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_checkpurpose(string|\OpenSSLCertificate $certificate, int $purpose, array $ca_info = [], ?string $untrusted_certificates_file = NULL): bool|int {
		return \openssl_x509_checkpurpose($certificate, $purpose, $ca_info, $untrusted_certificates_file);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_export(string|\OpenSSLCertificate $certificate, string &$output, bool $no_text = true): bool {
		return \openssl_x509_export($certificate, $output, $no_text);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_export_to_file(string|\OpenSSLCertificate $certificate, string $output_filename, bool $no_text = true): bool {
		return \openssl_x509_export_to_file($certificate, $output_filename, $no_text);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_fingerprint(string|\OpenSSLCertificate $certificate, string $digest_algo = "sha1", bool $binary = false): false|string {
		return \openssl_x509_fingerprint($certificate, $digest_algo, $binary);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_free(\OpenSSLCertificate $certificate): void {
		\openssl_x509_free($certificate);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_parse(string|\OpenSSLCertificate $certificate, bool $short_names = true): array|false {
		return \openssl_x509_parse($certificate, $short_names);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_read(string|\OpenSSLCertificate $certificate): false|\OpenSSLCertificate {
		return \openssl_x509_read($certificate);
	}

	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_verify(string|\OpenSSLCertificate $certificate, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $public_key): int {
		return \openssl_x509_verify($certificate, $public_key);
	}

	/* bookId: book.strings ; membership = kCore */
	public function ord(string $character): int {
		return \ord($character);
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function output_add_rewrite_var(string $name, string $value): bool {
		return \output_add_rewrite_var($name, $value);
	}

	/* bookId: book.outcontrol ; membership = kCore */
	public function output_reset_rewrite_vars(): bool {
		return \output_reset_rewrite_vars();
	}

	/* bookId: book.misc ; membership = kCore */
	public function pack(string $format, mixed ...$values): string {
		return \pack($format, ...$values);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function parse_ini_file(string $filename, bool $process_sections = false, int $scanner_mode = \INI_SCANNER_NORMAL): array|false {
		return \parse_ini_file($filename, $process_sections, $scanner_mode);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function parse_ini_string(string $ini_string, bool $process_sections = false, int $scanner_mode = \INI_SCANNER_NORMAL): array|false {
		return \parse_ini_string($ini_string, $process_sections, $scanner_mode);
	}

	/* bookId: book.strings ; membership = kCore */
	public function parse_str(string $string, array &$result): void {
		\parse_str($string, $result);
	}

	/* bookId: book.url ; membership = kCore */
	public function parse_url(string $url, int $component = 1): array|false|int|null|string {
		return \parse_url($url, $component);
	}

	/* bookId: book.exec ; membership = kCore */
	public function passthru(string $command, ?int &$result_code = NULL): ?false {
		return \passthru($command, $result_code);
	}

	/* bookId: book.password ; membership = kCore */
	public function password_algos(): array {
		return \password_algos();
	}

	/* bookId: book.password ; membership = kCore */
	public function password_get_info(string $hash): array {
		return \password_get_info($hash);
	}

	/* bookId: book.password ; membership = kCore */
	public function password_hash(string $password, int|null|string $algo, array $options = []): string {
		return \password_hash($password, $algo, $options);
	}

	/* bookId: book.password ; membership = kCore */
	public function password_needs_rehash(string $hash, int|null|string $algo, array $options = []): bool {
		return \password_needs_rehash($hash, $algo, $options);
	}

	/* bookId: book.password ; membership = kCore */
	public function password_verify(string $password, string $hash): bool {
		return \password_verify($password, $hash);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function pathinfo(string $path, int $flags = \PATHINFO_ALL): array|string {
		return \pathinfo($path, $flags);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function pclose(/* resource */ $handle): int {
		return \pclose($handle);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_alarm(int $seconds): int {
		return \pcntl_alarm($seconds);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_async_signals(?bool $enable = NULL): bool {
		return \pcntl_async_signals($enable);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_exec(string $path, array $args = [], array $env_vars = []): false {
		return \pcntl_exec($path, $args, $env_vars);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_fork(): int {
		return \pcntl_fork();
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_forkx(int $flags): int {
		return \pcntl_forkx($flags);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_get_last_error(): int {
		return \pcntl_get_last_error();
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_getcpu(): int {
		return \pcntl_getcpu();
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_getcpuaffinity(?int $process_id = NULL): array|false {
		return \pcntl_getcpuaffinity($process_id);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_getpriority(?int $process_id = NULL, int $mode = \PRIO_PROCESS): false|int {
		return \pcntl_getpriority($process_id, $mode);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_getqos_class(): \Pcntl\QosClass {
		return \pcntl_getqos_class();
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_rfork(int $flags, int $signal = 0): int {
		return \pcntl_rfork($flags, $signal);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_setcpuaffinity(?int $process_id = NULL, array $cpu_ids = []): bool {
		return \pcntl_setcpuaffinity($process_id, $cpu_ids);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_setns(?int $process_id = NULL, int $nstype = \CLONE_NEWNET): bool {
		return \pcntl_setns($process_id, $nstype);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_setpriority(int $priority, ?int $process_id = NULL, int $mode = \PRIO_PROCESS): bool {
		return \pcntl_setpriority($priority, $process_id, $mode);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_setqos_class(\Pcntl\QosClass $qos_class = Pcntl\QosClass::Default): void {
		\pcntl_setqos_class($qos_class);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_signal(int $signal, callable|int $handler, bool $restart_syscalls = true): bool {
		return \pcntl_signal($signal, $handler, $restart_syscalls);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_signal_dispatch(): bool {
		return \pcntl_signal_dispatch();
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_signal_get_handler(int $signal): callable|int {
		return \pcntl_signal_get_handler($signal);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_sigprocmask(int $mode, array $signals, ?array &$old_signals = NULL): bool {
		return \pcntl_sigprocmask($mode, $signals, $old_signals);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_sigtimedwait(array $signals, array &$info = [], int $seconds = 0, int $nanoseconds = 0): false|int {
		return \pcntl_sigtimedwait($signals, $info, $seconds, $nanoseconds);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_sigwaitinfo(array $signals, array &$info = []): false|int {
		return \pcntl_sigwaitinfo($signals, $info);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_strerror(int $error_code): string {
		return \pcntl_strerror($error_code);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_unshare(int $flags): bool {
		return \pcntl_unshare($flags);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wait(int &$status, int $flags = 0, array &$resource_usage = []): int {
		return \pcntl_wait($status, $flags, $resource_usage);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_waitid(int $idtype = \P_ALL, ?int $id = NULL, array &$info = [], int $flags = \WEXITED, array &$resource_usage = []): bool {
		return \pcntl_waitid($idtype, $id, $info, $flags, $resource_usage);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_waitpid(int $process_id, int &$status, int $flags = 0, array &$resource_usage = []): int {
		return \pcntl_waitpid($process_id, $status, $flags, $resource_usage);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wexitstatus(int $status): false|int {
		return \pcntl_wexitstatus($status);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wifcontinued(int $status): bool {
		return \pcntl_wifcontinued($status);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wifexited(int $status): bool {
		return \pcntl_wifexited($status);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wifsignaled(int $status): bool {
		return \pcntl_wifsignaled($status);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wifstopped(int $status): bool {
		return \pcntl_wifstopped($status);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wstopsig(int $status): false|int {
		return \pcntl_wstopsig($status);
	}

	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wtermsig(int $status): false|int {
		return \pcntl_wtermsig($status);
	}

	/* bookId: book.network ; membership = kCore */
	public function pfsockopen(string $hostname, int $port = 1, ?int &$error_code = NULL, ?string &$error_message = NULL, ?float $timeout = NULL)/* : false|resource */ {
		return \pfsockopen($hostname, $port, $error_code, $error_message, $timeout);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_affected_rows(\PgSql\Result $result): int {
		return \pg_affected_rows($result);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_cancel_query(\PgSql\Connection $connection): bool {
		return \pg_cancel_query($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_change_password(\PgSql\Connection $connection, string $user, string $password): bool {
		return \pg_change_password($connection, $user, $password);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_client_encoding(?\PgSql\Connection $connection = NULL): string {
		return \pg_client_encoding($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_close(?\PgSql\Connection $connection = NULL): true {
		return \pg_close($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_close_stmt(\PgSql\Connection $connection, string $statement_name): false|\PgSql\Result {
		return \pg_close_stmt($connection, $statement_name);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_connect(string $connection_string, int $flags = 0): false|\PgSql\Connection {
		return \pg_connect($connection_string, $flags);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_connect_poll(\PgSql\Connection $connection): int {
		return \pg_connect_poll($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_connection_busy(\PgSql\Connection $connection): bool {
		return \pg_connection_busy($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_connection_reset(\PgSql\Connection $connection): bool {
		return \pg_connection_reset($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_connection_status(\PgSql\Connection $connection): int {
		return \pg_connection_status($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_consume_input(\PgSql\Connection $connection): bool {
		return \pg_consume_input($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_convert(\PgSql\Connection $connection, string $table_name, array $values, int $flags = 0): array|false {
		return \pg_convert($connection, $table_name, $values, $flags);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_copy_from(\PgSql\Connection $connection, string $table_name, array|\Traversable $rows, string $separator = "\t", string $null_as = "\\\\N"): bool {
		return \pg_copy_from($connection, $table_name, $rows, $separator, $null_as);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_copy_to(\PgSql\Connection $connection, string $table_name, string $separator = "\t", string $null_as = "\\\\N"): array|false {
		return \pg_copy_to($connection, $table_name, $separator, $null_as);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_dbname(?\PgSql\Connection $connection = NULL): string {
		return \pg_dbname($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_delete(\PgSql\Connection $connection, string $table_name, array $conditions, int $flags = \PGSQL_DML_EXEC): bool|string {
		return \pg_delete($connection, $table_name, $conditions, $flags);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_end_copy(?\PgSql\Connection $connection = NULL): bool {
		return \pg_end_copy($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_fetch_all(\PgSql\Result $result, int $mode = \PGSQL_ASSOC): array {
		return \pg_fetch_all($result, $mode);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_fetch_all_columns(\PgSql\Result $result, int $field = 0): array {
		return \pg_fetch_all_columns($result, $field);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_fetch_array(\PgSql\Result $result, ?int $row = NULL, int $mode = \PGSQL_BOTH): array|false {
		return \pg_fetch_array($result, $row, $mode);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_fetch_assoc(\PgSql\Result $result, ?int $row = NULL): array|false {
		return \pg_fetch_assoc($result, $row);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_fetch_object(\PgSql\Result $result, ?int $row = NULL, string $class = "stdClass", array $constructor_args = []): false|object {
		return \pg_fetch_object($result, $row, $class, $constructor_args);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_fetch_result(\PgSql\Result $result, false|null|string $row, mixed $field): false|null|string {
		return \pg_fetch_result($result, $row, $field);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_fetch_row(\PgSql\Result $result, ?int $row = NULL, int $mode = \PGSQL_NUM): array|false {
		return \pg_fetch_row($result, $row, $mode);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_is_null(\PgSql\Result $result, false|null|string $row, mixed $field): int {
		return \pg_field_is_null($result, $row, $field);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_name(\PgSql\Result $result, int $field): string {
		return \pg_field_name($result, $field);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_num(\PgSql\Result $result, string $field): int {
		return \pg_field_num($result, $field);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_prtlen(\PgSql\Result $result, false|null|string $row, mixed $field_name_or_number): int {
		return \pg_field_prtlen($result, $row, $field_name_or_number);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_size(\PgSql\Result $result, int $field): int {
		return \pg_field_size($result, $field);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_table(\PgSql\Result $result, int $field, bool $oid_only = false): false|int|string {
		return \pg_field_table($result, $field, $oid_only);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_type(\PgSql\Result $result, int $field): string {
		return \pg_field_type($result, $field);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_type_oid(\PgSql\Result $result, int $field): int|string {
		return \pg_field_type_oid($result, $field);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_flush(\PgSql\Connection $connection): bool|int {
		return \pg_flush($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_free_result(\PgSql\Result $result): bool {
		return \pg_free_result($result);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_get_notify(\PgSql\Connection $connection, int $mode = \PGSQL_ASSOC): array|false {
		return \pg_get_notify($connection, $mode);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_get_pid(\PgSql\Connection $connection): int {
		return \pg_get_pid($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_get_result(\PgSql\Connection $connection): false|\PgSql\Result {
		return \pg_get_result($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_host(?\PgSql\Connection $connection = NULL): string {
		return \pg_host($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_insert(\PgSql\Connection $connection, string $table_name, array $values, int $flags = \PGSQL_DML_EXEC): bool|string|\PgSql\Result {
		return \pg_insert($connection, $table_name, $values, $flags);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_jit(?\PgSql\Connection $connection = NULL): array {
		return \pg_jit($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_last_error(?\PgSql\Connection $connection = NULL): string {
		return \pg_last_error($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_last_notice(\PgSql\Connection $connection, int $mode = \PGSQL_NOTICE_LAST): array|bool|string {
		return \pg_last_notice($connection, $mode);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_last_oid(\PgSql\Result $result): false|int|string {
		return \pg_last_oid($result);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_close(\PgSql\Lob $lob): bool {
		return \pg_lo_close($lob);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_open(\PgSql\Connection $connection, int $oid, string $mode): false|\PgSql\Lob {
		return \pg_lo_open($connection, $oid, $mode);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_read(\PgSql\Lob $lob, int $length = 8192): false|string {
		return \pg_lo_read($lob, $length);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_read_all(\PgSql\Lob $lob): int {
		return \pg_lo_read_all($lob);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_seek(\PgSql\Lob $lob, int $offset, int $whence = \SEEK_CUR): bool {
		return \pg_lo_seek($lob, $offset, $whence);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_tell(\PgSql\Lob $lob): int {
		return \pg_lo_tell($lob);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_truncate(\PgSql\Lob $lob, int $size): bool {
		return \pg_lo_truncate($lob, $size);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_unlink(\PgSql\Connection $connection, int $oid): bool {
		return \pg_lo_unlink($connection, $oid);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_write(\PgSql\Lob $lob, string $data, ?int $length = NULL): false|int {
		return \pg_lo_write($lob, $data, $length);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_meta_data(\PgSql\Connection $connection, string $table_name, bool $extended = false): array|false {
		return \pg_meta_data($connection, $table_name, $extended);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_num_fields(\PgSql\Result $result): int {
		return \pg_num_fields($result);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_num_rows(\PgSql\Result $result): int {
		return \pg_num_rows($result);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_options(?\PgSql\Connection $connection = NULL): string {
		return \pg_options($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_pconnect(string $connection_string, int $flags = 0): false|\PgSql\Connection {
		return \pg_pconnect($connection_string, $flags);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_ping(?\PgSql\Connection $connection = NULL): bool {
		return \pg_ping($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_port(?\PgSql\Connection $connection = NULL): string {
		return \pg_port($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_put_copy_data(\PgSql\Connection $connection, string $cmd): int {
		return \pg_put_copy_data($connection, $cmd);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_put_copy_end(\PgSql\Connection $connection, ?string $error = NULL): int {
		return \pg_put_copy_end($connection, $error);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_result_error(\PgSql\Result $result): false|string {
		return \pg_result_error($result);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_result_error_field(\PgSql\Result $result, int $field_code): false|null|string {
		return \pg_result_error_field($result, $field_code);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_result_memory_size(\PgSql\Result $result): int {
		return \pg_result_memory_size($result);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_result_seek(\PgSql\Result $result, int $row): bool {
		return \pg_result_seek($result, $row);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_result_status(\PgSql\Result $result, int $mode = \PGSQL_STATUS_LONG): int|string {
		return \pg_result_status($result, $mode);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_select(\PgSql\Connection $connection, string $table_name, array $conditions = [], int $flags = \PGSQL_DML_EXEC, int $mode = \PGSQL_ASSOC): array|false|string {
		return \pg_select($connection, $table_name, $conditions, $flags, $mode);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_send_execute(\PgSql\Connection $connection, string $statement_name, array $params): bool|int {
		return \pg_send_execute($connection, $statement_name, $params);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_send_prepare(\PgSql\Connection $connection, string $statement_name, string $query): bool|int {
		return \pg_send_prepare($connection, $statement_name, $query);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_send_query(\PgSql\Connection $connection, string $query): bool|int {
		return \pg_send_query($connection, $query);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_send_query_params(\PgSql\Connection $connection, string $query, array $params): bool|int {
		return \pg_send_query_params($connection, $query, $params);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_service(?\PgSql\Connection $connection = NULL): string {
		return \pg_service($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_set_chunked_rows_size(\PgSql\Connection $connection, int $size): bool {
		return \pg_set_chunked_rows_size($connection, $size);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_set_error_context_visibility(\PgSql\Connection $connection, int $visibility): int {
		return \pg_set_error_context_visibility($connection, $visibility);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_socket(\PgSql\Connection $connection)/* : false|resource */ {
		return \pg_socket($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_socket_poll(/* resource */ $socket, int $read, int $write, int $timeout = 1): int {
		return \pg_socket_poll($socket, $read, $write, $timeout);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_trace(string $filename, string $mode = "w", ?\PgSql\Connection $connection = NULL, int $trace_mode = 0): bool {
		return \pg_trace($filename, $mode, $connection, $trace_mode);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_transaction_status(\PgSql\Connection $connection): int {
		return \pg_transaction_status($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_tty(?\PgSql\Connection $connection = NULL): string {
		return \pg_tty($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_unescape_bytea(string $string): string {
		return \pg_unescape_bytea($string);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_untrace(?\PgSql\Connection $connection = NULL): true {
		return \pg_untrace($connection);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_update(\PgSql\Connection $connection, string $table_name, array $values, array $conditions, int $flags = \PGSQL_DML_EXEC): bool|string {
		return \pg_update($connection, $table_name, $values, $conditions, $flags);
	}

	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_version(?\PgSql\Connection $connection = NULL): array {
		return \pg_version($connection);
	}

	/* bookId: book.info ; membership = kCore */
	public function php_ini_loaded_file(): false|string {
		return \php_ini_loaded_file();
	}

	/* bookId: book.info ; membership = kCore */
	public function php_ini_scanned_files(): false|string {
		return \php_ini_scanned_files();
	}

	/* bookId: book.info ; membership = kCore */
	public function php_sapi_name(): false|string {
		return \php_sapi_name();
	}

	/* bookId: book.misc ; membership = kCore */
	public function php_strip_whitespace(string $filename): string {
		return \php_strip_whitespace($filename);
	}

	/* bookId: book.info ; membership = kCore */
	public function php_uname(string $mode = "a"): string {
		return \php_uname($mode);
	}

	/* bookId: book.info ; membership = kCore */
	public function phpcredits(int $flags = \CREDITS_ALL): true {
		return \phpcredits($flags);
	}

	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_break_file(string $file, int $line): void {
		\phpdbg_break_file($file, $line);
	}

	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_break_function(string $function): void {
		\phpdbg_break_function($function);
	}

	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_break_method(string $class, string $method): void {
		\phpdbg_break_method($class, $method);
	}

	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_break_next(): void {
		\phpdbg_break_next();
	}

	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_clear(): void {
		\phpdbg_clear();
	}

	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_color(int $element, string $color): void {
		\phpdbg_color($element, $color);
	}

	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_end_oplog(array $options = []): ?array {
		return \phpdbg_end_oplog($options);
	}

	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_exec(string $context): bool|string {
		return \phpdbg_exec($context);
	}

	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_get_executable(array $options = []): array {
		return \phpdbg_get_executable($options);
	}

	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_prompt(string $string): void {
		\phpdbg_prompt($string);
	}

	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_start_oplog(): void {
		\phpdbg_start_oplog();
	}

	/* bookId: book.info ; membership = kCore */
	public function phpinfo(int $flags = \INFO_ALL): true {
		return \phpinfo($flags);
	}

	/* bookId: book.info ; membership = kCore */
	public function phpversion(?string $extension = NULL): false|string {
		return \phpversion($extension);
	}

	/* bookId: book.math ; membership = kCore */
	public function pi(): float {
		return \pi();
	}

	/* bookId: book.image ; membership = kBundled */
	public function png2wbmp(string $pngname, string $wbmpname, int $dest_height, int $dest_width, int $threshold): bool {
		return \png2wbmp($pngname, $wbmpname, $dest_height, $dest_width, $threshold);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function popen(string $command, string $mode)/* : false|resource */ {
		return \popen($command, $mode);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_access(string $filename, int $flags = 0): bool {
		return \posix_access($filename, $flags);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_ctermid(): false|string {
		return \posix_ctermid();
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_eaccess(string $filename, int $flags = 0): bool {
		return \posix_eaccess($filename, $flags);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_fpathconf(/* int|resource */ $file_descriptor, int $name): false|int {
		return \posix_fpathconf($file_descriptor, $name);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_get_last_error(): int {
		return \posix_get_last_error();
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getcwd(): false|string {
		return \posix_getcwd();
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getegid(): int {
		return \posix_getegid();
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_geteuid(): int {
		return \posix_geteuid();
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getgid(): int {
		return \posix_getgid();
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getgrgid(int $group_id): array|false {
		return \posix_getgrgid($group_id);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getgrnam(string $name): array|false {
		return \posix_getgrnam($name);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getgroups(): array|false {
		return \posix_getgroups();
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getlogin(): false|string {
		return \posix_getlogin();
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getpgid(int $process_id): false|int {
		return \posix_getpgid($process_id);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getpgrp(): int {
		return \posix_getpgrp();
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getpid(): int {
		return \posix_getpid();
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getppid(): int {
		return \posix_getppid();
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getpwnam(string $username): array|false {
		return \posix_getpwnam($username);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getpwuid(int $user_id): array|false {
		return \posix_getpwuid($user_id);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getrlimit(?int $resource = NULL): array|false {
		return \posix_getrlimit($resource);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getsid(int $process_id): false|int {
		return \posix_getsid($process_id);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_getuid(): int {
		return \posix_getuid();
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_initgroups(string $username, int $group_id): bool {
		return \posix_initgroups($username, $group_id);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_isatty(/* int|resource */ $file_descriptor): bool {
		return \posix_isatty($file_descriptor);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_kill(int $process_id, int $signal): bool {
		return \posix_kill($process_id, $signal);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_mkfifo(string $filename, int $permissions): bool {
		return \posix_mkfifo($filename, $permissions);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_mknod(string $filename, int $flags, int $major = 0, int $minor = 0): bool {
		return \posix_mknod($filename, $flags, $major, $minor);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_pathconf(string $path, int $name): false|int {
		return \posix_pathconf($path, $name);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_setegid(int $group_id): bool {
		return \posix_setegid($group_id);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_seteuid(int $user_id): bool {
		return \posix_seteuid($user_id);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_setgid(int $group_id): bool {
		return \posix_setgid($group_id);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_setpgid(int $process_id, int $process_group_id): bool {
		return \posix_setpgid($process_id, $process_group_id);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_setrlimit(int $resource, int $soft_limit, int $hard_limit): bool {
		return \posix_setrlimit($resource, $soft_limit, $hard_limit);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_setsid(): int {
		return \posix_setsid();
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_setuid(int $user_id): bool {
		return \posix_setuid($user_id);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_strerror(int $error_code): string {
		return \posix_strerror($error_code);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_sysconf(int $conf_id): int {
		return \posix_sysconf($conf_id);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_times(): array|false {
		return \posix_times();
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_ttyname(/* int|resource */ $file_descriptor): false|string {
		return \posix_ttyname($file_descriptor);
	}

	/* bookId: book.posix ; membership = kBundled */
	public function posix_uname(): array|false {
		return \posix_uname();
	}

	/* bookId: book.math ; membership = kCore */
	public function pow(mixed $num, mixed $exponent): float|int|object {
		return \pow($num, $exponent);
	}

	/* bookId: book.pcre ; membership = kCore */
	public function preg_filter(array|string $pattern, array|string $replacement, array|string $subject, int $limit = 1, ?int &$count = NULL): array|null|string {
		return \preg_filter($pattern, $replacement, $subject, $limit, $count);
	}

	/* bookId: book.pcre ; membership = kCore */
	public function preg_grep(string $pattern, array $array, int $flags = 0): array|false {
		return \preg_grep($pattern, $array, $flags);
	}

	/* bookId: book.pcre ; membership = kCore */
	public function preg_last_error(): int {
		return \preg_last_error();
	}

	/* bookId: book.pcre ; membership = kCore */
	public function preg_last_error_msg(): string {
		return \preg_last_error_msg();
	}

	/* bookId: book.pcre ; membership = kCore */
	public function preg_match(string $pattern, string $subject, ?array &$matches = NULL, int $flags = 0, int $offset = 0): false|int {
		return \preg_match($pattern, $subject, $matches, $flags, $offset);
	}

	/* bookId: book.pcre ; membership = kCore */
	public function preg_match_all(string $pattern, string $subject, ?array &$matches = NULL, int $flags = 0, int $offset = 0): false|int {
		return \preg_match_all($pattern, $subject, $matches, $flags, $offset);
	}

	/* bookId: book.pcre ; membership = kCore */
	public function preg_quote(string $str, ?string $delimiter = NULL): string {
		return \preg_quote($str, $delimiter);
	}

	/* bookId: book.pcre ; membership = kCore */
	public function preg_replace(array|string $pattern, array|string $replacement, array|string $subject, int $limit = 1, ?int &$count = NULL): array|null|string {
		return \preg_replace($pattern, $replacement, $subject, $limit, $count);
	}

	/* bookId: book.pcre ; membership = kCore */
	public function preg_replace_callback(array|string $pattern, callable $callback, array|string $subject, int $limit = 1, ?int &$count = NULL, int $flags = 0): array|null|string {
		return \preg_replace_callback($pattern, $callback, $subject, $limit, $count, $flags);
	}

	/* bookId: book.pcre ; membership = kCore */
	public function preg_replace_callback_array(array $pattern, array|string $subject, int $limit = 1, ?int &$count = NULL, int $flags = 0): array|null|string {
		return \preg_replace_callback_array($pattern, $subject, $limit, $count, $flags);
	}

	/* bookId: book.pcre ; membership = kCore */
	public function preg_split(string $pattern, string $subject, int $limit = 1, int $flags = 0): array|false {
		return \preg_split($pattern, $subject, $limit, $flags);
	}

	/* bookId: book.array ; membership = kCore */
	public function prev(array|object &$array): mixed {
		return \prev($array);
	}

	/* bookId: book.var ; membership = kCore */
	public function print_r(mixed $value, bool $return = false): string|true {
		return \print_r($value, $return);
	}

	/* bookId: book.strings ; membership = kCore */
	public function printf(string $format, mixed ...$values): int {
		return \printf($format, ...$values);
	}

	/* bookId: book.exec ; membership = kCore */
	public function proc_close(/* resource */ $process): int {
		return \proc_close($process);
	}

	/* bookId: book.exec ; membership = kCore */
	public function proc_get_status(/* resource */ $process): array {
		return \proc_get_status($process);
	}

	/* bookId: book.exec ; membership = kCore */
	public function proc_nice(int $priority): bool {
		return \proc_nice($priority);
	}

	/* bookId: book.exec ; membership = kCore */
	public function proc_open(array|string $command, array $descriptor_spec, array &$pipes, ?string $cwd = NULL, ?array $env_vars = NULL, ?array $options = NULL)/* : false|resource */ {
		return \proc_open($command, $descriptor_spec, $pipes, $cwd, $env_vars, $options);
	}

	/* bookId: book.exec ; membership = kCore */
	public function proc_terminate(/* resource */ $process, int $signal = 15): bool {
		return \proc_terminate($process, $signal);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function property_exists(object|string $object_or_class, string $property): bool {
		return \property_exists($object_or_class, $property);
	}

	/* bookId: book.info ; membership = kCore */
	public function putenv(string $assignment): bool {
		return \putenv($assignment);
	}

	/* bookId: book.strings ; membership = kCore */
	public function quoted_printable_decode(string $string): string {
		return \quoted_printable_decode($string);
	}

	/* bookId: book.strings ; membership = kCore */
	public function quoted_printable_encode(string $string): string {
		return \quoted_printable_encode($string);
	}

	/* bookId: book.strings ; membership = kCore */
	public function quotemeta(string $string): string {
		return \quotemeta($string);
	}

	/* bookId: book.math ; membership = kCore */
	public function rad2deg(float $num): float {
		return \rad2deg($num);
	}

	/* bookId: book.random ; membership = kCore */
	public function rand(): int {
		return \rand();
	}

	/* bookId: book.random ; membership = kCore */
	public function random_bytes(int $length): string {
		return \random_bytes($length);
	}

	/* bookId: book.random ; membership = kCore */
	public function random_int(int $min, int $max): int {
		return \random_int($min, $max);
	}

	/* bookId: book.array ; membership = kCore */
	public function range(float|int|string $start, float|int|string $end, float|int $step = 1): array {
		return \range($start, $end, $step);
	}

	/* bookId: book.url ; membership = kCore */
	public function rawurldecode(string $string): string {
		return \rawurldecode($string);
	}

	/* bookId: book.url ; membership = kCore */
	public function rawurlencode(string $string): string {
		return \rawurlencode($string);
	}

	/* bookId: book.dir ; membership = kCore */
	public function readdir(/* null|resource */ $dir_handle = NULL): false|string {
		return \readdir($dir_handle);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function readfile(string $filename, bool $use_include_path = false, /* null|resource */ $context = NULL): false|int {
		return \readfile($filename, $use_include_path, $context);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function readgzfile(string $filename, bool $use_include_path = false): false|int {
		return \readgzfile($filename, $use_include_path);
	}

	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline(?string $prompt = NULL): false|string {
		return \readline($prompt);
	}

	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_add_history(string $prompt): true {
		return \readline_add_history($prompt);
	}

	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_callback_handler_install(string $prompt, callable $callback): true {
		return \readline_callback_handler_install($prompt, $callback);
	}

	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_callback_handler_remove(): bool {
		return \readline_callback_handler_remove();
	}

	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_callback_read_char(): void {
		\readline_callback_read_char();
	}

	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_clear_history(): true {
		return \readline_clear_history();
	}

	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_completion_function(callable $callback): bool {
		return \readline_completion_function($callback);
	}

	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_info(?string $var_name = NULL, bool|int|null|string $value = NULL): mixed {
		return \readline_info($var_name, $value);
	}

	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_list_history(): array {
		return \readline_list_history();
	}

	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_on_new_line(): void {
		\readline_on_new_line();
	}

	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_read_history(?string $filename = NULL): bool {
		return \readline_read_history($filename);
	}

	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_redisplay(): void {
		\readline_redisplay();
	}

	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_write_history(?string $filename = NULL): bool {
		return \readline_write_history($filename);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function readlink(string $path): false|string {
		return \readlink($path);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function realpath(string $path): false|string {
		return \realpath($path);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function realpath_cache_get(): array {
		return \realpath_cache_get();
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function realpath_cache_size(): int {
		return \realpath_cache_size();
	}

	/* bookId: book.funchand ; membership = kCore */
	public function register_shutdown_function(callable $callback, mixed ...$args): void {
		\register_shutdown_function($callback, ...$args);
	}

	/* bookId: book.funchand ; membership = kCore */
	public function register_tick_function(callable $callback, mixed ...$args): bool {
		return \register_tick_function($callback, ...$args);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function rename(string $from, string $to, /* null|resource */ $context = NULL): bool {
		return \rename($from, $to, $context);
	}

	/* bookId: book.network ; membership = kCore */
	public function request_parse_body(?array $options = NULL): array {
		return \request_parse_body($options);
	}

	/* bookId: book.array ; membership = kCore */
	public function reset(array|object &$array): mixed {
		return \reset($array);
	}

	/* bookId: book.errorfunc ; membership = kCore */
	public function restore_error_handler(): true {
		return \restore_error_handler();
	}

	/* bookId: book.errorfunc ; membership = kCore */
	public function restore_exception_handler(): true {
		return \restore_exception_handler();
	}

	/* bookId: book.info ; membership = kCore */
	public function restore_include_path(): void {
		\restore_include_path();
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function rewind(/* resource */ $stream): bool {
		return \rewind($stream);
	}

	/* bookId: book.dir ; membership = kCore */
	public function rewinddir(/* null|resource */ $dir_handle = NULL): void {
		\rewinddir($dir_handle);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function rmdir(string $directory, /* null|resource */ $context = NULL): bool {
		return \rmdir($directory, $context);
	}

	/* bookId: book.math ; membership = kCore */
	public function round(float|int $num, int $precision = 0, int|\RoundingMode $mode = RoundingMode::HalfAwayFromZero): float {
		return \round($num, $precision, $mode);
	}

	/* bookId: book.array ; membership = kCore */
	public function rsort(array &$array, int $flags = \SORT_REGULAR): true {
		return \rsort($array, $flags);
	}

	/* bookId: book.strings ; membership = kCore */
	public function rtrim(string $string, string $characters = " \n\r\t\v\x00"): string {
		return \rtrim($string, $characters);
	}

	/* bookId: book.misc ; membership = kCore */
	public function sapi_windows_cp_conv(int|string $in_codepage, int|string $out_codepage, string $subject): ?string {
		return \sapi_windows_cp_conv($in_codepage, $out_codepage, $subject);
	}

	/* bookId: book.misc ; membership = kCore */
	public function sapi_windows_cp_get(string $kind = ""): int {
		return \sapi_windows_cp_get($kind);
	}

	/* bookId: book.misc ; membership = kCore */
	public function sapi_windows_cp_is_utf8(): bool {
		return \sapi_windows_cp_is_utf8();
	}

	/* bookId: book.misc ; membership = kCore */
	public function sapi_windows_cp_set(int $codepage): bool {
		return \sapi_windows_cp_set($codepage);
	}

	/* bookId: book.misc ; membership = kCore */
	public function sapi_windows_generate_ctrl_event(int $event, int $pid = 0): bool {
		return \sapi_windows_generate_ctrl_event($event, $pid);
	}

	/* bookId: book.misc ; membership = kCore */
	public function sapi_windows_set_ctrl_handler(?callable $handler, bool $add = true): bool {
		return \sapi_windows_set_ctrl_handler($handler, $add);
	}

	/* bookId: book.misc ; membership = kCore */
	public function sapi_windows_vt100_support(/* resource */ $stream, ?bool $enable = NULL): bool {
		return \sapi_windows_vt100_support($stream, $enable);
	}

	/* bookId: book.dir ; membership = kCore */
	public function scandir(string $directory, int $sorting_order = \SCANDIR_SORT_ASCENDING, /* null|resource */ $context = NULL): array|false {
		return \scandir($directory, $sorting_order, $context);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function sem_acquire(\SysvSemaphore $semaphore, bool $non_blocking = false): bool {
		return \sem_acquire($semaphore, $non_blocking);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function sem_get(int $key, int $max_acquire = 1, int $permissions = 0666, bool $auto_release = true): false|\SysvSemaphore {
		return \sem_get($key, $max_acquire, $permissions, $auto_release);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function sem_release(\SysvSemaphore $semaphore): bool {
		return \sem_release($semaphore);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function sem_remove(\SysvSemaphore $semaphore): bool {
		return \sem_remove($semaphore);
	}

	/* bookId: book.var ; membership = kCore */
	public function serialize(mixed $value): string {
		return \serialize($value);
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_abort(): bool {
		return \session_abort();
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_cache_expire(?int $value = NULL): false|int {
		return \session_cache_expire($value);
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_cache_limiter(?string $value = NULL): false|string {
		return \session_cache_limiter($value);
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_create_id(string $prefix = ""): false|string {
		return \session_create_id($prefix);
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_decode(string $data): bool {
		return \session_decode($data);
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_destroy(): bool {
		return \session_destroy();
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_encode(): false|string {
		return \session_encode();
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_gc(): false|int {
		return \session_gc();
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_get_cookie_params(): array {
		return \session_get_cookie_params();
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_id(?string $id = NULL): false|string {
		return \session_id($id);
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_module_name(?string $module = NULL): false|string {
		return \session_module_name($module);
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_name(?string $name = NULL): false|string {
		return \session_name($name);
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_regenerate_id(bool $delete_old_session = false): bool {
		return \session_regenerate_id($delete_old_session);
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_register_shutdown(): void {
		\session_register_shutdown();
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_reset(): bool {
		return \session_reset();
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_save_path(?string $path = NULL): false|string {
		return \session_save_path($path);
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_set_cookie_params(int $lifetime_or_options, ?string $path = NULL, ?string $domain = NULL, ?bool $secure = NULL, ?bool $httponly = NULL): bool {
		return \session_set_cookie_params($lifetime_or_options, $path, $domain, $secure, $httponly);
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_start(array $options = []): bool {
		return \session_start($options);
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_status(): int {
		return \session_status();
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_unset(): bool {
		return \session_unset();
	}

	/* bookId: book.session ; membership = kBundled */
	public function session_write_close(): bool {
		return \session_write_close();
	}

	/* bookId: book.errorfunc ; membership = kCore */
	public function set_error_handler(?callable $callback, int $error_levels = \E_ALL): ?callable {
		return \set_error_handler($callback, $error_levels);
	}

	/* bookId: book.errorfunc ; membership = kCore */
	public function set_exception_handler(?callable $callback): ?callable {
		return \set_exception_handler($callback);
	}

	/* bookId: book.info ; membership = kCore */
	public function set_include_path(string $include_path): false|string {
		return \set_include_path($include_path);
	}

	/* bookId: book.info ; membership = kCore */
	public function set_time_limit(int $seconds): bool {
		return \set_time_limit($seconds);
	}

	/* bookId: book.network ; membership = kCore */
	public function setcookie(string $name, string $value = "", int $expires_or_options = 0, string $path = "", string $domain = "", bool $secure = false, bool $httponly = false): bool {
		return \setcookie($name, $value, $expires_or_options, $path, $domain, $secure, $httponly);
	}

	/* bookId: book.strings ; membership = kCore */
	public function setlocale(int $category, ?string $locales, string ...$rest): false|string {
		return \setlocale($category, $locales, ...$rest);
	}

	/* bookId: book.var ; membership = kCore */
	public function settype(mixed &$var, string $type): bool {
		return \settype($var, $type);
	}

	/* bookId: book.strings ; membership = kCore */
	public function sha1(string $string, bool $binary = false): string {
		return \sha1($string, $binary);
	}

	/* bookId: book.strings ; membership = kCore */
	public function sha1_file(string $filename, bool $binary = false): false|string {
		return \sha1_file($filename, $binary);
	}

	/* bookId: book.exec ; membership = kCore */
	public function shell_exec(string $command): false|null|string {
		return \shell_exec($command);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function shm_attach(int $key, ?int $size = NULL, int $permissions = 0666): false|\SysvSharedMemory {
		return \shm_attach($key, $size, $permissions);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function shm_detach(\SysvSharedMemory $shm): true {
		return \shm_detach($shm);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function shm_get_var(\SysvSharedMemory $shm, int $key): mixed {
		return \shm_get_var($shm, $key);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function shm_has_var(\SysvSharedMemory $shm, int $key): bool {
		return \shm_has_var($shm, $key);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function shm_put_var(\SysvSharedMemory $shm, int $key, mixed $value): bool {
		return \shm_put_var($shm, $key, $value);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function shm_remove(\SysvSharedMemory $shm): bool {
		return \shm_remove($shm);
	}

	/* bookId: book.sem ; membership = kBundled */
	public function shm_remove_var(\SysvSharedMemory $shm, int $key): bool {
		return \shm_remove_var($shm, $key);
	}

	/* bookId: book.shmop ; membership = kBundled */
	public function shmop_close(\Shmop $shmop): void {
		\shmop_close($shmop);
	}

	/* bookId: book.shmop ; membership = kBundled */
	public function shmop_delete(\Shmop $shmop): bool {
		return \shmop_delete($shmop);
	}

	/* bookId: book.shmop ; membership = kBundled */
	public function shmop_open(int $key, string $mode, int $permissions, int $size): false|\Shmop {
		return \shmop_open($key, $mode, $permissions, $size);
	}

	/* bookId: book.shmop ; membership = kBundled */
	public function shmop_read(\Shmop $shmop, int $offset, int $size): string {
		return \shmop_read($shmop, $offset, $size);
	}

	/* bookId: book.shmop ; membership = kBundled */
	public function shmop_size(\Shmop $shmop): int {
		return \shmop_size($shmop);
	}

	/* bookId: book.shmop ; membership = kBundled */
	public function shmop_write(\Shmop $shmop, string $data, int $offset): int {
		return \shmop_write($shmop, $data, $offset);
	}

	/* bookId: book.array ; membership = kCore */
	public function shuffle(array &$array): true {
		return \shuffle($array);
	}

	/* bookId: book.strings ; membership = kCore */
	public function similar_text(string $string1, string $string2, ?float &$percent = NULL): int {
		return \similar_text($string1, $string2, $percent);
	}

	/* bookId: book.simplexml ; membership = kBundledExternal */
	public function simplexml_import_dom(object $node, ?string $class_name = SimpleXMLElement::class): ?\SimpleXMLElement {
		return \simplexml_import_dom($node, $class_name);
	}

	/* bookId: book.simplexml ; membership = kBundledExternal */
	public function simplexml_load_file(string $filename, ?string $class_name = SimpleXMLElement::class, int $options = 0, string $namespace_or_prefix = "", bool $is_prefix = false): false|\SimpleXMLElement {
		return \simplexml_load_file($filename, $class_name, $options, $namespace_or_prefix, $is_prefix);
	}

	/* bookId: book.simplexml ; membership = kBundledExternal */
	public function simplexml_load_string(string $data, ?string $class_name = SimpleXMLElement::class, int $options = 0, string $namespace_or_prefix = "", bool $is_prefix = false): false|\SimpleXMLElement {
		return \simplexml_load_string($data, $class_name, $options, $namespace_or_prefix, $is_prefix);
	}

	/* bookId: book.math ; membership = kCore */
	public function sin(float $num): float {
		return \sin($num);
	}

	/* bookId: book.math ; membership = kCore */
	public function sinh(float $num): float {
		return \sinh($num);
	}

	/* bookId: book.misc ; membership = kCore */
	public function sleep(int $seconds): int {
		return \sleep($seconds);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp2_get(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): mixed {
		return \snmp2_get($hostname, $community, $object_id, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp2_getnext(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): mixed {
		return \snmp2_getnext($hostname, $community, $object_id, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp2_real_walk(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): array|false {
		return \snmp2_real_walk($hostname, $community, $object_id, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp2_set(string $hostname, string $community, array|string $object_id, array|string $type, array|string $value, int $timeout = 1, int $retries = 1): bool {
		return \snmp2_set($hostname, $community, $object_id, $type, $value, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp2_walk(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): array|false {
		return \snmp2_walk($hostname, $community, $object_id, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp3_get(string $hostname, string $security_name, string $security_level, string $auth_protocol, string $auth_passphrase, string $privacy_protocol, string $privacy_passphrase, array|string $object_id, int $timeout = 1, int $retries = 1): mixed {
		return \snmp3_get($hostname, $security_name, $security_level, $auth_protocol, $auth_passphrase, $privacy_protocol, $privacy_passphrase, $object_id, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp3_getnext(string $hostname, string $security_name, string $security_level, string $auth_protocol, string $auth_passphrase, string $privacy_protocol, string $privacy_passphrase, array|string $object_id, int $timeout = 1, int $retries = 1): mixed {
		return \snmp3_getnext($hostname, $security_name, $security_level, $auth_protocol, $auth_passphrase, $privacy_protocol, $privacy_passphrase, $object_id, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp3_real_walk(string $hostname, string $security_name, string $security_level, string $auth_protocol, string $auth_passphrase, string $privacy_protocol, string $privacy_passphrase, array|string $object_id, int $timeout = 1, int $retries = 1): array|false {
		return \snmp3_real_walk($hostname, $security_name, $security_level, $auth_protocol, $auth_passphrase, $privacy_protocol, $privacy_passphrase, $object_id, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp3_set(string $hostname, string $security_name, string $security_level, string $auth_protocol, string $auth_passphrase, string $privacy_protocol, string $privacy_passphrase, array|string $object_id, array|string $type, array|string $value, int $timeout = 1, int $retries = 1): bool {
		return \snmp3_set($hostname, $security_name, $security_level, $auth_protocol, $auth_passphrase, $privacy_protocol, $privacy_passphrase, $object_id, $type, $value, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp3_walk(string $hostname, string $security_name, string $security_level, string $auth_protocol, string $auth_passphrase, string $privacy_protocol, string $privacy_passphrase, array|string $object_id, int $timeout = 1, int $retries = 1): array|false {
		return \snmp3_walk($hostname, $security_name, $security_level, $auth_protocol, $auth_passphrase, $privacy_protocol, $privacy_passphrase, $object_id, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp_get_quick_print(): bool {
		return \snmp_get_quick_print();
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp_get_valueretrieval(): int {
		return \snmp_get_valueretrieval();
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp_read_mib(string $filename): bool {
		return \snmp_read_mib($filename);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp_set_enum_print(bool $enable): true {
		return \snmp_set_enum_print($enable);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp_set_oid_output_format(int $format): true {
		return \snmp_set_oid_output_format($format);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp_set_quick_print(bool $enable): true {
		return \snmp_set_quick_print($enable);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp_set_valueretrieval(int $method): true {
		return \snmp_set_valueretrieval($method);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmpget(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): mixed {
		return \snmpget($hostname, $community, $object_id, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmpgetnext(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): mixed {
		return \snmpgetnext($hostname, $community, $object_id, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmprealwalk(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): array|false {
		return \snmprealwalk($hostname, $community, $object_id, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmpset(string $hostname, string $community, array|string $object_id, array|string $type, array|string $value, int $timeout = 1, int $retries = 1): bool {
		return \snmpset($hostname, $community, $object_id, $type, $value, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmpwalk(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): array|false {
		return \snmpwalk($hostname, $community, $object_id, $timeout, $retries);
	}

	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmpwalkoid(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): array|false {
		return \snmpwalkoid($hostname, $community, $object_id, $timeout, $retries);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_accept(\Socket $socket): false|\Socket {
		return \socket_accept($socket);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_addrinfo_bind(\AddressInfo $address): false|\Socket {
		return \socket_addrinfo_bind($address);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_addrinfo_connect(\AddressInfo $address): false|\Socket {
		return \socket_addrinfo_connect($address);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_addrinfo_explain(\AddressInfo $address): array {
		return \socket_addrinfo_explain($address);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_addrinfo_lookup(string $host, ?string $service = NULL, array $hints = []): array|false {
		return \socket_addrinfo_lookup($host, $service, $hints);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_atmark(\Socket $socket): bool {
		return \socket_atmark($socket);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_bind(\Socket $socket, string $address, int $port = 0): bool {
		return \socket_bind($socket, $address, $port);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_clear_error(?\Socket $socket = NULL): void {
		\socket_clear_error($socket);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_close(\Socket $socket): void {
		\socket_close($socket);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_cmsg_space(int $level, int $type, int $num = 0): ?int {
		return \socket_cmsg_space($level, $type, $num);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_connect(\Socket $socket, string $address, ?int $port = NULL): bool {
		return \socket_connect($socket, $address, $port);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_create(int $domain, int $type, int $protocol): false|\Socket {
		return \socket_create($domain, $type, $protocol);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_create_listen(int $port, int $backlog = \SOMAXCONN): false|\Socket {
		return \socket_create_listen($port, $backlog);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_create_pair(int $domain, int $type, int $protocol, array &$pair): bool {
		return \socket_create_pair($domain, $type, $protocol, $pair);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_export_stream(\Socket $socket)/* : false|resource */ {
		return \socket_export_stream($socket);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_get_option(\Socket $socket, int $level, int $option): array|false|int {
		return \socket_get_option($socket, $level, $option);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_getpeername(\Socket $socket, string &$address, ?int &$port = NULL): bool {
		return \socket_getpeername($socket, $address, $port);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_getsockname(\Socket $socket, string &$address, ?int &$port = NULL): bool {
		return \socket_getsockname($socket, $address, $port);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_import_stream(/* resource */ $stream): false|\Socket {
		return \socket_import_stream($stream);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_last_error(?\Socket $socket = NULL): int {
		return \socket_last_error($socket);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_listen(\Socket $socket, int $backlog = 0): bool {
		return \socket_listen($socket, $backlog);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_read(\Socket $socket, int $length, int $mode = \PHP_BINARY_READ): false|string {
		return \socket_read($socket, $length, $mode);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_recv(\Socket $socket, ?string &$data, int $length, int $flags): false|int {
		return \socket_recv($socket, $data, $length, $flags);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_recvfrom(\Socket $socket, string &$data, int $length, int $flags, string &$address, ?int &$port = NULL): false|int {
		return \socket_recvfrom($socket, $data, $length, $flags, $address, $port);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_recvmsg(\Socket $socket, array &$message, int $flags = 0): false|int {
		return \socket_recvmsg($socket, $message, $flags);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_select(?array &$read, ?array &$write, ?array &$except, ?int $seconds, int $microseconds = 0): false|int {
		return \socket_select($read, $write, $except, $seconds, $microseconds);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_send(\Socket $socket, string $data, int $length, int $flags): false|int {
		return \socket_send($socket, $data, $length, $flags);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_sendmsg(\Socket $socket, array $message, int $flags = 0): false|int {
		return \socket_sendmsg($socket, $message, $flags);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_sendto(\Socket $socket, string $data, int $length, int $flags, string $address, ?int $port = NULL): false|int {
		return \socket_sendto($socket, $data, $length, $flags, $address, $port);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_set_block(\Socket $socket): bool {
		return \socket_set_block($socket);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_set_nonblock(\Socket $socket): bool {
		return \socket_set_nonblock($socket);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_set_option(\Socket $socket, int $level, int $option, array|int|string $value): bool {
		return \socket_set_option($socket, $level, $option, $value);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_shutdown(\Socket $socket, int $mode = 2): bool {
		return \socket_shutdown($socket, $mode);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_strerror(int $error_code): string {
		return \socket_strerror($error_code);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_write(\Socket $socket, string $data, ?int $length = NULL): false|int {
		return \socket_write($socket, $data, $length);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_wsaprotocol_info_export(\Socket $socket, int $process_id): false|string {
		return \socket_wsaprotocol_info_export($socket, $process_id);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_wsaprotocol_info_import(string $info_id): false|\Socket {
		return \socket_wsaprotocol_info_import($info_id);
	}

	/* bookId: book.sockets ; membership = kBundled */
	public function socket_wsaprotocol_info_release(string $info_id): bool {
		return \socket_wsaprotocol_info_release($info_id);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_add(string &$string1, string $string2): void {
		\sodium_add($string1, $string2);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_base642bin(string $string, int $id, string $ignore = ""): string {
		return \sodium_base642bin($string, $id, $ignore);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_bin2base64(string $string, int $id): string {
		return \sodium_bin2base64($string, $id);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_bin2hex(string $string): string {
		return \sodium_bin2hex($string);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_compare(string $string1, string $string2): int {
		return \sodium_compare($string1, $string2);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aegis128l_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): false|string {
		return \sodium_crypto_aead_aegis128l_decrypt($ciphertext, $additional_data, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aegis128l_encrypt(string $message, string $additional_data, string $nonce, string $key): string {
		return \sodium_crypto_aead_aegis128l_encrypt($message, $additional_data, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aegis128l_keygen(): string {
		return \sodium_crypto_aead_aegis128l_keygen();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aegis256_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): false|string {
		return \sodium_crypto_aead_aegis256_decrypt($ciphertext, $additional_data, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aegis256_encrypt(string $message, string $additional_data, string $nonce, string $key): string {
		return \sodium_crypto_aead_aegis256_encrypt($message, $additional_data, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aegis256_keygen(): string {
		return \sodium_crypto_aead_aegis256_keygen();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aes256gcm_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): false|string {
		return \sodium_crypto_aead_aes256gcm_decrypt($ciphertext, $additional_data, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aes256gcm_encrypt(string $message, string $additional_data, string $nonce, string $key): string {
		return \sodium_crypto_aead_aes256gcm_encrypt($message, $additional_data, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aes256gcm_is_available(): bool {
		return \sodium_crypto_aead_aes256gcm_is_available();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aes256gcm_keygen(): string {
		return \sodium_crypto_aead_aes256gcm_keygen();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_chacha20poly1305_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): false|string {
		return \sodium_crypto_aead_chacha20poly1305_decrypt($ciphertext, $additional_data, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_chacha20poly1305_encrypt(string $message, string $additional_data, string $nonce, string $key): string {
		return \sodium_crypto_aead_chacha20poly1305_encrypt($message, $additional_data, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_chacha20poly1305_ietf_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): false|string {
		return \sodium_crypto_aead_chacha20poly1305_ietf_decrypt($ciphertext, $additional_data, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_chacha20poly1305_ietf_encrypt(string $message, string $additional_data, string $nonce, string $key): string {
		return \sodium_crypto_aead_chacha20poly1305_ietf_encrypt($message, $additional_data, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_chacha20poly1305_ietf_keygen(): string {
		return \sodium_crypto_aead_chacha20poly1305_ietf_keygen();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_chacha20poly1305_keygen(): string {
		return \sodium_crypto_aead_chacha20poly1305_keygen();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_xchacha20poly1305_ietf_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): false|string {
		return \sodium_crypto_aead_xchacha20poly1305_ietf_decrypt($ciphertext, $additional_data, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_xchacha20poly1305_ietf_encrypt(string $message, string $additional_data, string $nonce, string $key): string {
		return \sodium_crypto_aead_xchacha20poly1305_ietf_encrypt($message, $additional_data, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_xchacha20poly1305_ietf_keygen(): string {
		return \sodium_crypto_aead_xchacha20poly1305_ietf_keygen();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_auth(string $message, string $key): string {
		return \sodium_crypto_auth($message, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_auth_keygen(): string {
		return \sodium_crypto_auth_keygen();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_auth_verify(string $mac, string $message, string $key): bool {
		return \sodium_crypto_auth_verify($mac, $message, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box(string $message, string $nonce, string $key_pair): string {
		return \sodium_crypto_box($message, $nonce, $key_pair);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_keypair(): string {
		return \sodium_crypto_box_keypair();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_keypair_from_secretkey_and_publickey(string $secret_key, string $public_key): string {
		return \sodium_crypto_box_keypair_from_secretkey_and_publickey($secret_key, $public_key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_open(string $ciphertext, string $nonce, string $key_pair): false|string {
		return \sodium_crypto_box_open($ciphertext, $nonce, $key_pair);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_publickey(string $key_pair): string {
		return \sodium_crypto_box_publickey($key_pair);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_publickey_from_secretkey(string $secret_key): string {
		return \sodium_crypto_box_publickey_from_secretkey($secret_key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_seal(string $message, string $public_key): string {
		return \sodium_crypto_box_seal($message, $public_key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_seal_open(string $ciphertext, string $key_pair): false|string {
		return \sodium_crypto_box_seal_open($ciphertext, $key_pair);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_secretkey(string $key_pair): string {
		return \sodium_crypto_box_secretkey($key_pair);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_seed_keypair(string $seed): string {
		return \sodium_crypto_box_seed_keypair($seed);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_add(string $p, string $q): string {
		return \sodium_crypto_core_ristretto255_add($p, $q);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_from_hash(string $s): string {
		return \sodium_crypto_core_ristretto255_from_hash($s);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_is_valid_point(string $s): bool {
		return \sodium_crypto_core_ristretto255_is_valid_point($s);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_random(): string {
		return \sodium_crypto_core_ristretto255_random();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_add(string $x, string $y): string {
		return \sodium_crypto_core_ristretto255_scalar_add($x, $y);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_complement(string $s): string {
		return \sodium_crypto_core_ristretto255_scalar_complement($s);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_invert(string $s): string {
		return \sodium_crypto_core_ristretto255_scalar_invert($s);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_mul(string $x, string $y): string {
		return \sodium_crypto_core_ristretto255_scalar_mul($x, $y);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_negate(string $s): string {
		return \sodium_crypto_core_ristretto255_scalar_negate($s);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_random(): string {
		return \sodium_crypto_core_ristretto255_scalar_random();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_reduce(string $s): string {
		return \sodium_crypto_core_ristretto255_scalar_reduce($s);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_sub(string $x, string $y): string {
		return \sodium_crypto_core_ristretto255_scalar_sub($x, $y);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_sub(string $p, string $q): string {
		return \sodium_crypto_core_ristretto255_sub($p, $q);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_generichash(string $message, string $key = "", int $length = \SODIUM_CRYPTO_GENERICHASH_BYTES): string {
		return \sodium_crypto_generichash($message, $key, $length);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_generichash_final(string &$state, int $length = \SODIUM_CRYPTO_GENERICHASH_BYTES): string {
		return \sodium_crypto_generichash_final($state, $length);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_generichash_init(string $key = "", int $length = \SODIUM_CRYPTO_GENERICHASH_BYTES): string {
		return \sodium_crypto_generichash_init($key, $length);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_generichash_keygen(): string {
		return \sodium_crypto_generichash_keygen();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_generichash_update(string &$state, string $message): true {
		return \sodium_crypto_generichash_update($state, $message);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kdf_derive_from_key(int $subkey_length, int $subkey_id, string $context, string $key): string {
		return \sodium_crypto_kdf_derive_from_key($subkey_length, $subkey_id, $context, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kdf_keygen(): string {
		return \sodium_crypto_kdf_keygen();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kx_client_session_keys(string $client_key_pair, string $server_key): array {
		return \sodium_crypto_kx_client_session_keys($client_key_pair, $server_key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kx_keypair(): string {
		return \sodium_crypto_kx_keypair();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kx_publickey(string $key_pair): string {
		return \sodium_crypto_kx_publickey($key_pair);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kx_secretkey(string $key_pair): string {
		return \sodium_crypto_kx_secretkey($key_pair);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kx_seed_keypair(string $seed): string {
		return \sodium_crypto_kx_seed_keypair($seed);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kx_server_session_keys(string $server_key_pair, string $client_key): array {
		return \sodium_crypto_kx_server_session_keys($server_key_pair, $client_key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_pwhash(int $length, string $password, string $salt, int $opslimit, int $memlimit, int $algo = \SODIUM_CRYPTO_PWHASH_ALG_DEFAULT): string {
		return \sodium_crypto_pwhash($length, $password, $salt, $opslimit, $memlimit, $algo);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_pwhash_scryptsalsa208sha256(int $length, string $password, string $salt, int $opslimit, int $memlimit): string {
		return \sodium_crypto_pwhash_scryptsalsa208sha256($length, $password, $salt, $opslimit, $memlimit);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_pwhash_scryptsalsa208sha256_str(string $password, int $opslimit, int $memlimit): string {
		return \sodium_crypto_pwhash_scryptsalsa208sha256_str($password, $opslimit, $memlimit);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_pwhash_scryptsalsa208sha256_str_verify(string $hash, string $password): bool {
		return \sodium_crypto_pwhash_scryptsalsa208sha256_str_verify($hash, $password);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_pwhash_str(string $password, int $opslimit, int $memlimit): string {
		return \sodium_crypto_pwhash_str($password, $opslimit, $memlimit);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_pwhash_str_needs_rehash(string $password, int $opslimit, int $memlimit): bool {
		return \sodium_crypto_pwhash_str_needs_rehash($password, $opslimit, $memlimit);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_pwhash_str_verify(string $hash, string $password): bool {
		return \sodium_crypto_pwhash_str_verify($hash, $password);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_scalarmult(string $n, string $p): string {
		return \sodium_crypto_scalarmult($n, $p);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_scalarmult_ristretto255(string $n, string $p): string {
		return \sodium_crypto_scalarmult_ristretto255($n, $p);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_scalarmult_ristretto255_base(string $n): string {
		return \sodium_crypto_scalarmult_ristretto255_base($n);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretbox(string $message, string $nonce, string $key): string {
		return \sodium_crypto_secretbox($message, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretbox_keygen(): string {
		return \sodium_crypto_secretbox_keygen();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretbox_open(string $ciphertext, string $nonce, string $key): false|string {
		return \sodium_crypto_secretbox_open($ciphertext, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretstream_xchacha20poly1305_init_pull(string $header, string $key): string {
		return \sodium_crypto_secretstream_xchacha20poly1305_init_pull($header, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretstream_xchacha20poly1305_init_push(string $key): array {
		return \sodium_crypto_secretstream_xchacha20poly1305_init_push($key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretstream_xchacha20poly1305_keygen(): string {
		return \sodium_crypto_secretstream_xchacha20poly1305_keygen();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretstream_xchacha20poly1305_pull(string &$state, string $ciphertext, string $additional_data = ""): array|false {
		return \sodium_crypto_secretstream_xchacha20poly1305_pull($state, $ciphertext, $additional_data);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretstream_xchacha20poly1305_push(string &$state, string $message, string $additional_data = "", int $tag = \SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE): string {
		return \sodium_crypto_secretstream_xchacha20poly1305_push($state, $message, $additional_data, $tag);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretstream_xchacha20poly1305_rekey(string &$state): void {
		\sodium_crypto_secretstream_xchacha20poly1305_rekey($state);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_shorthash(string $message, string $key): string {
		return \sodium_crypto_shorthash($message, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_shorthash_keygen(): string {
		return \sodium_crypto_shorthash_keygen();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign(string $message, string $secret_key): string {
		return \sodium_crypto_sign($message, $secret_key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_detached(string $message, string $secret_key): string {
		return \sodium_crypto_sign_detached($message, $secret_key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_ed25519_pk_to_curve25519(string $public_key): string {
		return \sodium_crypto_sign_ed25519_pk_to_curve25519($public_key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_ed25519_sk_to_curve25519(string $secret_key): string {
		return \sodium_crypto_sign_ed25519_sk_to_curve25519($secret_key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_keypair(): string {
		return \sodium_crypto_sign_keypair();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_keypair_from_secretkey_and_publickey(string $secret_key, string $public_key): string {
		return \sodium_crypto_sign_keypair_from_secretkey_and_publickey($secret_key, $public_key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_open(string $signed_message, string $public_key): false|string {
		return \sodium_crypto_sign_open($signed_message, $public_key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_publickey(string $key_pair): string {
		return \sodium_crypto_sign_publickey($key_pair);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_publickey_from_secretkey(string $secret_key): string {
		return \sodium_crypto_sign_publickey_from_secretkey($secret_key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_secretkey(string $key_pair): string {
		return \sodium_crypto_sign_secretkey($key_pair);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_seed_keypair(string $seed): string {
		return \sodium_crypto_sign_seed_keypair($seed);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_verify_detached(string $signature, string $message, string $public_key): bool {
		return \sodium_crypto_sign_verify_detached($signature, $message, $public_key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_stream(int $length, string $nonce, string $key): string {
		return \sodium_crypto_stream($length, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_stream_keygen(): string {
		return \sodium_crypto_stream_keygen();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_stream_xchacha20(int $length, string $nonce, string $key): string {
		return \sodium_crypto_stream_xchacha20($length, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_stream_xchacha20_keygen(): string {
		return \sodium_crypto_stream_xchacha20_keygen();
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_stream_xchacha20_xor(string $message, string $nonce, string $key): string {
		return \sodium_crypto_stream_xchacha20_xor($message, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_stream_xchacha20_xor_ic(string $message, string $nonce, int $counter, string $key): string {
		return \sodium_crypto_stream_xchacha20_xor_ic($message, $nonce, $counter, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_stream_xor(string $message, string $nonce, string $key): string {
		return \sodium_crypto_stream_xor($message, $nonce, $key);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_hex2bin(string $string, string $ignore = ""): string {
		return \sodium_hex2bin($string, $ignore);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_increment(string &$string): void {
		\sodium_increment($string);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_memcmp(string $string1, string $string2): int {
		return \sodium_memcmp($string1, $string2);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_memzero(string &$string): void {
		\sodium_memzero($string);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_pad(string $string, int $block_size): string {
		return \sodium_pad($string, $block_size);
	}

	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_unpad(string $string, int $block_size): string {
		return \sodium_unpad($string, $block_size);
	}

	/* bookId: book.array ; membership = kCore */
	public function sort(array &$array, int $flags = \SORT_REGULAR): true {
		return \sort($array, $flags);
	}

	/* bookId: book.strings ; membership = kCore */
	public function soundex(string $string): string {
		return \soundex($string);
	}

	/* bookId: book.spl ; membership = kCore */
	public function spl_autoload(string $class, ?string $file_extensions = NULL): void {
		\spl_autoload($class, $file_extensions);
	}

	/* bookId: book.spl ; membership = kCore */
	public function spl_autoload_call(string $class): void {
		\spl_autoload_call($class);
	}

	/* bookId: book.spl ; membership = kCore */
	public function spl_autoload_extensions(?string $file_extensions = NULL): string {
		return \spl_autoload_extensions($file_extensions);
	}

	/* bookId: book.spl ; membership = kCore */
	public function spl_autoload_functions(): array {
		return \spl_autoload_functions();
	}

	/* bookId: book.spl ; membership = kCore */
	public function spl_autoload_register(?callable $callback = NULL, bool $throw = true, bool $prepend = false): bool {
		return \spl_autoload_register($callback, $throw, $prepend);
	}

	/* bookId: book.spl ; membership = kCore */
	public function spl_autoload_unregister(callable $callback): bool {
		return \spl_autoload_unregister($callback);
	}

	/* bookId: book.spl ; membership = kCore */
	public function spl_classes(): array {
		return \spl_classes();
	}

	/* bookId: book.spl ; membership = kCore */
	public function spl_object_hash(object $object): string {
		return \spl_object_hash($object);
	}

	/* bookId: book.spl ; membership = kCore */
	public function spl_object_id(object $object): int {
		return \spl_object_id($object);
	}

	/* bookId: book.strings ; membership = kCore */
	public function sprintf(string $format, mixed ...$values): string {
		return \sprintf($format, ...$values);
	}

	/* bookId: book.math ; membership = kCore */
	public function sqrt(float $num): float {
		return \sqrt($num);
	}

	/* bookId: book.random ; membership = kCore */
	public function srand(?int $seed = NULL, int $mode = \MT_RAND_MT19937): void {
		\srand($seed, $mode);
	}

	/* bookId: book.strings ; membership = kCore */
	public function sscanf(string $string, string $format, mixed &...$vars): array|int|null {
		return \sscanf($string, $format, ...$vars);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function stat(string $filename): array|false {
		return \stat($filename);
	}

	/* bookId: book.strings ; membership = kCore */
	public function str_contains(string $haystack, string $needle): bool {
		return \str_contains($haystack, $needle);
	}

	/* bookId: book.strings ; membership = kCore */
	public function str_decrement(string $string): string {
		return \str_decrement($string);
	}

	/* bookId: book.strings ; membership = kCore */
	public function str_ends_with(string $haystack, string $needle): bool {
		return \str_ends_with($haystack, $needle);
	}

	/* bookId: book.strings ; membership = kCore */
	public function str_getcsv(string $string, string $separator = ",", string $enclosure = "\"", string $escape = "\\"): array {
		return \str_getcsv($string, $separator, $enclosure, $escape);
	}

	/* bookId: book.strings ; membership = kCore */
	public function str_increment(string $string): string {
		return \str_increment($string);
	}

	/* bookId: book.strings ; membership = kCore */
	public function str_ireplace(array|string $search, array|string $replace, array|string $subject, ?int &$count = NULL): array|string {
		return \str_ireplace($search, $replace, $subject, $count);
	}

	/* bookId: book.strings ; membership = kCore */
	public function str_pad(string $string, int $length, string $pad_string = " ", int $pad_type = \STR_PAD_RIGHT): string {
		return \str_pad($string, $length, $pad_string, $pad_type);
	}

	/* bookId: book.strings ; membership = kCore */
	public function str_repeat(string $string, int $times): string {
		return \str_repeat($string, $times);
	}

	/* bookId: book.strings ; membership = kCore */
	public function str_replace(array|string $search, array|string $replace, array|string $subject, ?int &$count = NULL): array|string {
		return \str_replace($search, $replace, $subject, $count);
	}

	/* bookId: book.strings ; membership = kCore */
	public function str_rot13(string $string): string {
		return \str_rot13($string);
	}

	/* bookId: book.strings ; membership = kCore */
	public function str_shuffle(string $string): string {
		return \str_shuffle($string);
	}

	/* bookId: book.strings ; membership = kCore */
	public function str_split(string $string, int $length = 1): array {
		return \str_split($string, $length);
	}

	/* bookId: book.strings ; membership = kCore */
	public function str_starts_with(string $haystack, string $needle): bool {
		return \str_starts_with($haystack, $needle);
	}

	/* bookId: book.strings ; membership = kCore */
	public function str_word_count(string $string, int $format = 0, ?string $characters = NULL): array|int {
		return \str_word_count($string, $format, $characters);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strcasecmp(string $string1, string $string2): int {
		return \strcasecmp($string1, $string2);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strcmp(string $string1, string $string2): int {
		return \strcmp($string1, $string2);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strcoll(string $string1, string $string2): int {
		return \strcoll($string1, $string2);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strcspn(string $string, string $characters, int $offset = 0, ?int $length = NULL): int {
		return \strcspn($string, $characters, $offset, $length);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_bucket_append(/* resource */ $brigade, \StreamBucket $bucket): void {
		\stream_bucket_append($brigade, $bucket);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_bucket_make_writeable(/* resource */ $brigade): ?\StreamBucket {
		return \stream_bucket_make_writeable($brigade);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_bucket_new(/* resource */ $stream, string $buffer): \StreamBucket {
		return \stream_bucket_new($stream, $buffer);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_bucket_prepend(/* resource */ $brigade, \StreamBucket $bucket): void {
		\stream_bucket_prepend($brigade, $bucket);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_context_create(?array $options = NULL, ?array $params = NULL)/* : resource */ {
		return \stream_context_create($options, $params);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_context_get_default(?array $options = NULL)/* : resource */ {
		return \stream_context_get_default($options);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_context_get_options(/* resource */ $stream_or_context): array {
		return \stream_context_get_options($stream_or_context);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_context_get_params(/* resource */ $context): array {
		return \stream_context_get_params($context);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_context_set_default(array $options)/* : resource */ {
		return \stream_context_set_default($options);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_context_set_option(/* resource */ $stream_or_context, string $wrapper, string $option_name, mixed $value): bool {
		return \stream_context_set_option($stream_or_context, $wrapper, $option_name, $value);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_context_set_options(/* resource */ $context, array $options): true {
		return \stream_context_set_options($context, $options);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_context_set_params(/* resource */ $context, array $params): true {
		return \stream_context_set_params($context, $params);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_copy_to_stream(/* resource */ $from, /* resource */ $to, ?int $length = NULL, int $offset = 0): false|int {
		return \stream_copy_to_stream($from, $to, $length, $offset);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_filter_register(string $filter_name, string $class): bool {
		return \stream_filter_register($filter_name, $class);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_filter_remove(/* resource */ $stream_filter): bool {
		return \stream_filter_remove($stream_filter);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_get_contents(/* resource */ $stream, ?int $length = NULL, int $offset = 1): false|string {
		return \stream_get_contents($stream, $length, $offset);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_get_filters(): array {
		return \stream_get_filters();
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_get_line(/* resource */ $stream, int $length, string $ending = ""): false|string {
		return \stream_get_line($stream, $length, $ending);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_get_meta_data(/* resource */ $stream): array {
		return \stream_get_meta_data($stream);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_get_transports(): array {
		return \stream_get_transports();
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_get_wrappers(): array {
		return \stream_get_wrappers();
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_is_local(/* resource|string */ $stream): bool {
		return \stream_is_local($stream);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_isatty(/* resource */ $stream): bool {
		return \stream_isatty($stream);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_notification_callback(int $notification_code, int $severity, ?string $message, int $message_code, int $bytes_transferred, int $bytes_max): void {
		\stream_notification_callback($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_resolve_include_path(string $filename): false|string {
		return \stream_resolve_include_path($filename);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_select(?array &$read, ?array &$write, ?array &$except, ?int $seconds, ?int $microseconds = NULL): false|int {
		return \stream_select($read, $write, $except, $seconds, $microseconds);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_set_blocking(/* resource */ $stream, bool $enable): bool {
		return \stream_set_blocking($stream, $enable);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_set_chunk_size(/* resource */ $stream, int $size): int {
		return \stream_set_chunk_size($stream, $size);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_set_read_buffer(/* resource */ $stream, int $size): int {
		return \stream_set_read_buffer($stream, $size);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_set_timeout(/* resource */ $stream, int $seconds, int $microseconds = 0): bool {
		return \stream_set_timeout($stream, $seconds, $microseconds);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_set_write_buffer(/* resource */ $stream, int $size): int {
		return \stream_set_write_buffer($stream, $size);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_accept(/* resource */ $socket, ?float $timeout = NULL, ?string &$peer_name = NULL)/* : false|resource */ {
		return \stream_socket_accept($socket, $timeout, $peer_name);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_client(string $address, ?int &$error_code = NULL, ?string &$error_message = NULL, ?float $timeout = NULL, int $flags = \STREAM_CLIENT_CONNECT, /* null|resource */ $context = NULL)/* : false|resource */ {
		return \stream_socket_client($address, $error_code, $error_message, $timeout, $flags, $context);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_enable_crypto(/* resource */ $stream, bool $enable, ?int $crypto_method = NULL, /* null|resource */ $session_stream = NULL): bool|int {
		return \stream_socket_enable_crypto($stream, $enable, $crypto_method, $session_stream);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_get_name(/* resource */ $socket, bool $remote): false|string {
		return \stream_socket_get_name($socket, $remote);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_pair(int $domain, int $type, int $protocol): array|false {
		return \stream_socket_pair($domain, $type, $protocol);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_recvfrom(/* resource */ $socket, int $length, int $flags = 0, ?string &$address = NULL): false|string {
		return \stream_socket_recvfrom($socket, $length, $flags, $address);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_sendto(/* resource */ $socket, string $data, int $flags = 0, string $address = ""): false|int {
		return \stream_socket_sendto($socket, $data, $flags, $address);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_server(string $address, ?int &$error_code = NULL, ?string &$error_message = NULL, int $flags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN, /* null|resource */ $context = NULL)/* : false|resource */ {
		return \stream_socket_server($address, $error_code, $error_message, $flags, $context);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_shutdown(/* resource */ $stream, int $mode): bool {
		return \stream_socket_shutdown($stream, $mode);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_supports_lock(/* resource */ $stream): bool {
		return \stream_supports_lock($stream);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_wrapper_register(string $protocol, string $class, int $flags = 0): bool {
		return \stream_wrapper_register($protocol, $class, $flags);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_wrapper_restore(string $protocol): bool {
		return \stream_wrapper_restore($protocol);
	}

	/* bookId: book.stream ; membership = kCore */
	public function stream_wrapper_unregister(string $protocol): bool {
		return \stream_wrapper_unregister($protocol);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function strftime(string $format, ?int $timestamp = NULL): false|string {
		return \strftime($format, $timestamp);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strip_tags(string $string, array|null|string $allowed_tags = NULL): string {
		return \strip_tags($string, $allowed_tags);
	}

	/* bookId: book.strings ; membership = kCore */
	public function stripcslashes(string $string): string {
		return \stripcslashes($string);
	}

	/* bookId: book.strings ; membership = kCore */
	public function stripos(string $haystack, string $needle, int $offset = 0): false|int {
		return \stripos($haystack, $needle, $offset);
	}

	/* bookId: book.strings ; membership = kCore */
	public function stripslashes(string $string): string {
		return \stripslashes($string);
	}

	/* bookId: book.strings ; membership = kCore */
	public function stristr(string $haystack, string $needle, bool $before_needle = false): false|string {
		return \stristr($haystack, $needle, $before_needle);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strlen(string $string): int {
		return \strlen($string);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strnatcasecmp(string $string1, string $string2): int {
		return \strnatcasecmp($string1, $string2);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strnatcmp(string $string1, string $string2): int {
		return \strnatcmp($string1, $string2);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strncasecmp(string $string1, string $string2, int $length): int {
		return \strncasecmp($string1, $string2, $length);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strncmp(string $string1, string $string2, int $length): int {
		return \strncmp($string1, $string2, $length);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strpbrk(string $string, string $characters): false|string {
		return \strpbrk($string, $characters);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strpos(string $haystack, string $needle, int $offset = 0): false|int {
		return \strpos($haystack, $needle, $offset);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function strptime(string $timestamp, string $format): array|false {
		return \strptime($timestamp, $format);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strrchr(string $haystack, string $needle, bool $before_needle = false): false|string {
		return \strrchr($haystack, $needle, $before_needle);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strrev(string $string): string {
		return \strrev($string);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strripos(string $haystack, string $needle, int $offset = 0): false|int {
		return \strripos($haystack, $needle, $offset);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strrpos(string $haystack, string $needle, int $offset = 0): false|int {
		return \strrpos($haystack, $needle, $offset);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strspn(string $string, string $characters, int $offset = 0, ?int $length = NULL): int {
		return \strspn($string, $characters, $offset, $length);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strstr(string $haystack, string $needle, bool $before_needle = false): false|string {
		return \strstr($haystack, $needle, $before_needle);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strtok(string $string, string $token): false|string {
		return \strtok($string, $token);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strtolower(string $string): string {
		return \strtolower($string);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function strtotime(string $datetime, ?int $baseTimestamp = NULL): false|int {
		return \strtotime($datetime, $baseTimestamp);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strtoupper(string $string): string {
		return \strtoupper($string);
	}

	/* bookId: book.strings ; membership = kCore */
	public function strtr(string $string, string $from, string $to): string {
		return \strtr($string, $from, $to);
	}

	/* bookId: book.var ; membership = kCore */
	public function strval(mixed $value): string {
		return \strval($value);
	}

	/* bookId: book.strings ; membership = kCore */
	public function substr(string $string, int $offset, ?int $length = NULL): string {
		return \substr($string, $offset, $length);
	}

	/* bookId: book.strings ; membership = kCore */
	public function substr_compare(string $haystack, string $needle, int $offset, ?int $length = NULL, bool $case_insensitive = false): int {
		return \substr_compare($haystack, $needle, $offset, $length, $case_insensitive);
	}

	/* bookId: book.strings ; membership = kCore */
	public function substr_count(string $haystack, string $needle, int $offset = 0, ?int $length = NULL): int {
		return \substr_count($haystack, $needle, $offset, $length);
	}

	/* bookId: book.strings ; membership = kCore */
	public function substr_replace(array|string $string, array|string $replace, array|int $offset, array|int|null $length = NULL): array|string {
		return \substr_replace($string, $replace, $offset, $length);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function symlink(string $target, string $link): bool {
		return \symlink($target, $link);
	}

	/* bookId: book.info ; membership = kCore */
	public function sys_get_temp_dir(): string {
		return \sys_get_temp_dir();
	}

	/* bookId: book.misc ; membership = kCore */
	public function sys_getloadavg(): array|false {
		return \sys_getloadavg();
	}

	/* bookId: book.network ; membership = kCore */
	public function syslog(int $priority, string $message): true {
		return \syslog($priority, $message);
	}

	/* bookId: book.exec ; membership = kCore */
	public function system(string $command, ?int &$result_code = NULL): false|string {
		return \system($command, $result_code);
	}

	/* bookId: book.math ; membership = kCore */
	public function tan(float $num): float {
		return \tan($num);
	}

	/* bookId: book.math ; membership = kCore */
	public function tanh(float $num): float {
		return \tanh($num);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function tempnam(string $directory, string $prefix): false|string {
		return \tempnam($directory, $prefix);
	}

	/* bookId: book.gettext ; membership = kBundledExternal */
	public function textdomain(?string $domain = NULL): string {
		return \textdomain($domain);
	}

	/* bookId: book.tidy ; membership = kBundledExternal */
	public function tidy_access_count(\tidy $tidy): int {
		return \tidy_access_count($tidy);
	}

	/* bookId: book.tidy ; membership = kBundledExternal */
	public function tidy_config_count(\tidy $tidy): int {
		return \tidy_config_count($tidy);
	}

	/* bookId: book.tidy ; membership = kBundledExternal */
	public function tidy_error_count(\tidy $tidy): int {
		return \tidy_error_count($tidy);
	}

	/* bookId: book.tidy ; membership = kBundledExternal */
	public function tidy_get_output(\tidy $tidy): string {
		return \tidy_get_output($tidy);
	}

	/* bookId: book.tidy ; membership = kBundledExternal */
	public function tidy_warning_count(\tidy $tidy): int {
		return \tidy_warning_count($tidy);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function time(): int {
		return \time();
	}

	/* bookId: book.misc ; membership = kCore */
	public function time_nanosleep(int $seconds, int $nanoseconds): array|bool {
		return \time_nanosleep($seconds, $nanoseconds);
	}

	/* bookId: book.misc ; membership = kCore */
	public function time_sleep_until(float $timestamp): bool {
		return \time_sleep_until($timestamp);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function timezone_name_from_abbr(string $abbr, int $utcOffset = 1, int $isDST = 1): false|string {
		return \timezone_name_from_abbr($abbr, $utcOffset, $isDST);
	}

	/* bookId: book.datetime ; membership = kCore */
	public function timezone_version_get(): string {
		return \timezone_version_get();
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function tmpfile()/* : false|resource */ {
		return \tmpfile();
	}

	/* bookId: book.tokenizer ; membership = kBundled */
	public function token_get_all(string $code, int $flags = 0): array {
		return \token_get_all($code, $flags);
	}

	/* bookId: book.tokenizer ; membership = kBundled */
	public function token_name(int $id): string {
		return \token_name($id);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function touch(string $filename, ?int $mtime = NULL, ?int $atime = NULL): bool {
		return \touch($filename, $mtime, $atime);
	}

	/* bookId: book.classobj ; membership = kCore */
	public function trait_exists(string $trait, bool $autoload = true): bool {
		return \trait_exists($trait, $autoload);
	}

	/* bookId: book.errorfunc ; membership = kCore */
	public function trigger_error(string $message, int $error_level = \E_USER_NOTICE): true {
		return \trigger_error($message, $error_level);
	}

	/* bookId: book.strings ; membership = kCore */
	public function trim(string $string, string $characters = " \n\r\t\v\x00"): string {
		return \trim($string, $characters);
	}

	/* bookId: book.array ; membership = kCore */
	public function uasort(array &$array, callable $callback): true {
		return \uasort($array, $callback);
	}

	/* bookId: book.strings ; membership = kCore */
	public function ucfirst(string $string): string {
		return \ucfirst($string);
	}

	/* bookId: book.strings ; membership = kCore */
	public function ucwords(string $string, string $separators = " \t\r\n\f\v"): string {
		return \ucwords($string, $separators);
	}

	/* bookId: book.array ; membership = kCore */
	public function uksort(array &$array, callable $callback): true {
		return \uksort($array, $callback);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function umask(?int $mask = NULL): int {
		return \umask($mask);
	}

	/* bookId: book.misc ; membership = kCore */
	public function uniqid(string $prefix = "", bool $more_entropy = false): string {
		return \uniqid($prefix, $more_entropy);
	}

	/* bookId: book.calendar ; membership = kBundled */
	public function unixtojd(?int $timestamp = NULL): false|int {
		return \unixtojd($timestamp);
	}

	/* bookId: book.filesystem ; membership = kCore */
	public function unlink(string $filename, /* null|resource */ $context = NULL): bool {
		return \unlink($filename, $context);
	}

	/* bookId: book.misc ; membership = kCore */
	public function unpack(string $format, string $string, int $offset = 0): array|false {
		return \unpack($format, $string, $offset);
	}

	/* bookId: book.funchand ; membership = kCore */
	public function unregister_tick_function(callable $callback): void {
		\unregister_tick_function($callback);
	}

	/* bookId: book.var ; membership = kCore */
	public function unserialize(string $data, array $options = []): mixed {
		return \unserialize($data, $options);
	}

	/* bookId: book.url ; membership = kCore */
	public function urldecode(string $string): string {
		return \urldecode($string);
	}

	/* bookId: book.url ; membership = kCore */
	public function urlencode(string $string): string {
		return \urlencode($string);
	}

	/* bookId: book.soap ; membership = kBundledExternal */
	public function use_soap_error_handler(bool $enable = true): bool {
		return \use_soap_error_handler($enable);
	}

	/* bookId: book.misc ; membership = kCore */
	public function usleep(int $microseconds): void {
		\usleep($microseconds);
	}

	/* bookId: book.array ; membership = kCore */
	public function usort(array &$array, callable $callback): true {
		return \usort($array, $callback);
	}

	/* bookId: book.strings ; membership = kCore */
	public function utf8_decode(string $string): string {
		return \utf8_decode($string);
	}

	/* bookId: book.strings ; membership = kCore */
	public function utf8_encode(string $string): string {
		return \utf8_encode($string);
	}

	/* bookId: book.var ; membership = kCore */
	public function var_dump(mixed $value, mixed ...$values): void {
		\var_dump($value, ...$values);
	}

	/* bookId: book.var ; membership = kCore */
	public function var_export(mixed $value, bool $return = false): ?string {
		return \var_export($value, $return);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_abs(mixed $value): \variant {
		return \variant_abs($value);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_add(mixed $left, mixed $right): \variant {
		return \variant_add($left, $right);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_and(mixed $left, mixed $right): \variant {
		return \variant_and($left, $right);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_cast(\variant $variant, int $type): \variant {
		return \variant_cast($variant, $type);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_cat(mixed $left, mixed $right): \variant {
		return \variant_cat($left, $right);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_cmp(mixed $left, mixed $right, int $locale_id = \LOCALE_SYSTEM_DEFAULT, int $flags = 0): int {
		return \variant_cmp($left, $right, $locale_id, $flags);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_date_from_timestamp(int $timestamp): \variant {
		return \variant_date_from_timestamp($timestamp);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_date_to_timestamp(\variant $variant): ?int {
		return \variant_date_to_timestamp($variant);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_div(mixed $left, mixed $right): \variant {
		return \variant_div($left, $right);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_eqv(mixed $left, mixed $right): \variant {
		return \variant_eqv($left, $right);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_fix(mixed $value): \variant {
		return \variant_fix($value);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_get_type(\variant $variant): int {
		return \variant_get_type($variant);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_idiv(mixed $left, mixed $right): \variant {
		return \variant_idiv($left, $right);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_imp(mixed $left, mixed $right): \variant {
		return \variant_imp($left, $right);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_int(mixed $value): \variant {
		return \variant_int($value);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_mod(mixed $left, mixed $right): \variant {
		return \variant_mod($left, $right);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_mul(mixed $left, mixed $right): \variant {
		return \variant_mul($left, $right);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_neg(mixed $value): \variant {
		return \variant_neg($value);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_not(mixed $value): \variant {
		return \variant_not($value);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_or(mixed $left, mixed $right): \variant {
		return \variant_or($left, $right);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_pow(mixed $left, mixed $right): \variant {
		return \variant_pow($left, $right);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_round(mixed $value, int $decimals): ?\variant {
		return \variant_round($value, $decimals);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_set(\variant $variant, mixed $value): void {
		\variant_set($variant, $value);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_set_type(\variant $variant, int $type): void {
		\variant_set_type($variant, $type);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_sub(mixed $left, mixed $right): \variant {
		return \variant_sub($left, $right);
	}

	/* bookId: book.com ; membership = kBundled */
	public function variant_xor(mixed $left, mixed $right): \variant {
		return \variant_xor($left, $right);
	}

	/* bookId: book.info ; membership = kCore */
	public function version_compare(string $version1, string $version2, ?string $operator = NULL): bool|int {
		return \version_compare($version1, $version2, $operator);
	}

	/* bookId: book.strings ; membership = kCore */
	public function vfprintf(/* resource */ $stream, string $format, array $values): int {
		return \vfprintf($stream, $format, $values);
	}

	/* bookId: book.apache ; membership = kBundled */
	public function virtual(string $uri): bool {
		return \virtual($uri);
	}

	/* bookId: book.strings ; membership = kCore */
	public function vprintf(string $format, array $values): int {
		return \vprintf($format, $values);
	}

	/* bookId: book.strings ; membership = kCore */
	public function vsprintf(string $format, array $values): string {
		return \vsprintf($format, $values);
	}

	/* bookId: book.strings ; membership = kCore */
	public function wordwrap(string $string, int $width = 75, string $break = "\n", bool $cut_long_words = false): string {
		return \wordwrap($string, $width, $break, $cut_long_words);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_error_string(int $error_code): ?string {
		return \xml_error_string($error_code);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_get_current_byte_index(\XMLParser $parser): int {
		return \xml_get_current_byte_index($parser);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_get_current_column_number(\XMLParser $parser): int {
		return \xml_get_current_column_number($parser);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_get_current_line_number(\XMLParser $parser): int {
		return \xml_get_current_line_number($parser);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_get_error_code(\XMLParser $parser): int {
		return \xml_get_error_code($parser);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_parse(\XMLParser $parser, string $data, bool $is_final = false): int {
		return \xml_parse($parser, $data, $is_final);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_parse_into_struct(\XMLParser $parser, string $data, array &$values, ?array &$index = NULL): false|int {
		return \xml_parse_into_struct($parser, $data, $values, $index);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_parser_create(?string $encoding = NULL): \XMLParser {
		return \xml_parser_create($encoding);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_parser_create_ns(?string $encoding = NULL, string $separator = ":"): \XMLParser {
		return \xml_parser_create_ns($encoding, $separator);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_parser_free(\XMLParser $parser): bool {
		return \xml_parser_free($parser);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_parser_get_option(\XMLParser $parser, int $option): bool|int|string {
		return \xml_parser_get_option($parser, $option);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_parser_set_option(\XMLParser $parser, int $option, bool|int|string $value): bool {
		return \xml_parser_set_option($parser, $option, $value);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_character_data_handler(\XMLParser $parser, callable|null|string $handler): true {
		return \xml_set_character_data_handler($parser, $handler);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_default_handler(\XMLParser $parser, callable|null|string $handler): true {
		return \xml_set_default_handler($parser, $handler);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_element_handler(\XMLParser $parser, callable|null|string $start_handler, callable|null|string $end_handler): true {
		return \xml_set_element_handler($parser, $start_handler, $end_handler);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_end_namespace_decl_handler(\XMLParser $parser, callable|null|string $handler): true {
		return \xml_set_end_namespace_decl_handler($parser, $handler);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_external_entity_ref_handler(\XMLParser $parser, callable|null|string $handler): true {
		return \xml_set_external_entity_ref_handler($parser, $handler);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_notation_decl_handler(\XMLParser $parser, callable|null|string $handler): true {
		return \xml_set_notation_decl_handler($parser, $handler);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_object(\XMLParser $parser, object $object): true {
		return \xml_set_object($parser, $object);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_processing_instruction_handler(\XMLParser $parser, callable|null|string $handler): true {
		return \xml_set_processing_instruction_handler($parser, $handler);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_start_namespace_decl_handler(\XMLParser $parser, callable|null|string $handler): true {
		return \xml_set_start_namespace_decl_handler($parser, $handler);
	}

	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_unparsed_entity_decl_handler(\XMLParser $parser, callable|null|string $handler): true {
		return \xml_set_unparsed_entity_decl_handler($parser, $handler);
	}

	/* bookId: book.info ; membership = kCore */
	public function zend_thread_id(): int {
		return \zend_thread_id();
	}

	/* bookId: book.info ; membership = kCore */
	public function zend_version(): string {
		return \zend_version();
	}

	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_close(/* resource */ $zip): void {
		\zip_close($zip);
	}

	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_entry_close(/* resource */ $zip_entry): bool {
		return \zip_entry_close($zip_entry);
	}

	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_entry_compressedsize(/* resource */ $zip_entry): false|int {
		return \zip_entry_compressedsize($zip_entry);
	}

	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_entry_compressionmethod(/* resource */ $zip_entry): false|string {
		return \zip_entry_compressionmethod($zip_entry);
	}

	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_entry_filesize(/* resource */ $zip_entry): false|int {
		return \zip_entry_filesize($zip_entry);
	}

	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_entry_name(/* resource */ $zip_entry): false|string {
		return \zip_entry_name($zip_entry);
	}

	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_entry_open(/* resource */ $zip_dp, /* resource */ $zip_entry, string $mode = "rb"): bool {
		return \zip_entry_open($zip_dp, $zip_entry, $mode);
	}

	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_entry_read(/* resource */ $zip_entry, int $len = 1024): false|string {
		return \zip_entry_read($zip_entry, $len);
	}

	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_open(string $filename)/* : false|int|resource */ {
		return \zip_open($filename);
	}

	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_read(/* resource */ $zip)/* : false|resource */ {
		return \zip_read($zip);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function zlib_decode(string $data, int $max_length = 0): false|string {
		return \zlib_decode($data, $max_length);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function zlib_encode(string $data, int $encoding, int $level = 1): false|string {
		return \zlib_encode($data, $encoding, $level);
	}

	/* bookId: book.zlib ; membership = kBundled */
	public function zlib_get_coding_type(): false|string {
		return \zlib_get_coding_type();
	}
}
