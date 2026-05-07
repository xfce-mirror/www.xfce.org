<?php $head['title'] = 'Xfce 4.8pre1 Changelog'; ?>

<h1>Xfce 4.8pre1 Changelog</h1>

<h2>Extension Library <em>(exo)</em></h2>
<p>The  API version of exo has been changed from 0.3 to 1, to make it easier to  bump minor and major version numbers in future releases. To compile  against this version of exo, you have to change exo-0.3 to exo-1 in your  configure file. This backwards-incompatible change has also been used  to remove deprecated APIs or APIs that are now provided by Gtk 2.14 or  Glib 2.18.</p>
<p>Removed or incompatibly changed classes/enums/functions:</p>
<ul>
  <li>Renamed exo_url_about_dialog_hook() to exo_gtk_url_about_dialog_hook().</li>
  <li>Exo(Mutual)Binding structures are now private.</li>
  <li>Removed exo_icon_view_{set,get}_{text,markup,pixbuf}_column().</li>
  <li>Removed ExoPangoEllipsizeMode and related functions.</li>
  <li>Removed exo_md5_*() functions and ExoMd5Digest.</li>
  <li>Removed exo_intern_string() and exo_intern_static_string().</li>
  <li>Removed ExoEllipsizedLabel has been entirely removed.</li>
  <li>Removed exo_gtk_object_ref_sink() and exo_gtk_radio_action_set_current_value().</li>
  <li>Removed exo_url_show() and exo_url_show_on_screen().</li>
  <li>Removed ExoMountPoint API.</li>
  <li>Removed ExoHal API.</li>
</ul>
<p>New classes/functions:</p>
<ul>
  <li>ExoJob and ExoSimpleJob for handling threaded/asynchronous jobs.</li>
  <li>exo_str_is_empty(), exo_str_looks_like_an_uri().</li>
