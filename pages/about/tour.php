<?php $head['title'] = R_('Tour') ?>

<h1><?php echo $head['title'] ?></h1>

<p><?php E_("This tour will introduce you to all the new major visual features in Xfce 4.8. This is only the visual part of what has been done; for a full list of changes, see the <a href=\"/download/changelogs/\">changelogs</a>. The tours of <a href=\"/about/tour46\">Xfce 4.6</a> and <a href=\"/about/tour44\">Xfce 4.4</a> are also still available.") ?></p>

<h2><?php E_("Thunar file browser") ?></h2>

  <h3><?php E_("Remote shares browsing") ?></h3>

    <p><?php E_("Thunar now has optional support for GVFS which will allow you to browse remote shares using Thunar: FTP, Windows Shares, WebDav and SSH servers...") ?></p>

    <p class="image"><img src="http://cdn.xfce.org/about/tour/4.8/thunar-remote.png" alt="<?php E_("Thunar browsing a remote share") ?>" /></p>

  <h3><?php E_("New file operations progress dialog") ?></h3>

    <p><?php E_("When several file operations (copy or move) are being handled in parallel, Thunar now shows a single progress dialog which displays all the relevant information.") ?></p>

    <p class="image"><img src="http://cdn.xfce.org/about/tour/4.8/thunar-progress.png" alt="<?php E_("Progress dialog") ?>" /></p>

  <h3><?php E_("Eject button for removable devices") ?></h3>

    <p><?php E_("It is is now possible to eject removable devices by clicking the eject button near each removable device label in the side pane.") ?></p>

    <p class="image"><img src="http://cdn.xfce.org/about/tour/4.8/thunar-eject.png" alt="<?php E_("Eject button") ?>" /></p>

<h2><?php E_("Xfce panel") ?></h2>

  <p><?php E_("The Xfce panel has been totally rewritten in 4.8, here are the most visible changes.") ?></p>

  <h3><?php E_("Improved positioning and size handling") ?></h3>

    <p><?php E_("The panel has much better support for positioning panels on the screen. It can be dragged and snapped to screen borders; floating positions are only remembered when moving a panel and the length of the panel can be adjusted as a percentage of the monitor size.") ?></p>

  <h3><?php E_("Transparent backgrounds") ?></h3>

    <p><?php E_("The panel is now able to draw transparent panel backgrounds with non transparent items. Your panel items will remain readable and you will enjoy a nice panel look.") ?></p>

    <p class="image"><img src="http://cdn.xfce.org/about/tour/4.8/panel-transparent.png" alt="<?php E_("Transparent panel background") ?>" /></p>

  <h3><?php E_("New item editor") ?></h3>

    <p><?php E_("The panel now features an item editor which allows to modify, move, add and remove items quickly. This is particularly useful for items which are hard to right click and gives you an easy way to change your panel layout from a single place.") ?></p>

    <p class="image"><img src="http://cdn.xfce.org/about/tour/4.8/panel-editor.png" alt="<?php E_("Panel item editor") ?>" /></p>

  <h3><?php E_("Drag and drop to create launchers") ?></h3>

    <p><?php E_("You can now drag and drop menu entries from the panel applications menu, application finder or Thunar to the panel to create launchers. This feature should please the huge number of people who had been requesting it for ages. The launcher also has an integrated application finder to add new items.") ?></p>

  <h3><?php E_("Window buttons plugin") ?></h3>

    <p><?php E_("The iconbox and tasklist plugins are new merged into 1 plugin, called window buttons. It implements different sorting modes, improved handling in vertical panels and can draw a similar frame as Xfwm4 Alt+tab when hovering a button.") ?></p>

  <h3><?php E_("New fuzzy clock") ?></h3>

    <p><?php E_("An Xfce release without a new clock mode would not be a true Xfce release. Let us introduce you the 'fuzzy' clock mode!") ?></p>

    <p class="image"><img src="http://cdn.xfce.org/about/tour/4.8/panel-fuzzy-clock.png" alt="<?php E_("New fuzzy clock mode") ?>" /></p>

  <h3><?php E_("New directory menu plugin") ?></h3>

    <p><?php E_("The directory menu plugin provides a menu reproducing the arborescence of a particular folder. This allows you to open a terminal or a file manager in a sub-folder in a very fast and efficient way.") ?></p>

    <p class="image"><img src="http://cdn.xfce.org/about/tour/4.8/panel-directorymenu.png" alt="<?php E_("Directory menu plugin") ?>" /></p>

  <h3><?php E_("Applications menu edition") ?></h3>

    <p><?php E_("You can now edit the applications menu using any Freedesktop compliant menu editor, Alacarte being the one we used to test.") ?></p>

<h2><?php E_("Xfce settings dialogs") ?></h3>

  <h3><?php E_("Improved multihead setup configuration") ?></h3>

    <p><?php E_("Xfce can now handle and setup multihead setups for any randr 1.2 compatible driver. Unfortunately, this means it will not work with Nvidia proprietary drivers.") ?></p>

    <p><?php E_("You can enable and disable plugged screens, set their resolution, refresh rate, rotation and reflection, clone screens or extend desktops.") ?></p>

    <p class="image"><img src="http://cdn.xfce.org/about/tour/4.8/display-settings.png" alt="<?php E_("New display settings dialog") ?>" /></p>

    <h4><?php E_("Timed confirmation") ?></h4>

      <p><?php E_("Any change made with the settings dialog will have to be confirmed within ten seconds or they will be reverted. This prevents broken video drivers from leaving your computer unusable.") ?></p>

      <p class="image"><img src="http://cdn.xfce.org/about/tour/4.8/display-settings-confirmation.png" alt="<?php E_("Timed confirmation for display settings changes") ?>" /></p>

    <h4><?php E_("Quick setup dialog") ?></h4>

      <p><?php E_("The quick setup dialog allows you to configure a dual screen setup in a second. Plug the second screen, press the display key or Windows + p and select the wanted layout. Done!") ?></p>

      <p class="image"><img src="http://cdn.xfce.org/about/tour/4.8/minimal-display-settings.png" alt="<?php E_("Quick multihead setup") ?>" /></p>

  <h3><?php E_("Settings edition in the Xfce Settings Editor") ?></h3>

    <p><?php E_("The Xfce Settings Editor now deserves its name, it is no longer a simpler Xfconf settings viewer. You can now modify, delete, add and reset settings through its interface. It also monitors changes to update its view.") ?></p>

    <p class="image"><img src="http://cdn.xfce.org/about/tour/4.8/settings-editor.png" alt="<?php E_("Editing Xfconf properties with the Settings Editor") ?>" /></p>

  <h3><?php E_("Improved keyboard layout selection") ?></h3>

    <p><?php E_("The layout selection dialog received a lot of love: it no longer displays cryptic language/variants codes but uses localized languages/variants names. Layout edition was also made easier by prefilling the dialogs with the current values.") ?></p>

    <p class="image"><img src="http://cdn.xfce.org/about/tour/4.8/keyboard-settings-list.png" alt="<?php E_("Layouts and variants list") ?>" /></p>

