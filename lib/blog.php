<?php
  function parseRSS($url) {

  $feedeed = implode('', file($url));
  $parser = xml_parser_create();
  xml_parse_into_struct($parser, $feedeed, $valueals, $index);
  xml_parser_free($parser);

  foreach($valueals as $keyey => $valueal)
    {
      if($valueal['type'] != 'cdata')
        {
          $item[$keyey] = $valueal;
        }
      }

      $i = 0;

      foreach($item as $key => $value)
        {
          if($value['type'] == 'open')
            {
              $i++;
              $itemame[$i] = $value['tag'];
            }
          elseif($value['type'] == 'close')
            {
              $feed = $values[$i];
              $item = $itemame[$i];
              $i--;

              if(isset ($values[$i]) && count($values[$i])>1)
                {
                  $values[$i][$item][] = $feed;
                }
              else
                {
                  $values[$i][$item] = $feed;
                }
            }
          else
            {
              if (isset ($value['value']))
                $values[$i][$value['tag']] = $value['value'];
            }
        }
        return $values[0];
  }

?>
