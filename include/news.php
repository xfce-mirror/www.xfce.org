<?php
function startElement($parser, $name, $attribs)
{
   echo "&lt;<font color=\"blue\">$name</font>";
   if (count($attribs)) {
       foreach ($attribs as $k => $v) {
           echo " <font color=\"green\">$k</font>=\"<font
                   color=\"red\">$v</font>\"";
       }
   }
   echo "&gt;";
}

function endElement($parser, $name)
{
   echo "&lt;/<font color=\"blue\">$name</font>&gt;";
}

function characterData($parser, $data)
{
   echo "$data";
}

function new_xml_parser($file)
{
   global $parser_file;

   $xml_parser = xml_parser_create();
   xml_parser_set_option($xml_parser, XML_OPTION_CASE_FOLDING, 1);
   xml_set_element_handler($xml_parser, "startElement", "endElement");
   xml_set_character_data_handler($xml_parser, "characterData");
  
   if (!($fp = @fopen($file, "r"))) {
       return false;
   }
   if (!is_array($parser_file)) {
       settype($parser_file, "array");
   }
   $parser_file[$xml_parser] = $file;
   return array($xml_parser, $fp);
}

function ParseFile ($file)
{
	if (!(list($xml_parser, $fp) = new_xml_parser($file))) {
	   die("could not open XML input");
	}

	echo "<pre>";
	while ($data = fread($fp, 4096)) {
	   if (!xml_parse($xml_parser, $data, feof($fp))) {
	       die(sprintf("XML error: %s at line %d\n",
			   xml_error_string(xml_get_error_code($xml_parser)),
			   xml_get_current_line_number($xml_parser)));
	   }
	}
	echo "</pre>";
	echo "parse complete\n";
	xml_parser_free($xml_parser);
}

?>