</ul>
<p>Other changes:</p>
<ul>
  <li>GIO module for handling URIs that are known by the preferred applications framework.</li>
  <li>Only add sync mount option to devices with no volume.</li>
  <li>Use the GIO code for reading mount points in exo-mount.</li>
  <li>Make GIO-Unix an optional dependency.</li>
   <li>Fix the Python bindings (bug #6186,  bug #6187 and bug #6188).</li>
  <li>Add support for editing .directory files in exo-desktop-item-edit.</li>
  <li>Add desktop files for the exo-open types.</li>
  <li>Fix link problem with --no-add-needed (bug #5951).</li>
  <li>Add working directory support to exo-desktop-item-edit (bug #5692).</li>
  <li>Make the treeview work again with gtk 2.20 (bug #6230).</li>
  <li>Fix compilation error (bug #6421).</li>
  <li>Updated translations.</li>
</ul>

<h2>Widget Library <em>(libxfce4ui)</em></h2>
<p>Initial  version of the library. The intention of this new library is a cleanup  of the old libxfcegui4 library to remove the deprecated code and get rid  of netk (since 4.6 we use libwnck for that).</p>
<ul>
  <li>New session management client.</li>
  <li>Improved code for spawing applications.</li>
  <li>New dialog functions.</li>
  <li>Support for glade-3's GtkBuilder implementation.</li>
  <li>New function xfce_spawn_on_screen_with_child_watch().</li>
  <li>Allow icon names in xfce_gtk_button_new_mixed().</li>
  <li>Add key binding to popup Xfdesktop menu (bug #4994).</li>
  <li>Fix bold labels in xfce_gtk_frame_box_new().</li>
  <li>Test if working directory exists before spawning command.</li>
  <li>Add startup notification support for shortcuts.</li>
  <li>Updated translations.</li>
</ul>

<h2>Utility Library <em>(libxfce4util)</em></h2>
<ul>
  <li>Fix broken translations in applications using libxfce4util (bug #5842).</li>
  <li>Performance optimizations.</li>
  <li>Improve xfce_expand_variables to expand ~ in more cases (bug #6742).</li>
  <li>Deprecate XfceDesktopEntry.</li>
  <li>Updated translations.</li>
</ul>

<h2>File Manager <em>(thunar)</em></h2>
<ul>
  <li>Replace ThunarVFS with GIO. All functionality previously based on ThunarVFS is now implemented on top of GIO and GVfs. This means that remote filesystems can be accessed via SFTP, FTP, SMB etc. For this as well as the trash feature GVfs is required. Thunar does not depend on it because GVfs is a set of GIO extensions and there is no guarantee for those to be available at runtime if they are installed at buildtime. This is left for distributions to set up properly.</li>
  <li>Thumbnails are now generated using the thumbnail management D-Bus specification. One implementation of this specification is Tumbler which is released independently.</li>
  <li>Bump the API version of Thunarx to 2 because symbols related to ThunarVFS were removed and replaced by new symbols dealing with GIO. This requires all existing plugins to be updated and linked against thunarx-2 instead of thunarx-1.</li>
  <li>Show "Network" item in the side pane and the "Go" menu if the <tt>network://</tt> URI scheme is supported by GIO (via an extension). Make the "Trash" item optional too.</li>
  <li>Use a single shared progress dialog for file operations instead of individual dialogs for each operation. The visual information in this shared dialog still has to be improved (work on this has been started in an experimental branch).</li>
  <li>Use g_utf8_strlen to calculate the side pane width (bug #3965, bug #5390).</li>
  <li>Add startup ID parameter to the BulkRename and LaunchFiles D-Bus methods in order to support startup notification over D-Bus.</li>
  <li>Avoid requesting drag data if the drag target is GDK_NONE (bug #5771).</li>
  <li>Add startup notification support to the custom actions plugin.</li>
  <li>Use install-exec-hook for installing the thunar symlink (bug #5835).</li>
  <li>Use libxfce4ui instead of libxfcegui4.</li>
  <li>Depend on xfce4-dev-tools >= 4.7.2 to get rid of custom configure code.</li>
  <li>Depend on exo-1 >= 0.5.1.</li>
  <li>Port the code related to thunar-volman to udev. This is an optional part of Thunar. The consequences are that instead of calling thunar-volman with HAL UDIs, we'll now call thunar-volman with sysfs paths. For this to work, a more recent version of thunar-volman is required: 0.5.0.</li>
  <li>Re-implement mount/eject notifications based on libnotify. Notifications were gone after the port to GIO because we no longer used exo-mount to mount or eject devices.</li>
  <li>Fix segfaults when loading image icons.</li>
  <li>Force a folder reload when the new_file closure is finished (bug #6409).</li>
  <li>Update the trash panel plugin to the new panel framework.</li>
  <li>Create status icon for file operations only when we're actually going to display it.</li>
  <li>Change current working directory before spawning applications in ThunarLauncher.</li>
  <li>Fix browsing shortcuts and mountables in ThunarLauncher.</li>
  <li>Synchronize ThunarListModel sorting with detailed list view captions.</li>
  <li>Fix sorting by type in ThunarListModel (bug #6143).</li>
  <li>Refilter the tree model when a hidden dir is entered/left (bug #6142).</li>
  <li>Properly update the cursor when a row is deleted (bug #5361).</li>
  <li>Use stock icons and standard icon names where appropriate (bug #6133).</li>
  <li>Move the trash panel plugin to $(libdir)/xfce4/panel/plugins.</li>
  <li>Move the <tt>LaunchFiles()</tt> D-Bus method to the <tt>org.xfce.FileManager</tt> interface.</li>
  <li>Remove README.volumes and ThumbnailersCacheFormat as those are specific to thunar-vfs.</li>
  <li>Display content type in the file properties dialog tooltip (bug #2369).</li>
  <li>Properly hide partitions that are not mountable by the user.</li>
  <li>Add new D-Bus methods: <tt>Execute()</tt>, <tt>CreateFileFromTemplate()</tt>, <tt>CreateFile()</tt>, <tt>RenameFile()</tt>., <tt>CopyTo</tt>, <tt>CopyInto</tt>, <tt>MoveInto</tt>, <tt>LinkInto</tt> and <tt>UnlinkFiles</tt>.</li>
  <li>Properly remember the default handler for a file / content type (bug #6167).</li>
  <li>Replace - with _ in parameter names of the D-Bus API.</li>
  <li>Do not display shadowed mounts.</li>
  <li>Provide an eject button for removable and present volumes in the side pane (bug #3658).</li>
  <li>Auto-select previously selected subdirectories when walking through the history (bug #5538).</li>
  <li>Delay applying the file selection until folders have finished loading.</li>
  <li>Fix broken compilation with -Wl,-z,defs and -Wl,--as-needed.</li>
  <li>Updated translations.</li>
</ul>

<h2>Utilities <em>(xfce-utils)</em></h2>
<ul>
  <li>Fix gpg/ssh-agent startup for users with pam_ssh installed.</li>
  <li>$dbuslaunch var isn't used anymore (bug #5863).</li>
  <li>Start ssh-agent before dbus so dbus has the env vars set.</li>
  <li>Port to libxfce4ui.</li>
  <li>Add slock functionality (bug #6253).</li>
  <li>Add desktop files for the applications in the Xfce menu.</li>
  <li>Avoid /usr/local/share being added to XDG_DATA_DIRS more than once.</li>
  <li>Hide xfconf-query warnings when properties do not exist.</li>
  <li>Launch xfce4-session with ck-launch-session if installed.</li>
  <li>Use right comment character in Xft.xrdb (bug #6314).</li>
  <li>Also kill ssh-agent in bash like environment (bug #6476).</li>
  <li>Spawn dbus-launch before the dbus users (bug #5576).</li>
  <li>Don't set /usr/share twice in XDG_DATA_DIRS (bug #5151).</li>
  <li>Startxfce4 doesn't handle empty client options (bug #5382).</li>
  <li>Fix some bashism in xinitrc (bug #5557).</li>
  <li>Make xinitrc work with Solaris (bug #5557).</li>
  <li>Remove deprecated encoding key from desktop files.</li>
  <li>Add support for starting gpg-agent.</li>
  <li>Add ability to enable/disable or change the type of screensaver and ssh-agent using xfconf.</li>
  <li>Drop ck-launch-session as CK is handled in xfce4-session (bug #6684).</li>
  <li>Fix Alt conversion in migration script (bug #4811).</li>
  <li>Restore xfrun4's terminal checkbox state on launch.</li>
  <li>Expand command to handle ~ in xfrun4 (bug #4041).</li>
  <li>Use '#' as a shortcut to open man pages using xfrun4 (bug #5984).</li>
  <li>Save the command the user typed in xfrun4, not the expanded one.</li>
  <li>Fallback to exo-open when failure in xfrun4 (bug #4985 and bug #2506).</li>
  <li>Remove run argument feature in xfrun4.</li>
  <li>Fix handling of CLI arguments when opening in terminal with xfrun4 (bug #5478).</li>
  <li>Update CSS based on Mike Massonnet's work (bug #5255).</li>
  <li>Fix incorrect (negative) exit values in xfmountdev4.</li>
  <li>Updated translations.</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>
  <li>Remove deprecated encoding key from desktop file.</li>
  <li>Rename "Execute" button to "Launch".</li>
  <li>Port the libxfce4menu code to garcon.</li>
  <li>Use GTK+ API for the entry icon, if available.</li>
  <li>Port to libxfce4ui and GIO.</li>
  <li>Rework the tooltip string code a little.</li>
  <li>Don't watch category changes in xfconf (bug #6043).</li>
  <li>Launch items with startup notification.</li>
  <li>Implement monitoring by reloading all contents on menu change events.</li>
  <li>Updated translations.</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>Almost a complete rewite of the code. Everything is now  written in GObjects. This makes each individual part easier to  understand. All plugins are ported to GObject-based plugins and use  Xfconf for storing their information (apart from desktop-files of  launcher).</li>
  <li>Interfaces are all created by GtkBuilder.</li>
  <li>Ported to new Libxfce4ui (4.7.1) and Garcon (0.1.1)  libraries. Other dependencies include Gtk+ 2.14, Glib 2.18, Xfconf  4.7.2, Exo 0.5.1, DBus-Glib 0.73 and Libwnck 2.22. </li>
  <li>On first startup a dialog will appear to migrate old panel  config, start with the default setup or one empty panel.</li>
  <li>Panels can be dragged around the screen and snapped to every  panel edge. Each panel also has a setting to control the window length  (%).</li>
  <li>Possibility to lock panels. This will fix the position and hides the handles of the window.</li>
  <li>Alpha backgrounds.</li>
  <li>Item (plugin) editor in the preferences dialog, so you can  easily add, move, delete and edit plugins that are sometimes hard to  reach.</li>
  <li>Using Xfconf for storing the panel settings. Panels also  watches the Xfconf channel for changes, except for adding and removing  panels.</li>
  <li>New code for monitor/screen positioning. This should work a lot better with randr.</li>
  <li>DND of desktop-files on the panel to create new launchers.</li>
  <li>Possibility to add new plugins from the command line, including startup arguments.</li>
  <li>External plugins are automatically restarted if they have not  crashed in the last 60 seconds. If they crash more then once in this  time window, the user is asked what to do (restart or  remove).</li>
  <li>Gtk style properties for popup/popdown delay (bug #5707).</li>
  <li>Hidden option to disable struts for windows on a screen edge,  so the space is used by the window manager for other  windows.</li>
  <li>Plugin API should still be the same, however the ABI changed  so you need to recompile plugins against this version of the  panel.</li>
  <li>New way to run plugins compiled as modules externally.  Whether a plugin runs internal or external is controlled by a boolean in  the desktop-file of the plugin. This does not affect the 'old' external  plugins that are compiled as binaries, it is however recommended to  port plugins to this new framework (only Makefile and macro change)  since it is more flexible.</li>
  <li>Communication between the panel and wrapper (that embeds  plugins to run external) is handled through D-Bus.</li>
  <li>New way to build plugins as GObjects with XfcePanelPlugin as  parent type. This gives all advantages of GObject like type  checking.</li>
  <li>New settings dialog for the actions plugin  that allows one or two actions in the plugin in each order you want.</li>
  <li>New application menu plugin.</li>
  <li>New fuzzy clock mode and improved vertical orientation for the clock plugin.</li>
  <li>New directory menu plugin: menu that provides a directory  tree in a menu. It allows to quickly open a Terminal or File Manager for  some directory.</li>
  <li>Support to create a launcher from the command line with a number of desktop files as argument.</li>
  <li>New dialogs to configure launchers, with an application finder like interface to add new  applications and using the Exo item editor for modifying launchers.</li>
  <li>Button to quickly access the Xfwm4 workspace settings in the pager plugin preferences.</li>
  <li>Support for transparent tray icons (requires at least Gtk 2.16).</li>
  <li>Option to only show icons in the Windows Button plugin. This drops the Icon Box plugin.</li>
  <li>If the windows list becomes too crowded windows will show up  in an overflow menu, similar to what a menu bar does.</li>
  <li>Option to set the sort mode of the tasklist.</li>
  <li>Draw wireframe of the window on mouse hover, similar to the Alt+Tab wireframe in Xfwm4.</li>
  <li>Vertically orientated Windows buttons for vertical panels.</li>
  <li>Support for dragging menu items to create launchers (bug #2896).</li>
  <li>Fix segfault when directory is NULL (bug #6336).</li>
  <li>Restore button label binding in applications menu (bug #6277).</li>
  <li>Give the wrapper a widget name for theming (bug #6268).</li>
  <li>Add existing windows in the tasklist (bug #6273).</li>
  <li>Store the drop highlight position (bug #6270).</li>
  <li>Add option to application menu to show tooltips.</li>
  <li>Use exo desktop file names in default config.</li>
  <li>Set desktop type when migrating 4.6 launchers.</li>
  <li>Fix icon button allocation in tasklist (bug #6269).</li>
  <li>Restart external plugins on compositing changes.</li>
  <li>Give panel windows good theming names (bug #6268).</li>
  <li>Add Mallard page for theming (only reminder for now).</li>
  <li>Fix handling of custom menu items.</li>
  <li>Make the always group functionality work.</li>
  <li>Properly rebuild tasklist if a windows' workspace changed.</li>
  <li>Support remote event replies from the wrapper.</li>
  <li>Restore old workspace scroll behaviour (bug #6271).</li>
  <li>Handle pager orientation.</li>
  <li>Improve debugging in external plugins.</li>
  <li>Fix expand overflow (bug #6312).</li>
  <li>Add drag activate for window buttons in the tasklist.</li>
  <li>Add scroll support to switch between windows in tasklist.</li>
  <li>Handle window autohide blocking in application.</li>
  <li>Change order of plugin signals on startup.</li>
  <li>Add option to fix the length of the panel.</li>
  <li>Set icon geometries for the tasklist buttons.</li>
  <li>Add support to run plugins in valgrind.</li>
  <li>Add a pager mode with normal buttons.</li>
  <li>Fix menu positioning with autohide panels.</li>
  <li>Allow to quit the panel if no session manager is running.</li>
  <li>Fix typos in translated strings (bug #6350).</li>
  <li>Fix rounding issues in panel borders.</li>
  <li>Load the xfce-applications.menu as default.</li>
  <li>Add support for more background options (bug #1731).</li>
  <li>Improved debugging support using the PANEL_DEBUG environ variable.</li>
  <li>Add LIBXFCE4PANEL_VERSION.</li>
  <li>Link tasklist plugin to x11 (bug #6471).</li>
  <li>Add support for X-XFCE-Unique=SCREEN.</li>
  <li>Make sure there are not 2 active windows on ws-changes (bug #6474).</li>
  <li>Make the systray takeover selection.</li>
  <li>Ask to start panel when opening preferences without instance.</li>
  <li>Add logout to plugin menu and drop quit and restart.</li>
  <li>Add separator between help and logout in window menu.</li>
  <li>Improve and cleanup code for external plugins (bug #6358).</li>
  <li>Change colormap handling (bug #6358).</li>
  <li>Add debug mode to run plugins in gdb (export PANEL_DEBUG=gdb, logs in /tmp directory). </li>
  <li>Use activate signal for launcher menu items (bug #6485).</li>
  <li>Fix launching from primary clipboard (bug #6488).</li>
  <li>Add support for menu monitoring.</li>
  <li>Allow translations of the "Xfce Panel" string.</li>
  <li>Fix accelerator key conflict (bug #6765).</li>
  <li>Updated translations.</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
  <li>Query HAL to be sure suspend and hibernate are supported.  If not, don't even show the buttons (bug #4952).</li>
  <li>Allow xfce4-tips to work when 'fortune' is not installed (bug #2871).</li>
  <li>Allow clients to set arbitrary custom SM properties.</li>
  <li>Support _GSM_DesktopFile and use it in the settings dialog to  display an icon and localized app name if available.</li>
  <li>Add org.freedesktop.PowerManagement support for logout actions.</li>
  <li>Add panel plugin that lists shutdown/logout actions.</li>
  <li>Huge refactoring of how SM properties are handled.</li>
  <li>Display richer information if the SM knows the client's .desktop file.</li>
  <li>If it looks like the helper got killed, just return success (bug #4849).</li>
  <li>Fix crash when properties are freed in failure handler (bug #5797).</li>
  <li>Port code to libxfce4ui and drop deprecated Gtk code.</li>
  <li>Fix error when running --help or --version (bug #6169).</li>
  <li>Fix changing the restart style (bug #5768).</li>
  <li>Add some additional checks for bug #5233.</li>
  <li>Allow slashes in the application name (bug #3995.</li>
  <li>Handle OnlyShowIn GNOME or KDE when compat is set.</li>
  <li>Don't save settings dialogs when saving session (bug #5113).</li>
  <li>A lot of compiler warnings got fixed and build improvements.</li>
  <li>Use ConsoleKit for shutdown and restart.</li>
  <li>Use Upower for suspend and hibernate.</li>
  <li>Use gtk_init_with_args in xfce4-session-logout.</li>
  <li>Add a desktop file for xfce4-session-logout.</li>
  <li>Remove deprecated encoding key from desktop files.</li>
  <li>Add support for new gnome-keyring (bug #5912')  ?>, bug #5137 and bug #6073')  ?>).</li>
  <li>Fix typo in xflock4 error message.</li>
  <li>Don't use consolekit when it's not enabled.</li>
  <li>Remove consolekit session creation in xfce4-session.</li>
  <li>Use cairo to draw the fadeout.</li>
  <li>Remove obsolete gtk_tooltip_* calls and other &lt; gtk 2.14 code.</li>
  <li>Fix the check for legacy sm.</li>
  <li>Fix configure build options.</li>
  <li>Print build config after running configure.</li>
  <li>Various code cleanups.</li>
  <li>Translation updates.</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em></h2>
<ul>
  <li>Add clipboard manager to xfce4-settings-helper (bug #4333).</li>
  <li>Port to libxfce4ui.</li>
  <li>Port to exo 0.5.</li>
  <li>Fix possible crash in the clipboard manager (bug #6125).</li>
  <li>Allow the user to edit, reset and create properties using xfce4-settings-editor.</li>
  <li>Allow the user to reset channels in xfce4-settings-editor.</li>
  <li>Edit properties when doubled-clicked in xfce4-settings-editor.</li>
  <li>Revert properties when DEL is pressed in xfce4-settings-editor.</li>
  <li>Plug some leaks in xfce4-settings-editor.</li>
  <li>Do not draw a gradient on xfce4-settings-editor's toolbar.</li>
  <li>Respect HIG in xfce4-settings-editor's dialogs.</li>
  <li>Remember the geometry of xfce4-settings-editor's window.</li>
  <li>Monitor the existing properties in xfce4-settings-editor.</li>
  <li>Rework the randr support in xfce4-settings, this requires randr 1.2 or higher.</li>
  <li>Add a minimal dialog for quick display setup (--minimal, -m).</li>
  <li>Port to libxklavier 5.0 API.</li>
  <li>Require the correct version of xi and inputproto (bug #6033).</li>
  <li>Fix the old shortcut duplicate after editing a command.</li>
  <li>Set value after setting the range and digits.</li>
  <li>Don't save settings dialogs when saving session (bug #5113).</li>
  <li>Release the current editor channel on exit.</li>
  <li>Allow resizing of the edit property dialogs.</li>
  <li>Fix linking issues (bug #6236).</li>
  <li>Fix pluggable dialogs (bug #6138).</li>
  <li>hange the way workspace names are handled.</li>
  <li>Remove deprecated encoding key from desktop files.</li>
  <li>Make the display settings dialog pluggable (bug #6524).</li>
  <li>Speedup startup of the keyboard settings dialog (bug #6661).</li>
  <li>Add startup notification support for keyboard shortcuts.</li>
  <li>Process xmodmap file at startup and on layout change (bug #5094).</li>
  <li>Save and restore numlock state (bug #3098).</li>
  <li>Ignore virtual XTEST mouse (bug #6735).</li>
  <li>keyboard: Fix handling of empty variants (bug #6727).</li>
  <li>Double click a keyboard layout/variant to edit it.</li>
  <li>Show xklavier descriptions instead of language codes.</li>
  <li>Scroll to the active gtk, icon or mouse theme.</li>
  <li>Use selected keyboard layout on session startup (bug #5270).</li>
  <li>Select first available keyboard layout when deleting the active one.</li>
  <li>Add X11/keysym.h include to keyboards.c (bug #6778).</li>
  <li>Fix compilation without Randr 1.3 (bug #6779).</li>
  <li>Updated translations.</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em></h2>
<ul>
  <li>Add prefetching and caching support to XfconfChannel. Should speed things up a bit on app startup, and avoid blocking waiting on DBus in other cases.</li>
  <li>New simpler (internal) handling of property bindings.</li>
  <li>Remove dangling nodes from the tree after a recursive remove.</li>
  <li>Use a seconds timeout to reduce system wakeups.</li>
  <li>Only print debug messages when compiled with debugging.</li>
  <li>Merge xml files in reversed order (bug #6079).</li>
  <li>Disable cache singletons and improve some code now we know the tree is always empty during prefetch. This is only a disadvantage when creating multiple new channels with the same name, but in that case channels singletons should be used.</li>
  <li>Lots of memory leaks plugged. Valgrind log is clean now.</li>
  <li>Fix memory corruption during file loading and use mmap.</li>
  <li>Properly handle dirty channels in the daemon and avoid excessive saving of channels.</li>
  <li>Steal values during cache prefetch to avoid a lot of copying.</li>
  <li>Updated translations.</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>Port xfdesktop to GIO and drop the dependency on thunar-vfs.</li>
  <li>Make heavy use of new Thunar D-Bus methods in order to re-use  Thunar's dialogs and file operation algorithms.</li>
  <li>Port xfdesktop to thunarx-2, new updated extension library of Thunar.</li>
  <li>Properly hide partitions that cannot be mounted by the user (bug #6771).</li>
  <li>Depend on exo-1.</li>
  <li>Drop dependencies on libxfcegui4 and use libxfce4ui.</li>
  <li>Remove the menu panel plugin, this is now included in the panel.</li>
  <li>Remove various .desktop files for the menu, those are now  included in the packages they belong to (exo, utils and  session).</li>
  <li>Remove the .directory files, those are now shipped with Garcon.</li>
  <li>Drop the libxfce4menu dependency and use Garcon.</li>
  <li>Build documentation during make dist.</li>
  <li>Allow DnD to image list in settings dialog (bug #4337).</li>
  <li>Refactor drawing routines in XfdesktopIconView to remove most  flicker and most if not all repaint glitches.</li>
  <li>Use cairo to draw the rounded text label background instead of the hacky PNG composition method.</li>
  <li>Make the text label corner roundness configurable via a gtkrc style property.</li>
  <li>Call to org.xfce.FileManager.DisplayFileProperties() for the  full-featured file properties dialog before falling back to our own  (bug #5622).</li>
  <li>Updated translations.</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>Fix window positioning problem when output it removed (bug #6209).</li>
  <li>Do not clear the show desktop flag upon activation of already visible windows.</li>
  <li>Transition fullscreen windows back to their original layer  when another window is activated (bug #3551')  ?>).</li>
  <li>Add new keyboard shortcut to switch between windows of the same application.</li>
  <li>Add new keyboard shortcut to switch between windows of different applications only.</li>
  <li>Port to libxfce4ui + GtkBuilder and drop libxfcegui4 dependency.</li>
  <li>Display an application switcher window per physical monitor (bug #5229).</li>
  <li>Fix opacity for newly mapped window not focused by default (bug #5706).</li>
  <li>Add new option "cycle_apps_only" to switch between regular  toplevels only (avoiding dialogs - This option coupled with the new  shortcut allows for faster window selection through  keyboard).</li>
  <li>Implement prelinminary support for snap on resize.</li>
  <li>Implement a workaround to avoid loosing key release events.</li>
  <li>Add linkage to libm when compositor is used (bug #6231).</li>
  <li>Check for invalid type for GValue to avoid a crash (bug #6195).</li>
  <li>Don't save the settings dialogs when saving the session.</li>
  <li>Watch workspace changes in wnck and update treeview accordingly.</li>
  <li>Various theme updates.</li>
  <li>Updated translations.</li>
</ul>


