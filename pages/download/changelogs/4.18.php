<?php $head['title'] = 'Xfce 4.18 Changelog'; ?>

<h1>Xfce 4.18 Changelog</h1>

<p>Note: The changelogs shown here are since the version of the components that shipped with Xfce 4.16.</p>

<h2>Dependency changes</h2>
<ul>
    <li>glib-2.0 &gt;= 2.66 - Same version for gmodule-2.0, gobject-2.0, gthread-2.0, gio-2.0 and gdbus</li>
    <li>gtk &gt;= 3.24</li>
    <li>libcairo &gt;= 1.16</li>
    <li>gdk-pixbuf-2.0 &gt;= 2.40</li>
    <li>gobject-introspection &gt;= 1.66</li>
</ul>

<h2>Development Tools <em>(xfce4-dev-tools)</em></h2>
<ul>
    <li>Add new libsoup3 to the builder</li>
    <li>xfce-do-release: unification of update version 'sed' command</li>
    <li>xfce-do-release: match multiple spaces for git version replace</li>
    <li>Warn about GLib functions newer than the checked GLib version</li>
    <li>Drop the test altogether</li>
    <li>xdt-autogen: Fix deprecation warning from grep 3.8</li>
    <li>Use GLib structured logging</li>
    <li>Add new dependencies to the builder</li>
    <li>Do not run useless distcheck in CI</li>
    <li>Add favicon to Xfce API docs</li>
    <li>Bump our xfce builder to ubuntu 22.04</li>
    <li>Add autopoint to xfce-build</li>
    <li>Add a workaround for thunar documentation generation</li>
    <li>xfce-build: Fix build with SELinux (!58)</li>
    <li>xfce-update-news: Add release date and adjust separator</li>
    <li>xfce-do-release: Make warnings more visible</li>
    <li>xfce-do-release: Check the copyright year in `configure.ac*`</li>
    <li>xfce-do-release: Extend `configure.ac.in` update to `configure.ac`</li>
    <li>xdt-autogen: Fallback on `n` as IFS if `1` is not supported</li>
    <li>Fix exclusion of `xdt-autogen.in` in `.gitignore`</li>
    <li>Update developer.xfce.org home to add tumbler</li>
    <li>Add tumbler to xfce-build container</li>
    <li>Fix "image:" name in .gitlab-ci.yml</li>
    <li>Add libsensors4-dev to build-container</li>
    <li>Try to bump docker-dind image</li>
    <li>gitlabci: Ensure distcheck still runs</li>
    <li>gitlabci: Add release stage that retains tarballs</li>
    <li>Add lm-sensors to dependencies, for xfce4-sensors-plugins CI</li>
    <li>Separate CFLAGS from CXXFLAGS</li>
    <li>xfce-do-release: A review of confirmation prompts</li>
    <li>Improve Xfce Developer Center (developer.xfce.org)</li>
    <li>xdt-features.m4: Always enable compilation warnings</li>
    <li>g_locale_to_utf8 is misspelled as g_local_to_utf8</li>
    <li>xfce-build: Always pick the latest stable release</li>
    <li>Create the m4/ if it does not exists</li>
    <li>Use autoreconf to bootstrap xfce4-dev-tools itself</li>
    <li>Use autoreconf to bootstrap autotools</li>
    <li>xfce-do-release: Check for `docker` installed</li>
    <li>Add dependencies to build thunarx-python CI</li>
    <li>Fix location of apidocs</li>
    <li>xfce-build: Fix conditional in gitlabci</li>
    <li>Export apidocs as GitLab artifacts</li>
    <li>Get rid of glib-gettextize usage and XGETTEXT_ARGS custom args</li>
    <li>Remove obsolete AM_GLIB_GNU_GETTEXT</li>
    <li>helpers: Fix command-line if git-config core.editor is unset</li>
    <li>helpers: Add 'xfce-build describe' command</li>
</ul>

<h2>Utility Library <em>(libxfce4util)</em></h2>
<ul>
    <li>Remove limit on the size of configuration file line (!29)</li>
    <li>Clean the build system and use the new XDT_VERSION_INIT (!9)</li>
    <li>xfce-miscutils: Fix `deadcode.DeadStores` warning from `scan-build`</li>
    <li>i18n: Make sure to set locale according to environment (!26)</li>
    <li>Memo for future devs: Deprecate xfce_str_replace()</li>
    <li>Remove duplicate xfce_str_is_empty ()</li>
    <li>Move xfce_append_quoted () to xfce-string</li>
    <li>Remove invalid custom ngettext() macro</li>
    <li>Fix some GObject introspection warnings</li>
    <li>Add missing G_BEGIN_DECLS and G_END_DECLS</li>
    <li>Create new function xfce_create_shared_thumbnail_path</li>
    <li>usage of g_file_peek_path requires glib 2.56</li>
    <li>Add xfce_unescape_desktop_entry_value</li>
    <li>xfce-gio-extensions - management of gvfs trusted attribute</li>
    <li>libxfce4util needs to be first character Capital</li>
    <li>Fix (some) GObject introspection warnings</li>
    <li>Revamp the documentation to uniformize accross components</li>
</ul>

