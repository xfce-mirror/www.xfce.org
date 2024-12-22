<?php $head['title'] = R_('Xfce 4.20 tour'); ?>

<h1><?php echo $head['title'] ?></h1>

<p><?php E_("This tour will introduce you to new major features of Xfce 4.20. It only covers improvements made on the (user-visible) surface.") ?></p>
<p><?php E_("Check the full <a href=\"/download/changelogs/4.20/\">Xfce 4.20 changelog</a> for a detailed list of changes.") ?></p>

<h2><?php E_("General") ?></h2>
<div class="t1">
    <h3>Wayland</h3>
      <p><?php E_("<b>Important Notice:</b> Please be aware that the Wayland support in Xfce 4.20 is experimental. It is recommended for advanced users only, as you may encounter bugs and experience incomplete functionality. Proceed with caution!") ?></p>

      <p><?php E_("Thanks to <a href=\"https://gitlab.xfce.org/kelnos\">Brian</a> and <a href=\"https://gitlab.xfce.org/Tamaranch\">Gaël</a> almost all Xfce components are able to run on Wayland windowing, while still keeping support for X11 windowing.") ?></p>
      <p><?php E_("This major effort was achieved by abstracting away any X11/Wayland windowing specific calls and making use of Wayland/Wlroots protocols. A whole new Xfce library, \"libxfce4windowing\" was introduced during that process. XWayland will not be required to run any of the ported Xfce components.") ?></p>
      <p><?php E_("So far Xfce does not feature a compositor which supports Wayland. If you want to run Xfce in Wayland, Labwc and Wayfire will give you the best results. A detailed instruction on this can be found <a href=\"https://wiki.xfce.org/releng/wayland_roadmap#testing\">here</a>. Please be aware that Wayland support is still experimental!") ?></p>
      <p><?php E_("Plans are underway to add Wayland support to Xfwm4 while preserving its existing X11 functionality. However, such a restructurization will be a major effort and we cannot tell yet when/if it will be done, so please don't hold your breath waiting for it.") ?></p>

      <p><?php E_("For few components and multiple features, it was not possible to port them to Wayland, partly because there are no standardized Wayland protocols available yet to provide the required services:") ?></p>
      <ul>
        <li><?php E_("Workspace support is missing (ext-workspace protocol <a href=\"https://gitlab.freedesktop.org/wayland/wayland-protocols/-/merge_requests/40\">was just merged</a>).") ?></li>
        <li><?php E_("Systray icons will be missing for multiple applications (required to use StatusNotifier instead of GtkStatusIcon)") ?></li>
        <li><?php E_("Xfce4-settings: Keyboard and mouse settings so far are internal to the Wayland compositor and as such the according Xfce dialogs won't be available on Wayland yet.") ?></li>
        <li><?php E_("Power related keyboard handling (brightness keys, suspend, etc.) is internal to the Wayland compositor and as such cannot be supported yet by Xfce components.") ?></li>
        <li><?php E_("Wayland does not specify a native protocol for taking screenshots. However, xfce4-screenshooter already supports screenshots via the wlroots 'screencopy' protocol (entire screen). Screenshots of a rectangle selection or the active window are not yet supported via Wayland.") ?></li>
      </ul>
      <p><?php E_("Some other Xfce components don't run at all on Wayland:") ?></p>
      <ul>
        <li><?php E_("Xfwm4") ?></li>
        <li><?php E_("Xfdashboard") ?></li>
        <li><?php E_("Xfce4-screensaver (porting to Wayland <a href=\"https://gitlab.xfce.org/apps/xfce4-screensaver/-/merge_requests/28\">completed but not merged</a>, as it requires the experimental <a href=\"https://gitlab.xfce.org/kelnos/libwlembed\">libwlembed library</a>)") ?></li>
        <li><?php E_("Xfce4-windowck-plugin (needs to be <a href=\"https://gitlab.xfce.org/panel-plugins/xfce4-windowck-plugin/-/issues/37\">ported to libxfce4windowing</a>)") ?></li>
        <li><?php E_("Xfce4-xkb-plugin (keyboard handling is internal to the Wayland compositor)") ?></li>
      </ul>

      <p><?php E_("More detailed info on the current Wayland status can be found on our <a href=\"https://wiki.xfce.org/releng/wayland_roadmap\">Wayland roadmap.</a>") ?></p>

    <h3><?php E_("Scaling") ?></h3>
      <p><?php E_("Icons and thumbnail scaling was fixed for various components. Various missing icons for larger scales were added. Any blurriness when using Xfce components on a HiDPI display should be gone now.") ?></p>
</div>

