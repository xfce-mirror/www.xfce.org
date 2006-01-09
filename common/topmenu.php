<?php

/* Creates the quick (top) menu */

function GenerateMenu($FastMenu, $lang) {

/* Let's include translated menu items */

include "$lang/menu.$lang.php";

/* 1 HOME */

    if ($FastMenu == 1)
    {
	echo "<a href=\"index.php?lang=$lang\" class=\"hl\">$HOME</a>";
    }
    else
    {
    	echo "<a href=\"index.php?lang=$lang\" class=\"qn\">$HOME</a>";
    }
    
echo " | ";

/* 2 OVERVIEW */

    if ($FastMenu == 2)
    {
    	echo "<a href=\"index.php?page=overview&lang=$lang\" class=\"hl\">$OVER</a>";
    }
    else
    {
    	echo "<a href=\"index.php?page=overview&lang=$lang\" class=\"qn\">$OVER</a>";
    }
    
echo " | ";

/* 3 EXTRAS*/

/*    if ($FastMenu == 3)
    {
    	echo "<a href=\"index.php?page=extras&lang=$lang\" class=\"hl\">$EXTRAS</a>";
    }
    else
    {
    	echo "<a href=\"index.php?page=extras&lang=$lang\" class=\"qn\">$EXTRAS</a>";
    }
    
echo " | ";

*/

/* 4 SCREENSHOTS */

    if ($FastMenu ==4)
    {
    	echo "<a href=\"index.php?page=screenshots&lang=$lang\" class=\"hl\">$SCREEN</a>";
    }
    else
    {
    	echo "<a href=\"index.php?page=screenshots&lang=$lang\" class=\"qn\">$SCREEN</a>";
    }
    
echo " | ";

/* 5 NEWS */

    if ($FastMenu == 5)
    {
    	echo "<a href=\"index.php?page=news&lang=$lang\" class=\"hl\">$NEWS</a>";
    }
    else
    {
    	echo "<a href=\"index.php?page=news&lang=$lang\" class=\"qn\">$NEWS</a>";
    }
    
echo " | ";

/* 6 DOCS */

    if ($FastMenu == 6)
    {
    	echo "<a href=\"index.php?page=documentation&lang=$lang\" class=\"hl\">$DOC</a>";
    }
    else
    {
    	echo "<a href=\"index.php?page=documentation&lang=$lang\" class=\"qn\">$DOC</a>";
    }
    
echo " | ";

/* 7 DOWNLOAD */

    if ($FastMenu == 7)
    {
    	echo "<a href=\"index.php?page=download&lang=$lang\" class=\"hl\">$DOWN</a>";
    }
    else
    {
    	echo "<a href=\"index.php?page=download&lang=$lang\" class=\"qn\">$DOWN</a>";
    }
    
echo " | ";

/* 8 DEVELOPMENT */

    if ($FastMenu == 8)
    {
    	echo "<a href=\"index.php?page=developers&lang=$lang\" class=\"hl\">$DEV</a>";
    }
    else
    {
    	echo "<a href=\"index.php?page=developers&lang=$lang\" class=\"qn\">$DEV</a>";
    }
    
echo " | ";

/* 9 MAILING LISTS */

    if ($FastMenu == 9)
    {
    	echo "<a href=\"index.php?page=mailinglists&lang=$lang\" class=\"hl\">$ML</a>";
    }
    else
    {
    	echo "<a href=\"index.php?page=mailinglists&lang=$lang\" class=\"qn\">$ML</a>";
    }
    
echo " | ";

/* 10 CREDITS */

    if ($FastMenu == 10)
    {
    	echo "<a href=\"index.php?page=about&lang=$lang\" class=\"hl\">$ABOUT</a>";
    }
    else
    {
    	echo "<a href=\"index.php?page=about&lang=$lang\" class=\"qn\">$ABOUT</a>";
    }
    
echo " | ";

/* 11 LINKS */

    if ($FastMenu == 11)
    {
    	echo "<a href=\"index.php?page=links&lang=$lang\" class=\"hl\">$LINK</a>";
    }
    else
    {
    	echo "<a href=\"index.php?page=links&lang=$lang\" class=\"qn\">$LINK</a>";
    }

}

?>
