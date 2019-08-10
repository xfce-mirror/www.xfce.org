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
  <li>Albanian, Amharic, Arabic, Armenian, Armenian (Armenia), Asturian, Bangla, Basque, Belarusian, Bengali, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch, English (Australia), English (United Kingdom), Esperanto, Estonian, Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Interlingue, Italian, Japanese, Kazakh, Korean, Latvian, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan, Persian (Iran), Polish, Portuguese, Portuguese (Brazil), Punjabi, Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swedish, Telugu, Thai, Turkish, Ukrainian, Urdu, Urdu (Pakistan), Uyghur, Vietnamese.</li>

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
  <li>Albanian, Amharic, Arabic, Armenian, Armenian (Armenia), Asturian, Basque, Belarusian, Bulgarian, Catalan, Chinese (China), Chinese (Hong Kong), Chinese (Taiwan), Croatian, Czech, Danish, Dutch, Dutch (Flemish), English (Australia), English (United Kingdom), Estonian, Finnish, French, Galician, German, Greek, Hebrew, Hungarian, Icelandic, Indonesian, Interlingue, Italian, Japanese, Kazakh, Korean, Lithuanian, Malay, Norwegian Bokmål, Norwegian Nynorsk, Occitan, Polish, Portuguese, Portuguese (Brazil), Romanian, Russian, Serbian, Slovak, Slovenian, Spanish, Swedish, Telugu, Thai, Turkish, Ukrainian, Uyghur, Vietnamese.</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>

</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>

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

</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>

</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>

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
