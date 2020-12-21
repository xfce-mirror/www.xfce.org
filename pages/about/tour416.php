<?php $head['title'] = R_('Xfce 4.16 tour'); ?>

<h1><?php echo $head['title'] ?></h1>

  <p><?php E_("This tour will introduce you to new major features of Xfce 4.16. It only covers improvements made on the (user-visible) surface; for the full list of changes, see the <a href=\"/download/changelogs/4.16/\">changelog</a>.") ?></p>

<h2><?php E_("Visual identity: New icons and palette") ?></h2>

<p><?php E_("In order to make Xfce shine a little more out of the box and to strengthen its visual identity we created new icons for all of our core applications and based them on a shared palette to ensure consistency. We also set some further (implicit) design constraints, loosely following Adwaita's principles.") ?>

  <?php print_figure ("about/tour/4.16/palette.png", R_("The Xfce palette")) ?>
  <?php print_figure ("about/tour/4.16/upstream-icons.png", R_("New upstream Xfce icons, coming in many sizes for sharp appearance")) ?>

<h2><?php E_("Settings Manager") ?> <em>(xfce4-settings)</em></h2>

<p><?php E_("The Settings Manager itself received a visual refresh of its filter box, which can now be hidden permanently. At the same time the search capabilities of the filter box were improved by searching the descriptive 'Comments' part of each dialog's launcher (aka <a href='https://specifications.freedesktop.org/desktop-entry-spec/desktop-entry-spec-latest.html'>.desktop</a>) file.") ?>

  <?php print_figure ("about/tour/4.16/settings-manager.png", R_("Visually cleaner, more powerful filter box")) ?>

  <h3><?php E_("Default Applications") ?></h3>

<p><?php E_("This new dialog represents a merger between the previously available 'Mime Settings' and the 'Preferred Applications' dialogs. Consolidating both in one place means users have an easier time setting default applications to handle certain file types.") ?>

  <?php print_figure ("about/tour/4.16/default-applications.png", R_("The new Default Applications dialog")) ?>

  <h3><?php E_("Display Dialog") ?></h3>

<p><?php E_("To better support high-density displays - which come in various sizes and densities - we added fractional scaling based on the RandR extension of X11. Furthermore the preferred mode of a display is now marked with an asterisk and aspect ratios are shown along display resolutions.") ?>

  <?php print_figure ("about/tour/4.16/display-dialog.png", R_("Fractional scaling support")) ?>

  <h3><?php E_("Keyboard Shortcuts") ?></h3>

<p><?php E_("In order to make things easier for our users we added more default keyboard shortcuts out of the box, for instance for window tiling or to open Thunar. The keyboard shortcuts dialog itself was also visually updated.") ?>

  <?php print_figure ("about/tour/4.16/keyboard-shortcuts.png", R_("Visually updated keyboard shortcuts dialog")) ?>

<h2><?php E_("File Manager") ?> <em>(thunar)</em></h2>

<p><?php E_("In Thunar's copy and move dialogs users can now easily pause the respective file operation. Furthermore support for queued file transfer, remembering view settings per folder and support for transparency in Gtk themes was added.") ?>

  <?php print_figure ("about/tour/4.16/thunar.png", R_("Thunar can now pause copy/move")) ?>

<h2><?php E_("Panel") ?> <em>(xfce4-panel)</em></h2>

<p><?php E_("The panel received quite a few noteworthy updates, an animation for autohide and intellihide, a new 'Status Tray' plugin that combines both legacy Systray item support with modern StatusNotifier item support, dark mode support, launchers showing additional actions on right-click, window buttons offering to 'Launch a new instance...' and much more.") ?>

  <?php print_figure ("about/tour/4.16/panel-dark.png", R_("Dark mode enabled in the panel's settings dialog")) ?>
  <?php print_figure ("about/tour/4.16/panel-statustray.png", R_("The new statustray plugin")) ?>

<h2><?php E_("About Dialog") ?> <em>(xfce4-about)</em></h2>

<p><?php E_("Not only was the Xfce tab reworked to be more visually appealing and easily parsable, a separate tab showing basic information about the user's system was also added.") ?>

  <?php print_figure ("about/tour/4.16/about-xfce.png", R_("About Xfce")) ?>
  <?php print_figure ("about/tour/4.16/about-system.png", R_("About System")) ?>
