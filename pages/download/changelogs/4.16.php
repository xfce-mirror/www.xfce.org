<?php $head['title'] = 'Xfce 4.16 Changelog'; ?>

<h1>Xfce 4.16 Changelog</h1>

<p>Note: the changelogs shown here are since the version of the components that shipped with Xfce 4.14.</p>

<h2>Dependency changes</h2>
<ul>
  <li>Gtk &gt;= 3.22, GLib and GDBus &gt;= 2.50.</li>
  <li>Add libgtop</li>
  <li>Remove Gtk2 support</li>
</ul>

<h2>Development Tools <em>(xfce4-dev-tools)</em></h2>
<ul>
  <li>Add several helpers to gather release notes etc and actually perform releases</li>
  <li>Add xfce-build Docker container (which is also used in GitLab CI)</li>
  <li>New macro XDT_VERSION_INIT which takes care of setting up the version numbering</li>
  <li>xdt-csource now replace exo-csource</li>
</ul>

<h2>Utility Library <em>(libxfce4util)</em></h2>
<ul>
  <li>Update configure.ac.in syntax</li>
  <li>Namespace of the gir needs capital first letter</li>
  <li>bump glib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>remove typedef already defined by G_DECLARE_FINAL_TYPE macro (fixes #4)</li>
  <li>Complete the field codes expansion</li>
  <li>docs: Unhide the misc utils section</li>
  <li>Add field codes expansion and related utilities</li>
</ul>

<h2>Widget Library <em>(libxfce4ui)</em></h2>
<ul>
  <li>Bump libepoxy version to 1.2</li>
  <li>Drop support for Gtk2</li>
  <li>Bump gtk to 3.22 (Bug #15781)</li>
  <li>bump glib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>Make glibtop an optional dependency</li>
  <li>Namespace of the gir needs capital first letter</li>
  <li>about: Revamp About Xfce tab</li>
  <li>about: Add xfce version and vendor info</li>
  <li>about: Add system info tab</li>
  <li>about: Hide system tab conditionally</li>
  <li>about: Use more understandable arch labels (Issue #27)</li>
  <li>about: Print GPU name in system info</li>
  <li>about: Support multiple GPUs and print GPU memory size</li>
  <li>about: Drop window subtitle</li>
  <li>shortcut-dialog Improve UI for setting shortcuts</li>
  <li>shortcut-dialog: Add label to clear button</li>
  <li>shortcut-dialog: Port to new XfceTitledDialog API</li>
  <li>shortcut-dialog: Only grab keyboard</li>
  <li>shortcut-dialog: Show dialog content (Bug #16338)</li>
  <li>shortcuts: Also map Homepage to browser</li>
  <li>shortcuts: Remove calculator shortcut</li>
  <li>shortcuts: Replace xfrun4 by xfce4-appfinder</li>
  <li>XfceTitledDialog: Move buttons from headerbar to actionarea</li>
  <li>Switch XfceTitledDialog to headerbar layout</li>
  <li>XfceTitledDialog: Add _create_action_area, _add_button and _add_action_widget</li>
  <li>XfceTitledDialog: Make sure windows can be dragged</li>
  <li>XfceTitledDialog: Also repack xfce_titled_dialog_new</li>
  <li>XfceTitledDialog: Keep buttons in the action area</li>
  <li>Mark xfce_titled_dialog_new_with_buttons as deprecated</li>
  <li>tests: Improve UI</li>
  <li>xfce-dialogs: Improve layout of confirm_close_tabs</li>
  <li>xfce-dialogs: Add right margin back to labels</li>
  <li>xfce-dialogs: Drop default window titles</li>
  <li>xfce-dialogs: Improve alignment and layout of dialogs</li>
  <li>xfce-dialogs: Use GtkMessageDialog as base class</li>
  <li>dialogs: Use symbolic window-close icon</li>
  <li>tests: Add xfce_dialog_confirm_close_tabs</li>
  <li>tests: Add icons to dialog buttons</li>
  <li>tests: Simplify code by using XfceTitledDialog</li>
  <li>tests: Re-order buttons</li>
  <li>Rename test-ui-gtk3 to test-ui</li>
  <li>Introduce xfce_spawn and xfce_spawn_command_line</li>
  <li>Add xfce_has_gtk_frame_extents to better handle CSD</li>
  <li>Add two new functions to search for app icons</li>
  <li>Remove hardcoded translators list</li>
  <li>Always perform sanity check</li>
  <li>Add default shortcuts for tiling (Fixes #4)</li>
  <li>Avoid checking for epoxy if libgtop is disabled</li>
  <li>XfceTitledDialog: Fix erroneous check (Fixes #30)</li>
  <li>No startup notification in wayland to prevent crash (Issue #17)</li>
  <li>Display userspace bitness if it differs from OS kernel bitness</li>
  <li>Improve xfce_icon_name API</li>
  <li>Avoid redundant key re-grabbing</li>
  <li>Silence compiler warnings (Fixes #25)</li>
  <li>AC_CONFIG_MACRO_DIR → AC_CONFIG_MACRO_DIRS</li>
  <li>Avoid shortening the keycodes GArray while walking it.</li>
  <li>Always return GTK_RESPONSE_OK for accepted shortcut keys (fixes #20)</li>
  <li>Replace deprecated 'gdk_keyboard_ungrab' function (Fixes #15)</li>
  <li>shortcuts-grabber: Correctly ungrab keys on updating shortcuts (Fixes #16)</li>
  <li>Add "xfce_gtk_accel_group_disconnect_action_entries" to be able to revert "xfce_gtk_accel_group_connect_action_entries"</li>
  <li>Allow more granular control over menu item accelerators. - No automatic accelerator activation formenu items - Added 'gtk_menu_item_set_accel_label' - Added 'xfce_gtk_accel_group_connect_action_entries'</li>
  <li>renamed 'xfce_gtk_accel_group_append' to 'xfce_gtk_accel_map_add_entries' and modified internals accoringly. - No automatic add to an accel_group any more, since this may lead to double-activation in some cases.</li>
  <li>Add title to xfce_dialog_confirm_close_tabs</li>
  <li>Add more default keyboard shortcuts (Bug #16470)</li>
  <li>removed some superfluous 'gtk_widget_show()' in order to be consistent with GTK creation methods.</li>
  <li>Usage of g_warning instead of g_error on unknown action_id in 'xfce_gtk_get_action_entry_by_id'</li>
  <li>Enabled doc generation for XfceGtkActionEntry and related methods</li>
  <li>Enabled doc generation for new widget 'xfce-filename-input'</li>
  <li>Fixed two "Missing (transfer) annotation" warnings</li>
  <li>Added methods to replace deprecated GtkAction, GtkActionEntry and GtkUiManager in order to keep simple menu creation</li>
  <li>Add a widget for filename input (Bug #16542)</li>
  <li>Switch Ctrl+Alt+Del to xfce4-session-logout (Bug #11979)</li>
  <li>Always provides needed files for vala binding in dist tarball</li>
  <li>Drop xfce-header from pot files</li>
  <li>Drop gladeui Gtk2 from distcheck options</li>
  <li>Introduce xfce_titled_dialog_set_default_response</li>
  <li>Fix license text box too small (Bug #16259)</li>
  <li>Fix typo in test-ui.c (Bug #16253)</li>
  <li>system-info: Clean up code and UI</li>
  <li>Fix Window has not been made visible when grabbing keyboard (Bug #16054)</li>
  <li>Do not use gdk_screen_get_monitor_at_point (Bug #15781)</li>
  <li>Replace gtk_show_uri (Bug #15781)</li>
  <li>Replace gdk_display_get_screen (Bug #15781)</li>
  <li>Replace gdk_keymap_get_default (Bug #15781)</li>
  <li>Replace deprecated device functions (Bug #15781)</li>
  <li>Replace gdk_error_trap_* and gdk_flush (Bug #15781)</li>
  <li>Ignore what is hard to replace (Bug #15781)</li>
  <li>Add a dialog to confirm closure of multiple tabs (bug #15873)</li>
</ul>

<h2>Extension Library <em>(exo)</em></h2>
<ul>
  <li>Adjust padding only for vertical item orientation (Issue #48)</li>
  <li>bump glib (and gio, gthread, etc) to 2.50.0</li>
  <li>Fix GCC warning (false negative)</li>
  <li>Re-grab tree selection to prevent rare crash (Issue #46)</li>
  <li>Remove unneeded RTL adjustment (Issue #45)</li>
  <li>exo-open: Wrap long URI in error dialog (Issue #26)</li>
  <li>Avoid truncated text in small zoom levels (#42)</li>
  <li>Make ExoIconView reduce selection on a single click (issue #39)</li>
  <li>Partially restore 6fcefce9 (Issue #18)</li>
  <li>Add check for valid GtkTreeSelection (issue #40)</li>
  <li>Reset cursor on drag end in single-click mode</li>
  <li>exo-open: Change priority of command line parameters (Fixes #20)</li>
  <li>Prevent label from overlapping icon in RTL (Fixes #36)</li>
  <li>Prevent "selection_changed" bursts (#37)</li>
  <li>Small change to documentation for exo_strdup_strftime</li>
  <li>desktop-item-edit: Use new XfceTitledDialog API</li>
  <li>desktop-item-edit: Fix fallback for desktop file type detection</li>
  <li>desktop-item-edit: Fix sensitivity of save button (Fixes #28)</li>
  <li>desktop-item-edit: Improve detection of invalid icon names (Fixes #33)</li>
  <li>desktop-item-edit: Fix sensitivity of save button (Bug #16813)</li>
  <li>AC_CONFIG_MACRO_DIR → AC_CONFIG_MACRO_DIRS (Closes !9)</li>
  <li>Remove unused perl module requirement</li>
  <li>Replace bugzilla occurences with gitlab (fixes #30)</li>
  <li>icon-chooser-dialog: Allow removing selected icon (fixes #2)</li>
  <li>Fix build on OpenBSD (!2)</li>
  <li>Drop exo-csource from exo</li>
  <li>Rework exo_icon_view_scroll_event to allow overshoot effect (fixes #25)</li>
  <li>Allow resizing the xfce4-settings window smaller (fixes #19)</li>
  <li>exo-29: Fix race condition in make install</li>
  <li>state variable is a GtkStateFlags</li>
  <li>Fix make warnings since gtk2 drop</li>
  <li>Drop GTK2 support. This means the following features are no longer part of the API: ExoCellRendererEllipsizedText, ExoIconBar, ExoToolbarsEditor, ExoToolbarsEditorDialog, ExoToolbarsModel, ExoToolbarsView, ExoWrapTable, ExoXsessionClient</li>
  <li>Fallback without xfce4-mime-helper</li>
  <li>Drop exo_atomic_{inc,dec}</li>
  <li>Attach popup window to toplevel parent (Bug #16768)</li>
  <li>Rename Thunar.desktop to thunar.desktop (Bug #16197)</li>
  <li>Extend selection on shift+drag (Bug #7526)</li>
  <li>Do not cancel selection on shift+drag</li>
  <li>Rename Thunar.desktop to thunar.desktop (Bug #16197)</li>
  <li>Fix type declaration (Bug #16678)</li>
  <li>Fix GTimeVal deprecation</li>
  <li>Replace deprecated G_INLINE_FUNC macro</li>
  <li>Replace deprecated macro</li>
  <li>Wrong keyboard navigation after using rubberband in exo-icon-view (Bug #16286)</li>
  <li>Cursor position in icon view not visible/highlighted when using Ctrl + arrows (Bug #12227)</li>
  <li>Make sure default applications are properly set in mimeapps.list</li>
  <li>exo-helper: Add gio-unix-2.0 dependency</li>
  <li>Fix for the bugs 16075 and 16107</li>
  <li>Fix cursor missing in search popup widget (bug #16068)</li>
  <li>Fix prelight deactivation (bug #11806)</li>
  <li>Fix desktop item creation on symbolic link directories, make user-created launchers executable by default</li>
  <li>Fix issues with displaying icon view contents (bug #14737)</li>
  <li>Remove dependency on gio-unix-2.0 (bug #15825)</li>
</ul>

<h2>Menu Library <em>(garcon)</em></h2>
<ul>
  <li>Drop support for Gtk2</li>
  <li>relax automake requirement to 1.15</li>
  <li>bump glib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>Use the symbolic close icon in the error dialog</li>
  <li>Don't launch apps as children</li>
  <li>Add new icon needed for xfce4-about-dialog</li>
  <li>Fix missing transfer annotation</li>
  <li>Improve GObject introspection annotations (Fixes #8)</li>
  <li>Add support for GObject Introspection (Fixes #4)</li>
  <li>Field codes expansion API update</li>
  <li>Transfer some code to libxfce4util</li>
  <li>Fix default merge rules in xfce-applications.menu (Bug #15504)</li>
  <li>Fix a stupid typo introduced in previous commit</li>
  <li>Rename exo-helpers to the new xfce4-xx ones</li>
  <li>Do not add INSTALL in dist tarball</li>
  <li>Fix a memory leak</li>
  <li>Switch to xfce_gtk_image_menu_item</li>
  <li>Add garcon_menu_item_[g|s]et_keywords to docs</li>
  <li>Add garcon_gtk_menu_get_desktop_actions_menu</li>
</ul>

<h2>File Manager <em>(thunar)</em></h2>
<ul>
  <li>Bump GLib (and gio, gthread, etc) to 2.50.0</li>
  <li>Avoid crashes when closing thunar with ctrl+w (#336)</li>
  <li>Ignore double-click events from back/forward mouse button (Issue #371)</li>
  <li>Wrap box around spinner to prevent flickering (Issue #440)</li>
  <li>Use g_drive_is_removable over g_drive_is_media_removable</li>
  <li>Do not duplicate app_info when added via custom command (Issue #309)</li>
  <li>Escape all whitespace characters in custom command path</li>
  <li>Remove hidden quotes for "Open with"->"custom command" (Issue #425)</li>
  <li>Ignore unknown XML elements in UCA.xml</li>
  <li>Regression: Fix broken bulk renamer context menu (Issue #436)</li>
  <li>Missing thunarx support on the shortcut view (Issue #423)</li>
  <li>Remove duplicated code in renamer and prevent possible leak</li>
  <li>Prevent possible crash of thunar_launcher_poke (Issue #436)</li>
  <li>Fix combo box entry order (Issue #435)</li>
  <li>Change focus when clicking an emblem entry (Issue #315)</li>
  <li>Prevent Gtk-CRITICAL when terminating session (Issue #430)</li>
  <li>No special treatment on "rename" for .desktop files (Issue #56)</li>
  <li>Show full filename/extention for .desktop files (Issue #56)</li>
  <li>Focus view when location selector is closed (Issue #420)</li>
  <li>Thunar shows wrong content after outside operations (Issue #355)</li>
  <li>Regression: Restore file menu section arrangement</li>
  <li>Add link to thunar Wiki for build & debug hints</li>
  <li>Fall back to fast content type if regular is unavilable in fileattributes (!36)</li>
  <li>Fix Regressions around menu bar spinner (Issue #394)</li>
  <li>Fix error when displaying custom date format in details view (issue#389)</li>
  <li>Add support for transparency in gtk-themes (!31)</li>
  <li>Regression: Apply accel keys only to current tab (Issue #386)</li>
  <li>Regression: Apply accel keys only to current tab (Issue #386)</li>
  <li>Regression: Dont crash when starting thunar with gvfs disabled</li>
  <li>Regression: Fix mounting of unmounted devices in tree-view</li>
  <li>Move mount/unmount/eject actions into launcher (Issue #349)</li>
  <li>thunar-launcher: Add support to mount devices (Issue 349)</li>
  <li>Re-enable "select_files" closure for tree-view (Issue #349)</li>
  <li>Use thunar-menu and launcher in tree-view (Issue# 349)</li>
  <li>thunar-launcher: Improve decision making on show "create file/folder"</li>
  <li>thunar-launcher: Improvements for insensitive menu-items</li>
  <li>thunar-launcher: Dont set current directory as default file to process</li>
  <li>thunar-launcher: "current_directory_selected" --> "files_are_selected"</li>
  <li>thunar-launcher: Remove "thunar_launcher_get_selected_files".</li>
  <li>thunar-launcher: Rename "selected_files" to "files_to_process"</li>
  <li>Use the new icon when running with elevated privileges (root)</li>
  <li>Remove limit on paths to check in thunar_file_accepts_drop (Issue#350)</li>
  <li>Avoid crashes when using details view (Issue #307)</li>
  <li>Fix unavailable rubber banding in detailed view (Issue #326)</li>
  <li>Remove obsolete dispose method to prevent warning (Issue #319) Fixes#319</li>
  <li>Show device indentifier in side pane tooltip (Issue #207)</li>
  <li>Make use of shared field codes expansion of libxfce4util Followup of https://gitlab.xfce.org/xfce/libxfce4util/-/merge_requests/2 Fixes !23</li>
  <li>Implement directory specific saving of sort-column and sort-order (#8)</li>
  <li>Add an option to delete saved directory specific settings (#8)</li>
  <li>Implements directory specific view type (#8)</li>
  <li>Add features to support the use of directory specific view settings(#8)</li>
  <li>Added comments to explain use of gvfs metadata in thunar-file</li>
  <li>Regression: Add missing seperator to icon view submenu</li>
  <li>Replace _thunar_assert() with _thunar_return_if_fail()  in order toprevent crash when build with debug on FreeBSD Fixes !22</li>
  <li>Menu items cut/copy/paste do not work for location entry (Issue #303)Fixed #303 Fixes !21</li>
  <li>Shorten strings for different views (Issue #247)  Followup of commit#b86845df</li>
  <li>Segfault when file is created while files are selected (Issue #339)Fixes #339</li>
  <li>Thunar hangs when closing windows using CTRL+W (Issue #336) Fixes #336</li>
  <li>Regression: Missing accelerators for bookmark items (Issue #331)Fixes #331</li>
  <li>Fixed the SEGV when the side pane is hidden (Issue #335)</li>
  <li>Regression: Window menu not updated properly (Issue #320) Fixes #320Fixes #321</li>
  <li>Support queued copy (configurable, e.g. for remote devices) (Issue#294) Fixes #294 Fixes 1!</li>
  <li>Regression: "Create Archive..." doesn't show up when selecting asingle folder (Fixes #329)</li>
  <li>Fix unavailable rubber banding in detailed view (Fixes #326)</li>
  <li>Regression: Trying to open a .desktop file from the context menuleads to the execution of the file (Fixes #325)</li>
  <li>move duplicated code from concrete views into a single standard-viewmethod (Merge Request !12)</li>
  <li>Use numbering on label "open new window/tab" only for multiplewindows/tabs (Merge request 15!, regression was introduced within !10)</li>
  <li>Shorten strings for different views in window menu (Issue #247)</li>
  <li>Shorten strings in "arrang Items" submenu (Issue #247)</li>
  <li>Add new app icon and switch to rDNS icon name</li>
  <li>Small fixes following ReplaceGtkAction merge</li>
  <li>cut/trash/delete/create folder/file have to be insensitive if folderis read only Regression introduced by commits for (Issue #293)</li>
  <li>re-introduce "paste into folder", simplify related code (Issue #293)</li>
  <li>Merge all file-context-menus into one (Issue #198) Make use of newwidget "thunar-menu" for location buttons instead of providing aforeign menu</li>
  <li>Fixed menu freeze when using arrow keys for menu navigation and themouse at the same time. (Issue #293) This as well fixes wrongmenu-items when using arrow keys in some conditions</li>
  <li>Add a spinner besides the window menubar, not into it (Issue #293)</li>
  <li>remove all GtkActionEntries, they are not used any more (Issue #293)</li>
  <li>use XfceGtkActionEntry for toolbar - re-introduce history (Issue#293) support - remove now obsolete thunar-history-action</li>
  <li>Re-Introduce support for gesture actions (Issue #293)</li>
  <li>Re-introduce view-specific menu items (Issue #293) - Propagate"append-item" methods down into concrete view widgets</li>
  <li>provide possibility to add menu items for "select one/all/invert"inthunar-standard-view (Issue #293)</li>
  <li>Remove "thunar-trash-action", since it is not used any more (Issue#293)</li>
  <li>Use XfceGtkMenuAction for thunar window menu (Issue #293)</li>
  <li>re-enable file-selection after create/rename (Issue #293)</li>
  <li>Use thunar-menu and xfce_gtk_tool_button in bulk renamer (Issue #293)</li>
  <li>Moved thunar-tempates-action (aka "create document" menu item) intolauncher (Issue #293)  - moved thunar-file-comparison from withinthunar-tempates-action into thunar-file</li>
  <li>Add possibility to send to shortcuts in launcher (Issue #293)</li>
  <li>Introduced widget thunar-menu in order to unify the way menus arebuild in thunar, and used it for the context menu (Issue #293)</li>
  <li>moved all actions which can be re-used by other widgets fromstandard-view to launcher (Issue #293) - Make use ofXfceGtkActionEntries</li>
  <li>Rebuild thunar-launcher so that it does not depend on GtkUIManagerany more. (Issue #293) - Use XfceGtActionEntry instead of deprecatedGtActionEntry - Always re-create requested menu-items</li>
  <li>Ghost file ocasionally remains when dropping file into directory(Fixes #312)</li>
  <li>Remove thunar-create-dialog module</li>
  <li>Replace Q_ by _ to get rid of confusing prefixs (Bug #9718)</li>
  <li>Support for variables like $HOME in address bar (Bug #12165)Appending a path to the variable is as well supported.</li>
  <li>Fix eject button click detection when using RTL languages (Bug #11387)</li>
  <li>Only open device after successful mount attempt (Bug #16831)</li>
  <li>renamed all README files to README.md and modified the content inorder to use markdown language.</li>
  <li>Fix shortcut support for addressbar (Bug #4537 and Bug #13680)</li>
  <li>Remove upper case from group names in shortcuts view</li>
  <li>Fix crash in bulk renamer on repeated rename (Bug #16824)</li>
  <li>Add checks for 0 handles (Bug #14122)</li>
  <li>Replace 'thunar_return_if_fail (THUNAR_IS_DEVICE (device))' withstandard 'if (..)' to prevent possible crashes. (Bug #13404)</li>
  <li>Fix message punctuation (Bug #16783)</li>
  <li>Option to rename a file when existing copy conflicts (Bug #16686)</li>
  <li>Add THUNAR_JOB_RESPONSE_REPLACE and THUNAR_JOB_RESPONSE_SKIP to keepthe code human readable, and as preperation for Bug #16686</li>
  <li>Introduce THUNAR_JOB_RESPONSE_MAX_INT to prevent magic number + fixedcomment</li>
  <li>Split "thunar_transfer_job_execute" in multiple simpler functions tokeep the code human readable, and as preperation for Bug #16686</li>
  <li>Remove suffix "- FileManager" from window title</li>
  <li>Add comment about overshoot fade issue not reproducible anymore</li>
  <li>Fix check if folder is fully loaded when expanding path in tree view.Prevents 100% CPU load and loosing sync with main view in some cases.(Bug #15762)</li>
  <li>Move iter initialization (Bug #16024) - Fixes 100%CPU on tree-view insome rare cases</li>
  <li>Bug #16717: Move from exo-csource to xdt-csource</li>
  <li>Hide disk usage in tooltip if not available (Bug #16566)</li>
  <li>Show URI in tooltip for devices connected via MTP (Bug #16566)</li>
  <li>Pause button on copy/move (Bug #16685)</li>
  <li>Allow drag-and-drop of multiple files in icon view (Bug #2487)</li>
  <li>Remove thunar_abstract_icon_view_activate_cursor_item (Bug #16692)</li>
  <li>Fix typo in debug message: happend -> happened</li>
  <li>Delete native files faster (Bug #16641)</li>
  <li>Add keywords to .desktop files to thunar (bug #16618)</li>
  <li>Support libxfce4ui XfceTitledDialog new API (Bug #16616)</li>
  <li>Reduce vertical space in Templates info popup</li>
  <li>hide android phone from network group (bug #11584)</li>
  <li>Reduce size of Templates info popup</li>
  <li>Do not add "cant-write" emblem to files in the Trash</li>
  <li>Hide Browse Network entry in shortcuts view if not supported</li>
  <li>Move 'network' to the bottom of tree view (Bug #16516)</li>
  <li>Reduce size of Properties dialog</li>
  <li>Add examples to "Select by Pattern" dialog (Bug #16587)</li>
  <li>Improve tooltips in shortcuts view (Bug #16566)</li>
  <li>Use tre-view toplevel path of the cursor, if available, in order toprevent jumping (Bug #16024)</li>
  <li>Unregister handler when Rename dialog is closed manually (followup ofBug #10805)</li>
  <li>move setting to to use current folder icon as window icon to the'display' tab (Bug #16501)</li>
  <li>Rename "Disconnect" context menu entry in side pane (Bug #16558)</li>
  <li>Increase vertical gap between icon and its label slightly (Bug #16041)</li>
  <li>Make change window icon opt-out (Bug #16501)</li>
  <li>Fix for crash when inserting USB device in tree mode. (Bug #15172)</li>
  <li>Always jump to Home when ejecting a currently viewed device (Bug#16504)</li>
  <li>Computer: (Bug 16472) - make use of"thunar_g_vfs_is_uri_scheme_supported" to check for computer support -fixed some comments - Use "g_file_new_for_uri" directly</li>
  <li>Computer (Bug #16472) - Change menu tooltip - use the predefinedsorting - Fixed comments</li>
  <li>Make path entry matching case-insensitive (Bug #12747)</li>
  <li>Add new bookmarks to bottom of list in shortcuts view (Bug #16526)</li>
  <li>Fix drop location check for bookmarks (followup of bug #11586)</li>
  <li>Restore previous order of subitems in shortcuts view (Bug #11586)</li>
  <li>Move places above devices in shortcuts view (bug #11586)</li>
  <li>Add desktop actions for home, computer and trash (bug #16497)</li>
  <li>Xfconf setting whether to change the window icon (bug #16501)</li>
  <li>Remove top level desktop entry from tree view (bug #16474)</li>
  <li>Add computer:/// to side pane tree view (Bug #16472)</li>
  <li>Allow context menu when editing location in pathbar (Bug #16483)</li>
  <li>Move computer:/// above Home in bookmark view (Bug #16472)</li>
  <li>computer:/// menu item shouldnt use symbolic icon (Bug #16472)</li>
  <li>Sort device entries in tree view (Bug #16471)</li>
  <li>Add computer:/// to side pane (Bug #16472)</li>
  <li>Add computer:/// to Go menu (Bug #16472)</li>
  <li>Allow opening of multiple file selections (bug #2487)</li>
  <li>Fix pathbar match filtering (Bug #16267)</li>
  <li>Avoid unreadable names in detailed view (Bug #16391)</li>
  <li>Prevent crash when renaming file (Bug #10805)</li>
  <li>Use libxfce4ui close-multiple-tab dialog (Bug #16254)</li>
  <li>NULL is the proper sentinel for g_object_new() (Bug #16310)</li>
  <li>Replace deprecated G_FILE_MONITOR_EVENT_MOVED (Bug #16328)</li>
  <li>Drop timer on finalize (Bug #15305)</li>
  <li>Store column width setting asynchronously and only once (Bug #15305)</li>
  <li>When move to trash fails, ask whether to delete files (Bug #15975)</li>
  <li>Ctrl+Mousewheel does not enlarge/shrink entries (for detailed listview) (Bug #15936)</li>
  <li>Use symbolic icon for eject (Bug #16281)</li>
  <li>Extra padding for Eject button when scrollbar is visible (Bug #15312)</li>
  <li>lower minimum required pango version to 1.38.0 (Bug #16138)</li>
  <li>Thunar 1.8.10 crashing on startup in FreeBSD and Fedora, caused bynonfunctional pango version check (Bug #16136, Bug #16138)</li>
  <li>Thunar does not show a context menu on right-click when started viatrash-panel-plugin (Bug #16000)</li>
  <li>thunar-job: callee should keep track of the number of processed files(Bug #16117)</li>
  <li>Make sure icon text is centered after unchecking "Text beside icons"</li>
  <li>Remove the vertical gap between icon and its label (Bug #16041)</li>
  <li>Fix icon view alignment (Bug #16107)</li>
  <li>Not possible to grab scrollbar on the very right pixels when Thunaris maximized (Bug #16050)</li>
  <li>Wrap text of error dialog</li>
  <li>Not possible to empty the trash via the pathbar context menu</li>
  <li>Crash on refresh if remote folder has been removed (Bug #15961)</li>
  <li>Center action buttons in conflict dialog window (Bug #15973) -Prevent usage of deprecated gtk_dialog_get_action_area</li>
  <li>Ensure user customizable action uses currently selected file path(Bug #15119)</li>
  <li>make filename label selectable in conflict dialog window</li>
  <li>Center action buttons in conflict dialog window (Bug #15973)</li>
  <li>Clear user customizable action shortcut when the action is deleted</li>
  <li>Prevent Gtk-CRITICAL when adding or modifying a user customizableaction.</li>
  <li>Thunar SendTo Email: Add missing archive formats for archivedetection (Bug #15917)</li>
  <li>sendto plugin: fix content type resolution. (Bug #15916)</li>
  <li>sendto plugin: extract function tse_file_is_archive (Bug #15916)</li>
  <li>sendto plugin: move g_file_info_get_content_type() call out of thecycle (Bug #15916)</li>
  <li>Make thunar-settings.desktop name more descriptive</li>
  <li>All glory to lowercase (Bug #15394)</li>
  <li>Revert "Prevent crash after updating thunar if old thunar gtk2 deamonis still running"</li>
  <li>Prevent unnecessary fallback copy-delete in file move when overwriting</li>
  <li>Fix possible memory leak</li>
  <li>After a file operation, reload relevant parent folders directly instead of reloading the provided view (view not provided e.g. on DnD or DBus event) - Only reload folders manually if no folder monitor is running to prevent double-reloads. (should save some performance) - This will reload the view correctly even if the location does not support folder monitors - It as well fixes a Bug #15704 - Ghost files remain after moving files on a sftp remote</li>
  <li>Show debug message if creating a folder monitor failed</li>
  <li>Fix popup menus size (Bug #15832)</li>
  <li>Add Alt+D as alternative accelerator for Open Location (Bug #15828)</li>
  <li>Do not insert hyphens at intra-word line breaks (Bug #15856)</li>
  <li>Add a confirmation dialog when closing a window with multiple open tabs.</li>
  <li>Remove 'auto-expand folders' from tree-view since it causes bad usability with keyboard (Bug #15743)</li>
  <li>preferences: Add button icons to Help/Close</li>
  <li>Use designated initializer to avoid compile warnings (Bug #15734)</li>
  <li>Prevent premature disposal of clipboard manager (Bug 15635)</li>
  <li>Do not register "send to" as last used app (Bug #14118)</li>
  <li>Dont restart the folder monitor on each refresh - Fixes "ghost files after moving files" (Bug #13364)</li>
  <li>Fix XML declaratation in uca.xml (Bug #13623)</li>
  <li>Always show the executable checkbox (Bug #15605)</li>
  <li>Get rid of bitwise AND in logical expression (Bug #15352)</li>
  <li>Replace Trash action with Delete as needed (Bug #15352)</li>
  <li>Improve explanation string for "invert selection" action (Bug #15625)</li>
  <li>Prevent new bookmarks on sidebar when dragging files (Bug #14921)</li>
  <li>Rename (Bug #15579)</li>
  <li>Update mimeapps.list only when necessary (Bug #15533)</li>
  <li>Improve layout of Permissions tab (Bug #15557)</li>
  <li>Keep "Open with" menu items updated (Bug #15530)</li>
  <li>Rename Camelcase to Title Case (Bug #15460)</li>
  <li>mismatched names between thunar.appdata.xml and thunar.desktop (Bug #15498)</li>
  <li>Remove superfluous shell script "ThunarBulkRename" (Bug #15373)</li>
  <li>Remove superfluous .desktop file "Thunar-folder-handler.desktop.in" - forgot to update POTFILES.in (Bug #15467)</li>
  <li>Restore "Empty File" menu icon (Bug #15540)</li>
  <li>Remove superfluous .desktop file "Thunar-folder-handler.desktop.in" (Bug #15467)</li>
  <li>thunar-sendto-email.desktop: use xdg mail-send icon (Bug #15499)</li>
  <li>Removed # vi:set encoding=UTF-8: from .desktop files (Bug #15466)</li>
  <li>Deactivate "Move to Trash" menu entry on volumes without trash (Bug #15352)</li>
  <li>Do not check G_FILE_ATTRIBUTE_ACCESS_CAN_WRITE anymore (Bug #15367)</li>
  <li>Fix crash on unmounted volume in tree pane right click (Bug #15452)</li>
  <li>Replace text "Enter the new name:" by "Enter the name:" for file creation dialog (Bug #15423)</li>
  <li>Restore right-click drag and drop functionality (Bug #14583)</li>
  <li>Fix queued context menu popup</li>
  <li>Fix session startup priority</li>
  <li>SEGV (11) on USB-flash connection (Bug #13813)</li>
  <li>Fix how wallpaper is set on Gnome</li>
  <li>man page incorrectly suggests '-v' instead of '-V' (Bug #15374)</li>
  <li>Thunar crashes after clicking when XDG_SESSION_TYPE isn't properly set (Bug #15366) - Use $XDG_CURRENT_DESKTOP instead of gdk_x11_get_default_xdisplay to decide which desktop is currently used.</li>
  <li>Hide unneeded context menu entries for folder "Trash" in tree view</li>
  <li>tree view jumps (scrolls) when clicking on a directory II (Bug #15174)</li>
  <li>delete key in tree-view can delete the user home folder (Bug #15095)</li>
  <li>added two generated files to gitignore</li>
  <li>Pathbar buttons are not resized on folder rename (#15024)</li>
  <li>Make toggle for the delete entry affect side pane too</li>
  <li>Make 'Move to Trash' icon the same as in main pane</li>
  <li>Fix pathbar to on middle click open folders in new tabs (Bug #15302)</li>
  <li>Load templates synchronously (Bug #15200)</li>
  <li>Job is now optional for thunar_io_scan_directory</li>
  <li>Fix compiler error -Wcast-function-type (GCC 8)</li>
  <li>Fix g_type_class_add_private is deprecated</li>
  <li>Bump glib minimal required version</li>
  <li>Fix compiler error -Wcast-function-type (GCC 8)</li>
  <li>Correctly check if destination is writable (Bug #14718)</li>
  <li>tree view jumps (scrolls) when clicking on a directory (Bug #15174)</li>
  <li>Do not exit when dbus name registration fails (Bug #15149)</li>
  <li>renamed org.freedesktop.FileManager1.service.in to org.xfce.Thunar.FileManager1.service.in to avoid name clashes  (Bug #12414)</li>
  <li>Exit when name org.freedesktop.filemanager1 lost on message-dbus (Bug #15088)</li>
  <li>Thunar sometimes mounts USB drives with root permission (Bug #14719)</li>
  <li>FreeBSD -Thunar crash due to passing null to strcmp() (Bug #15059)</li>
  <li>Stuck tree pane makes Thunar use 100% CPU (bug #10161)</li>
  <li>Add support for org.freedesktop.FileManager1 (Bug #12414)</li>
  <li>Still 8sec delay on logout when there is an open thunar window (Bug #15008)</li>
  <li>Thunar does not recover directories opened in a previous session (Bug #14969)</li>
  <li>Thunar utilizes 100%CPU when the parent directory is not readable (Bug #14900) - as well fixes tree-view not showing the related folder</li>
  <li>Fix undo logic on rename dialog (Bug #14987)</li>
  <li>Add support for CTRL+Z in rename dialog (Bug #14956)</li>
  <li>Thunar rarely freezes when switching to tree-view (#14960)</li>
  <li>Expand scroll window of file operation progress dialog (Bug #14946)</li>
  <li>Make labels in permissions chooser wrap</li>
  <li>Crash in tree-view when multiple windows are open (Bug #14714)</li>
  <li>Improve description of UCA command parameters (Bug #14720)</li>
  <li>Fixed compiler warning, removed unused code and added comment to probably unused motion_notify_event</li>
  <li>Fixed Gtk-WARNING - double-add widget to GtkBin container</li>
  <li>update NEWS file with 1.8.2 release info</li>
  <li>Fix free of NULL pointer which caused GLib-GObject-CRITICAL</li>
  <li>Allow tabs switch with Ctrl + PgUp/PgDown (Bug #9585)</li>
  <li>Right mouse click will not display icons for custom actions. (Bug #14685)</li>
  <li>Added infobox to preferences in order to inform about missing gvfs implications.</li>
  <li>Add preferences item to toggle the delete in the context menu (Bug #13327)</li>
  <li>Thunar Bulk Renamer has a start limit (9999) to rename by number (Bug #14437)</li>
  <li>thunar-uca: Fix spacing for the editor</li>
  <li>thunar-sbr: Allow date format to expand</li>
  <li>thunar-sbr: Utilize a grid for the number renamer</li>
  <li>thunar-sbr: Use grid for better alignment with date renamer</li>
  <li>thunar-apr: Reduce spacing between standard params and options</li>
  <li>Copy Dialog: Increase icon size, use standard edit-copy icon</li>
  <li>Renamer: Use an infobar for the error message</li>
  <li>Properties: Apply 6/12/18 spacing</li>
  <li>Preferences: Apply 6/12/18 spacing</li>
  <li>Show file size in binary units by default (Bug #14653)</li>
  <li>Add a small delay when dismissing notifications (Bug #14552)</li>
  <li>Add support for folder.jpg (Bug #14576)</li>
  <li>Fix UAC forgets keyboard shortcut (Bug #14617)</li>
  <li>Add missing top border to side pane</li>
  <li>Add preference to open new thunar instances as tabs, if there is an existing thunar window (Bug #13314)</li>
  <li>File / Folder size text in statusbar sometimes is ambiguous II (Bug #14203) - fixed problem with empty folders ( no text returned )</li>
  <li>File / Folder size text in statusbar sometimes is ambiguous (Bug #14203)</li>
  <li>Fix compile warning (GtkButton cast) (Bug #14601)</li>
  <li>Add Ctrl+= as alternative accelerator for Zoom In (Bug #14586)</li>
  <li>Add label to cancel button in file operation dialog</li>
  <li>Show numeric(%) progress in file operation dialog (Bug #14102)</li>
  <li>More options for thumbnail size (Bug #14451) - added three additional zoom-levels and icon-sizes (160px, 192px and 256px) - added usage of "large" thumbnails (max 256px x 256px) - automatically use large thumbnails for icon-size > 128px - renamed zoom-levels, usage of percentage values - renamed icon-size values, count in pixels - support for old naming</li>
  <li>Fix of messed up row-height with disabled "automatically expand columns as needed" in detailed view. (Part III) - use of "gdk_threads_add_idle" to make sure that queue_resize is finished before thunar_details_view_set_fixed_columns is called - revert of making "thunar_standard_view_reload" public, not required any more (Bug #14548)</li>
  <li>Update progress when deleting files (Bug #14102)</li>
  <li>Avoid segfault on file operations (Bug #14281)</li>
  <li>Fix of messed up row-height with disabled "automatically expand columns as needed" in detailed view. (Part II) (Bug #14548)</li>
  <li>Add missing parameter to ThunarBrowserPokeDeviceFunc function</li>
  <li>Fix of messed up row-height with disabled "automatically expand columns as needed" in detailed view. (Bug #14548)</li>
  <li>Add german (and custom) date format (Bug #14527)</li>
  <li>Fix build without HAVE_GIO_UNIX (Bug #12863)</li>
  <li>Fix standard view border during drag and drop (Bug #14523)</li>
  <li>Deactivate spinner when user cancels volume mount (Bug #14536)</li>
  <li>Avoid critical message upon window close</li>
  <li>Don't try to load menu providers if current dir is invalid</li>
  <li>Add property to enable/disable frames on thumbnails (Part II) (Bug #14433) - Fix GLib-GObject-CRITICAL at startup</li>
  <li>Fixed wrong/outdated/confusing installation manual in INSTALL (File INSTALL is not generated any more, but thunar-specific now) (Bug #14521)</li>
  <li>Add property to enable/disable frames on thumbnails (Bug #14433)</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>
  <li>Launch application reparenting them to init</li>
  <li>Bump gtk minimum version to 3.22.0</li>
  <li>bump glib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>Sort by frecency (Bug #9265)</li>
  <li>Add small delay before reloading menu tree (!6)</li>
  <li>Add new app icon and switch to rDNS</li>
  <li>Add keywords to .desktop files to xfce4-appfinder</li>
  <li>Switch to a few symbolic icons</li>
  <li>Clear entry's error icon and tooltip</li>
  <li>Remove unnecessary code for unsupported glib versions</li>
  <li>Remove padding from context menu</li>
  <li>Fix memory leaks when sorting items</li>
  <li>Simplify buttons layout</li>
  <li>Drop close button</li>
  <li>Fix Makefile for scalable to use svg</li>
  <li>Use shared field codes expansion</li>
  <li>Limit popup completion width to be same as entry</li>
  <li>Record last commands only once (Bug #15767)</li>
  <li>Bug #16717: Move from exo-csource to xdt-csource</li>
  <li>Make Preferences button always visible (Bug #16489)</li>
  <li>Fix gtk version checking</li>
  <li>Hidden option to disable entry completion (Bug #15827)</li>
  <li>Use casefolded string when searching for apps not commands (Bug #15893)</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>Bump GLib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>Make dbusmenu-gtk3-0.4 optional, disables StatusNotifier integration</li>
  <li>gobject introspection wants a capital letter for the gir file</li>
  <li>Drop support for Gtk2 and 4.6 plugins</li>
  <li>Don't show or try to load Gtk2 plugins anymore</li>
  <li>panel: Fix intellihide with CSD (Fixes #368)</li>
  <li>panel: Fix autohide state machine</li>
  <li>panel: Fix cancellation of autohide animation</li>
  <li>panel: Immediately show panel in intellihide</li>
  <li>panel: Don't tamper with leave_opacity value (Bug #16296)</li>
  <li>panel: Add "popdown-speed" property to adjust autohide animation</li>
  <li>panel: Make sure "span monitors" is conditionally sensitive</li>
  <li>panel: Add dark mode preference</li>
  <li>panel: Improve the marching ants animation</li>
  <li>panel: Draw border based on position and length</li>
  <li>autohide: Improve animation support for intellihide</li>
  <li>autohide: Don't animate hiding of floating panels</li>
  <li>autohide: Add sliding out animation</li>
  <li>settings: Use spinbuttons for size and nrows</li>
  <li>settings: Update item listview toolbar</li>
  <li>settings: Add keywords for discoverability (Bug #10694)</li>
  <li>tasklist: Fix wireframe for CSD windows (Fixes #338)</li>
  <li>tasklist: Auto-adjust icon size (Closes #90)</li>
  <li>tasklist: Hide brackets for min windows by default</li>
  <li>tasklist: Fix crash middle-click-closing grouped windows (Bug #16410)</li>
  <li>tasklist: Add "Launch New Instance" item to menu (Fixes #158)</li>
  <li>tasklist: Allow keyboard navigation within groups (Fixes #270)</li>
  <li>tasklist: Fix drag&drop in deskbar mode (Bug #16298)</li>
  <li>tasklist: Resize when windows get removed (Bug #14394)</li>
  <li>tasklist: Limit blinking notification</li>
  <li>action buttons: Switch to new session icons (Fixes #332)</li>
  <li>action buttons: Fix combobox signal</li>
  <li>action buttons: Drop 'inverted buttons' setting (#223)</li>
  <li>action buttons: Add button title options (Bug #8980)</li>
  <li>action buttons: Fix separator width (Bug #15558)</li>
  <li>launcher: Set plugin icon as fallback (Fixes #329)</li>
  <li>launcher: Fix launcher menu button state (Fixes #264)</li>
  <li>launcher: Fix crash with actions menu (Bug #16823)</li>
  <li>launcher: Show desktop actions in context menu</li>
  <li>launcher: Fix visual state of arrow-button (Bug #15818)</li>
  <li>launcher: Avoid excessive left padding on popup menu (Bug #15819)</li>
  <li>applicationsmenu: Correctly block autohiding (Fixes #287)</li>
  <li>applicationsmenu: Use panel's icon size</li>
  <li>applicationsmenu: Listen to icon theme changes (Bug #15861)</li>
  <li>directorymenu: Add create folder/document menuitems (Bug #15639)</li>
  <li>directorymenu: Add option to hide folder/terminal menuitems (Bug #15630)</li>
  <li>windowlist: Make layout consistent with xfdesktop</li>
  <li>windowmenu: Replace deprecated gtk_widget_modify_font</li>
  <li>pager: Finish face-lift of settings dialog</li>
  <li>pager: Rework settings dialog layout</li>
  <li>pager: Silence warning</li>
  <li>pager: Only show scroll-option with buttons</li>
  <li>pager: Add option to show ws number</li>
  <li>pager: Fix scrolling in pager-buttons (Bug #15614)</li>
  <li>clock: Drop leading zeros for days in default layout</li>
  <li>clock: Add back hour:min to format presets (Bug #16035)</li>
  <li>clock: Validate timezone entry (Bug #16036)</li>
  <li>systray: Basic support for symbolic icons</li>
  <li>systray: Drop "Show frame" option (Bug #14186)</li>
  <li>systray: Fix icons without compositing (Bug #14577)</li>
  <li>systray: Improve app icon lookup</li>
  <li>Merge xfce4-statusnotifier-plugin to the panel</li>
  <li>add-items: Drop not-so-helpful dialog subtitle</li>
  <li>add-items: Bump default dialog size (Fixes #258)</li>
  <li>add-items: Fix XfceTitledDialog with CSD</li>
  <li>plugins: Add new rDNS icons</li>
  <li>plugins: Show custom menu items below plugin name</li>
  <li>plugins: Fix enter/leave opacity w/o compositing (Bug #14577)</li>
  <li>tic-tac-toe: Fix XfceTitledDialog with CSD</li>
  <li>Fix launcher in default panel configuration</li>
  <li>Use new xfce_spawn API</li>
  <li>Enable dark-mode by default</li>
  <li>Fixed icon for about dialog and added more icons for better scaling</li>
  <li>intellihide: Check if cursor is over the panel (Fixes #311)</li>
  <li>Add Zoom to known applications</li>
  <li>Extend list of known (legacy) applications</li>
  <li>Drop statusnotifier from default panel layout</li>
  <li>Rename statusnotifier to systray</li>
  <li>Add Python statusnotifier for testing</li>
  <li>Use shared field codes expansion</li>
  <li>dark-mode: Make property unique across panels</li>
  <li>Add Gio to libxfce4panel gir includes</li>
  <li>Improve docs for xfce_panel_plugin_position_widget (Bug #9438)</li>
  <li>Add new app icon and rDNS icon name</li>
  <li>Fix panel build with vala 0.48 (Bug #16426)</li>
  <li>Fix GTimeVal deprecation (Bug #16643)</li>
  <li>Fix memory leak in panel plugin wrapper (Bug #16640)</li>
  <li>Add xfce_panel_plugin_menu_destroy to plugin API</li>
  <li>Improve wording in "Remove plugin" dialog (Bug #9000)</li>
  <li>Always provide files for vala binding in dist tarball</li>
  <li>Use an empty placeholder icon for launcher (Bug #15819)</li>
  <li>Remove extra underscore (Bug #16266)</li>
  <li>Fix autohide with bg color or image (Bug #16064)</li>
  <li>docs: Fix build by dropping unused refs (Bug #16031)</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
  <li>Bump GLib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>Remove GSourceFunc casts</li>
  <li>settings: Accept all types of GIcon</li>
  <li>settings: Add tooltips to image-buttons</li>
  <li>settings: Better app icon lookup</li>
  <li>settings: Be more precise in infobar wording</li>
  <li>settings: Drop inline-toolbar button labels</li>
  <li>settings: Move autostart info to docs.xfce</li>
  <li>settings: Don't make 'saved sessions' tab reorderable</li>
  <li>settings: Adjust inline toolbar</li>
  <li>settings: Tweak 'Current Session' tab</li>
  <li>settings: Make 'App Autostart' columns sortable</li>
  <li>settings: Fix 'Current session' column width (!10)</li>
  <li>settings: Add sort-on-click to columns in "Current Session" tab (!3)</li>
  <li>settings: Don't warn when there are no saved sessions (Fixes #62)</li>
  <li>settings: Add keywords for discoverability (Bug #10694)</li>
  <li>logout-dialog: Add new icons</li>
  <li>logout-dialog: Swap icon names and fallbacks</li>
  <li>logout-dialog: Bump icon size to 48px</li>
  <li>Fix session crash at logout (Bug #16105)</li>
  <li>Update .gitignore</li>
  <li>Add README.md to EXTRA_DIST</li>
  <li>Avoid potential format-string vulns (Issue #65)</li>
  <li>Add more guards around GErrors</li>
  <li>Fix potential crash in suspend and shutdown (Fixes #65)</li>
  <li>Only clean generated sources when in maintainer mode.</li>
  <li>Field codes expansion API update</li>
  <li>Expand field codes</li>
  <li>Use new icon in settings dialog (Bug #16885)</li>
  <li>Add new application icon and rDNS icon name</li>
  <li>Switch to symbolic window-close icons</li>
  <li>Drop GDM compatibility code otherwise the session locale might be set to an invalid value.</li>
  <li>Bug #16632: Segfault when suspending without pm-suspend installed</li>
  <li>Silence runtime warning (Bug #15731)</li>
  <li>Add a GnuPG 2.1+ mode</li>
  <li>Free the intermediate "cmd" variable in xfsm_startup_init()</li>
  <li>Re-add xfsm_startup_shutdown() call to xfce4-session main()</li>
  <li>Remove sys/sysctl.h on linux platform</li>
  <li>Bug #16717: Move from exo-csource to xdt-csource</li>
  <li>Try xfce screensaver before cinnamon (Bug #16223)</li>
  <li>Add support for xfce4-screensaver (Bug #16522)</li>
  <li>Sort saved sessions by most recently used (Bug #15338)</li>
  <li>Do not show translation info on --help output</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em></h2>
<ul>
  <li>Bump GLib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>Add dependency to python</li>
  <li>settings-manager: Correctly show/hide the filterbar</li>
  <li>settings-manager: Switch to GtkSearchEntry</li>
  <li>settings-manager: Put filter in separate bar (Fixes #226)</li>
  <li>settings-manager: Simplify redrawing of search results (Fixes #141)</li>
  <li>settings-manager: Hide filter entry in plugged dialogs</li>
  <li>settings-manager: Ensure searchbox has initial focus (Bug #16890)</li>
  <li>settings-manager: Fix XfceTitledDialog layout with CSD</li>
  <li>settings-manager: Drop setting the old header style</li>
  <li>settings-manager: Make sure content determines size</li>
  <li>settings-manager: Use symbolic find/clear icons</li>
  <li>settings-manager: Improve search by including keywords (Bug #10694)</li>
  <li>settings-manager: Show min and max buttons</li>
  <li>mime: Merge in exo-preferred-applications</li>
  <li>mime: Add 'Open with...' button</li>
  <li>mime: Accept Thunar's old id name (Fixes #247)</li>
  <li>mime: Rename dialog and icon to 'Default Applications'</li>
  <li>mime: Add new generic launcher icons</li>
  <li>mime: Add close and help button icons</li>
  <li>mime: Fix double free</li>
  <li>mime: Fix Nautilus icon name</li>
  <li>mime: Fix window icon name</li>
  <li>mime: Rename Thunar to thunar</li>
  <li>settings-editor: Fix scrollbar for channels</li>
  <li>settings-editor: Point to correct docs URL (#245)</li>
  <li>keyboard: Improve inline toolbar alignment</li>
  <li>keyboard: Make 'system defaults' a GtkSwitch</li>
  <li>keyboard: Make all table columns sortable</li>
  <li>keyboard: Adjust width of shortcut column (Fixes #223)</li>
  <li>keyboard: Update dialog UI</li>
  <li>keyboard: Show shortcuts with keycap class</li>
  <li>keyboard: Fix log flood (bug #16521)</li>
  <li>keyboard: Fix crash when editing shortcut (Bug #15958)</li>
  <li>keyboard: Support libxfce4ui XfceTitledDialog new API</li>
  <li>display: Center minimal dialog on monitor where cursor is</li>
  <li>display: Custom scale changes are display changes</li>
  <li>display: Improve layout in settings dialog</li>
  <li>display: Allow resizing of minimal dialog (Bug #15450)</li>
  <li>display: Resize display widget according to scale</li>
  <li>display: Move scaling presets to glade</li>
  <li>display: Set minimum scale to 0.1</li>
  <li>display: Improve state machine for scaling option</li>
  <li>display: Initial fractional scaling support (Fixes #162)</li>
  <li>display: Mark preferred mode with an asterisk</li>
  <li>display: Add init function for aspect ratios</li>
  <li>display: Right-align the display ratio</li>
  <li>display: Fixed warning and removed ratio</li>
  <li>display: Improve look of ratio</li>
  <li>display: Show ratio next to display resolution</li>
  <li>display: Fix icon name for primary indicator</li>
  <li>display: Initialize crtc->scalex/y (Bug #15971)</li>
  <li>appearance: Add 'Add' button to install themes (Fixes #193)</li>
  <li>appearence: Sync theme, icon, font names to gsettings</li>
  <li>appearance: Drop toolbar style setting (Bug #16665)</li>
  <li>appearance: Fix width of DPI spinbutton (Bug #16125)</li>
  <li>appearance: Fix list refresh on DnD (Fixes #213)</li>
  <li>appearance: Only show themes that support Gtk3 (Bug #15849)</li>
  <li>settings-editor: Add labels to toolbar items</li>
  <li>settings-editor: Enable tooltips and ellipsizing for `Value` column</li>
  <li>settings-editor: Add consistent inline-toolbar</li>
  <li>color: Adjust padding of dialog</li>
  <li>color: Add labels to toolbar</li>
  <li>color: Tweak colors  of icon</li>
  <li>color: Fix crash in add-profiles dialog (Bug #15876)</li>
  <li>xfsettingsd: avoid default double fork</li>
  <li>xfsettingsd: Correctly get current xrandr scale</li>
  <li>xfsettingsd: Add --disable-wm-check flag (Bug #16128)</li>
  <li>Replace README file with README.md</li>
  <li>Disable UPower support by default</li>
  <li>Use just binary name (instead of full path) as argument</li>
  <li>Convert xfce4-compose-mail to python</li>
  <li>Expand desktop entry field codes</li>
  <li>Don't crash when upowerd isnt present (bug #60)</li>
  <li>Fix xfconf-related memory leaks</li>
  <li>Switch to new app icons and rDNS icon names</li>
  <li>Increase mouse cursor upper bound for HiDPI (bug #16042)</li>
  <li>exo-compose-email -> xfce4-compose-email</li>
  <li>Fix various alignments and comments</li>
  <li>Drop no-longer-needed XfceMimeHelperChooserDialog</li>
  <li>Bug #16679: Make "Profiles matching" sentence translatable</li>
  <li>Bug #16717: Move from exo-csource to xdt-csource</li>
  <li>Handle failure to get Xkl engine for display (bug #16017)</li>
  <li>Fix GTimeVal deprecation (Bug #16645)</li>
  <li>Fix keywords and mark them  as translateable</li>
  <li>Use proper fallback configuration on "apply" and "toggle off" (Bug #16476)</li>
  <li>Add keywords to .desktop files (Bug #10694)</li>
  <li>Set "gtk-titlebar-middle-click" to "lower" by default</li>
  <li>dialogs: Ensure dialogs have min and max buttons</li>
  <li>Bump libxfce4ui dependency to 4.15.1</li>
  <li>xsettings: Use CSD for GtkDialogs by default</li>
  <li>Ensure the newly labeled 'Xfce Settings Daemon' is translated</li>
  <li>Switch to symbolic window-close icon</li>
  <li>Improve string for session managers</li>
  <li>Do not show translation info on --help output</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em></h2>
<ul>
  <li>bump glib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>Remove xfconf perl binding</li>
  <li>Enable GSettings backend by default</li>
  <li>Initialize Xfconf when the backend is to be used</li>
  <li>Use gsettings as a common channel name</li>
  <li>Add Bash completion for xfconf-query</li>
  <li>Fix make distcheck and enable it on gitlab CI</li>
  <li>xfconf-cache: Fix access to freed data (#16)</li>
  <li>Test for #16</li>
  <li>Disable parallelism on all tests</li>
  <li>Fix stray double-quote in bash-completion PKG_CONFIG invocation</li>
  <li>Fix distcheck bash-completion file error</li>
  <li>Use a custom test-driver</li>
  <li>Always provide files for vala bindings in dist tarball</li>
  <li>Bug #15960: Add some missing xfconf_shutdown() in xfconf-query</li>
  <li>Bug #15951: Fix 'xfconf_get_error_quark' introspecting warning</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>Add keywords to .desktop files in xfdesktop</li>
  <li>Remove extra separator from context menu</li>
  <li>Move 'Open in New Window' of root window context menu (#59)</li>
  <li>Remove "Properties..." entry from desktop context menu (#59)</li>
  <li>Replace links to bugzilla by gitlab and update copyright year</li>
  <li>Pull in new fallback icon from Adwaita</li>
  <li>Add new app icon and switch to rDNS icon name</li>
  <li>Avoid redundant calls to backdrop_changed_cb (Bug #16773)</li>
  <li>Bug #16717: Move from exo-csource to xdt-csource</li>
  <li>Increase minimum desktop icon size to 16 (Bug #16667)</li>
  <li>Correct spelling of file system (Bug #16543)</li>
  <li>Increase desktop icon increments to 2 (Bug #16668)</li>
  <li>Unselect all items after single click activation</li>
  <li>Fix memory leak when reconnecting DP monitor (Bug #16314)</li>
  <li>Fix regression caused by Bug #16342</li>
  <li>Fix transparent background color (Bug #16380)</li>
  <li>Add Shift+Ctrl+N keybinding for Create Folder (Bug #15660)</li>
  <li>Ignore modifier key events in type-ahead find (Bug #11149)</li>
  <li>Added type-ahead find for Desktop icons (Bug #11149)</li>
  <li>Do not insert hyphens at intra-word line breaks (Bug #16339)</li>
  <li>Replace deprecated G_FILE_MONITOR_EVENT_MOVED (Bug #16342)</li>
  <li>Update thumbnail when file changes (Bug #14919)</li>
  <li>Add DnD support for application/octet-stream (Bug #14919)</li>
  <li>Add padding to custom actions without icon (Bug #14628)</li>
  <li>Fix yet another rubber band DnD issue (Bug #16046)</li>
  <li>Reintroduce workaround for Bug #11283</li>
  <li>Show file names in tooltips (Bug #15899)</li>
  <li>fallback style: Highlight selected icons (Bug #15866)</li>
  <li>windowlist: Fix ellipsizing (Bug # 15851)</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>Add `cycle_minimized` option</li>
  <li>Add new xfwm4 icons</li>
  <li>build: Increase GTK+ requirement to 3.22</li>
  <li>cleanup: prefer zero initialized memory allocation</li>
  <li>client: Allow transients for group to be minimized</li>
  <li>client: Complete client state even on different workspaces</li>
  <li>client: Do not always send a synthetic configure event</li>
  <li>client: Fix hostname not showing initially</li>
  <li>client: Keep tiled size of windows</li>
  <li>client: Make above/below consistent</li>
  <li>client: Protect against XError in XKillClient()</li>
  <li>client: Really send synthetic configure notify</li>
  <li>client: Rely in XRes reported PID is available</li>
  <li>client: Send synthetic configure on force redraw</li>
  <li>client: Small cleanup</li>
  <li>client: Small cleanup</li>
  <li>client: Toggle tiling on key shortcut</li>
  <li>client: Use GdkRectangle for saved size/position</li>
  <li>clients: Fix a crash on FreeBSD</li>
  <li>common: Add a xfwm_monitor_is_primary function</li>
  <li>common: There might be no primary monitor</li>
  <li>compositor: Add cwindow_hash to optimize find_cwindow_in_screen</li>
  <li>compositor: Add define for compositor_timeout_cb interval</li>
  <li>compositor: Add support for GL_ARB_sync</li>
  <li>compositor: Add support for opaque regions</li>
  <li>compositor: Adjust to the actual number of buffers</li>
  <li>compositor: Avoid XError when disabling compositor</li>
  <li>compositor: bind/release texture on each GLX swap</li>
  <li>compositor: Blacklist SVGA3D renderer</li>
  <li>compositor: Check for XError when adding windows</li>
  <li>compositor: Check if compositor is enabled</li>
  <li>compositor: Clip opaque region against window shape</li>
  <li>compositor: Copy entire content for GLX buffers</li>
  <li>compositor: Damage on opaque region update only if visible</li>
  <li>compositor: Damage opaque region if changed</li>
  <li>compositor: Do not try to clip opaque region if none</li>
  <li>compositor: Don't draw shadow on maximized windows</li>
  <li>compositor: Don't repaint a screen of zero size</li>
  <li>compositor: Fix build with older epoxy versions</li>
  <li>compositor: Fix compilation issue with Xpresent</li>
  <li>compositor: Fix unwanted change</li>
  <li>compositor: Free GLX data when really using GLX</li>
  <li>compositor: Handle XFixes XError</li>
  <li>compositor: Ignore opaque region for shaded windows</li>
  <li>compositor: Limit damage region to the screen</li>
  <li>compositor: Limit opaque region clipping to window extents</li>
  <li>compositor: Log fence and GLX swap time in debug mode</li>
  <li>compositor: Make cursor zoom optional</li>
  <li>compositor: Move fence sync to redraw_glx</li>
  <li>compositor: Move fence triggered to its own function</li>
  <li>compositor: No hashtable if compositor is disabled</li>
  <li>compositor: No need to update compositor window on configure</li>
  <li>compositor: Only accumulate damage with multiple buffers</li>
  <li>compositor: Opaque region applies to client window</li>
  <li>compositor: Optimize repaint without vblank</li>
  <li>compositor: Really avoid painting a screen of zero size</li>
  <li>compositor: Release current GLX context on teardown</li>
  <li>compositor: Release overlay window last</li>
  <li>compositor: Remove automatic redirect support</li>
  <li>compositor: Remove useless trace message</li>
  <li>compositor: Return early if a Present swap is pending</li>
  <li>compositor: Reuse client size</li>
  <li>compositor: Set swap control if possible</li>
  <li>compositor: Smarter vblank auto mode</li>
  <li>compositor: Trap XErrors when disabling compositor</li>
  <li>compositor: Use a GLX drawable per buffer</li>
  <li>compositor: Use a message instead of warning</li>
  <li>compositor: use actual atom</li>
  <li>compositor: Use actual surface position and size</li>
  <li>compositor: use g_slice allocator for compositor windows</li>
  <li>compositor: Warn for missing epoxy GL function</li>
  <li>cycle: Do not grab the pointer for alt-tab</li>
  <li>cycle: Revert to original window when clicking</li>
  <li>debug: Fix build in debug mode</li>
  <li>device: Check standard passive button grabs</li>
  <li>device: Move error trap/push closer to X11 grabs</li>
  <li>device: Remove leftover conditional</li>
  <li>display: Add support for XRes X11 extension</li>
  <li>display: Remove custom XError handler</li>
  <li>frame: Do not use the pre-computed font height</li>
  <li>frame: Protect XShape requests</li>
  <li>frame: Update frames when scale-factor is changed</li>
  <li>icons: Fix background of svgs and png exports</li>
  <li>input: Disable XI2 by default</li>
  <li>main: Add debug command line option</li>
  <li>main: Add short command line options</li>
  <li>main: Clean up long lines</li>
  <li>main: Don't use the compositor if not available</li>
  <li>main: Enable compositor by default</li>
  <li>menu: Restore “Always below” options</li>
  <li>More XError traps</li>
  <li>More XErrors traps</li>
  <li>moveresize: Restore window state on move</li>
  <li>netwm: Do not raise window if activate is set to none</li>
  <li>pixmap: Fix rendering without XRender</li>
  <li>pixmap: Use a safer strncpy()</li>
  <li>pixmap: Use strncpy()</li>
  <li>Remove useless autotools macros and Makefile targets</li>
  <li>screen: Add a myScreenHasPrimaryMonitor function</li>
  <li>screen: Remove pre-computed font height</li>
  <li>setting-dialog: Add keywords to .desktop files</li>
  <li>settings-dialog: Fix drag and drop of buttons</li>
  <li>settings: Add 'Always on top' to the double click action</li>
  <li>settings: Add a UI option for desktop zooming</li>
  <li>settings: Duplicate string gvalues</li>
  <li>settings: Fix compiler warning</li>
  <li>settings: Remove default alphabetical sorting of keyboard shortcuts </li>
  <li>stacking : Fix raise delay</li>
  <li>tabwin: Comply with the primary monitor setting</li>
  <li>tabwin: Ensure selected windows remain selected</li>
  <li>themes: Adjust shadows size/opacity</li>
  <li>themes: Fix leftover SVG overlay</li>
  <li>themes: Remove title shadow</li>
  <li>themes: Use smaller, lighter shadows</li>
  <li>Fix errorTrap leak in free_win_data</li>
  <li>Fix g_type_class_add_private deprecation</li>
  <li>Fix GTimeVal deprecation</li>
  <li>transients: Do no search for parent in lower layers</li>
  <li>Use --enable-debug=yes when compiling from git</li>
  <li>workarea: Ignore change without a primary monitor</li>
  <li>xfwm4-settings: Keyboard: Enable column sorting</li>
  <li>xsync: Handle XError</li>
</ul>

<h2>Power Manager <em>(xfce4-power-manager)</em></h2>
<ul>
  <li>bump glib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>settings: Unclutter system and display tabs</li>
  <li>settings: Adjust title and show min/max buttons</li>
  <li>settings: Allow critical battery level up to 70% (Fixes #67)</li>
  <li>settings: Fix GtkSwitch signal handlers (Issue #99)</li>
  <li>settings: Move % sign out of spinbutton (Bug #15994)</li>
  <li>settings: Add keywords for discoverability (Bug #10694)</li>
  <li>panel-plugin: Add (optional) Presentation mode indicator (Bug #15773)</li>
  <li>panel-plugin: Toggle presentation mode on middle click</li>
  <li>panel-plugin: Prefer ac-adapter-symbolic (Fixes #103)</li>
  <li>panel-plugin: Properly show 'About' menu item</li>
  <li>systray: Ensure presentation mode can be toggled (Bug #16337)</li>
  <li>xfpm: avoid default double fork</li>
  <li>Add new app icon and switch to rDNS icon name</li>
  <li>Only update blank time when appropriate</li>
  <li>Move default icon names into one place</li>
  <li>Also use symbolic icons in battery notifications</li>
  <li>Use more accurate status icons (Fixes #95)</li>
  <li>Reorder screensavers so Xfce comes first (Fixes #101)</li>
  <li>Silence compiler warnings</li>
  <li>Guard against NULL pointer dereference</li>
  <li>Dismiss critical notification when connecting to AC</li>
  <li>Respect the notification daemon's timeouts (Fixes #57)</li>
  <li>Fix spelling mistake (Bug #16698)</li>
  <li>Fix Laptop lid settings (Bug #15300)</li>
  <li>Bug #16717: Move from exo-csource to xdt-csource</li>
  <li>Fix inhibiting xfce4-screensaver (Bug #16364)</li>
  <li>Make brightness steps configurable (Bug #12062)</li>
  <li>Switch to symbolic window-close icons</li>
</ul>

<h2>Thumbnail Generator <em>(tumbler)</em></h2>
<ul>
  <li>Add libgepub thumbnailer plugin</li>
  <li>Adjust bug report URL</li>
  <li>Fix documentation URL</li>
  <li>Add new icon needed for xfce4-about-dialog</li>
  <li>Fix GTimeVal deprecation</li>
  <li>Use exif jpeg orientation hint</li>
  <li>Use guint32 for request handle</li>
  <li>Fix type of handle and handle further occurrences of 0</li>
  <li>Fix handles starting from zero</li>
  <li>This commit implements Excludes paths</li>
  <li>Fix thumbnail orientation (Bug #15011)</li>
  <li>prepend $XDG_DATA_HOME/thumbnailers/ to thumbnailers directory (Bug #15858)</li>
</ul>

<h2>Volume Manager <em>(thunar-volman)</em></h2>
<ul>
  <li>Bump GLib (and gio, gthread, etc) minimum to 2.50.0</li>
  <li>Use icons from icon theme in the dialog (!3)</li>
  <li>Add new app icon and switch to rDNS</li>
  <li>Remove PDA tab (!1)</li>
  <li>Avoid critical error when closing preferences dialog</li>
  <li>Support libxfce4ui XfceTitledDialog new API</li>
</ul>
