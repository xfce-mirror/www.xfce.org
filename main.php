<?php

/* This file creates all the pages of the website
   It's called by the index.php page which provides
   $SubMenu and $FastMenu variables */

/* Check the language of the client; if no language is 
   requested, or if the language is not available, fall 
   back to english. Don't forget to add any new language 
   to this list !!! */

$userlg = substr($HTTP_ACCEPT_LANGUAGE, 0, 2);

if ($lang == "")
   {
      if ($userlg == en)
      {
      $lang = "en";
      }
      elseif ($userlg == fr)
      {
      $lang = "fr";
      }
      elseif ($userlg == es)
      {
      $lang = "es";
      }
      elseif ($userlg == de)
      {
      $lang = "de";
      }
      elseif ($userlg == zh)
      {
      $lang = "zh";
      }
      elseif ($userlg == ru)
      {
      $lang = "ru";
      }
      elseif ($userlg == it)
      {
      $lang = "it";
      }
      else 
      {
      $lang = "en";
      }
   }

elseif (($lang != en)&&
        ($lang != fr)&&
        ($lang != de)&&
        ($lang != es)&&
        ($lang != ru)&&
        ($lang != it)&&
        ($lang != zh))
{
$lang = "en";
}

/* Here is the HEAD of the pages */

include "$lang/head.$lang.php";

/* Let's call the script which generates the top menu */

require "common/topmenu.php";
GenerateMenu($FastMenu, $lang);

?>

 </span>
   
   </td>
  </tr>
</table>

<table cellpadding="0" cellspacing="0" width="100%">

<!-- Main (left) menu -->

 <tr>
  <td width="20%" height="0" colspan="0" rowspan="0" valign="top" bgcolor="#e9f3ff" style="color: #154374; font-size: 12px; padding-bottom: 15px; padding-left: 1px; padding-right: 15px; padding-top: 20px;">


<?php

/* Let's call the script which creates the left menu */

require "common/leftmenu.php";
CreateMenu($SubMenu, $lang);

?>

<?php include "edit/sponsor.php"; ?>

  </td>

<!-- Here starts the main content of the page -->

  <td width="80%" align="left" valign="top" bgcolor="#ffffff" style="color: #154374; font-size: 12; padding-bottom: 20; padding-left: 25; padding-right: 40; padding-top: 20; text-align: justify; line-height: 18px; ">

<?php>

/* Let's load the main content of the page */

/* I prefer using $lang/$page.$lang.php instead of $lang/$page.php, 
   even if it complicates the code, because it reduces the risk 
   of erasing a file by error when uploading an updated version */

/* Check if the file exists. If it does, include it. If it does not, 
   output an error message */

$filename = "$lang/$page.$lang.php";

if (file_exists($filename))
   {
   include "$filename";
   }
else
   {
   echo "The requested page is not available.<br><br>
         Either the page does not exist (check the url), or the link is dead.<br><br>
	 Please contact the <a href=\"mailto: fleclainche@wanadoo.fr\">webmaster</a>.";
   }

/* Here is the foot of all pages, common to all languages */

include "common/foot.php";

?>
