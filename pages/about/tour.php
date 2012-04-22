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

    <?php print_img ("panel-rows", R_("A horizontal panel with a number of rows set to three.")) ?>

  <h3><?php E_("Deskbar Mode") ?></h3>

    <p><?php E_("The panel features a new configuration called a <em>deskbar</em> mode. In the deskbar  mode the panel is aligned vertically, just like in the vertical mode, but the plugins are laid out horizontally. With multiple rows, it allows creating wide vertical panels suitable for wide-screen setups.") ?></p>

    <?php print_img ("panel-deskbar", R_("A panel in Deskbar mode with a number of rows set to five.")) ?>

  <h3><?php E_("Actions Plugin") ?></h3>

    <p><?php E_("Session plugin from the xfce4-session package has been merged with a rewritten <em>actions</em> plugin") ?></p>

    <?php print_img ("panel-actions", R_("Action plugin in a menu mode (left), and in a button mode (right).")) ?>

  <h3><?php E_("Window Buttons") ?></h3>

    <p><?php E_("The <em>window buttons</em> plugin no longer expands, which makes the plugin positioning more flexible. In order to restore the previous behavior please add a transparent <em>separator</em> plugin with the <strong>Expand</strong> option enabled just behind the window buttons plugin.") ?></p>

<h2><?php E_("File Manager") ?> <em>(thunar)</em></h2>

  <p><?php E_("There are few visual changes in this release of Thunar. The window has less padding and the position of the status bar has been adjusted.") ?></p>

<h2><?php E_("Session Manager") ?> <em>(xfce4-session)</em></h2>

  <p><?php E_("The <em>session manager</em>&apos;s settings dialog has a button for clearing the saved session (no more <tt>rm -r ~/.config/sessions</tt>). Xfce4-tips has been removed and the session manager can now lock the screen before suspending or hibernating the system.") ?></p>

  <h3><?php E_("Applications Autostart") ?></h3>

    <p><?php E_("Another noticeable change is the way GNOME and KDE compatibility works. Compatibility check boxes only enable services, which have to be started before other applications (<em>gnome-keyring</em> and <em>gconf</em> for GNOME and <em>kdeinit</em> for KDE). All other autostart applications are available from <strong>Applications Autostart</strong>, but they are listed using an italic font and not enabled by default in order to distinguish them from Xfce applications. Unlike in previous versions of Xfce, compatibility services can be started independently from each other.") ?></p>

    <?php print_img ("session-autostart", R_("Applications, which are not a part of Xfce, are listed using an italic font.")) ?>

<h2><?php E_("Settings") ?> <em>(xfce4-settings)</em></h2>

  <h3><?php E_("Settings Daemon") ?></h3>

    <p><?php E_("Xfce 4.8 used two processes for applying settings: <tt>xfce4-settings-helper</tt> and <tt>xfsettingsd</tt>. In 4.10 they have been merged into xfsettingsd, which now handles all system settings.") ?></p>

  <h3><?php E_("Settings Manager") ?></h3>

    <p><?php E_("The new <em>settings manager</em> groups configuration dialogs in categories and allows you to search for their names or descriptions. Most of the dialogs are also now embedded in the settings manager window (this was a compile-time option in Xfce 4.8).") ?></p>

    <?php print_img ("settings-manager", R_("The settings manager with icons grouped by category and a search filter applied.")) ?>

  <h3><?php E_("Settings Editor") ?></h3>

    <p><?php E_("The <em>settings editor</em> no longer collapses the entire tree when you edit a property (this is because it now reloads a single cell rather than the whole tree). Most properties can now be edited in-place, making it easier to quickly adjust settings.") ?></p>

    <p><?php E_("Using settings editor you can also monitor changes of settings in a selected channel. Right-click on a channel in the main window, and select <strong>Monitor</strong> to display the monitor window.") ?></p>

    <?php print_img ("settings-editor", R_("Settings editor with an open channel monitor, while editing a property in-place.")) ?>

  <h3><?php E_("MIME Type Editor") ?></h3>

    <p><?php E_("In the last couple of years, many people were asking for a tool to manage their file type associations. The new <em>MIME type editor</em> does just that. It allows you to easily assign a default application to a file type, see your changes and reset them to default settings when necessary. Note that it does not allow you to change the system MIME Type definitions (add or remove types and change icons).") ?></p>

    <?php print_img ("settings-mime", R_("MIME types matching a pattern and a menu for selecting a default application.")) ?>

  <h3><?php E_("Mouse and Touchpad") ?></h3>

    <p><?php E_("The <em>mouse and touchpad</em> dialog is capable of handling basic Synaptics and Wacom properties in the GUI. A settings daemon running in the background handles all kinds of device properties, as documented in the <a href=\"http://docs.xfce.org/xfce/xfce4-settings/mouse\">mouse settings</a> wiki.") ?></p>

    <?php print_img ("settings-mouse", R_("Synaptics touchpad settings in the <em>mouse and touchpad</em> dialog")) ?>

  <h3><?php E_("Appearance Settings") ?></h3>

    <p><?php E_("In 4.10 you can drag and drop a tarball with a downloaded theme onto the <em>style</em> or <em>icon</em> list. Xfce will attempt to extract and install the files into the <tt>~/.themes</tt> or <tt>~/.icons</tt> directory.") ?></h3>

<h2><?php E_("Desktop Manager") ?> <em> (xfdesktop)</em></h2>

  <p><?php E_("Although the initial plan for Xfce 4.10 was to integrate desktop handling in Thunar, we have decided not to do it at this time yet. Meanwhile, Xfdesktop has gained support for single-click operation, automated background image cycling and thumbnail rendering.") ?></p>

  <?php print_img ("xfdesktop", R_("Desktop with image thumbnails and support for single-click operation.")) ?>

  <p><?php E_("Xfdesktop is now shipped with a new set of background images.") ?></p>

<h2><?php E_("Window Manager") ?> <em>(xfwm4)</em></h2>

  <p><?php E_("Xfwm4 can now tile a window when you drag it to the edge of the screen. This feature is optional and is automatically disabled when <strong>Wrap workspaces when dragging</strong> is used. In such a case windows can still be tiled using a keyboard shortcut. Another improvement is a better theming support and cursor key navigation in the tab window (Alt+Tab).") ?></p>
