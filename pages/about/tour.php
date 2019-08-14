<?php $head['title'] = R_('Xfce 4.14 tour'); ?>

<h1><?php echo $head['title'] ?></h1>

  <p><?php E_("This tour will introduce you to new major features of Xfce 4.14. It only covers improvements made on the surface; for the full list of changes, see the <a href=\"/download/changelogs/\">changelogs</a>.") ?></p>

<h2><?php E_("Settings Manager") ?> <em>(xfce4-settings)</em></h2>

  <h3><?php E_("Color Profiles Dialog") ?></h3>

<p><?php E_("A new dialog for setting color profiles for monitors, printers and scanners was introduced. It acts as a frontend to various daemons that talk directly to colord, e.g. saned (scanners), cupsd (printers) or xiccd (monitors).") ?></p>

  <?php print_figure ("about/tour/4.14/color-profiles.png", R_("The new color profiles dialog")) ?>

  <h3><?php E_("Display Dialog") ?></h3>

<p><?php E_("Several improvements were made to the display dialog. Apart from tweaks to the user interface to make the interaction more intuitive (introducing display numbering, showing a primary indicator with quick access to panel, notification and desktop settings etc.) a feature to save a restore complete display profiles was added. If a single profile exists for a setup, the Xfce settings daemon will automatically enable it. If multiple profiles exist, it will pop up the minimal dialog and offer all profiles in addition to the previously available pre-sets (internal only, mirror, extend and external only).") ?></p>

  <?php print_figure ("about/tour/4.14/display-general.png", R_("The primary indicator")) ?>
  <?php print_figure ("about/tour/4.14/display-advanced.png", R_("The display profile list")) ?>
  <?php print_figure ("about/tour/4.14/display-minimal.png", R_("The improved minimal dialog - in this case only showing one profile only which never happens anymore now ;)")) ?>

  <h3><?php E_("Accessibility") ?></h3>

<p><?php E_("One accessibility feature that people coming from other desktop environments or operating systems were still missing is to set a keyboard shortcut to visually locate the mouse pointer. This feature was added in Xfce 4.14.") ?></p>

  <?php print_figure ("about/tour/4.14/locate-mouse.gif", R_("The mouse location animation")) ?>
