<?php $head['title'] = 'Xfce 4.14 Changelog'; ?>

<h1>Xfce 4.14 Changelog</h1>

<p>Note: the changelogs shown here are since the version of the components that shipped with Xfce 4.12.</p>

<h2>Dependency changes</h2>
<ul>
  <li>GTK+ dependency &gt;= 3.22, GLib &gt;= 2.42 and GDBus.</li>
  <li>Exo has an optional dependency on GTK2.</li>
  <li>Garcon has an optional dependency on GTK2.</li>
  <li>Libxfce4ui has an optional dependency on GTK2.</li>
  <li>Xfce4-panel has an optional dependency on GTK2.</li>
</ul>

<h2>Development Tools <em>(xfce4-dev-tools)</em></h2>
<ul>
  <li>Remove svn support in xdt-autogen</li>
  <li>Update xdt-csource with latest exo-csource modifications</li>
  <li>No -Wshadow flag for enable_debug=full (bug #11637)</li>
</ul>

<h2>Utility Library <em>(libxfce4util)</em></h2>
<ul>
  <li>Better documentation processing</li>
  <li>Fix GObject Introspection language bindings</li>
  <li>Add support for rc files as symlinks</li>
  <li>Avoid excessive type-casting</li>
  <li>Fix documentation warnings</li>
  <li>Fix some gtk-doc warnings</li>
  <li>Migrate away from sgml templates for documentation</li>
  <li>Fix abicheck to handle ppc64 architecture</li>
  <li>Add a super basic python example</li>
  <li>Make sure introspection users find the header file in the correct spot.</li>
  <li>Make sure our gir/vapi gets the Xfce namespace, and not 'xfce'.</li>
  <li>Add VAPIGEN for vala binding generation.</li>
  <li>Add xfce_kiosk_get_type to abi symbols</li>
  <li>Fix some autotools warnings, default debug to yes</li>
  <li>Add support for GOBJECT-INTROSPECTION (Bug #12159)</li>
  <li>Allow everyone to build introspection files (Bug #13638)</li>
  <li>Allow language-specific keys before language-neutral ones (Bug #13979)</li>
  <li>Translation updates: Albanian, Arabic, Asturian, Basque, Belarusian, Bengali, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch (Flemish), English (Australia), English (Great Britain), Estonian, Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Italian, Japanese, Kazakh, Korean, Latvian, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan, Panjabi, Polish, Portuguese, Portuguese (Brazilian), Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swedish, Telugu, Thai, Turkish, Ukrainian, Urdu, Urdu (Pakistan), Uyghur, Vietnamese.</li>
</ul>

<h2>Widget Library <em>(libxfce4ui)</em></h2>
<ul>
  <li>Add garcon to the list of components</li>
  <li>Add api indices in gtk-doc</li>
  <li>feat: Switch to Gtk3 default, Gtk2 Optional</li>
  <li>Better documentation processing</li>
  <li>Fix the dialog widget placement in Gtk3</li>
  <li>Export the glade catalog for Gtk3</li>
  <li>Set the XfceHeading style class to enable theming in Gtk3.20</li>
  <li>Fix build error with –disable-gtk3 (Bug #12648)</li>
  <li>Remove exo dependancy (Bug #13326)</li>
  <li>Let autotools find and invoke glib-compile-resources (Bug #13326)</li>
  <li>fix: add libxfce4ui_get_resource to abi check symbols (Bug #13326)</li>
  <li>Add support for GOBJECT-INTROSPECTION (Bug #13461)</li>
  <li>Attempt to fix missing gresource file (Bug #13705)</li>
  <li>Fix gladeui2 path detection (Bug #13944)</li>
  <li>Add Ctrl + Alt + t as default shortcut for terminal (Bug #14510)</li>
  <li>Add PrintScreen as shortcut for xfce4-screenshooter (Bug #14524)</li>
  <li>Remove styling of emails in about dialog (Bug #14638)</li>
  <li>Install icons when gladeui2 is set (Bug #15207)</li>
  <li>Translation updates: Albanian, Arabic, Asturian, Basque, Belarusian, Bengali, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch (Flemish), English (Australia), English (Great Britain), Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Italian, Japanese, Kazakh, Korean, Latvian, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan, Polish, Portuguese, Portuguese (Brazilian), Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swedish, Telugu, Thai, Turkish, Ukrainian, Urdu, Urdu (Pakistan), Uyghur.</li>
</ul>

<h2>Extension Library <em>(exo)</em></h2>
<ul>
  <li>Appearance: Improved spacing and alignment in the Preferred Applications dialog</li>
  <li>ExoIconChooserDialog: Dropped deprecated International icon context, add Stock icon context</li>
  <li>ExoIconChooserDialog: Increased icon chooser context title length to support long translations</li>
  <li>ExoIconChooserDialog: Skip symbolic icons to boost performance</li>
  <li>Feature: exo-csource: Add --output flag to write output to a file (Bug #12901)</li>
  <li>Feature: exo-helper: Add --query flag to query the preferred application (Bug #8579)</li>
  <li>Feature: exo-helper: Enable dismissal of "Failed to open default" dialogs</li>
  <li>Feature: ExoString: Added new exo_str_is_flag</li>
  <li>Feature: GTK Extensions: Added new exo_gtk_dialog_get_action_area and exo_gtk_dialog_add_secondary_button</li>
  <li>Fix: Add google-chrome-stable binary for the google-chrome helper (Bug #13876)</li>
  <li>Fix: Discard preferred application selection if dialog is canceled (Bug #8802)</li>
  <li>Fix: exo-helper: Use full custom command path (Bug #4093)</li>
  <li>Fix: exo-launch: Pass flags to preferred application (Bug #9427)</li>
  <li>Fix: Hide exo launchers from GNOME Software to prevent accidental uninstallation (Bug #14588)</li>
  <li>Fix: Improved handling of mimeapps.list (Bugs #15046, #15087, #15238)</li>
  <li>Fix: Synchronize default applications to gio-mime (Bug #14633)</li>
  <li>Fix: Use the standard shared thumbnails directory (Bug #14799)</li>
  <li>Icons: Replaced gnome-*, internet-mail, missing-image, user-bookmarks icons with FreeDesktop.org standard icons</li>
  <li>Icons: Stopped shipping generic category icons, these are now standard (Bug #9992)</li>
  <li>Helpers (File Manager): Added PCManFM-Qt</li>
  <li>Helpers (Mail Reader): Added Geary; Dropped Opera Mail</li>
  <li>Helpers (Terminal Emulator): Added Terminator</li>
  <li>Helpers (Web Browser): Added Brave, Google Chrome</li>
  <li>Translation updates: Albanian, Amharic, Arabic, Armenian, Armenian (Armenia), Asturian, Basque, Belarusian, Bengali, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch, English (Australia), English (United Kingdom), Estonian, Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Interlingue, Italian, Japanese, Kannada, Kazakh, Korean, Latvian, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan, Occitan (post 1500), Panjabi, Panjabi (Punjabi), Polish, Portuguese, Portuguese (Brazil), Romanian, Russian, Serbian, Sinhala, Slovak, Slovenian, Spanish, Swedish, Telugu, Thai, Turkish, Uighur, Ukrainian, Urdu, Urdu (Pakistan), Vietnamese.</li>
</ul>

<h2>Menu Library <em>(garcon)</em></h2>
<ul>
  <li>Fix missing menus when all items are in submenus (Bug #11801)</li>
  <li>Fix assertion 'GTK_IS_WIDGET (widget)' failed</li>
  <li>Don't add a placeholder menu (Bug #11626)</li>
  <li>Added support for desktop actions (Bug #11268)</li>
  <li>garcon-gtk: Add an option to edit launchers</li>
  <li>Fix left-alignment of labels in menuitems</li>
  <li>Make building garcon-gtk2 optional</li>
  <li>Drop libgarcon-2</li>
  <li>Remove extraneous libxfce4ui-1 check</li>
  <li>Fix some autogen warnings</li>
  <li>Fix make distcheck build</li>
  <li>Fix documentation generation</li>
  <li>Added support for freedesktop Keyword item (Bug #10683)</li>
  <li>Replace hash table for application actions with a list</li>
  <li>Decrement allocation counter on item unref (Bug #12700)</li>
  <li>Support composite XDG_CURRENT_DESKTOP (Bug #14137)</li>
  <li>Fix some menu icons are too big (Bug #13785)</li>
  <li>Fix g_type_class_add_private deprecation in recent GLib</li>
  <li>Fix use after free crash (Bug #15679)</li>
  <li>Translation updates: Albanian, Amharic, Armenian, Asturian, Basque, Bengali, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch, English (Australia), English (United Kingdom), Esperanto, Estonian, Finnish, French, Galician, German, Greek, Hebrew, Hindi, Hungarian, Icelandic, Indonesian, Italian, Japanese, Kazakh, Korean, Lithuanian, Malay, Norwegian, Norwegian Bokmål, Norwegian Nynorsk, Occitan (post 1500), Polish, Portuguese, Portuguese (Brazil), Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swedish, Telugu, Thai, Turkish, Uighur, Ukrainian, Uzbek, Uzbek (Latin).</li>
</ul>

<h2>File Manager <em>(thunar)</em></h2>
<ul>
  <li>Feature: Add Ctrl+= as alternative accelerator for Zoom In (Bug #14586)</li>
  <li>Feature: Add custom date format (Bug #14527)</li>
  <li>Feature: Add GObject-Introspection support for thunarx-3</li>
  <li>Feature: Add more options for thumbnail size (Bug #14451)</li>
  <li>Feature: Add preference to open new thunar instances as tabs (Bug #13314)</li>
  <li>Feature: Add preference to show file sizes in bytes in detailed view (Bug #11690)</li>
  <li>Feature: Add preference to toggle 'delete' in the context menu (Bug #13327)</li>
  <li>Feature: Add support for custom accelerators with custom actions</li>
  <li>Feature: Add support for folder.jpg (Bug #14576)</li>
  <li>Feature: Add support for org.freedesktop.FileManager1 (Bug #12414)</li>
  <li>Feature: Allow tab switching with Ctrl + PgUp/PgDown (Bug #9585)</li>
  <li>Feature: Show numeric (%) progress in file operation dialog (Bug #14102)</li>
  <li>API: Bump thunarx to version 3</li>
  <li>API: Job is now optional for thunar_io_scan_directory</li>
  <li>API: Update thunarx documentation and fix its generation</li>
  <li>Appearance: Improve Pathbar style for Location Selector</li>
  <li>Appearance: Many minor styling fixes</li>
  <li>Appearance: Refresh folder-copy and -move icons from Adwaita icon theme</li>
  <li>Appearance: Use symbolic icon for edit button in pathbar</li>
  <li>General: Add a systemd user unit for the two D-Bus session services (Bug #12236)</li>
  <li>General: Add infobox to preferences in order to inform about missing gvfs</li>
  <li>General: Add the right-click menu item "Open with" as well for folders</li>
  <li>General: Convert AppData file to AppStream (Bug #14037)</li>
  <li>General: Hide unneeded context menu entries for folder "Trash" in tree view</li>
  <li>General: Introduce ellipsis to Detailed View filename</li>
  <li>General: Make tree-view "Move to Trash" icon the same as in main pane</li>
  <li>General: Show exact size in bytes in directory properties dialog (Bug #12858)</li>
  <li>General: Show file size in binary units by default (Bug #14653)</li>
  <li>Fix: "Open With" custom command doesn't escape the path (Bug #10883)</li>
  <li>Fix: 100% CPU utilization when the parent directory is not readable (Bug #14900)</li>
  <li>Fix: 8 second delay on logout when there is an open thunar window (Bug #15008)</li>
  <li>Fix: Add support for CTRL+Z in rename dialog (Bug #14956)</li>
  <li>Fix: Always show the executable checkbox (Bug #15605)</li>
  <li>Fix: Application freeze when switching to tree-view (Bug #14960)</li>
  <li>Fix: Build without HAVE_GIO_UNIX (Bug #12863)</li>
  <li>Fix: Correctly check if destination is writable (Bug #14718)</li>
  <li>Fix: Crash after clicking when XDG_SESSION_TYPE isn't set (Bug #15366)</li>
  <li>Fix: Crash after updating thunar if old thunar deamon is still running</li>
  <li>Fix: Crash due to passing null to strcmp (FreeBSD) (Bug #15059)</li>
  <li>Fix: Crash in thunar_file_is_gfile_ancestor (Bug #14202)</li>
  <li>Fix: Crash in tree-view when multiple windows are open (Bug #14714)</li>
  <li>Fix: Crash on file operations (Bug #14281)</li>
  <li>Fix: Crash on unavailable file move copy (Bug #14056)</li>
  <li>Fix: Crash on unmounted volume in tree pane right click (Bug #15452)</li>
  <li>Fix: Crash on USB-flash connection (Bug #13813)</li>
  <li>Fix: Crash when thumbnailer is under heavy load after opening many tabs (Bug #13756)</li>
  <li>Fix: Crash while clicking or typing when using wayland (Bug #14461)</li>
  <li>Fix: Creation of .desktop file when dropping URL into folder (Bug #14239)</li>
  <li>Fix: Custom actions do not work for remote locations (Bugs #7652, #7305)</li>
  <li>Fix: Custom actions forget keyboard shortcuts (Bug #14617)</li>
  <li>Fix: Custom actions without an icon could caused the file manager to crash (Bug #14464)</li>
  <li>Fix: Deactivate "Move to Trash" menu entry on volumes without trash (Bug #15352)</li>
  <li>Fix: Delete key in tree-view can delete the user home folder (Bug #15095)</li>
  <li>Fix: Directories opened in a previous session are not recovered (Bug #14969)</li>
  <li>Fix: Do not check G_FILE_ATTRIBUTE_ACCESS_CAN_WRITE anymore (Bug #15367)</li>
  <li>Fix: Do not register "send to" as last used app (Bug #14118)</li>
  <li>Fix: Do not restart the folder monitor on each refresh (Bug #13364)</li>
  <li>Fix: Do not translate "Trash" files and folders (Bug #14211)</li>
  <li>Fix: Expand scroll window of file operation progress dialog (Bug #14946)</li>
  <li>Fix: Failure to scan for file templates if the Templates directory is a symbolic link (Bug #12032)</li>
  <li>Fix: Inconsistency between thumbnail view and details box (Bug #12435)</li>
  <li>Fix: Killing thunar kills all launched sub-processes (Bug #14277)</li>
  <li>Fix: Load templates synchronously (Bug #15200)</li>
  <li>Fix: Make toggle for the delete entry affect tree-view side pane too</li>
  <li>Fix: Man page incorrectly suggests '-v' instead of '-V'</li>
  <li>Fix: Messed up row-height with disabled "automatically expand columns as needed" in detailed view. (Bug #14548)</li>
  <li>Fix: Missing codegen for "make dist" in thunar-tpa (Bug #14190)</li>
  <li>Fix: New bookmarks added to sidebar when dragging files (Bug #14921)</li>
  <li>Fix: No bool argument available for dbus signal "TrashChanged"</li>
  <li>Fix: Only show additional "real_name" of user in detailed_view if it is different from "name" (Bug #13648)</li>
  <li>Fix: Pathbar buttons are now resized on folder rename (Bug #15024)</li>
  <li>Fix: Pathbar to on middle click open folders in new tabs (Bug #15302)</li>
  <li>Fix: Potential buffer overflow (Bug #12444)</li>
  <li>Fix: Queued context menu popup</li>
  <li>Fix: Removed start limit from Bulk Renamer to rename by number (Bug #14437)</li>
  <li>Fix: Replace Trash action with Delete as needed (Bug #15352)</li>
  <li>Fix: Restore "Empty File" menu icon (Bug #15540)</li>
  <li>Fix: Restoring non-empty folders leaves copy in Trash (Bug #13535)</li>
  <li>Fix: Right mouse click will not display icons for custom actions (Bug #14685)</li>
  <li>Fix: Session startup priority</li>
  <li>Fix: Setting wallpaper on GNOME</li>
  <li>Fix: Sometimes mounting USB drives with root permission (Bug #14719)</li>
  <li>Fix: Spinner still active after user cancels to mount volume (Bug #14536)</li>
  <li>Fix: Standard view border during drag and drop (Bug #14523)</li>
  <li>Fix: thunarx-provider-module.h missing inside tar.bz2 file created by "make dist" (Bug #14070)</li>
  <li>Fix: tree view jumps (scrolls) when clicking on a directory (Bug #15174)</li>
  <li>Fix: Uncritical "use after free"</li>
  <li>Fix: Unexpected overshoot fade on icon view</li>
  <li>Fix: Update mimeapps.list only when necessary (Bug #15533)</li>
  <li>Fix: Update progress when deleting files (Bug #14102)</li>
  <li>Fix: Use display_name instead of basename to display filenames (Bug #13532) </li>
  <li>Fix: Use e.g. instead of i.e. (Bug #14035)</li>
  <li>Fix: XML declaratation in uca.xml (Bug #13623)</li>
  <li>Strings: Change inappropriate word "Sentence" in upper-/lowercase renamer (Bug #9483)</li>
  <li>Strings: Improve description of custom action command parameters (Bug #14720)</li>
  <li>Strings: Rename "Camelcase" to "Title Case" (Bug #15579)</li>
  <li>thunar-sendto-email.desktop: use xdg mail-send icon</li>
  <li>URLs: Replace links from "http://thunar.xfce.org/" to "https://docs.xfce.org/xfce/thunar/start"</li>
  <li>URLs: Use https where possible</li>
  <li>Translation updates: Albanian, Amharic, Arabic, Armenian, Armenian (Armenia), Asturian, Bangla, Basque, Belarusian, Bengali, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch, English (Australia), English (United Kingdom), Esperanto, Estonian, Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Interlingue, Italian, Japanese, Kazakh, Korean, Latvian, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan, Persian (Iran), Polish, Portuguese, Portuguese (Brazil), Punjabi, Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swedish, Telugu, Thai, Turkish, Ukrainian, Urdu, Urdu (Pakistan), Uyghur, Vietnamese.</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>
  <li>Feature: Add hide category preference (Bug #14893)</li>
  <li>Feature: Add single window option</li>
  <li>Fix: Change default action conflicting pattern (Bug #12103)</li>
  <li>Fix: Crash when toggling bookmarks (Bug #14134)</li>
  <li>Fix: Do not wrap when Text beside icons is enabled (Bug #8490)</li>
  <li>Fix: Ignore menu items without name (Bug #14655)</li>
  <li>Fix: Preferences button height</li>
  <li>Fix: Save command in history even if it matches Exec (Bug #9023)</li>
  <li>Fix: When expanded, launch apps with single enter press (Bug #14469)</li>
  <li>General: Allow case-insensitive search</li>
  <li>General: Convert AppData file to AppStream (Bug #14624)</li>
  <li>General: Fuzzy search matching (Bug #10393)</li>
  <li>General: Icon view: reduce padding/spacing with small icons</li>
  <li>General: Improve app sorting</li>
  <li>General: Improve keyboard navigation in List View</li>
  <li>General: Improve spacing and resizing (Bug #14651)</li>
  <li>General: Improve xfce4-run comment (Bug #15473)</li>
  <li>General: Update app icons to new standard names</li>
  <li>Translation updates: Albanian, Amharic, Arabic, Armenian, Armenian (Armenia), Asturian, Basque, Belarusian, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch, Dutch (Flemish), English (Australia), English (United Kingdom), Estonian, Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Interlingue, Italian, Japanese, Kazakh, Korean, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan, Polish, Portuguese, Portuguese (Brazil), Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swedish, Telugu, Thai, Turkish, Ukrainian, Uyghur, Vietnamese.</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>Feature: Add per-panel setting "icon-size"</li>
  <li>Feature: Add support for gobject-introspection (Vidar Haarr)</li>
  <li>Feature: Continued support for Gtk2 plugins</li>
  <li>Feature: Drop the panel's welcome dialog (Bug #14388)</li>
  <li>Feature: Make vala and gobject-introspection optional</li>
  <li>Feature: Support for the "primary" monitor option in RandR</li>
  <li>Feature: systray: Allow ordering of items (Bug #11929)</li>
  <li>Feature: tasklist: Add styleclass to make life easier for themers</li>
  <li>Update: Update default panel layout</li>
  <li>Update: actions: Add support for dm-tool</li>
  <li>Update: appearance: Hide systray frame in default panel config</li>
  <li>Update: clock: Add short weekday and date to default clock layout (Bug #15456)</li>
  <li>Update: prefs: Improve position of panel profiles button (Bug #15657)</li>
  <li>Update: tic-tac-toe: Add mnemonic to Close button</li>
  <li>Fix: actions: GPtrArray usage (Bug #13981)</li>
  <li>Fix: actions: Show Hybrid Sleep option (Bug #12771)</li>
  <li>Fix: actions: Use a different icon for hybrid sleep when possible (Bug #15204)</li>
  <li>Fix: appearance: Add orientation-related style classes for improved theming</li>
  <li>Fix: appearance: Ensure the orientation style classes are always applied</li>
  <li>Fix: appearance: Make the settings dialog more HIG compliant</li>
  <li>Fix: appearance: Support alpha-transparent background images (Bug #14850)</li>
  <li>Fix: appmenu: Add support for other menu editors (Bug #11684)</li>
  <li>Fix: arrow-button: Allow connect_after signals on draw</li>
  <li>Fix: arrow-button: Remove timeout on dispose (Bug #15696)</li>
  <li>Fix: builds: Compiler error -Wcast-function-type (GCC 8)</li>
  <li>Fix: builds: Compiler error 'This use of "defined" may not be portable'</li>
  <li>Fix: builds: datarootdir declaration in .pc files (Bug #13589)</li>
  <li>Fix: builds: make distcheck (But #14040)</li>
  <li>Fix: clock: Add a validator for digital custom formats (Bug #11527)</li>
  <li>Fix: clock: Improve discoverability of tooltip help-texts (Bug #11708)</li>
  <li>Fix: clock: Invalid datetime formats appearing in list (Bug #11527)</li>
  <li>Fix: clock: Make the default date and time format translatable (Bug #9637)</li>
  <li>Fix: clock: Use freedesktop.org compliant icon (Bug #13779)</li>
  <li>Fix: directory-menu: Plugin menu autohide behaviour</li>
  <li>Fix: directory-menu: Use natural order for sorting (Bug #15413)</li>
  <li>Fix: docs: Improve gtkdoc</li>
  <li>Fix: general: Anchors for gtk_menu_popup_at_widget (Bug #14803)</li>
  <li>Fix: general: Correctly initialize return value (Bug #10873)</li>
  <li>Fix: general: DND between external plugins (Bug #13687)</li>
  <li>Fix: general: Make double-click add plugin in the "Add item" dialog (Bug #9784)</li>
  <li>Fix: general: Make sure panel plugin icons are not clipped (LP #1756608)</li>
  <li>Fix: general: Pass socket id to D-Bus service to embed settings window (Bug #13854)</li>
  <li>Fix: general: Struts on the bottom and right of the screen (Bug #14886)</li>
  <li>Fix: general: Wrapper crash on unknown properties (Bug #13614)</li>
  <li>Fix: icons: Missing icons with Adwaita icon theme (Bug #14133)</li>
  <li>Fix: icons: Use fd.org terminal icon name (Bug #13592)</li>
  <li>Fix: launcher: Add 'New Link' button to properties (Bug #14855)</li>
  <li>Fix: launcher: Empty button in remove launcher dialog (Bug #13962)</li>
  <li>Fix: launcher: Make sure the appropriate icon size is used</li>
  <li>Fix: launcher: Plugin sizing improvements</li>
  <li>Fix: launcher: Rely on icon-size provided by panel</li>
  <li>Fix: launcher: Resizing of pixbuf based icons (Bug #14138)</li>
  <li>Fix: launcher: Support for custom images</li>
  <li>Fix: launcher: Tooltip icon size (Bugs #14774, #15319)</li>
  <li>Fix: libxfce4panel: Arrow button size improvements</li>
  <li>Fix: pager: Ensure bg color is set correctly (Bug #15690)</li>
  <li>Fix: panel-window: Set struts with monitor scaling</li>
  <li>Fix: prefs: Add missing mnemonic accelerators (Bug #15652)</li>
  <li>Fix: prefs: Correct capitalization of labels (Bug #15651)</li>
  <li>Fix: prefs: Crash on removing certain plugins (Bug #14418)</li>
  <li>Fix: prefs: Improve window title (Bug #15653)</li>
  <li>Fix: prefs: Make "Automatic" the default selection in the panel config dialog</li>
  <li>Fix: prefs: Make compositor info a GtkInfoBar, add "configure" button</li>
  <li>Fix: prefs: Set default panel-2 size of default settings</li>
  <li>Fix: separator: Use symbolic icon for more clarity (Bug #15359)</li>
  <li>Fix: show-desktop: Toggle also when DND-ing (Bug #15654)</li>
  <li>Fix: systray: Add option to display icons with square sizing (Bug #12093)</li>
  <li>Fix: systray: Alignment of single non-square items (Bug #9095)</li>
  <li>Fix: systray: Crash when systray is empty (Bug #13927)</li>
  <li>Fix: systray: Do not lookup hash table for null keys (Bug #11929)</li>
  <li>Fix: tasklist: Activate parent windows (Bug #15307)</li>
  <li>Fix: tasklist: Add 'group-button' styleclass</li>
  <li>Fix: tasklist: Add fallback for missing window icons (Bug #15511)</li>
  <li>Fix: tasklist: Alignment of labels when orientation is changed (Bug #13864)</li>
  <li>Fix: tasklist: Allow to hide label decorations (Bug #10546)</li>
  <li>Fix: tasklist: Avoid draw signal loop</li>
  <li>Fix: tasklist: Define cosmetic default padding for images (Bug #13865)</li>
  <li>Fix: tasklist: Do not listen for monitor changes in the plugin (Bug #10725)</li>
  <li>Fix: tasklist: Do not show actionsmenu in grouped windows (Bug #15622)</li>
  <li>Fix: tasklist: Draw grouped windows count indicator (Bug #10844)</li>
  <li>Fix: tasklist: Ensure pressed buttons with open menus</li>
  <li>Fix: tasklist: Keep groupbutton active after closing menu</li>
  <li>Fix: tasklist: Make all-minimized group buttons translucent (Bug #10862)</li>
  <li>Fix: tasklist: Make grouped buttons active (Bug #9129)</li>
  <li>Fix: tasklist: Make sure icons in the group menu are 16px</li>
  <li>Fix: tasklist: Only base bg color of group indicator on Gtk theme</li>
  <li>Fix: tasklist: Overlapping vertical window titles (Bug #14901)</li>
  <li>Fix: tasklist: Position of group indicator in vertical mode</li>
  <li>Fix: tasklist: Replace exo-lucency with gtkcss</li>
  <li>Fix: tasklist: Scrolling to cycle through open windows (Bug #13789)</li>
  <li>Fix: tasklist: Support for group-button states</li>
  <li>Fix: tasklist: Switch from wnck* icons to standard names</li>
  <li>Fix: tasklist: Urgency blinking for group buttons (Bug #6904)</li>
  <li>Fix: tasklist: Use Gdk to to determine which monitor contains a window</li>
  <li>Fix: tic-tac-toe: Avoid use-after-free/double-free (Bug #15649)</li>
  <li>Fix: translations: Make a couple of strings translatable (Bug #14338)</li>
  <li>Fix: translations: Make former GtkStock dialog buttons translateable (Bug #14338)</li>
  <li>Fix: usability: Add more accelerators to dialog buttons (Bug #15490)</li>
  <li>Fix: usability: Move "Separator" to the top of the "Add New Items..." menu (Bug #14086)</li>
  <li>Fix: windowmenu: Icon size in menu</li>
  <li>Translation updates: Albanian, Arabic, Armenian (Armenia), Asturian, Basque, Belarusian, Bengali, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch, Dutch (Flemish), English (Australia), English (Great Britain), Estonian, Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Italian, Japanese, Kazakh, Korean, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan, Panjabi, Polish, Portuguese, Portuguese (Brazil), Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swedish, Telugu, Thai, Turkish, Ukrainian, Uyghur, Vietnamese.</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
  <li>Feature: Add a switch user button to the logout dialog (Bug #10345)</li>
  <li>Feature: Add/Edit Application Autostart Entries (Bug #13271)</li>
  <li>Feature: Drop splash screens</li>
  <li>Feature: Hybrid Sleep support - "hibernate" and suspend the system</li>
  <li>Feature: Introduce priority-group startup for FailSafe Session</li>
  <li>Feature: Optionally run commands on logout, suspend etc. (Bug #10172)</li>
  <li>Feature: Use screensaver DBUS APIs for lock and inhibit calls (Bug #12603)</li>
  <li>Feature: xfsm now does session management for clients using the Gtk application dbus interface</li>
  <li>Appearance: Improve column layout of autostart tab (Bug #15448)</li>
  <li>Appearance: Improve layout of autostart add/edit dialogs</li>
  <li>Builds: Remove unused checks on configure step</li>
  <li>Builds: Report optional dependency on polkit (Bug #12761)</li>
  <li>Builds: UPower dependency has been removed as the suspend/hibernate dbus calls were dropped from it</li>
  <li>chooser: Add fallback theming to chooser dialogs</li>
  <li>chooser: Enable keypress response to session creation</li>
  <li>chooser: Fix case in session chooser buttons</li>
  <li>chooser: Improve look and feel of the session chooser</li>
  <li>chooser: Improve UI and add delete button (Bug #12799)</li>
  <li>chooser: Update session name in xfconf after chooser</li>
  <li>Fix: Coverity: 'Constant' variable guards dead code (CID 178988)</li>
  <li>Fix: Coverity: Dereference after null check (CID 178989)</li>
  <li>Fix: Coverity: Dereference after null check (CID 87608)</li>
  <li>Fix: Coverity: Logically dead code (CID 178987)</li>
  <li>Fix: Coverity: Resource leak (CID 178990)</li>
  <li>Fix: Coverity: Unchecked return value from library (CID 87607)</li>
  <li>Fix: Added better shutdown fallback support for the BSDs (Bug #14722)</li>
  <li>Fix: Check accessibility depending on xfsm configuration</li>
  <li>Fix: Compilation error with --disable-polkit (Bug #12760)</li>
  <li>Fix: Compiler warning "cast between incompatible function types" introduced in GCC 8</li>
  <li>Fix: Do not auto start consolekit daemon if it is not running</li>
  <li>Fix: Do not install generic icon names (Bug #11912)</li>
  <li>Fix: Export the SSH_AUTH_SOCK when spawning client (Bug #13486)</li>
  <li>Fix: Build failure when dbus is not in the system include path (Bug #14386)</li>
  <li>Fix: Fadeout window using Xlib API</li>
  <li>Fix: GVariant format string in dbus server</li>
  <li>Fix: Keyboard grab for logout window</li>
  <li>Fix: Process Gtk events prior to starting D-Bus (Bug #15712)</li>
  <li>Fix: Read data from correct group when editing autostart entry (Bug #10423)</li>
  <li>Fix: Remove non-existent grid properties (Bug #13271)</li>
  <li>Fix: Remove now useless XFCE_GLADE_*_PATH variables (Bug #13945)</li>
  <li>Fix: Remove old unused autostart_migrate function</li>
  <li>Fix: Remove useless ioprio.h check</li>
  <li>Fix: Reset font-size of logout dialog to default (Bug #15505)</li>
  <li>Fix: scripts/xinitrc.in.in: use "command" shell builtin instead of which(1)</li>
  <li>Fix: Tell intltool how to extract .ui files (Bug #14582)</li>
  <li>Fix: Use exec to launch xfce4-session from xinitrc</li>
  <li>Fix: Use sysconf(_SC_NGROUPS_MAX) instead of #defining an arbitrary MAX_USER_GROUPS (bug #14722)</li>
  <li>Fix: Use systemd-logind methods instead of polkit permissions (Bug #14707)</li>
  <li>Fix: xinitrc: Remove fallback path when xfce4-session is not installed</li>
  <li>logout-dialog: Add styleclass to make logout dialog themeable</li>
  <li>logout-dialog: Fix mnemonic conflict on logout dialog</li>
  <li>logout-dialog: Fix sensitivity of switch user button</li>
  <li>logout-dialog: Improve default style of the logout dialog</li>
  <li>logout-dialog: Remove blue border from logout dialog (Bug #15284)</li>
  <li>logout-dialog: Set logout dialog icons from icon_name</li>
  <li>logout-dialog: Support scaling in logout dialog (Bug #14951)</li>
  <li>logout-dialog: Use a different icon for hybrid sleep when possible</li>
  <li>settings: Add a "delete session" button to the session list</li>
  <li>settings: Add a label for the currently active session</li>
  <li>settings: Add column headers to autostart list</li>
  <li>settings: Fix alignment of session lock property</li>
  <li>settings: Fix crash when terminating programs (Bug #15489)</li>
  <li>settings: Fix PID showing in "Current Session" tab</li>
  <li>settings: Improve icon matching in "Current Session" tab</li>
  <li>settings: In autostart some apps (e.g. xfce-polkit) have bigger icons</li>
  <li>settings: Initialize the session list treeview if necessary</li>
  <li>settings: Make entries expand in add/edit app startup dialog (Bug #15321)</li>
  <li>settings: Make the Autostart buttons an inline toolbar</li>
  <li>settings: More settings dialog UI improvements</li>
  <li>settings: Move "lock screen before sleep" option to general tab</li>
  <li>settings: Show saved sessions in settings dialog</li>
  <li>xfce4-session-logout: deconflict -h option (Bug #12806)</li>
  <li>xflock4: Add support for xfce4-screensaver to xflock4</li>
  <li>xflock4: Do not override PATH with hardcoded value.</li>
  <li>xfsm-manager: pass manager variable to g_timeout_add (Bug #13802)</li>
  <li>Translation updates: Albanian, Amharic, Arabic, Armenian (Armenia), Asturian, Basque, Belarusian, Bengali, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch, Dutch (Flemish), English (Australia), English (United Kingdom), Esperanto, Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Italian, Japanese, Kazakh, Korean, Latvian, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan, Occitan (post 1500), Polish, Portuguese, Portuguese (Brazil), Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swedish, Thai, Turkish, Uighur, Ukrainian, Urdu, Urdu (Pakistan), Uyghur, Vietnamese.</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em></h2>
<ul>
  <li>Feature: Color Profiles (colord frontend)</li>
  <li>Feature: Default monospace font option in the Appearance dialog</li>
  <li>Feature: Display Profiles, allowing for saving/restoring display configurations</li>
  <li>Feature: GTK3 window scaling (1x or 2x)</li>
  <li>Feature: Show the location of the mouse pointer with a keyboard shortcut</li>
  <li>Feature: XRandR display scaling (configured via Xfconf)</li>
  <li>General: Improved layout and spacing of each dialog</li>
  <li>Accessibility: Use transient notifications for improved logging</li>
  <li>Appearance: Drop the Gtk Theme previews</li>
  <li>Display: Add interactive information about primary display setting</li>
  <li>Display: Always draw active display last so it's on top</li>
  <li>Display: Always show the 'primary display' option</li>
  <li>Display: Correctly hide primary setting with 1 display</li>
  <li>Display: Improved display manufucturer name recognition and labelling</li>
  <li>Display: Improved support for embedded DisplayPort connectors</li>
  <li>Display: Ensure the settings dialog gets properly destroyed</li>
  <li>Display: Fix calculation of offset</li>
  <li>Display: Fix crash when no RRMode is available (bug #12607)</li>
  <li>Display: Fix division by 0 crash from gdk_screen_height_mm()</li>
  <li>Display: Fix race condition with monitor connect and disconnect</li>
  <li>Display: Fix segfault on monitor reconnect</li>
  <li>Display: Leave monitors where they were if possible (Bug #14096)</li>
  <li>Display: Make primary indicator a star icon</li>
  <li>Display: Re-introduce display numbering</li>
  <li>Display: Sync display when applying config</li>
  <li>Display: Throw warning when monitors exceed max screen size</li>
  <li>Display: Visualize all three display configuration states</li>
  <li>Display: Visually note if two displays overlap (mirrored) but are not cloned</li>
  <li>Display (Minimal Dialog): Add mnemonics to minimal dialog buttons (Bug #15449)</li>
  <li>Display (Minimal Dialog): Correctly position monitors in extended mode</li>
  <li>Display (Minimal Dialog): Fix alignment of buttons in minimal dialog</li>
  <li>Display (Minimal Dialog): Make minimal dialog single instance (Bug #11169)</li>
  <li>Display (Minimal Dialog): New icons for the minimal display dialog</li>
  <li>Settings Manager: Fix missing icons on resize/add/remove (Bugs #15428, #15613)</li>
  <li>Settings Manager: Fix scrolling in embedded settings dialogs (Bug #14285)</li>
  <li>Settings Manager: Fix search change clearing and hiding sections (Bug #14792)</li>
  <li>Settings Manager: Remove existing socket from socket viewport (Bug #13847)</li>
  <li>Xfsettingsd: Fix numlock state restoration (Bug #15642)</li>
  <li>Xfsettingsd: Fix incremental sending from the clipboard manager (Bug #13537)</li>
  <li>Xfsettingsd: Fix syncdaemon not starting with certain locales</li>
  <li>Xfsettingsd: Force using a period as a decimal separator (Bug #11906)</li>
  <li>Xfsettingsd: Increase startup priority</li>
  <li>Xfsettingsd: Start settings prior to complete startup (Bug #15725)</li>
  <li>Xsettings: Grab and sync XServer on startup (Bug #15725)</li>
  <li>Translation updates: Albanian, Amharic, Arabic, Armenian (Armenia), Asturian, Basque, Belarusian, Bengali, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch, Dutch (Flemish), English (Australia), English (United Kingdom), Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Italian, Japanese, Kazakh, Korean, Latvian, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan, Occitan (post 1500), Polish, Portuguese, Portuguese (Brazil), Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swedish, Thai, Turkish, Uighur, Ukrainian, Uyghur.</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em></h2>
<ul>
  <li>Feature: Add support for GObject introspection and vala</li>
  <li>Feature: Disable perl bindings by default</li>
  <li>Feature: Implement an optional GSettings backend, disabled by default (Bug #15122)</li>
  <li>Docs: Better documentation processing</li>
  <li>Docs: Update API gtk documentation</li>
  <li>Fix: Allow storage of empty arrays (Bug #13791)</li>
  <li>Fix: Build issues in AM subdir-objects</li>
  <li>Fix: Build warnings in autogen.sh</li>
  <li>Fix: Cache corruption due to a wrong g_value_unset call</li>
  <li>Fix: Check for invalid GPtrArrays in the conversion from GValue to GVariant</li>
  <li>Fix: Compiler warning -Wcast-function-type (GCC 8)</li>
  <li>Fix: Compiler warning 'this use of "defined" may not be portable'</li>
  <li>Fix: Compiler warnings reported by GCC 8 (Bug #15112)</li>
  <li>Fix: Correctly use xfconf_shutdown in xfconf-query</li>
  <li>Fix: Crash in xfconf_cache_set_property_reply_handler when multiple calls are made (Bug #13825)</li>
  <li>Fix: Flush gdbus connection on xfconf_shutdown</li>
  <li>Fix: Handle empty arrays by initializing the GValue to G_TYPE_PTR_ARRAY (Bug #13780)</li>
  <li>Fix: make distcheck (Bug #14082)</li>
  <li>Fix: Path in xfconf_cache_set where the mutex isn't locked (Bug #13790)</li>
  <li>Tests: Added .NOTPARALLEL to property change test (Bug #13840)</li>
  <li>Tests: Explicitly handle error reply from Ping method call</li>
  <li>Translation updates: Armenian (Armenia), Basque, Belarusian, Bulgarian, Catalan, Czech, Danish, English (Australia), Icelandic, Italian, Lithuanian, Portuguese (Brazilian), Romanian, Slovak, Swedish.</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>Feature: Add orientation option to arrange icons (Bug #14979)</li>
  <li>Feature: Add support for RandR's primary monitor (Bug #10688)</li>
  <li>Feature: Add "Next Background" context menu option (Bug #12261)</li>
  <li>Feature: Sync user's wallpaper selection to AccountsService</li>
  <li>General: Change "Create Launcher..." icon (Bug #14161)</li>
  <li>General: Improve fallback CSS</li>
  <li>General: Make "another desktop manager is running" messages critical (Bug #13653)</li>
  <li>General: Make a couple of strings translatable (Bug #14374)</li>
  <li>General: Port Settings UI to Glade 3</li>
  <li>General: Reorder checkboxes in Settings UI</li>
  <li>General: Update copyright year</li>
  <li>General: Update README.xfconf (Bug #15457)</li>
  <li>General: Use https where possible</li>
  <li>General: Use the new Thunarx-3 API (Thunar >= 1.7)</li>
  <li>Appearance: Add padding to various context menu icons (Bug #14628)</li>
  <li>Translations: Add translation string for Trash desktop icon</li>
  <li>Fix: Allow directories to be selected in Settings dialog (Bug #12832)</li>
  <li>Fix: Autotools build warnings</li>
  <li>Fix: Crash in the backdrop loader (Bug #12339)</li>
  <li>Fix: Crash when displays change (Bug #14609)</li>
  <li>Fix: Desktop icon order resets (Bug #11266)</li>
  <li>Fix: Display correct icon size of minimized apps (Bug #8951)</li>
  <li>Fix: Do not cycle backdrop twice</li>
  <li>Fix: Do not popup a single "Applications" menu when right clicking on desktop (Bug #13866)</li>
  <li>Fix: Do not redraw the icons on focus change events (Bug #12071)</li>
  <li>Fix: Do not try to divide by 0 (Bug #12115)</li>
  <li>Fix: Drag data being received multiple times (Bug #14471)</li>
  <li>Fix: Enable loading non-theme icons (Bug #15294)</li>
  <li>Fix: Ensure that CSD is not applied to desktop window (Bug #15241)</li>
  <li>Fix: Get/set _NET_DESKTOP_MANAGER_S&lt;screen&gt; atom (Bug #13653)</li>
  <li>Fix: Highlight drag target when hovering it (Bug #12695)</li>
  <li>Fix: Icon size in "Open with" submenu (Bug #14774)</li>
  <li>Fix: Implementation of has_mime_type (Bug #15295)</li>
  <li>Fix: Invalid memory access when moving icons to a display where icons are disabled (Bug #15299)</li>
  <li>Fix: loading of wallpaper previews is Settings dialgo (Bug #11892)</li>
  <li>Fix: Make 'Move to Trash' icon the same as Thunar (Bug #15234)</li>
  <li>Fix: Match Thunar Drag and Drop behavior (Bug #14919)</li>
  <li>Fix: Memory leak while cycling wallpapers (Bug #13555)</li>
  <li>Fix: Memory leaks when displays change (Bugs #12805, #14844)</li>
  <li>Fix: Menu popup issue with desktop icons disabled (Bug #14415)</li>
  <li>Fix: Open all selected icons on key press (Bug #15420)</li>
  <li>Fix: Properly center workspace header in windowlist (Bug #15405)</li>
  <li>Fix: Remove faulty line in glade file (Bug #15293)</li>
  <li>Fix: Restore icons of custom actions</li>
  <li>Fix: Retain icon relative position when moving a group</li>
  <li>Fix: Scaling, stretching, and zooming of images with orientation metadata (Bugs #14644, #15292)</li>
  <li>Fix: Set desktop environment for garcon app menu (Bug #14599)</li>
  <li>Fix: Single-click mode executes desktop items twice (Bug #14021)</li>
  <li>Fix: Stop ongoing drag/selection if middle/right mouse button is pressed (Bug #14180)</li>
  <li>Fix: Timer leak when docking-undocking monitors (Bug #13887)</li>
  <li>Fix: Title of Open dialog (Bug #12560)</li>
  <li>Fix: Use async dbus proxy initialization (Bug #15418)</li>
  <li>Fix: Use clipboard target "text/uri-list" when copying/cutting (Bug #13379)</li>
  <li>Fix: Use custom CSS for the iconview as a fallback (Bug #13609)</li>
  <li>Fix: Warning about ignored return value (Bug #15410)</li>
  <li>Fix: Xfdesktop crashes after multiple --reload calls (Bug #15060)</li>
  <li>Translation updates: Albanian, Amharic, Arabic, Armenian (Armenia), Asturian, Basque, Belarusian, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch, English (Australia), English (Canada), English (United Kingdom), Estonian, Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Interlingue, Italian, Japanese, Kazakh, Korean, Lithuanian, Malay, Nepali, Norwegian Bokmål, Norwegian Nynorsk, Occitan, Occitan (post 1500), Persian (Iran), Polish, Portuguese, Portuguese (Brazil), Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swedish, Thai, Turkish, Uighur, Ukrainian, Uyghur, Uzbek.</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>Feature: Add command line option "--vblank" to select vblank method</li>
  <li>Feature: Add style class to tabwin modes</li>
  <li>Feature: Add support for NET_WM_BYPASS_COMPOSITOR (Bug #12434)</li>
  <li>Feature: Add support for scaled cursor when zooming</li>
  <li>Feature: Add support for VSYNC using either Present or OpenGL</li>
  <li>Feature: Add support for XI2</li>
  <li>Feature: Add xfconf setting for selecting permanent vblank method</li>
  <li>Feature: Allow hiding windows using NET_WM_STATE_HIDDEN (Bug #15356)</li>
  <li>Feature: Allow resizing of borderless maximized window with [Alt] + mouse</li>
  <li>Feature: Daemon mode is now deprecated (--daemon has no effect)</li>
  <li>Feature: Improved GLX support with NVIDIA proprietary/closed source driver (Bug #15453)</li>
  <li>Feature: New default theme</li>
  <li>Feature: Optionally raise window while cycling (Bug #2701)</li>
  <li>Feature: Remove support for environment variable "XFWM4_USE_PRESENT"</li>
  <li>General: Allow the top of the frame to be cropped when maximised, update default theme to use maximized cropping (Bug #14470)</li>
  <li>General: Change default compositor background to plain black</li>
  <li>General: Compositor updates with GLX</li>
  <li>General: Increase X11 client priority of xfwm4</li>
  <li>General: Remove icons from window menu</li>
  <li>General: Small optimization with zoom on GLX</li>
  <li>General: Use cairo for pixmaps and masks</li>
  <li>General: Various compositor improvements and optimizations with GLX</li>
  <li>HiDPI: Adjust default theme with scale</li>
  <li>HiDPI: Fix menu alignment with scaled UI</li>
  <li>HiDPI: Fix monitor geometry with scaled UI (Bug #14566)</li>
  <li>HiDPI: Fix size increment with scaled UI</li>
  <li>HiDPI: Fix tabwin placement with scaled UI (Bug #14931)</li>
  <li>HiDPI: Use GTK3 scaling attributes for window titles</li>
  <li>Fix: Adjust zoom update based on monitor refresh rate (Bug #15391)</li>
  <li>Fix: Allow transients to be minimized (Bug #14953)</li>
  <li>Fix: Build out of tree (Bug #14542)</li>
  <li>Fix: Build without compositor (Bug #15432)</li>
  <li>Fix: Check for appropriate XSync version and increase xfwm4 priority</li>
  <li>Fix: Clear shortcut in settings-dialog when removed (Bug #12802)</li>
  <li>Fix: Crash with button layout setting (Bug #14606)</li>
  <li>Fix: Crash/stack smash in startup-notification on some architectures (Bug #15028)</li>
  <li>Fix: Double-click distance setting</li>
  <li>Fix: Enable root pixmap with compositor (Bug #15709)</li>
  <li>Fix: Fallback to resource class name for icons (Bug #15510)</li>
  <li>Fix: Flickering with GLX backend (Bugs #14564, #13519)</li>
  <li>Fix: GL texture filter (Bug #15676)</li>
  <li>Fix: GTK_FRAME_EXTENTS support (Bug #14511)</li>
  <li>Fix: Ignore XErrors caused by damages</li>
  <li>Fix: Initial pointer location when zooming</li>
  <li>Fix: Issue with Android Virtual Device emulator (Bug #12206)</li>
  <li>Fix: Logic error in bottom struts validation (Bug #13964)</li>
  <li>Fix: Maximization on expected output (Bugs #13284, #13954)</li>
  <li>Fix: Maximization with GTK clients using size increments (Bug #13954)</li>
  <li>Fix: Monitor output size update (Bug #15085)</li>
  <li>Fix: Place windows on current monitor (Bug #14959)</li>
  <li>Fix: Pointer enter/leave with decoration buttons (Bug #14741)</li>
  <li>Fix: Preview with shaded windows (Bug #14899)</li>
  <li>Fix: Raise all transients together (Bug #15303)</li>
  <li>Fix: Raise on activate only with raise-on-focus (Bug #14656)</li>
  <li>Fix: Raising of parent transients (Bug #15580)</li>
  <li>Fix: Reduce repaint timeout (Bug #14335)</li>
  <li>Fix: Remove the old vblank code (Bug #13613)</li>
  <li>Fix: Revert to GLX as default vblank method (Bug #15325)</li>
  <li>Fix: Support for 1bpp icons</li>
  <li>Fix: Update "presentproto" requirement to avoid XPresent issue on 32bit (Bug #13257)</li>
  <li>Fix: Update CSS for tabwin only on theme change</li>
  <li>Fix: Use after release of client picture with hidden (Bug #14990)</li>
  <li>Fix: Use the primary monitor by default for placement (Bug #13454)</li>
  <li>Fix: Use xinerama indices for EWMH's NET_WM_FULLSCREEN_MONITORS (Bugs #9351, #13608)</li>
  <li>Fix: Window type for broken clients (Bug #15399)</li>
  <li>Fix: Withdraw the frame before the client window (Bug #15061)</li>
  <li>Fix: XI2 mask (Bug #14695)</li>
  <li>Fix: Zooming without GL</li>
  <li>Translation updates: Albanian, Arabic, Armenian (Armenia), Asturian, Basque, Belarusian, Bengali, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch, English (Australia), English (Canada), English (United Kingdom), Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Interlingue, Italian, Japanese, Kazakh, Korean, Latvian, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan (post 1500), Polish, Portuguese, Portuguese (Brazil), Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swedish, Thai, Turkish, Uighur, Ukrainian, Urdu.</li>
</ul>

<h2>Theme Engine <em>(gtk-xfce-engine)</em></h2>
<ul>
  <li>The gtk-xfce-engine has been deprecated and archived.</li>
</ul>

<h2>Power Manager <em>(xfce4-power-manager)</em></h2>
<ul>

</ul>

<h2>Thumbnail Generator <em>(tumbler)</em></h2>

<ul>

</ul>
<!--
<h2>Volume Manager <em>(thunar-volman)</em></h2>
<ul>
</ul>
-->
