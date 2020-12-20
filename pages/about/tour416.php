<?php $head['title'] = R_('Xfce 4.16 tour'); ?>

<h1><?php echo $head['title'] ?></h1>

  <p><?php E_("This tour will introduce you to new major features of Xfce 4.16. It only covers improvements made on the surface; for the full list of changes, see the <a href=\"/download/changelogs/\">changelogs</a>.") ?></p>

<h2><?php E_("Visual identity: New icons and palette") ?></h2>

  <p><?php E_("") ?>

<h2><?php E_("Settings Manager") ?> <em>(xfce4-settings)</em></h2>

<p><?php E_("The Settings Manager itself received a visual refresh of its filter box, which can now be hidden permanently. At the same time the search capabilities of the filter box were improved by searching the descriptive 'Comments' part of each dialog's launcher (aka .desktop) file.") ?>

  <?php print_figure ("about/tour/4.16/settings-manager.png", R_("Visually cleaner, more powerful filter box")) ?>

  <h3><?php E_("Default Applications") ?></h3>

<p><?php E_("This new dialog represents a merger between the previously available 'Mime Settings' and the 'Preferred Applications' dialogs. Consolidating both in one place means users have an easier time setting default applications to handle certain file types.") ?>

  <?php print_figure ("about/tour/4.16/default-applications.png", R_("The new Default Applications dialog")) ?>

  <h3><?php E_("Display Dialog") ?></h3>

<p><?php E_("To better support high-density displays - which come in various sizes and densities - we added fractional scaling based on the RandR extension of X11. Furthermore the mechanism for determining a fallback in case of misconfiguration was improved to always fall back to a valid mode.") ?>

  <?php print_figure ("about/tour/4.16/display-dialog.png", R_("Fractional scaling support")) ?>

  <h3><?php E_("Keyboard Shortcuts") ?></h3>

<p><?php E_("In order to make things easier for our users we added more default keyboard shortcuts out of the box, for instance for window tiling or to open Thunar. The keyboard shortcuts dialog itself was also visually updated.") ?>

  <?php print_figure ("about/tour/4.16/keyboard-shortcuts.png", R_("Visually updated keyboard shortcuts dialog")) ?>

<h2><?php E_("About Dialog") ?> <em>(xfce4-about)</em></h2>

<p><?php E_("Not only was the Xfce tab reworked to be more visually appealing and easily parsable, a separate tab showing basic information about the user's system was also added.") ?>

  <?php print_figure ("about/tour/4.16/about-xfce.png", R_("About Xfce")) ?>
  <?php print_figure ("about/tour/4.16/about-system.png", R_("About System")) ?>
