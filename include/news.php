<?php

function PrintArticle ($item, $date_format, $news_translated, $h)
{
      if (array_key_exists ($item["id"], $news_translated))
      {
          $title = $news_translated[$item["id"]]["title"];
          $content = $news_translated[$item["id"]]["content"];
      }
      else
      {
          $title = $item["title"];
          $content = $item["content"];
      }

      echo "<h$h id=\"m". $item["id"] ."\">". htmlentities ($title) ."</h$h>".
           "<p>".
           "<span class=\"grey\"><em>[". CreateDate ($item["date"], $date_format, true).
             "by ". $item["author"] ."]</em></span>".
           "<br />".
             "". ParseBBCode (htmlentities ($content)).
           "</p>";
}

function PrintNewsPage ($lang, $id, $title, $return, $warning)
{
    /* load english news file */
    include ("i18n/news/en.news.php");
    
    /* load the translation, if needed */
    if ($lang != "en" && is_file ("i18n/news/".$lang.".news.php"))
        include ("i18n/news/".$lang.".news.php");
    else
        $news_translated = array ();
        
    if ($id == "")
        echo "<h1>$title</h1>";

    foreach ($news as $item)
    {
        if ($id == $item["id"])
        {
        	/* print the article with the given id */
            PrintArticle ($item, $date_format, $news_translated, 1);
            
            echo "<p>".
                 "<a href=\"/about/news#m". $item["id"] ."\">$return</a>".
                 "</p>";
            
            $found = true;
            break;
        }
        elseif ($id == "")
        {
            PrintArticle ($item, $date_format, $news_translated, 2);
        }
    }

    if ($id != "" && $found == false)
    {
        echo "<h1>$title</h1>";
        echo "<br />";
        echo "<div class=\"warning\"><strong>". $warning .".</strong></div>";
    }
}

?>
