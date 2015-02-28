

<h1>Xfce 4.12 Changelog</h1>

<p>Note: the changelogs shown here are since the version of the components that shipped with Xfce 4.10.</p>

<h2>Dependency changes</h2>
<ul>
  <li>GTK+ dependency &gt;= 2.24 and GLib &gt;= 2.30.</li>
  <li>Garcon has a new libxfce4ui dependency.</li>
  <li>Libxfce4ui has an optional dependency on GTK+3.</li>
  <li>Libxfce4util major library version was bumped, some symbols were dropped.</li>
  <li>Xfce4-panel can be optionally built against GTK+3.</li>
  <li>Xfce4-appfinder now uses GDbus instead of dbus-glib, and can be potentially built against GTK+3.</li>
  <li>Xfce4-session has an optional dependency on upower.</li>
  <li>Xfce4-power-manager has a new dependency on upower, and can build a battery plugin for Xfce4-panel and LXPanel</li>
  <li>Xfce4-settings has an optional dependency on libinput Xorg driver and upower.</li>
  <li>Xfwm4 has an optional dependency on libdrm.</li>
</ul>

<h2>Development Tools <em>(xfce4-dev-tools)</em></h2>
<ul>
  <li>Autotools and dependencies updates.</li>
  <li>Remove outdated macros and checks.</li>
</ul>

<h2>Utility Library <em>(libxfce4util)</em></h2>
<ul>
  <li>Autotools updates.</li>
  <li>Remove unused or unrequired API functions: xfce_strjoin, xfce_putenv, xfce_setenv, xfce_unsetenv.</li>
  <li> Translation updates: Arabic, Bulgarian, Welsh, Dzongkha, English (Australia), Georgian, Korean, Macedonian, Malay, Dutch (Flemish), Occitan (post 1500), Slovenian, Serbian, Thai, Tagalog (Philippines), Uyghur, Chinese (Hong Kong).</li>
</ul>

