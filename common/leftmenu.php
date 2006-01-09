<?php

/* This function creates the variable (content and css) main (left) menu */

function CreateMenu($SubMenu, $lang) {

/* Let's include the translated menu items */

include "$lang/menu.$lang.php";


echo "<ul class=\"menu\">";

/* 1 HOME */

    if ($SubMenu == 1)
    {
       	echo "<li><a href=\"index.php?lang=$lang\" class=\"mhl\">$HOME</a></li>";
    }
    else
    {
    	echo "<li><a href=\"index.php?lang=$lang\" class=\"mbold\">$HOME</a></li>";
    }

/* 2 OVERVIEW */

    if ($SubMenu == 2)
    {
    	echo "<li><a href=\"index.php?page=overview&lang=$lang\" class=\"mhl\">$OVER</a>";
	echo "<ul class=\"submenu\">";
	echo "<li><a href=\"#whatis\" class=\"mlight\">$WHAT</a></li>";
/*	echo "<li><a href=\"#requirements\" class=\"mlight\">$REQUIRE</a></li>"; */
	echo "<li><a href=\"#features\" class=\"mlight\">$FEAT</a></li>";
	echo "</ul></li>";
    }
    else
    {
	echo "<li><a href=\"index.php?page=overview&lang=$lang\" class=\"mbold\">$OVER</a></li>";
    }
   	
/* 3 4 EXTRAS */

/*    if ($SubMenu == 3)
    {
	echo "<li><a href=\"index.php?page=extras&lang=$lang\" class=\"mhl\">$EXTRAS</a>";
   	echo "<ul class=\"submenu\">";
	echo "<li><a href=\"#themes\" class=\"mlight\">$THEMES</a></li>";
	echo "<li><a href=\"#plugins\" class=\"mlight\">$PLUG</a></li>";
	echo "<li><a href=\"#apps\" class=\"mlight\">$APPS</a></li>";
	echo "<li><a href=\"#artwork\" class=\"mlight\">$ART</a></li>";
	echo "</ul></li>";
    }
    elseif ($SubMenu == 4)
    {
	echo "<li><a href=\"index.php?page=extras&lang=$lang\" class=\"mbold\">$EXTRAS</a>";
    	echo "<ul class=\"submenu\">";
	echo "<li><a href=\"index.php?page=extras&lang=$lang#themes\" class=\"mlight\">$THEMES</a></li>";
	echo "<li><a href=\"index.php?page=extras&lang=$lang#plugins\" class=\"mlight\">$PLUG</a></li>";
	echo "<li><a href=\"index.php?page=extras&lang=$lang#apps\" class=\"mlight\">$APPS</a></li>";
	echo "<li><a href=\"index.php?page=extras&lang=$lang#artwork\" class=\"mlight\">$ART</a></li>";
	echo "</ul></li>";
    }
    else
    {
    	echo "<li><a href=\"index.php?page=extras&lang=$lang\" class=\"mbold\">$EXTRAS</a></li>";
    }
*/    

/* 5 6 7 SCREENSHOTS */

    if ($SubMenu == 5)
    {
	echo "<li><a href=\"index.php?page=screenshots&lang=$lang\" class=\"mhl\">$SCREEN</a>";
   echo "<ul class=\"submenu\">";
	echo "<li><a href=\"index.php?page=devel_screenshots&lang=$lang\" class=\"mlight\">$DEVS</a></li>";
	echo "<li><a href=\"index.php?page=users_screenshots&lang=$lang\" class=\"mlight\">$USERS</a></li>";
	echo "</ul></li>";
    }

    elseif ($SubMenu == 6)
    {
	echo "<li><a href=\"index.php?page=screenshots&lang=$lang\" class=\"mbold\">$SCREEN</a>";
    	echo "<ul class=\"submenu\">";
    	echo "<li><a href=\"index.php?page=devel_screenshots&lang=$lang\" class=\"mlighthl\">$DEVS</a></li>";
	echo "<li><a href=\"index.php?page=users_screenshots&lang=$lang\" class=\"mlight\">$USERS</a></li>";
	echo "</ul></li>";
    }

    elseif ($SubMenu == 7)
    {
	echo "<li><a href=\"index.php?page=screenshots&lang=$lang\" class=\"mbold\">$SCREEN</a>";
    	echo "<ul class=\"submenu\">";
    	echo "<li><a href=\"index.php?page=devel_screenshots&lang=$lang\" class=\"mlight\">$DEVS</a></li>";
	echo "<li><a href=\"index.php?page=users_screenshots&lang=$lang\" class=\"mlighthl\">$USERS</a></li>";
	echo "</ul></li>";
    }
    else
    {
	echo "<li><a href=\"index.php?page=screenshots&lang=$lang\" class=\"mbold\">$SCREEN</a></li>";
    }

/* 8 NEWS */

    if ($SubMenu == 8)
    {
    	echo "<li><a href=\"index.php?page=news&lang=$lang\" class=\"mhl\">$NEWS</a></li>";
    }
    else
    {
    	echo "<li><a href=\"index.php?page=news&lang=$lang\" class=\"mbold\">$NEWS</a></li>";
    }

/* 9 DOCUMENTATION */

    if ($SubMenu == 9)
    {
    	echo "<li><a href=\"index.php?page=documentation&lang=$lang\" class=\"mhl\">$DOC</a>";
    	echo "<ul class=\"submenu\">";
    	echo "<li><a href=\"http://www.loculus.nl/xfce/documentation/\" class=\"mlight\">$MAN</a></li>";
   echo "<li><a href=\"#requirements\" class=\"mlight\">$REQUIRE</a></li>";
	echo "<li><a href=\"#install\" class=\"mlight\">$INSTALL</a></li>";
	echo "<li><a href=\"#start\" class=\"mlight\">$START</a></li>";
	echo "<li><a href=\"#faq\" class=\"mlight\">$FAQ</a></li>";
/*	echo "<li><a href=\"#faq2\" class=\"mlight\">$FAQ2</a></li>"; */
	echo "</ul></li>";
    }
    else
    {
    	echo "<li><a href=\"index.php?page=documentation&lang=$lang\" class=\"mbold\">$DOC</a></li>";
    }

/* 10 DOWNLOAD */

    if ($SubMenu == 10)
    {
    	echo "<li><a href=\"index.php?page=download&lang=$lang\" class=\"mhl\">$DOWN</a>";
	echo "<ul class=\"submenu\">";
    	echo "<li><a href=\"#source\" class=\"mlight\">$SOURCE</a></li>";
	echo "<li><a href=\"#binaries\" class=\"mlight\">$BIN</a></li>";
	echo "<li><a href=\"http://svn.xfce.org/svn/xfce/\" class=\"mlight\" target=\"_new\">$WCVS</a></li>";
	echo "<li><a href=\"#goodies\" class=\"mlight\">$GOOD</a></li>";
	echo "</ul></li>";
    }
    else
    {
	echo "<li><a href=\"index.php?page=download&lang=$lang\" class=\"mbold\">$DOWN</a></li>";
    }

/* 11 DEVELOPMENT */

    if ($SubMenu == 11)
    {
	echo "<li><a href=\"index.php?page=developers&lang=$lang\" class=\"mhl\">$DEV</a>";
   echo "<ul class=\"submenu\">";
	echo "<li><a href=\"#bug\" class=\"mlight\">$BUG</a></li>";
	echo "<li><a href=\"http://bugzilla.xfce.org/\" class=\"mlight\">$TRACK</a></li>";   
   echo "<li><a href=\"#contribute\" class=\"mlight\">$CONTRIB</a></li>";
	echo "</ul></li>";
    }
    else
    {
	echo "<li><a href=\"index.php?page=developers&lang=$lang\" class=\"mbold\">$DEV</a></li>";
    }

/* 12 MAILING LISTS */

    if ($SubMenu == 12)
    {
    	echo "<li><a href=\"index.php?page=mailinglists&lang=$lang\" class=\"mhl\">$ML</a></li>";
    }
    else
    {
    	echo "<li><a href=\"index.php?page=mailinglists&lang=$lang\" class=\"mbold\">$ML</a></li>";
    }

/* 13 CREDITS */

    if ($SubMenu == 13)
    {
    	echo "<li><a href=\"index.php?page=about&lang=$lang\" class=\"mhl\">$ABOUT</a></li>";
    }
    else
    {
    	echo "<li><a href=\"index.php?page=about&lang=$lang\" class=\"mbold\">$ABOUT</a></li>";
    }

/* 14 LINKS */

    if ($SubMenu == 14)
    {
    	echo "<li><a href=\"index.php?page=links&lang=$lang\" class=\"mhl\">$LINK</a></li>";
    }
    else
    {
    	echo "<li><a href=\"index.php?page=links&lang=$lang\" class=\"mbold\">$LINK</a></li>";
    }

echo "</ul>";

}

?>
