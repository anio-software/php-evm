<?php

namespace AnioSoftware\EVM\PHP;

enum HashAlgo: string {
	case kMD5    = "md5";

	case kSHA1   = "sha1";
	case kSHA256 = "sha256";

	case kXXH3   = "xxh3";
	case kXXH64  = "xxh64";
	case kXXH128 = "xxh128";
}