<h2>Widget Library <em>(libxfce4ui)</em></h2>
<ul>
   <li>Compile GTK+-3 version of libxfce4ui when possible.</li>
   <li>Depend on GTK 2.24 and Glib 2.28.</li>
   <li>Fix grabbing shortcuts with <Super> modifier (bug #10373).</li>
   <li>Avoid double forking when spawning external apps (bug #9373).</li>
   <li>Don't drop startup notify hint when resetting to defaults (bug #10630).</li>
   <li>Add <Ctrl><Alt>l shortcut for screen locking (xflock4) (bug #10728).</li>
   <li>Add xfce_dialog_show_help_with_version() so applications can send their own version number and not the desktop version.</li>
   <li>Only define distclean files in maintainer mode (bug #8974).</li>
   <li>Don't remove keyboard shortcut when entered twice (bug #8749).</li>
   <li>ix keyboard shortcuts with Shift modifier (bug #8744).</li>
   <li>Fix alt + print being detected as SysReq (bug #7897).</li>
   <li>Use <Primary> instead of <Control> (bug #8200).</li>
   <li>Fix keyboard shortcuts with keypad (bug #4178).</li>
   <li>Prefer exo-open for opening the manual pages.</li>
   <li>Translation updates: Amharic, Arabic, Asturian, Bulgarian, Bengali,
  Catalan (Valencian), Czech, Danish, German, Greek, English (United
  Kingdom), Spanish (Castilian), Basque, Finnish, French, Galician,
  Hebrew, Croatian, Hungarian, Indonesian, Icelandic, Italian,
  Japanese, Kazakh, Korean, Kurdish, Lithuanian, Malay, Latvian, Norwegian
  Bokmal, Dutch (Flemish), Norwegian Nynorsk, Occitan (post 1500), Panjabi (Punjabi),
  Polish, Portuguese, Portuguese (Brazilian), Romanian, Russian,
  Sinhala, Slovak, Slovenian, Serbian, Swedish, Telugu, Thai, Tagalog, Tagalog
  (Philippines), Turkish, Uyghur, Ukrainian, Urdu, Urdu (Pakistan),
  Vietnamese, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan).</li>
</ul>

<h2>Extension Library <em>(exo)</em></h2>
<ul>
   <li>Build updates and improvements (autotools, intltool)</li>
   <li>Increased required automake and libtool versions</li>
   <li>Updated mimeapps.list location for glib >= 2.41 (bug #11504)</li>
   <li>Add an icon-column in the icon view for loading thumbnailed images</li>
   <li>Add helpers for qtFM, QTerminal, Qupzilla, Surf, Vimprobable2 (bug #10216)</li>
   <li>Add support for BCC in exo-compose-email (bug #11070)</li>
   <li>Better handle filenames with spaces in exo-helpers (bug #10731)</li>
   <li>Drop use of the -remote option in Firefox helpers (bug #11601)</li>
   <li>Fix ATK deprecation warnings (bug #11556).</li>
   <li>long file names into view in compact listview (bug #6014, Thanks Forest).</li>
   <li>Close open fd, fix typo, prevent null dereference and division by 0, remove unused code.</li>
   <li>Add an icon-column in the icon view for loading thumbnailed images.</li>
   <li>Add support for BCC in exo-compose-email (bug #11070, thanks Keith Edmunds).</li>
   <li>Fix small typo in exo-icon-bar (bug #10515).</li>
   <li>Add helpers for qtFM, QTerminal, Qupzilla, Surf, Vimprobable2 (bug #10216).</li>
   <li>Wrap URIs with quotes in exo-helpers to better handle filenames with spaces (bug #10731).</li>
   <li>Install category icons into categories folder (bug #11364).</li>
   <li>Update mimeapps.list location for glib &gt;= 2.41 (Bug #11504).</li>
   <li>Fix exo_str_looks_like_an_uri() (bug #10098).</li>
   <li>Translation updates: Albanian, Arabic, Asturian, Basque, Belarusian, Bengali,
  Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan),
  Croatian, Czech, Danish, Dutch (Flemish), English (Australia),
  English (Great Britain), Estonian, Finnish, French, Galician, German, Greek,
  Hebrew, Hungarian, Icelandic, Indonesian, Italian, Japanese, Kazakh, Korean,
  Latvian, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan,
  Panjabi, Polish, Portuguese, Portuguese (Brazilian), Romanian, Russian,
  Serbian, Slovak, Slovenian, Spanish, Swedish, Telugu, Thai, Turkish,
  Ukrainian, Urdu, Urdu (Pakistan), Uyghur, Vietnamese</li>
</ul>

<h2>Menu Library <em>(garcon)</em></h2>
<ul>
   <li>Fix menu icons for misconfigured desktop files (Bug #10709).</li>
   <li>Add case insensitive sorting to the menu (bug #10594).</li>
   <li>Don't force URLs to be opened in a web browser (bug #10212).</li>
   <li>Add garcon_set_environment_xdg() function.</li>
   <li>Add a garcon-gtk library for common gtk functions.</li>
   <li>Bail out of creating a directory menu if it doesn't have a name.</li>
   <li>Translation updates: Arabic, Bulgarian, Catalan (Valencian), Czech,
  Danish, German, Greek, English (Australia), English (United Kingdom),
  Esperanto, Spanish (Castilian), Estonian, Basque, Finnish, French,
  Galician, Hebrew, Croatian, Hungarian, Indonesian, Icelandic,
  Italian, Japanese, Kazakh, Korean, Lithuanian, Malay, Norwegian
  Bokmal, Dutch (Flemish), Norwegian Nynorsk, Occitan (post 1500),
  Polish, Portuguese, Portuguese (Brazilian), Romanian, Russian,
  Slovenian, Albanian, Serbian, Swedish, Telugu, Thai, Turkish, Uyghur,
  Ukrainian, Urdu, Chinese (China), Chinese (Hong Kong), Chinese
  (Taiwan).</li>
</ul>

<h2>File Manager <em>(thunar)</em></h2>
<ul>
   <li>Do not execute but only open shell scripts by default (bug #7596) (Harald Judt)</li>
   <li>Fix typo in error message (Nick Schermer)</li>
   <li>Improve keyboard navigation for thunar-tree-view (bug #4519) (Harald Judt)</li>
   <li>Allow <ctrl> + middle click in shortcut and treeview panes (Harald Judt)</li>
   <li>Set correct dialog window hint for progress dialog (bug #11467) (Matt Thirtytwo)</li>
   <li>Refresh file info after getting it from cache (bug #11008) (Peter de Ridder)</li>
   <li>Remove unused enum for signal handlers (bug #11493) (Matt Thirtytwo)</li>
   <li>Simplify Makefile.am. Generated files are separated from typed source files (Matt Thirtytwo)</li>
   <li>thunar-tpa: Install desktop file to $(datadir)/xfce4/panel/plugins (Robby Workman)</li>
   <li>Fix anchor offset in xfce_dialog_show_help () function. (Olivier Duchateau)</li>
   <li>Properly handle m4 stuff (Harald Judt)</li>
   <li>TWP: Single-workspace-mode = TRUE is the default (Bug #11047) (Eric Koegel)</li>
   <li>thunar-wallpaper: Do not use escaped filenames for xfconf (Harald Judt)</li>
   <li>Use xfconf and handle xfdesktop's single workspace (Bug #11047) (Eric Koegel)</li>
   <li>Revert "Workaround for crashes on RHEL5" (Andrzej)</li>
   <li>Revert "Fallback to image surface, workaround for bug in Cairo/RENDER" (Andrzej)</li>
   <li>Renaming a file from another file manager, file disappears in Thunar window (bug #11430) (Andrzej)</li>
   <li>Make usage/free string more clear (bug #11345) (Harald Judt)</li>
   <li>Make single middle click open files and folders (bug #10587) (Harald Judt)</li>
   <li>Add a progressbar to the freespace indicator in the properties dialog (Harald Judt, Simon Steinbeiss)</li>
   <li>Change resize style in thunar-wallpaper plugin (Thaddaeus Tintenfisch)</li>
   <li>Add vim modeline. Remove obsolete '$Id$' line (Matt Thirtytwo)</li>
   <li>Right click context menu with wrong icon (bug #10652) (Andrzej)</li>
   <li>make distcheck fix (reference docs linking error) (Andrzej)</li>
   <li>Add support for binary file size units (bug #10864) (Andre Miranda)</li>
   <li>Strip trailing spaces/Github test (Nick)</li>
   <li>Fix case of Xfce in appdata description (Simon)</li>
   <li>Update intltool (Eric)</li>
   <li>Add pkexec policy (Bug #11122) (Eric)</li>
   <li>Remove trailing whitespace from Makefile to prevent warning (Simon)</li>
   <li>Add appdata file for Thunar (Bug #11172) (Eric)</li>
   <li>Check for thumbnails in the new location (Bug #11263) (Eric)</li>
   <li>Default application not respected with glib &gt;= 2.41 (Bug #11212) (Guido)</li>
   <li>Add support for the GTK 3 bookmarks file (bug #10627) (Alistair)</li>
   <li>Update xfconf setting for thunar-wallpaper plugin (Eric)</li>
   <li>Update copyright. (Nick)</li>
   <li>thunar-tpa: fix libxfce4panel version checking macros (Andrzej)</li>
   <li>Fallback to image surface, workaround for bug in Cairo/RENDER (Andrzej)</li>
   <li>Fixed missing inode-directory/folder icons on old systems. (Andrzej)</li>
   <li>Change name of file copies (and links) (bug #7518). (Nick)</li>
   <li>Improve the extension selection to not match hidden names. (Nick)</li>
   <li>Safe accels 10 sec after changes (bug #10139). (Nick)</li>
   <li>Force icons on the toolbar (bug #10179). (Nick)</li>
   <li>Improve handling of renames (bug #10242). (Nick)</li>
   <li>Smarter file extension selecting (bug #10268). (Jeff Shipley)</li>
   <li>I18n: Remove broken / unsupported translations. (Nick)</li>
   <li>Force reference on files from the cache. (Nick)</li>
   <li>Drop README.thunarrc. (Nick)</li>
   <li>Allow keyboard shortcuts for user customizable actions (bug #1941).</li>
   <li>Prepend and later reverse for collecting selection.</li>
   <li>Some optimizations in renamer loop.</li>
   <li>Plug leak in file renamer (bug #9864).</li>
   <li>Escape name for sidepane tooltips (bug #10001).</li>
   <li>Revert "Remove image resolution from statusbar."</li>
   <li>Fix segfault when going back to removed directory (bug #9831).</li>
   <li>Don't abort startup if dbus failed.</li>
   <li>Put * around string if * and ? are not used in the pattern.</li>
   <li>Revert "Remove right-click drag possibility (bug #3549)."</li>
   <li>Revert "Directly popup menus on selected items (bug #3550)."</li>
   <li>Update shortcuts headers when removing a shortcut (bug #9651).</li>
   <li>Implement tab middle click in location buttons (bug #9684).</li>
   <li>Add new tab option to right-click menu of location buttons.</li>
   <li>Small improvement in thumbnail frame.</li>
   <li>Key combos not working with location buttons (bug #9625).</li>
   <li>Open tree node if expanded and mounted (bug #9603).</li>
   <li>Use some more cairo renderering.</li>
   <li>Make Desktop in Go menu translatable (bug #9616).</li>
   <li>Send to menu not updated for directories (bug #9618).</li>
   <li>Fix freeze on /proc/kmsg.</li>
   <li>Show all volumes in the devices list.</li>
   <li>Fix bulk renamer url to the wiki.</li>
   <li>Show NoDisplay=true applications (bug #9595).</li>
   <li>Fast read content type of unreadable files (bug #9553).</li>
   <li>Submenu the sidepane visibility menu.</li>
   <li>Hide shortcut pane header when there are no items.</li>
   <li>Keybindings to switch to tab with Alt+N (bug #9585).</li>
   <li>Make tabs scrollable.</li>
   <li>Session-save mount operation passwords.</li>
   <li>Check trash status 2s after startup from session.</li>
   <li>Clear mutex to avoid memleak with 2.32 api.</li>
   <li>Fix file menu displacement after a forced update (bug #9604).</li>
   <li>Put remote bookmarks in places and improve icon loading.</li>
   <li>Use ThunarBrowser to resolve locations in launcher.</li>
   <li>Drop spacing betweek Kind and icon in file properties.</li>
   <li>Make sure trash is loaded during session restore (bug #9513).</li>
   <li>Don't open a useless tab (bug #9519).</li>
   <li>Remove session file if there are no windows (bug #9519).</li>
   <li>Add special tooltip for the trash in shortcuts.</li>
   <li>Revert "Improve pervious commit.. (bug #9552).</li>
   <li>Slightly increase the progress dialog (bug #9545).</li>
   <li>Set icon names in go menu (bug #9559).</li>
   <li>Hide spinner when there's no activity (bug #9563).</li>
   <li>Fix sorting by type (bug #9549).</li>
   <li>Remove the display names from the emblems (bug #9548).</li>
   <li>Test if the application generated a thumbnail if not supported.</li>
   <li>Re-add the has-handler check when inserting rows.</li>
   <li>Use g_object_notify_by_pspec in most places.</li>
   <li>Install GParamSpec properties at once in a couple of objects.</li>
   <li>Update the statusbar in a short timeout.</li>
   <li>Remove image resolution from statusbar.</li>
   <li>Fix supported applications for multiple files.</li>
   <li>Idle updating the launcher.</li>
   <li>Don't queue tumbler requests for non-regular files.</li>
   <li>Pass the correct emblem size to the icon factory.</li>
   <li>Store cairo surfaces on pixbufs.</li>
   <li>Right-click on not-selected row will show menu of current folder in details view (bug #3386).</li>
   <li>Load content types on-demand and preload in an idle.</li>
   <li>Use origional date in properties page for images.</li>
   <li>Add option to only show local thumbnails.</li>
   <li>Do not unref g_file_icon_get_file() file (bug #9439).</li>
   <li>Don't add duplicates of devices (bug #9440).</li>
   <li>Fix typo of Trash in standard view (bug #9437).</li>
   <li>Don't use deprecated g_thread_init().</li>
   <li>Use GArray instead of GValueArray and new mutex API.</li>
   <li>Clear cached icon when trash changed (bug #9432).</li>
   <li>Also clear cache on reload of a file.</li>
   <li>Keep file permissions when renaming a desktop file.</li>
   <li>Write localized name of a desktop file (bug #8783).</li>
   <li>Fix back/forward gestures and 8/9 button events.</li>
   <li>Use seconds timers where possible.</li>
   <li>Idle selecting item in shortcuts pane.</li>
   <li>Do not set selection after removing files (bug #8780).</li>
   <li>Fix linking on Cygwin (bug #4561).</li>
   <li>Sort renamer list by clicking on name header (bug #2622).</li>
   <li>Always set the icons size of the toolbar.</li>
   <li>Make the entry the default location bar.</li>
   <li>Don't set weight in chooser model to light (bug #7688).</li>
   <li>Fallback to only default values if xfconf failed.</li>
   <li>Improve generating remote display names (bug #9442).</li>
   <li>Remove user directories and add bookmarks in go menu.</li>
   <li>Trigger callback function when opening unmounted locations (bug #9447).</li>
   <li>Don't add a bookmark to the same location twice.</li>
   <li>Also watch the bookmark files.</li>
   <li>Use stock home icons for ~.</li>
   <li>Do not freeze on new files outsize this directory (bug #9468).</li>
   <li>Some more optimizations in icon name loading.</li>
   <li>Don't include notify.h if not available (bug #9480).</li>
   <li>Add free space tooltip for devices.</li>
   <li>Use GSequence in the list model.</li>
   <li>Directly collect the full info namespace for ls dir.</li>
   <li>Drop unused check for icons of executables.</li>
   <li>Don't write empty session files.</li>
   <li>Add support for tabs in session saving.</li>
   <li>Show custom commands again in the menus (bug #9169).</li>
   <li>Drop usage of glib 2.32 functions.</li>
   <li>Allow resizing of chooser dialog.</li>
   <li>Don't abort on non-utf8 charaters in path entry.</li>
   <li>Don't show drive icon for remote mounts in history.</li>
   <li>Release all ThunarFiles when closing a view, this should resolve mounts that were empty after unmounting.</li>
   <li>Show tooltip uri/filename in history menu item.</li>
   <li>End with a / in the path entry.</li>
   <li>Add function to generate nice remote display names.</li>
   <li>Easy adding bookmarks for remote mounts.</li>
   <li>Do not call eject in thunar_device_volume_mount_finished.</li>
   <li>Reduce tumbler traffic on startup of Thunar.</li>
   <li>Use drive_stop in device handling.</li>
   <li>Put reload button in location entry.</li>
   <li>Create pull-down history buttons and remove arrows.</li>
   <li>Shortcut pane: Do not mount after eject (bug #9403).</li>
   <li>Use go-home icon name for menu and toolbar.</li>
   <li>Drop the separators in the toolbar.</li>
   <li>Extend history tooltips to describe functionality of the button.</li>
   <li>Avoid segfault with null mime-type (bug #8390).</li>
   <li>Implement tabs in Thunar (bug #6102).</li>
   <li>Do not try to mount a device twice in treeview (bug #9412).</li>
   <li>Keep delaying selecing files if not loaded yet (bug #7328).</li>
   <li>Slightly toned thumbnail frame.</li>
   <li>Make loading priority in shortcuts model higher.</li>
   <li>Collect properties at once in window_init.</li>
   <li>Use infobar for root warning in window.</li>
   <li>Option to set small toolbar icons (bug #3971).</li>
   <li>Avoid crash when toplevel window cannot be found (bug #9417).</li>
   <li>Revert "Remove XdndDirectSave0 protocol." (bug #9414).</li>
   <li>Rename filename of insecure desktop files (bug #8786).</li>
   <li>Cache pixmaps on the ThunarFile and drop ring buffer.</li>
   <li>Add lazy checks to thumbnailer.</li>
   <li>Add menu item for permanent delete.</li>
   <li>Only show "Move to Trash" if trash is supported.</li>
   <li>Add support for multiple selections in file preferences dialog.</li>
   <li>Depend on Gtk 2.24 and Glib 2.30.</li>
   <li>Implement selection inversion.</li>
   <li>Improve refresh feedback when using dnd between 2 windows.</li>
   <li>Resize rename dialog based on filename length (bug #7684).</li>
   <li>Force bulk renamer when Shift is pressed (bug #7684).</li>
   <li>Add a sentence case rename mode to sbr.</li>
   <li>Regenerate thumbnails on file changes (bug #8473).</li>
   <li>Hide recommended applications that are not visible (bug #9169).</li>
   <li>Sort recommended applications (bug #8927).</li>
   <li>Use system-file-manager icon-name in desktop file (bug #9128).</li>
   <li>Check mime type in desktop files in the sendto menu (bug #7392).</li>
   <li>Improvement in the file progress dialog.</li>
   <li>Show full template filename in menu (bug #6140).</li>
   <li>Store metadata (emblems) in GVFS's daemon.</li>
   <li>Use Path from desktop file as CWD (bug #5760).</li>
   <li>Add working directory entry to apr (bug #5760).</li>
   <li>Add hidden option to show full path in window title (bug #6412).</li>
   <li>Unset DBUS variables once registered (bug #8800).</li>
   <li>Only collect image data if the mime-type is image/* (bug #2913).</li>
   <li>Don't copy templates but create them (bug #8312).</li>
   <li>Add menu item to hide the menu bar.</li>
   <li>Improve statusbar selection text (bug #8989).</li>
   <li>Don't allow starting multiple daemons (bug #3814).</li>
   <li>Make massing plugin warnings non-fatal (bug #2604).</li>
   <li>Show transfer rate in transfer dialog (bug #8250).</li>
   <li>Check free space before copying (bug #5658).</li>
   <li>Port settings to xfconf.</li>
   <li>Handle null content-types when sorting (bug #8465).</li>
   <li>Scroll to first file with pattern select.</li>
   <li>Add secure desktop file launching (bug #5012).</li>
   <li>Use g_utf8_collate_key_for_filename for sorting (bug #7110).</li>
   <li>Only deep-count on the same filesystem.</li>
   <li>Don't force scrolling to the window edge.</li>
   <li>Translation updates: Amharic, Arabic, Asturian, Belarusian,
  Bengali, Catalan (Valencian), Czech, Danish, German, Dzongkha, Greek,
  English (United Kingdom), Esperanto, Spanish (Castilian), Estonian,
  Basque, Finnish, French, Galician, Hebrew, Croatian, Hungarian,
  Indonesian, Icelandic, Italian, Japanese, Georgian, Kazakh, Korean,
  Kurdish, Lithuanian, Latvian, Macedonian, Norwegian Bokmal, Dutch
  (Flemish), Norwegian Nynorsk, Panjabi (Punjabi), Polish, Portuguese,
  Portuguese (Brazilian), Romanian, Russian, Sinhala, Slovak, Albanian,
  Serbian, Swedish, Telugu, Turkish, Uyghur, Ukrainian, Urdu, Urdu
  (Pakistan), Vietnamese, Chinese (China), Chinese (Taiwan).</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>
   <li>Make compilation to GTK3 optional.</li>
   <li>Use GDbus for communication.</li>
   <li>Add execute menu item to launch without closing the window.</li>
   <li>Add default action to open absolute paths.</li>
   <li>Add bookmarks in the model.</li>
   <li>Do nothing with the Tab event during competion (bug #10187).</li>
   <li>Use new xdg function to set environment.</li>
   <li>Translation updates: Amharic, Arabic, Belarusian, Bulgarian,
  Bengali (India), Catalan (Valencian), Czech, Danish, German,
  Dzongkha, Greek, English (Australia), English (United Kingdom),
  Spanish (Castilian), Estonian, Basque, Persian, Finnish, French,
  Galician, Gujarati, Croatian, Hungarian, Armenian, Indonesian,
  Icelandic, Italian, Japanese, Georgian, Kazakh, Korean, Kurdish,
  Lithuanian, Macedonian, Marathi, Malay, Dutch (Flemish), Norwegian
  Nynorsk, Occitan (post 1500), Polish, Portuguese, Portuguese
  (Brazilian), Romanian, Russian, Slovak, Slovenian, Serbian, Swedish,
  Thai, Turkish, Uyghur, Ukrainian, Chinese (China), Chinese (Hong
  Kong), Chinese (Taiwan).</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
   <li>Added intelligent panel hiding (JPohlmann, ochosi)</li>
   <li>Added --enable-gtk3 configure flag. Note: it produces gtk2/gtk3 versions of libxfce4panel and wrapper binary so that both gtk2 and gtk3 plugins can be embedded. The panel and stock plugins are still using gtk2.</li>
   <li>Action buttons: only save session when requested (bug #7930)</li>
   <li>Action Buttons: Fix panel autohide (bug #8960) (Petr Gajdůšek).</li>
   <li>Application sMenu: fixed incorrect initial icon size in some Gtk themes.</li>
   <li>Window Buttons: fixed rendering of minimized window buttons.</li>
   <li>Applications Menu: changed default button title to "Applications".</li>
   <li>Window Buttons: wrap windows when scrolling through window list (Andre Miranda).</li>
   <li>libxfce4panel: preserve ArrowButton relief during blinking.</li>
   <li>Window Buttons: prevent several buttons to be selected at once.</li>
   <li>Action Buttons: default to a horizontal button layout in the deskbar mode.</li>
   <li>Window Buttons: Improve the tasklist multimonitor handling.</li>
   <li>Scroll the items list in the config dialog box (bug #10582)</li>
   <li>Set EWMH client type to WNCK_CLIENT_TYPE_PAGER (bug #10508).</li>
   <li>Fixed transparency issues with Gtk3 plugins.</li>
   <li>Workspace Switcher: fixed aspect ratio in deskbar mode.</li>
   <li>Applications Menu: Use new GarconGtkMenu.</li>
   <li>Window Buttons: middle-click action configurable (nothing, close, minimize).</li>
   <li>Drectory Menu: Pass path to argument (bug #10270).</li>
   <li>Window Buttons: close a window on middle click (bug #8096).</li>
   <li>Applications Menu: support for non-square icons and layout fixes.</li>
   <li>Install XfcePanelPlugin properties at once.</li>
   <li>Clock: added support for timezone selection.</li>
   <li>Put each window in a new window group.</li>
   <li>Window Buttons: Show urgent windows from other workspaces (bug #5167).</li>
   <li>Clock: calendar popup.</li>
   <li>Bugfix in icon/pixbuf resizing code.</li>
   <li>Fix icons not probably resizing when requested.</li>
   <li>Ignore GVarueArray compiler warning.</li>
   <li>Use G_ENABLE_DEBUG to set fatal messages.</li>
   <li>Fixed DnD markers with non-square small items.</li>
   <li>Actions: Fix logic of session saving (bug #8857).</li>
   <li>Panel: Emit save signal for plugins.</li>
   <li>Libxfce4-panel: Fix typo in the API docs.</li>
   <li>Translation updates: fi, fr, ko, de, pl, cs, es, hr, ms, nl, pt_BR,
  ja, uk, sr, it, th, is, da, pt, en_AU, kk, ru, zh, CN, ast, tr, sk,
  he, ar, el.</li>

</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
   <li>Add DesktopNames to .desktop file</li>
   <li>Export XDG_CURRENT_DESKTOP (Bug #11239)</li>
   <li>Expand usage of xfsm_verbose for debugging</li>
   <li>Don't log errors when trying to close non-existent FDs</li>
   <li>Add error checking for fcntl</li>
   <li>Properly print the dbus error message</li>
   <li>Check the return value of select</li>
   <li>atoi (argv[2]) is unsafe</li>
   <li>Check the return value of gtk_tree_selection_get_selected</li>
   <li>gtk_cell_renderer_text_new is never used</li>
   <li>Add fallback DragonflyBSD support for suspend/hibernate</li>
   <li>Use pkexec for xfsm-shutdown (Bug #9952)</li>
   <li>Handle gpg and ssh agents separately (Mikhail Efremov)</li>
   <li>Non-POSIX compliant test used in startxfce4 (Bug #10828) (seejay)</li>
   <li>Update copyright year (Bug #10768)</li>
   <li>polkit_unix_process_new is deprecated (Bug #10793) (Baurzhan Muftakhidinov)</li>
   <li>Add logind runtime detection to support suspend/hibernate (bug #9952) (Guido Berhoerster)</li>
   <li>Remove gnome-keyring remains.</li>
   <li>Remove xfce environment functions and use glib.</li>
   <li>Add shutdown/reboot functionality for systemd (bug #8729).</li>
   <li>Fix duplicated accelerators.</li>
   <li>Use the async spawn function of glib.</li>
   <li>Store the watch function id to avoid possible double free (bug #9709).</li>
   <li>Translation updates: Amharic, Arabic, Asturian, Azerbaijani,
  Belarusian, Bulgarian, Bengali, Bengali (India), Catalan (Valencian),
  Czech, Danish, German, Dzongkha, Greek, English (Australia), English
  (United Kingdom), Spanish (Castilian), Basque, Persian, Finnish,
  French, Galician, Gujarati, Hindi, Croatian, Hungarian, Indonesian,
  Icelandic, Italian, Japanese, Georgian, Kazakh, Korean, Lithuanian,
  Latvian, Macedonian, Marathi, Malay, Norwegian Bokmal, Dutch
  (Flemish), Norwegian Nynorsk, Occitan (post 1500), Polish,
  Portuguese, Portuguese (Brazilian), Romanian, Russian, Slovak,
  Albanian, Serbian, Swedish, Tamil, Thai, Turkish, Uyghur, Ukrainian,
  Urdu, Urdu (Pakistan), Chinese (China), Chinese (Hong Kong), Chinese
  (Taiwan).</li>

</ul>

<h2>Settings Manager <em>(xfce4-settings)</em></h2>
<ul>
   <li>Do not change properties on disabled libinput devices</li>
   <li>Increased required automake and libtool versions</li>
   <li>Fix crashes for missing icons (bug #11568)</li>
   <li>Fix warnings during configure</li>
   <li>Fix primary checkbox expansion in the display settings</li>
   <li>Add touchpad support with libinput</li>
   <li>Add previews for icon themes in appearance settings</li>
   <li>Add Gtk+ theme palettes in the appearance dialog</li>
   <li>Add support for versioned help documentation</li>
   <li>Add support for libinput Xorg driver (bug #11469)</li>
   <li>Add option to set the primary display (bug #8328)</li>
   <li>Add helper to synchronize CSD layout to xfwm4</li>
   <li>Support stat command flags on BSD systems (bug #11531)</li>
   <li>Show more information in icon-theme list (bug #9130)</li>
   <li>Width of display dialog is no longer hard-coded</li>
   <li>Update display PNP IDs from hwdata</li>
   <li>Update mimeapps.list location for glib &gt;= 2.41 (bug #11293)</li>
   <li>Use 1/10 Hz precision for displays (bug #10661)</li>
   <li>Fix segmentation fault when renaming workspaces (bug #11229)</li>
   <li>Fix --display argument being fatal (bug #11188)</li>
   <li>Fix alignment of the sound settings</li>
   <li>Fix issues found with cppcheck (bug #10879) and other scanning utilities</li>
   <li>Do not try to reencode libxklavier descriptions (bug #11317)</li>
   <li>Prevent invalid characters from breaking display name (bug #11423)</li>
   <li>Reapply settings when external keyboard connects</li>
   <li>New display settings dialog</li>
   <li>Update the settings editor to match xfconf</li>
   <li>Fix overlap variable shadowing a global function</li>
   <li>Fork before gtk/dbus init (bug #10918)</li>
   <li>Add support for upower 0.99 (bug #10918)</li>
   <li>Increase double click time to 400ms (bug #10562).</li>
   <li>Show/hide display popups with focus.</li>
   <li>Add hotplug checkbox to plug dialog.</li>
   <li>Identify Displays button.</li>
   <li>Fix display mirroring.</li>
   <li>Make mirror button insensitive if not possible.</li>
   <li>Automatically re-enable Laptop-displays if all other displays get disconnected.</li>
   <li>Add option to automatically show minimal-display dialog when new display gets connected.</li>
   <li>Fix bugs with mnemonic accelerators (bugs #9302 and #9308).</li>
   <li>Rework accelerators (bugs #9302 and #9308).</li>
   <li>Make touchpad type delay configurable (bug #8948).</li>
   <li>Mention no cache file for icon themes.</li>
   <li>Support circular scrolling in the synaptics settings.</li>
   <li>Make sure AccessXKeys control is disabled by default.</li>
   <li>Lots of improvements in XKB code.</li>
   <li>Xsettingsd: Unset input method properties (bug #5437).</li>
   <li>Xfsettingsd: Check service name of NameOwnerChanged (bug #9273).</li>
   <li>Appearance: Fix gtk3 theme detection in install script (bug #9272).</li>
   <li>Show Strv arrays in the xfconf settings editor renderer.</li>
   <li>Lot of improvements in the display code: support extended desktop mode for 2 monitors, improve minimal dialog.</li>
   <li>Xfsettingsd: Check for NoSuchExtension (bug #9390).</li>
   <li>Translation updates: Arabic, Asturian, Bulgarian, Bengali, Catalan
  (Valencian), Czech, Danish, German, Greek, English (United Kingdom),
  Spanish (Castilian), Basque, Finnish, French, Galician, Hebrew,
  Croatian, Hungarian, Indonesian, Icelandic, Italian, Japanese,
  Kazakh, Korean, Lithuanian, Latvian, Norwegian Bokmal, Dutch
  (Flemish), Norwegian Nynorsk, Panjabi (Punjabi), Polish, Portuguese,
  Portuguese (Brazilian), Romanian, Russian, Sinhala, Slovak, Serbian,
  Swedish, Telugu, Thai, Turkish, Uyghur, Ukrainian, Urdu, Urdu
  (Pakistan), Chinese (China), Chinese (Taiwan).</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em></h2>
<ul>
   <li>Allow :.,[]{} characters in property and channel names (bug #11021)</li>
   <li>Fix make check when including perl bindings in the build (bug #9556)</li>
   <li>Drop deprecated g_type_init() function.</li>
   <li>Use new glib 2.32 mutex api.</li>
   <li>Translation updates: ar, ast, bg, bn, ca, cs, da, de, el, en_AU,
  en_GB, es, eu, fi, fr, gl, hr, hu, id, is, it, ja, kk, ko, lv, ms,
  nb, nl, oc, pl, pt, pt_BR, ro, ru, sk, sr, sv, th, tr, ug, uk, ur,
  ur_PK, zh_CN, zh_TW.</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
   <li>Fix xfdesktop --reload in spanning mode (bug #10853)</li>
   <li>settings: Fix background color loading</li>
   <li>Add an --enable-debug option added to xfdesktop-settings</li>
   <li>Fix icon loading for .desktop files (bug #11078)</li>
   <li>Don't show infobar when there's only 1 workspace (bug #11134)</li>
   <li>Remove the drag highlight code (bug #10450)</li>
   <li>Add an option to show hidden files (bug #8132)</li>
   <li>Add a --next option to force wallpaper changes (bug #10754)</li>
   <li>Add runtime debug support</li>
   <li>Add a move to trash menu option (bug #10980)</li>
   <li>Change behaviour to behavior (bug #8746)</li>
   <li>Matias De lellis: Fix display desktop file that include extension in icon name</li>
   <li>Matias De lellis: Fix missing thumbnail on xfdesktop when thumbler fails to create it.</li>
   <li>Mauro Giubileo: Fix icon position saving on resolution change (bug #10813)</li>
   <li>g_file_trash_async is too new (bug #10786)</li>
   <li>Don't chain up style_set (bug #10788)</li>
   <li>Fix for moving icons into folders on the desktop (bug #10785)</li>
   <li>Fix issues with file move events (bug #10796)</li>
   <li>Use GTK_STOCK_EXECUTE for Execute menu entry (bug #10800)</li>
   <li>Change default image style to zoomed</li>
   <li>Fix for monitors not getting updated</li>
   <li>Hook up the signal handlers in xfdesktop-settings</li>
   <li>Disconnect the directory signal handler when changing folders.</li>
   <li>Correct an additional default icon size setting.</li>
   <li>Fix for images not appearing in settings app (bug #10685)</li>
   <li>Reset the icon_view style on style change (bug #10605)</li>
   <li>Filter out changed events for special icons (bug #10755)</li>
   <li>Use GIO directly for delete/trash operations (bug #10778)</li>
   <li>G_CONST_RETURN has been deprecated</li>
   <li>Point to the docs.xfce.org page for xfdesktop 4.11. (bug #10736)</li>
   <li>dbus-glib is now required. Since xfconf requires it and xfconf is already required for xfdesktop, this shouldn't change dependancies much for xfdesktop. This bug was reported and fixed by Samuli Suominen. (bug #10745)</li>
   <li>Another build failure when disabling the menu and requiring exo was also resolved.</li>
   <li>Symbolic icons have issues with some gtk2 themes where they don't get colored properly. Additionally some themes don't have network-fs or gnome-dev-network so it has been changed to gtk-network.</li>
   <li>Right click edits launchers: When performing a right click, or shift + left click, on an item in the applications sub-menu of the desktop menu it will now popup the dialog to edit the launcher. Same as xfce4-appfinder.</li>
   <li>Better migration from previous versions: Xfdesktop now does a better job of migrating any user settings from 4.10 and before to the new xfconf properties.</li>
   <li>Clean up some user strings: Some tooltips end with a period, some do not. This has been unified.</li>
   <li>Remember the window size of the settings dialog (Harald Judt)</li>
   <li>Fix segfault on session start(Thaddäus Tintenfisch)</li>
   <li>Iconview theme/gtkrc color/style issues resolved.</li>
   <li>Issues with folder cover art not loading have been fixed.</li>
   <li>Make xfdesktop-settings pluggable again (bug #10714)</li>
   <li>Update the wallpapers after user sets folder in the settings app.</li>
   <li>Minimize grid resizes, it now won't recalculate icon positions if the grid size didn't actually change.</li>
   <li>Memory leaks fixed.</li>
   <li>Warnings that happened during runtime have been fixed.</li>
   <li>Fix a crash when removing displays</li>
   <li>Show add/remove workspace option is on by default</li>
   <li>Multi-monitor fixes: release pixmap on screen changes and always redraw backdrop on display change. Both patches were added so that transitions from one monitor to another cause the backdrop to properly display.</li>
   <li>Update default icon size, spacing, and text proportion.</li>
   <li>Scale up small image previews in xfdesktop-settings (bug #10690)</li>
   <li>Fix strict aliasing issue</li>
   <li>Check for thumbnails in the new location</li>
   <li>Fix issues with icon resizing</li>
   <li>Refresh desktop on style changes</li>
   <li>Fix potential bugs found with static code analysis tools</li>
   <li>Fix keyboard cursor movement in the icon view</li>
   <li>Fix some runtime warnings</li>
   <li>Ensure a quit signal causes xfdesktop to shutdown</li>
   <li>Fix icon labels in RTL languages (bug #10604)</li>
   <li>Use get_folder_actions for clicks on the desktop itself</li>
   <li>Only use thunarx_menu_provider_get_file_actions (bug #10492)</li>
   <li>Add xfconf property to toggle the display of the add/remove workspace menu items in the middle click menu (bug #4278, bug #7337)</li>
   <li>Add an info bar to xfdesktop-settings so it is clearer on how to customize additional workspaces and monitors (bug #10460)</li>
   <li>Keyboard navigation has been improved in xfdesktop-settings</li>
   <li>Xfdesktop now uses the GApplication API to handle process uniqueness, message passing, and life cycle management.</li>
   <li>Improve how Xfdesktop transitions from the login manager to the initial wallpaper display</li>
   <li>Scale down over-sized icons in menus so they have a uniform appearance (Bug #10545, bug #10461)</li>
   <li>Move max-template-files xfconf property</li>
   <li>Remove old GLIB/GTK macro checks</li>
   <li>Update man page</li>
   <li>Wait for the window manager to prevent issues where the wallpaper and icons won't show up on additional screens during startup (bug #7769)</li>
   <li>Fix icon renames causing duplicate icons</li>
   <li>Fix icons for .desktop files with absolute paths</li>
   <li>Don't show hidden or backup files on the desktop (bug #9001)</li>
   <li>Fix a couple warning messages that happen when xfdesktop is shutdown while it's still starting up</li>
   <li>Improve how backdrops are chosen</li>
   <li>Wrong g_return_if_fail macro used</li>
   <li>Fix icon moves and deletions</li>
   <li>Don't cache the pixbufs in single workspace mode</li>
   <li>Clear all pixels from drag highlight box (bug #10450)</li>
   <li>Speed up template sub-menu loading code (bug #7834)</li>
   <li>Always move files from the trash (bug #3983)</li>
   <li>Fix template sub-menu loading code (bug #10138)</li>
   <li>Fix menu popups via the command line</li>
   <li>Use the Path key of desktop files if a path is not set (Bug #8741)</li>
   <li>Correctly display settings defaults</li>
   <li>Fix some memory leaks</li>
   <li>Include the chronological option in the combobox</li>
   <li>Allow the font size to go to 0.</li>
   <li>Tooltip options in xfdesktop-settings</li>
   <li>Add a chronological backdrop cycle option</li>
   <li>Additonal backdrop cycle options</li>
   <li>More removable device icon types (bug #4056)</li>
   <li>Add icons in an idle callback</li>
   <li>Right click issues persist (bug #9323)</li>
   <li>Migrate backdrop settings from previous versions (bug #10380)</li>
   <li>Set warnings as fatal</li>
   <li>Update manpage (bug #7576)</li>
   <li>Allow renaming of multiple icons</li>
   <li>No need to remove the thumbnail if we're removing the icon</li>
   <li>Fix for renames removing icons</li>
   <li>Use GdkPixbufLoader for backdrops</li>
   <li>Change how icon positions are saved (bug #9192)</li>
   <li>Avoid calling g_object_ref on NULL</li>
   <li>Fix for trash always showing empty on system startup (bug #9006)</li>
   <li>Fix warnings and obsolete macros</li>
   <li>Fix a critical error message on exit</li>
   <li>Fix compiling with --disable-desktop-icons</li>
   <li>Custom folder icons (bug #8326)</li>
   <li>Hold the cursor grab when presenting the menu (bug #9323)</li>
   <li>Use async functions when working with the dbus filemanager (9105)</li>
   <li>Lower update delay of icon size spinbutton (bug #9882)</li>
   <li>Unselect the desktop icon after activating it. (Bug #8640)</li>
   <li>Icon stays in place when renamed (bug #1678)</li>
   <li>Better icon pixbuf caching</li>
   <li>Make inactive workspace headers insensitive in color</li>
   <li>Clean up middle-click menu appearance</li>
   <li>Fill in the icon area better</li>
   <li>Use GIcons and add support for emblems on icons</li>
   <li>Align icon labels and allow them to be multi-line (bug #8646)</li>
   <li>Fix a crash when changing icon types</li>
   <li>Fix for CTRL + drag selections (bug #10275)</li>
   <li>More consistent icon placement (Bug #8814)</li>
   <li>Remove old migration code.</li>
   <li>Fix HTTP URL performance issue / wrong action proposed (Dennis Tomas)</li>
   <li>Decide on move/copy action before items have been dropped (Dennis Tomas)</li>
   <li>Clip overlapping backdrops (Bug #9052)</li>
   <li>Fix memory leaks</li>
   <li>Apply wallpaper to all workspaces option</li>
   <li>Port fix for bug #9892 from the xfce-4.10 branch (Evangelos Foutras)</li>
   <li>Thumbnail service support to xfdesktop-settings (Bug #6536)</li>
   <li>Improve the eject/unmount notifications (Bug #9845)</li>
   <li>xfdesktop supports per-workspace wallpapers (Bug #369)</li>
   <li>Add a tabs width of padding for tooltip text (Bug #9162)</li>
   <li>Add a signal handler for removable devices to update the icon when the theme is changed (Bug #8977) (Brad Hermanson)</li>
   <li>Add an unmount option and notifications when a device is removed (Bug #7610)</li>
   <li>Made changes so that DISABLE_DEPRECATED and GSEAL flags can be enabled.</li>
   <li>Fix hang when no backdrop image is selected (Bug #9892).</li>
   <li>Fix tiling for some images.</li>
   <li>Add a tabs width of padding for tooltip text (Bug #9162).</li>
   <li>Fix theming of removable devices'  icons (Bug #8977).</li>
   <li>SVG images are no longer pixilated when scaled up.</li>
   <li>Improve menu icon loading (Bug #8795).</li>
   <li>Fix background cycling (Bug #8962).</li>
   <li>Fix a crash when minimized window icons are resized (Bug #8963).</li>
   <li>Fix use-after-free in xfdesktop_regular_file_icon_peek_tooltip (Bug #9059).</li>
   <li>Translation updates:
  Arabic (ar), Basque (eu), Bulgarian (bg), Catalan (ca),
  Chinese (China) (zh_CN), Chinese (Hong Kong) (zh_HK),
  Chinese (Taiwan) (zh_TW), Croatian (hr), Czech (cs),
  Danish (da), Dutch (Flemish) (nl), English (Australia) (en_AU),
  English (United Kingdom) (en_GB), Estonian (et), French (fr),
  Galician (gl), German (de), Greek (el), Hebrew (he),
  Hungarian (hu), Icelandic (is), Indonesian (id), Italian (it),
  Japanese (ja), Kazakh (kk), Korean (ko), Lithuanian (lt),
  Malay (ms), Norwegian Bokmål (nb), Norwegian Nynorsk (nn),
  Occitan (post 1500) (oc), Persian (Iran) (fa_IR), Polish (pl),
  Portuguese (pt), Portuguese (Brazilian) (pt_BR), Romanian (ro),
  Russian (ru), Serbian (sr), Slovak (sk), Slovenian (sl),
  Spanish (Castilian) (es), Swedish (sv), Thai (th),
  Turkish (tr), Ukrainian (uk), Uyghur (ug), and Uzbek (uz).</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
   <li>Add a zoom_desktop xfconf setting</li>
   <li>Add corner tiling</li>
   <li>Add support for extended XSync counter</li>
   <li>Add support for GTK frame extents</li>
   <li>Add support for GTK hide titlebar on maximize</li>
   <li>Add support for NET_WM_STATE_FOCUSED</li>
   <li>Add titleless maximization feature</li>
   <li>Allow color substitution in themerc</li>
   <li>Allow cycling during drag'n drop</li>
   <li>Allow shadow under dock ARGB windows</li>
   <li>Allow tiling and workspace wrap on move</li>
   <li>Changed wireframe to cairo drawing when using the compositor</li>
   <li>Fix cycle vs. focus follow mouse</li>
   <li>Fix fullscreen mode not working correctly for QT apps)</li>
   <li>Fix gravity on configure request</li>
   <li>Fix keyboard shortcuts after keyboard layout changes</li>
   <li>Fix maximizing when window is tiled vertically or horizontally</li>
   <li>Fix maximum host name length.</li>
   <li>Fix opacity being reset on theme change</li>
   <li>Fix reparenting with compositor</li>
   <li>Fix selection with mouse in multi-monitor alt-tab dialog</li>
   <li>Fix size increment</li>
   <li>Limit parallel pointer moves before wrapping</li>
   <li>New default window decoration themes (including HDPI and xHDPI)</li>
   <li>On canceled move, restore all maximizations states</li>
   <li>Optionally remove frame on tiling as well</li>
   <li>Optionnally use window preview in tabwin</li>
   <li>Prevent CSD windows from being moved too far up</li>
   <li>Remove horizontal tyling on move</li>
   <li>Remove maximize button from non-resizable windows</li>
   <li>Remove restore-on-move option</li>
   <li>Send debug messages to a log file</li>
   <li>Update desktop geometry on xrandr events</li>
   <li>Use cairo wireframe for move/resize</li>
   <li>Use correct type on platforms where time_t is 64bits like OpenBSD</li>
   <li>Use source indication in activate window</li>
   <li>Use the correct drm/dri device on OpenBSD</li>
   <li>Workaround for NET_WORKAREA with multimonitor</li>
   <li>Improve auto-maximize fn to maximize windows which size is equal to the available size.</li>
   <li>Restore original window size after untiling (bug #8765).</li>
   <li>Add improved tab-win dialog.</li>
   <li>Remove unnecessary clipping of the rootPicture.</li>
   <li>If making a solid fill, use XRenderCreateSolidFill.</li>
   <li>Repaint the screen when background changes.</li>
   <li>Ignore when root atoms are unset.</li>
   <li>Implement zooming.</li>
   <li>Add tweak setting to toggle roll up feature (bug #10563).</li>
   <li>Disable roll up feature by default (bug #10563).</li>
   <li>Fix duplicated accelerators (bug #5256).</li>
   <li>Do not write empty session files.</li>
   <li>Optimize smart placement (bug #5785).</li>
   <li>Improvements in accelerator handling.</li>
   <li>Remove unmaintained translations.</li>
   <li>Make the xfwm4-settings dialog use less height.</li>
   <li>Fixup padding in keyboard shortcuts tab.</li>
   <li>Autotools updates.</li>
   <li>Add Vsync support for the compositor (bug #8898).</li>
   <li>Translation updates: Arabic, Azerbaijani, Belarusian, Bulgarian,
  Bengali (India), Catalan (Valencian), Czech, Danish, German,
  Dzongkha, Greek, English (United Kingdom), Spanish (Castilian),
  Basque, Persian, French, Gujarati, Hebrew, Hindi, Croatian,
  Hungarian, Indonesian, Icelandic, Italian, Georgian, Kazakh, Korean,
  Macedonian, Marathi, Malay, Dutch (Flemish), Polish, Portuguese,
  Portuguese (Brazilian), Russian, Slovak, Serbian, Tamil, Thai,
  Turkish, Uyghur, Ukrainian, Chinese (China), Chinese (Taiwan).</li>
</ul>

<h2>Theme Engine <em>(gtk-xfce-engine)</em></h2>
<ul>
   <li>Add new theme Xfce-flat</li>
   <li>Fix invalid free on theme parse error</li>
   <li>Added default colors to xfce basic theme</li>
   <li>Fix uinitialized value (bug #10877)</li>
   <li>Support trough-side-details</li>
   <li>Added flat_border and focus_color style properties</li>
   <li>More rendering improvements</li>
   <li>Gtk+-3 support has been stopped</li>
   <li>Don't leak a graduent pattern at each draw (bug #8521).</li>
   <li>Default themes don't support Gtk+-3.4.</li>
</ul>

<h2>Power Manager <em>(xfce4-power-manager)</em></h2>
<ul>
   <li>Handle autotools m4 stuff properly</li>
   <li>Plug a memory leak (Bug #11538)</li>
   <li>Add support for ConsoleKit2</li>
   <li>Correctly check for hibernation permissions (bug #11529)</li>
   <li>Use sysctl(3) to get or set brightness level on FreeBSD and DragonFly systems</li>
   <li>Light Locker Integration (Bug #11488)</li>
   <li>Add gmux_backlight as supported interface (bug #11406)</li>
   <li>Reformat code in xfpm_power_get_property</li>
   <li>Reformat code in xfpm_power_set_property</li>
   <li>Shorten label for system inactivity time (bug #11129)</li>
   <li>Initially disable DPMS widgets when not handling DPMS</li>
   <li>Use translated device type for unknown devices (bug #11217)</li>
   <li>Fix for critical battery action (Bug #11237)</li>
   <li>Add symlinks for UPS-charged icon (Debian Bug #762500)</li>
   <li>xrandr brightness: Check for eDP devices too (bug #11308)</li>
   <li>Fix for panel icon not always updating depending on the version of UPower in use.</li>
   <li>Fix handle lid switch with loginD (bug #11160) Fixed by Simon P.</li>
   <li>Conditionally use xfce_dialog_show_help_with_version</li>
   <li>Add support for lxpanel 0.7+ (bug #11108)</li>
   <li>Yves-Alexis Perez fixed the logic of xfconf logind inhibition keys</li>
   <li>plugin: update desktop file install location</li>
   <li>plugin: Fix crash when devices (dis)connect</li>
   <li>Point to versioned help docs</li>
   <li>Add DragonflyBSD to host check</li>
   <li>Only use batteries for current charge state that are used for power supply</li>
   <li>Sync the brightness slider with blank and DPMS settings</li>
   <li>plugin: Use the brightness-slider-min-level for the scroll wheel</li>
   <li>Draw a bubble with a question mark if the device state is unknown</li>
   <li>Keep blank and DPMS timeout settings in order</li>
   <li>Fix typos in debug messages</li>
   <li>Update AppData info about the panel plugins</li>
   <li>Never try to display the -missing icons</li>
   <li>Add timestamp for 1.3.2 release to AppData</li>
   <li>Add trailing colons in labels for Comboboxes and Spinbuttons</li>
   <li>Rename"Battery Indicator Plugin" to "Power Manager Plugin"</li>
   <li>Xfce4-power-manager does not rely on special device icons anymore hat illustrate the load-status.</li>
   <li>Fix crash with slider on 32bit systems (Bug #11076)</li>
   <li>Fix version number output on the commandline</li>
   <li>Add dedicated icons for the keyboard brightness notifications</li>
   <li>The battery plugin can now be built as an LXDE plugin (bug #10929).</li>
   <li>The brightness plugin has been merged into the battery indicator plugin.</li>
   <li>Xfce4-power-manager has changed how the xfce4-pm-helper application is used.</li>
   <li>Simon P fixed a memory corruption crash (bug #11018).</li>
   <li>OnlyShowIn was changed to a NotShowIn for the .desktop files (bug #11009)</li>
   <li>Selecting a device in the plugin brings up the details in the settings dialog.</li>
   <li>Improve strings in devices tab and add percentage (Bug #6652)</li>
   <li>Fork before gtk/dbus init</li>
   <li>Andrzej Added support for multi-row panel layouts for the plugin</li>
   <li>Restore screen power after sleep (bug #10535)</li>
   <li>Samuli Suominen fixed suspend/hibernate with UPower 0.9.23 (bug #10931)</li>
   <li>Carl Simonson added a notification popup when changing keyboard brightness</li>
   <li>Minumum UPower requirement was lowere to 0.9.7 to support FreeBSD</li>
   <li>Devices tab flickers on update (bug #10937)</li>
   <li>Improve lid-action strings (Bug #6515)</li>
   <li>Carl Simonson added a reasonable step value for keyboard brightness</li>
   <li>Let xfpm control X11's screensaver extension</li>
   <li>New panel plugin to monitor battery and device charge levels</li>
   <li>The settings dialog has been completely restructured for better oversight.</li>
   <li>Fix brightness level from glong to gint32 to match RandR property (Martin Matuska).</li>
   <li>Fix incorrect check for suspend permissions (bug #8438) (Lionel Le Folgoc)</li>
   <li>Port xfpm to libupower-glib / add support for upower-0.99.0 API (Stefan Seyfried)</li>
   <li>Add shutdown/reboot functionality for systemd (bug #10167) (Andreas Müller and Guido Berhoerster)</li>
   <li>Don't allow systemd to handle suspend/hibernate events (Mikhail Efremov)</li>
   <li>Add support for logind suspend/resume (bug #9963)</li>
   <li>Allow individual inhibition of systemd events (Sean Davis)</li>
   <li>Get rid of XfpmDeviceState and XfpmDeviceType (Stefan Seyfried)</li>
   <li>xfpm_backlight_button_pressed_cb: fix popup display (Stefan Seyfried)</li>
   <li>Fix empty systray icon in some panels on battery removal and addition (Henry Gebhardt)</li>
   <li>Display power percentage in the device details (Pascal de Bruijn)</li>
   <li>Add current percentage of batteries to device details (Stefan Seyfried)</li>
   <li>do not show an icon for HID devices (Stefan Seyfried)</li>
   <li>Fix status icon for devices other than battery and ups (bug #8188) (Daniel Schubert and Dean Montgomery)</li>
   <li>Add support for keyboard backlight control (bug #10470) (Sonal Santan)</li>
   <li>Don't call g_thread_init on newer versions of glib.</li>
   <li>Fix typo in xfpm-power.c, patch written by Benjamin Kerensa</li>
   <li>Fix typo in error message, patch written by Ian</li>
   <li>Updates from the pre-4.8 panel registration method for panel plugins</li>
   <li>Update xfce4-session lock-screen setting to by in sync with xfce4-session</li>
   <li>Point to the online docs for xfpm's help</li>
   <li>Add a option for network manager sleep (bug #10702)</li>
   <li>Warn when no lock tool succeeded (bug #6413)</li>
   <li>Add support for suspend/hibernate via an xfce4-pm-helper since it was dropped in UPower 0.99. This way suspend/hibernate continues to work for the user as expected.</li>
   <li>Show the settings menu outside of XFCE (Julien Lavergne)</li>
   <li>Fix an untranslatable string in battery-indicator-plugin (Masato Hashimoto)</li>
   <li>Remove custom OSD brightness popup, use libnotify instead (Jannis Pohlmann)</li>
   <li>Translation updates: Arabic (ar), Asturian (ast), Basque (eu),
 Bulgarian (bg), Catalan (ca), Chinese (China) (zh_CN),
 Chinese (Hong Kong) (zh_HK), Chinese (Taiwan) (zh_TW),
 Croatian (hr), Czech (cs), Danish (da), Dutch (Flemish) (nl),
 English (Australia) (en_AU), English (United Kingdom) (en_GB),
 Estonian (et), Finnish (fi), French (fr), Galician (gl),
 German (de), Greek (el), Hebrew (he), Hungarian (hu),
 Indonesian (id), Italian (it), Japanese (ja), Kazakh (kk),
 Korean (ko), Lithuanian (lt), Malay (ms), Norwegian Bokmål (nb),
 Norwegian Nynorsk (nn), Occitan (post 1500) (oc),
 Panjabi (Punjabi) (pa), Polish (pl), Portuguese (pt),
 Portuguese (Brazilian) (pt_BR), Romanian (ro), Russian (ru),
 Serbian (sr), Sinhala (si), Slovak (sk), Slovenian (sl),
 Swedish (sv), Spanish (Castilian) (es), Telugu (te), Thai (th),
 Turkish (tr), Ukrainian (uk), Uyghur (ug), Vietnamese (vi)</li>
</ul>
<!--
<h2>Volume Manager <em>(thunar-volman)</em></h2>
<ul>
</ul>
-->
