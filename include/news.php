<?php

function PrintNewsPage ($lang)
{
    if (is_file ("i18n/news/".$lang.".news.php"))
        include ("i18n/news/".$lang.".news.php");
    else
        include ("i18n/news/en.news.php");
    
    $format = "%e %B %Y";

    foreach ($news as $item)
    {
        echo "<h2>". htmlentities ($item["title"]) ."</h2>";
    
        echo "<p>". htmlentities ($item["content"]) ."</p>";
    }
}
?>