<h2><a href="https://docs.xfce.org/xfce/exo/start" target="_blank">exo</a></h2>
<div class="t1">
    <h3><?php E_("Icon View Performance") ?></h3>
      <p><?php E_("By using different container types, the \"Exo-Icon-View\" now can handle 100,000 files and more without freezing.") ?></p>

    <h3><?php E_("Type ahead search box") ?></h3>
      <p><?php E_("The type ahead search box in the exo icon view now always stays inside the according view widget.") ?></p>
</div>

<h2><a href="https://docs.xfce.org/xfce/libxfce4ui/start" target="_blank">libxfce4ui</a></h2>
<div class="t1">
    <h3><?php E_("Shortcut Editor") ?></h3>
      <p><?php E_("Shortcuts now can be used for multiple actions if they don't conflict with each other.") ?></p>

    <h3><?php E_("About Dialog") ?></h3>
      <p><?php E_("The dialog now shows the distribution logo, information about the used windowing system and the used GPU.") ?></p>
      <?php print_figure ("about/tour/4.20/libxfce4ui_about.png", R_("libxfce4ui - about dialog")) ?>
</div>

<h2><a href="https://docs.xfce.org/xfce/libxfce4windowing/start" target="_blank">libxfce4windowing</a></h2>
<div class="t1">
    <p><?php E_("This library is new to Xfce. Libxfce4windowing is an abstraction library that attempts to present windowing concepts (screens, top level windows, workspaces, etc.) in a windowing-system-independent manner.") ?><p>

    <p><?php E_("Currently, X11 is fully supported via libwnck. Wayland is partially supported by using various Wayland protocol extensions. However, the full range of operations available on X11 is not available on Wayland, due to missing features in these protocols extensions.") ?></p>
</div>

