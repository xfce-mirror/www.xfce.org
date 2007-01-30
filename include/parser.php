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


/**
 * This function downloads the website
 * feed and returns the downloaded data.
 **/
function DownloadFeed ($server="blog.xfce.org", $get="/?feed=rss2", $port=80, $timeout=5)
{
  $sock = fsockopen ("tcp://".$server, $port, $errno, $errstr, $timeout);

  if (!$sock)
    {
      /* something went wrong */
      echo "\n\n<!-- ERROR while opening socket: $errstr ($errno)  -->\n\n";

      return '';
    }
  else
    {
      /* prepare the header */
      $out = "GET $get HTTP/1.1\r\n".
             "Host: $server\r\n";

      /* maybe we can speed things up a bit */
      if (function_exists ('gzinflate'))
        $out .= "Accept-Encoding: gzip,deflate\r\n";

      /* close */
      $out .= "Connection: Close\r\n\r\n";

      /* send the request */
      fwrite ($sock, $out);

      /* set stream timeout */
      stream_set_timeout ($sock, $timeout);

      /* check if the stream timed out */
      $info = stream_get_meta_data ($sock);
      $data = '';

      /* get the file content */
      $data = '';
      $header = '';
      while (!$info['eof'] && !$info['timed_out'])
        {
          /* download each line */
          $t = fgets ($sock, 1024);
          $info = stream_get_meta_data ($sock);

          /* first part of the data is header, then the content */
          if (strpos ($header, "\r\n\r\n") === false)
            $header .= $t;
          else
            $data .= $t;
        }

      /* close the socket */
      fclose ($sock);

      /* decompress the content (if it is compresses) */
      if (function_exists ('gzinflate') && strpos ($header, "gzip"))
        {
          /* decompress, first 10 bytes are crap */
          $data = gzinflate (substr ($data, 10));
        }

      /* return the data */
      return $data;
    }
}



/**
 * Helper function for the ParseFeed function
 **/
function AddFeedValues ($feed, $key, $array, $data, $max)
{
  $i=0;

  foreach ($array as $num)
    {
      if ($data[$num]["level"] == 4)
        {
          $feed[$i][$key] = $data[$num]["value"];

          $i++;
          if ($i >= $max)
            break;
        }
    }

  return $feed;
}



/**
 * This function will parse the feed and
 * returns an array with $max feeds.
 **/
function ParseFeed ($data, $max=3)
{
  /* create a new xml parser */
  $parser = xml_parser_create();

  /* set some options */
  xml_parser_set_option ($parser, XML_OPTION_CASE_FOLDING, 0);
  xml_parser_set_option ($parser, XML_OPTION_SKIP_WHITE, 1);

  /* parse the $data into arrays */
  if (xml_parse_into_struct ($parser, $data, $vals, $index) == FALSE)
    return FALSE;

  /* cleanup */
  xml_parser_free($parser);

  /* walk through the array and get the content */
  foreach ($index as $key => $value)
    {
      switch ($key)
        {
          case "title":
          case "link":
            $feed = AddFeedValues ($feed, $key, $value, $vals, $max);
            break;
          case "pubDate":
            $feed = AddFeedValues ($feed, "date", $value, $vals, $max);
            break;
          case "dc:creator":
            $feed = AddFeedValues ($feed, "creator", $value, $vals, $max);
            break;
        }
    }

  /* cleanup the large vals */
  unset ($index, $vals, $key, $value);

  /* return the parsed feed */
  return $feed;
}



/**
 * This function writes the feed array to a regular php
 * file, so we only need to include the file when it's
 * not expired yet.
 **/
function WriteFeed ($feed, $file)
{
  $data = "<?php\n";

  if ($feed == FALSE)
    {
      /* fake cache data */
      $data .= "\$feed = FALSE;";
    }
  else
    {
      /* start the content of the php file */
      $data .= "\$feed = array (";

      /* add all the items */
      foreach ($feed as $item)
        {
          $data .= "array (".
                   "  'creator' => '". $item["creator"] ."',".
                   "  'date' => '". $item["date"] ."',".
                   "  'link' => '". $item["link"] ."',".
                   "  'title' => '". $item["title"] ."'".
                   "),";
        }

      /* clse the file content */
      $data .= "); ";
    }


  $data .= "\n?>\n";

  /* create a new temp file */
  $temp = tempnam ('/tmp','Copyright (c) Xfce Development Team');

  /* open the file, write the content and close it */
  $handle = @fopen ($temp, 'a');

  if (!$handle)
    {
      echo ("\n\n<!-- ERROR unable to open the temp file -->\n\n");
    }
  else
    {
      fwrite ($handle, $data);
      fclose ($handle);

      /* rename the temp file to $file */
      rename ($temp, $file);
    }
}



/**
 * This function will return the feed array and it will update the
 * the cache when it is older then $timeout seconds.
 **/
function CreateFeed ($timeout=3600)
{
  $file = "/tmp/xfce_org_feed_cache.php";

  if(!file_exists ($file) || filemtime ($file) < (time() - $timeout))
    {
      /* get the feed data */
      $data = DownloadFeed ();

      if ($data == '')
        {
          /* something when wrong with downloading the feed, not a
           * big problem tho, but make sure we don't check again the next
           * $timeout seconds */
          WriteFeed (FALSE, $file);

          return FALSE;
        }

      /* parse the feed */
      $feed = ParseFeed ($data);

      /* cleanup */
      unset ($data);

      /* store the parsed feed */
      WriteFeed ($feed, $file);
    }
  else
    {
      /* oe, that's nice, there is still an up2date feed cache,
       * we only need to include it :-) */
      include ($file);
    }

  return $feed;
}

?>
