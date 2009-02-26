<?php
/* $Id$ */
/* -
 * Copyright (c) 2006-2007 Nick Schermer <nick@xfce.org>
 *
 * This php code is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Library General Public License as published
 * by the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This php code is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Library General Public License for more details.
 *
 * You should have received a copy of the GNU Library General Public License
 * along with this php code; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 */
 
 
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

  $title = htmlentities ($title, ENT_COMPAT, "UTF-8");
  $content = htmlentities ($content, ENT_COMPAT, "UTF-8");

  echo "<h$h id=\"m". $item["id"] ."\">". $title ."</h$h>".
       "<p>".
       "<span class=\"grey\"><em>[". CreateDate ($item["date"], $date_format, true).
       " by ". $item["author"] ."]</em></span>".
       "<br />".
       "". ParseBBCode ($content).
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
            
          echo "<p><a href=\"/about/news#m". $item["id"] ."\">$return</a></p>";
            
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
