<?php $head['title'] = 'Xfce 4.16 Changelog'; ?>

<h1>Xfce 4.16 Changelog</h1>

<p>Note: the changelogs shown here are since the version of the components that shipped with Xfce 4.14.</p>

<h2>Dependency changes</h2>
<ul>
  <li>Gtk &gt;= 3.22, GLib &gt;= 2.50 and GDBus.</li>
  <li>Add libgtop</li>
  <li>Remove Gtk2 support</li>
</ul>

<h2>Development Tools <em>(xfce4-dev-tools)</em></h2>
<ul>
  <li>Add several helpers to gather release notes etc and actually perform releases</li>
  <li>Add xfce-build Docker container (which is also used in GitLab CI)</li>
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
  <li>TODO</li>
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
  <li>TODO</li>
</ul>

<h2>File Manager <em>(thunar)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Power Manager <em>(xfce4-power-manager)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Thumbnail Generator <em>(tumbler)</em></h2>
<ul>
  <li>TODO</li>
</ul>

<h2>Volume Manager <em>(thunar-volman)</em></h2>
<ul>
</ul>