<h2>Widget Library <em>(libxfce4ui)</em></h2>
<ul>
    <li>Added move-window-to-monitor shortcut options (!80)</li>
    <li>libxfce4kbd-private: Reset shortcut recursively (#53)</li>
    <li>Fix titled dialog subtitle when headerbar is not used (!78)</li>
    <li>xfce-about: Add kernel and gtk version to system tab (!76)</li>
    <li>titled-dialog: Exclude normal windows from CSD adjustments (!72)</li>
    <li>xfce4-about: Add support for 3A5000/loongarch64 (!74)</li>
    <li>titled-dialog: CSD XfceTitledDialog improvements (#26, !71)</li>
    <li>Fix intltool lock file problem during make distcheck (!69)</li>
    <li>xfce-spawn: Do not change DISPLAY on non-X11 displays (#13, !68)</li>
    <li>XfceShortcutDialog: Do not propagate key events</li>
    <li>Add new function xfce_gtk_toggle_tool_button_new_from_action_entry</li>
    <li>XfceShortcutsGrabber: Detect auto-repeat key press</li>
    <li>i18n: Do not use textdomain() in libs</li>
    <li>Simplify startup notification timeout</li>
    <li>XfceShortcutsDialog: center the dialog on the parent window</li>
    <li>Replace duplicate logic with xfce_str_replace</li>
    <li>Use headerbars for dialogs if Gtk/DialogsUseHeader is enabled (#14)</li>
    <li>Add new method "xfce_gtk_menu_append_separator" (Issue #49)</li>
    <li>xfce4-about - improve /etc/os-release value unquoting (Issue #47)</li>
    <li>Add comment to return gboolean in XfceGtkActionEntry</li>
    <li>Add functions for handling accelerators that use the Tab key</li>
    <li>Check time.h and sys/time.h for libgtop</li>
    <li>`g_once_init_enter()` parameter shouldn't be volatile anymore.</li>
    <li>xfce-about: Fix potential NULL pointer access</li>
    <li>Introduce a shortcuts editor widget</li>
    <li>Add xfce_gdk_device_grab</li>
    <li>Fix xfce_gdk_screen_get_active to return correct monitor number</li>
    <li>Switch keyboard shortcut 'tile-up' with 'tile-down' (were mixed up)</li>
    <li>Change "Setting System" to "Settings Manager"</li>
    <li>added xfce_gtk_label_set_a11y_relation to be used by various components</li>
    <li>initialize base_property prior xfce_shortcuts_provider_register</li>
    <li>about: Replace stock with regular button</li>
    <li>about: Make Close button translateable (Fixes #41)</li>
    <li>Check if pixbuf is valid before unref</li>
    <li>shortcuts: Add Alt+Super+s for orca (Fixes #39)</li>
    <li>shortcuts-grabber: Filter grabbing by key group</li>
    <li>shortcuts-grabber: Redesign shortcut regrabbing (Bug #33)</li>
    <li>shortcuts-grabber: Stop search when the first match is found</li>
    <li>shortcuts-grabber: Record xkb state group (Bug #33)</li>
    <li>about: Fix invalid length and Zink renderer string</li>
    <li>XfceTitledDialog: Add pixbuf support as fallback</li>
    <li>Prevent resizing on message display with XfceFilenameInput</li>
    <li>Delay whitespace warning in XfceFilenameInput</li>
    <li>Remove Gtk2 leftovers</li>
    <li>Don't reserve vertical space for subtitles in headerbars</li>
</ul>

<h2>Extension Library <em>(exo)</em></h2>
<ul>
    <li>Fix blurriness in exo-desktop-item-edit icon when UI scale &gt; 1</li>
    <li>Fix blurriness in ExoThumbnailPreview when UI scale &gt; 1</li>
    <li>Fix icon cell renderer blurriness when UI scale &gt; 1</li>
    <li>Deprecate exo-string functions</li>
    <li>Deprecate exo_noop_*</li>
    <li>Save clipboard before dialog closes</li>
    <li>Fix horizontal smooth scrolling in compact view (Issue #86)</li>
    <li>Do not use exo_noop</li>
    <li>exo-die: Don't touch exe line in .desktop files</li>
    <li>exo-open : Only execute local .desktop files</li>
    <li>Fix $DISPLAY being set to wrong value</li>
    <li>exo-die, exo-open: Remove dependence on exo_str_is_equal(), exo_str_looks_like_an_uri()</li>
    <li>Fix unreliable D-BUS-activated app launch behavior</li>
    <li>exo-open: Try to open Type=Link .desktop files</li>
    <li>Use xfce-string functions</li>
    <li>Dont reduce selection in single click mode (Issue #71)</li>
    <li>Add typecheck to prevent Gtk-CRITICAL (Issue #63)</li>
    <li>Initialize `modifier` at the time of declaration</li>
    <li>Fix AC_LANG_SOURCE macro</li>
    <li>Fix `G_UNLIKELY` check</li>
    <li>exo_strdup_strftime: Support additional encoding (Issue #66)</li>
    <li>exo-die: Add trusted flag support</li>
    <li>Keep execute permission bit after launcher modification (Issue #64)</li>
    <li>Deprecate ExoBinding and ExoMutualBinding In favor of GBinding</li>
    <li>Free hover_path in tree-view if not NULL</li>
    <li>Drop preferences-desktop-default-applications icon</li>
    <li>Properly initialize GdkRectangle to prevent crash (Issue #57)</li>
    <li>Fix autotools deprecation warnings</li>
    <li>Revamp the documentation to uniformize accross components</li>
    <li>Fix compilation warnings</li>
    <li>exo-icon-chooser-dialog: Throttle search requests</li>
    <li>exo-icon-chooser-dialog: Focus filter entry by default</li>
    <li>exo-icon-chooser-dialog: Set default to show to all icons</li>
    <li>exo-icon-chooser-dialog: Speed up sorting the icon view model</li>
    <li>Fix keyboard navigation when only one item is present (#53)</li>
    <li>configure.ac: Allow cross-compiling</li>
</ul>

<h2>Menu Library <em>(garcon)</em></h2>
<ul>
    <li>garcon: Guard against race conditions when menu loads</li>
    <li>garcon-gtk: Populate GtkMenu only if GarconMenu is loaded</li>
    <li>garcon: Reset source id and list pointer on destruction and only then</li>
    <li>garcon-gtk: Fix menu icon blurriness when UI scale factor != 1 (#33, !25)</li>
    <li>garcon: Escape '%' when building command from URL desktop files (#31)</li>
    <li>garcon-gtk: Fix typo in GObject macros</li>
    <li>garcon-gtk: A more in-depth review of signal handler connections</li>
    <li>garcon-gtk: Disconnect reload callback on finalize (#27, !18)</li>
    <li>build: Fix intltool lock file problem during make distcheck</li>
    <li>garcon-gtk: Reduce latency when displaying the menu (#3, #5, !18)</li>
    <li>garcon-menu-separator: Fix constructor (!22)</li>
    <li>garcon-menu-item: Fix memory leaks (!21)</li>
    <li>Reintroduce the science category (#20, !15)</li>
    <li>menu-item: Add get/set for PrefersNonDefaultGPU (#21, !16)</li>
    <li>garcon-gtk: Fix a small memory leak (!14)</li>
    <li>Revamp the documentation to modernize and uniformize accross components (!13)</li>
</ul>

<h2>File Manager <em>(thunar)</em></h2>
<ul>
    <li>Fix minor mem leak (Issue #961)</li>
    <li>Ask if desktop files should be trusted (Issue #959)</li>
    <li>build: Bump requirements for Xfce 4.18</li>
    <li>Initialize thumbnail request to 0</li>
    <li>Fix slow thumbnail loading in icon/compact view (Issue #952)</li>
    <li>Enable translations for some preferences fields (Issue #953)</li>
    <li>Enable translations for statusbar action-entries (Issue #953)</li>
    <li>Allow to localize toolbar Item 'Location Bar' (Issue #953)</li>
    <li>Follow Symlinks in 'thunar_file_can_execute' (#944)</li>
    <li>renamed 'thunar_file_is_executable' to 'thunar_file_can_execute'</li>
    <li>Regression: Trust all .desktop files inside XDG_DATA_DIRS (Issue #944)</li>
    <li>Check if trusted_button exists before using it (Issue #944)</li>
    <li>Show meaningful error for invalid remote bookmarks (Isssue #941)</li>
    <li>Fix for launcher trusted/executable checkboxes (Issue #944)</li>
    <li>thunar-apr: Properly free errors (Issue #944)</li>
    <li>Only show hamburger button when menubar is disabled (Issue #934)</li>
    <li>Only show hamburger button when menubar is disabled (Issue #934)</li>
    <li>Properly round percentages in 'usage' text</li>
    <li>Dbus methods not selecting files/folders (Issue #929)</li>
    <li>Fix argument type for xfce_shortcuts_editor_new (Issue #928)</li>
    <li>Reposition Highlight tab in Properties dialog</li>
    <li>Image preview visible flag desynced between instances</li>
    <li>Properly include pcre2 CFLAGS and LDFLAGS (Issue #848)</li>
    <li>Fix capitalization in some strings</li>
    <li>Set style to reasonable value when setting wallpaper (Issue #907)</li>
    <li>Fix blurriness in gesture icons when UI scale &gt; 1</li>
    <li>Fix blurriness in drag icons when UI scale &gt; 1</li>
    <li>Fix blurriness in path bar location image when UI scale &gt; 1</li>
    <li>Fix blurriness in ThunarImage when UI scaling &gt; 1</li>
    <li>Fix blurriness in emblem chooser when UI scaling &gt; 1</li>
    <li>Fix blurriness in icon renderers at UI scale &gt; 1</li>
    <li>Fix typo for setting "misc-image-preview-mode"</li>
    <li>Shorten image preview enum strings in settings dialog</li>
    <li>preview sidebar: only load the thumbnails if previews wanted.</li>
    <li>Remove lag in search feature (Issue #914)</li>
    <li>Bulk renamer: Drop unmainted PCRE in favor of PCRE2 (Issue #848)</li>
    <li>Better handing of file updates during search</li>
    <li>Make fd.o ShowItemProperties behavior consistent with Thunar</li>
    <li>List View: Add file count to size column for directories (Issue #61)</li>
    <li>Translation for few buttons missing (Issue #916)</li>
    <li>Add option to suppress the confirmation dialog on delete (Issue #809)</li>
    <li>Regression: Fix build with notifications disabled (Issue #909)</li>
    <li>Introduce separate class for 'thunar-job-operation-history'</li>
    <li>Add Toolbar items for undo/redo (Issue #819)</li>
    <li>Add notification on undo/redo (Issue #903)</li>
    <li>Shorten wait time to show file transfer rate (Issue #888)</li>
    <li>Add Image preview sidepane (Issue #357)</li>
    <li>Prevent GLib-GIO-CRITICAL messages if 'file_>info' is not set</li>
    <li>Add 'redo' feature and multi-level undo/redo (Issue #819)</li>
    <li>Add 'undo' support for the latest link operation (Issue #819)</li>
    <li>Add 'undo' support for the latest file-create operation (Issue 819)</li>
    <li>Add 'undo' support for the latest trash operation (Issue #819)</li>
    <li>Add 'undo' support for the latest rename operation (Issue #819)</li>
    <li>Add 'undo' support for the latest move operation (Issue #819)</li>
    <li>Add 'undo' support for the latest copy operation (Issue #819)</li>
    <li>Update Dbus support for feature "Set Default Application" (issue #342)</li>
    <li>hidden preference "misc-open-new-windows-in-split-view" (Issue #889)</li>
    <li>Add title to message dialogs</li>
    <li>Fix details view's name column's prelight when highlight is enabled</li>
    <li>Add split-view button to Toolbar (Issue #831)</li>
    <li>View accels not working after initial startup (Issue #803)</li>
    <li>Remove "open with" prefix for apps in open with menu (Issue #863)</li>
    <li>Prevent xfconf warning during startup for property "sort-order"</li>
    <li>Thunar hangs with misc-directory-specific-settings (Issue #861)</li>
    <li>Add DnD support for application/octet-stream (#278)</li>
    <li>Add support for PrefersNonDefaultGPU in .desktop files (Issue #692)</li>
    <li>Enable right click + drag for list view (Issue #851)</li>
    <li>Inhibit some actions when a search is active (Issue #847)</li>
    <li>Add posibillity to set custom color to specific files (Issue: #160)</li>
    <li>Add support for alternative copy/paste/cut shortcuts (Issue #845)</li>
    <li>Properly remember sort settings in all cases (Issue #836)</li>
    <li>Create separate section for thumbnail settings in preferences dialog</li>
    <li>Dont rely on xfconf value for menubar toggle (Issue #777)</li>
    <li>Dont rely on xfconf value for statusbar toggle (Issue #777)</li>
    <li>Dont rely on xfconf value for sidepane menu items (Issue #777)</li>
    <li>Bulk renamer: Rename in multiple iterations (Issue #108)</li>
    <li>meaningful naming for Location Selector (Issue #826)</li>
    <li>Prevent GLib-GObject-CRITICAL when using tree-view (Issue #827)</li>
    <li>Bulk Renamer: Allow multiple matches when using regex (Issue #230)</li>
    <li>Fix various memory leaks (Issue #573)</li>
    <li>Ignore escape sequences when executing launchers</li>
    <li>Fix crash when changing tab titles preferences (#808)</li>
    <li>Don't modify the 'exe' line in .desktop files unintentionally</li>
    <li>Search: show symlinks in results (Issue #809)</li>
    <li>Rename ThunarLauncher class to ThunarActionManager</li>
    <li>Enable to switch from search entry to other UI elements (Issue #792)</li>
    <li>Hide accel labels in launcher submenus (Issue #779)</li>
    <li>Fix broken build with gcc7 : “declaration is not a statement”</li>
    <li>List View: Show relative paths for column 'location'</li>
    <li>Check for empty path property in .desktop files</li>
    <li>Add tooltips for select by pattern dialog</li>
    <li>Restore view-type before exiting while search is active (Issue #794)</li>
    <li>Add menu item 'edit launcher' for '.desktop' files</li>
    <li>Search string normalization and diacritic stripping (Issue #793)</li>
    <li>Add border around infobar in trash (Issue #795)</li>
    <li>Fix segfault when closing Thunar during search (Issue #789)</li>
    <li>Respect last-show-hidden during search (Issue #785)</li>
    <li>Allow searching for multiple search terms (Issue #783)</li>
    <li>Handle special columns properly when ending a search (Issue #782)</li>
    <li>Replace exo_str_* () with GLib functions</li>
    <li>Fixed folder activation during search in some cases (Issue #774)</li>
    <li>ExoIconView search workaround: do not save the temporary view type</li>
    <li>Fix column editor model filter logic</li>
    <li>Show the `Location` column in `recent:\`.</li>
    <li>Show the `Search with Catfish...` button only if catfish is installed</li>
    <li>Tweak order of tab settings in preferences dialog</li>
    <li>build: Fix intltool lock file problem during make distcheck</li>
    <li>Add option to show last modified date in the statusbar (Issue #641)</li>
    <li>Usage of glist to concatinate statusbar strings</li>
    <li>Add configure option to set thunarx default dirs</li>
    <li>Add configure option to enable thunarx custom dirs (Issue #771)</li>
    <li>Sort symlinks like regular files when sorting by type (Issue #71)</li>
    <li>Make thunar toolbar editor resizable and set a default size</li>
    <li>Refactor thunarx module loading (Issue #755)</li>
    <li>Add preference to disable recursive search (Issue #751)</li>
    <li>Compact View: Optional ellipsization instead of word wrap (Issue #595)</li>
    <li>Add toolbar button to show menubar when hidden (Issue #174)</li>
    <li>Bookmark accels not working (Issue #762)</li>
    <li>Toolbar Editor: Default to a bigger dialog size (Issue #758)</li>
    <li>Toolbar: Make custom actions invisible by default (Issue #757)</li>
    <li>Dont show a checkbox for "vertical split pane" in the settings</li>
    <li>Show as well invalid bookmarks in the bookmarks menu (Issue #582)</li>
    <li>Remove 'Date Deleted' from 'Configure Column' List (Issue #750)</li>
    <li>Move trash infobar to the bottom (Issue #605)</li>
    <li>Show `Configure Toolbar...` option on right-clicking toolbar items.</li>
    <li>Add built-in buttons for toolbar customization: Search, Toggle,Reload, Zoom</li>
    <li>Allow to customize toolbar by using custom actions (Issues #607 #621)</li>
    <li>Location bar: Make sure to show the correct root button (Issue #725)</li>
    <li>Recursive search: Do not search when the search query is empty.</li>
    <li>Fix: Escape does not unselect files.</li>
    <li>Column headers: Configure columns popup on right-click</li>
    <li>Bulk renamer: Use wording "Extension" over "Suffix" (Issue #729)</li>
    <li>Look for thunar plugins at $THUNARX_DIRS (Issue #748)</li>
    <li>Speedup search by disabling row-related callbacks while searching</li>
    <li>Add spinner element to each tab to display search status</li>
    <li>Add option for vertical split panes (#722)</li>
    <li>List view name column improvements (#736)</li>
    <li>Option to show full path in tabs (Issue #627)</li>
    <li>Generate documentation for internal functions (Issue #617)</li>
    <li>Fix of various memory leaks</li>
    <li>Dont reload the view when text is copied (Issue #706)</li>
    <li>Use 'g_timeout_add_full' to set tree-view cursor (Issue #351)</li>
    <li>NULL checks to prevent crash on malformed bookmark URI (Issue #716)</li>
    <li>Skip files with IO errors during directory scan (Issue #696)</li>
    <li>Shortcuts View: Allow devices a drag and drop target (Issue #708)</li>
    <li>Support for thumbnail size x-large and xx-large (Issue #606)</li>
    <li>Add support for accelerators that include the `Tab` key (Issue #580)</li>
    <li>Add Recursive Search (!146)</li>
    <li>Use save way to copy a "struct tm" to prevent crash (Issue #700)</li>
    <li>Add UCA parameter to specify a number of files (Issue #26)</li>
    <li>Fix: User disabled accelerators are re-enabled on 2nd restart (!177)</li>
    <li>Add a GUI shortcuts editor (Issue #279)</li>
    <li>Use alphabetical sorting for devices in the side-pane (Issue #610)</li>
    <li>Use GList over gchar** for getting an uri list (Issue #684)</li>
    <li>Prevent crash when restoring non-existing URI (Issue #684)</li>
    <li>Regression: Can't copy and replace a directory any more (Issue #682)</li>
    <li>'New file' dialog: Dont highlight extension for templates (Issue #676)</li>
    <li>Use g_strcmp0 over strcmp to prevent crash (Issue #679)</li>
    <li>Inherit sort column/order of new tabs from current tab (Issue #678)</li>
    <li>Feature: Statusbar customization (Issue #666)</li>
    <li>Add link to thunar doc. to uca chooser dialog (Issue #245)</li>
    <li>Dont replace ACSII characters &lt; 0 for FAT filesystems (Issue #655)</li>
    <li>Fix: Side pane tree view loading time increased (Issue #659)</li>
    <li>Remove the `file://` prefix in the location column</li>
    <li>Support '.' in themed desktop-file names</li>
    <li>Reset sort_column if it exceeds THUNAR_N_VISIBLE_COLUMNS</li>
    <li>Avoid many 'Failed to open directory' windows (Issue #660)</li>
    <li>Add file & folder count on the properties dialog (Issue #395)</li>
    <li>Use basename instead of display_name for file duplication (Issue #649)</li>
    <li>Fix signal disconnect in thunar_window_unrealize to prevent crash</li>
    <li>Don't go beyond THUNAR_N_VISIBLE_COLUMNS while parsing col widths</li>
    <li>Listen to changes on shortcuts to update them when required</li>
    <li>Prevent crash on copy+paste of many files (Issue #649)</li>
    <li>Ctrl + L does not leave search mode (Issue #645)</li>
    <li>Use move action when dragging files of different users (#196)</li>
    <li>Prevent focus stealing of file transfer dialog (Issue #643)</li>
    <li>Make file transfer window non-transient (Issue #109)</li>
    <li>shortcut view location cursor can flicker on selection (Issue #644)</li>
    <li>Fix file-icon update when file is cut (Issue #588)</li>
    <li>Incorrect "Send To" behavior with multiple arguments (Issue #609)</li>
    <li>Support thumbnails for symlinks (and devices / unknowns)</li>
    <li>Add option to verify file checksums on copy (Issue #511)</li>
    <li>Open correct folder on middle-click in tree-view (Issue #626)</li>
    <li>Shortcut-view: Keep focus in sync with current folder</li>
    <li>Add a `Location` column that appears while in search mode</li>
    <li>Add "Open Item Location" option in the context menu of files in Recent</li>
    <li>Add a new 'Open Item Location' entry in the right click context menu.</li>
    <li>Rework Search in Thunar (Issues #2, #28, #290)</li>
    <li>Remove fragmented file if file transfer is interrupted</li>
    <li>Fix invalid filenames when copying to FAT-like filesystem (Issue #77)</li>
    <li>Support shared thumbnail repositories (Issue #262)</li>
    <li>Add preference to limit the maximum file size to be thumbnailed (#310)</li>
    <li>Use *.partial~ as an intermediate file for copy</li>
    <li>Restore split-view separator position (Issue #616)</li>
    <li>Skip `switch-page` handler when switching to other split-view tab (Issue #615)</li>
    <li>Change thunar_file_is_trashed to thunar_file_is_trash in thunar-launcher.c</li>
    <li>Provide additional menu item for trashed files: "restore and open folder" (Issue #382)</li>
    <li>Open restored tabs in correct order (Issue #613)</li>
    <li>After restoring tabs set focus on the last focused tab</li>
    <li>For "foo.txt" next available file should be of the form "foo N.txt"</li>
    <li>Remove redundant code</li>
    <li>Ask "close window with tabs?" as well for STRG+Q (Issue #611)</li>
    <li>Keep modified time of files copied from foreign locations (Issue #218)</li>
    <li>Use more general method to pick file names on copy (Issue #244)</li>
    <li>Add possibility to 'trust' launchers (Issue #156)</li>
    <li>Remove reload button from toolbar (!125)</li>
    <li>Add a preference to restore tabs on startup (Issue #338)</li>
    <li>Fix Recent entry in the Go menu</li>
    <li>Use thunar_g_file_new_for_computer and thunar_g_file_new_for_network</li>
    <li>Add support for the `recent:///` location in Thunar.</li>
    <li>Add basic support for gtk-recent (Issue #257)</li>
    <li>Fix: Incorrect thumbnail size being displayed sometimes when zooming quickly</li>
    <li>Add zoom-level as a per-directory setting (Issue #418)</li>
    <li>Rename variable `dot` to `extension`</li>
    <li>Generate incremental file name when a name collision is detected (Issue #210)</li>
    <li>Fix GLib-CRITICAL in list-view (Issue #487)</li>
    <li>thunar_file_is_executable() now checks if .desktop file is safe</li>
    <li>Fix missing folder in history when opened in new tab (Issue #594)</li>
    <li>Fix missing folder in history when opened in new tab (Issue #594)</li>
    <li>Manage parallel job outside ThunarTransferJob (Issue #569)</li>
    <li>Replace ExoBinding with GBinding equivalent</li>
    <li>Move bookmarks into a separate Bookmarks menu (Issue #572)</li>
    <li>Proper destruction of member variables for thunar-launcher</li>
    <li>Fixing various memory leaks (Issue #573)</li>
    <li>Fix showing volume uuid in transfer dialog (Issue #579)</li>
    <li>Dont show "execute" on context menu for folders</li>
    <li>Regression: Activating Desktop Icon does not Use Default Application (Issue #575)</li>
    <li>Prevent crash if non-existing bookmark is right-clicked (Issue #552)</li>
    <li>Sendto-menu: Renamed "Create Shortcut" to "Add Bookmark"</li>
    <li>Allow middle-clicking navigation buttons (Issue #98)</li>
    <li>Support `Today`/`Yesterday` option for custom date styles (Issue #292)</li>
    <li>Prevent crash if invalid-symlink is used as bookmark (Issue #552)</li>
    <li>Scroll to correct height after changing to a parent dir (Issue #531)</li>
    <li>Dont execute files, passed via command line due to security risks</li>
    <li>Move 'reload' button out of pathbar (Issue #559)</li>
    <li>Improve usability of Computer:// in list view (Issue #297)</li>
    <li>Select the correct bookmark after opening a new window (Issue #106)</li>
    <li>Shortcut-view regression: Middle mouse click on folder did not work</li>
    <li>Make use of xfce icon "org.xfce.settings.default-applications"</li>
    <li>Avoid excessively checking whether files are executables (Issue #180)</li>
    <li>Add Option to keep focus while opening folder in new tab (Issue #364)</li>
    <li>Add `Add Bookmark` menu item to the Go menu (Issue #283)</li>
    <li>On "Select by Pattern" add option for case sensitivity (Issue #173)</li>
    <li>CDDA appears twice in side pane (Issue #486)</li>
    <li>Add `Empty Trash` infobar while in the trash folder (Issue #11)</li>
    <li>Add section 'Default Application' for app. selection (Issue #342)</li>
    <li>BulkRenamer: Preselect `Name and Suffix` if only dirs are selected</li>
    <li>List view: Leave size column blank for directories (Issue #543)</li>
    <li>BulkRenamer: Split 'Rename' button into 'Apply' and 'Done' (Issue #22)</li>
    <li>Critical error when opening Edit menu (Issue #542)</li>
    <li>Add menu entry 'Set Default App' to 'Open with' submenu (Issue #342)</li>
    <li>Shortcuts view regression : Watch trash for changes (Issue #538)</li>
    <li>Fix `misc-full-path-in-title` memory fault (Issue #484)</li>
    <li>Add 'sort by Date Deleted' option to 'arrange items' menu (Issue #123)</li>
    <li>Add 'date deleted' column for the trash directory (Issue #123)</li>
    <li>Use a more specific device eject label (Issue #153)</li>
    <li>Reload current directory before selecting new files (Issue #524)</li>
    <li>Shortcuts view: Open new folder after creation</li>
    <li>ThunarLauncher: Dont expose "select files" closure</li>
    <li>Use thunar-menu and launcher in shortcuts view (Issue #198)</li>
    <li>thunar-launcher: Send signal when device operation is started/finished</li>
    <li>Removed 'the root folder has no parent' dialog box</li>
    <li>tree-view: Hide menu-item "properties" for unmounted devices</li>
    <li>Regression: Missing "mount"/"unmount" on tree-view devices</li>
    <li>thunar-launcher: unpack g_value with correct call</li>
    <li>Remove watches on shortcuts (Issue #513) (Issue #47)</li>
    <li>Regression: Select copied files after copy operation (Issue #520)</li>
    <li>Reintroduce alternative zoom shortcuts (Issue #514)</li>
    <li>Prevent hangup if a copy task that is blocked is resumed (Issue #467)</li>
    <li>Improve comments in "thumbnail_needs_frame"</li>
    <li>Improve device unmount messages (Issue #516)</li>
    <li>Regression: Allow custom image files for UCA icons (Issue #517)</li>
    <li>Dont merge folders when creating copy with same name (Issue 491)</li>
    <li>Fix incorrect return value in scroll event handler (Issue #512)</li>
    <li>Use wording "queued" instead of "frozen" for jobs (Issue #511)</li>
    <li>Use wording "queued" instead of "frozen" for jobs (Issue #511)</li>
    <li>Revamp documentation to modernize/uniformize accross components</li>
    <li>Remove tray icon and related methods (Issue #495)</li>
    <li>Regression: Skip app info updates on sendto actions (Issue #502)</li>
    <li>Regression: Toggle menu visibility on F10 if menu hidden (Issue #498)</li>
    <li>thunar-launcher: Unify way to set selected device/location/files</li>
    <li>thunar-launcher: Keep ref on ThunarDevice while poking</li>
    <li>thunar-launcher: Unify way to set selected device/location/files</li>
    <li>thunar-launcher: Provide service to open locations (bookmarks)</li>
    <li>Regression: "Shift" + "Select Trash in menu" has to trigger delete</li>
    <li>By default show all available volumes (#384)</li>
    <li>Add "created" column to list view (#478)</li>
    <li>Add suffix '    <li>Thunar' to the title bar (Issue #482)</li>
    <li>Dont select previous file after delete/trash (Issue #477)</li>
    <li>Increase min. size of "text" field in bulk renamer (Issue #474)</li>
    <li>Add option to forget application association (Issue #197)</li>
    <li>Regression: "Open with other application" missing (Issue #470)</li>
    <li>New feature: Split View (Issue #445)</li>
    <li>Revert "Fix popup menus size (Bug #15832)"</li>
    <li>Always create new files and folders in current directory (Issue #462)</li>
    <li>Improve file operations progress dialog (Issue #365)</li>
    <li>Prevent crash on Ctrl+H when there is no sidepane (Issue #453)</li>
    <li>Roleback to previous spinner handling (Issue #448)</li>
    <li>Add option to unselect all files (Issue #424)</li>
    <li>Unset tree view cursor if toplevel path is unknown (Issue #351)</li>
    <li>Remove GSourceFunc casts</li>
    <li>Add submenus for custom actions (Issue #184)</li>
    <li>REFACTOR: always queue_popup in details view on right click (#421)</li>
    <li>merged master from upstream</li>
    <li>Dont use ThunarFiles when they are already destoyed</li>
    <li>Use single main menu category in .desktop files (Issue #40)</li>
    <li>Add toggle in preferences to allow running shell scripts (Issue #224)</li>
    <li>Add action to toggle sort direction (#130)</li>
    <li>Use sort menu as well for detailed view (#139)</li>
    <li>Add support to created date in file properties</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>
    <li>Update default settings (!29)</li>
    <li>Fix icon blurriness UI scale &gt; 1 (#67)</li>
    <li>Migration for history cache file (!28)</li>
    <li>Do not clamp window height in collapsed mode (!27)</li>
    <li>build: Fix intltool lock file problem during make distcheck</li>
    <li>Avoid saving duplicate command (#58)</li>
    <li>Use symbolic icons</li>
    <li>Rename icon name macro constants</li>
    <li>Do not allow custom action notice to wrap lines</li>
    <li>Fix crashes occurring when GLib rejects to parse the command string</li>
    <li>Add option to hide window decorations (#51)</li>
    <li>Include keywords and generic name to search</li>
    <li>Add support to garcon's PrefersNonDefaultGPU property</li>
    <li>Handle escaping in desktop file values (#16)</li>
    <li>Make close and help buttons translatable</li>
    <li>Parse environment variables in collapsed mode (#13)</li>
    <li>Mention that custom actions are only available in collapsed mode (#27)</li>
    <li>Launch applications as children again</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
      <li>Define and use macros for Xfconf properties (!104)</li>
      <li>clock: Do not include `private.h` in headers</li>
      <li>panel-desktop-handler: Add `OnlyShowIn=XFCE` key (!106)</li>
      <li>libxfce4panel: Fix menu positioning when the panel is hidden</li>
      <li>libxfce4panel: Fix menu widget positioning when the panel is hidden</li>
      <li>libxfce4panel: Strengthen sanity check for emitting "provider-signal"</li>
      <li>libxfce4panel: Make popup_penu() consistent with position_widget()</li>
      <li>panel: Remove limitation on setting struts in multi-monitor mode (#661)</li>
      <li>launcher: Fix tooltip icon invalidation on boutton update</li>
      <li>tasklist: Take window scaling into account for dnd</li>
      <li>clock: Improved time zone matching (!105)</li>
      <li>clock: [GSoC22] Merge DateTime with Clock plugin (!101)</li>
      <li>clock: Reveal calendar command in prefs dialog (Fixes #560)</li>
      <li>clock: Decrease verbosity</li>
      <li>panel: Remove duplicated PanelWindow:scale-factor property</li>
      <li>panel: Remove some duplicate build flags</li>
      <li>systray: Replace deprecated "GtkWidget::composited-changed" signal</li>
      <li>Replace deprecated "style-set" signal with "style-updated"</li>
      <li>windowmenu: Take window scaling into account for icons</li>
      <li>tasklist: Take window scaling into account for icons</li>
      <li>systray: Take window scaling into account for status notifiers</li>
      <li>libxfce4panel: Add window scaling to xfce_panel_set_image_from_source()</li>
      <li>launcher: Take window scaling into account for icons from files</li>
      <li>launcher: Rebuild the menu when the panel size changes</li>
      <li>launcher: Do not overwrite button icon cache with menu item icons</li>
      <li>launcher: Fix tooltip icon management</li>
      <li>panel: Chain up to parent in constructed()</li>
      <li>clock: Fixed zone info directory (#646, !105)</li>
      <li>tasklist: Properly restore button state on GtkMenu::selection-done</li>
      <li>tasklist: Browse a copy of the window list if it is subject to change (#594)</li>
      <li>clock: Improve backward compatibility (#641)</li>
      <li>clock: Prevent visual glitch when showing calendar window (#466)</li>
      <li>Revert "clock: Prevent visual glitch when showing calendar window" (#641)</li>
      <li>tasklist: Update button visibility when sent to another workspace</li>
      <li>tasklist: Properly update fallback icon (Fixes #636)</li>
      <li>systray: Use theme colors for symbolic icons (#635)</li>
      <li>Add title to message dialogs (!102)</li>
      <li>panel: Chain-up to parent in style_updated() (Fixes #490)</li>
      <li>clock: Fix widget visibility in prefs dialog</li>
      <li>cleanup: Use the same debug function everywhere</li>
      <li>clock: binary: Various refactoring and cleanups (!91, !92, !93)</li>
      <li>launcher: Replace deprecated GtkWidget::state-changed signal</li>
      <li>tasklist: Use a checkbox for button grouping</li>
      <li>cleanup: Remove dead code</li>
      <li>cleanup: Wrap some GdkScreen deprecations in one place</li>
      <li>cleanup: Wrap GtkImageMenuItem deprecations in one place</li>
      <li>cleanup: Remove deprecated GdkColor</li>
      <li>prefs-dialog: Rephrase "Don't reserve space on borders" (Fixes #217)</li>
      <li>tasklist: Simplify label text</li>
      <li>clock: Implement sleep monitor (#58, !88)</li>
      <li>systray: Help to keep status notifiers from vanishing (#102, #243, #599)</li>
      <li>panel: Exit gracefully when display cannot be opened (Fixes #625)</li>
      <li>Urgency blinking fixes (!90)</li>
      <li>prefs-dialog: Always select another panel after removing one</li>
      <li>tasklist: Do not release button if left-click minimization is disabled</li>
      <li>tasklist: Properly exclude grouped windows from overflow menu</li>
      <li>tasklist: Keep dnd position when grouping/ungrouping windows (#323)</li>
      <li>Reposition menu for popup commands if necessary</li>
      <li>panel: Populate item dialog after setting dialog screen (Fixes #62)</li>
      <li>panel: Switch to pixels for the panel length in the prefs dialog (#99)</li>
      <li>panel: Rework enter/leave opacity management (#180)</li>
      <li>systray: Set button border width to 0 (Fixes #604)</li>
      <li>systray: Perform sanity checks also for "NewStatus" signal (Fixes #602)</li>
      <li>pager: Fix aspect ratio for viewport (Fixes #119)</li>
      <li>clock: Distinguish AM/PM hours in fuzzy clock for L10N (#77)</li>
      <li>libxfce4panel: Report a highlighted arrow button as blinking</li>
      <li>windowmenu: Update plugin icon on active window icon change (Fixes #37)</li>
      <li>pager: Synchronize workspace layout between plugin instances (#7)</li>
      <li>pager: Move some function calls to their right place</li>
      <li>pager: Properly disconnect signal handler</li>
      <li>tasklist: Guard against null workspace</li>
      <li>tasklist: Properly update active window when it changes workspace (#207)</li>
      <li>libxfce4panel: Warn about deprecated xfce_panel_plugin_position_menu()</li>
      <li>libxfce4panel: Add new function `xfce_panel_set_image_from_source()` (!83)</li>
      <li>libxfce4panel: Add new function `xfce_panel_plugin_popup_menu()` (!80)</li>
      <li>libxfce4panel: Deprecate `xfce_panel_plugin_position_menu()` (!80)</li>
      <li>cleanup: Remove useless variable</li>
      <li>cleanup: Use already defined panel scale factor</li>
      <li>tasklist: Remove redundant function call</li>
      <li>refactoring: Consistency of plugin menu callbacks</li>
      <li>refactoring: Use `g_file_peek_path()` when appropriate</li>
      <li>Autohide refactoring (!77)</li>
      <li>Replace soon-to-be-deprecated exo-string functions (!79)</li>
      <li>panel: Silence allocation warning for external plugins (V2) (#590, !89)</li>
      <li>panel: Compare monitor geometries in the right dimension (#54)</li>
      <li>panel: Do not compare monitor geometry to itself (#54)</li>
      <li>tasklist: Take window scaling into account when detecting window position (#505)</li>
      <li>panel: Be sure to save plugins before xfconf_shutdown()</li>
      <li>tasklist: Fix critical warning when starting on a disconnected device</li>
      <li>tasklist: Delay sorting if window list is in use (#594)</li>
      <li>libxfce4panel: Allow to show about dialog when prefs dialog is shown (#221)</li>
      <li>panel: Prevent compositing message from affecting dialog size (Fixes #591)</li>
      <li>libxfce4panel: Unblock autohide before removing the plugin (#592)</li>
      <li>Grab devices until the menu takes over for popup commands (#201, #585)</li>
      <li>Fix return value of "remote-event" signal handlers (#585)</li>
      <li>Avoid "no trigger event" warning for popup commands</li>
      <li>Guard against the return value of `gdk_seat_get_pointer()`</li>
      <li>panel: Ensure that handles are always grabbable (Fixes #227)</li>
      <li>Allow to set a custom icon in appmenu and dirmenu (#254, !83)</li>
      <li>Use RGBA visual only if compositing is enabled (Fixes #251)</li>
      <li>launcher: Fix wrong format specifier in config file name (Fixes #581)</li>
      <li>applicationsmenu: Add option to set "small" property (Fixes #31, #113)</li>
      <li>pager: Consistency fixes between "miniature view" and "buttons" (#74, #209, #253, #257, #274, !82)</li>
      <li>libxfce4panel: Make urgency blinking more visible (Fixes #259)</li>
      <li>tasklist: Sorting fixes (#29, #126, #323, !81)</li>
      <li>systray: Force dbus-menu update when item is invalidated (Fixes #567)</li>
      <li>libxfce4panel: Unregister menu also on "selection-done"</li>
      <li>applicationsmenu: Do post-processing on "selection-done"</li>
      <li>windowmenu: Do not popup menu item wnck menu at widget</li>
      <li>Fix plugin menu popup at pointer (#297)</li>
      <li>Add new function `xfce_panel_plugin_popup_menu()` (#147, !80)</li>
      <li>tasklist: Middle click minimize window groups (!76)</li>
      <li>tasklist: Middle click close window groups (#322, !76)</li>
      <li>tasklist: Middle click opens new instance (#166, !72)</li>
      <li>Add some autohide blockers (!78)</li>
      <li>libxfce4panel: Destroy plugin prefs dialog on plugin "destroy" signal</li>
      <li>Autohide fixes (#48, #116, #397, !75)</li>
      <li>systray: Hide button menu if button is hidden by its app (Fixes #391)</li>
      <li>launcher: Use same icons for item list as in prefs dialog (Fixes #415)</li>
      <li>launcher: Make add dialog consistent with panel add dialog (Fixes #416)</li>
      <li>tasklist: Fix context menu position in deskbar mode (Fixes #417)</li>
      <li>systray: Display square systray icons on multiple rows (#426)</li>
      <li>panel: Do not rely on borders to trigger autohide animation</li>
      <li>Revert "Fix autohide with bg color or image (Bug #16064)" (#435, #512)</li>
      <li>tasklist: Hide wireframe on window buttons (#543, !70)</li>
      <li>systray: Icon size and priority fixes (#571, !73)</li>
      <li>systray: Disable broken smooth scroll with Xfwm4 (#411, !74)</li>
      <li>prefs-dialog: Filter out irrelevant selection changes in "Items" tab</li>
      <li>wrapper: Ensure that provider stays alive when processing "g-signal"</li>
      <li>Revert "panel: Keep a reference on item during drag and drop"</li>
      <li>panel: Clear opaque region so compositor properly apply transparency (#378, #427)</li>
      <li>Fix `gdk_rgba_to_string()`-related memory leaks</li>
      <li>systray: Load icon from theme at desired size (#463)</li>
      <li>Take window scaling into account (#465, #486, !71)</li>
      <li>clock: Prevent visual glitch when showing calendar window (#466)</li>
      <li>tasklist: Fix wireframe for CSD windows (v2) (#562)</li>
      <li>systray: Check that the proxy exists when invalidating item</li>
      <li>Use GLib structured logging</li>
      <li>Use GLIB_VERSION_MIN/MAX_REQUIRED/ALLOWED</li>
      <li>libxfce4panel: Silence `-Wredundant-decls` warnings (#495)</li>
      <li>Revamp the documentation to modernize and uniformize accross components (!35)</li>
      <li>panel: Fix regression "intellihide does not hide when leaving slowly" (#388)</li>
      <li>panel: Fix regression "'Span Monitor' has no effect" (#405)</li>
      <li>panel: Keep a reference on item during drag and drop</li>
      <li>systray: Do not apply icon if not yet set</li>
      <li>Fix `deadcode.DeadStores` warnings from `scan-build` (!56)</li>
      <li>Fix `core.UndefinedBinaryOperatorResult` warning from `scan-build` (#142)</li>
      <li>Fix `core.NullDereference` warning from `scan-build` (!57)</li>
      <li>panel: Fix broken drag and drop between panels (#561)</li>
      <li>systray: Only activate item under mouse</li>
      <li>Use a normalized URI internally for the background image</li>
      <li>panel: Disconnect from screen signals when window is destroyed</li>
      <li>Fix ignored `*.desktop.in` in `.gitignore`</li>
      <li>systray: Do not connect to proxy signal if async method failed</li>
      <li>actions: Lay out buttons in grid for deskbar (#437, !69)</li>
      <li>wrapper: Rework widget drawing (#520, !67)</li>
      <li>windowmenu: Emit "deactivate" signal when hiding the menu (#22, !68)</li>
      <li>systray: Trust the status to update the attention icon (#392, !64)</li>
      <li>tasklist: Add a setting to control the display of tooltips (#548, !63)</li>
      <li>Fixed some window buttons not appearing in the panel (#188, !66)</li>
      <li>Remove ellipsis (#480, !65)</li>
      <li>launcher: Only activate under mouse (Fixes #519)</li>
      <li>launcher: Clear action menu when destroyed (Fixes #540, !61)</li>
      <li>actions: Block panel autohide (Fixes #431, !62)</li>
      <li>panel: Fix grabs for popup commands (Fixes #506, !60)</li>
      <li>Fix compilation warnings (#492, #493, #494, !53)</li>
      <li>launcher: Adjust menu icon size (Fixes #255, !51)</li>
      <li>Fix exit procedure when plugin insertion failed (!49)</li>
      <li>libxfce4panel: Review memory management for context menu (#452, !46)</li>
      <li>panel: Mitigate a memory leak when removing items (!46)</li>
      <li>tasklist: Silence an allocation warning (!48)</li>
      <li>launcher: Check for menu item initialization (!47)</li>
      <li>panel: Change width of default panel-2 to 1% (Fixes #454, !44)</li>
      <li>Fix some `*-CRITICAL` warnings (!43)</li>
      <li>libxfce4panel: Do not destroy context menu if popped up (#442, !45)</li>
      <li>tasklist: Auto-adjust icon size (v2) (#90, !29)</li>
      <li>pager: Allow disable switch with mouse wheel for miniature view (#253, !37)</li>
      <li>Add icons to help and about items in panel menu (#421)</li>
      <li>pager: Use gobject bindings (Fixes #376, !32)</li>
      <li>launcher: avoid double fork (#407, !25)</li>
      <li>Display tooltip title of statusnotifier items as plaintext (!30)</li>
      <li>pager: Switch to new workspaces icon name</li>
      <li>statustray: Prevent crash when parsing properties (Fixes #379, !26)</li>
      <li>windowmenu: fix use-after-free in window_menu_plugin_window_item_new (!24)</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
    <li>logout-dialog: New Xfconf property "ShowSave" (!29)</li>
    <li>settings: Revert type hint change</li>
    <li>Check getgrgid(3) return value to avoid crash</li>
    <li>build: Fix intltool lock file problem during make distcheck</li>
    <li>Remove pre-defined lockers</li>
    <li>Refresh list of screensavers (#17)</li>
    <li>Do not mind output of screensaver, if successful</li>
    <li>Run custom command in a separate shell</li>
    <li>Avoid extra pause by redirecting stdin</li>
    <li>Increase switch user timeout (!25)</li>
    <li>xflock4: Apply initial delay before running a screensaver/locker (#29)</li>
    <li>xflock4: Update copyrights</li>
    <li>xflock4: make the script executable</li>
    <li>Add labels to inline toolbar buttons</li>
    <li>Use correct icon for Close button</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em></h2>
<ul>
    <li>appearance: Sync color scheme to gsettings (Fixes #406)</li>
    <li>settings-manager: Add padding to embedded dialogs (Fixes #388)</li>
    <li>display-settings: Search for clonable modes only by resolution</li>
    <li>mime-settings: Properly quote command parameters</li>
    <li>mime-helpers: Add Alacritty and kitty (Fixes #378)</li>
    <li>color-settings: Destroy dialog before releasing its GtkBuilder</li>
    <li>dialogs: Revert type hint changes</li>
    <li>Add binding for /Gtk/DialogsUseHeader in appearance dialog</li>
    <li>appearance: Fix theme list selection (#191, #270, #332)</li>
    <li>xfce-mime-helper: exo_str_is_equal -&gt; g_strcmp0</li>
    <li>xfce4-mime-helper: Prefer full command when basic command is env (Fixes #358)</li>
    <li>Add Flatpak binaries (#360)</li>
    <li>Fix a recursive lock in libX11.</li>
    <li>appearance: Code style fixes</li>
    <li>appearance: Fix SyncThemes property path and default value</li>
    <li>Add addional checks to xfce_settings_editor_box_selection_changed</li>
    <li>Fix invalid cast error</li>
    <li>Fix $DISPLAY being set to wrong value</li>
    <li>build: Fix intltool lock file problem during make distcheck</li>
    <li>color-settings: Fix ColorSettings release</li>
    <li>Add search bar to search per component</li>
    <li>Use 2 decimals for refresh rate (Issue #351)</li>
    <li>display: Select next preset when minimal dialog is activated (!22)</li>
    <li>display: Add helper functions</li>
    <li>Replace deprecated spawn_command_line_on_screen with spawn_command_line</li>
    <li>Fix help button action</li>
    <li>Remove dependence on exo-string</li>
    <li>settings-manager: Always show the search entry, no slider, no button</li>
    <li>display: Add 'autoconnect mode' setting (Fixes #311)</li>
    <li>Switch to using xfce_gtk_label_set_a11y_relation</li>
    <li>keyboard: Mark system defaults switch as active (Fixes #310)</li>
    <li>Revert "keyboard: Correctly initialize setting (Fixes #310)"</li>
    <li>keyboard: Correctly initialize setting (Fixes #310)</li>
    <li>keyboard: Fix icon name in settings dialog</li>
    <li>xfsettingsd: Fix setting float array properties</li>
    <li>keyboard: Make buttons translatable (Fixes #306)</li>
    <li>mime-settings: Allow filtering by application name</li>
    <li>Drop preferences-desktop-default-applications icon name</li>
    <li>display: Switch to MessageDialog for confirmation</li>
    <li>display: Fix scale by rounding (Fixes #258)</li>
    <li>appearance: Add option to sync xfwm4 theme</li>
    <li>display: Add 1.25 and 1.75 ratios to presets</li>
    <li>Default to using /tmp for temporary directory base if both XDG_CACHE_HOME and TMPDIR are not defined in the environment.</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em></h2>
<ul>
    <li>xfconf: Prevent Use-After-Free in GClosureNotify</li>
    <li>xfconf-query: Remove ENABLE_NLS ifdefs</li>
    <li>Create per-channel config directory if it does not exist (#20, !15)</li>
    <li>xfconfd: Locale independent writing of floating point values (#33, !26)</li>
    <li>xfconfd: Silence GLib deprecation warning</li>
    <li>Use `I_` from Libxfce4util</li>
    <li>Fix "release" stage in CI</li>
    <li>Allow to choose an alternative service name prefix</li>
    <li>ci: Upload artifacts on failure without specifying a directory</li>
    <li>ci: Store tests results</li>
    <li>Add a lifecycle manager to xfconfd</li>
    <li>Replace GTimeVal with gint64 epoch time</li>
    <li>Remove memset() overhead</li>
    <li>Argument to g_strv_length() must not be NULL</li>
    <li>automake: Enable subdir-objects</li>
    <li>xfconf-query: Improve help string for 'verbose'</li>
    <li>Revamp the documentation to modernize and uniformize accross components</li>
    <li>configure.ac: use AC_PROG_CC_C99</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
    <li>Adding wallpapers of Xfce4.18 wallpaper contest</li>
    <li>Improve behavior when changing folders in settings dialog</li>
    <li>Revert "settings: select first image when directory changes"</li>
    <li>Improve icon area invalidation</li>
    <li>Make file transfer d-bus operations async</li>
    <li>xfce-desktop: give the 'primary' property a more clear description</li>
    <li>harmonize build-time option USE_DESKTOP_MENU to ENABLE_DESKTOP_MENU</li>
    <li>Fix windowlist icon blurriness when UI scale factor != 1</li>
    <li>Don't use deprecated xfce_spawn_*() functions</li>
    <li>Ignore deprecation warnings from libwnck functions</li>
    <li>Fix blurriness in window icons when UI scale != 1</li>
    <li>Fix blurry drag icon when UI scale != 1</li>
    <li>Fix warnings in settings dialog</li>
    <li>Make background previews less blurry when UI scale factor != 1</li>
    <li>Fix blurry rendering of special file icons in settings dialog</li>
    <li>Fix tooltip icon blurriness when UI scale factor != 1</li>
    <li>Remove single-file thunar transfer function</li>
    <li>Support dropping multiple icons onto another icon</li>
    <li>Better context menu population with multiple selected icons</li>
    <li>Allow showing file properties when multiple are selected</li>
    <li>Fix blurry desktop icons when UI scaling != 1</li>
    <li>Fix blurry background when UI scaling != 1</li>
    <li>Fix incorrect args to gtk_widget_queue_draw_area()</li>
    <li>Properly handle UI scale factor</li>
    <li>Allow ejecting unmounted volumes</li>
    <li>settings: fix memleak on background directory change</li>
    <li>settings: select first image when directory changes</li>
    <li>settings: rename some confusingly-named variables</li>
    <li>Make removable volume tooltop more consistent with the others</li>
    <li>Follow global gtk-menu-images setting for icon context menus</li>
    <li>Implement better keyboard typeahead navigation</li>
    <li>Call file manager launch API asynchronously</li>
    <li>Possibly fix issues finding icon locations in the rc file</li>
    <li>Support for menu item "set default application"</li>
    <li>Output compile_flags.txt</li>
    <li>Clean up resources better on exit</li>
    <li>Properly free string array when transferring multiple files</li>
    <li>Prevent more than one root menu popping up at the same time</li>
    <li>Refactor how root menu population works</li>
    <li>Use proper X11 screen number for enumerating windows</li>
    <li>Fix X11 multiscreen support</li>
    <li>Fix build when desktop icons are disabled</li>
    <li>Fix icon view drawing glitches</li>
    <li>Fix crash when selected icon changed workspaces</li>
    <li>Copy file instead of overwrite for DND</li>
    <li>Resolve deadlock on background change (Issue #188)</li>
    <li>Set default working directory for .desktop files</li>
    <li>build: Fix intltool lock file problem during make distcheck</li>
    <li>Improve warning about registering background with AccountsService.</li>
    <li>Strip only known icon suffix</li>
    <li>Use `icon_name` variable instead of hard-coded value</li>
    <li>Allocate memory after error processing</li>
    <li>Add option to disable "Delete" menu entry in context menu (!22)</li>
    <li>Use a more specific device eject label (!24)</li>
    <li>Ask for confirmation before desktop icons are rearanged (Issue #128)</li>
    <li>Increase opacity of xfce-verticals bg (Fixes #125)</li>
    <li>Set default tooltip icon size to 64 (!17)</li>
    <li>autoconf: Remove AC_HEADER_STDC</li>
    <li>Do not delete property not set</li>
    <li>Set a pixmap XID, not the XID of the root window (#62)</li>
    <li>Fix Applications Menu memory leak (Bug #102)</li>
    <li>Fix next background (!16)</li>
    <li>Fix gettext extraction from settings/xfce-backdrop-settings.desktop.in.in</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
    <li>placement: Fix the initial position</li>
    <li>placement: Factorize max space computation</li>
    <li>placement: Use a GdkRectangle instead of multiple coords</li>
    <li>client: Move getSizeExcludingMargins()</li>
    <li>screen: Add a new API to get the screen max space</li>
    <li>placement: Remove the "same monitor" param</li>
    <li>placement: Add new function to compute the max space available</li>
    <li>client: No need to always reconfigure on monitor change</li>
    <li>client: Preserve saved position on monitor change</li>
    <li>client: Get the GdkDisplay from ScreenInfo</li>
    <li>settings-dialogs: Remove ENABLE_NLS ifdefs</li>
    <li>client: Toggle from partial maximization to unmaximize</li>
    <li>placement: Auto-maximize windows with both width and height</li>
    <li>startup-notification: Fix timeout computation</li>
    <li>client: Update workarea only for windows with struts</li>
    <li>netwm: Fix clientValidateNetStrut()</li>
    <li>Added functionality to move window to another monitor</li>
    <li>configure.ac.in: drop obsolete check for libSM</li>
    <li>client.c: fix a little typo</li>
    <li>placement: clientMaxSpace() drop unused variable</li>
    <li>ui_style: drop unused getUIPangoContext()</li>
    <li>configure.ac.in: drop unused HAVE_CYGWIN conditional</li>
    <li>configure.ac.in: fix obsolete AC_HEADER_STDC / obsolete checks</li>
    <li>configure.ac.in: replace obsolete AC_HELP_STRING</li>
    <li>netwm.c: simplify and optimize struts array</li>
    <li>client.h: move STRUTS_SIZE to hints.h</li>
    <li>xfce-wm-menu.png: Fix the 22x22 icon size</li>
    <li>Drop subtitle from workspace settings dialog</li>
    <li>drop obsolete and unsupported KDE systray protocol</li>
    <li>wireframe: add window class hint to wireframes</li>
    <li>configure.ac.in: configure option to enable poswin</li>
    <li>Make workspace setting workable with other window managers</li>
    <li>Makefile.am: remove stale intltool-merge lockfile</li>
    <li>common: xfwm_get_monitor_geometry() report fail via return code, fix potential NULL</li>
    <li>compositor: fix ifdef</li>
    <li>compositor: fix printf format strings</li>
    <li>placement: Compute struts using output scale</li>
    <li>workspace: Update maximized on struts change</li>
    <li>focus: Fix focus being lost on workspace switch</li>
    <li>icons: Check XGetGeometry() appropriate return value</li>
    <li>compositor: Clear root backing pixmap before use</li>
    <li>Fix intltool lock file bug in make distcheck</li>
    <li>poswin: Fix location with client-side decorations</li>
    <li>compositor: Damage window when adding the opaque region</li>
    <li>Drop subtitle and use symbolic close icon</li>
    <li>Replace stock icons</li>
    <li>Use symbolic icons</li>
    <li>Change dialog help and close button icons</li>
    <li>placement: Windows on different screens cannot overlap</li>
    <li>client: Do not hide transients for group if above</li>
    <li>stacking: Above goes on top of fullscreen</li>
    <li>client: Handle removal of GTK_FRAME_EXTENTS</li>
    <li>placement: Restack fullscreen window when necessary</li>
    <li>icons: Gracefully handle non-existent icons</li>
    <li>settings: Fix untranslatable string</li>
    <li>placement: Ignore struts from windows on other monitors</li>
    <li>focus: Check for user focus for when passing focus</li>
    <li>compositor: Disable GLX vblank with virgl</li>
    <li>startup-notification: Reduce timeout to 10 seconds</li>
    <li>compositor: Add support for adaptive vsync with GLX</li>
    <li>compositor: Do not set deprecated compositor selection</li>
    <li>compositor: Disable GLX on mutli-screen (Zaphod)</li>
    <li>Merge branch 'drsudo/xfwm4-layerRadioBox'</li>
    <li>Added radio buttons and checkboxes to window menu</li>
    <li>display: check for XResQueryClientIds to enable XRes extension.</li>
    <li>cleanup: Don't use parenthesis when returning constants</li>
    <li>netwm: Do not use _NET_WM_PING in multi-screen</li>
    <li>settings: Enable either windows wrap or tiling</li>
    <li>compositor: Add throttled repaint</li>
    <li>compositor: Do not clear timeout on retry</li>
    <li>compositor: Fix repaint timeout</li>
</ul>

<h2>Power Manager <em>(xfce4-power-manager)</em></h2>
<ul>
    <li>autoconf: Use AC_CONFIG_MACRO_DIRS</li>
    <li>Do not include `config.h` in headers</li>
    <li>settings: Revert type hint change</li>
    <li>Fix intltool lock file bug in make distcheck</li>
    <li>`-export-dynamic` is a linker flag</li>
    <li>Free `eggalarm` after its last use</li>
    <li>Fix memory leak and make `while` more efficient</li>
    <li>Allocate dynamic memory to `what` so that it can be `g_free`d later</li>
    <li>Inhibit DPMS when getting power inhibit request.</li>
    <li>Fix icon name in autostart launcher</li>
    <li>panel-plugin: Switch percentage and time</li>
    <li>Charging ... until full, discharging ... remaining</li>
    <li>Fix memory corruption due to incorrect g_ptr_array usage</li>
    <li>Remove a floating reference</li>
    <li>Connect to polkit signal via GDBusProxy generic signal</li>
    <li>Do not log a warning about expected behavior</li>
    <li>Revert "Lower minimum inactivity to 5 minutes"</li>
    <li>Increase sleep timeout to 6hrs (Fixes #80)</li>
    <li>Lower minimum inactivity to 5 minutes</li>
    <li>automake: Enable subdir-objects</li>
    <li>backlight: always update notification</li>
    <li>remove unused variable show_presentation_indicator</li>
    <li>link xfpm-brightness.c with -lm</li>
    <li>Fix va_args usage in get_device_icon_name</li>
    <li>Remove GSourceFunc casts</li>
</ul>

<h2>Thumbnail Generator <em>(tumbler)</em></h2>
<ul>
      <li>cleanup: Do not set and free a GError unnecessarily</li>
      <li>desktop-thumbnailer: Avoid recursion (Fixes #67)</li>
      <li>desktop-thumbnailer: allocate/free memory at the right level</li>
      <li>Allow libgepub 0.7 as well</li>
      <li>gst-thumbnailer: Add mime type check (Fixes #65)</li>
      <li>desktop-thumbnailer: Guard against null path</li>
      <li>Yet another fix to the modification time storage format</li>
      <li>Allow to choose an alternative service name prefix (!21)</li>
      <li>scheduler: Enable multi-threading (#1)</li>
      <li>Store modification time in locale independent format</li>
      <li>desktop-thumbnailer: Delete temp file at the same level it was created (#57)</li>
      <li>i18n: Add missing initialization</li>
      <li>Fix missing mutex unlock in group scheduler (#56)</li>
      <li>Build: Check for best possible grep, egrep, sed</li>
      <li>Add support for thumbnail size x-large and xx-large (#51)</li>
      <li>desktop-thumbnailer: Allow to override configuration in desktop files (#52)</li>
      <li>desktop-thumbnailer: Allow for thumbnailer override (#53)</li>
      <li>Try all available thumbnailers before declaring failure (#50)</li>
      <li>Add a corresponding systemd user service for the D-Bus session services (#14)</li>
      <li>Support shared thumbnail repositories of the freedesktop.org thumbnail spec</li>
      <li>pixbuf-thumbnailer: Stop animated image loading at first frame (#48)</li>
      <li>pixbuf-thumbnailer: Increase loader buffer size (!19)</li>
      <li>Use GLib structured logging</li>
      <li>Debug: Add some config-file-related messages (#23)</li>
      <li>Error handling: Fit to the spec and complete message if needed (#49)</li>
      <li>Debug: Add or adjust some traces and dumps</li>
      <li>Debug: Convert dump functions to `GString, g_debug()`</li>
      <li>Debug: Prefer runtime to compile-time check for logging</li>
      <li>Cleanup: Use `g_file_peek_path()` when appropriate</li>
      <li>Cleanup: Remove deprecated GNOME build and TODO file</li>
      <li>Define error messages in `tumbler/tumbler-error.h`</li>
      <li>poppler-thumbnailer: Fix deprecation warning</li>
      <li>ffmpeg-thumbnailer: Fix deprecation warning</li>
      <li>Fix warnings from scan-build (Clang 13.0)</li>
      <li>Fix `-Wclobbered` compilation warnings</li>
      <li>Use GLIB_VERSION_MIN/MAX_REQUIRED/ALLOWED</li>
      <li>Remove TUMBLER_ADD_INTERFACE (!16)</li>
      <li>autoconf: Some updates (!16)</li>
      <li>Remove GSourceFunc casts (!13)</li>
      <li>gepub-thumbnailer: Add missing sanity check</li>
      <li>Reserve some third-party API messages to debug logging (#10, #29)</li>
      <li>Set the priority of external thumbnailers to 0</li>
      <li>Revert "Set Max file sizes."</li>
      <li>xdg-cache: Add missing sanity check</li>
      <li>xdg-cache: Remove temporary file when saving failed</li>
      <li>xdg-cache: Set thumbnail permissions to 600</li>
      <li>pixbuf-thumbnailer: Try to ignore `GDK_PIXBUF_ERROR_CORRUPT_IMAGE`</li>
      <li>Use microsecond precision for last modification time (#15, !20)</li>
      <li>poppler-thumbnailer: Fix error handling</li>
      <li>pixbuf-thumbnailer: Simplify error handling</li>
      <li>font-thumbnailer: Fix error handling</li>
      <li>Cache cleanup when a request for a URI fails (#22)</li>
      <li>jpeg-thumbnailer: Do not use low quality embedded thumbnail (#37)</li>
      <li>gst-thumbnailer: Fix error handling</li>
      <li>ffmpeg-thumbnailer: Fix error handling</li>
      <li>odf-thumbnailer: Fix error handling</li>
      <li>xdg-cache: Ensure read_thumbnail_info() always sets an error on failure</li>
      <li>xdg-cache: Chain-up to parent in `finalize()`</li>
      <li>desktop-thumbnailer: Fill in `finalize()`</li>
      <li>gepub-thumbnailer: Fix a memory leak</li>
      <li>desktop-thumbnailer: Fix some memory leaks</li>
      <li>desktop-thumbnailer: Fix error handling</li>
      <li>Fix some priority issues</li>
      <li>pixbuf-thumbnailer: Use a mime-type-specific loader when possible (#20, #32, #36, !18)</li>
      <li>raw-thumbnailer: Check for all possible pkg-config files (#44, !18)</li>
</ul>

<h2>Volume Manager <em>(thunar-volman)</em></h2>
<ul>
    <li>Drop subtitle from settings dialog</li>
    <li>autoconf: Use AC_CONFIG_MACRO_DIRS</li>
    <li>build: Fix intltool lock file problem during make distcheck</li>
    <li>Fix compilation warnings</li>
    <li>automake: Enable subdir-objects</li>
    <li>Replace ExoBinding with GBinding</li>
    <li>Remove GSourceFunc casts (!5)</li>
</ul>
