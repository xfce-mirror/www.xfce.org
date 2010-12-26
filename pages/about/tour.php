<?php $head['title'] = R_('Tour') ?>

<h1><?php echo $head['title'] ?></h1>

<p><?php E_('This tour will introduce you to all the new major visual features in Xfce 4.8. This is only the visual part of what has been done; for a full list of changes, see the <a href="/download/changelogs/">changelogs</a>. The tour for Xfce 4.6 can be found <a href="/about/tour46">here</a>.') ?></p>

<h2><?php E_("Thunar file browser") ?></h2>

  <h3><?php E_("Remote shares browsing") ?></h3>

    <p><?php E_("Thunar now has optionnal support for GVFS which will allow you to browse remote shares using Thunar: FTP, Windows Shares, WebDav and SSH servers...") ?></p>

  <h3><?php E_("New file operations progress dialog") ?></h3>

    <p><?php E_("When several file operations (copy or move) are being handled in parallel, Thunar now shows a single progress dialog which displays all the relevant information.") ?></p>

  <h3><?php E_("Eject button for removable devices") ?></h3>

    <p><?php E_("It is is now possible to eject removable devices by clicking the eject button near each removable device label in the side pane.") ?></p>

<h2><?php E_("Xfce panel") ?></h2>

  <p><?php E_("The Xfce panel has been totally rewritten in 4.8, here are the most visible changes.") ?></p>

  <h3><?php E_("Transparent backgrounds") ?></h3>

    <p><?php E_("The panel is now able to draw transparent panel backgrounds with non transparent items. Your panel items will remain readable and you will enjoy a nice panel look.") ?></p>

  <h3><?php E_("New item editor") ?></h3>

    <p><?php E_("The panel now features an item editor which allows to modify, move, add and remove items qucikly. This is particularly useful for items which are hard to right click and gives you an easy way to change your panel layout from a single place.") ?></p>

  <h3><?php E_("Drag and drop to create launchers") ?></h3>

    <p><?php E_("You can now drag and drop menu entries from the panel applications menu to the panel to create panel and desktop launchers. This feature should please the huge number of people who had been requesting it for ages.") ?></p>

  <!-- iconbox and tasklist merged in new 'window buttons' plugin -->

  <!-- much improved positioning: show panel only on a single output, snap to screen edges and don't move floating panels -->

  <h3><?php E_("New fuzzy clock") ?></h3>

    <p><?php E_("An Xfce release without a new clock mode would not be a true Xfce release. Let us introduce you the 'fuzzy' clock mode!") ?></p>

  <h3><?php E_("New directory menu plugin") ?></h3>

    <p><?php E_("The directory menu plugin provides a menu reproducing the arborescence of a particular folder. This allows you to open a terminal or a file manager in a sub-folder in a very fast and efficient way.") ?></p>

  <h3><?php E_("Applications menu edition") ?></h3>

    <p><?php E_("You can now edit the applications menu using any Freedesktop compliant menu editor, Alacarte being the one we used to test.") ?></p>

<h2><?php E_("Xfce settings dialogs") ?></h3>

  <h3><?php E_("Improved multihead setup configuration") ?></h3>

    <p><?php E_("Xfce can now handle and setup multihead setups for any randr 1.2 compatible driver. Unfortunately, this means it will not work with Nvidia proprietary drivers.") ?></p>

    <p><?php E_("You can enable and disable plugged screens, set their resolution, reflesh rate, rotation and reflexion, clone screens or extend desktops.") ?></p>

    <h4><?php E_("Timed confirmation") ?></h4>

      <p><?php E_("Any change made with the settings dialog will have to be confirmed within ten seconds or they will be reverted. This prevents broken video drivers from leaving your computer unusable.") ?></p>

    <h4><?php E_("Quick setup dialog") ?></h4>

      <p><?php E_("The quick setup dialog allows you to configure a dual screen setup in a second. Plug the second screen, press the display key or Windows + p and select the wanted layout. Done!") ?></p>

  <h3><?php E_("Settings edition in the Xfce Settings Editor") ?></h3>

    <p><?php E_("The Xfce Settings Editor now deserves its name, it is no longer a simpler Xfconf settings viewer. You can now modify, delete, add and reset settings through its interface. It also monitors changes to update its view.") ?></p>

  <h3><?php E_("Improved keyboard layout selection") ?></h3>

    <p><?php E_("The layout selection dialog received a lot of love: it no longer displays cryptic language/variants codes but uses localised languages/variants names. Layout edition was also made easier by prefilling the dialogs with the current values.") ?></p>
