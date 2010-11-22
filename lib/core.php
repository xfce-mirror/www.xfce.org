<?php

include ('streams.php');
include ('gettext.php');

$gettext_reader = null;

if (!empty($_GET['lang']))
{
	$path = './lib/locale/'. $_GET['lang'] .'/LC_MESSAGES/www.mo';
	if (is_file ($path))
	{
		$file_reader = new FileReader($path);
		$gettext_reader = new gettext_reader($file_reader);
	}
}

/* return translated string */
function R_($text)
{
	global $gettext_reader;
	if ($gettext_reader)
		return $gettext_reader->translate($text);
	else
		return $text;
}

/* print translated string */
function E_($text)
{
	echo R_($text);
}

function lookup_page($uri)
{
	$root = 'pages/';

	if (empty ($uri))
		return $root.'frontpage.php';

	if (is_dir ($root.$uri))
		return lookup_page ($uri.'/index');

	$file = $root.$uri.'.php';
	if (is_file ($file))
		return $file;

	return $root.'404.php';
}

?>
