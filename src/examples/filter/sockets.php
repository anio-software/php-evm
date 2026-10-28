<?php

namespace AnioSoftware\EVM;

return function(PHP\PHPFunction $fn): bool {
	static $ignored = [
		"socket_addrinfo_connect",
		"socket_addrinfo_explain",
		"socket_addrinfo_lookup",
		"socket_addrinfo_bind",
		"socket_atmark",
		"socket_cmsg_space",
		"socket_export_stream",
		"socket_import_stream",
		"socket_create_listen",
		"socket_create_pair"
	];

	if (!\str_starts_with($fn->name, "socket_")) {
		return false;
	}

	if (\str_starts_with($fn->name, "socket_wsaprotocol")) {
		return false;
	}

	if (\in_array($fn->name, $ignored)) {
		return false;
	}

	return true;
};
