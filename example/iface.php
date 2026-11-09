<?php

interface X {
	/* bookId: book.dom ; membership = kBundledExternal */
	public function import_simplexml(object $node): \Dom\Attr|\Dom\Element;
	/* bookId: book.classobj ; membership = kCore */
	public function __autoload(string $class): void;
	/* bookId: book.math ; membership = kCore */
	public function abs(float|int $num): float|int;
	/* bookId: book.math ; membership = kCore */
	public function acos(float $num): float;
	/* bookId: book.math ; membership = kCore */
	public function acosh(float $num): float;
	/* bookId: book.strings ; membership = kCore */
	public function addcslashes(string $string, string $characters): string;
	/* bookId: book.strings ; membership = kCore */
	public function addslashes(string $string): string;
	/* bookId: book.apache ; membership = kBundled */
	public function apache_child_terminate(): void;
	/* bookId: book.apache ; membership = kBundled */
	public function apache_get_modules(): array;
	/* bookId: book.apache ; membership = kBundled */
	public function apache_get_version(): false|string;
	/* bookId: book.apache ; membership = kBundled */
	public function apache_getenv(string $variable, bool $walk_to_top = false): false|string;
	/* bookId: book.apache ; membership = kBundled */
	public function apache_lookup_uri(string $filename): false|object;
	/* bookId: book.apache ; membership = kBundled */
	public function apache_note(string $note_name, ?string $note_value = NULL): false|string;
	/* bookId: book.apache ; membership = kBundled */
	public function apache_request_headers(): array;
	/* bookId: book.apache ; membership = kBundled */
	public function apache_response_headers(): array;
	/* bookId: book.apache ; membership = kBundled */
	public function apache_setenv(string $variable, string $value, bool $walk_to_top = false): bool;
	/* bookId: book.array ; membership = kCore */
	public function array_all(array $array, callable $callback): bool;
	/* bookId: book.array ; membership = kCore */
	public function array_any(array $array, callable $callback): bool;
	/* bookId: book.array ; membership = kCore */
	public function array_change_key_case(array $array, int $case = \CASE_LOWER): array;
	/* bookId: book.array ; membership = kCore */
	public function array_chunk(array $array, int $length, bool $preserve_keys = false): array;
	/* bookId: book.array ; membership = kCore */
	public function array_column(array $array, int|null|string $column_key, int|null|string $index_key = NULL): array;
	/* bookId: book.array ; membership = kCore */
	public function array_combine(array $keys, array $values): array;
	/* bookId: book.array ; membership = kCore */
	public function array_count_values(array $array): array;
	/* bookId: book.array ; membership = kCore */
	public function array_diff(array $array, array ...$arrays): array;
	/* bookId: book.array ; membership = kCore */
	public function array_diff_assoc(array $array, array ...$arrays): array;
	/* bookId: book.array ; membership = kCore */
	public function array_diff_key(array $array, array ...$arrays): array;
	/* bookId: book.array ; membership = kCore */
	public function array_fill(int $start_index, int $count, mixed $value): array;
	/* bookId: book.array ; membership = kCore */
	public function array_fill_keys(array $keys, mixed $value): array;
	/* bookId: book.array ; membership = kCore */
	public function array_filter(array $array, ?callable $callback = NULL, int $mode = 0): array;
	/* bookId: book.array ; membership = kCore */
	public function array_find(array $array, callable $callback): mixed;
	/* bookId: book.array ; membership = kCore */
	public function array_find_key(array $array, callable $callback): mixed;
	/* bookId: book.array ; membership = kCore */
	public function array_first(array $array): mixed;
	/* bookId: book.array ; membership = kCore */
	public function array_flip(array $array): array;
	/* bookId: book.array ; membership = kCore */
	public function array_intersect(array $array, array ...$arrays): array;
	/* bookId: book.array ; membership = kCore */
	public function array_intersect_assoc(array $array, array ...$arrays): array;
	/* bookId: book.array ; membership = kCore */
	public function array_intersect_key(array $array, array ...$arrays): array;
	/* bookId: book.array ; membership = kCore */
	public function array_is_list(array $array): bool;
	/* bookId: book.array ; membership = kCore */
	public function array_key_exists(/* bool|float|int|null|resource|string */ $key, array $array): bool;
	/* bookId: book.array ; membership = kCore */
	public function array_key_first(array $array): int|null|string;
	/* bookId: book.array ; membership = kCore */
	public function array_key_last(array $array): int|null|string;
	/* bookId: book.array ; membership = kCore */
	public function array_keys(array $array): array;
	/* bookId: book.array ; membership = kCore */
	public function array_last(array $array): mixed;
	/* bookId: book.array ; membership = kCore */
	public function array_map(?callable $callback, array $array, array ...$arrays): array;
	/* bookId: book.array ; membership = kCore */
	public function array_merge(array ...$arrays): array;
	/* bookId: book.array ; membership = kCore */
	public function array_merge_recursive(array ...$arrays): array;
	/* bookId: book.array ; membership = kCore */
	public function array_multisort(array &$array1, mixed $array1_sort_order = \SORT_ASC, mixed $array1_sort_flags = \SORT_REGULAR, mixed ...$rest): true;
	/* bookId: book.array ; membership = kCore */
	public function array_pad(array $array, int $length, mixed $value): array;
	/* bookId: book.array ; membership = kCore */
	public function array_pop(array &$array): mixed;
	/* bookId: book.array ; membership = kCore */
	public function array_product(array $array): float|int;
	/* bookId: book.array ; membership = kCore */
	public function array_push(array &$array, mixed ...$values): int;
	/* bookId: book.array ; membership = kCore */
	public function array_rand(array $array, int $num = 1): array|int|string;
	/* bookId: book.array ; membership = kCore */
	public function array_reduce(array $array, callable $callback, mixed $initial = NULL): mixed;
	/* bookId: book.array ; membership = kCore */
	public function array_replace(array $array, array ...$replacements): array;
	/* bookId: book.array ; membership = kCore */
	public function array_replace_recursive(array $array, array ...$replacements): array;
	/* bookId: book.array ; membership = kCore */
	public function array_reverse(array $array, bool $preserve_keys = false): array;
	/* bookId: book.array ; membership = kCore */
	public function array_search(mixed $needle, array $haystack, bool $strict = false): false|int|string;
	/* bookId: book.array ; membership = kCore */
	public function array_shift(array &$array): mixed;
	/* bookId: book.array ; membership = kCore */
	public function array_slice(array $array, int $offset, ?int $length = NULL, bool $preserve_keys = false): array;
	/* bookId: book.array ; membership = kCore */
	public function array_splice(array &$array, int $offset, ?int $length = NULL, mixed $replacement = []): array;
	/* bookId: book.array ; membership = kCore */
	public function array_sum(array $array): float|int;
	/* bookId: book.array ; membership = kCore */
	public function array_unique(array $array, int $flags = \SORT_STRING): array;
	/* bookId: book.array ; membership = kCore */
	public function array_unshift(array &$array, mixed ...$values): int;
	/* bookId: book.array ; membership = kCore */
	public function array_values(array $array): array;
	/* bookId: book.array ; membership = kCore */
	public function array_walk(array|object &$array, callable $callback, mixed $arg = NULL): true;
	/* bookId: book.array ; membership = kCore */
	public function array_walk_recursive(array|object &$array, callable $callback, mixed $arg = NULL): true;
	/* bookId: book.array ; membership = kCore */
	public function arsort(array &$array, int $flags = \SORT_REGULAR): true;
	/* bookId: book.math ; membership = kCore */
	public function asin(float $num): float;
	/* bookId: book.math ; membership = kCore */
	public function asinh(float $num): float;
	/* bookId: book.array ; membership = kCore */
	public function asort(array &$array, int $flags = \SORT_REGULAR): true;
	/* bookId: book.info ; membership = kCore */
	public function assert(mixed $assertion, null|string|\Throwable $description = NULL): bool;
	/* bookId: book.math ; membership = kCore */
	public function atan(float $num): float;
	/* bookId: book.math ; membership = kCore */
	public function atan2(float $y, float $x): float;
	/* bookId: book.math ; membership = kCore */
	public function atanh(float $num): float;
	/* bookId: book.url ; membership = kCore */
	public function base64_decode(string $string, bool $strict = false): false|string;
	/* bookId: book.url ; membership = kCore */
	public function base64_encode(string $string): string;
	/* bookId: book.math ; membership = kCore */
	public function base_convert(string $num, int $from_base, int $to_base): string;
	/* bookId: book.filesystem ; membership = kCore */
	public function basename(string $path, string $suffix = ""): string;
	/* bookId: book.bc ; membership = kBundled */
	public function bcadd(string $num1, string $num2, ?int $scale = NULL): string;
	/* bookId: book.bc ; membership = kBundled */
	public function bcceil(string $num): string;
	/* bookId: book.bc ; membership = kBundled */
	public function bccomp(string $num1, string $num2, ?int $scale = NULL): int;
	/* bookId: book.bc ; membership = kBundled */
	public function bcdiv(string $num1, string $num2, ?int $scale = NULL): string;
	/* bookId: book.bc ; membership = kBundled */
	public function bcdivmod(string $num1, string $num2, ?int $scale = NULL): array;
	/* bookId: book.bc ; membership = kBundled */
	public function bcfloor(string $num): string;
	/* bookId: book.bc ; membership = kBundled */
	public function bcmod(string $num1, string $num2, ?int $scale = NULL): string;
	/* bookId: book.bc ; membership = kBundled */
	public function bcmul(string $num1, string $num2, ?int $scale = NULL): string;
	/* bookId: book.bc ; membership = kBundled */
	public function bcpow(string $num, string $exponent, ?int $scale = NULL): string;
	/* bookId: book.bc ; membership = kBundled */
	public function bcpowmod(string $num, string $exponent, string $modulus, ?int $scale = NULL): string;
	/* bookId: book.bc ; membership = kBundled */
	public function bcround(string $num, int $precision = 0, \RoundingMode $mode = RoundingMode::HalfAwayFromZero): string;
	/* bookId: book.bc ; membership = kBundled */
	public function bcscale(int $scale): int;
	/* bookId: book.bc ; membership = kBundled */
	public function bcsqrt(string $num, ?int $scale = NULL): string;
	/* bookId: book.bc ; membership = kBundled */
	public function bcsub(string $num1, string $num2, ?int $scale = NULL): string;
	/* bookId: book.strings ; membership = kCore */
	public function bin2hex(string $string): string;
	/* bookId: book.gettext ; membership = kBundledExternal */
	public function bind_textdomain_codeset(string $domain, ?string $codeset = NULL): false|string;
	/* bookId: book.math ; membership = kCore */
	public function bindec(string $binary_string): float|int;
	/* bookId: book.gettext ; membership = kBundledExternal */
	public function bindtextdomain(string $domain, ?string $directory = NULL): false|string;
	/* bookId: book.var ; membership = kCore */
	public function boolval(mixed $value): bool;
	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzclose(/* resource */ $bz): bool;
	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzcompress(string $data, int $block_size = 4, int $work_factor = 0): int|string;
	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzdecompress(string $data, bool $use_less_memory = false): false|int|string;
	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzerrno(/* resource */ $bz): int;
	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzerror(/* resource */ $bz): array;
	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzerrstr(/* resource */ $bz): string;
	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzflush(/* resource */ $bz): bool;
	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzopen(/* resource|string */ $file, string $mode)/* : false|resource */;
	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzread(/* resource */ $bz, int $length = 1024): false|string;
	/* bookId: book.bzip2 ; membership = kBundledExternal */
	public function bzwrite(/* resource */ $bz, string $data, ?int $length = NULL): false|int;
	/* bookId: book.calendar ; membership = kBundled */
	public function cal_days_in_month(int $calendar, int $month, int $year): int;
	/* bookId: book.calendar ; membership = kBundled */
	public function cal_from_jd(int $julian_day, int $calendar): array;
	/* bookId: book.calendar ; membership = kBundled */
	public function cal_info(int $calendar = 1): array;
	/* bookId: book.calendar ; membership = kBundled */
	public function cal_to_jd(int $calendar, int $month, int $day, int $year): int;
	/* bookId: book.funchand ; membership = kCore */
	public function call_user_func(callable $callback, mixed ...$args): mixed;
	/* bookId: book.funchand ; membership = kCore */
	public function call_user_func_array(callable $callback, array $args): mixed;
	/* bookId: book.math ; membership = kCore */
	public function ceil(float|int $num): float;
	/* bookId: book.dir ; membership = kCore */
	public function chdir(string $directory): bool;
	/* bookId: book.datetime ; membership = kCore */
	public function checkdate(int $month, int $day, int $year): bool;
	/* bookId: book.network ; membership = kCore */
	public function checkdnsrr(string $hostname, string $type = "MX"): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function chgrp(string $filename, int|string $group): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function chmod(string $filename, int $permissions): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function chown(string $filename, int|string $user): bool;
	/* bookId: book.strings ; membership = kCore */
	public function chr(int $codepoint): string;
	/* bookId: book.dir ; membership = kCore */
	public function chroot(string $directory): bool;
	/* bookId: book.strings ; membership = kCore */
	public function chunk_split(string $string, int $length = 76, string $separator = "\r\n"): string;
	/* bookId: book.classobj ; membership = kCore */
	public function class_alias(string $class, string $alias, bool $autoload = true): bool;
	/* bookId: book.classobj ; membership = kCore */
	public function class_exists(string $class, bool $autoload = true): bool;
	/* bookId: book.spl ; membership = kCore */
	public function class_implements(object|string $object_or_class, bool $autoload = true): array|false;
	/* bookId: book.spl ; membership = kCore */
	public function class_parents(object|string $object_or_class, bool $autoload = true): array|false;
	/* bookId: book.spl ; membership = kCore */
	public function class_uses(object|string $object_or_class, bool $autoload = true): array|false;
	/* bookId: book.filesystem ; membership = kCore */
	public function clearstatcache(bool $clear_realpath_cache = false, string $filename = ""): void;
	/* bookId: book.info ; membership = kCore */
	public function cli_get_process_title(): ?string;
	/* bookId: book.info ; membership = kCore */
	public function cli_set_process_title(string $title): bool;
	/* bookId: book.dir ; membership = kCore */
	public function closedir(/* null|resource */ $dir_handle = NULL): void;
	/* bookId: book.network ; membership = kCore */
	public function closelog(): true;
	/* bookId: book.com ; membership = kBundled */
	public function com_create_guid(): false|string;
	/* bookId: book.com ; membership = kBundled */
	public function com_event_sink(\variant $variant, object $sink_object, array|null|string $sink_interface = NULL): bool;
	/* bookId: book.com ; membership = kBundled */
	public function com_get_active_object(string $prog_id, ?int $codepage = NULL): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function com_load_typelib(string $typelib, bool $case_insensitive = true): bool;
	/* bookId: book.com ; membership = kBundled */
	public function com_message_pump(int $timeout_milliseconds = 0): bool;
	/* bookId: book.com ; membership = kBundled */
	public function com_print_typeinfo(string|\variant $variant, ?string $dispatch_interface = NULL, bool $display_sink = false): bool;
	/* bookId: book.array ; membership = kCore */
	public function compact(array|string $var_name, array|string ...$var_names): array;
	/* bookId: book.misc ; membership = kCore */
	public function connection_aborted(): int;
	/* bookId: book.misc ; membership = kCore */
	public function connection_status(): int;
	/* bookId: book.misc ; membership = kCore */
	public function constant(string $name): mixed;
	/* bookId: book.strings ; membership = kCore */
	public function convert_cyr_string(string $str, string $from, string $to): string;
	/* bookId: book.strings ; membership = kCore */
	public function convert_uudecode(string $string): false|string;
	/* bookId: book.strings ; membership = kCore */
	public function convert_uuencode(string $string): string;
	/* bookId: book.filesystem ; membership = kCore */
	public function copy(string $from, string $to, /* null|resource */ $context = NULL): bool;
	/* bookId: book.math ; membership = kCore */
	public function cos(float $num): float;
	/* bookId: book.math ; membership = kCore */
	public function cosh(float $num): float;
	/* bookId: book.array ; membership = kCore */
	public function count(array|\Countable $value, int $mode = \COUNT_NORMAL): int;
	/* bookId: book.strings ; membership = kCore */
	public function count_chars(string $string, int $mode = 0): array|string;
	/* bookId: book.strings ; membership = kCore */
	public function crc32(string $string): int;
	/* bookId: book.funchand ; membership = kCore */
	public function create_function(string $args, string $code): string;
	/* bookId: book.strings ; membership = kCore */
	public function crypt(string $string, string $salt): string;
	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_alnum(mixed $text): bool;
	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_alpha(mixed $text): bool;
	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_cntrl(mixed $text): bool;
	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_digit(mixed $text): bool;
	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_graph(mixed $text): bool;
	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_lower(mixed $text): bool;
	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_print(mixed $text): bool;
	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_punct(mixed $text): bool;
	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_space(mixed $text): bool;
	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_upper(mixed $text): bool;
	/* bookId: book.ctype ; membership = kBundled */
	public function ctype_xdigit(mixed $text): bool;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_close(\CurlHandle $handle): void;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_copy_handle(\CurlHandle $handle): false|\CurlHandle;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_errno(\CurlHandle $handle): int;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_error(\CurlHandle $handle): string;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_escape(\CurlHandle $handle, string $string): false|string;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_exec(\CurlHandle $handle): bool|string;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_getinfo(\CurlHandle $handle, ?int $option = NULL): mixed;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_init(?string $url = NULL): false|\CurlHandle;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_add_handle(\CurlMultiHandle $multi_handle, \CurlHandle $handle): int;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_close(\CurlMultiHandle $multi_handle): void;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_errno(\CurlMultiHandle $multi_handle): int;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_exec(\CurlMultiHandle $multi_handle, int &$still_running): int;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_getcontent(\CurlHandle $handle): ?string;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_info_read(\CurlMultiHandle $multi_handle, ?int &$queued_messages = NULL): array|false;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_init(): \CurlMultiHandle;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_remove_handle(\CurlMultiHandle $multi_handle, \CurlHandle $handle): int;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_select(\CurlMultiHandle $multi_handle, float $timeout = 1.0): int;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_setopt(\CurlMultiHandle $multi_handle, int $option, mixed $value): bool;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_multi_strerror(int $error_code): ?string;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_pause(\CurlHandle $handle, int $flags): int;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_reset(\CurlHandle $handle): void;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_setopt(\CurlHandle $handle, int $option, mixed $value): bool;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_setopt_array(\CurlHandle $handle, array $options): bool;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_share_close(\CurlShareHandle $share_handle): void;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_share_errno(\CurlShareHandle $share_handle): int;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_share_init(): \CurlShareHandle;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_share_init_persistent(array $share_options): \CurlSharePersistentHandle;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_share_setopt(\CurlShareHandle $share_handle, int $option, mixed $value): bool;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_share_strerror(int $error_code): ?string;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_strerror(int $error_code): ?string;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_unescape(\CurlHandle $handle, string $string): false|string;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_upkeep(\CurlHandle $handle): bool;
	/* bookId: book.curl ; membership = kBundledExternal */
	public function curl_version(): array|false;
	/* bookId: book.array ; membership = kCore */
	public function current(array|object $array): mixed;
	/* bookId: book.datetime ; membership = kCore */
	public function date(string $format, ?int $timestamp = NULL): string;
	/* bookId: book.datetime ; membership = kCore */
	public function date_create(string $datetime = "now", ?\DateTimeZone $timezone = NULL): false|\DateTime;
	/* bookId: book.datetime ; membership = kCore */
	public function date_create_immutable(string $datetime = "now", ?\DateTimeZone $timezone = NULL): false|\DateTimeImmutable;
	/* bookId: book.datetime ; membership = kCore */
	public function date_default_timezone_get(): string;
	/* bookId: book.datetime ; membership = kCore */
	public function date_default_timezone_set(string $timezoneId): bool;
	/* bookId: book.datetime ; membership = kCore */
	public function date_parse(string $datetime): array;
	/* bookId: book.datetime ; membership = kCore */
	public function date_parse_from_format(string $format, string $datetime): array;
	/* bookId: book.datetime ; membership = kCore */
	public function date_sun_info(int $timestamp, float $latitude, float $longitude): array;
	/* bookId: book.datetime ; membership = kCore */
	public function date_sunrise(int $timestamp, int $returnFormat = \SUNFUNCS_RET_STRING, ?float $latitude = NULL, ?float $longitude = NULL, ?float $zenith = NULL, ?float $utcOffset = NULL): false|float|int|string;
	/* bookId: book.datetime ; membership = kCore */
	public function date_sunset(int $timestamp, int $returnFormat = \SUNFUNCS_RET_STRING, ?float $latitude = NULL, ?float $longitude = NULL, ?float $zenith = NULL, ?float $utcOffset = NULL): false|float|int|string;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_close(\Dba\Connection $dba): void;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_delete(array|string $key, \Dba\Connection $dba): bool;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_exists(array|string $key, \Dba\Connection $dba): bool;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_fetch(array|string $key, \Dba\Connection $dba, int $skip = 0): false|string;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_firstkey(\Dba\Connection $dba): false|string;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_handlers(bool $full_info = false): array;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_insert(array|string $key, string $value, \Dba\Connection $dba): bool;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_key_split(false|null|string $key): array|false;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_list(): array;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_nextkey(\Dba\Connection $dba): false|string;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_open(string $path, string $mode, ?string $handler = NULL, int $permission = 0644, int $map_size = 0, ?int $flags = NULL): false|\Dba\Connection;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_optimize(\Dba\Connection $dba): bool;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_popen(string $path, string $mode, ?string $handler = NULL, int $permission = 0644, int $map_size = 0, ?int $flags = NULL): false|\Dba\Connection;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_replace(array|string $key, string $value, \Dba\Connection $dba): bool;
	/* bookId: book.dba ; membership = kBundled */
	public function dba_sync(\Dba\Connection $dba): bool;
	/* bookId: book.gettext ; membership = kBundledExternal */
	public function dcgettext(string $domain, string $message, int $category): string;
	/* bookId: book.gettext ; membership = kBundledExternal */
	public function dcngettext(string $domain, string $singular, string $plural, int $count, int $category): string;
	/* bookId: book.errorfunc ; membership = kCore */
	public function debug_backtrace(int $options = \DEBUG_BACKTRACE_PROVIDE_OBJECT, int $limit = 0): array;
	/* bookId: book.errorfunc ; membership = kCore */
	public function debug_print_backtrace(int $options = 0, int $limit = 0): void;
	/* bookId: book.var ; membership = kCore */
	public function debug_zval_dump(mixed $value, mixed ...$values): void;
	/* bookId: book.math ; membership = kCore */
	public function decbin(int $num): string;
	/* bookId: book.math ; membership = kCore */
	public function dechex(int $num): string;
	/* bookId: book.math ; membership = kCore */
	public function decoct(int $num): string;
	/* bookId: book.misc ; membership = kCore */
	public function define(string $constant_name, mixed $value, bool $case_insensitive = false): bool;
	/* bookId: book.misc ; membership = kCore */
	public function defined(string $constant_name): bool;
	/* bookId: book.zlib ; membership = kBundled */
	public function deflate_add(\DeflateContext $context, string $data, int $flush_mode = \ZLIB_SYNC_FLUSH): false|string;
	/* bookId: book.zlib ; membership = kBundled */
	public function deflate_init(int $encoding, array|object $options = []): false|\DeflateContext;
	/* bookId: book.math ; membership = kCore */
	public function deg2rad(float $num): float;
	/* bookId: book.gettext ; membership = kBundledExternal */
	public function dgettext(string $domain, string $message): string;
	/* bookId: book.dir ; membership = kCore */
	public function dir(string $directory, /* null|resource */ $context = NULL): false|\Directory;
	/* bookId: book.filesystem ; membership = kCore */
	public function dirname(string $path, int $levels = 1): string;
	/* bookId: book.filesystem ; membership = kCore */
	public function disk_free_space(string $directory): false|float;
	/* bookId: book.filesystem ; membership = kCore */
	public function disk_total_space(string $directory): false|float;
	/* bookId: book.info ; membership = kCore */
	public function dl(string $extension_filename): bool;
	/* bookId: book.gettext ; membership = kBundledExternal */
	public function dngettext(string $domain, string $singular, string $plural, int $count): string;
	/* bookId: book.network ; membership = kCore */
	public function dns_get_record(string $hostname, int $type = \DNS_ANY, ?array &$authoritative_name_servers = NULL, ?array &$additional_records = NULL, bool $raw = false): array|false;
	/* bookId: book.dom ; membership = kBundledExternal */
	public function dom_import_simplexml(object $node): \DOMAttr|\DOMElement;
	/* bookId: book.array ; membership = kCore */
	public function each(array|object &$array): array;
	/* bookId: book.calendar ; membership = kBundled */
	public function easter_date(?int $year = NULL, int $mode = \CAL_EASTER_DEFAULT): int;
	/* bookId: book.calendar ; membership = kBundled */
	public function easter_days(?int $year = NULL, int $mode = \CAL_EASTER_DEFAULT): int;
	/* bookId: book.strings ; membership = kCore */
	public function echo(string ...$expressions): void;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_describe(\EnchantBroker $broker): array;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_dict_exists(\EnchantBroker $broker, string $tag): bool;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_free(\EnchantBroker $broker): bool;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_free_dict(\EnchantDictionary $dictionary): bool;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_get_dict_path(\EnchantBroker $broker, int $type): false|string;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_get_error(\EnchantBroker $broker): false|string;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_init(): false|\EnchantBroker;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_list_dicts(\EnchantBroker $broker): array;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_request_dict(\EnchantBroker $broker, string $tag): false|\EnchantDictionary;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_request_pwl_dict(\EnchantBroker $broker, string $filename): false|\EnchantDictionary;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_set_dict_path(\EnchantBroker $broker, int $type, string $path): bool;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_broker_set_ordering(\EnchantBroker $broker, string $tag, string $ordering): bool;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_add(\EnchantDictionary $dictionary, string $word): void;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_add_to_session(\EnchantDictionary $dictionary, string $word): void;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_check(\EnchantDictionary $dictionary, string $word): bool;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_describe(\EnchantDictionary $dictionary): array;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_get_error(\EnchantDictionary $dictionary): false|string;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_is_added(\EnchantDictionary $dictionary, string $word): bool;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_quick_check(\EnchantDictionary $dictionary, string $word, ?array &$suggestions = NULL): bool;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_remove(\EnchantDictionary $dictionary, string $word): void;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_remove_from_session(\EnchantDictionary $dictionary, string $word): void;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_store_replacement(\EnchantDictionary $dictionary, string $misspelled, string $correct): void;
	/* bookId: book.enchant ; membership = kBundledExternal */
	public function enchant_dict_suggest(\EnchantDictionary $dictionary, string $word): array;
	/* bookId: book.array ; membership = kCore */
	public function end(array|object &$array): mixed;
	/* bookId: book.classobj ; membership = kCore */
	public function enum_exists(string $enum, bool $autoload = true): bool;
	/* bookId: book.errorfunc ; membership = kCore */
	public function error_clear_last(): void;
	/* bookId: book.errorfunc ; membership = kCore */
	public function error_get_last(): ?array;
	/* bookId: book.errorfunc ; membership = kCore */
	public function error_log(string $message, int $message_type = 0, ?string $destination = NULL, ?string $additional_headers = NULL): bool;
	/* bookId: book.errorfunc ; membership = kCore */
	public function error_reporting(?int $error_level = NULL): int;
	/* bookId: book.exec ; membership = kCore */
	public function escapeshellarg(string $arg): string;
	/* bookId: book.exec ; membership = kCore */
	public function escapeshellcmd(string $command): string;
	/* bookId: book.exec ; membership = kCore */
	public function exec(string $command, ?array &$output = NULL, ?int &$result_code = NULL): false|string;
	/* bookId: book.exif ; membership = kBundled */
	public function exif_imagetype(string $filename): false|int;
	/* bookId: book.exif ; membership = kBundled */
	public function exif_read_data(/* resource|string */ $file, ?string $required_sections = NULL, bool $as_arrays = false, bool $read_thumbnail = false): array|false;
	/* bookId: book.exif ; membership = kBundled */
	public function exif_tagname(int $index): false|string;
	/* bookId: book.exif ; membership = kBundled */
	public function exif_thumbnail(/* resource|string */ $file, ?int &$width = NULL, ?int &$height = NULL, ?int &$image_type = NULL): false|string;
	/* bookId: book.math ; membership = kCore */
	public function exp(float $num): float;
	/* bookId: book.strings ; membership = kCore */
	public function explode(string $separator, string $string, int $limit = \PHP_INT_MAX): array;
	/* bookId: book.math ; membership = kCore */
	public function expm1(float $num): float;
	/* bookId: book.info ; membership = kCore */
	public function extension_loaded(string $extension): bool;
	/* bookId: book.array ; membership = kCore */
	public function extract(array &$array, int $flags = \EXTR_OVERWRITE, string $prefix = ""): int;
	/* bookId: book.mail ; membership = kCore */
	public function ezmlm_hash(string $addr): int;
	/* bookId: book.fpm ; membership = kCore */
	public function fastcgi_finish_request(): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function fclose(/* resource */ $stream): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function fdatasync(/* resource */ $stream): bool;
	/* bookId: book.math ; membership = kCore */
	public function fdiv(float $num1, float $num2): float;
	/* bookId: book.filesystem ; membership = kCore */
	public function feof(/* resource */ $stream): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function fflush(/* resource */ $stream): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function fgetc(/* resource */ $stream): false|string;
	/* bookId: book.filesystem ; membership = kCore */
	public function fgetcsv(/* resource */ $stream, ?int $length = NULL, string $separator = ",", string $enclosure = "\"", string $escape = "\\"): array|false;
	/* bookId: book.filesystem ; membership = kCore */
	public function fgets(/* resource */ $stream, ?int $length = NULL): false|string;
	/* bookId: book.filesystem ; membership = kCore */
	public function file(string $filename, int $flags = 0, /* null|resource */ $context = NULL): array|false;
	/* bookId: book.filesystem ; membership = kCore */
	public function file_exists(string $filename): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function file_get_contents(string $filename, bool $use_include_path = false, /* null|resource */ $context = NULL, int $offset = 0, ?int $length = NULL): false|string;
	/* bookId: book.filesystem ; membership = kCore */
	public function file_put_contents(string $filename, mixed $data, int $flags = 0, /* null|resource */ $context = NULL): false|int;
	/* bookId: book.filesystem ; membership = kCore */
	public function fileatime(string $filename): false|int;
	/* bookId: book.filesystem ; membership = kCore */
	public function filectime(string $filename): false|int;
	/* bookId: book.filesystem ; membership = kCore */
	public function filegroup(string $filename): false|int;
	/* bookId: book.filesystem ; membership = kCore */
	public function fileinode(string $filename): false|int;
	/* bookId: book.filesystem ; membership = kCore */
	public function filemtime(string $filename): false|int;
	/* bookId: book.filesystem ; membership = kCore */
	public function fileowner(string $filename): false|int;
	/* bookId: book.filesystem ; membership = kCore */
	public function fileperms(string $filename): false|int;
	/* bookId: book.filesystem ; membership = kCore */
	public function filesize(string $filename): false|int;
	/* bookId: book.filesystem ; membership = kCore */
	public function filetype(string $filename): false|string;
	/* bookId: book.filter ; membership = kBundled */
	public function filter_has_var(int $input_type, string $var_name): bool;
	/* bookId: book.filter ; membership = kBundled */
	public function filter_id(string $name): false|int;
	/* bookId: book.filter ; membership = kBundled */
	public function filter_input(int $type, string $var_name, int $filter = \FILTER_DEFAULT, array|int $options = 0): mixed;
	/* bookId: book.filter ; membership = kBundled */
	public function filter_input_array(int $type, array|int $options = \FILTER_DEFAULT, bool $add_empty = true): array|false|null;
	/* bookId: book.filter ; membership = kBundled */
	public function filter_list(): array;
	/* bookId: book.filter ; membership = kBundled */
	public function filter_var(mixed $value, int $filter = \FILTER_DEFAULT, array|int $options = 0): mixed;
	/* bookId: book.filter ; membership = kBundled */
	public function filter_var_array(array $array, array|int $options = \FILTER_DEFAULT, bool $add_empty = true): array|false|null;
	/* bookId: book.fileinfo ; membership = kBundled */
	public function finfo_buffer(\finfo $finfo, string $string, int $flags = \FILEINFO_NONE, /* null|resource */ $context = NULL): false|string;
	/* bookId: book.fileinfo ; membership = kBundled */
	public function finfo_close(\finfo $finfo): true;
	/* bookId: book.fileinfo ; membership = kBundled */
	public function finfo_file(\finfo $finfo, string $filename, int $flags = \FILEINFO_NONE, /* null|resource */ $context = NULL): false|string;
	/* bookId: book.fileinfo ; membership = kBundled */
	public function finfo_open(int $flags = \FILEINFO_NONE, ?string $magic_database = NULL): false|\finfo;
	/* bookId: book.fileinfo ; membership = kBundled */
	public function finfo_set_flags(\finfo $finfo, int $flags): true;
	/* bookId: book.var ; membership = kCore */
	public function floatval(mixed $value): float;
	/* bookId: book.filesystem ; membership = kCore */
	public function flock(/* resource */ $stream, int $operation, ?int &$would_block = NULL): bool;
	/* bookId: book.math ; membership = kCore */
	public function floor(float|int $num): float;
	/* bookId: book.outcontrol ; membership = kCore */
	public function flush(): void;
	/* bookId: book.math ; membership = kCore */
	public function fmod(float $num1, float $num2): float;
	/* bookId: book.filesystem ; membership = kCore */
	public function fnmatch(string $pattern, string $filename, int $flags = 0): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function fopen(string $filename, string $mode, bool $use_include_path = false, /* null|resource */ $context = NULL)/* : false|resource */;
	/* bookId: book.funchand ; membership = kCore */
	public function forward_static_call(callable $callback, mixed ...$args): mixed;
	/* bookId: book.funchand ; membership = kCore */
	public function forward_static_call_array(callable $callback, array $args): mixed;
	/* bookId: book.filesystem ; membership = kCore */
	public function fpassthru(/* resource */ $stream): int;
	/* bookId: book.fpm ; membership = kCore */
	public function fpm_get_status(): array|false;
	/* bookId: book.math ; membership = kCore */
	public function fpow(float $num, float $exponent): float;
	/* bookId: book.strings ; membership = kCore */
	public function fprintf(/* resource */ $stream, string $format, mixed ...$values): int;
	/* bookId: book.filesystem ; membership = kCore */
	public function fputcsv(/* resource */ $stream, array $fields, string $separator = ",", string $enclosure = "\"", string $escape = "\\", string $eol = "\n"): false|int;
	/* bookId: book.filesystem ; membership = kCore */
	public function fread(/* resource */ $stream, int $length): false|string;
	/* bookId: book.calendar ; membership = kBundled */
	public function frenchtojd(int $month, int $day, int $year): int;
	/* bookId: book.filesystem ; membership = kCore */
	public function fscanf(/* resource */ $stream, string $format, mixed &...$vars): array|false|int|null;
	/* bookId: book.filesystem ; membership = kCore */
	public function fseek(/* resource */ $stream, int $offset, int $whence = \SEEK_SET): int;
	/* bookId: book.network ; membership = kCore */
	public function fsockopen(string $hostname, int $port = 1, ?int &$error_code = NULL, ?string &$error_message = NULL, ?float $timeout = NULL)/* : false|resource */;
	/* bookId: book.filesystem ; membership = kCore */
	public function fstat(/* resource */ $stream): array|false;
	/* bookId: book.filesystem ; membership = kCore */
	public function fsync(/* resource */ $stream): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function ftell(/* resource */ $stream): false|int;
	/* bookId: book.sem ; membership = kBundled */
	public function ftok(string $filename, string $project_id): int;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_alloc(\FTP\Connection $ftp, int $size, ?string &$response = NULL): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_append(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = \FTP_BINARY): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_cdup(\FTP\Connection $ftp): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_chdir(\FTP\Connection $ftp, string $directory): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_chmod(\FTP\Connection $ftp, int $permissions, string $filename): false|int;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_close(\FTP\Connection $ftp): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_connect(string $hostname, int $port = 21, int $timeout = 90): false|\FTP\Connection;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_delete(\FTP\Connection $ftp, string $filename): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_exec(\FTP\Connection $ftp, string $command): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_fget(\FTP\Connection $ftp, /* resource */ $stream, string $remote_filename, int $mode = \FTP_BINARY, int $offset = 0): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_fput(\FTP\Connection $ftp, string $remote_filename, /* resource */ $stream, int $mode = \FTP_BINARY, int $offset = 0): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_get(\FTP\Connection $ftp, string $local_filename, string $remote_filename, int $mode = \FTP_BINARY, int $offset = 0): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_get_option(\FTP\Connection $ftp, int $option): bool|int;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_login(\FTP\Connection $ftp, string $username, string $password): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_mdtm(\FTP\Connection $ftp, string $filename): int;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_mkdir(\FTP\Connection $ftp, string $directory): false|string;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_mlsd(\FTP\Connection $ftp, string $directory): array|false;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_nb_continue(\FTP\Connection $ftp): int;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_nb_fget(\FTP\Connection $ftp, /* resource */ $stream, string $remote_filename, int $mode = \FTP_BINARY, int $offset = 0): int;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_nb_fput(\FTP\Connection $ftp, string $remote_filename, /* resource */ $stream, int $mode = \FTP_BINARY, int $offset = 0): int;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_nb_get(\FTP\Connection $ftp, string $local_filename, string $remote_filename, int $mode = \FTP_BINARY, int $offset = 0): false|int;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_nb_put(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = \FTP_BINARY, int $offset = 0): false|int;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_nlist(\FTP\Connection $ftp, string $directory): array|false;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_pasv(\FTP\Connection $ftp, bool $enable): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_put(\FTP\Connection $ftp, string $remote_filename, string $local_filename, int $mode = \FTP_BINARY, int $offset = 0): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_pwd(\FTP\Connection $ftp): false|string;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_raw(\FTP\Connection $ftp, string $command): ?array;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_rawlist(\FTP\Connection $ftp, string $directory, bool $recursive = false): array|false;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_rename(\FTP\Connection $ftp, string $from, string $to): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_rmdir(\FTP\Connection $ftp, string $directory): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_set_option(\FTP\Connection $ftp, int $option, bool|int $value): true;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_site(\FTP\Connection $ftp, string $command): bool;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_size(\FTP\Connection $ftp, string $filename): int;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_ssl_connect(string $hostname, int $port = 21, int $timeout = 90): false|\FTP\Connection;
	/* bookId: book.ftp ; membership = kBundled */
	public function ftp_systype(\FTP\Connection $ftp): false|string;
	/* bookId: book.filesystem ; membership = kCore */
	public function ftruncate(/* resource */ $stream, int $size): bool;
	/* bookId: book.funchand ; membership = kCore */
	public function func_get_arg(int $position): mixed;
	/* bookId: book.funchand ; membership = kCore */
	public function func_get_args(): array;
	/* bookId: book.funchand ; membership = kCore */
	public function func_num_args(): int;
	/* bookId: book.funchand ; membership = kCore */
	public function function_exists(string $function): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function fwrite(/* resource */ $stream, string $data, ?int $length = NULL): false|int;
	/* bookId: book.info ; membership = kCore */
	public function gc_collect_cycles(): int;
	/* bookId: book.info ; membership = kCore */
	public function gc_disable(): void;
	/* bookId: book.info ; membership = kCore */
	public function gc_enable(): void;
	/* bookId: book.info ; membership = kCore */
	public function gc_enabled(): bool;
	/* bookId: book.info ; membership = kCore */
	public function gc_mem_caches(): int;
	/* bookId: book.info ; membership = kCore */
	public function gc_status(): array;
	/* bookId: book.image ; membership = kBundled */
	public function gd_info(): array;
	/* bookId: book.misc ; membership = kCore */
	public function get_browser(?string $user_agent = NULL, bool $return_array = false): array|false|object;
	/* bookId: book.classobj ; membership = kCore */
	public function get_called_class(): string;
	/* bookId: book.info ; membership = kCore */
	public function get_cfg_var(string $option): array|false|string;
	/* bookId: book.classobj ; membership = kCore */
	public function get_class_methods(object|string $object_or_class): array;
	/* bookId: book.classobj ; membership = kCore */
	public function get_class_vars(string $class): array;
	/* bookId: book.info ; membership = kCore */
	public function get_current_user(): string;
	/* bookId: book.var ; membership = kCore */
	public function get_debug_type(mixed $value): string;
	/* bookId: book.classobj ; membership = kCore */
	public function get_declared_classes(): array;
	/* bookId: book.classobj ; membership = kCore */
	public function get_declared_interfaces(): array;
	/* bookId: book.classobj ; membership = kCore */
	public function get_declared_traits(): array;
	/* bookId: book.info ; membership = kCore */
	public function get_defined_constants(bool $categorize = false): array;
	/* bookId: book.funchand ; membership = kCore */
	public function get_defined_functions(bool $exclude_disabled = true): array;
	/* bookId: book.var ; membership = kCore */
	public function get_defined_vars(): array;
	/* bookId: book.errorfunc ; membership = kCore */
	public function get_error_handler(): ?callable;
	/* bookId: book.errorfunc ; membership = kCore */
	public function get_exception_handler(): ?callable;
	/* bookId: book.info ; membership = kCore */
	public function get_extension_funcs(string $extension): array|false;
	/* bookId: book.url ; membership = kCore */
	public function get_headers(string $url, bool $associative = false, /* null|resource */ $context = NULL): array|false;
	/* bookId: book.strings ; membership = kCore */
	public function get_html_translation_table(int $table = \HTML_SPECIALCHARS, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, string $encoding = "UTF-8"): array;
	/* bookId: book.info ; membership = kCore */
	public function get_include_path(): false|string;
	/* bookId: book.info ; membership = kCore */
	public function get_included_files(): array;
	/* bookId: book.info ; membership = kCore */
	public function get_loaded_extensions(bool $zend_extensions = false): array;
	/* bookId: book.info ; membership = kCore */
	public function get_magic_quotes_gpc(): false;
	/* bookId: book.info ; membership = kCore */
	public function get_magic_quotes_runtime(): false;
	/* bookId: book.classobj ; membership = kCore */
	public function get_mangled_object_vars(object $object): array;
	/* bookId: book.url ; membership = kCore */
	public function get_meta_tags(string $filename, bool $use_include_path = false): array|false;
	/* bookId: book.classobj ; membership = kCore */
	public function get_object_vars(object $object): array;
	/* bookId: book.var ; membership = kCore */
	public function get_resource_id(/* resource */ $resource): int;
	/* bookId: book.var ; membership = kCore */
	public function get_resource_type(/* resource */ $resource): string;
	/* bookId: book.info ; membership = kCore */
	public function get_resources(?string $type = NULL): array;
	/* bookId: book.apache ; membership = kBundled */
	public function getallheaders(): array;
	/* bookId: book.dir ; membership = kCore */
	public function getcwd(): false|string;
	/* bookId: book.datetime ; membership = kCore */
	public function getdate(?int $timestamp = NULL): array;
	/* bookId: book.info ; membership = kCore */
	public function getenv(?string $name = NULL, bool $local_only = false): array|false|string;
	/* bookId: book.network ; membership = kCore */
	public function gethostbyaddr(string $ip): false|string;
	/* bookId: book.network ; membership = kCore */
	public function gethostbyname(string $hostname): string;
	/* bookId: book.network ; membership = kCore */
	public function gethostbynamel(string $hostname): array|false;
	/* bookId: book.network ; membership = kCore */
	public function gethostname(): false|string;
	/* bookId: book.image ; membership = kBundled */
	public function getimagesize(string $filename, ?array &$image_info = NULL): array|false;
	/* bookId: book.image ; membership = kBundled */
	public function getimagesizefromstring(string $string, ?array &$image_info = NULL): array|false;
	/* bookId: book.info ; membership = kCore */
	public function getlastmod(): false|int;
	/* bookId: book.network ; membership = kCore */
	public function getmxrr(string $hostname, array &$hosts, ?array &$weights = NULL): bool;
	/* bookId: book.info ; membership = kCore */
	public function getmygid(): false|int;
	/* bookId: book.info ; membership = kCore */
	public function getmyinode(): false|int;
	/* bookId: book.info ; membership = kCore */
	public function getmypid(): false|int;
	/* bookId: book.info ; membership = kCore */
	public function getmyuid(): false|int;
	/* bookId: book.info ; membership = kCore */
	public function getopt(string $short_options, array $long_options = [], ?int &$rest_index = NULL): array|false;
	/* bookId: book.network ; membership = kCore */
	public function getprotobyname(string $protocol): false|int;
	/* bookId: book.network ; membership = kCore */
	public function getprotobynumber(int $protocol): false|string;
	/* bookId: book.random ; membership = kCore */
	public function getrandmax(): int;
	/* bookId: book.info ; membership = kCore */
	public function getrusage(int $mode = 0): array|false;
	/* bookId: book.network ; membership = kCore */
	public function getservbyname(string $service, string $protocol): false|int;
	/* bookId: book.network ; membership = kCore */
	public function getservbyport(int $port, string $protocol): false|string;
	/* bookId: book.gettext ; membership = kBundledExternal */
	public function gettext(string $message): string;
	/* bookId: book.datetime ; membership = kCore */
	public function gettimeofday(bool $as_float = false): array|float;
	/* bookId: book.var ; membership = kCore */
	public function gettype(mixed $value): string;
	/* bookId: book.filesystem ; membership = kCore */
	public function glob(string $pattern, int $flags = 0): array|false;
	/* bookId: book.datetime ; membership = kCore */
	public function gmdate(string $format, ?int $timestamp = NULL): string;
	/* bookId: book.datetime ; membership = kCore */
	public function gmmktime(int $hour, ?int $minute = NULL, ?int $second = NULL, ?int $month = NULL, ?int $day = NULL, ?int $year = NULL): false|int;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_abs(int|string|\GMP $num): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_add(int|string|\GMP $num1, int|string|\GMP $num2): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_and(int|string|\GMP $num1, int|string|\GMP $num2): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_binomial(int|string|\GMP $n, int $k): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_clrbit(\GMP $num, int $index): void;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_cmp(int|string|\GMP $num1, int|string|\GMP $num2): int;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_com(int|string|\GMP $num): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_div_q(int|string|\GMP $num1, int|string|\GMP $num2, int $rounding_mode = \GMP_ROUND_ZERO): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_div_qr(int|string|\GMP $num1, int|string|\GMP $num2, int $rounding_mode = \GMP_ROUND_ZERO): array;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_div_r(int|string|\GMP $num1, int|string|\GMP $num2, int $rounding_mode = \GMP_ROUND_ZERO): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_divexact(int|string|\GMP $num1, int|string|\GMP $num2): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_export(int|string|\GMP $num, int $word_size = 1, int $flags = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN): string;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_fact(int|string|\GMP $num): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_gcd(int|string|\GMP $num1, int|string|\GMP $num2): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_gcdext(int|string|\GMP $num1, int|string|\GMP $num2): array;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_hamdist(int|string|\GMP $num1, int|string|\GMP $num2): int;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_import(string $data, int $word_size = 1, int $flags = GMP_MSW_FIRST | GMP_NATIVE_ENDIAN): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_init(int|string $num, int $base = 0): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_intval(int|string|\GMP $num): int;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_invert(int|string|\GMP $num1, int|string|\GMP $num2): false|\GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_jacobi(int|string|\GMP $num1, int|string|\GMP $num2): int;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_kronecker(int|string|\GMP $num1, int|string|\GMP $num2): int;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_lcm(int|string|\GMP $num1, int|string|\GMP $num2): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_legendre(int|string|\GMP $num1, int|string|\GMP $num2): int;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_mod(int|string|\GMP $num1, int|string|\GMP $num2): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_mul(int|string|\GMP $num1, int|string|\GMP $num2): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_neg(int|string|\GMP $num): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_nextprime(int|string|\GMP $num): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_or(int|string|\GMP $num1, int|string|\GMP $num2): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_perfect_power(int|string|\GMP $num): bool;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_perfect_square(int|string|\GMP $num): bool;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_popcount(int|string|\GMP $num): int;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_pow(int|string|\GMP $num, int $exponent): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_powm(int|string|\GMP $num, int|string|\GMP $exponent, int|string|\GMP $modulus): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_prob_prime(int|string|\GMP $num, int $repetitions = 10): int;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_random(int $limiter = 20): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_random_bits(int $bits): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_random_range(int|string|\GMP $min, int|string|\GMP $max): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_random_seed(int|string|\GMP $seed): void;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_root(int|string|\GMP $num, int $nth): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_rootrem(int|string|\GMP $num, int $nth): array;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_scan0(int|string|\GMP $num1, int $start): int;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_scan1(int|string|\GMP $num1, int $start): int;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_setbit(\GMP $num, int $index, bool $value = true): void;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_sign(int|string|\GMP $num): int;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_sqrt(int|string|\GMP $num): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_sqrtrem(int|string|\GMP $num): array;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_strval(int|string|\GMP $num, int $base = 10): string;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_sub(int|string|\GMP $num1, int|string|\GMP $num2): \GMP;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_testbit(int|string|\GMP $num, int $index): bool;
	/* bookId: book.gmp ; membership = kBundledExternal */
	public function gmp_xor(int|string|\GMP $num1, int|string|\GMP $num2): \GMP;
	/* bookId: book.datetime ; membership = kCore */
	public function gmstrftime(string $format, ?int $timestamp = NULL): false|string;
	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_extract(string $haystack, int $size, int $type = \GRAPHEME_EXTR_COUNT, int $offset = 0, ?int &$next = NULL): false|string;
	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_levenshtein(string $string1, string $string2, int $insertion_cost = 1, int $replacement_cost = 1, int $deletion_cost = 1, string $locale = ""): false|int;
	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_str_split(string $string, int $length = 1): array|false;
	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_stripos(string $haystack, string $needle, int $offset = 0, string $locale = ""): false|int;
	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_stristr(string $haystack, string $needle, bool $beforeNeedle = false, string $locale = ""): false|string;
	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_strlen(string $string): false|int|null;
	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_strpos(string $haystack, string $needle, int $offset = 0, string $locale = ""): false|int;
	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_strripos(string $haystack, string $needle, int $offset = 0, string $locale = ""): false|int;
	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_strrpos(string $haystack, string $needle, int $offset = 0, string $locale = ""): false|int;
	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_strstr(string $haystack, string $needle, bool $beforeNeedle = false, string $locale = ""): false|string;
	/* bookId: book.intl ; membership = kBundled */
	public function grapheme_substr(string $string, int $offset, ?int $length = NULL, string $locale = ""): false|string;
	/* bookId: book.calendar ; membership = kBundled */
	public function gregoriantojd(int $month, int $day, int $year): int;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzclose(/* resource */ $stream): bool;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzcompress(string $data, int $level = 1, int $encoding = \ZLIB_ENCODING_DEFLATE): false|string;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzdecode(string $data, int $max_length = 0): false|string;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzdeflate(string $data, int $level = 1, int $encoding = \ZLIB_ENCODING_RAW): false|string;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzencode(string $data, int $level = 1, int $encoding = \ZLIB_ENCODING_GZIP): false|string;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzeof(/* resource */ $stream): bool;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzfile(string $filename, bool $use_include_path = false): array|false;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzgetc(/* resource */ $stream): false|string;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzgets(/* resource */ $stream, ?int $length = NULL): false|string;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzinflate(string $data, int $max_length = 0): false|string;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzopen(string $filename, string $mode, bool $use_include_path = false)/* : false|resource */;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzpassthru(/* resource */ $stream): int;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzread(/* resource */ $stream, int $length): false|string;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzrewind(/* resource */ $stream): bool;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzseek(/* resource */ $stream, int $offset, int $whence = \SEEK_SET): int;
	/* bookId: book.zlib ; membership = kBundled */
	public function gztell(/* resource */ $stream): false|int;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzuncompress(string $data, int $max_length = 0): false|string;
	/* bookId: book.zlib ; membership = kBundled */
	public function gzwrite(/* resource */ $stream, string $data, ?int $length = NULL): false|int;
	/* bookId: book.hash ; membership = kCore */
	public function hash(string $algo, string $data, bool $binary = false, array $options = []): string;
	/* bookId: book.hash ; membership = kCore */
	public function hash_algos(): array;
	/* bookId: book.hash ; membership = kCore */
	public function hash_copy(\HashContext $context): \HashContext;
	/* bookId: book.hash ; membership = kCore */
	public function hash_equals(string $known_string, string $user_string): bool;
	/* bookId: book.hash ; membership = kCore */
	public function hash_file(string $algo, string $filename, bool $binary = false, array $options = []): false|string;
	/* bookId: book.hash ; membership = kCore */
	public function hash_final(\HashContext $context, bool $binary = false): string;
	/* bookId: book.hash ; membership = kCore */
	public function hash_hkdf(string $algo, string $key, int $length = 0, string $info = "", string $salt = ""): string;
	/* bookId: book.hash ; membership = kCore */
	public function hash_hmac(string $algo, string $data, string $key, bool $binary = false): string;
	/* bookId: book.hash ; membership = kCore */
	public function hash_hmac_algos(): array;
	/* bookId: book.hash ; membership = kCore */
	public function hash_hmac_file(string $algo, string $filename, string $key, bool $binary = false): false|string;
	/* bookId: book.hash ; membership = kCore */
	public function hash_init(string $algo, int $flags = 0, string $key = "", array $options = []): \HashContext;
	/* bookId: book.hash ; membership = kCore */
	public function hash_pbkdf2(string $algo, string $password, string $salt, int $iterations, int $length = 0, bool $binary = false, array $options = []): string;
	/* bookId: book.hash ; membership = kCore */
	public function hash_update(\HashContext $context, string $data): true;
	/* bookId: book.hash ; membership = kCore */
	public function hash_update_file(\HashContext $context, string $filename, /* null|resource */ $stream_context = NULL): bool;
	/* bookId: book.hash ; membership = kCore */
	public function hash_update_stream(\HashContext $context, /* resource */ $stream, int $length = 1): int;
	/* bookId: book.network ; membership = kCore */
	public function header(string $header, bool $replace = true, int $response_code = 0): void;
	/* bookId: book.network ; membership = kCore */
	public function header_register_callback(callable $callback): bool;
	/* bookId: book.network ; membership = kCore */
	public function header_remove(?string $name = NULL): void;
	/* bookId: book.network ; membership = kCore */
	public function headers_list(): array;
	/* bookId: book.network ; membership = kCore */
	public function headers_sent(?string &$filename = NULL, ?int &$line = NULL): bool;
	/* bookId: book.strings ; membership = kCore */
	public function hebrev(string $string, int $max_chars_per_line = 0): string;
	/* bookId: book.strings ; membership = kCore */
	public function hebrevc(string $hebrew_text, int $max_chars_per_line = 0): string;
	/* bookId: book.strings ; membership = kCore */
	public function hex2bin(string $string): false|string;
	/* bookId: book.math ; membership = kCore */
	public function hexdec(string $hex_string): float|int;
	/* bookId: book.misc ; membership = kCore */
	public function highlight_file(string $filename, bool $return = false): bool|string;
	/* bookId: book.misc ; membership = kCore */
	public function highlight_string(string $string, bool $return = false): string|true;
	/* bookId: book.misc ; membership = kCore */
	public function hrtime(bool $as_number = false): array|false|float|int;
	/* bookId: book.strings ; membership = kCore */
	public function html_entity_decode(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = NULL): string;
	/* bookId: book.strings ; membership = kCore */
	public function htmlentities(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = NULL, bool $double_encode = true): string;
	/* bookId: book.strings ; membership = kCore */
	public function htmlspecialchars(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401, ?string $encoding = NULL, bool $double_encode = true): string;
	/* bookId: book.strings ; membership = kCore */
	public function htmlspecialchars_decode(string $string, int $flags = ENT_QUOTES | ENT_SUBSTITUTE | ENT_HTML401): string;
	/* bookId: book.url ; membership = kCore */
	public function http_build_query(array|object $data, string $numeric_prefix = "", ?string $arg_separator = NULL, int $encoding_type = \PHP_QUERY_RFC1738): string;
	/* bookId: book.network ; membership = kCore */
	public function http_clear_last_response_headers(): void;
	/* bookId: book.network ; membership = kCore */
	public function http_get_last_response_headers(): ?array;
	/* bookId: book.network ; membership = kCore */
	public function http_response_code(int $response_code = 0): bool|int;
	/* bookId: book.math ; membership = kCore */
	public function hypot(float $x, float $y): float;
	/* bookId: book.iconv ; membership = kBundled */
	public function iconv(string $from_encoding, string $to_encoding, string $string): false|string;
	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_get_encoding(string $type = "all"): array|false|string;
	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_mime_decode(string $string, int $mode = 0, ?string $encoding = NULL): false|string;
	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_mime_decode_headers(string $headers, int $mode = 0, ?string $encoding = NULL): array|false;
	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_mime_encode(string $field_name, string $field_value, array $options = []): false|string;
	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_set_encoding(string $type, string $encoding): bool;
	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_strlen(string $string, ?string $encoding = NULL): false|int;
	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_strpos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): false|int;
	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_strrpos(string $haystack, string $needle, ?string $encoding = NULL): false|int;
	/* bookId: book.iconv ; membership = kBundled */
	public function iconv_substr(string $string, int $offset, ?int $length = NULL, ?string $encoding = NULL): false|string;
	/* bookId: book.datetime ; membership = kCore */
	public function idate(string $format, ?int $timestamp = NULL): false|int;
	/* bookId: book.intl ; membership = kBundled */
	public function idn_to_ascii(string $domain, int $flags = \IDNA_DEFAULT, int $variant = \INTL_IDNA_VARIANT_UTS46, ?array &$idna_info = NULL): false|string;
	/* bookId: book.intl ; membership = kBundled */
	public function idn_to_utf8(string $domain, int $flags = \IDNA_DEFAULT, int $variant = \INTL_IDNA_VARIANT_UTS46, ?array &$idna_info = NULL): false|string;
	/* bookId: book.misc ; membership = kCore */
	public function ignore_user_abort(?bool $enable = NULL): int;
	/* bookId: book.image ; membership = kBundled */
	public function image_type_to_extension(int $image_type, bool $include_dot = true): false|string;
	/* bookId: book.image ; membership = kBundled */
	public function image_type_to_mime_type(int $image_type): string;
	/* bookId: book.image ; membership = kBundled */
	public function imageaffine(\GdImage $image, array $affine, ?array $clip = NULL): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imageaffinematrixconcat(array $matrix1, array $matrix2): array|false;
	/* bookId: book.image ; membership = kBundled */
	public function imageaffinematrixget(int $type, array|float $options): array|false;
	/* bookId: book.image ; membership = kBundled */
	public function imagealphablending(\GdImage $image, bool $enable): true;
	/* bookId: book.image ; membership = kBundled */
	public function imageantialias(\GdImage $image, bool $enable): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagearc(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $start_angle, int $end_angle, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imageavif(\GdImage $image, /* null|resource|string */ $file = NULL, int $quality = 1, int $speed = 1): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagebmp(\GdImage $image, /* null|resource|string */ $file = NULL, bool $compressed = true): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagechar(\GdImage $image, int|\GdFont $font, int $x, int $y, string $char, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagecharup(\GdImage $image, int|\GdFont $font, int $x, int $y, string $char, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolorallocate(\GdImage $image, int $red, int $green, int $blue): false|int;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolorallocatealpha(\GdImage $image, int $red, int $green, int $blue, int $alpha): false|int;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolorat(\GdImage $image, int $x, int $y): false|int;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolorclosest(\GdImage $image, int $red, int $green, int $blue): int;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolorclosestalpha(\GdImage $image, int $red, int $green, int $blue, int $alpha): int;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolorclosesthwb(\GdImage $image, int $red, int $green, int $blue): int;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolordeallocate(\GdImage $image, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolorexact(\GdImage $image, int $red, int $green, int $blue): int;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolorexactalpha(\GdImage $image, int $red, int $green, int $blue, int $alpha): int;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolormatch(\GdImage $image1, \GdImage $image2): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolorresolve(\GdImage $image, int $red, int $green, int $blue): int;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolorresolvealpha(\GdImage $image, int $red, int $green, int $blue, int $alpha): int;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolorset(\GdImage $image, int $color, int $red, int $green, int $blue, int $alpha = 0): ?false;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolorsforindex(\GdImage $image, int $color): array;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolorstotal(\GdImage $image): int;
	/* bookId: book.image ; membership = kBundled */
	public function imagecolortransparent(\GdImage $image, ?int $color = NULL): int;
	/* bookId: book.image ; membership = kBundled */
	public function imageconvolution(\GdImage $image, array $matrix, float $divisor, float $offset): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagecopy(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagecopymerge(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height, int $pct): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagecopymergegray(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $src_width, int $src_height, int $pct): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagecopyresampled(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_width, int $dst_height, int $src_width, int $src_height): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagecopyresized(\GdImage $dst_image, \GdImage $src_image, int $dst_x, int $dst_y, int $src_x, int $src_y, int $dst_width, int $dst_height, int $src_width, int $src_height): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreate(int $width, int $height): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromavif(string $filename): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefrombmp(string $filename): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromgd(string $filename): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromgd2(string $filename): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromgd2part(string $filename, int $x, int $y, int $width, int $height): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromgif(string $filename): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromjpeg(string $filename): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefrompng(string $filename): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromstring(string $data): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromtga(string $filename): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromwbmp(string $filename): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromwebp(string $filename): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromxbm(string $filename): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatefromxpm(string $filename): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecreatetruecolor(int $width, int $height): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecrop(\GdImage $image, array $rectangle): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagecropauto(\GdImage $image, int $mode = \IMG_CROP_DEFAULT, float $threshold = 0.5, int $color = 1): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagedashedline(\GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagedestroy(\GdImage $image): true;
	/* bookId: book.image ; membership = kBundled */
	public function imageellipse(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagefill(\GdImage $image, int $x, int $y, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagefilledarc(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $start_angle, int $end_angle, int $color, int $style): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagefilledellipse(\GdImage $image, int $center_x, int $center_y, int $width, int $height, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagefilledpolygon(\GdImage $image, array $points, int $color): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagefilledrectangle(\GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagefilltoborder(\GdImage $image, int $x, int $y, int $border_color, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagefilter(\GdImage $image, int $filter, array|bool|float|int ...$args): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imageflip(\GdImage $image, int $mode): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagefontheight(int|\GdFont $font): int;
	/* bookId: book.image ; membership = kBundled */
	public function imagefontwidth(int|\GdFont $font): int;
	/* bookId: book.image ; membership = kBundled */
	public function imageftbbox(float $size, float $angle, string $font_filename, string $string, array $options = []): array|false;
	/* bookId: book.image ; membership = kBundled */
	public function imagefttext(\GdImage $image, float $size, float $angle, int $x, int $y, int $color, string $font_filename, string $text, array $options = []): array|false;
	/* bookId: book.image ; membership = kBundled */
	public function imagegammacorrect(\GdImage $image, float $input_gamma, float $output_gamma): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagegd(\GdImage $image, ?string $file = NULL): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagegd2(\GdImage $image, ?string $file = NULL, int $chunk_size = 128, int $mode = \IMG_GD2_RAW): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagegetclip(\GdImage $image): array;
	/* bookId: book.image ; membership = kBundled */
	public function imagegetinterpolation(\GdImage $image): int;
	/* bookId: book.image ; membership = kBundled */
	public function imagegif(\GdImage $image, /* null|resource|string */ $file = NULL): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagegrabscreen(): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagegrabwindow(int $handle, bool $client_area = false): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imageinterlace(\GdImage $image, ?bool $enable = NULL): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imageistruecolor(\GdImage $image): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagejpeg(\GdImage $image, /* null|resource|string */ $file = NULL, int $quality = 1): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagelayereffect(\GdImage $image, int $effect): true;
	/* bookId: book.image ; membership = kBundled */
	public function imageline(\GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imageloadfont(string $filename): false|\GdFont;
	/* bookId: book.image ; membership = kBundled */
	public function imageopenpolygon(\GdImage $image, array $points, int $color): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagepalettecopy(\GdImage $dst, \GdImage $src): void;
	/* bookId: book.image ; membership = kBundled */
	public function imagepalettetotruecolor(\GdImage $image): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagepng(\GdImage $image, /* null|resource|string */ $file = NULL, int $quality = 1, int $filters = 1): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagepolygon(\GdImage $image, array $points, int $color): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagerectangle(\GdImage $image, int $x1, int $y1, int $x2, int $y2, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imageresolution(\GdImage $image, ?int $resolution_x = NULL, ?int $resolution_y = NULL): array|true;
	/* bookId: book.image ; membership = kBundled */
	public function imagerotate(\GdImage $image, float $angle, int $background_color): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagesavealpha(\GdImage $image, bool $enable): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagescale(\GdImage $image, int $width, int $height = 1, int $mode = \IMG_BILINEAR_FIXED): false|\GdImage;
	/* bookId: book.image ; membership = kBundled */
	public function imagesetbrush(\GdImage $image, \GdImage $brush): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagesetclip(\GdImage $image, int $x1, int $y1, int $x2, int $y2): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagesetinterpolation(\GdImage $image, int $method = \IMG_BILINEAR_FIXED): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagesetpixel(\GdImage $image, int $x, int $y, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagesetstyle(\GdImage $image, array $style): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagesetthickness(\GdImage $image, int $thickness): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagesettile(\GdImage $image, \GdImage $tile): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagestring(\GdImage $image, int|\GdFont $font, int $x, int $y, string $string, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagestringup(\GdImage $image, int|\GdFont $font, int $x, int $y, string $string, int $color): true;
	/* bookId: book.image ; membership = kBundled */
	public function imagesx(\GdImage $image): int;
	/* bookId: book.image ; membership = kBundled */
	public function imagesy(\GdImage $image): int;
	/* bookId: book.image ; membership = kBundled */
	public function imagetruecolortopalette(\GdImage $image, bool $dither, int $num_colors): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagettfbbox(float $size, float $angle, string $font_filename, string $string, array $options = []): array|false;
	/* bookId: book.image ; membership = kBundled */
	public function imagettftext(\GdImage $image, float $size, float $angle, int $x, int $y, int $color, string $font_filename, string $text, array $options = []): array|false;
	/* bookId: book.image ; membership = kBundled */
	public function imagetypes(): int;
	/* bookId: book.image ; membership = kBundled */
	public function imagewbmp(\GdImage $image, /* null|resource|string */ $file = NULL, ?int $foreground_color = NULL): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagewebp(\GdImage $image, /* null|resource|string */ $file = NULL, int $quality = 1): bool;
	/* bookId: book.image ; membership = kBundled */
	public function imagexbm(\GdImage $image, ?string $filename, ?int $foreground_color = NULL): bool;
	/* bookId: book.strings ; membership = kCore */
	public function implode(string $separator, array $array): string;
	/* bookId: book.array ; membership = kCore */
	public function in_array(mixed $needle, array $haystack, bool $strict = false): bool;
	/* bookId: book.network ; membership = kCore */
	public function inet_ntop(string $ip): false|string;
	/* bookId: book.network ; membership = kCore */
	public function inet_pton(string $ip): false|string;
	/* bookId: book.zlib ; membership = kBundled */
	public function inflate_add(\InflateContext $context, string $data, int $flush_mode = \ZLIB_SYNC_FLUSH): false|string;
	/* bookId: book.zlib ; membership = kBundled */
	public function inflate_get_read_len(\InflateContext $context): int;
	/* bookId: book.zlib ; membership = kBundled */
	public function inflate_get_status(\InflateContext $context): int;
	/* bookId: book.zlib ; membership = kBundled */
	public function inflate_init(int $encoding, array|object $options = []): false|\InflateContext;
	/* bookId: book.info ; membership = kCore */
	public function ini_get(string $option): false|string;
	/* bookId: book.info ; membership = kCore */
	public function ini_get_all(?string $extension = NULL, bool $details = true): array|false;
	/* bookId: book.info ; membership = kCore */
	public function ini_parse_quantity(string $shorthand): int;
	/* bookId: book.info ; membership = kCore */
	public function ini_restore(string $option): void;
	/* bookId: book.info ; membership = kCore */
	public function ini_set(string $option, bool|float|int|null|string $value): false|string;
	/* bookId: book.math ; membership = kCore */
	public function intdiv(int $num1, int $num2): int;
	/* bookId: book.classobj ; membership = kCore */
	public function interface_exists(string $interface, bool $autoload = true): bool;
	/* bookId: book.intl ; membership = kBundled */
	public function intl_error_name(int $errorCode): string;
	/* bookId: book.intl ; membership = kBundled */
	public function intl_get_error_code(): int;
	/* bookId: book.intl ; membership = kBundled */
	public function intl_get_error_message(): string;
	/* bookId: book.intl ; membership = kBundled */
	public function intl_is_failure(int $errorCode): bool;
	/* bookId: book.var ; membership = kCore */
	public function intval(mixed $value, int $base = 10): int;
	/* bookId: book.network ; membership = kCore */
	public function ip2long(string $ip): false|int;
	/* bookId: book.image ; membership = kBundled */
	public function iptcembed(string $iptc_data, string $filename, int $spool = 0): bool|string;
	/* bookId: book.image ; membership = kBundled */
	public function iptcparse(string $iptc_block): array|false;
	/* bookId: book.classobj ; membership = kCore */
	public function is_a(mixed $object_or_class, string $class, bool $allow_string = false): bool;
	/* bookId: book.var ; membership = kCore */
	public function is_array(mixed $value): bool;
	/* bookId: book.var ; membership = kCore */
	public function is_bool(mixed $value): bool;
	/* bookId: book.var ; membership = kCore */
	public function is_callable(mixed $value, bool $syntax_only = false, ?string &$callable_name = NULL): bool;
	/* bookId: book.var ; membership = kCore */
	public function is_countable(mixed $value): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function is_dir(string $filename): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function is_executable(string $filename): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function is_file(string $filename): bool;
	/* bookId: book.math ; membership = kCore */
	public function is_finite(float $num): bool;
	/* bookId: book.var ; membership = kCore */
	public function is_float(mixed $value): bool;
	/* bookId: book.math ; membership = kCore */
	public function is_infinite(float $num): bool;
	/* bookId: book.var ; membership = kCore */
	public function is_int(mixed $value): bool;
	/* bookId: book.var ; membership = kCore */
	public function is_iterable(mixed $value): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function is_link(string $filename): bool;
	/* bookId: book.math ; membership = kCore */
	public function is_nan(float $num): bool;
	/* bookId: book.var ; membership = kCore */
	public function is_null(mixed $value): bool;
	/* bookId: book.var ; membership = kCore */
	public function is_numeric(mixed $value): bool;
	/* bookId: book.var ; membership = kCore */
	public function is_object(mixed $value): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function is_readable(string $filename): bool;
	/* bookId: book.var ; membership = kCore */
	public function is_resource(mixed $value): bool;
	/* bookId: book.var ; membership = kCore */
	public function is_scalar(mixed $value): bool;
	/* bookId: book.soap ; membership = kBundledExternal */
	public function is_soap_fault(mixed $object): bool;
	/* bookId: book.var ; membership = kCore */
	public function is_string(mixed $value): bool;
	/* bookId: book.classobj ; membership = kCore */
	public function is_subclass_of(mixed $object_or_class, string $class, bool $allow_string = true): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function is_uploaded_file(string $filename): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function is_writable(string $filename): bool;
	/* bookId: book.spl ; membership = kCore */
	public function iterator_apply(\Traversable $iterator, callable $callback, ?array $args = NULL): int;
	/* bookId: book.spl ; membership = kCore */
	public function iterator_count(array|\Traversable $iterator): int;
	/* bookId: book.spl ; membership = kCore */
	public function iterator_to_array(array|\Traversable $iterator, bool $preserve_keys = true): array;
	/* bookId: book.calendar ; membership = kBundled */
	public function jddayofweek(int $julian_day, int $mode = \CAL_DOW_DAYNO): int|string;
	/* bookId: book.calendar ; membership = kBundled */
	public function jdmonthname(int $julian_day, int $mode): string;
	/* bookId: book.calendar ; membership = kBundled */
	public function jdtofrench(int $julian_day): string;
	/* bookId: book.calendar ; membership = kBundled */
	public function jdtogregorian(int $julian_day): string;
	/* bookId: book.calendar ; membership = kBundled */
	public function jdtojewish(int $julian_day, bool $hebrew = false, int $flags = 0): string;
	/* bookId: book.calendar ; membership = kBundled */
	public function jdtojulian(int $julian_day): string;
	/* bookId: book.calendar ; membership = kBundled */
	public function jdtounix(int $julian_day): int;
	/* bookId: book.calendar ; membership = kBundled */
	public function jewishtojd(int $month, int $day, int $year): int;
	/* bookId: book.image ; membership = kBundled */
	public function jpeg2wbmp(string $jpegname, string $wbmpname, int $dest_height, int $dest_width, int $threshold): bool;
	/* bookId: book.json ; membership = kCore */
	public function json_decode(string $json, ?bool $associative = NULL, int $depth = 512, int $flags = 0): mixed;
	/* bookId: book.json ; membership = kCore */
	public function json_encode(mixed $value, int $flags = 0, int $depth = 512): false|string;
	/* bookId: book.json ; membership = kCore */
	public function json_last_error(): int;
	/* bookId: book.json ; membership = kCore */
	public function json_last_error_msg(): string;
	/* bookId: book.json ; membership = kCore */
	public function json_validate(string $json, int $depth = 512, int $flags = 0): bool;
	/* bookId: book.calendar ; membership = kBundled */
	public function juliantojd(int $month, int $day, int $year): int;
	/* bookId: book.array ; membership = kCore */
	public function key(array|object $array): int|null|string;
	/* bookId: book.array ; membership = kCore */
	public function krsort(array &$array, int $flags = \SORT_REGULAR): true;
	/* bookId: book.array ; membership = kCore */
	public function ksort(array &$array, int $flags = \SORT_REGULAR): true;
	/* bookId: book.strings ; membership = kCore */
	public function lcfirst(string $string): string;
	/* bookId: book.random ; membership = kCore */
	public function lcg_value(): float;
	/* bookId: book.filesystem ; membership = kCore */
	public function lchgrp(string $filename, int|string $group): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function lchown(string $filename, int|string $user): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_8859_to_t61(string $value): false|string;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_add(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_add_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): false|\LDAP\Result;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_bind(\LDAP\Connection $ldap, ?string $dn = NULL, ?string $password = NULL): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_bind_ext(\LDAP\Connection $ldap, ?string $dn = NULL, ?string $password = NULL, ?array $controls = NULL): false|\LDAP\Result;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_compare(\LDAP\Connection $ldap, string $dn, string $attribute, string $value, ?array $controls = NULL): bool|int;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_connect(?string $uri = NULL): false|\LDAP\Connection;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_control_paged_result(/* resource */ $link, int $pagesize, bool $iscritical = false, string $cookie = ""): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_count_entries(\LDAP\Connection $ldap, \LDAP\Result $result): int;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_count_references(\LDAP\Connection $ldap, \LDAP\Result $result): int;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_delete(\LDAP\Connection $ldap, string $dn, ?array $controls = NULL): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_delete_ext(\LDAP\Connection $ldap, string $dn, ?array $controls = NULL): false|\LDAP\Result;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_dn2ufn(string $dn): false|string;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_err2str(int $errno): string;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_errno(\LDAP\Connection $ldap): int;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_error(\LDAP\Connection $ldap): string;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_escape(string $value, string $ignore = "", int $flags = 0): string;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_exop_passwd(\LDAP\Connection $ldap, string $user = "", string $old_password = "", string $new_password = "", ?array &$controls = NULL): bool|string;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_exop_refresh(\LDAP\Connection $ldap, string $dn, int $ttl): false|int;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_exop_sync(\LDAP\Connection $ldap, string $request_oid, ?string $request_data = NULL, ?array $controls = NULL, ?string &$response_data = NULL, ?string &$response_oid = NULL): bool|\LDAP\Result;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_exop_whoami(\LDAP\Connection $ldap): false|string;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_explode_dn(string $dn, int $with_attrib): array|false;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_first_attribute(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): false|string;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_first_entry(\LDAP\Connection $ldap, \LDAP\Result $result): false|\LDAP\ResultEntry;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_first_reference(\LDAP\Connection $ldap, \LDAP\Result $result): false|\LDAP\ResultEntry;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_free_result(\LDAP\Result $result): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_get_attributes(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): array;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_get_dn(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): false|string;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_get_entries(\LDAP\Connection $ldap, \LDAP\Result $result): array|false;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_get_option(?\LDAP\Connection $ldap, int $option, array|int|null|string &$value = NULL): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_get_values(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry, string $attribute): array|false;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_get_values_len(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry, string $attribute): array|false;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_list(array|\LDAP\Connection $ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = 1, int $timelimit = 1, int $deref = \LDAP_DEREF_NEVER, ?array $controls = NULL): array|false|\LDAP\Result;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_mod_add(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_mod_add_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): false|\LDAP\Result;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_mod_del(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_mod_del_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): false|\LDAP\Result;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_mod_replace(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_mod_replace_ext(\LDAP\Connection $ldap, string $dn, array $entry, ?array $controls = NULL): false|\LDAP\Result;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_modify_batch(\LDAP\Connection $ldap, string $dn, array $modifications_info, ?array $controls = NULL): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_next_attribute(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): false|string;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_next_entry(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): false|\LDAP\ResultEntry;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_next_reference(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry): false|\LDAP\ResultEntry;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_parse_exop(\LDAP\Connection $ldap, \LDAP\Result $result, ?string &$response_data = NULL, ?string &$response_oid = NULL): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_parse_reference(\LDAP\Connection $ldap, \LDAP\ResultEntry $entry, array &$referrals): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_parse_result(\LDAP\Connection $ldap, \LDAP\Result $result, int &$error_code, ?string &$matched_dn = NULL, ?string &$error_message = NULL, ?array &$referrals = NULL, ?array &$controls = NULL): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_read(array|\LDAP\Connection $ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = 1, int $timelimit = 1, int $deref = \LDAP_DEREF_NEVER, ?array $controls = NULL): array|false|\LDAP\Result;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_rename(\LDAP\Connection $ldap, string $dn, string $new_rdn, string $new_parent, bool $delete_old_rdn, ?array $controls = NULL): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_rename_ext(\LDAP\Connection $ldap, string $dn, string $new_rdn, string $new_parent, bool $delete_old_rdn, ?array $controls = NULL): false|\LDAP\Result;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_sasl_bind(\LDAP\Connection $ldap, ?string $dn = NULL, ?string $password = NULL, ?string $mech = NULL, ?string $realm = NULL, ?string $authc_id = NULL, ?string $authz_id = NULL, ?string $props = NULL): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_search(array|\LDAP\Connection $ldap, array|string $base, array|string $filter, array $attributes = [], int $attributes_only = 0, int $sizelimit = 1, int $timelimit = 1, int $deref = \LDAP_DEREF_NEVER, ?array $controls = NULL): array|false|\LDAP\Result;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_set_option(?\LDAP\Connection $ldap, int $option, array|bool|int|string $value): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_set_rebind_proc(\LDAP\Connection $ldap, ?callable $callback): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_sort(/* resource */ $link, /* resource */ $result, string $sortfilter): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_start_tls(\LDAP\Connection $ldap): bool;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_t61_to_8859(string $value): false|string;
	/* bookId: book.ldap ; membership = kBundledExternal */
	public function ldap_unbind(\LDAP\Connection $ldap): bool;
	/* bookId: book.strings ; membership = kCore */
	public function levenshtein(string $string1, string $string2, int $insertion_cost = 1, int $replacement_cost = 1, int $deletion_cost = 1): int;
	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_clear_errors(): void;
	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_disable_entity_loader(bool $disable = true): bool;
	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_get_errors(): array;
	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_get_external_entity_loader(): ?callable;
	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_get_last_error(): false|\LibXMLError;
	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_set_external_entity_loader(?callable $resolver_function): true;
	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_set_streams_context(/* resource */ $context): void;
	/* bookId: book.libxml ; membership = kBundledExternal */
	public function libxml_use_internal_errors(?bool $use_errors = NULL): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function link(string $target, string $link): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function linkinfo(string $path): false|int;
	/* bookId: book.litespeed ; membership = kBundled */
	public function litespeed_finish_request(): bool;
	/* bookId: book.strings ; membership = kCore */
	public function localeconv(): array;
	/* bookId: book.datetime ; membership = kCore */
	public function localtime(?int $timestamp = NULL, bool $associative = false): array;
	/* bookId: book.math ; membership = kCore */
	public function log(float $num, float $base = \M_E): float;
	/* bookId: book.math ; membership = kCore */
	public function log10(float $num): float;
	/* bookId: book.math ; membership = kCore */
	public function log1p(float $num): float;
	/* bookId: book.network ; membership = kCore */
	public function long2ip(int $ip): string;
	/* bookId: book.filesystem ; membership = kCore */
	public function lstat(string $filename): array|false;
	/* bookId: book.strings ; membership = kCore */
	public function ltrim(string $string, string $characters = " \n\r\t\v\x00"): string;
	/* bookId: book.mail ; membership = kCore */
	public function mail(string $to, string $subject, string $message, array|string $additional_headers = [], string $additional_params = ""): bool;
	/* bookId: book.math ; membership = kCore */
	public function max(mixed $value, mixed ...$values): mixed;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_check_encoding(array|null|string $value = NULL, ?string $encoding = NULL): bool;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_chr(int $codepoint, ?string $encoding = NULL): false|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_convert_case(string $string, int $mode, ?string $encoding = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_convert_encoding(array|string $string, string $to_encoding, array|null|string $from_encoding = NULL): array|false|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_convert_kana(string $string, string $mode = "KV", ?string $encoding = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_convert_variables(string $to_encoding, array|string $from_encoding, mixed &$var, mixed &...$vars): false|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_decode_mimeheader(string $string): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_decode_numericentity(string $string, array $map, ?string $encoding = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_detect_encoding(string $string, array|null|string $encodings = NULL, bool $strict = false): false|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_detect_order(array|null|string $encoding = NULL): array|bool;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_encode_mimeheader(string $string, ?string $charset = NULL, ?string $transfer_encoding = NULL, string $newline = "\r\n", int $indent = 0): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_encode_numericentity(string $string, array $map, ?string $encoding = NULL, bool $hex = false): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_encoding_aliases(string $encoding): array;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg(string $pattern, string $string, ?array &$matches = NULL): bool;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_match(string $pattern, string $string, ?string $options = NULL): bool;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_replace(string $pattern, string $replacement, string $string, ?string $options = NULL): false|null|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_replace_callback(string $pattern, callable $callback, string $string, ?string $options = NULL): false|null|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_search(?string $pattern = NULL, ?string $options = NULL): bool;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_search_getpos(): int;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_search_getregs(): array|false;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_search_init(string $string, ?string $pattern = NULL, ?string $options = NULL): bool;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_search_pos(?string $pattern = NULL, ?string $options = NULL): array|false;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_search_regs(?string $pattern = NULL, ?string $options = NULL): array|false;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ereg_search_setpos(int $offset): bool;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_eregi(string $pattern, string $string, ?array &$matches = NULL): bool;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_eregi_replace(string $pattern, string $replacement, string $string, ?string $options = NULL): false|null|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_get_info(string $type = "all"): array|false|int|null|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_http_input(?string $type = NULL): array|false|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_http_output(?string $encoding = NULL): bool|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_internal_encoding(?string $encoding = NULL): bool|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_language(?string $language = NULL): bool|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_lcfirst(string $string, ?string $encoding = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_list_encodings(): array;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ltrim(string $string, ?string $characters = NULL, ?string $encoding = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ord(string $string, ?string $encoding = NULL): false|int;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_output_handler(string $string, int $status): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_parse_str(string $string, array &$result): bool;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_preferred_mime_name(string $encoding): false|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_regex_encoding(?string $encoding = NULL): bool|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_regex_set_options(?string $options = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_rtrim(string $string, ?string $characters = NULL, ?string $encoding = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_scrub(string $string, ?string $encoding = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_send_mail(string $to, string $subject, string $message, array|string $additional_headers = [], ?string $additional_params = NULL): bool;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_split(string $pattern, string $string, int $limit = 1): array|false;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_str_pad(string $string, int $length, string $pad_string = " ", int $pad_type = \STR_PAD_RIGHT, ?string $encoding = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_str_split(string $string, int $length = 1, ?string $encoding = NULL): array;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strcut(string $string, int $start, ?int $length = NULL, ?string $encoding = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strimwidth(string $string, int $start, int $width, string $trim_marker = "", ?string $encoding = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_stripos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): false|int;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_stristr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = NULL): false|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strlen(string $string, ?string $encoding = NULL): int;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strpos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): false|int;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strrchr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = NULL): false|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strrichr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = NULL): false|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strripos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): false|int;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strrpos(string $haystack, string $needle, int $offset = 0, ?string $encoding = NULL): false|int;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strstr(string $haystack, string $needle, bool $before_needle = false, ?string $encoding = NULL): false|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strtolower(string $string, ?string $encoding = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strtoupper(string $string, ?string $encoding = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_strwidth(string $string, ?string $encoding = NULL): int;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_substitute_character(int|null|string $substitute_character = NULL): bool|int|string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_substr(string $string, int $start, ?int $length = NULL, ?string $encoding = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_substr_count(string $haystack, string $needle, ?string $encoding = NULL): int;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_trim(string $string, ?string $characters = NULL, ?string $encoding = NULL): string;
	/* bookId: book.mbstring ; membership = kBundled */
	public function mb_ucfirst(string $string, ?string $encoding = NULL): string;
	/* bookId: book.strings ; membership = kCore */
	public function md5(string $string, bool $binary = false): string;
	/* bookId: book.strings ; membership = kCore */
	public function md5_file(string $filename, bool $binary = false): false|string;
	/* bookId: book.info ; membership = kCore */
	public function memory_get_peak_usage(bool $real_usage = false): int;
	/* bookId: book.info ; membership = kCore */
	public function memory_get_usage(bool $real_usage = false): int;
	/* bookId: book.info ; membership = kCore */
	public function memory_reset_peak_usage(): void;
	/* bookId: book.strings ; membership = kCore */
	public function metaphone(string $string, int $max_phonemes = 0): string;
	/* bookId: book.classobj ; membership = kCore */
	public function method_exists(object|string $object_or_class, string $method): bool;
	/* bookId: book.mhash ; membership = kBundled */
	public function mhash(int $algo, string $data, ?string $key = NULL): false|string;
	/* bookId: book.mhash ; membership = kBundled */
	public function mhash_count(): int;
	/* bookId: book.mhash ; membership = kBundled */
	public function mhash_get_block_size(int $algo): false|int;
	/* bookId: book.mhash ; membership = kBundled */
	public function mhash_get_hash_name(int $algo): false|string;
	/* bookId: book.mhash ; membership = kBundled */
	public function mhash_keygen_s2k(int $algo, string $password, string $salt, int $length): false|string;
	/* bookId: book.datetime ; membership = kCore */
	public function microtime(bool $as_float = false): float|string;
	/* bookId: book.fileinfo ; membership = kBundled */
	public function mime_content_type(/* resource|string */ $filename): false|string;
	/* bookId: book.math ; membership = kCore */
	public function min(mixed $value, mixed ...$values): mixed;
	/* bookId: book.filesystem ; membership = kCore */
	public function mkdir(string $directory, int $permissions = 0777, bool $recursive = false, /* null|resource */ $context = NULL): bool;
	/* bookId: book.datetime ; membership = kCore */
	public function mktime(int $hour, ?int $minute = NULL, ?int $second = NULL, ?int $month = NULL, ?int $day = NULL, ?int $year = NULL): false|int;
	/* bookId: book.strings ; membership = kCore */
	public function money_format(string $format, float $number): string;
	/* bookId: book.filesystem ; membership = kCore */
	public function move_uploaded_file(string $from, string $to): bool;
	/* bookId: book.sem ; membership = kBundled */
	public function msg_get_queue(int $key, int $permissions = 0666): false|\SysvMessageQueue;
	/* bookId: book.sem ; membership = kBundled */
	public function msg_queue_exists(int $key): bool;
	/* bookId: book.sem ; membership = kBundled */
	public function msg_receive(\SysvMessageQueue $queue, int $desired_message_type, int &$received_message_type, int $max_message_size, mixed &$message, bool $unserialize = true, int $flags = 0, ?int &$error_code = NULL): bool;
	/* bookId: book.sem ; membership = kBundled */
	public function msg_remove_queue(\SysvMessageQueue $queue): bool;
	/* bookId: book.sem ; membership = kBundled */
	public function msg_send(\SysvMessageQueue $queue, int $message_type, bool|float|int|string $message, bool $serialize = true, bool $blocking = true, ?int &$error_code = NULL): bool;
	/* bookId: book.sem ; membership = kBundled */
	public function msg_set_queue(\SysvMessageQueue $queue, array $data): bool;
	/* bookId: book.sem ; membership = kBundled */
	public function msg_stat_queue(\SysvMessageQueue $queue): array|false;
	/* bookId: book.random ; membership = kCore */
	public function mt_getrandmax(): int;
	/* bookId: book.random ; membership = kCore */
	public function mt_rand(): int;
	/* bookId: book.random ; membership = kCore */
	public function mt_srand(?int $seed = NULL, int $mode = \MT_RAND_MT19937): void;
	/* bookId: book.mysqli ; membership = kBundledExternal */
	public function mysqli_get_client_stats(): array;
	/* bookId: book.mysqli ; membership = kBundledExternal */
	public function mysqli_get_links_stats(): array;
	/* bookId: book.array ; membership = kCore */
	public function natcasesort(array &$array): true;
	/* bookId: book.array ; membership = kCore */
	public function natsort(array &$array): true;
	/* bookId: book.network ; membership = kCore */
	public function net_get_interfaces(): array|false;
	/* bookId: book.array ; membership = kCore */
	public function next(array|object &$array): mixed;
	/* bookId: book.gettext ; membership = kBundledExternal */
	public function ngettext(string $singular, string $plural, int $count): string;
	/* bookId: book.strings ; membership = kCore */
	public function nl2br(string $string, bool $use_xhtml = true): string;
	/* bookId: book.strings ; membership = kCore */
	public function nl_langinfo(int $item): false|string;
	/* bookId: book.strings ; membership = kCore */
	public function number_format(float $num, int $decimals = 0, ?string $decimal_separator = ".", ?string $thousands_separator = ","): string;
	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_clean(): bool;
	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_end_clean(): bool;
	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_end_flush(): bool;
	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_flush(): bool;
	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_get_clean(): false|string;
	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_get_contents(): false|string;
	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_get_flush(): false|string;
	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_get_length(): false|int;
	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_get_level(): int;
	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_get_status(bool $full_status = false): array;
	/* bookId: book.zlib ; membership = kBundled */
	public function ob_gzhandler(string $data, int $flags): false|string;
	/* bookId: book.iconv ; membership = kBundled */
	public function ob_iconv_handler(string $contents, int $status): string;
	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_implicit_flush(bool $enable = true): void;
	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_list_handlers(): array;
	/* bookId: book.outcontrol ; membership = kCore */
	public function ob_start(?callable $callback = NULL, int $chunk_size = 0, int $flags = \PHP_OUTPUT_HANDLER_STDFLAGS): bool;
	/* bookId: book.math ; membership = kCore */
	public function octdec(string $octal_string): float|int;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_autocommit(\Odbc\Connection $odbc, ?bool $enable = NULL): bool|int;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_binmode(\Odbc\Result $statement, int $mode): true;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_close(\Odbc\Connection $odbc): void;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_close_all(): void;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_columnprivileges(\Odbc\Connection $odbc, ?string $catalog, string $schema, string $table, string $column): false|\Odbc\Result;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_columns(\Odbc\Connection $odbc, ?string $catalog = NULL, ?string $schema = NULL, ?string $table = NULL, ?string $column = NULL): false|\Odbc\Result;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_commit(\Odbc\Connection $odbc): bool;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_connect(string $dsn, ?string $user = NULL, ?string $password = NULL, int $cursor_option = \SQL_CUR_USE_DRIVER): false|\Odbc\Connection;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_connection_string_is_quoted(string $str): bool;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_connection_string_quote(string $str): string;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_connection_string_should_quote(string $str): bool;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_cursor(\Odbc\Result $statement): false|string;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_data_source(\Odbc\Connection $odbc, int $fetch_type): array|false|null;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_error(?\Odbc\Connection $odbc = NULL): string;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_errormsg(?\Odbc\Connection $odbc = NULL): string;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_exec(\Odbc\Connection $odbc, string $query): false|\Odbc\Result;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_execute(\Odbc\Result $statement, array $params = []): bool;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_fetch_array(\Odbc\Result $statement, ?int $row = NULL): array|false;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_fetch_into(\Odbc\Result $statement, array &$array, ?int $row = NULL): false|int;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_fetch_object(\Odbc\Result $statement, ?int $row = NULL): false|\stdClass;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_fetch_row(\Odbc\Result $statement, ?int $row = NULL): bool;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_field_len(\Odbc\Result $statement, int $field): false|int;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_field_name(\Odbc\Result $statement, int $field): false|string;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_field_num(\Odbc\Result $statement, string $field): false|int;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_field_scale(\Odbc\Result $statement, int $field): false|int;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_field_type(\Odbc\Result $statement, int $field): false|string;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_foreignkeys(\Odbc\Connection $odbc, ?string $pk_catalog, string $pk_schema, string $pk_table, string $fk_catalog, string $fk_schema, string $fk_table): false|\Odbc\Result;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_free_result(\Odbc\Result $statement): true;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_gettypeinfo(\Odbc\Connection $odbc, int $data_type = 0): false|\Odbc\Result;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_longreadlen(\Odbc\Result $statement, int $length): true;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_next_result(\Odbc\Result $statement): bool;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_num_fields(\Odbc\Result $statement): int;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_num_rows(\Odbc\Result $statement): int;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_pconnect(string $dsn, ?string $user = NULL, ?string $password = NULL, int $cursor_option = \SQL_CUR_USE_DRIVER): false|\Odbc\Connection;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_prepare(\Odbc\Connection $odbc, string $query): false|\Odbc\Result;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_primarykeys(\Odbc\Connection $odbc, ?string $catalog, string $schema, string $table): false|\Odbc\Result;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_procedurecolumns(\Odbc\Connection $odbc, ?string $catalog = NULL, ?string $schema = NULL, ?string $procedure = NULL, ?string $column = NULL): false|\Odbc\Result;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_procedures(\Odbc\Connection $odbc, ?string $catalog = NULL, ?string $schema = NULL, ?string $procedure = NULL): false|\Odbc\Result;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_result(\Odbc\Result $statement, int|string $field): bool|null|string;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_result_all(\Odbc\Result $statement, string $format = ""): false|int;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_rollback(\Odbc\Connection $odbc): bool;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_setoption(\Odbc\Connection|\Odbc\Result $odbc, int $which, int $option, int $value): bool;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_specialcolumns(\Odbc\Connection $odbc, int $type, ?string $catalog, string $schema, string $table, int $scope, int $nullable): false|\Odbc\Result;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_statistics(\Odbc\Connection $odbc, ?string $catalog, string $schema, string $table, int $unique, int $accuracy): false|\Odbc\Result;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_tableprivileges(\Odbc\Connection $odbc, ?string $catalog, string $schema, string $table): false|\Odbc\Result;
	/* bookId: book.uodbc ; membership = kBundledExternal */
	public function odbc_tables(\Odbc\Connection $odbc, ?string $catalog = NULL, ?string $schema = NULL, ?string $table = NULL, ?string $types = NULL): false|\Odbc\Result;
	/* bookId: book.opcache ; membership = kCore */
	public function opcache_compile_file(string $filename): bool;
	/* bookId: book.opcache ; membership = kCore */
	public function opcache_get_configuration(): array|false;
	/* bookId: book.opcache ; membership = kCore */
	public function opcache_get_status(bool $include_scripts = true): array|false;
	/* bookId: book.opcache ; membership = kCore */
	public function opcache_invalidate(string $filename, bool $force = false): bool;
	/* bookId: book.opcache ; membership = kCore */
	public function opcache_is_script_cached(string $filename): bool;
	/* bookId: book.opcache ; membership = kCore */
	public function opcache_is_script_cached_in_file_cache(string $filename): bool;
	/* bookId: book.opcache ; membership = kCore */
	public function opcache_jit_blacklist(\Closure $closure): void;
	/* bookId: book.opcache ; membership = kCore */
	public function opcache_reset(): bool;
	/* bookId: book.dir ; membership = kCore */
	public function opendir(string $directory, /* null|resource */ $context = NULL)/* : false|resource */;
	/* bookId: book.network ; membership = kCore */
	public function openlog(string $prefix, int $flags, int $facility): true;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_cipher_iv_length(string $cipher_algo): false|int;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_cipher_key_length(string $cipher_algo): false|int;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_cms_decrypt(string $input_filename, string $output_filename, string|\OpenSSLCertificate $certificate, array|null|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key = NULL, int $encoding = \OPENSSL_ENCODING_SMIME): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_cms_encrypt(string $input_filename, string $output_filename, array|string|\OpenSSLCertificate $certificate, ?array $headers, int $flags = 0, int $encoding = \OPENSSL_ENCODING_SMIME, int|string $cipher_algo = \OPENSSL_CIPHER_AES_128_CBC): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_cms_read(string $input_filename, array &$certificates): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_cms_sign(string $input_filename, string $output_filename, string|\OpenSSLCertificate $certificate, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, ?array $headers, int $flags = 0, int $encoding = \OPENSSL_ENCODING_SMIME, ?string $untrusted_certificates_filename = NULL): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_cms_verify(string $input_filename, int $flags = 0, ?string $certificates = NULL, array $ca_info = [], ?string $untrusted_certificates_filename = NULL, ?string $content = NULL, ?string $pk7 = NULL, ?string $sigfile = NULL, int $encoding = \OPENSSL_ENCODING_SMIME): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_csr_export(string|\OpenSSLCertificateSigningRequest $csr, string &$output, bool $no_text = true): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_csr_export_to_file(string|\OpenSSLCertificateSigningRequest $csr, string $output_filename, bool $no_text = true): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_csr_get_public_key(string|\OpenSSLCertificateSigningRequest $csr, bool $short_names = true): false|\OpenSSLAsymmetricKey;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_csr_get_subject(string|\OpenSSLCertificateSigningRequest $csr, bool $short_names = true): array|false;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_csr_new(array $distinguished_names, ?\OpenSSLAsymmetricKey &$private_key, ?array $options = NULL, ?array $extra_attributes = NULL): bool|\OpenSSLCertificateSigningRequest;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_csr_sign(string|\OpenSSLCertificateSigningRequest $csr, null|string|\OpenSSLCertificate $ca_certificate, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, int $days, ?array $options = NULL, int $serial = 0, ?string $serial_hex = NULL): false|\OpenSSLCertificate;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_decrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", ?string $tag = NULL, string $aad = ""): false|string;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_dh_compute_key(string $public_key, \OpenSSLAsymmetricKey $private_key): false|string;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_digest(string $data, string $digest_algo, bool $binary = false): false|string;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_encrypt(string $data, string $cipher_algo, string $passphrase, int $options = 0, string $iv = "", ?string &$tag = NULL, string $aad = "", int $tag_length = 16): false|string;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_error_string(): false|string;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_free_key(\OpenSSLAsymmetricKey $key): void;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_get_cert_locations(): array;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_get_cipher_methods(bool $aliases = false): array;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_get_curve_names(): array|false;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_get_md_methods(bool $aliases = false): array;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_open(string $data, string &$output, string $encrypted_key, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, string $cipher_algo, ?string $iv = NULL): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_password_hash(string $algo, string $password, array $options = []): string;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_password_verify(string $algo, string $password, string $hash): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pbkdf2(string $password, string $salt, int $key_length, int $iterations, string $digest_algo = "sha1"): false|string;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs12_export(string|\OpenSSLCertificate $certificate, string &$output, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, string $passphrase, array $options = []): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs12_export_to_file(string|\OpenSSLCertificate $certificate, string $output_filename, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, string $passphrase, array $options = []): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs12_read(string $pkcs12, array &$certificates, string $passphrase): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs7_decrypt(string $input_filename, string $output_filename, string|\OpenSSLCertificate $certificate, array|null|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key = NULL): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs7_encrypt(string $input_filename, string $output_filename, array|string|\OpenSSLCertificate $certificate, ?array $headers, int $flags = 0, int $cipher_algo = \OPENSSL_CIPHER_AES_128_CBC): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs7_read(string $data, array &$certificates): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs7_sign(string $input_filename, string $output_filename, string|\OpenSSLCertificate $certificate, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, ?array $headers, int $flags = PKCS7_DETACHED, ?string $untrusted_certificates_filename = NULL): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkcs7_verify(string $input_filename, int $flags, ?string $signers_certificates_filename = NULL, array $ca_info = [], ?string $untrusted_certificates_filename = NULL, ?string $content = NULL, ?string $output_filename = NULL): bool|int;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_derive(array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $public_key, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, int $key_length = 0): false|string;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_export(array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $key, string &$output, ?string $passphrase = NULL, ?array $options = NULL): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_export_to_file(array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $key, string $output_filename, ?string $passphrase = NULL, ?array $options = NULL): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_free(\OpenSSLAsymmetricKey $key): void;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_get_details(\OpenSSLAsymmetricKey $key): array|false;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_get_private(array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, ?string $passphrase = NULL): false|\OpenSSLAsymmetricKey;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_get_public(array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $public_key): false|\OpenSSLAsymmetricKey;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_pkey_new(?array $options = NULL): false|\OpenSSLAsymmetricKey;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_private_decrypt(string $data, string &$decrypted_data, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, int $padding = \OPENSSL_PKCS1_PADDING, ?string $digest_algo = NULL): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_private_encrypt(string $data, string &$encrypted_data, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, int $padding = \OPENSSL_PKCS1_PADDING): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_public_decrypt(string $data, string &$decrypted_data, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $public_key, int $padding = \OPENSSL_PKCS1_PADDING): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_public_encrypt(string $data, string &$encrypted_data, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $public_key, int $padding = \OPENSSL_PKCS1_PADDING, ?string $digest_algo = NULL): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_random_pseudo_bytes(int $length, ?bool &$strong_result = NULL): string;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_seal(string $data, string &$sealed_data, array &$encrypted_keys, array $public_key, string $cipher_algo, ?string &$iv = NULL): false|int;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_sign(string $data, string &$signature, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key, int|string $algorithm = \OPENSSL_ALGO_SHA1, int $padding = 0): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_spki_export(string $spki): false|string;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_spki_export_challenge(string $spki): false|string;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_spki_new(\OpenSSLAsymmetricKey $private_key, string $challenge, int $digest_algo = \OPENSSL_ALGO_MD5): false|string;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_spki_verify(string $spki): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_verify(string $data, string $signature, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $public_key, int|string $algorithm = \OPENSSL_ALGO_SHA1, int $padding = 0): false|int;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_check_private_key(string|\OpenSSLCertificate $certificate, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $private_key): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_checkpurpose(string|\OpenSSLCertificate $certificate, int $purpose, array $ca_info = [], ?string $untrusted_certificates_file = NULL): bool|int;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_export(string|\OpenSSLCertificate $certificate, string &$output, bool $no_text = true): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_export_to_file(string|\OpenSSLCertificate $certificate, string $output_filename, bool $no_text = true): bool;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_fingerprint(string|\OpenSSLCertificate $certificate, string $digest_algo = "sha1", bool $binary = false): false|string;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_free(\OpenSSLCertificate $certificate): void;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_parse(string|\OpenSSLCertificate $certificate, bool $short_names = true): array|false;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_read(string|\OpenSSLCertificate $certificate): false|\OpenSSLCertificate;
	/* bookId: book.openssl ; membership = kBundledExternal */
	public function openssl_x509_verify(string|\OpenSSLCertificate $certificate, array|string|\OpenSSLAsymmetricKey|\OpenSSLCertificate $public_key): int;
	/* bookId: book.strings ; membership = kCore */
	public function ord(string $character): int;
	/* bookId: book.outcontrol ; membership = kCore */
	public function output_add_rewrite_var(string $name, string $value): bool;
	/* bookId: book.outcontrol ; membership = kCore */
	public function output_reset_rewrite_vars(): bool;
	/* bookId: book.misc ; membership = kCore */
	public function pack(string $format, mixed ...$values): string;
	/* bookId: book.filesystem ; membership = kCore */
	public function parse_ini_file(string $filename, bool $process_sections = false, int $scanner_mode = \INI_SCANNER_NORMAL): array|false;
	/* bookId: book.filesystem ; membership = kCore */
	public function parse_ini_string(string $ini_string, bool $process_sections = false, int $scanner_mode = \INI_SCANNER_NORMAL): array|false;
	/* bookId: book.strings ; membership = kCore */
	public function parse_str(string $string, array &$result): void;
	/* bookId: book.url ; membership = kCore */
	public function parse_url(string $url, int $component = 1): array|false|int|null|string;
	/* bookId: book.exec ; membership = kCore */
	public function passthru(string $command, ?int &$result_code = NULL): ?false;
	/* bookId: book.password ; membership = kCore */
	public function password_algos(): array;
	/* bookId: book.password ; membership = kCore */
	public function password_get_info(string $hash): array;
	/* bookId: book.password ; membership = kCore */
	public function password_hash(string $password, int|null|string $algo, array $options = []): string;
	/* bookId: book.password ; membership = kCore */
	public function password_needs_rehash(string $hash, int|null|string $algo, array $options = []): bool;
	/* bookId: book.password ; membership = kCore */
	public function password_verify(string $password, string $hash): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function pathinfo(string $path, int $flags = \PATHINFO_ALL): array|string;
	/* bookId: book.filesystem ; membership = kCore */
	public function pclose(/* resource */ $handle): int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_alarm(int $seconds): int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_async_signals(?bool $enable = NULL): bool;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_exec(string $path, array $args = [], array $env_vars = []): false;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_fork(): int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_forkx(int $flags): int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_get_last_error(): int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_getcpu(): int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_getcpuaffinity(?int $process_id = NULL): array|false;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_getpriority(?int $process_id = NULL, int $mode = \PRIO_PROCESS): false|int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_getqos_class(): \Pcntl\QosClass;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_rfork(int $flags, int $signal = 0): int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_setcpuaffinity(?int $process_id = NULL, array $cpu_ids = []): bool;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_setns(?int $process_id = NULL, int $nstype = \CLONE_NEWNET): bool;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_setpriority(int $priority, ?int $process_id = NULL, int $mode = \PRIO_PROCESS): bool;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_setqos_class(\Pcntl\QosClass $qos_class = Pcntl\QosClass::Default): void;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_signal(int $signal, callable|int $handler, bool $restart_syscalls = true): bool;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_signal_dispatch(): bool;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_signal_get_handler(int $signal): callable|int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_sigprocmask(int $mode, array $signals, ?array &$old_signals = NULL): bool;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_sigtimedwait(array $signals, array &$info = [], int $seconds = 0, int $nanoseconds = 0): false|int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_sigwaitinfo(array $signals, array &$info = []): false|int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_strerror(int $error_code): string;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_unshare(int $flags): bool;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wait(int &$status, int $flags = 0, array &$resource_usage = []): int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_waitid(int $idtype = \P_ALL, ?int $id = NULL, array &$info = [], int $flags = \WEXITED, array &$resource_usage = []): bool;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_waitpid(int $process_id, int &$status, int $flags = 0, array &$resource_usage = []): int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wexitstatus(int $status): false|int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wifcontinued(int $status): bool;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wifexited(int $status): bool;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wifsignaled(int $status): bool;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wifstopped(int $status): bool;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wstopsig(int $status): false|int;
	/* bookId: book.pcntl ; membership = kBundled */
	public function pcntl_wtermsig(int $status): false|int;
	/* bookId: book.network ; membership = kCore */
	public function pfsockopen(string $hostname, int $port = 1, ?int &$error_code = NULL, ?string &$error_message = NULL, ?float $timeout = NULL)/* : false|resource */;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_affected_rows(\PgSql\Result $result): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_cancel_query(\PgSql\Connection $connection): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_change_password(\PgSql\Connection $connection, string $user, string $password): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_client_encoding(?\PgSql\Connection $connection = NULL): string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_close(?\PgSql\Connection $connection = NULL): true;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_close_stmt(\PgSql\Connection $connection, string $statement_name): false|\PgSql\Result;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_connect(string $connection_string, int $flags = 0): false|\PgSql\Connection;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_connect_poll(\PgSql\Connection $connection): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_connection_busy(\PgSql\Connection $connection): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_connection_reset(\PgSql\Connection $connection): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_connection_status(\PgSql\Connection $connection): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_consume_input(\PgSql\Connection $connection): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_convert(\PgSql\Connection $connection, string $table_name, array $values, int $flags = 0): array|false;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_copy_from(\PgSql\Connection $connection, string $table_name, array|\Traversable $rows, string $separator = "\t", string $null_as = "\\\\N"): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_copy_to(\PgSql\Connection $connection, string $table_name, string $separator = "\t", string $null_as = "\\\\N"): array|false;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_dbname(?\PgSql\Connection $connection = NULL): string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_delete(\PgSql\Connection $connection, string $table_name, array $conditions, int $flags = \PGSQL_DML_EXEC): bool|string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_end_copy(?\PgSql\Connection $connection = NULL): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_fetch_all(\PgSql\Result $result, int $mode = \PGSQL_ASSOC): array;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_fetch_all_columns(\PgSql\Result $result, int $field = 0): array;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_fetch_array(\PgSql\Result $result, ?int $row = NULL, int $mode = \PGSQL_BOTH): array|false;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_fetch_assoc(\PgSql\Result $result, ?int $row = NULL): array|false;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_fetch_object(\PgSql\Result $result, ?int $row = NULL, string $class = "stdClass", array $constructor_args = []): false|object;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_fetch_result(\PgSql\Result $result, false|null|string $row, mixed $field): false|null|string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_fetch_row(\PgSql\Result $result, ?int $row = NULL, int $mode = \PGSQL_NUM): array|false;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_is_null(\PgSql\Result $result, false|null|string $row, mixed $field): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_name(\PgSql\Result $result, int $field): string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_num(\PgSql\Result $result, string $field): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_prtlen(\PgSql\Result $result, false|null|string $row, mixed $field_name_or_number): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_size(\PgSql\Result $result, int $field): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_table(\PgSql\Result $result, int $field, bool $oid_only = false): false|int|string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_type(\PgSql\Result $result, int $field): string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_field_type_oid(\PgSql\Result $result, int $field): int|string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_flush(\PgSql\Connection $connection): bool|int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_free_result(\PgSql\Result $result): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_get_notify(\PgSql\Connection $connection, int $mode = \PGSQL_ASSOC): array|false;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_get_pid(\PgSql\Connection $connection): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_get_result(\PgSql\Connection $connection): false|\PgSql\Result;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_host(?\PgSql\Connection $connection = NULL): string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_insert(\PgSql\Connection $connection, string $table_name, array $values, int $flags = \PGSQL_DML_EXEC): bool|string|\PgSql\Result;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_jit(?\PgSql\Connection $connection = NULL): array;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_last_error(?\PgSql\Connection $connection = NULL): string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_last_notice(\PgSql\Connection $connection, int $mode = \PGSQL_NOTICE_LAST): array|bool|string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_last_oid(\PgSql\Result $result): false|int|string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_close(\PgSql\Lob $lob): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_open(\PgSql\Connection $connection, int $oid, string $mode): false|\PgSql\Lob;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_read(\PgSql\Lob $lob, int $length = 8192): false|string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_read_all(\PgSql\Lob $lob): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_seek(\PgSql\Lob $lob, int $offset, int $whence = \SEEK_CUR): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_tell(\PgSql\Lob $lob): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_truncate(\PgSql\Lob $lob, int $size): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_unlink(\PgSql\Connection $connection, int $oid): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_lo_write(\PgSql\Lob $lob, string $data, ?int $length = NULL): false|int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_meta_data(\PgSql\Connection $connection, string $table_name, bool $extended = false): array|false;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_num_fields(\PgSql\Result $result): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_num_rows(\PgSql\Result $result): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_options(?\PgSql\Connection $connection = NULL): string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_pconnect(string $connection_string, int $flags = 0): false|\PgSql\Connection;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_ping(?\PgSql\Connection $connection = NULL): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_port(?\PgSql\Connection $connection = NULL): string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_put_copy_data(\PgSql\Connection $connection, string $cmd): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_put_copy_end(\PgSql\Connection $connection, ?string $error = NULL): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_result_error(\PgSql\Result $result): false|string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_result_error_field(\PgSql\Result $result, int $field_code): false|null|string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_result_memory_size(\PgSql\Result $result): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_result_seek(\PgSql\Result $result, int $row): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_result_status(\PgSql\Result $result, int $mode = \PGSQL_STATUS_LONG): int|string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_select(\PgSql\Connection $connection, string $table_name, array $conditions = [], int $flags = \PGSQL_DML_EXEC, int $mode = \PGSQL_ASSOC): array|false|string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_send_execute(\PgSql\Connection $connection, string $statement_name, array $params): bool|int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_send_prepare(\PgSql\Connection $connection, string $statement_name, string $query): bool|int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_send_query(\PgSql\Connection $connection, string $query): bool|int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_send_query_params(\PgSql\Connection $connection, string $query, array $params): bool|int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_service(?\PgSql\Connection $connection = NULL): string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_set_chunked_rows_size(\PgSql\Connection $connection, int $size): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_set_error_context_visibility(\PgSql\Connection $connection, int $visibility): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_socket(\PgSql\Connection $connection)/* : false|resource */;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_socket_poll(/* resource */ $socket, int $read, int $write, int $timeout = 1): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_trace(string $filename, string $mode = "w", ?\PgSql\Connection $connection = NULL, int $trace_mode = 0): bool;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_transaction_status(\PgSql\Connection $connection): int;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_tty(?\PgSql\Connection $connection = NULL): string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_unescape_bytea(string $string): string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_untrace(?\PgSql\Connection $connection = NULL): true;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_update(\PgSql\Connection $connection, string $table_name, array $values, array $conditions, int $flags = \PGSQL_DML_EXEC): bool|string;
	/* bookId: book.pgsql ; membership = kBundledExternal */
	public function pg_version(?\PgSql\Connection $connection = NULL): array;
	/* bookId: book.info ; membership = kCore */
	public function php_ini_loaded_file(): false|string;
	/* bookId: book.info ; membership = kCore */
	public function php_ini_scanned_files(): false|string;
	/* bookId: book.info ; membership = kCore */
	public function php_sapi_name(): false|string;
	/* bookId: book.misc ; membership = kCore */
	public function php_strip_whitespace(string $filename): string;
	/* bookId: book.info ; membership = kCore */
	public function php_uname(string $mode = "a"): string;
	/* bookId: book.info ; membership = kCore */
	public function phpcredits(int $flags = \CREDITS_ALL): true;
	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_break_file(string $file, int $line): void;
	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_break_function(string $function): void;
	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_break_method(string $class, string $method): void;
	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_break_next(): void;
	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_clear(): void;
	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_color(int $element, string $color): void;
	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_end_oplog(array $options = []): ?array;
	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_exec(string $context): bool|string;
	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_get_executable(array $options = []): array;
	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_prompt(string $string): void;
	/* bookId: book.phpdbg ; membership = kBundled */
	public function phpdbg_start_oplog(): void;
	/* bookId: book.info ; membership = kCore */
	public function phpinfo(int $flags = \INFO_ALL): true;
	/* bookId: book.info ; membership = kCore */
	public function phpversion(?string $extension = NULL): false|string;
	/* bookId: book.math ; membership = kCore */
	public function pi(): float;
	/* bookId: book.image ; membership = kBundled */
	public function png2wbmp(string $pngname, string $wbmpname, int $dest_height, int $dest_width, int $threshold): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function popen(string $command, string $mode)/* : false|resource */;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_access(string $filename, int $flags = 0): bool;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_ctermid(): false|string;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_eaccess(string $filename, int $flags = 0): bool;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_fpathconf(/* int|resource */ $file_descriptor, int $name): false|int;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_get_last_error(): int;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getcwd(): false|string;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getegid(): int;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_geteuid(): int;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getgid(): int;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getgrgid(int $group_id): array|false;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getgrnam(string $name): array|false;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getgroups(): array|false;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getlogin(): false|string;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getpgid(int $process_id): false|int;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getpgrp(): int;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getpid(): int;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getppid(): int;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getpwnam(string $username): array|false;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getpwuid(int $user_id): array|false;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getrlimit(?int $resource = NULL): array|false;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getsid(int $process_id): false|int;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_getuid(): int;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_initgroups(string $username, int $group_id): bool;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_isatty(/* int|resource */ $file_descriptor): bool;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_kill(int $process_id, int $signal): bool;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_mkfifo(string $filename, int $permissions): bool;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_mknod(string $filename, int $flags, int $major = 0, int $minor = 0): bool;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_pathconf(string $path, int $name): false|int;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_setegid(int $group_id): bool;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_seteuid(int $user_id): bool;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_setgid(int $group_id): bool;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_setpgid(int $process_id, int $process_group_id): bool;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_setrlimit(int $resource, int $soft_limit, int $hard_limit): bool;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_setsid(): int;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_setuid(int $user_id): bool;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_strerror(int $error_code): string;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_sysconf(int $conf_id): int;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_times(): array|false;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_ttyname(/* int|resource */ $file_descriptor): false|string;
	/* bookId: book.posix ; membership = kBundled */
	public function posix_uname(): array|false;
	/* bookId: book.math ; membership = kCore */
	public function pow(mixed $num, mixed $exponent): float|int|object;
	/* bookId: book.pcre ; membership = kCore */
	public function preg_filter(array|string $pattern, array|string $replacement, array|string $subject, int $limit = 1, ?int &$count = NULL): array|null|string;
	/* bookId: book.pcre ; membership = kCore */
	public function preg_grep(string $pattern, array $array, int $flags = 0): array|false;
	/* bookId: book.pcre ; membership = kCore */
	public function preg_last_error(): int;
	/* bookId: book.pcre ; membership = kCore */
	public function preg_last_error_msg(): string;
	/* bookId: book.pcre ; membership = kCore */
	public function preg_match(string $pattern, string $subject, ?array &$matches = NULL, int $flags = 0, int $offset = 0): false|int;
	/* bookId: book.pcre ; membership = kCore */
	public function preg_match_all(string $pattern, string $subject, ?array &$matches = NULL, int $flags = 0, int $offset = 0): false|int;
	/* bookId: book.pcre ; membership = kCore */
	public function preg_quote(string $str, ?string $delimiter = NULL): string;
	/* bookId: book.pcre ; membership = kCore */
	public function preg_replace(array|string $pattern, array|string $replacement, array|string $subject, int $limit = 1, ?int &$count = NULL): array|null|string;
	/* bookId: book.pcre ; membership = kCore */
	public function preg_replace_callback(array|string $pattern, callable $callback, array|string $subject, int $limit = 1, ?int &$count = NULL, int $flags = 0): array|null|string;
	/* bookId: book.pcre ; membership = kCore */
	public function preg_replace_callback_array(array $pattern, array|string $subject, int $limit = 1, ?int &$count = NULL, int $flags = 0): array|null|string;
	/* bookId: book.pcre ; membership = kCore */
	public function preg_split(string $pattern, string $subject, int $limit = 1, int $flags = 0): array|false;
	/* bookId: book.array ; membership = kCore */
	public function prev(array|object &$array): mixed;
	/* bookId: book.var ; membership = kCore */
	public function print_r(mixed $value, bool $return = false): string|true;
	/* bookId: book.strings ; membership = kCore */
	public function printf(string $format, mixed ...$values): int;
	/* bookId: book.exec ; membership = kCore */
	public function proc_close(/* resource */ $process): int;
	/* bookId: book.exec ; membership = kCore */
	public function proc_get_status(/* resource */ $process): array;
	/* bookId: book.exec ; membership = kCore */
	public function proc_nice(int $priority): bool;
	/* bookId: book.exec ; membership = kCore */
	public function proc_open(array|string $command, array $descriptor_spec, array &$pipes, ?string $cwd = NULL, ?array $env_vars = NULL, ?array $options = NULL)/* : false|resource */;
	/* bookId: book.exec ; membership = kCore */
	public function proc_terminate(/* resource */ $process, int $signal = 15): bool;
	/* bookId: book.classobj ; membership = kCore */
	public function property_exists(object|string $object_or_class, string $property): bool;
	/* bookId: book.info ; membership = kCore */
	public function putenv(string $assignment): bool;
	/* bookId: book.strings ; membership = kCore */
	public function quoted_printable_decode(string $string): string;
	/* bookId: book.strings ; membership = kCore */
	public function quoted_printable_encode(string $string): string;
	/* bookId: book.strings ; membership = kCore */
	public function quotemeta(string $string): string;
	/* bookId: book.math ; membership = kCore */
	public function rad2deg(float $num): float;
	/* bookId: book.random ; membership = kCore */
	public function rand(): int;
	/* bookId: book.random ; membership = kCore */
	public function random_bytes(int $length): string;
	/* bookId: book.random ; membership = kCore */
	public function random_int(int $min, int $max): int;
	/* bookId: book.array ; membership = kCore */
	public function range(float|int|string $start, float|int|string $end, float|int $step = 1): array;
	/* bookId: book.url ; membership = kCore */
	public function rawurldecode(string $string): string;
	/* bookId: book.url ; membership = kCore */
	public function rawurlencode(string $string): string;
	/* bookId: book.dir ; membership = kCore */
	public function readdir(/* null|resource */ $dir_handle = NULL): false|string;
	/* bookId: book.filesystem ; membership = kCore */
	public function readfile(string $filename, bool $use_include_path = false, /* null|resource */ $context = NULL): false|int;
	/* bookId: book.zlib ; membership = kBundled */
	public function readgzfile(string $filename, bool $use_include_path = false): false|int;
	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline(?string $prompt = NULL): false|string;
	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_add_history(string $prompt): true;
	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_callback_handler_install(string $prompt, callable $callback): true;
	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_callback_handler_remove(): bool;
	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_callback_read_char(): void;
	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_clear_history(): true;
	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_completion_function(callable $callback): bool;
	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_info(?string $var_name = NULL, bool|int|null|string $value = NULL): mixed;
	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_list_history(): array;
	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_on_new_line(): void;
	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_read_history(?string $filename = NULL): bool;
	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_redisplay(): void;
	/* bookId: book.readline ; membership = kBundledExternal */
	public function readline_write_history(?string $filename = NULL): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function readlink(string $path): false|string;
	/* bookId: book.filesystem ; membership = kCore */
	public function realpath(string $path): false|string;
	/* bookId: book.filesystem ; membership = kCore */
	public function realpath_cache_get(): array;
	/* bookId: book.filesystem ; membership = kCore */
	public function realpath_cache_size(): int;
	/* bookId: book.funchand ; membership = kCore */
	public function register_shutdown_function(callable $callback, mixed ...$args): void;
	/* bookId: book.funchand ; membership = kCore */
	public function register_tick_function(callable $callback, mixed ...$args): bool;
	/* bookId: book.filesystem ; membership = kCore */
	public function rename(string $from, string $to, /* null|resource */ $context = NULL): bool;
	/* bookId: book.network ; membership = kCore */
	public function request_parse_body(?array $options = NULL): array;
	/* bookId: book.array ; membership = kCore */
	public function reset(array|object &$array): mixed;
	/* bookId: book.errorfunc ; membership = kCore */
	public function restore_error_handler(): true;
	/* bookId: book.errorfunc ; membership = kCore */
	public function restore_exception_handler(): true;
	/* bookId: book.info ; membership = kCore */
	public function restore_include_path(): void;
	/* bookId: book.filesystem ; membership = kCore */
	public function rewind(/* resource */ $stream): bool;
	/* bookId: book.dir ; membership = kCore */
	public function rewinddir(/* null|resource */ $dir_handle = NULL): void;
	/* bookId: book.filesystem ; membership = kCore */
	public function rmdir(string $directory, /* null|resource */ $context = NULL): bool;
	/* bookId: book.math ; membership = kCore */
	public function round(float|int $num, int $precision = 0, int|\RoundingMode $mode = RoundingMode::HalfAwayFromZero): float;
	/* bookId: book.array ; membership = kCore */
	public function rsort(array &$array, int $flags = \SORT_REGULAR): true;
	/* bookId: book.strings ; membership = kCore */
	public function rtrim(string $string, string $characters = " \n\r\t\v\x00"): string;
	/* bookId: book.misc ; membership = kCore */
	public function sapi_windows_cp_conv(int|string $in_codepage, int|string $out_codepage, string $subject): ?string;
	/* bookId: book.misc ; membership = kCore */
	public function sapi_windows_cp_get(string $kind = ""): int;
	/* bookId: book.misc ; membership = kCore */
	public function sapi_windows_cp_is_utf8(): bool;
	/* bookId: book.misc ; membership = kCore */
	public function sapi_windows_cp_set(int $codepage): bool;
	/* bookId: book.misc ; membership = kCore */
	public function sapi_windows_generate_ctrl_event(int $event, int $pid = 0): bool;
	/* bookId: book.misc ; membership = kCore */
	public function sapi_windows_set_ctrl_handler(?callable $handler, bool $add = true): bool;
	/* bookId: book.misc ; membership = kCore */
	public function sapi_windows_vt100_support(/* resource */ $stream, ?bool $enable = NULL): bool;
	/* bookId: book.dir ; membership = kCore */
	public function scandir(string $directory, int $sorting_order = \SCANDIR_SORT_ASCENDING, /* null|resource */ $context = NULL): array|false;
	/* bookId: book.sem ; membership = kBundled */
	public function sem_acquire(\SysvSemaphore $semaphore, bool $non_blocking = false): bool;
	/* bookId: book.sem ; membership = kBundled */
	public function sem_get(int $key, int $max_acquire = 1, int $permissions = 0666, bool $auto_release = true): false|\SysvSemaphore;
	/* bookId: book.sem ; membership = kBundled */
	public function sem_release(\SysvSemaphore $semaphore): bool;
	/* bookId: book.sem ; membership = kBundled */
	public function sem_remove(\SysvSemaphore $semaphore): bool;
	/* bookId: book.var ; membership = kCore */
	public function serialize(mixed $value): string;
	/* bookId: book.session ; membership = kBundled */
	public function session_abort(): bool;
	/* bookId: book.session ; membership = kBundled */
	public function session_cache_expire(?int $value = NULL): false|int;
	/* bookId: book.session ; membership = kBundled */
	public function session_cache_limiter(?string $value = NULL): false|string;
	/* bookId: book.session ; membership = kBundled */
	public function session_create_id(string $prefix = ""): false|string;
	/* bookId: book.session ; membership = kBundled */
	public function session_decode(string $data): bool;
	/* bookId: book.session ; membership = kBundled */
	public function session_destroy(): bool;
	/* bookId: book.session ; membership = kBundled */
	public function session_encode(): false|string;
	/* bookId: book.session ; membership = kBundled */
	public function session_gc(): false|int;
	/* bookId: book.session ; membership = kBundled */
	public function session_get_cookie_params(): array;
	/* bookId: book.session ; membership = kBundled */
	public function session_id(?string $id = NULL): false|string;
	/* bookId: book.session ; membership = kBundled */
	public function session_module_name(?string $module = NULL): false|string;
	/* bookId: book.session ; membership = kBundled */
	public function session_name(?string $name = NULL): false|string;
	/* bookId: book.session ; membership = kBundled */
	public function session_regenerate_id(bool $delete_old_session = false): bool;
	/* bookId: book.session ; membership = kBundled */
	public function session_register_shutdown(): void;
	/* bookId: book.session ; membership = kBundled */
	public function session_reset(): bool;
	/* bookId: book.session ; membership = kBundled */
	public function session_save_path(?string $path = NULL): false|string;
	/* bookId: book.session ; membership = kBundled */
	public function session_set_cookie_params(int $lifetime_or_options, ?string $path = NULL, ?string $domain = NULL, ?bool $secure = NULL, ?bool $httponly = NULL): bool;
	/* bookId: book.session ; membership = kBundled */
	public function session_start(array $options = []): bool;
	/* bookId: book.session ; membership = kBundled */
	public function session_status(): int;
	/* bookId: book.session ; membership = kBundled */
	public function session_unset(): bool;
	/* bookId: book.session ; membership = kBundled */
	public function session_write_close(): bool;
	/* bookId: book.errorfunc ; membership = kCore */
	public function set_error_handler(?callable $callback, int $error_levels = \E_ALL): ?callable;
	/* bookId: book.errorfunc ; membership = kCore */
	public function set_exception_handler(?callable $callback): ?callable;
	/* bookId: book.info ; membership = kCore */
	public function set_include_path(string $include_path): false|string;
	/* bookId: book.info ; membership = kCore */
	public function set_time_limit(int $seconds): bool;
	/* bookId: book.network ; membership = kCore */
	public function setcookie(string $name, string $value = "", int $expires_or_options = 0, string $path = "", string $domain = "", bool $secure = false, bool $httponly = false): bool;
	/* bookId: book.strings ; membership = kCore */
	public function setlocale(int $category, ?string $locales, string ...$rest): false|string;
	/* bookId: book.var ; membership = kCore */
	public function settype(mixed &$var, string $type): bool;
	/* bookId: book.strings ; membership = kCore */
	public function sha1(string $string, bool $binary = false): string;
	/* bookId: book.strings ; membership = kCore */
	public function sha1_file(string $filename, bool $binary = false): false|string;
	/* bookId: book.exec ; membership = kCore */
	public function shell_exec(string $command): false|null|string;
	/* bookId: book.sem ; membership = kBundled */
	public function shm_attach(int $key, ?int $size = NULL, int $permissions = 0666): false|\SysvSharedMemory;
	/* bookId: book.sem ; membership = kBundled */
	public function shm_detach(\SysvSharedMemory $shm): true;
	/* bookId: book.sem ; membership = kBundled */
	public function shm_get_var(\SysvSharedMemory $shm, int $key): mixed;
	/* bookId: book.sem ; membership = kBundled */
	public function shm_has_var(\SysvSharedMemory $shm, int $key): bool;
	/* bookId: book.sem ; membership = kBundled */
	public function shm_put_var(\SysvSharedMemory $shm, int $key, mixed $value): bool;
	/* bookId: book.sem ; membership = kBundled */
	public function shm_remove(\SysvSharedMemory $shm): bool;
	/* bookId: book.sem ; membership = kBundled */
	public function shm_remove_var(\SysvSharedMemory $shm, int $key): bool;
	/* bookId: book.shmop ; membership = kBundled */
	public function shmop_close(\Shmop $shmop): void;
	/* bookId: book.shmop ; membership = kBundled */
	public function shmop_delete(\Shmop $shmop): bool;
	/* bookId: book.shmop ; membership = kBundled */
	public function shmop_open(int $key, string $mode, int $permissions, int $size): false|\Shmop;
	/* bookId: book.shmop ; membership = kBundled */
	public function shmop_read(\Shmop $shmop, int $offset, int $size): string;
	/* bookId: book.shmop ; membership = kBundled */
	public function shmop_size(\Shmop $shmop): int;
	/* bookId: book.shmop ; membership = kBundled */
	public function shmop_write(\Shmop $shmop, string $data, int $offset): int;
	/* bookId: book.array ; membership = kCore */
	public function shuffle(array &$array): true;
	/* bookId: book.strings ; membership = kCore */
	public function similar_text(string $string1, string $string2, ?float &$percent = NULL): int;
	/* bookId: book.simplexml ; membership = kBundledExternal */
	public function simplexml_import_dom(object $node, ?string $class_name = SimpleXMLElement::class): ?\SimpleXMLElement;
	/* bookId: book.simplexml ; membership = kBundledExternal */
	public function simplexml_load_file(string $filename, ?string $class_name = SimpleXMLElement::class, int $options = 0, string $namespace_or_prefix = "", bool $is_prefix = false): false|\SimpleXMLElement;
	/* bookId: book.simplexml ; membership = kBundledExternal */
	public function simplexml_load_string(string $data, ?string $class_name = SimpleXMLElement::class, int $options = 0, string $namespace_or_prefix = "", bool $is_prefix = false): false|\SimpleXMLElement;
	/* bookId: book.math ; membership = kCore */
	public function sin(float $num): float;
	/* bookId: book.math ; membership = kCore */
	public function sinh(float $num): float;
	/* bookId: book.misc ; membership = kCore */
	public function sleep(int $seconds): int;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp2_get(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): mixed;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp2_getnext(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): mixed;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp2_real_walk(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): array|false;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp2_set(string $hostname, string $community, array|string $object_id, array|string $type, array|string $value, int $timeout = 1, int $retries = 1): bool;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp2_walk(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): array|false;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp3_get(string $hostname, string $security_name, string $security_level, string $auth_protocol, string $auth_passphrase, string $privacy_protocol, string $privacy_passphrase, array|string $object_id, int $timeout = 1, int $retries = 1): mixed;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp3_getnext(string $hostname, string $security_name, string $security_level, string $auth_protocol, string $auth_passphrase, string $privacy_protocol, string $privacy_passphrase, array|string $object_id, int $timeout = 1, int $retries = 1): mixed;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp3_real_walk(string $hostname, string $security_name, string $security_level, string $auth_protocol, string $auth_passphrase, string $privacy_protocol, string $privacy_passphrase, array|string $object_id, int $timeout = 1, int $retries = 1): array|false;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp3_set(string $hostname, string $security_name, string $security_level, string $auth_protocol, string $auth_passphrase, string $privacy_protocol, string $privacy_passphrase, array|string $object_id, array|string $type, array|string $value, int $timeout = 1, int $retries = 1): bool;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp3_walk(string $hostname, string $security_name, string $security_level, string $auth_protocol, string $auth_passphrase, string $privacy_protocol, string $privacy_passphrase, array|string $object_id, int $timeout = 1, int $retries = 1): array|false;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp_get_quick_print(): bool;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp_get_valueretrieval(): int;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp_read_mib(string $filename): bool;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp_set_enum_print(bool $enable): true;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp_set_oid_output_format(int $format): true;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp_set_quick_print(bool $enable): true;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmp_set_valueretrieval(int $method): true;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmpget(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): mixed;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmpgetnext(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): mixed;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmprealwalk(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): array|false;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmpset(string $hostname, string $community, array|string $object_id, array|string $type, array|string $value, int $timeout = 1, int $retries = 1): bool;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmpwalk(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): array|false;
	/* bookId: book.snmp ; membership = kBundledExternal */
	public function snmpwalkoid(string $hostname, string $community, array|string $object_id, int $timeout = 1, int $retries = 1): array|false;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_accept(\Socket $socket): false|\Socket;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_addrinfo_bind(\AddressInfo $address): false|\Socket;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_addrinfo_connect(\AddressInfo $address): false|\Socket;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_addrinfo_explain(\AddressInfo $address): array;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_addrinfo_lookup(string $host, ?string $service = NULL, array $hints = []): array|false;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_atmark(\Socket $socket): bool;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_bind(\Socket $socket, string $address, int $port = 0): bool;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_clear_error(?\Socket $socket = NULL): void;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_close(\Socket $socket): void;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_cmsg_space(int $level, int $type, int $num = 0): ?int;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_connect(\Socket $socket, string $address, ?int $port = NULL): bool;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_create(int $domain, int $type, int $protocol): false|\Socket;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_create_listen(int $port, int $backlog = \SOMAXCONN): false|\Socket;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_create_pair(int $domain, int $type, int $protocol, array &$pair): bool;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_export_stream(\Socket $socket)/* : false|resource */;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_get_option(\Socket $socket, int $level, int $option): array|false|int;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_getpeername(\Socket $socket, string &$address, ?int &$port = NULL): bool;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_getsockname(\Socket $socket, string &$address, ?int &$port = NULL): bool;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_import_stream(/* resource */ $stream): false|\Socket;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_last_error(?\Socket $socket = NULL): int;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_listen(\Socket $socket, int $backlog = 0): bool;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_read(\Socket $socket, int $length, int $mode = \PHP_BINARY_READ): false|string;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_recv(\Socket $socket, ?string &$data, int $length, int $flags): false|int;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_recvfrom(\Socket $socket, string &$data, int $length, int $flags, string &$address, ?int &$port = NULL): false|int;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_recvmsg(\Socket $socket, array &$message, int $flags = 0): false|int;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_select(?array &$read, ?array &$write, ?array &$except, ?int $seconds, int $microseconds = 0): false|int;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_send(\Socket $socket, string $data, int $length, int $flags): false|int;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_sendmsg(\Socket $socket, array $message, int $flags = 0): false|int;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_sendto(\Socket $socket, string $data, int $length, int $flags, string $address, ?int $port = NULL): false|int;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_set_block(\Socket $socket): bool;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_set_nonblock(\Socket $socket): bool;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_set_option(\Socket $socket, int $level, int $option, array|int|string $value): bool;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_shutdown(\Socket $socket, int $mode = 2): bool;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_strerror(int $error_code): string;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_write(\Socket $socket, string $data, ?int $length = NULL): false|int;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_wsaprotocol_info_export(\Socket $socket, int $process_id): false|string;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_wsaprotocol_info_import(string $info_id): false|\Socket;
	/* bookId: book.sockets ; membership = kBundled */
	public function socket_wsaprotocol_info_release(string $info_id): bool;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_add(string &$string1, string $string2): void;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_base642bin(string $string, int $id, string $ignore = ""): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_bin2base64(string $string, int $id): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_bin2hex(string $string): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_compare(string $string1, string $string2): int;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aegis128l_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): false|string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aegis128l_encrypt(string $message, string $additional_data, string $nonce, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aegis128l_keygen(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aegis256_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): false|string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aegis256_encrypt(string $message, string $additional_data, string $nonce, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aegis256_keygen(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aes256gcm_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): false|string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aes256gcm_encrypt(string $message, string $additional_data, string $nonce, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aes256gcm_is_available(): bool;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_aes256gcm_keygen(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_chacha20poly1305_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): false|string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_chacha20poly1305_encrypt(string $message, string $additional_data, string $nonce, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_chacha20poly1305_ietf_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): false|string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_chacha20poly1305_ietf_encrypt(string $message, string $additional_data, string $nonce, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_chacha20poly1305_ietf_keygen(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_chacha20poly1305_keygen(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_xchacha20poly1305_ietf_decrypt(string $ciphertext, string $additional_data, string $nonce, string $key): false|string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_xchacha20poly1305_ietf_encrypt(string $message, string $additional_data, string $nonce, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_aead_xchacha20poly1305_ietf_keygen(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_auth(string $message, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_auth_keygen(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_auth_verify(string $mac, string $message, string $key): bool;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box(string $message, string $nonce, string $key_pair): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_keypair(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_keypair_from_secretkey_and_publickey(string $secret_key, string $public_key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_open(string $ciphertext, string $nonce, string $key_pair): false|string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_publickey(string $key_pair): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_publickey_from_secretkey(string $secret_key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_seal(string $message, string $public_key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_seal_open(string $ciphertext, string $key_pair): false|string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_secretkey(string $key_pair): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_box_seed_keypair(string $seed): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_add(string $p, string $q): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_from_hash(string $s): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_is_valid_point(string $s): bool;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_random(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_add(string $x, string $y): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_complement(string $s): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_invert(string $s): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_mul(string $x, string $y): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_negate(string $s): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_random(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_reduce(string $s): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_scalar_sub(string $x, string $y): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_core_ristretto255_sub(string $p, string $q): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_generichash(string $message, string $key = "", int $length = \SODIUM_CRYPTO_GENERICHASH_BYTES): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_generichash_final(string &$state, int $length = \SODIUM_CRYPTO_GENERICHASH_BYTES): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_generichash_init(string $key = "", int $length = \SODIUM_CRYPTO_GENERICHASH_BYTES): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_generichash_keygen(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_generichash_update(string &$state, string $message): true;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kdf_derive_from_key(int $subkey_length, int $subkey_id, string $context, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kdf_keygen(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kx_client_session_keys(string $client_key_pair, string $server_key): array;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kx_keypair(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kx_publickey(string $key_pair): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kx_secretkey(string $key_pair): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kx_seed_keypair(string $seed): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_kx_server_session_keys(string $server_key_pair, string $client_key): array;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_pwhash(int $length, string $password, string $salt, int $opslimit, int $memlimit, int $algo = \SODIUM_CRYPTO_PWHASH_ALG_DEFAULT): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_pwhash_scryptsalsa208sha256(int $length, string $password, string $salt, int $opslimit, int $memlimit): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_pwhash_scryptsalsa208sha256_str(string $password, int $opslimit, int $memlimit): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_pwhash_scryptsalsa208sha256_str_verify(string $hash, string $password): bool;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_pwhash_str(string $password, int $opslimit, int $memlimit): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_pwhash_str_needs_rehash(string $password, int $opslimit, int $memlimit): bool;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_pwhash_str_verify(string $hash, string $password): bool;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_scalarmult(string $n, string $p): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_scalarmult_ristretto255(string $n, string $p): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_scalarmult_ristretto255_base(string $n): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretbox(string $message, string $nonce, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretbox_keygen(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretbox_open(string $ciphertext, string $nonce, string $key): false|string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretstream_xchacha20poly1305_init_pull(string $header, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretstream_xchacha20poly1305_init_push(string $key): array;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretstream_xchacha20poly1305_keygen(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretstream_xchacha20poly1305_pull(string &$state, string $ciphertext, string $additional_data = ""): array|false;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretstream_xchacha20poly1305_push(string &$state, string $message, string $additional_data = "", int $tag = \SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_secretstream_xchacha20poly1305_rekey(string &$state): void;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_shorthash(string $message, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_shorthash_keygen(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign(string $message, string $secret_key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_detached(string $message, string $secret_key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_ed25519_pk_to_curve25519(string $public_key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_ed25519_sk_to_curve25519(string $secret_key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_keypair(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_keypair_from_secretkey_and_publickey(string $secret_key, string $public_key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_open(string $signed_message, string $public_key): false|string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_publickey(string $key_pair): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_publickey_from_secretkey(string $secret_key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_secretkey(string $key_pair): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_seed_keypair(string $seed): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_sign_verify_detached(string $signature, string $message, string $public_key): bool;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_stream(int $length, string $nonce, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_stream_keygen(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_stream_xchacha20(int $length, string $nonce, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_stream_xchacha20_keygen(): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_stream_xchacha20_xor(string $message, string $nonce, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_stream_xchacha20_xor_ic(string $message, string $nonce, int $counter, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_crypto_stream_xor(string $message, string $nonce, string $key): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_hex2bin(string $string, string $ignore = ""): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_increment(string &$string): void;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_memcmp(string $string1, string $string2): int;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_memzero(string &$string): void;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_pad(string $string, int $block_size): string;
	/* bookId: book.sodium ; membership = kBundledExternal */
	public function sodium_unpad(string $string, int $block_size): string;
	/* bookId: book.array ; membership = kCore */
	public function sort(array &$array, int $flags = \SORT_REGULAR): true;
	/* bookId: book.strings ; membership = kCore */
	public function soundex(string $string): string;
	/* bookId: book.spl ; membership = kCore */
	public function spl_autoload(string $class, ?string $file_extensions = NULL): void;
	/* bookId: book.spl ; membership = kCore */
	public function spl_autoload_call(string $class): void;
	/* bookId: book.spl ; membership = kCore */
	public function spl_autoload_extensions(?string $file_extensions = NULL): string;
	/* bookId: book.spl ; membership = kCore */
	public function spl_autoload_functions(): array;
	/* bookId: book.spl ; membership = kCore */
	public function spl_autoload_register(?callable $callback = NULL, bool $throw = true, bool $prepend = false): bool;
	/* bookId: book.spl ; membership = kCore */
	public function spl_autoload_unregister(callable $callback): bool;
	/* bookId: book.spl ; membership = kCore */
	public function spl_classes(): array;
	/* bookId: book.spl ; membership = kCore */
	public function spl_object_hash(object $object): string;
	/* bookId: book.spl ; membership = kCore */
	public function spl_object_id(object $object): int;
	/* bookId: book.strings ; membership = kCore */
	public function sprintf(string $format, mixed ...$values): string;
	/* bookId: book.math ; membership = kCore */
	public function sqrt(float $num): float;
	/* bookId: book.random ; membership = kCore */
	public function srand(?int $seed = NULL, int $mode = \MT_RAND_MT19937): void;
	/* bookId: book.strings ; membership = kCore */
	public function sscanf(string $string, string $format, mixed &...$vars): array|int|null;
	/* bookId: book.filesystem ; membership = kCore */
	public function stat(string $filename): array|false;
	/* bookId: book.strings ; membership = kCore */
	public function str_contains(string $haystack, string $needle): bool;
	/* bookId: book.strings ; membership = kCore */
	public function str_decrement(string $string): string;
	/* bookId: book.strings ; membership = kCore */
	public function str_ends_with(string $haystack, string $needle): bool;
	/* bookId: book.strings ; membership = kCore */
	public function str_getcsv(string $string, string $separator = ",", string $enclosure = "\"", string $escape = "\\"): array;
	/* bookId: book.strings ; membership = kCore */
	public function str_increment(string $string): string;
	/* bookId: book.strings ; membership = kCore */
	public function str_ireplace(array|string $search, array|string $replace, array|string $subject, ?int &$count = NULL): array|string;
	/* bookId: book.strings ; membership = kCore */
	public function str_pad(string $string, int $length, string $pad_string = " ", int $pad_type = \STR_PAD_RIGHT): string;
	/* bookId: book.strings ; membership = kCore */
	public function str_repeat(string $string, int $times): string;
	/* bookId: book.strings ; membership = kCore */
	public function str_replace(array|string $search, array|string $replace, array|string $subject, ?int &$count = NULL): array|string;
	/* bookId: book.strings ; membership = kCore */
	public function str_rot13(string $string): string;
	/* bookId: book.strings ; membership = kCore */
	public function str_shuffle(string $string): string;
	/* bookId: book.strings ; membership = kCore */
	public function str_split(string $string, int $length = 1): array;
	/* bookId: book.strings ; membership = kCore */
	public function str_starts_with(string $haystack, string $needle): bool;
	/* bookId: book.strings ; membership = kCore */
	public function str_word_count(string $string, int $format = 0, ?string $characters = NULL): array|int;
	/* bookId: book.strings ; membership = kCore */
	public function strcasecmp(string $string1, string $string2): int;
	/* bookId: book.strings ; membership = kCore */
	public function strcmp(string $string1, string $string2): int;
	/* bookId: book.strings ; membership = kCore */
	public function strcoll(string $string1, string $string2): int;
	/* bookId: book.strings ; membership = kCore */
	public function strcspn(string $string, string $characters, int $offset = 0, ?int $length = NULL): int;
	/* bookId: book.stream ; membership = kCore */
	public function stream_bucket_append(/* resource */ $brigade, \StreamBucket $bucket): void;
	/* bookId: book.stream ; membership = kCore */
	public function stream_bucket_make_writeable(/* resource */ $brigade): ?\StreamBucket;
	/* bookId: book.stream ; membership = kCore */
	public function stream_bucket_new(/* resource */ $stream, string $buffer): \StreamBucket;
	/* bookId: book.stream ; membership = kCore */
	public function stream_bucket_prepend(/* resource */ $brigade, \StreamBucket $bucket): void;
	/* bookId: book.stream ; membership = kCore */
	public function stream_context_create(?array $options = NULL, ?array $params = NULL)/* : resource */;
	/* bookId: book.stream ; membership = kCore */
	public function stream_context_get_default(?array $options = NULL)/* : resource */;
	/* bookId: book.stream ; membership = kCore */
	public function stream_context_get_options(/* resource */ $stream_or_context): array;
	/* bookId: book.stream ; membership = kCore */
	public function stream_context_get_params(/* resource */ $context): array;
	/* bookId: book.stream ; membership = kCore */
	public function stream_context_set_default(array $options)/* : resource */;
	/* bookId: book.stream ; membership = kCore */
	public function stream_context_set_option(/* resource */ $stream_or_context, string $wrapper, string $option_name, mixed $value): bool;
	/* bookId: book.stream ; membership = kCore */
	public function stream_context_set_options(/* resource */ $context, array $options): true;
	/* bookId: book.stream ; membership = kCore */
	public function stream_context_set_params(/* resource */ $context, array $params): true;
	/* bookId: book.stream ; membership = kCore */
	public function stream_copy_to_stream(/* resource */ $from, /* resource */ $to, ?int $length = NULL, int $offset = 0): false|int;
	/* bookId: book.stream ; membership = kCore */
	public function stream_filter_register(string $filter_name, string $class): bool;
	/* bookId: book.stream ; membership = kCore */
	public function stream_filter_remove(/* resource */ $stream_filter): bool;
	/* bookId: book.stream ; membership = kCore */
	public function stream_get_contents(/* resource */ $stream, ?int $length = NULL, int $offset = 1): false|string;
	/* bookId: book.stream ; membership = kCore */
	public function stream_get_filters(): array;
	/* bookId: book.stream ; membership = kCore */
	public function stream_get_line(/* resource */ $stream, int $length, string $ending = ""): false|string;
	/* bookId: book.stream ; membership = kCore */
	public function stream_get_meta_data(/* resource */ $stream): array;
	/* bookId: book.stream ; membership = kCore */
	public function stream_get_transports(): array;
	/* bookId: book.stream ; membership = kCore */
	public function stream_get_wrappers(): array;
	/* bookId: book.stream ; membership = kCore */
	public function stream_is_local(/* resource|string */ $stream): bool;
	/* bookId: book.stream ; membership = kCore */
	public function stream_isatty(/* resource */ $stream): bool;
	/* bookId: book.stream ; membership = kCore */
	public function stream_notification_callback(int $notification_code, int $severity, ?string $message, int $message_code, int $bytes_transferred, int $bytes_max): void;
	/* bookId: book.stream ; membership = kCore */
	public function stream_resolve_include_path(string $filename): false|string;
	/* bookId: book.stream ; membership = kCore */
	public function stream_select(?array &$read, ?array &$write, ?array &$except, ?int $seconds, ?int $microseconds = NULL): false|int;
	/* bookId: book.stream ; membership = kCore */
	public function stream_set_blocking(/* resource */ $stream, bool $enable): bool;
	/* bookId: book.stream ; membership = kCore */
	public function stream_set_chunk_size(/* resource */ $stream, int $size): int;
	/* bookId: book.stream ; membership = kCore */
	public function stream_set_read_buffer(/* resource */ $stream, int $size): int;
	/* bookId: book.stream ; membership = kCore */
	public function stream_set_timeout(/* resource */ $stream, int $seconds, int $microseconds = 0): bool;
	/* bookId: book.stream ; membership = kCore */
	public function stream_set_write_buffer(/* resource */ $stream, int $size): int;
	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_accept(/* resource */ $socket, ?float $timeout = NULL, ?string &$peer_name = NULL)/* : false|resource */;
	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_client(string $address, ?int &$error_code = NULL, ?string &$error_message = NULL, ?float $timeout = NULL, int $flags = \STREAM_CLIENT_CONNECT, /* null|resource */ $context = NULL)/* : false|resource */;
	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_enable_crypto(/* resource */ $stream, bool $enable, ?int $crypto_method = NULL, /* null|resource */ $session_stream = NULL): bool|int;
	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_get_name(/* resource */ $socket, bool $remote): false|string;
	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_pair(int $domain, int $type, int $protocol): array|false;
	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_recvfrom(/* resource */ $socket, int $length, int $flags = 0, ?string &$address = NULL): false|string;
	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_sendto(/* resource */ $socket, string $data, int $flags = 0, string $address = ""): false|int;
	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_server(string $address, ?int &$error_code = NULL, ?string &$error_message = NULL, int $flags = STREAM_SERVER_BIND | STREAM_SERVER_LISTEN, /* null|resource */ $context = NULL)/* : false|resource */;
	/* bookId: book.stream ; membership = kCore */
	public function stream_socket_shutdown(/* resource */ $stream, int $mode): bool;
	/* bookId: book.stream ; membership = kCore */
	public function stream_supports_lock(/* resource */ $stream): bool;
	/* bookId: book.stream ; membership = kCore */
	public function stream_wrapper_register(string $protocol, string $class, int $flags = 0): bool;
	/* bookId: book.stream ; membership = kCore */
	public function stream_wrapper_restore(string $protocol): bool;
	/* bookId: book.stream ; membership = kCore */
	public function stream_wrapper_unregister(string $protocol): bool;
	/* bookId: book.datetime ; membership = kCore */
	public function strftime(string $format, ?int $timestamp = NULL): false|string;
	/* bookId: book.strings ; membership = kCore */
	public function strip_tags(string $string, array|null|string $allowed_tags = NULL): string;
	/* bookId: book.strings ; membership = kCore */
	public function stripcslashes(string $string): string;
	/* bookId: book.strings ; membership = kCore */
	public function stripos(string $haystack, string $needle, int $offset = 0): false|int;
	/* bookId: book.strings ; membership = kCore */
	public function stripslashes(string $string): string;
	/* bookId: book.strings ; membership = kCore */
	public function stristr(string $haystack, string $needle, bool $before_needle = false): false|string;
	/* bookId: book.strings ; membership = kCore */
	public function strlen(string $string): int;
	/* bookId: book.strings ; membership = kCore */
	public function strnatcasecmp(string $string1, string $string2): int;
	/* bookId: book.strings ; membership = kCore */
	public function strnatcmp(string $string1, string $string2): int;
	/* bookId: book.strings ; membership = kCore */
	public function strncasecmp(string $string1, string $string2, int $length): int;
	/* bookId: book.strings ; membership = kCore */
	public function strncmp(string $string1, string $string2, int $length): int;
	/* bookId: book.strings ; membership = kCore */
	public function strpbrk(string $string, string $characters): false|string;
	/* bookId: book.strings ; membership = kCore */
	public function strpos(string $haystack, string $needle, int $offset = 0): false|int;
	/* bookId: book.datetime ; membership = kCore */
	public function strptime(string $timestamp, string $format): array|false;
	/* bookId: book.strings ; membership = kCore */
	public function strrchr(string $haystack, string $needle, bool $before_needle = false): false|string;
	/* bookId: book.strings ; membership = kCore */
	public function strrev(string $string): string;
	/* bookId: book.strings ; membership = kCore */
	public function strripos(string $haystack, string $needle, int $offset = 0): false|int;
	/* bookId: book.strings ; membership = kCore */
	public function strrpos(string $haystack, string $needle, int $offset = 0): false|int;
	/* bookId: book.strings ; membership = kCore */
	public function strspn(string $string, string $characters, int $offset = 0, ?int $length = NULL): int;
	/* bookId: book.strings ; membership = kCore */
	public function strstr(string $haystack, string $needle, bool $before_needle = false): false|string;
	/* bookId: book.strings ; membership = kCore */
	public function strtok(string $string, string $token): false|string;
	/* bookId: book.strings ; membership = kCore */
	public function strtolower(string $string): string;
	/* bookId: book.datetime ; membership = kCore */
	public function strtotime(string $datetime, ?int $baseTimestamp = NULL): false|int;
	/* bookId: book.strings ; membership = kCore */
	public function strtoupper(string $string): string;
	/* bookId: book.strings ; membership = kCore */
	public function strtr(string $string, string $from, string $to): string;
	/* bookId: book.var ; membership = kCore */
	public function strval(mixed $value): string;
	/* bookId: book.strings ; membership = kCore */
	public function substr(string $string, int $offset, ?int $length = NULL): string;
	/* bookId: book.strings ; membership = kCore */
	public function substr_compare(string $haystack, string $needle, int $offset, ?int $length = NULL, bool $case_insensitive = false): int;
	/* bookId: book.strings ; membership = kCore */
	public function substr_count(string $haystack, string $needle, int $offset = 0, ?int $length = NULL): int;
	/* bookId: book.strings ; membership = kCore */
	public function substr_replace(array|string $string, array|string $replace, array|int $offset, array|int|null $length = NULL): array|string;
	/* bookId: book.filesystem ; membership = kCore */
	public function symlink(string $target, string $link): bool;
	/* bookId: book.info ; membership = kCore */
	public function sys_get_temp_dir(): string;
	/* bookId: book.misc ; membership = kCore */
	public function sys_getloadavg(): array|false;
	/* bookId: book.network ; membership = kCore */
	public function syslog(int $priority, string $message): true;
	/* bookId: book.exec ; membership = kCore */
	public function system(string $command, ?int &$result_code = NULL): false|string;
	/* bookId: book.math ; membership = kCore */
	public function tan(float $num): float;
	/* bookId: book.math ; membership = kCore */
	public function tanh(float $num): float;
	/* bookId: book.filesystem ; membership = kCore */
	public function tempnam(string $directory, string $prefix): false|string;
	/* bookId: book.gettext ; membership = kBundledExternal */
	public function textdomain(?string $domain = NULL): string;
	/* bookId: book.tidy ; membership = kBundledExternal */
	public function tidy_access_count(\tidy $tidy): int;
	/* bookId: book.tidy ; membership = kBundledExternal */
	public function tidy_config_count(\tidy $tidy): int;
	/* bookId: book.tidy ; membership = kBundledExternal */
	public function tidy_error_count(\tidy $tidy): int;
	/* bookId: book.tidy ; membership = kBundledExternal */
	public function tidy_get_output(\tidy $tidy): string;
	/* bookId: book.tidy ; membership = kBundledExternal */
	public function tidy_warning_count(\tidy $tidy): int;
	/* bookId: book.datetime ; membership = kCore */
	public function time(): int;
	/* bookId: book.misc ; membership = kCore */
	public function time_nanosleep(int $seconds, int $nanoseconds): array|bool;
	/* bookId: book.misc ; membership = kCore */
	public function time_sleep_until(float $timestamp): bool;
	/* bookId: book.datetime ; membership = kCore */
	public function timezone_name_from_abbr(string $abbr, int $utcOffset = 1, int $isDST = 1): false|string;
	/* bookId: book.datetime ; membership = kCore */
	public function timezone_version_get(): string;
	/* bookId: book.filesystem ; membership = kCore */
	public function tmpfile()/* : false|resource */;
	/* bookId: book.tokenizer ; membership = kBundled */
	public function token_get_all(string $code, int $flags = 0): array;
	/* bookId: book.tokenizer ; membership = kBundled */
	public function token_name(int $id): string;
	/* bookId: book.filesystem ; membership = kCore */
	public function touch(string $filename, ?int $mtime = NULL, ?int $atime = NULL): bool;
	/* bookId: book.classobj ; membership = kCore */
	public function trait_exists(string $trait, bool $autoload = true): bool;
	/* bookId: book.errorfunc ; membership = kCore */
	public function trigger_error(string $message, int $error_level = \E_USER_NOTICE): true;
	/* bookId: book.strings ; membership = kCore */
	public function trim(string $string, string $characters = " \n\r\t\v\x00"): string;
	/* bookId: book.array ; membership = kCore */
	public function uasort(array &$array, callable $callback): true;
	/* bookId: book.strings ; membership = kCore */
	public function ucfirst(string $string): string;
	/* bookId: book.strings ; membership = kCore */
	public function ucwords(string $string, string $separators = " \t\r\n\f\v"): string;
	/* bookId: book.array ; membership = kCore */
	public function uksort(array &$array, callable $callback): true;
	/* bookId: book.filesystem ; membership = kCore */
	public function umask(?int $mask = NULL): int;
	/* bookId: book.misc ; membership = kCore */
	public function uniqid(string $prefix = "", bool $more_entropy = false): string;
	/* bookId: book.calendar ; membership = kBundled */
	public function unixtojd(?int $timestamp = NULL): false|int;
	/* bookId: book.filesystem ; membership = kCore */
	public function unlink(string $filename, /* null|resource */ $context = NULL): bool;
	/* bookId: book.misc ; membership = kCore */
	public function unpack(string $format, string $string, int $offset = 0): array|false;
	/* bookId: book.funchand ; membership = kCore */
	public function unregister_tick_function(callable $callback): void;
	/* bookId: book.var ; membership = kCore */
	public function unserialize(string $data, array $options = []): mixed;
	/* bookId: book.url ; membership = kCore */
	public function urldecode(string $string): string;
	/* bookId: book.url ; membership = kCore */
	public function urlencode(string $string): string;
	/* bookId: book.soap ; membership = kBundledExternal */
	public function use_soap_error_handler(bool $enable = true): bool;
	/* bookId: book.misc ; membership = kCore */
	public function usleep(int $microseconds): void;
	/* bookId: book.array ; membership = kCore */
	public function usort(array &$array, callable $callback): true;
	/* bookId: book.strings ; membership = kCore */
	public function utf8_decode(string $string): string;
	/* bookId: book.strings ; membership = kCore */
	public function utf8_encode(string $string): string;
	/* bookId: book.var ; membership = kCore */
	public function var_dump(mixed $value, mixed ...$values): void;
	/* bookId: book.var ; membership = kCore */
	public function var_export(mixed $value, bool $return = false): ?string;
	/* bookId: book.com ; membership = kBundled */
	public function variant_abs(mixed $value): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_add(mixed $left, mixed $right): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_and(mixed $left, mixed $right): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_cast(\variant $variant, int $type): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_cat(mixed $left, mixed $right): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_cmp(mixed $left, mixed $right, int $locale_id = \LOCALE_SYSTEM_DEFAULT, int $flags = 0): int;
	/* bookId: book.com ; membership = kBundled */
	public function variant_date_from_timestamp(int $timestamp): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_date_to_timestamp(\variant $variant): ?int;
	/* bookId: book.com ; membership = kBundled */
	public function variant_div(mixed $left, mixed $right): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_eqv(mixed $left, mixed $right): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_fix(mixed $value): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_get_type(\variant $variant): int;
	/* bookId: book.com ; membership = kBundled */
	public function variant_idiv(mixed $left, mixed $right): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_imp(mixed $left, mixed $right): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_int(mixed $value): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_mod(mixed $left, mixed $right): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_mul(mixed $left, mixed $right): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_neg(mixed $value): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_not(mixed $value): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_or(mixed $left, mixed $right): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_pow(mixed $left, mixed $right): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_round(mixed $value, int $decimals): ?\variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_set(\variant $variant, mixed $value): void;
	/* bookId: book.com ; membership = kBundled */
	public function variant_set_type(\variant $variant, int $type): void;
	/* bookId: book.com ; membership = kBundled */
	public function variant_sub(mixed $left, mixed $right): \variant;
	/* bookId: book.com ; membership = kBundled */
	public function variant_xor(mixed $left, mixed $right): \variant;
	/* bookId: book.info ; membership = kCore */
	public function version_compare(string $version1, string $version2, ?string $operator = NULL): bool|int;
	/* bookId: book.strings ; membership = kCore */
	public function vfprintf(/* resource */ $stream, string $format, array $values): int;
	/* bookId: book.apache ; membership = kBundled */
	public function virtual(string $uri): bool;
	/* bookId: book.strings ; membership = kCore */
	public function vprintf(string $format, array $values): int;
	/* bookId: book.strings ; membership = kCore */
	public function vsprintf(string $format, array $values): string;
	/* bookId: book.strings ; membership = kCore */
	public function wordwrap(string $string, int $width = 75, string $break = "\n", bool $cut_long_words = false): string;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_error_string(int $error_code): ?string;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_get_current_byte_index(\XMLParser $parser): int;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_get_current_column_number(\XMLParser $parser): int;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_get_current_line_number(\XMLParser $parser): int;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_get_error_code(\XMLParser $parser): int;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_parse(\XMLParser $parser, string $data, bool $is_final = false): int;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_parse_into_struct(\XMLParser $parser, string $data, array &$values, ?array &$index = NULL): false|int;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_parser_create(?string $encoding = NULL): \XMLParser;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_parser_create_ns(?string $encoding = NULL, string $separator = ":"): \XMLParser;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_parser_free(\XMLParser $parser): bool;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_parser_get_option(\XMLParser $parser, int $option): bool|int|string;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_parser_set_option(\XMLParser $parser, int $option, bool|int|string $value): bool;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_character_data_handler(\XMLParser $parser, callable|null|string $handler): true;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_default_handler(\XMLParser $parser, callable|null|string $handler): true;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_element_handler(\XMLParser $parser, callable|null|string $start_handler, callable|null|string $end_handler): true;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_end_namespace_decl_handler(\XMLParser $parser, callable|null|string $handler): true;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_external_entity_ref_handler(\XMLParser $parser, callable|null|string $handler): true;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_notation_decl_handler(\XMLParser $parser, callable|null|string $handler): true;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_object(\XMLParser $parser, object $object): true;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_processing_instruction_handler(\XMLParser $parser, callable|null|string $handler): true;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_start_namespace_decl_handler(\XMLParser $parser, callable|null|string $handler): true;
	/* bookId: book.xml ; membership = kBundledExternal */
	public function xml_set_unparsed_entity_decl_handler(\XMLParser $parser, callable|null|string $handler): true;
	/* bookId: book.info ; membership = kCore */
	public function zend_thread_id(): int;
	/* bookId: book.info ; membership = kCore */
	public function zend_version(): string;
	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_close(/* resource */ $zip): void;
	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_entry_close(/* resource */ $zip_entry): bool;
	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_entry_compressedsize(/* resource */ $zip_entry): false|int;
	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_entry_compressionmethod(/* resource */ $zip_entry): false|string;
	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_entry_filesize(/* resource */ $zip_entry): false|int;
	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_entry_name(/* resource */ $zip_entry): false|string;
	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_entry_open(/* resource */ $zip_dp, /* resource */ $zip_entry, string $mode = "rb"): bool;
	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_entry_read(/* resource */ $zip_entry, int $len = 1024): false|string;
	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_open(string $filename)/* : false|int|resource */;
	/* bookId: book.zip ; membership = kBundledExternal */
	public function zip_read(/* resource */ $zip)/* : false|resource */;
	/* bookId: book.zlib ; membership = kBundled */
	public function zlib_decode(string $data, int $max_length = 0): false|string;
	/* bookId: book.zlib ; membership = kBundled */
	public function zlib_encode(string $data, int $encoding, int $level = 1): false|string;
	/* bookId: book.zlib ; membership = kBundled */
	public function zlib_get_coding_type(): false|string;
}
