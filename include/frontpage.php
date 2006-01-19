<?php
function PrintFrontpage ($lang)
{
	if (is_file ("i18n/frontpage.".$lang.".php"))
		include ("i18n/frontpage.".$lang.".php");
	else
		include ("i18n/frontpage.en.php");
}

?>
