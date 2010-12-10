<?php
  $head['description'] = 'Xfce Desktop Environment';
  $head['keywords'] = 'desktop environment, window manager, desktop, speed, lightweight, gtk+, open source, xforms common environment';
  $head['stylesheet'] = array ('/style/home.css');
?>

<?php include("lib/blog.php") ?>

<div id="download">

  <div id="button">
    <a href="/download/"><?php E_("Download Xfce") ?></a>
  </div>

  <p><a href="">Changelogs</a> | <a href="">Tour</a></p>

</div>

<div id="quote">

  <h2><?php E_("What is Xfce?") ?></h2>

  <blockquote><?php E_("Xfce is a lightweight desktop environment for various *NIX systems. Designed for productivity, it loads and executes applications fast, while conserving system resources.") ?></blockquote>
  <span><?php E_("Olivier Fourdan, creator of Xfce") ?></span>

  <p>
    <?php E_("Xfce embodies the traditional UNIX philosophy of modularity and re-usability. It consists of a number of components that together provide the full functionality of the desktop environment. They are packaged separately and you can pick and choose from the available packages to create the best personal working environment.") ?>
  </p>

</div>

<div id="blog">

  <h2><?php E_("Developers blog") ?></h2>

  <?php

    $xml = parseRSS("http://blog.xfce.org/feed/");
    $i = 0;

    foreach($xml['RSS']['CHANNEL']['ITEM'] as $item) {
      if ($i > 3)
        break;

      echo ("<p class=\"info\">" . $item['DC:CREATOR'] . " @ " . substr ($item['PUBDATE'], 5, 11) . "</p>\n");
      echo ("<p class=\"title\"><a href=\"{$item['LINK']}\" class=\"external\">{$item['TITLE']}{$link}</a></p>\n");

      $i++;
    }

  ?>

</div>
