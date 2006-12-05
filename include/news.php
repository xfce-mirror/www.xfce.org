<?php

function PrintArticle ($item, $h)
{
      $format = "%e %B %Y";

      echo "<h$h id=\"m". strtotime ($item["date"]) ."\">". htmlentities ($item["title"]) ."</h$h>".
           "<p>".
           "  <span class=\"grey\"><em>[". CreateDate ($item["date"], $format, true).
           "  by ". $item["author"] ."]</em></span>".
           "  <br />".
           "  ". ParseBBCode (htmlentities ($item["content"])).
           "</p>";
}

function PrintNewsPage ($lang, $id, $warning)
{
    if (is_file ("i18n/news/".$lang.".news.php"))
        include ("i18n/news/".$lang.".news.php");
    else
        include ("i18n/news/en.news.php");

    foreach ($news as $item)
    {
        if ($id && $id == strtotime ($item["date"]))
        {
            PrintArticle ($item, "1");
            $found = true;
        }
        elseif ($id == false)
        {
            PrintArticle ($item, "2");
        }
    }

    if ($id && $found == false)
    {
        echo "<p>". $warning ."</p>";
    }
}

?>
