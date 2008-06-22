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
 
/* Site languages */
/* - The key is used to detect the user language and used in the language bar
 * - 1st in array is used for the language bar tooltip
 * - 2nd for the page charset
 * - 3rd for php's setlocale function
 */
$languages = array (
        "be" => array ('Belarusian','UTF-8', 'be_BY.utf8'),
/*      "ca" => array ('Catalan','UTF-8', 'ca_ES.utf8'), */     
        "de" => array ('Deutsch','UTF-8', 'de_DE.utf8'),
        "en" => array ('English', 'UTF-8', 'en_EN'),
/*      "es" => array ('Español', 'UTF-8', 'es'), */
        "eu" => array ('Basque', 'UTF-8', 'eu'),
        "fr" => array ('Français', 'UTF-8', 'fr_FR.utf8'),
        "id" => array ('Bahasa Indonesia', 'UTF-8', 'id'),
/*      "it" => array ('Italiano', 'UTF-8', 'it'), */
        "ja" => array ('Nihon', 'UTF-8', 'ja_JP.utf8'),
        "nl" => array ('Nederlands', 'UTF-8', 'nl_NL'),
        "pt_BR" => array ('Português do Brasil', 'UTF-8', 'pt_BR.utf8'),
        "pt_PT" => array ('Português', 'UTF-8', 'pt_PT.utf8'),
        "sq" => array ('Shqip', 'UTF-8', 'sq_AL.utf8'),
        "zh_CN" => array ('简体中文', 'UTF-8', 'zh_CN'),
);

/* Internal style names. The visible names are located in the i18n/header.xx.php file */
$layouts = array ("normal", "liquid");

?>
