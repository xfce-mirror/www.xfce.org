<?php $head['title'] = 'Xfce 4.20 Changelog'; ?>
<h1>Xfce 4.20 Changelog</h1>

<p>This changelog summary shows relevant user facing changes made since Xfce 4.18.</p>
<p>To keep this summary changelog readable, this page provides a simplified extraction of each components' full changelog. If you are interested in the full, unmodified changelog of a specific component, please follow the component link and open the according NEWS file.</p>

<h2>Dependency changes</h2>
<ul>
   <li>glib-2.0 &gt;= 2.72 - Same version for gmodule-2.0, gobject-2.0, gthread-2.0, gio-2.0 and gdbus</li>
   <li>gdk-pixbuf-2.0 >= 2.42.8</li>
   <li>gobject-introspection >= 1.72</li>
   <li>wayland 1.20</li>
   <li>wayland-protocols 1.25</li>
   <li>gtk-layer-shell 0.7.0</li>
</ul>

<h2>Changes made across multiple Xfce core components</h2>
<ul>
   <li>Switch all components from intltool to gettext (<a href="https://gitlab.xfce.org/xfce/exo/-/issues/41">xfce4-dev-tools#41</a>)</li>
   <li>Usage of .clang-format file for most core projects, integration into automated ci-build</li>
   <li>Major abstraction efforts to add experimental support for wayland while keeping X11 functional (Done for all components, except xfwm4)</li>
   <li>Various minor and some major memory leaks were fixed across all Xfce components</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/exo">Extension Library</a> <em>(exo)</em></h2>
<ul>
   <li>exo-tree-view: Add Ctrl+Shift+Click functionality (<a href="https://gitlab.xfce.org/xfce/exo/-/issues/116">#116</a>)</li>
   <li>Performance: Use GSequence instead of GList in exo-icon-view</li>
   <li>Fix non X11 build (Fixes <a href="https://gitlab.xfce.org/xfce/exo/-/issues/111">#111</a>)</li>
   <li>exo-open: (Issue <a href="https://gitlab.xfce.org/xfce/exo/-/issues/108">#108</a>) Relaxed URI check</li>
   <li>exo-die: Resolve symlink when saving .desktop file</li>
   <li>IconView,TreeView : Keep type ahead search box inside view widget</li>
   <li>Load icons using icon theme scaling functions correctly</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/garcon">Menu Library</a> <em>(garcon)</em></h2>
<ul>
   <li>Use Exec instead of TryExec for menu item visibility (<a href="https://gitlab.xfce.org/xfce/garcon/-/issues/22">#22</a>)</li>
   <li>Use target desktop files instead of symlinks (Fixes <a href="https://gitlab.xfce.org/xfce/garcon/-/issues/1">#1</a>)</li>
   <li>Wait for any async operation to finish before releasing locks</li>
   <li>Use GIcons for menu icons instead of loading surfaces</li>
   <li>garcon-gtk: Properly update GtkMenu is_populated state</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/libxfce4ui">Widget Library</a> <em>(libxfce4ui)</em></h2>
<ul>
   <li>Add "overlap groups" to the shortcut editor (<a href="https://gitlab.xfce.org/xfce/libxfce4ui/-/issues/115">#115</a>)</li>
   <li>Remove forced icon from XfceTitledWindow cliend side decorations</li>
   <li>xfce4-about: Show info about windowing system</li>
   <li>clipboard-manager: Get images from GtkClipoard</li>
   <li>sm-client: Reset SmcConnection when IceConnection is closed on error</li>
   <li>xfce4-about: Use GdkGLContext for system tab</li>
   <li>titled-dialog: Ensure a single icon on the left when CSD is used (<a href="https://gitlab.xfce.org/xfce/libxfce4ui/-/issues/92">#92</a>)</li>
   <li>Display distribution logo in xfce4-about (Fixes <a href="https://gitlab.xfce.org/xfce/libxfce4ui/-/issues/54">#54</a>)</li>
   <li>screensaver: Add lock-on-sleep property</li>
   <li>screensaver: Prioritize user lock command</li>
   <li>screensaver: Use reasonable timeout for methods that may not reply</li>
   <li>screensaver: Remove support for gnome-screensaver (Fixes <a href="https://gitlab.xfce.org/xfce/libxfce4ui/-/issues/62">#62</a>)</li>
   <li>screensaver: Run lock command synchronously (Fixes <a href="https://gitlab.xfce.org/xfce/libxfce4ui/-/issues/70">#70</a>)</li>
   <li>XfceFileNameInput - wrap error message (Issue <a href="https://gitlab.xfce.org/xfce/libxfce4ui/-/issues/60">#60</a>)</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/libxfce4util">Utility Library</a> <em>(libxfce4util)</em></h2>
<ul>
   <li>Add meson build</li>
   <li>Migrate to xdt-gen-visibility and xdt-check-abi</li>
   <li>session-management: Try to create D-BUS proxy synchronously</li>
   <li>fileutils: Fix MD5 hash in xfce_create_shared_thumbnail_path()</li>
   <li>Allow disabling polkit interactivity in session management (Fixes <a href="https://gitlab.xfce.org/xfce/libxfce4util/-/issues/21">#21</a>)</li>
   <li>consolekit: Use Reboot and PowerOff ConsoleKit2 methods</li>
   <li>Improve checksum calculation (<a href="https://gitlab.xfce.org/xfce/libxfce4util/-/issues/17">#17</a>)</li>
   <li>Fix desktop entry value escaping</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/libxfce4windowing">Windowing Abstraction Library</a> <em>(libxfce4windowing)</em></h2>
<ul>
   <li>Add XfwWindowListMenu widget</li>
   <li>Actually export xfw_screen_get_seats from the library</li>
   <li>Add XfwSeat abstraction</li>
   <li>Use physical geometry when comparing X11 window geometry to monitor</li>
   <li>Try to make monitor IDs stable between X11 and Wayland</li>
   <li>Add a couple small test programs</li>
   <li>Add XfwMonitor:fractional-scale</li>
   <li>Add primary monitor concept to XfwMonitor</li>
   <li>Add XfwMonitor</li>
   <li>Add meson build files</li>
   <li>window-wayland: Ensure app always exists (Fixes <a href="https://gitlab.xfce.org/xfce/libxfce4windowing/-/issues/14">#14</a>)</li>
   <li>Add monitor-added and monitor-removed signals to XfwWorkspaceWayland</li>
   <li>Add configure args to enable/disable X11/Wayland</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/thunar">File Manager</a> <em>(thunar)</em></h2>
<ul>
   <li>Verify copied destination file using direct I/O (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1471">#1471</a>)</li>
   <li>Verify by compare instead of checksum (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1471">#1471</a>)</li>
   <li>Drop optional POLKIT dependency (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1403">#1403</a>)</li>
   <li>Add emblem and type description to mount points (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1388">#1388</a>)</li>
   <li>Support second shortcut for tab switch (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1472">#1472</a>)</li>
   <li>Fix accel map loading (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1047">#1047</a>)</li>
   <li>Rework handling of location buttons (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/951">#951</a>)</li>
   <li>Show name of parent folder in replace dialog (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/62">#62</a>)</li>
   <li>Wrap single-word filenames in delete dialog (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1412">#1412</a>)</li>
   <li>Add command line option to force new window</li>
   <li>Show full context menu during search (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/837">#837</a>)</li>
   <li>Transfer files dialog use less buttons (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/58">#58</a>)</li>
   <li>Fix handling of special columns in list view</li>
   <li>Add View Switcher item to toolbar</li>
   <li>Option to use client side decorations (CSD)</li>
   <li>Support copy/link within a folder via CTRL+drag (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/63">#63</a>)</li>
   <li>Rework the "Show Menubar" toolbar button (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/936">#936</a>)</li>
   <li>Optionally show hidden files count in statusbar (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1387">#1387</a>)</li>
   <li>Allow type ahead search the treeview sidepane</li>
   <li>Added a hidden setting to toggle tree-lines</li>i>
   <li>Add default bindings for special keys (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1386">#1386</a>)</li>
   <li>Only add successfully opened files to Recent</li>
   <li>Add files opened via the location entry to Recent (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1349">#1349</a>)</li>
   <li>Re-enable toolbar overflow menu (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1240">#1240</a>)</li>
   <li>Optionally use symbolic icons in the sidepane and location bar (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/252">#252</a>)</li>
   <li>Dont add directories to recent:/// (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1372">#1372</a>)</li>
   <li>Enter folders automatically while dragging files (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/5">#5</a>)</li>
   <li>Focus split view pane on DnD events (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1243">#1243</a>)</li>
   <li>Fix several out of sync bugs (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1326">#1326</a>)</li>
   <li>Add keyboard shortcut for "Invert Selection"</li>
   <li>Performance: Use GHashTable to store files (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1337">#1337</a>)</li>
   <li>Performance: Improvements for icon view (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1315">#1315</a>)</li>
   <li>Performance: Load statusbar text in separate job (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1315">#1315</a>)</li>
   <li>Performance: Dont save bookmarks on trash change (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/141">#141</a>)</li>
   <li>Restore tabs when launched with uri arg. (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1233">#1233</a>)</li>
   <li>Add New Tab and New Window icons to toolbar (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1263">#1263</a>)</li>
   <li>Custom Actions: Allow sumenu UCAs in toolbar (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/780">#780</a>)</li>
   <li>Custom Actions: Fix shortcuts for ucas in subfolders (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1043">#1043</a>)</li>
   <li>Fix possible deadlock during search (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1321">#1321</a>)</li>
   <li>No view-switch while searching (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1293">#1293</a>)</li>
   <li>Prevent focus stealing of file transfer dialog (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/643">#643</a>)</li>
   <li>Prevent infinite reload loop for symlinks (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1270">#1270</a>)</li>
   <li>Restart thumbnailer proxy after failure (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1252">#1252</a>)</li>
   <li>Unify way to request thumbnails for preview (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/949">#949</a>)</li>
   <li>Request thumbnails in replace dialog (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/737">#737</a>)</li>
   <li>Performance: Usage of io-jobs to set emblems (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/892">#892</a>)</li>
   <li>Performance: Load content types in a separate job (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1192">#1192</a>)</li>
   <li>Remember the bulk renamer dialog size (Issue <a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1040">#1040</a>)</li>
   <li>Apply scale factor as well to thumbnails (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1143">#1143</a>)</li>
   <li>Support ipv6 remote URLs (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/864">#864</a>)</li>
   <li>Add a setting for window title style (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1130">#1130</a>)</li>
   <li>Convert toolbar view buttons into radio buttons (Issue <a href="https://gitlab.xfce.org/xfce/thunar/-/issues/925">#925</a>)</li>
   <li>Option to queue operations on busy disks (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1029">#1029</a>)</li>
   <li>Ignore extension on dir rename (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1150">#1150</a>)</li>
   <li>Consistent horizontal spacing in icon view (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/118">#118</a>)</li>
   <li>Option to show launcher name instead of filename (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/451">#451</a>)</li>
   <li>Performance: Limit number of templates to prevent lag (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/472">#472</a>)</li>
   <li>Don't reload the directory on copy or cut (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1060">#1060</a>)</li>
   <li>Dont open folder when mounting device (Issue <a href="https://gitlab.xfce.org/xfce/thunar/-/issues/919">#919</a>)</li>
   <li>Dont show full menu for unmounted devices (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1049">#1049</a>)</li>
   <li>Always ask before delete files via undo (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1027">#1027</a>)</li>
   <li>Allow symlink creation on remote locations (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/875">#875</a>)</li>
   <li>Keep directory specific sort details (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1017">#1017</a>)</li>
   <li>Add Shortcut to switch split-view panes (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/1005">#1005</a>)</li>
   <li>Prevent jumping cursor on file deletion (<a href="https://gitlab.xfce.org/xfce/thunar/-/issues/910">#910</a>)</li>
   <li>Dialog when closing split-pane with multiple tabs</li>
   <li>Preserve trusted state when launchers are copied</li>
   <li>Prevent build failure for NixOS (Issue <a href="https://gitlab.xfce.org/xfce/thunar/-/issues/972">#972</a>)</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/thunar-volman">Volume Manager</a> <em>(thunar-volman)</em></h2>
<ul>
   <li>Add icons at missing sizes, clean up SVG metadata</li>
   <li>Declare use of function to fix build on FreeBSD (fixes <a href="https://gitlab.xfce.org/xfce/thunar-volman/-/issues/24">#24</a>)</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/tumbler">Thumbnail Generator</a> <em>(tumbler)</em></h2>
<ul>
   <li>gepub-thumbnailer: Emit error signal if file location is unsupported</li>
   <li>gepub-thumbnailer: Return if GBytes buffer is NULL</li>
   <li>Disambiguate thumbnailer signals</li>
   <li>scheduler: Fix ready/error signal forwarding</li>
   <li>xdg-cache: Fix temporary file management when saving thumbnail</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/xfce4-appfinder">Application Finder</a> <em>(xfce4-appfinder)</em></h2>
<ul>
   <li>Add support to application actions (<a href="https://gitlab.xfce.org/xfce/xfce4-appfinder/-/issues/86">#86</a>)</li>
   <li>Add new preference to close window when focus is lost (<a href="https://gitlab.xfce.org/xfce/xfce4-appfinder/-/merge_requests/41">!41</a>)</li>
   <li>Immediately execute command on ctrl+enter (<a href="https://gitlab.xfce.org/xfce/xfce4-appfinder/-/issues/56">#56</a>)</li>
   <li>appdata: Fix `appstreamcli validate` issues (<a href="https://gitlab.xfce.org/xfce/xfce4-appfinder/-/merge_requests/44">!44</a>)</li>
   <li>Ctrl+N / Ctrl+P navigation keys for treeview (<a href="https://gitlab.xfce.org/xfce/xfce4-appfinder/-/issues/82">#82</a>)</li>
   <li>New preference to use application generic names (<a href="https://gitlab.xfce.org/xfce/xfce4-appfinder/-/issues/80">#80</a>)</li>
   <li>Add daemon option (<a href="https://gitlab.xfce.org/xfce/xfce4-appfinder/-/issues/78">#78</a>)</li>
   <li>New preference option to launch items on a single click (<a href="https://gitlab.xfce.org/xfce/xfce4-appfinder/-/issues/79">#79</a>)</li>
   <li>New option to toggle window visibility of background service (<a href="https://gitlab.xfce.org/xfce/xfce4-appfinder/-/issues/52">#52</a>)</li>
   <li>Restore command icons in Commands history (<a href="https://gitlab.xfce.org/xfce/xfce4-appfinder/-/merge_requests/33">!33</a>)</li>
   <li>Change icon size for "small" from 36px to 32px (<a href="https://gitlab.xfce.org/xfce/xfce4-appfinder/-/merge_requests/34">!34</a>)</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/xfce4-dev-tools">Development Tools</a> <em>(xfce4-dev-tools)</em></h2>
<ul>
   <li>Add optional ABI check to the CI build stage</li>
   <li>Add meson support to xfce-do-release</li>
   <li>Add meson to CI build</li>
   <li>ci: Parallelize autotools builds</li>
   <li>ci: Add static analysis jobs</li>
   <li>ci: Add clang build</li>
   <li>ci: Only run a stage if previous didn't failed</li>
   <li>ci: Add no-x11 and no-wayland builds</li>
   <li>ci: Make build stage fail on any compiler warning</li>
   <li>ci: Make jobs running in merge requests interruptible</li>
   <li>ci: Add clang-format check</li>
   <li>Bump CI container to Ubuntu 24.04</li>
   <li>Add check for xsltproc (<a href="https://gitlab.xfce.org/xfce/xfce4-dev-tools/-/issues/60">#60</a>)</li>
   <li>xdt-autogen: Fixed wrong make displayed on FreeBSD</li>
   <li>Add support for libxfce4windowing</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/xfce4-panel">Panel</a> <em>(xfce4-panel)</em></h2>
<ul>
   <li>Added "show inactive" prop to lcd clock (repurposed from binary clock)</li>
   <li>Reduce minimum button size to improve layout at very small panel</li>
   <li>clock: Added 24h clock mode to the analog clock</li>
   <li>wayland: tasklist: Fix monitor detection when panel is remapped</li>
   <li>wayland: autohide: Do not block when panel has input focus</li>
   <li>wayland: autohide: Show/hide panel instead of moving it offscreen</li>
   <li>autohide: Show/hide autohide window instead of moving it offscreen</li>
   <li>showdesktop: Add the ability to show the desktop on mouse hover</li>
   <li>prefs-dialog: Bind Del key to remove button</li>
   <li>prefs-dialog: Allow several items to be removed at once</li>
   <li>systray: Always scale icons</li>
   <li>Adapt to libxfce4windowing</li>
   <li>libxfce4panel: Fix custom menu items management</li>
   <li>panel: Remove autosave timer for plugins</li>
   <li>Add option to toggle week numbers (fixes <a href="https://gitlab.xfce.org/xfce/xfce4-panel/-/issues/686">#686</a>)</li>
   <li>panel: Block autohide when the panel has input focus</li>
   <li>clock: Implement ConsoleKit sleep monitor</li>
   <li>Add/Sharpen icons at 16-128px and fix blurry icons when UI scale is > 1 </li>
   <li>Load icons using icon theme scaling functions correctly</li>
   <li>icons: Scale at size 16x16 to 128x128 (Fixes <a href="https://gitlab.xfce.org/xfce/xfce4-panel/-/issues/385">#385</a>)</li>
   <li>build: Fix for Wayland backend disabled (Fixes <a href="https://gitlab.xfce.org/xfce/xfce4-panel/-/issues/729">#729</a>)</li>
   <li>build: Make all X11/Wayland-specific dependencies optional</li>
   <li>panel: Allow to force running plugins as internal</li>
   <li>Port to Wayland (<a href="https://gitlab.xfce.org/xfce/xfce4-panel/-/merge_requests/103">!103</a>)</li>
   <li>tasklist: Fix scrolling through window buttons (Fixes <a href="https://gitlab.xfce.org/xfce/xfce4-panel/-/issues/692">#692</a>)</li>
   <li>tasklist: Fix group button visibility (<a href="https://gitlab.xfce.org/xfce/xfce4-panel/-/issues/693">#693</a>)</li>
   <li>panel: Always include borders to compute snap position</li>
   <li>clock: Fix sync timeout</li>
   <li>clock: Do not override custom font formats (<a href="https://gitlab.xfce.org/xfce/xfce4-panel/-/issues/675">#675</a>)</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>
   
<h2><a href="https://gitlab.xfce.org/xfce/xfce4-power-manager">Power Manager</a> <em>(xfce4-power-manager)</em></h2>
<ul>
   <li>settings: Hide critical action warning if upower action == Ignore</li>
   <li>button: Also listen to brightness-exponential change</li>
   <li>x11: common: Fix multi-monitor setup detection</li>
   <li>manager: Use D-Bus proxy instead of SMClient to call SessionManager</li>
   <li>settings: Warn about upower acting before xfpm on critical battery</li>
   <li>power: Fix overall charge state calculation</li>
   <li>critical-power: Avoid unintentional user action in critical dialog</li>
   <li>manager: Honor lid settings when the system transition to battery</li>
   <li>manager: Turn off internal screen when locked on lid closed</li>
   <li>manager: Be consistent when lid is closed in multi-monitor setup</li>
   <li>settings: Add option to shutdown on lid closed</li>
   <li>settings: Reduce inactivity times to reasonable values</li>
   <li>manager: Add missing hybrid sleep case</li>
   <li>settings: Change default sleep mode on battery to suspend</li>
   <li>Add hybrid sleep support</li>
   <li>settings: Add a button to open xfce4-screensaver-preferences</li>
   <li>Handle keyboard backlight toggle keys.</li>
   <li>Make various components abstract and add X11/Wayland impl</li>
   <li>Suspend system if lock screen fails on lid close (Fixes <a href="https://gitlab.xfce.org/xfce/xfce4-power-manager/-/issues/209">#209</a>)</li>
   <li>Add support for power profiles daemon</li>
   <li>Fix/drop light locker integration (Fixes <a href="https://gitlab.xfce.org/xfce/xfce4-power-manager/-/issues/201">#201</a>)</li>
   <li>Add energy rate into device details</li>
   <li>Add app icon at 64px, 96px, clean up SVG metadata</li>
   <li>Keep "lock-on-sleep" in sync with other components via XfceScreensaver</li>
   <li>Use authorization info from systemd/ConsoleKit</li>
   <li>Add "Do nothing" option for lid closed action</li>
   <li>Simplify brightness level management (Fixes <a href="https://gitlab.xfce.org/xfce/xfce4-power-manager/-/issues/139">#139</a>)</li>
   <li>screensaver: Fall back on lock command if D-Bus call failed</li>
   <li>Fix blurriness in icons when UI scale factor > 1</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/xfce4-session">Session Manager</a> <em>(xfce4-session)</em></h2>
<ul>
   <li>Add xapp for Background xfce-portals.conf</li>
   <li>Add css class for session chooser</li>
   <li>manager: Honor user settings for session saving in non-interact mode</li>
   <li>logout-dialog: Remove save session checkbox</li>
   <li>wayland: Use gtk-layer-shell for the logout dialog</li>
   <li>wayland: Complete logout process</li>
   <li>wayland: Adapt failsafe startup</li>
   <li>wayland: Adapt startxfce4 and related files</li>
   <li>Add xapp for Wallpaper, Screenshot and Background in xfce-portals.conf</li>
   <li>Add minimal xdg-desktop-portal conf file for Xfce (<a href="https://gitlab.xfce.org/xfce/xfce4-session/-/issues/181">#181</a>)</li>
   <li>Add icons at missing sizes, clean up SVG metadata</li>
   <li>xflock4: Add --help option (Fixes <a href="https://gitlab.xfce.org/xfce/xfce4-session/-/issues/148">#148</a>)</li>
   <li>Add Lock() D-Bus method and make xflock4 a simple wrapper around it</li>
   <li>Remove xscreensaver.desktop</li>
   <li>build: Add suspend support for Solaris</li>
   <li>startxfce4: Fix xinit arguments order</li>
   <li>Fix 'trigger on suspend' (<a href="https://gitlab.xfce.org/xfce/xfce4-session/-/issues/106">#106</a>)</li>
   <li>Fix suspend/hibernation bug on ConsoleKit2 (Fixes <a href="https://gitlab.xfce.org/xfce/xfce4-session/-/issues/164">#164</a>)</li>
   <li>Fix blurry icons in autostart tab when UI scale > 1</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/xfce4-settings">Settings Manager</a> <em>(xfce4-settings)</em></h2>
<ul>
   <li>Use a toggle button for the MIME chooser dropdown buttons</li>
   <li>Enumerate/load icon themes off of the UI thread</li>
   <li>appearance-settings: Fix scrolling via arrow keys in gtk theme list</li>
   <li>appearance-settings: Show warnings for incomplete icon themes</li>
   <li>xfsettingsd: Fix client side decoration layout</li>
   <li>xfsettingsd: Use default display profile when several profiles match</li>
   <li>xfsettingsd: Make CSD opt-in</li>
   <li>mouse-settings: Fixes reverse horizontal scrolling</li>
   <li>xfce-randr: Take RR_DoubleScan and RR_Interlace flags into account</li>
   <li>Add check box to toggle adaptive/flat mouse accel profile with</li>
   <li>display-settings: Update primary monitor status on setting change</li>
   <li>display-profiles: Allow editing profile names</li>
   <li>display-profiles: Show all profiles in tree view</li>
   <li>display-settings: Turn "auto-enable-profiles" into a combo box</li>
   <li>display-settings: Apply changes only when Apply button is clicked</li>
   <li>display-settings: Switch to one-dimensional scaling</li>
   <li>display-settings: Better UI update when mirroring/unmirroring</li>
   <li>display-settings: Avoid implicit mode change when enabling output</li>
   <li>display-settings: Allow to mirror disabled outputs</li>
   <li>display-settings: Use GTK Layer Shell for popups on Wayland</li>
   <li>wayland: Add support for wlr-output-management</li>
   <li>Properly distinguish X11/Wayland code paths</li>
   <li>appearance: Match more dark themes (fixes <a href="https://gitlab.xfce.org/xfce/xfce4-settings/-/issues/495">#495</a>)</li>
   <li>appearance: Check for presence of color-scheme key</li>
   <li>mime-settings: Add multiselection (Fixes <a href="https://gitlab.xfce.org/xfce/xfce4-settings/-/issues/346">#346</a>)</li>
   <li>Displays: Fix finding a valid mode by refresh rate</li>
   <li>Add UI to toggle libinput's hires scrolling events</li>
   <li>fix multiple blurry icons in different dialogs</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/xfconf">Configuration Manager</a> <em>(xfconf)</em></h2>
<ul>
   <li>Allow calling xfconf_g_property_bind() with GdkColor or GdkRGBA types</li>
   <li>tests: Report D-Bus error when xfconfd is not auto-started</li>
   <li>Add a systemd user unit corresponding to the D-Bus session service</li>
   <li>channel: Warn if queried type does not match property type</li>
   <li>xml-backend: Escape whitespaces when writing file to disk</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/xfdesktop">Desktop Manager</a> <em>(xfdesktop)</em></h2>
<ul>
   <li>Reset backdrop cycler timer if user manually changes the image</li>
   <li>Add all background dirs to the settings chooser button shortcuts</li>
   <li>Add option to sort folders before files (Issue <a href="https://gitlab.xfce.org/xfce/xfdesktop/-/issues/332">#332</a>)</li>
   <li>settings: avoid flashing an empty info bar on startup</li>
   <li>settings: enumerate image folder fully asynchronously</li>
   <li>Redesign the 'Desktop Icons' tab in the settings dialog</li>
   <li>Add a root context menu for the window icon manager</li>
   <li>Make icon sorting confirmation dialog optional (Issue <a href="https://gitlab.xfce.org/xfce/xfdesktop/-/issues/266">#266</a>)</li>
   <li>Add ability to set custom icon label text and background colors</li>
   <li>Fix desktops not being removed when a monitor is disconnected</li> 
   <li>Fix icon view ascending vs. descending sort order</li>
   <li>Use windowlist menu widget from libxfce4windowing</li>
   <li>Don't repeat backdrop images when cycling randomly</li>
   <li>Add configurable keybinding for toggle-cursor for the icon view</li>
   <li>Fix new-folder icon missing on some icon themes</li>
   <li>Add editable keyboard shortcuts for the desktop and icon view</li>
   <li>Mirror thunar's behavior for the new file/folder dialogs</li>
   <li>Fix _NETSCAPE_URL drops</li>
   <li>Treat icon views independently when handling file icon selection</li>
   <li>Rewrite the monitor mirror detection and handling</li>
   <li>Add new YAML icon position saving code</li>
   <li>Better way to deal with monitors coming and going</li>
   <li>Migrate old .png background filenames to .svg</li>
   <li>Update everything to use Xfce4Windowing / XfwMonitor</li>
   <li>Use a separate XfceDesktop widget/window per monitor</li>
   <li>Add meson build</li>
   <li>Start isolating X11 code as much as possible</li>
   <li>Fix desktop window positioning on multi-monitor Wayland</li>
   <li>Add pref for label underline when in single click mode</li>
   <li>Allow opening multiple selected folder icons from context menu</li>
   <li>Support for cascading custom actions (<a href="https://gitlab.xfce.org/xfce/xfdesktop/-/issues/221">#221</a>)</li>
   <li>Ensure workarea is updated when UI scale factor changes</li>
   <li>Place new files in the location they were dropped</li>
   <li>Properly thread UI scale factor to file icon loading functions</li>
   <li>Add preliminary Wayland support using libxfce4windowing</li>
   <li>backdrop: render gamma-correct gradients</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>

<h2><a href="https://gitlab.xfce.org/xfce/xfwm4">Window Manager</a> <em>(xfwm4)</em></h2>
<ul>
   <li>Support for stretch theme variants</li>
   <li>compositor: Block softpipe for GLX vsync</li>
   <li>focus: Include skip taskbar/pager when passing focus</li>
   <li>add missing break to fix crash when alt-tabbing (<a href="https://gitlab.xfce.org/xfce/xfwm4/-/issues/762">#762</a>)</li>
   <li>Added check for working with external compositors</li>
   <li>screen: Fix uninitialized rect in myScreenGetXineramaMonitorGeometry</li>
   <li>stacking: Use WIN_LAYER_FULLSCREEN for focused fullscreen windows</li>
   <li>drop obsolete xfwm4rc</li>
   <li>compositor: Expose just the window area</li>
   <li>Various minor improvements, tweaks and maintenance changes</li>
</ul>