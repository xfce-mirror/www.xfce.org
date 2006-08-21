<?php

function AddValues ($feed, $name, $array, $data)
{
    $max=3;
    $i=0;

    foreach ($array as $num)
    {
        if ($data[$num]["level"] == 4)
        {
            $feed[$i][$name] = $data[$num]["value"];
            
            $i++;
            if ($i >= $max)
                break;
        }
    }

    return $feed;
}

function CreateFeed ($url, $max, $timeout=1800)
{
    /*
      $fp = fopen($url, "r" )
              or die( "Cannot read RSS data file." ); */

    $data = file_get_contents($url);

    $xml_parser = xml_parser_create();
    xml_parser_set_option ($xml_parser, XML_OPTION_CASE_FOLDING, 0);
    xml_parser_set_option ($xml_parser, XML_OPTION_SKIP_WHITE, 1);

    xml_parse_into_struct ($xml_parser, $data, $vals, $index);

    /*while( $data = fread( $fp, 4096 ) )
        
print_r ($data);
    fclose ($fp);*/
    
    xml_parser_free($xml_parser);

    foreach ($index as $key=>$value)
    {
        switch ($key)
        {
            case "title":
                $feed = AddValues ($feed, "title", $value, $vals);
                break;
            case "pubDate":
                $feed = AddValues ($feed, "date", $value, $vals);
                break;
            case "link":
                $feed = AddValues ($feed, "link", $value, $vals);
                break;
            case "dc:creator":
                $feed = AddValues ($feed, "creator", $value, $vals);
                break;
        }
    }

    return $feed;
}

/**
 * Feed Code for php 5
 **/

/*
function CreateFeed_php5 ($url, $max, $timeout=1800)
{
    $dest_file = '/tmp/rss_'.md5($url);
    if(!file_exists($dest_file) || filemtime($dest_file) < (time()-$timeout)) {
        $stream = fopen($url,'r');
        $tmpf = tempnam('/tmp','YWS');
        file_put_contents($tmpf, $stream);
        fclose($stream);
        rename($tmpf, $dest_file);
    }
    $dom = DOMDocument::load($dest_file);

    $xpath = new DOMXPath($dom);
    $ns = array(''=>NULL);
    foreach($xpath->query("namespace::*") as $v)
    {
        if($v->localName!='xml')
            $ns[$v->localName] = $v->nodeValue;
    }


    $xml = simplexml_import_dom($dom);
    
    $items = $xml->channel->item;
    
    $i=0;
    foreach ($items as $key=>$val)
    {
        if ($i > $max)
            break;

                $feed[$i]["title"]   = (string)$val->title;
                $feed[$i]["link"]    = (string)$val->link;
                $feed[$i]["date"]    = (string)$val->pubDate;

        foreach($ns as $alias=>$uri)
            foreach($val->children($uri) as $k=>$v)
                if ($k == "creator")
                {
                    $feed[$i]["creator"] = (string)$v;
                    break 2;
                }

                $i++;
    }

    return $feed;
}
*/

?>
