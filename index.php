<?php

# do not assume register_globals is on: explicitly fetch parameters.
$page = $_GET['page'];
$lang = $_GET['lang'];

if ($page == "")
    {
    $page = "index";
    $SubMenu="1";
    $FastMenu="1";
    }

elseif ($page == "about")
    {
    $SubMenu="13";
    $FastMenu="10";
    }

elseif ($page == "index")
    {	
    $SubMenu="1";
    $FastMenu="1";
    }

elseif ($page == "devel_screenshots")
    {
    $SubMenu="6";
    $FastMenu="0";
    }

elseif ($page == "developers")
    {
    $SubMenu="11";
    $FastMenu="8";
    }

elseif ($page == "documentation")
    {
    $SubMenu="9";
    $FastMenu="6";
    }

elseif ($page == "download")
    {
    $SubMenu="10";
    $FastMenu="7";
    }

elseif ($page == "extras")
    {
    $SubMenu="3";
    $FastMenu="3";
    }

elseif ($page == "links")
    {
    $SubMenu="14";
    $FastMenu="11";
    }
    
elseif ($page == "mailinglists")
    {
    $SubMenu="12";
    $FastMenu="9";
    }

elseif ($page == "news")
    {
    $SubMenu="8";
    $FastMenu="5";
    }

elseif ($page == "devblog")
    {
    $SubMenu="15";
    $FastMenu="0";
    }

elseif ($page == "overview")
    {
    $SubMenu="2";
    $FastMenu="2";
    }

elseif ($page == "screenshots")
    {
    $SubMenu="5";
    $FastMenu="4";
    }

elseif ($page == "users_screenshots")
    {
    $SubMenu="7";
    $FastMenu="0";
    }

elseif ($page == "xfwm4_themes")
    {
    $SubMenu="4";
    $FastMenu="0";
    }

include "main.php";

?>
