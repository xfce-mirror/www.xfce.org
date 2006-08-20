<?php

function CreateFeed ($url, $max, $timeout=1800)
{
    $dest_file = '/tmp/rss_'.md5($url);
    if(!file_exists($dest_file) || filemtime($dest_file) < (time()-$timeout)) {
        $stream  = fopen($url,'r');
        $tempnam = tempnam('/tmp','YWS');
        
        $handle = fopen($tempnam, "w");
        fwrite($handle, $stream);
        fclose($stream);
        fclose ($handle);
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
    
    $format = "%e %B %Y";
    $items = $xml->channel->item;
    
    $i=0;
    foreach ($items as $key=>$val)
    {
        if ($i > $max)
            break;

				$feed[$i]["title"]   = (string)$val->title;
				$feed[$i]["link"]    = (string)$val->link;
				$feed[$i]["date"]    = CreateDate ((string)$val->pubDate, $format, true);

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

?>
