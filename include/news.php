<?php
function trustedFile($file)
{
   // only trust local files owned by ourselves
   if (!eregi("^([a-z]+)://", $file)
       && fileowner($file) == getmyuid()) {
           return true;
   }
   return false;
}

function startElement($parser, $name, $attribs)
{
   echo "&lt;<font color=\"#0000cc\">$name</font>";
   if (count($attribs)) {
       foreach ($attribs as $k => $v) {
           echo " <font color=\"#009900\">$k</font>=\"<font
                   color=\"#990000\">$v</font>\"";
       }
   }
   echo "&gt;";
}

function endElement($parser, $name)
{
   echo "&lt;/<font color=\"#0000cc\">$name</font>&gt;";
}

function characterData($parser, $data)
{
   echo "<b>$data</b>";
}

function PIHandler($parser, $target, $data)
{
   switch (strtolower($target)) {
       case "php":
           global $parser_file;
           // If the parsed document is "trusted", we say it is safe
           // to execute PHP code inside it.  If not, display the code
           // instead.
           if (trustedFile($parser_file[$parser])) {
               eval($data);
           } else {
               printf("Untrusted PHP code: <i>%s</i>",
                       htmlspecialchars($data));
           }
           break;
   }
}

function defaultHandler($parser, $data)
{
   if (substr($data, 0, 1) == "&" && substr($data, -1, 1) == ";") {
       printf('<font color="#aa00aa">%s</font>',
               htmlspecialchars($data));
   } else {
       printf('<font size="-1">%s</font>',
               htmlspecialchars($data));
   }
}

function externalEntityRefHandler($parser, $openEntityNames, $base, $systemId,
                                 $publicId) {
   if ($systemId) {
       if (!list($parser, $fp) = new_xml_parser($systemId)) {
           printf("Could not open entity %s at %s\n", $openEntityNames,
                   $systemId);
           return false;
       }
       while ($data = fread($fp, 4096)) {
           if (!xml_parse($parser, $data, feof($fp))) {
               printf("XML error: %s at line %d while parsing entity %s\n",
                       xml_error_string(xml_get_error_code($parser)),
                       xml_get_current_line_number($parser), $openEntityNames);
               xml_parser_free($parser);
               return false;
           }
       }
       xml_parser_free($parser);
       return true;
   }
   return false;
}

function new_xml_parser($file)
{
   global $parser_file;

   $xml_parser = xml_parser_create();
   xml_parser_set_option($xml_parser, XML_OPTION_CASE_FOLDING, 1);
   xml_set_element_handler($xml_parser, "startElement", "endElement");
   xml_set_character_data_handler($xml_parser, "characterData");
   //xml_set_processing_instruction_handler($xml_parser, "PIHandler");
   //xml_set_default_handler($xml_parser, "defaultHandler");
  // xml_set_external_entity_ref_handler($xml_parser, "externalEntityRefHandler");
  
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
