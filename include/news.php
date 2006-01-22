<?php

function getElementAttributes($DomNode,$elementName,$attriName)
{
   if ($ChildDomNode = $DomNode->first_child())
   {
       while($ChildDomNode)
       {
           if ($ChildDomNode->node_type() == XML_ELEMENT_NODE)
             {
               if($ChildDomNode->node_name() == $elementName)
               {
              
                 if ($ChildDomNode->has_attributes())
                 {
                   $Array = $ChildDomNode->attributes();
                   foreach ($Array AS $DomAttribute)
                   {
                       if($DomAttribute->name() == $attriName)
                       {
                         $nodeArray[] = $DomAttribute->value();
                       }
                   }// foreach ($Array AS $DomAttribute)

                 }//if ($ChildDomNode->has_attributes())
              
               }
          
             if ($ChildDomNode->has_child_nodes())
               {
                   $tmpArray = (getElementAttributes($ChildDomNode,$elementName,$attriName));
                   $nodeArray = array_merge($nodeArray, $tmpArray);
                   unset($tmpArray);
               }// if ($ChildDomNode->has_child_nodes())
              
           }//if ($ChildDomNode->node_type() == XML_ELEMENT_NODE)
          
           $ChildDomNode = $ChildDomNode->next_sibling();

       }//while($ChildDomNode)
      
   return $nodeArray;
  }//if ($ChildDomNode = $DomNode->first_child())
 
}

function ParseFile ($file)
{
$element = "xfce";
$att = "item";
$DomDocument = domxml_open_file($file);
$RootDomNode = $DomDocument->document_element();
$array = getElementAttributes($RootDomNode,$element,$att);
echo "<pre>";
print_r($array);
echo "</pre>";
}

?>
