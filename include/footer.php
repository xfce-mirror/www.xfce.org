<?php
function PrintFooter ($lang)
{
	if (is_file ("i18n/footer.".$lang.".php"))
		include ("i18n/footer.".$lang.".php");
	else
		include ("i18n/footer.en.php");
}
?>
