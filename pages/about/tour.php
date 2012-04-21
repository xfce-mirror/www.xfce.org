<?php

$head['title'] = R_('Xfce 4.10 tour');

function print_img ($file, $title)
{
  global $static_media;

  echo '<div class="image"><div><img src="'.$static_media.'/about/tour/4.10/'.$file.'.png" alt="'.$file.'"" /></div>'.$title.'</div>';
}

?>

<h1><?php echo $head['title'] ?></h1>

  <p><?php E_("This tour will introduce you to new major features of Xfce 4.10. It only covers the visual part of what has been done; for the full list of changes, see the <a href=\"/download/changelogs/\">changelogs</a>.") ?></p>

<h2><?php E_("Online Documentation") ?></h2>

  <p><?php E_("During the 4.10 development we've decided to remove user manuals from the packages and move them to an online wiki at <a href=\"http://docs.xfce.org\">docs.xfce.org</a>. The reason for this change is to make <a href=\"http://docs.xfce.org/wiki/documentation\">contributing</a> and updating the documentation easier.") ?></p>

  <?php print_img ("online-help", R_("When you click a Help button Xfce will ask you to go to an online wiki page.")) ?>

  <p><?php E_("We hope that with the introduction of the wiki it will be easier for developers and contributors to maintain the documentation.") ?></p>

<h2><?php E_("Application Finder") ?> <em>(xfce4-appfinder)</em></h2>

  <p><?php E_("The application finder has been completely rewritten and combines the functionality of the old appfinder and xfrun4. Apart from user interface improvements, it now allows creating custom actions matching a prefix or a regex pattern.") ?></p>

  <?php print_img ("appfinder-collapsed", R_("Collapsed view of the Application Finder.")) ?>

  <?php print_img ("appfinder-expanded", R_("Expanded view of the Application Finder.")) ?>

<h2><?php E_("Panel") ?> <em>(xfce4-panel)</em></h2>

  <h3><?php E_("Multiple Rows") ?></h3>

    <p><?php E_("In 4.10 there is a single panel-wide option for configuring the number of  rows in the panel. Some plugins (e.g. <em>launchers</em>) fit a single row, while others, like window buttons are allowed to occupy full width of the panel.") ?></p>

    <?php print_img ("panel-rows", R_("A horizontal panel with the number of rows set to three.")) ?>

  <h3><?php E_("Deskbar Mode") ?></h3>

    <p><?php E_("The panel features a new configuration called a <em>deskbar</em> mode. In the deskbar  mode the panel is aligned vertically, just like in the vertical mode, but the plugins are laid out horizontally. With multiple rows, it allows creating wide vertical panels suitable for wide-screen setups.") ?></p>

    <?php print_img ("panel-deskbar", R_("A panel in Deskbar mode with the number of rows set to five.")) ?>

  <h3><?php E_("Actions Plugin") ?></h3>

    <p><?php E_("Session plugin from the xfce4-session package has been merged with a rewritten actions plugin") ?></p>

    <?php print_img ("panel-actions", R_("Action plugin in the menu mode (left), and in the button mode (right).")) ?>

  <h3><?php E_("Window Buttons") ?></h3>

    <p><?php E_("The window buttons plugin no longer expands in order to make the plugin positioning more flexible. To restore the previous behavior please add a transparent <em>separator</em> plugin with the <strong>Expand</strong> option enabled just behind the window buttons plugin.") ?></p>

<h2><?php E_("File Manager") ?> <em>(thunar)</em></h2>

  <p><?php E_("There are few visual changes in this Thunar release. The main window uses less padding and the position of the status bar has been improved.") ?></p>

