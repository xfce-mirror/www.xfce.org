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

function UserLastVisit ()
{
	if (!$_SESSION["lastvisit"])
	{
		$cookie = $_COOKIE["lastvisit"];
		$now = date ("U");
		$expire = time()+(60*60*24*365);
		
		if ($cookie)
			# Old user, retrieve last visit (unix)time.
			$_SESSION["lastvisit"] = $cookie;
		else
			# New user, no cookie, so last visit is current (unix)time.
			$_SESSION["lastvisit"] = $now;
			
		# Set new cookie with current time, for the next time he/she visits
		setcookie ("lastvisit", $now, $expire, "/");
	}

	return $_SESSION["lastvisit"];
}
?>