<h2><a href="https://docs.xfce.org/xfce/thunar/start" target="_blank">thunar</a></h2>
<div class="t1">

    <h3><?php E_("Mounted and Remote Locations") ?></h3>
      <p><?php E_("Mount points now show an emblem and have a specific type description.") ?></p>
      <p><?php E_("Ipv6 remote URLs are now supported.") ?></p>
      <p><?php E_("It is now possible to create symbolic links as well on remote locations.") ?></p>

    <h3><?php E_("Search") ?></h3>
      <p><?php E_("It is not required any more to wait until a search is finished to open the context menu on search results.") ?></p>

    <h3><?php E_("Toolbar") ?></h3>
      <p><?php E_("A couple of new toolbar buttons were added:") ?><p>
        <ul>
            <li><?php E_("View Switcher - A drop-down button to select a view.") ?></li>
            <li><?php E_("Menu - This hamburger button will show automatically in the toolbar, when the menubar is hidden. It will reveal a vertical menu, bar, when pressed.") ?></li>
            <li><?php E_("New Tab - Open a new tab using the current directory.") ?></li>
            <li><?php E_("New Window - Open a new window using the current directory.") ?></li>
        </ul>
      <?php print_figure ("about/tour/4.20/thunar_toolbar_new_items.png", R_("thunar - new toolbar buttons")) ?>
      <?php print_figure ("about/tour/4.20/thunar_toolbar_hamburger.png", R_("thunar - improved hamburger toolbar button")) ?>

      <p><?php E_("On shrinking the Thunar window, toolbar items will now be moved to an overflow menu. Like that, it is possible to maintain smaller thunar windows.") ?></p>
      <p><?php E_("Furthermore, a bug was fixed which prevented the usage of submenu custom actions in the toolbar.") ?></p>

    <h3><?php E_("Window Decorations") ?></h3>
      <p><?php E_("There is now an option to use client side decorations in Thunar (CSD).") ?></p>
      <?php print_figure ("about/tour/4.20/thunar_csd_with_menu.png", R_("thunar - CSD with menu")) ?>
      <?php print_figure ("about/tour/4.20/thunar_csd_without_menu.png", R_("thunar - CSD without menu")) ?>

    <h3><?php E_("Statusbar") ?></h3>
      <p><?php E_("An option to show the number of hidden files in the statusbar was added.") ?></p>

    <h3><?php E_("Recently Used Files") ?></h3>
      <p><?php E_("Only files which were successfully opened are now added to the list of recently used files.") ?></p>
      <p><?php E_("Directories won't be added to the recently used files anymore.") ?></p>

    <h3><?php E_("Symbolic Icons") ?></h3>
      <p><?php E_("There is now an option to use symbolic icons in the side pane and colored icons in the toolbar.") ?></p>
      <?php print_figure ("about/tour/4.20/thunar_symbolic_icons.png", R_("thunar - symbolic icons")) ?>
      <?php print_figure ("about/tour/4.20/thunar_colored_icons.png", R_("thunar - colored icons")) ?>

    <h3><?php E_("Drag and Drop") ?></h3>
      <p><?php E_("While dragging files, folders are now opened automatically on hover.") ?></p>
      <p><?php E_("While dragging files, the focus of the split view pane is now updated when hovered.") ?></p>

    <h3><?php E_("Performance") ?></h3>
      <p><?php E_("In the past, you might have faced situation involving bigger numbers of files in which thunar showed a freeze. Due to various different performance measures, thunar now is much more bullet-proof for action involving huge numbers of files.") ?></p>
      <p><?php E_("This was achieved by using appropriate container types, moving some actions into separate jobs and throttling of view-updates.") ?></p>
      <p><?php E_("A <a href=\"https://wiki.xfce.org/thunar/dev/integration_testcases\">number of integration test cases</a> will be used in order to keep performance on the current level in the future.") ?></p>

    <h3><?php E_("Custom Actions") ?></h3>
      <p><?php E_("Shortcuts for custom action will now as well work when the custom action is located in a sub-menu.") ?></p>

    <h3><?php E_("File Transfer") ?></h3>
      <p><?php E_("For file validation in thunar 4.18.x a md5 checksum was calculated for source and target file. This calculation turned out to be rather slow and actually superfluous.
      Now files are just compared directly. In addition, the usage of direct I/O operations now attempts to prevent comparison of possibly cached buffers.") ?></p>
      <p><?php E_("An option was added to only copy files in parallel if the relevant devices are in idle state. This prevents possible fragmentation during copy for HDD drives.") ?></p>
      <p><?php E_("Transferring files no longer steals the current focus.") ?></p>
      <p><?php E_("The file transfer question dialog now provides the same options while having less buttons. In addition, file thumbnails now are properly requested by the dialog.") ?></p>
      <?php print_figure ("about/tour/4.20/thunar_transfer_dialog.png", R_("thunar - file transfer dialog")) ?>

    <h3><?php E_("Launchers") ?></h3>
      <p><?php E_("By default, launcher names instead of filenames are shown now for trusted launchers.") ?></p>

    <h3><?php E_("Undo/Redo") ?></h3>
      <p><?php E_("The user now will be asked before any deletion will be done by an undo operation.") ?></p>

    <h3><?php E_("List View") ?></h3>
      <p><?php E_("Similar to the tree-view side pane, the main view now also supports folder expansion.") ?></p>
      <?php print_figure ("about/tour/4.20/thunar_expandable_folders.png", R_("thunar - expandable folders")) ?>

    <h3><?php E_("Split View") ?></h3>
      <p><?php E_("A shortcut now can be used to toggle between split-view panes, and the focused pane now uses different coloring.") ?></p>
      <?php print_figure ("about/tour/4.20/thunar_split_view.png", R_("thunar - split view")) ?>
      <p><?php E_("A dialog will now ask for confirmation when closing a split-pane with multiple tabs.") ?></p>
</div>

<h2><a href="https://docs.xfce.org/xfce/xfce4-appfinder/start" target="_blank">xfce4-appfinder</a></h2>
<div class="t1">

    <p><?php E_("The application list now as well can be navigated via Ctrl+N / Ctrl+P keys (VI default).") ?></p>
    <p><?php E_("An option was added to close the Appfinder window automatically when focus is lost.") ?></p>
    <p><?php E_("Ctrl+Enter can be used to execute commands immediately when selecting entries from the dropdown.") ?></p>
    <p><?php E_("Within the new version, application specific actions will show on right click.") ?></p>
    <p><?php E_("An option to show generic names of launchers was added.") ?></p>
    <p><?php E_("Appfinder optionally can now be launched as a daemon, so that it will respond even quicker.") ?></p>
    <p><?php E_("An option allows now to launch items on a single click.") ?></p>
    <?php print_figure ("about/tour/4.20/appfinder_new.png", R_("xfce4-appfinder - settings")) ?>

</div>

<h2><a href="https://docs.xfce.org/xfce/xfce4-panel/start" target="_blank">xfce4-panel</a></h2>
<div class="t1">

    <h3><?php E_("General") ?></h3>
      <p><?php E_("The border width of the panel is now configurable.") ?></p>
      <p><?php E_("For manual installations: the panel now does its best to find plugins in XDG base directories, and better preserves its configuration when it can't find them.") ?></p>

    <h3><?php E_("Clock") ?></h3>
      <p><?php E_("LCD clock: An option was added to visualize inactive segments.") ?></p>
      <p><?php E_("Analog: There is now an optional 24h mode.") ?></p>
      <p><?php E_("Digital: Week numbers now are shown optionally.") ?></p>

    <h3><?php E_("Show Desktop") ?></h3>
      <p><?php E_("There is now the possibility to show the desktop when hovering the mouse on the \"show desktop\" panel icon.") ?></p>

    <h3><?php E_("Tasklist") ?></h3>
      <p><?php E_("Icon size management has been improved overall, notably by switching to libxfce4windowing.") ?></p>

    <h3><?php E_("Preferences") ?></h3>
      <p><?php E_("The 'delete' key can now be used to remove panel objects, and several objects can be removed at once.") ?></p>
      <p><?php E_("Panel objects in the panel configuration list now will have the same icons as in the panel itself.") ?></p>
      <?php print_figure ("about/tour/4.20/panel_item_list.png", R_("xfce4-panel - panel configuration list")) ?>
</div>

<h2><a href="https://docs.xfce.org/xfce/xfce4-power-manager/start" target="_blank">xfce4-power-manager</a></h2>
<div class="t1">

    <h3><?php E_("Screen Locking") ?></h3>
      <p><?php E_("There is no dedicated \"security\" tab anymore. Lock screen management was massively simplified and \"Light Locker\" was dropped. \"lock-on-sleep\" is now synchronized with xfce4-session and xfce4-screensaver.") ?></p>
      <p><?php E_("Screen locking settings are now only handled by xfce4-screensaver to avoid conflicts. A button to open xfce4-screensaver-preferences was added:") ?></p>
      <?php print_figure ("about/tour/4.20/power_manager_settings.png", R_("xfce4-power-manager - settings")) ?>
      <?php print_figure ("about/tour/4.20/power_manager_screensaver.png", R_("xfce4-screensaver - settings")) ?>

    <h3><?php E_("Power Settings") ?></h3>
      <p><?php E_("Support for handling different power profiles via power-profiles-daemon was added.") ?></p>
      <p><?php E_("The overall charge state calculation was wrong for some cases and is now fixed.") ?></p>
      <p><?php E_("When the critical power dialog pops up, unintentional user actions are now prevented.") ?></p>
      <p><?php E_("There is now support for the hybrid sleep mode.") ?></p>
      <p><?php E_("The device details tab now as well shows the energy rate.") ?></p>

    <h3><?php E_("Others") ?></h3>
      <p><?php E_("Several use-cases for lid close were fixed.") ?></p>
      <p><?php E_("There are now the options \"shutdown\" and \"do nothing\" on lid close.") ?></p>
      <p><?php E_("Buttons to change the brightness exponentially and keyboard backlight toggle keys now are supported.") ?></p>
</div>

<h2><a href="https://docs.xfce.org/xfce/xfce4-session/start" target="_blank">xfce4-session</a></h2>
<div class="t1">
    <p><?php E_("The logout dialog will not provide a checkbox to enable session saving anymore.") ?></p>
    <p><?php E_("It is now possible to start a Wayland session via 'startxfce4 --wayland'.") ?></p>

    <p><?php E_("Minimal support for xdg-desktop-portal was added by registering for a wallpaper, screenshot and background xapp.") ?></p>
</div>

<h2><a href="https://docs.xfce.org/xfce/xfce4-settings/start" target="_blank">xfce4-settings</a></h2>
<div class="t1">

    <h3><?php E_("Appearance Settings") ?></h3>
      <p><?php E_("Icon themes are now loaded in a separate thread, in order to prevent a possible freeze.") ?></p>
      <p><?php E_("For icon themes which are known to be incomplete, a warning now will be shown.") ?></p>
      <p><?php E_("The usage of client side decorations is opt-in now, not opt-out.") ?></p>
      <p><?php E_("Dark themes now are identified and supported in a more reliable way. (Relevant e.g. for the Qogir and Orchis themes)") ?></p>´

    <h3><?php E_("Display Settings") ?></h3>
      <p><?php E_("The default display profile has been added to the list of profiles that can match, and will be used if more than one matches now.") ?></p>
      <p><?php E_("Profile management has been extended to all profiles, not just those that match, and their names can now be edited.") ?></p>
      <p><?php E_("Scaling now always is done for both dimensions, and the preview shows the resulting size.") ?></p>
      <p><?php E_("Mirror state management has been improved overall, in particular by removing the need to match refresh rates.") ?></p>
      <p><?php E_("The minimal dialog has been improved, in particular by allowing the display to be extended to the left and from top to bottom, and with compact profile display.") ?></p>
      <?php print_figure ("about/tour/4.20/settings_display.png", R_("xfce4-settings - minimal display")) ?>

    <h3><?php E_("Mouse Settings") ?></h3>
      <p><?php E_("A checkbox was added to toggle between adaptive and flat mouse accel profile.") ?></p>
      <p><?php E_("High resolution scrolling can now be enabled for mice which do support it.") ?></p>
      <?php print_figure ("about/tour/4.20/settings_mouse.png", R_("xfce4-settings - mouse")) ?>

    <h3><?php E_("Mime Settings") ?></h3>
      <p><?php E_("It is now possible to select/change multiple items at once.") ?></p>
</div>

<h2><a href="https://docs.xfce.org/xfce/xfconf/start" target="_blank">xfconf</a></h2>
<div class="t1">
    <p><?php E_("A systemd user unit, corresponding to the D-Bus session service, is now added.") ?></p>
    <p><?php E_("Whitespaces are now properly escaped when writing a xfconf channel to disk.") ?></p>
    <p><?php E_("Xfconf-query now displays array contents.") ?></p>
</div>

<h2><a href="https://docs.xfce.org/xfce/xfdesktop/start" target="_blank">xfdesktop</a></h2>
<div class="t1">

  <h3><?php E_("Background Management") ?></h3>
    <p><?php E_("For random wallpaper cycling, wallpapers now are only repeated after all other wallpapers were shown.") ?></p>
    <p><?php E_("Old Xfce backgrounds were ported from .png to .svg to be usable for large screens.") ?></p>
    <p><?php E_("Gradients will now be rendered in a gamma-correct way.") ?></p>

  <h3><?php E_("Icon grid") ?></h3>
    <p><?php E_("The confirmation dialog for arranging desktop icons now is optional.") ?></p>
    <p><?php E_("It is now possible to set custom colors for icon labels and icon background.") ?></p>
    <p><?php E_("The icon grid on each monitor is now independent of one another.") ?></p>

  <h3><?php E_("Minimized Application Icons") ?></h3>
    <p><?php E_("Window icons are now initially shown on the monitor where the window was present before being minimized.") ?></p>
    <p><?php E_("The context menu (when clicking on an empty space) now has more useful options than before.") ?></p>

  <h3><?php E_("File Icons") ?></h3>
    <p><?php E_("There is now an option to sort folders before files.") ?></p>
    <p><?php E_("The positions of the icons are now saved in a way that should avoid icons moving around in unexpected ways when monitors are added and removed.") ?></p>
    <p><?php E_("New files and dropped files now will be placed near the current cursor location.") ?></p>
    <p><?php E_("Icons of fixed disks and drives can now be optionally shown.") ?></p>
  
  <h3><?php E_("Preferences") ?></h3>
    <p><?php E_("The 'Desktop Icons' tab was fully reworked.") ?></p>
    <?php print_figure ("about/tour/4.20/xfdesktop_settings_icons.png", R_("xfdesktop - settings - desktop icons")) ?>
    <p><?php E_("All shortcuts of Xfdesktop now can be configured, using the XfceShortcutsManagers widget.") ?></p>
    <?php print_figure ("about/tour/4.20/xfdesktop_settings_shortcuts.png", R_("xfdesktop - settings - keyboard shortcuts")) ?>
    <p><?php E_("More folders that hold background images were added as shortcuts in the settings dialog.") ?></p>
    <p><?php E_("The settings dialog will update if the background is changed from outside the dialog.") ?></p>
    <p><?php E_("Wallpaper image folders now are loaded fully asynchronously to prevent lag.") ?></p>

  <h3><?php E_("Context Menu") ?></h3>
    <p><?php E_("Cascading custom actions will now as well shown correctly in Xfdesktop.") ?></p>
    <p><?php E_("It is now possible to open multiple selected folders at once.") ?></p>
    <p><?php E_("The context menu now opens on button press rather than button release, as most users will expect.") ?></p>
    <p><?php E_("The middle-click window list menu has new styling and added features.") ?></p>
</div>

<h2><a href="https://docs.xfce.org/xfce/xfwm4/start" target="_blank">xfwm4</a></h2>
<div class="t1">
    <p><?php E_("Support for stretch theme variants") ?></p>
    <p><?php E_("Compositor: Block softpipe for GLX vsync") ?></p>
    <p><?php E_("Focus: Include skip taskbar/pager when passing focus") ?></p>
    <p><?php E_("Fix crash when alt-tabbing (<a href=\"https://gitlab.xfce.org/xfce/xfwm4/-/issues/762\">#762</a>)") ?></p>
</div>

<p align="right"><small><?php E_("Used theme: \"Greybird-dark\". Used icon-theme: \"elementary Xfce dark\".") ?></small></p>
