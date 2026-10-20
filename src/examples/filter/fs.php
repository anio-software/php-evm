<?php

namespace AnioSoftware\X2J;

return function(PHP\PHPFunction $fn): bool {
	static $allowed = [
		"unlink",

		"opendir",
		"closedir",
		"readdir",

		"chmod",
		"chown",
		"chgrp",

		"copy",
		"rename",
		"symlink",
		"link",

		"mkdir",
		"rmdir",

		"realpath",
		"readlink",

		"clearstatcache",
		"touch",

		"fopen",
		"fwrite",
		"fflush",
		"fsync",
		"fread",
		"fclose",
		"feof",
		"ftell",
		"fseek",
		"flock",
		"fstat"
	];

	return \in_array($fn->name, $allowed);
};
