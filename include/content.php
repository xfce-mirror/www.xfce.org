<?php
/* $Id$ */
/* -
 * Copyright (c) 2006-2007 Nick Schermer <nick@xfce.org>
 * Copyright (c) 2006      Auke Kok <sofar@foo-projects.org>
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


/**
 * This function will return the filenames that need to be included
 **/
function PrepareContent ($uri, $lang)
{
  $dir = "i18n/" . $uri;

  if (is_dir ($dir))
    {
      /* user is looking for a directory, try again for the index */
      return PrepareContent ( $uri . "/index", $lang );
    }
  else
    {
      /* $uri = projects/xfmedia/downloads = file? => get the index page */
      $file = "i18n/" . $uri . "." . $lang . ".php";
      $file_en = "i18n/" . $uri . ".en.php";

      if (is_file ($file))
        {
          $content["file"] = $file;
	}
      elseif (is_file ($file_en))
        {
          $content["file"] = $file_en;
	  
	  /* not in your language */
          $content["wronglang"] = TRUE; 
        }
       else
        {
          /* Page does not exist, return 404 page and 404 header for wget */
          header("HTTP/1.0 404 Not Found");
          return PrepareContent ("404", $lang);
        }

      $uri_dir = dirname ($uri);

      $nav = "i18n/" . $uri_dir . "/" . $lang . ".nav.php";
      $nav_en = "i18n/" . $uri_dir . "/en.nav.php";

      if (is_file ($nav))
        $content["nav"] = $nav;
      elseif (is_file ($nav_en))
        $content["nav"] = $nav_en;
      else
        $content["nav"] = false;

      return $content;
    }
}



/**
 * Print sponsor banner
 **/
function PrintSponsor () {

  echo "<h2 class=\"hidden\">Sponsor</h2>\n".
       "<a href=\"http://www.2x.com/\" target=\"_blank\"><img src=\"/layout/friends/2x_large.jpg\" width=\"160\" height=\"50\" alt=\"2X\" border=\"0\" /></a>\n".
       "<p>Check out the 2X range:<br />\n".
              "&#8226; <a href=\"http://www.2x.com/thinclientserver/\" target=\"_blank\">2X ThinClientServer</a><br />\n",
              "&#8226; <a href=\"http://www.2x.com/loadbalancer/\" target=\"_blank\">2X LoadBalancer</a><br />\n".
              "&#8226; <a href=\"http://www.2x.com/applicationserver/\" target=\"_blank\">2X ApplicationServer</a>\n".
       "</p>\n";
}


/**
 * This function will echo all the content pages
 */
function PrintContent ($content, $lang)
{
  /* include the translation array */
  if (is_file ("i18n/arrays/". $lang .".content.php"))
    include ("i18n/arrays/". $lang .".content.php");
  else
    include ("i18n/arrays/en.content.php");

  /* print the right column */
  print ('<div id="content-right">');

  /* print warning when page was not found in the users language */
  if ($content["wronglang"])
    {
      echo "<h2 class=\"hidden\">$warning</h2>".
           "<div id=\"content-lang\">".
           "<p><img src=\"/layout/images/spacer.gif\" alt=\"\" width=\"0\" height=\"0\" align=\"left\" />$notinlang</p>".
           "</div>";
    }

  /* print the navigation file, if found */
  if ($content["nav"])
    {
      echo "<div id=\"content-menu\">".
           "<h2 class=\"hidden\">$contentnav</h2>";
      include ($content["nav"]);
      echo "</div>";
    }
    
  /* print the sponsor div */
  // print ('<div id="content-sponsor">');
  // PrintSponsor ();
  // print ('</div>');
  
  /* close the content-right div */
  print ('</div>'); 
  
  /* the page content */
  print ('<div id="content-text">');
  include ($content["file"]);
  print ('</div>');
}

?>