<h2><?php E_("Session Manager") ?> <em>(xfce4-session)</em></h2>

  <p><?php E_("The session manager&apos;s settings dialog now has a button for clearing  the saved session (no more <tt>rm -r ~/.config/sessions</tt>). Xfce4-tips has been removed and the session manager can now lock the screen before suspending or hibernating the system.") ?></p>

  <h3><?php E_("Applications Autostart") ?></h3>

    <p><?php E_("Another noticeable change is the way GNOME and KDE compatibility works. Compatibility check boxes only enable these services that have to be started before other applications (<em>gnome-keyring</em> and <em>gconf</em> for GNOME and <em>kdeinit</em> for KDE). All other autostart applications are available from <strong>Applications Autostart</strong>, but they are listed using an italic font and not enabled by default in order to distinguish them from Xfce applications. Unlike in previous versions of Xfce, compatibility services can be started indepedently from each other.") ?></p>

    <?php print_img ("session-autostart", R_("Applications, which are not a part of Xfce, are listed using an italic font.")) ?>

<h2><?php E_("Settings") ?> <em>(xfce4-settings)</em></h2>

  <h3><?php E_("Settings Daemon") ?></h3>

    <p><?php E_("Xfce 4.8 used two processes for applying settings: <tt>xfce4-settings-helper</tt> and <tt>xfsettingsd</tt>. In 4.10 those two were merged, so now xfsettingsd handles all system settings.") ?></p>

  <h3><?php E_("Settings Manager") ?></h3>

    <p><?php E_("The Settings dialog has support for categories and searching. Most of the dialogs are also embedded in the window (this was a compile-time option in 4.8).") ?></p>

    <?php print_img ("settings-manager", R_("New settings manager with categories and a filter")) ?>

  <h3><?php E_("Settings Editor") ?></h3>

    <p><?php E_("The Settings Editor has been modified to reload the changed properties per-cell instead of reloading the entire tree, so it does not collapse when you modify a property. It also has in-line editing of the values (for most value types), making it easier to quickly adjust a setting.") ?></p>

    <?php print_img ("settings-editor", R_("Settings editor with a channel monitor dialog opened while in-line editing a property")) ?>

    <p><?php E_("Another new feature in the settings editor is channel monitoring. If you right-click a channel in the main window, you can open a <strong>Monitor</strong> dialog which will show the property activity in a channel.") ?></p>

  <h3><?php E_("MIME Type Editor") ?></h3>

    <p><?php E_("A lot of people ask for an editor to manage their file associations in the last couple of years, so there is it is: a simple MIME Type Editor. The editor does not allow to modify MIME information (add/remove types or modify icons), but allows you to easily assign a default application to a type, show your local modifications and reset to the default.") ?></p>

    <?php print_img ("settings-mime", R_("List of all the MIME types matching the filter")) ?>

  <h3><?php E_("Mouse and Touchpad") ?></h3>

    <p><?php E_("The pointer settings dialog has support for handling the basic Synaptics and Wacom properties. In the background the settings daemon has support for setting all kinds of <em>device properties</em>, which is explained in the <a href=\"http://docs.xfce.org/xfce/xfce4-settings/mouse\">mouse settings</a> wiki.") ?></p>

    <?php print_img ("settings-mouse", R_("Synaptics settings in the Mouse and Touchpad dialog")) ?>

  <h3><?php E_("Appearance Settings") ?></h3>

    <p><?php E_("In 4.10 you can drop theme tarballs in the Style or Icon list. Xfce will try to extract it and install the files in the <tt>~/.themes</tt> or <tt>~/.icons</tt> directory.") ?></h3>

<h2><?php E_("Desktop Manager") ?> <em> (xfdesktop)</em></h2>

  <p><?php E_("The initial plan for 4.10 was to integrate the desktop in Thunar, but since we couldn't agree on the implementation Xfdesktop has gained some new features as well. The most visible improvements are single-click support, automated background cycling and thumbnail rendering.") ?></p>

  <?php print_img ("xfdesktop", R_("Image thumbnails on the desktop and single-click support")) ?>

  <p><?php E_("Xfdesktop also has a new default background and all old backgrounds have been removed from the package.") ?></p>

<h2><?php E_("Window Manager") ?> <em>(xfwm4)</em></h2>

  <p><?php E_("Xfwm4 has optional support for tiling when you drag a window to the screen edge. The tab window (Alt+Tab) has better theming options and arrow key navigation.") ?></p>
