

<h1>Xfce 4.10pre1 Changelog</h1>

<p>Translation updates are not shown in the lists below.</p>

<h2>Dependency Changes:</h2>
<ul>
  <li>GTK+ dependency &gt;= 2.24 and GLib &gt;= 2.24.</li>
  <li>Libxfce4util soname changed.</li>
  <li>Garcon has a new libxfce4util dependency.</li>
  <li>Exo has a new libxfce4ui dependency.</li>
  <li>Libxfce4util only depends on glib (was gobject).</li>
  <li>Xfce-utils is not needed anymore. Functionality has been moved in xfce4-session, libxfce4ui, xfce4-appfinder or is removed.</li>
  <li>Xfce4-session does not (optionally) depend on xfce4-panel anymore. The plugin has been integrated with the actions xfce4-panel plugin.</li>
  <li>Xfce4-session does not check for consolekit, hal, upower and polkit. It has soft dependencies on consolekit and upower (communication over DBus).</li>
  <li>Xfce4-session does not (optionally) depend on gconf anymore.</li>
</ul>

<h2>Development Tools <em>(xfce4-dev-tools)</em>:</h2>
<ul></li>
  <li>Add support for LT_PREREQ (bug #6920).</li>
  <li>Remove spec file and rpm build target.</li>
  <li>Do not create a gzip tarball.</li>
  <li>Never use xdt-autogen in autogen.sh.</li>
  <li>Fix FSF address and add missing licenses.</li>
  <li>Only use -fstack-protector on Linux systems.</li>
  <li>Don't use -g3 for full debugging.</li>
  <li>Support xldscope for Sun Studio.</li>
  <li>Skip -Wredundant-decls on OpenBSD.</li>
  <li>Disable --as-needed on OpenBSD (bug #7546).</li>
  <li>Use pkg-config macro for detection (bug #7787).</li>
  <li>Port exo-csource to xdt-csource (bug #6449).
</ul>

<h2>Utility Library <em>(libxfce4util)</em>:</h2>
<ul></li>
  <li>Make licenses static. You can only use xfce_get_license_text(...).</li>
  <li>Remove unused .h files.</li>
  <li>Remove xfce_strip_context(), use g_strip_context().</li>
  <li>Remove XfceDesktopEntry.</li>
  <li>Don't generate enum types.</li>
  <li>Only link against glib.</li>
  <li>Set version string to 4.10.</li>
  <li>Remove spec file and rpm build.</li>
  <li>Missing fallback for AC_RUN_IF_ELSE() when cross-compiling (bug #8166).</li>
  <li>Fix XfceRc group parsing with brackets in name (bug #8150).</li>
  <li>Reduce XfceRc structure size from from 216 to 176 bytes.</li>
  <li>Use some macros and drop unneeded strlen's in XfceRc.</li>
  <li>Use GSList in xfce-resource.</li>
  <li>Bump verinfo to 6:0:0.</li>
</ul>

<h2>Widget Library <em>(libxfce4ui)</em>:</h2>
<ul></li>
  <li>Open docs.xfce.org when Help in xfce4-about is clicked.</li>
  <li>Cache header icons and avoid large icons in XfceTitledDialog.</li>
  <li>Restore glade directory information in .pc file.</li>
  <li>Update translator credits.</li>
  <li>A lot of improvements in the shortcuts code.</li>
  <li>Add Alt + F1 as a shortcut for applications menu.</li>
  <li>Remove unused code from the internal header widget.</li>
  <li>Add xfce4-about from xfce-utils package.</li>
  <li>Use xdt-csource instead of exo-csource, depend on xdt 4.9.0.</li>
  <li>Update to new xfce4-appfinder commands.</li>
  <li>Fix build against 3.9 Glade (bug #7334).</li>
  <li>Add shortcuts for XF86WWW and XF86Mail.</li>
  <li>Simplify the xfce_gdk_screen_get_active fucntion.</li>
  <li>Add xfce_dialog_show_help function.</li>
</ul>

<h2>Extension Library <em>(exo)</em>:</h2>
<ul></li>
  <li>Drop gtk 2.24 api (bug #8461).</li>
  <li>Bump libxfce4ui dependency for help function.</li>
  <li>Send exo-open startup-id to child instead of using it (bug #7093).</li>
  <li>Add preferred app helper for Chromium (bug #8398).</li>
  <li>Remove package manuals and link to online documentation.</li>
  <li>Queue an icon view resize if the requesitions don't match.</li>
  <li>Add new API exo_icon_view_get_item_{column,row}.</li>
  <li>Add keynav-failed to ExoIconView.</li>
  <li>Show Preferred Application in settings category.</li>
  <li>Don't destroy already destroyed widget.</li>
  <li>Translation updates: Chinese, Portuguese, Lithuanian, Norwegian, German, Bulgarian.</li>
  <li>Do not insert symlink icons in the icon chooser.</li>
  <li>Use libxfce4ui instead of support library.</li>
  <li>Drop the python bindings.</li>
  <li>Use new libtool macros and versions (bug #6920).</li>
  <li>Remove spec file and rpm build.</li>
  <li>Silenty save to local application is permission denied to origional file in exo-desktop-item-edit.</li>
  <li>Support hexadecimal xid and center exo-desktop-item-edit on parent.</li>
</ul>

<h2>File Manager <em>(thunar)</em>:</h2>
<ul></li>
  <li>Fix crash when trying to thumbnail a file with unknown content type.</li>
  <li>Fix properties dialog crash with files with unknown content type.</li>
  <li>Fix crash when hovering a CD drive with a special icon (bug #7309).</li>
  <li>Use portable abicheck.sh from xfconf.</li>
  <li>Avoid segfaults due to interpreting display names as format strings.</li>
  <li>Improve the UI according to bugs #7496 and #7497.</li>
  <li>Treat backup files as hidden as with thunar-vfs (bug #7615).</li>
  <li>Fix crash when opening a mountable drive with no media (bug #7308) in a way that does not break SMB shares (#bug 7774).</li>
  <li>Fix segfaults in case icons are missing or not found (bug #7880).</li>
  <li>Allow exec bit of MS-DOS executables and MSI to be changed (bug #3545).</li>
  <li>Prevent falling back to an unexpected locale (bug #4746).</li>
  <li>Show translated names of desktop files (bug #7393).</li>
  <li>Fix sorting of filenames with large numbers (bug #5356). Patch by Eric Koegel.</li>
  <li>Respect ThunarIconFactory::show-thumbnails. Fixes a regression.</li>
  <li>Fix crash when removing an ancestor of the current folder (bug #8168).</li>
  <li>Fix handling %U when launching multiple files with an app (bug #7456).</li>
  <li>Improve sorting of file names that include numbers (bug #5359, bug #8022, #4269, #5286).</li>
  <li>Add a "Skip All" button to the file overwrite dialog (bug #4263).</li>
  <li>Compress icons and images.</li>
  <li>Remove the manual.</li>
  <li>Use 32 instead of 36 pixels for small icons.</li>
  <li>Show Thunar settings in category.</li>
  <li>Don't update UI more then fourth per second in deep count job.</li>
  <li>Fix sorting of applications in chooser dialog.</li>
  <li>Depend on Gtk 2.20 and Glib 2.24 and drop some workarounds.</li>
  <li>Fix removing custom application launchers again.</li>
  <li>Prevent looping in some renamers.</li>
  <li>Fix segfault when plugin returns a NULL suffix.</li>
  <li>Remove spec file, rpm build and update libtool.</li>
  <li>Lowercase the thunar executable and install a Thunar symlink.</li>
  <li>Make the clipboard persistence (bug #7060).</li>
  <li>Use glib functions for get/set cwd (bug #7522).</li>
  <li>Don't interpret file display names as format strings</li>
  <li>Paste files in correct order (bug #6504).</li>
  <li>Fix truncated strings when loading and storing emblems (bug #7171).</li>
  <li>Only erase top-level items from trash (bug #7147).</li>
  <li>Don't interpret file display names as format strings (bug #7128).</li>
  <li>Ship stock_folder-copy.png and stock_folder-move.png icons with Thunar itself (bug #6851).</li>
  <li>Fix segfault when calling strcasecmp with NULL parameters (bug #7206).</li>
  <li>Only change the Name field when renaming desktop files (bug #7155).</li>
  <li>Force desktop file reload after changing the Name field.</li>
  <li>Fix memory leak caused by not destroying the rename job.</li>
  <li>Allow installation of helper scripts in a custom location using the --with-helper-path-prefix=PATH configure option.</li>
  <li>Improve thumbnailing by avoid sending thumbnail requests while theuser is scrolling in a directory.</li>
  <li>Cancel thumbnail requests when leaving a directory.</li>
  <li>Avoid regenerating thumbnails when files are copied, moved, linked or trashed.</li>
  <li>Update the thumbnail cache when files are deleted permanently.</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em>:</h2>
<ul></li>
  <li>Add Help button to preferences dialog.</li>
  <li>Make sure the header icon does not shrink (bug #8489).</li>
  <li>Set single line label for icon sizes is small (bug #8490).</li>
  <li>Add option to disable the background service.</li>
  <li>Block maximize and fullscreen in collapsed mode (bug #8491).</li>
  <li>Chain-up unmap.</li>
  <li>Start in collapsed mode if xfrun4 symlink is used.</li>
  <li>Select entry when Ctrl+L is pressed.</li>
  <li>Quit the mainloop when receiving an exit signal.</li>
  <li>Avoid xfconf error when closing windows on quit.</li>
  <li>Add icon view mode and add preferences to set icon sizes.</li>
  <li>Only show categories with items.</li>
  <li>Add keybinds to switch modes (Ctrl-1 and Ctrl-2).</li>
  <li>Improve reloading of items and directories.</li>
  <li>Add popup menu to edit, hide and revert desktop files.</li>
  <li>Add refcount debugging.</li>
  <li>Remove xfrun from the utility menu.</li>
  <li>Fix some segfaults.</li>
  <li>Add option to save custom command matches.</li>
  <li>Insert and reload history command in model.</li>
  <li>Change treeview filter prio to avoid window resize.</li>
  <li>Add left/right navigation to the treeviews.</li>
  <li>Add a custom completion match function.</li>
  <li>Use long option, looks better in code completion.</li>
  <li>Drop usage of new Gdk keycode api (bug #8044).</li>
  <li>Fix launching in collapsed mode.</li>
  <li>Don't ignore arguments of the desktop file command.</li>
  <li>Always allow up/down unless the completion menu is shown.</li>
  <li>Fix segfault when loading default actions.</li>
  <li>Rewrite of the the application finder to merge the functionality of the appfinder as we know it in 4.8 and xfrun4 (start with --collapsed).</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em>:</h2>
<ul></li>
  <li>Panel: Don't destroy window when focussed and Alt+F4 is pressed (bug #7378).</li>
  <li>Panel: Use new help function to redirect to docs.xfce.org.</li>
  <li>Docs: Remove mallard documentation.</li>
  <li>Docs: Don't install the gtkrc README.</li>
  <li>Clock: Don't use sigval_t (bug #8297).</li>
  <li>Panel: Add support for pluggable dialogs.</li>
  <li>Panel: Save changed plugin ids if a plugin failed to load.</li>
  <li>Directorymenu: Fix prefered app not working without snotify (bug #8298).</li>
  <li>Launcher: Small=FALSE in deskbar mode with label visible.</li>
  <li>Actions: Limit size of action buttons to row size.</li>
  <li>Panel: Removed item size checks.</li>
  <li>Clock: Fixing clock orientation in vertical/deskbar mode.</li>
  <li>Pager: Fixing infinite loopin in the WNCK pager aspect ratio workaround.</li>
  <li>Pager: Fixing plugin->size updates.</li>
  <li>Pager: Fixed workspace ordering in the vertical mode.</li>
  <li>Pager: Workaround for aspect ratio error in WNCK pager in deskbar mode.</li>
  <li>Pager: Changing orientation depending on the panel mode.</li>
  <li>Clock: Changing default value of rotate-vertically to TRUE.</li>
  <li>Pager: Fixed preprocessor macro.</li>
  <li>Pager: Removing broken workaround for aspect ratio in deskbar mode.</li>
  <li>Pager: Making use of a fixed libwnck version (>=2.31.0).</li>
  <li>Revert "Use realtime POSIX timers for the clock."</li>
  <li>Revert "Clock: Don't use sigval_t (bug #8297)."</li>
  <li>Launcher: Show the desktop file in the tooltip (bug #8536).</li>
  <li>Panel: Make string in about translatable (bug #8545).</li>
  <li>Panel: Don't ask for panel when inserting items (bug #8544).</li>
  <li>Panel: Reply to the caller for plugin events (bug #7365).</li>
  <li>Applicationsmenu: Fall-back to xfdesktop for xfce4-popup-applicationsmenu (bug #7365).</li>
  <li>Applicationsmenu: Recurse application menu selection-done gignal (bug #8541).</li>
  <li>Panel: Add (un)lock option to panel menu (bug #6980).</li>
  <li>Panel: Add confirmation before creating launchers from dnd (bug #6926).</li>
  <li>Applicationsmenu: Allow non-squared icons in applications button (bug #7381).</li>
  <li>Panel: Save plugin-ids when removing and moving items in ed.</li>
  <li>Tasklist: Bringing back 4.8 max-button-size property.</li>
  <li>Tasklist: Capping buttons height when button labels are visible.</li>
  <li>Tasklist: Reverting "ceil" to "floor" (as in 4.8).</li>
  <li>Actions: Query visibility and save as strings.</li>
  <li>Panel: Add option in preferences dialog to disable struts (bug #7202).</li>
  <li>Showdesktop: Allow middle-click to shade windows (bug #7177).</li>
  <li>Panel: Add style property to control size of autohide window.</li>
  <li>Panel: Make compositing settings insensitive (bug #7862).</li>
  <li>Tasklist: Add option to disable mouse scrolling (bug #6996).</li>
  <li>Tasklist: Make the plugin shrink instead of expand (bug #7389, #7129).</li>
  <li>Drop AC_PROG_LIBTOOL and AC_DISABLE_STATIC for LT_PREREQ and LT_INIT.</li>
  <li>Clock: Use realtime POSIX timers for the clock.</li>
  <li>Actions: Merge functionality of xfce4-session plugin.</li>
  <li>Applicationmenu: Show menu on button-press-event (bug #8047).</li>
  <li>Migrate: Add version based config migration.</li>
  <li>Clock: Fix typo in tooltip (bug #8137).</li>
  <li>General: Add deskbar mode and nrows property to plugins.</li>
  <li>General: Add small property for plugins.</li>
  <li>Separator: Remove new line option.</li>
  <li>General: Make plugins work with deskbar mode and small property.</li>
  <li>Panel: Change drop highlighting to a red line.</li>
  <li>Applicationmenu: Reload menu on directory changes.</li>
  <li>Panel: Make sure the panel has a position on startup (bug #8287).</li>
  <li>Panel: Work with a unique id for each panel.</li>
  <li>Panel: Remove autosaving on exit and with timeout.</li>
  <li>Panel: Only save what is required and when needed.</li>
  <li>Docs: Update to latest version.</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em>:</h2>
<ul></li>
  <li>Add accelerators to logout dialog buttons (bug #6982).</li>
  <li>Add support for starting assistive technologies.</li>
  <li>Remove optional dependency for gconf.</li>
  <li>Remove Xfce4-tips.</li>
  <li>Remove early xfsettingsd autostart and add it to the session.</li>
  <li>Fix crash if save timeout for a client is triggered (bug #7320).</li>
  <li>Add a way to delete sessions (Bug #5730).</li>
  <li>Drop usage of G_CONST_RETURN macro.</li>
  <li>Add Xft.xrdb, startxfce4, xinit, xfce.desktop and xflock4 files from xfce-utils.</li>
  <li>Explicitly link to libm where needed (bug #7953).</li>
  <li>Remove the xfce4-panel logout menu plugin.</li>
  <li>Don't try to remove the $HOME directory (bug #8154).</li>
  <li>Remove manual and link to docs.xfce.org.</li>
  <li>Show dialog in settings category.</li>
  <li>Link to gmodule (bug #8340).</li>
  <li>Improve fadeout code with compositing enabled.</li>
  <li>Start screensaver with autostart.</li>
  <li>Support the TryExec key for autostart in the settings dialog.</li>
  <li>Rework the logout dialog code.</li>
  <li>Cleanup the power management code.</li>
  <li>Let xfce4-session handle the dbus-launch checking.</li>
  <li>Add support for launching xfce4-session in consolekit.</li>
  <li>Add --with-ck-launch support to startxfce4.</li>
  <li>Add option to lock the screen on suspend/hibernate.</li>
  <li>Remove unused icons.</li>
  <li>Show all applications in autostart (bug #8014).</li>
  <li>Drop gpg-agent and ssh-agent handling.</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em>:</h2>
<ul></li>
  <li>Xfsettingsd: Don't set large dpi in xrdb (bug #8415).</li>
  <li>Include xscreensaver in the manager dialog.</li>
  <li>Complete theme installation script.</li>
  <li>Settings editor: Set sensitivity of save button on init.</li>
  <li>Xfsettingsd: Properly round display refresh rate to find match.</li>
  <li>Add mime icons in the mime-editor treeview.</li>
  <li>Store window and column sizes in xfconf.</li>
  <li>Add cateogry based settings manager.</li>
  <li>Re-add support for pluggable dialogs and enable them always.</li>
  <li>Rework settings editor.</li>
  <li>Clear out keyboard shortcuts before resetting to defaults (bug #8138).</li>
  <li>Use daemon() for xfsettingsd if available.</li>
  <li>Hide the xfconfd-already running message completely.</li>
  <li>Excluded items with NoDisplay=true in the settings dialog.</li>
  <li>Remove duplicated accelerators (bug #7734).</li>
  <li>Add theme dnd-installation by dropping in a treeview.</li>
  <li>Drop AC_LIBTOOL in favor of LT_PREREQ and LT_INIT.</li>
  <li>Wait for the window manager before setting workspace names.</li>
  <li>Add option to disable numlock restoring (bug #8302).</li>
  <li>Add Help button and make existing buttons work with wiki.</li>
  <li>Add new MIME Type editor.</li>
  <li>Depend on Gtk+ 2.20 and Glib 2.24.</li>
  <li>Merge xfce4-settings-helper into xfsettingsd.</li>
  <li>Add support to xfsettingsd for pointing device properties.</li>
  <li>Rework the mouse dialog and add support for basic synaptics and wacom settings.</li>
  <li>Add option to enable assistive technologies during login.</li>
  <li>Add fontconfig monitoring (bug #5011).</li>
  <li>Improved debugging with XFSETTINGSD_DEBUG=1.</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em>:</h2>
<ul></li>
  <li>Use sh as interpreter in tests.</li>
  <li>Add hook to skip the xfconf tests.</li>
  <li>Make the abicheck work on Solaris and PPC64 (bug #7416).</li>
  <li>Fix licenses and use new FSF address.</li>
  <li>Fix compiler warnings on Solaris.</li>
  <li>Avoid GCC 4.6 compiler warning.</li>
  <li>Add toggle option to xfconf-query.</li>
  <li>Remove unusable import and export options from xfconf-query.</li>
  <li>Translate all error strings in xfconf-query.</li>
  <li>Cleanup Makefile.am files a bit.</li>
  <li>Improve --version output in xfconf-query.</li>
  <li>Cleanup #includes.</li>
  <li>Drop usage of the G_CONST_RETURN macro.</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em>:</h2>
<ul></li>
  <li>Fix menu without desktop icons.</li>
  <li>Enable pseudo-transparent backgrounds again.</li>
  <li>Prevent multiple instances of xfdesktop from running (bug #8488).</li>
  <li>Change xfdesktop's menu icon to "applications-other" (bug #8500).</li>
  <li>Keep the image width to something sensible for xfdesktop-settings (bug #7086).</li>
  <li>Use the preferred file manager when opening folders (bug #6537).</li>
  <li>Drop AC_PROG_LIBTOOL for LT_PREREQ and LT_INIT.</li>
  <li>Remove docs and link to wiki.</li>
  <li>Thumbnail desktop icon previews using tumblerd.</li>
  <li>Added a check for GDK_GRAB_INVALID_TIME in xfdesktop_popup_grab_available to mitigate slow menu popups on a right mouse click (bug #7172).</li>
  <li>Add the code required to perform a paste on the on the desktop (bug #3804).</li>
  <li>Display correct trash icon on menu and desktop.</li>
  <li>Fix for shift + drag selections/</li>
  <li>Icon positions are saved/restored per resolution.</li>
  <li>Backdrop image cycling on a timer.</li>
  <li>Modified xfdesktop_icon_view_drag_drop to allow all selected files to drag and drop (bug #5025).</li>
  <li>Fix for moving files instead of copy when src isn't writable.</li>
  <li>Fix typos in the README file.</li>
  <li>Unmounted volumes are semi-transparent.</li>
  <li>Stretch background across all monitors setting (bug #5690).</li>
  <li>Arrange icons on the desktop menu item (bug #2833).</li>
  <li>Single click option to open items on desktop (bug #1797).</li>
  <li>Require libexo and update min requirements in readme.</li>
  <li>Comments in .desktop files are displayed in the tooltip (bug #8509).</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em>:</h2>
<ul></li>
  <li>Add tiling feature (bug #6648).</li>
  <li>Navigate with arrows in task switcher (bug #4752).</li>
  <li>Show dialogs in settings category.</li>
  <li>Do not cancel pending focus transition and use actual meaningful timestamp to avoid setting focus on wrong window in focus follow mouse (Bug #8323).</li>
  <li>Remove docbook documentation.</li>
  <li>Remove older themes from main package (moved to xfwm4-themes now).</li>
  <li>Add patch for themeable tab-window (bug #8238).</li>
  <li>Use themeable icons for the settings manager and the menu, rework the default icons for the settings manager and the window menu and add SVG version.</li>
  <li>Reintroduce the double-click timeout.</li>
  <li>Drop AC_PROG_LIBTOOL in favor of LT_PREREQ and LT_INIT.</li>
  <li>Simply double click detection logic.</li>
  <li>Add special icons for the button layout in settings.</li>
  <li>Remove some XFlush() calls.</li>
  <li>Upon restart, restore the previous selected workspace.</li>
  <li>Improve horizontal/vertical maximization toggle so that de-maximizing in either direction while fully maximized gives the expected maximization result.</li>
  <li>Change the default theme to differentiate from 4.8.</li>
  <li>Update mouse cursor theme and size dynamically (bug #6854).</li>
  <li>Optimize transients for group evaluation while withdrawing windows.</li>
  <li>Increase timeout for other WM to exit with "--replace",</li>
  <li>Rework focus and fullscreen windows to make xfwm4 simpler and more predictable.</li>
  <li>Get rid of old GNOME 1.x protocol.</li>
  <li>Get rid of legacy fullscreen emulation.</li>
</ul>

<h2>Theme Engine <em>(gtk-xfce-engine)</em>:</h2>
<ul></li>
  <li>Improved menu theming</li>
  <li>Theme gtk-tooltip (bug #8494).</li>
  <li>Scale radio and check boxes (bug #8456).</li>
  <li>Draw inset border around default button (bug #8454).</li>
  <li>Changed rendering of GtkSpinButton.</li>
  <li>Pixel align checkboxes in the Gtk+-3.0 engine.</li>
  <li>Link against libm (bug #6253).</li>
  <li>Added Gtk+-3.0 theming engine.</li>
  <li>Changed drawing routines to use cairo.</li>
</ul>
