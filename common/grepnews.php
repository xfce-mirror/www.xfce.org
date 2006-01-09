<?php

/* This script is called by index.$lang.php pages.
   It outputs the news.$lang.php page from its begining
   to the <a name="stophere"></a> mark. 
   It is dirty but works... if we don't forget to 
   write and adjust the mark :D 
*/

/* Open and read the news page */

$filename ="$lang/news.$lang.php";

$myfile = fopen($filename, "r");
$content = fread($myfile, filesize($filename));

/* The mark we search */

$findme = 'stophere';

/* Find the "*s*tophere" mark and 
   define the size of the file from
   its begining to the stophere"></a*>*
   char */

$pos = strpos($content, $findme);
$truepos = $pos + 14;

fclose($myfile);

/* Open and read the file from its 
   begining to the previously defined 
   lenght */

$finalfile = fopen($filename, "r");
$data = fread($finalfile, $truepos);

/* Echo the content */

echo "$data";

fclose($finalfile);

?>
