<?php

function UserVariable ($name, $values, $default)
{
	$get = strtolower ($_GET[$name]);
	$expire = time()+(60*60*24*365);
	if (in_array ($get, $values))
	{
		setcookie ($name, $get, $expire, "/");
		$_SESSION[$name] = $get;
		return $get;
	}
	
	# Session value
	if (in_array ($_SESSION[$name], $values))
		return $_SESSION[$name];

	# Search for cookie
	$cookie = strtolower ($_COOKIE[$name]);

	if (in_array ($cookie, $values))
	{
		$_SESSION[$name] = $cookie;
		return $cookie;
	}

	# Default value
	$_SESSION[$name] = $default;
	return $default;
}

?>
