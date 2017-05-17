<?php $head['title'] = 'Xfce 4.4 rc 2 (4.3.99.2) Changelog'; ?>

<h1>Xfce 4.4 rc 2 (4.3.99.2) Changelog</h1>

<h2>Widget Library <em>(libxfcegui4)</em></h2>
<ul>
  <li>Plug memory leaks and reduce relocations. (bug #2377).</li>
  <li>Avoid sending spurious icon geometry updates (bug #2306).</li>
  <li>Fix handling of quoted commands (bug #2276).</li>
  <li>Clock widget enhancements (bug #2264).</li>
  <li>Locate the task action menu on the correct screen.</li>
  <li>Don't show urgent button on all workspaces.</li>
  <li>Stop blinking an urgent tasklist item after it has blinked 10 times, but leave it highlighted until the urgent hint is gone.</li>
</ul>

<h2>Extension Library <em>(exo)</em></h2>
<ul>
  <li>Added a <tt>--working-directory</tt>command line switch to exo-open, which primarily useful to start the TerminalEmulator's in a specific directory.</li>
  <li>Import french translations of the user manual. (bug #2478).</li>
  <li>Fix double click sometimes requiring a third click. (bug #2259).</li>
  <li>Fix crash in the icon chooser with internal icons. (bug #2488).</li>
  <li>Fix installation on Win32 variants. (bug #2463).</li>
  <li>Fix detection of email addresses with underscores in the username. (bug #2453).</li>
  <li>Escape commata in URLs prior to passing the URLs to the web browser or the mail reader, as some helper applications, namely Firefox and Thunderbird, cannot handle URLs with commata. (bug #2454).</li>
</ul>

<h2>Settings Manager Plugins <em>(xfce-mcs-plugins)</em></h2>
<ul>
  <li>Fix ui plugin using deprecated API (bug #2500).</li>
  <li>Cancel button prevents binding of Alt+C in shortcut editor (bug #1574).</li>
  <li>Fix compilation w/out XCursor extension.</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>Put the window icon's right-click menu on the correct screen before showing it (bug #2351).</li>
  <li>Fix solaris compilation (bug #2258).</li>
  <li>Fix d-bus disconnect crash and memleak when reloading desktop or switching between window icons and file icons more than once (bug #2271).</li>
  <li>Don't crash when non-file:// URIs are dropped on the desktop (bug #2384).</li>
  <li>Fix crash on some systems (such as solaris) when the user's real name can't be determined (bug #2229).</li>
  <li>Move saved file icon locations from <tt>~/.cache</tt>to <tt>~/.config</tt>(bug #2402).</li>
  <li>Use d-bus bindings directly for all interaction with d-bus to avoid xfdesktop's UI freezing while waiting for responses. d-bus is now required at compile time for file icons (bug #2344).</li>
  <li>Update trash icon properly when the trash is emptied/filled (bug #2788).</li>
  <li>When using xinerama, don't allow icons to be placed off-screen if the screens are of different sizes, or on the 'seam' between screens (bug #1538).</li>
  <li>Fix compilation when thunarx is not available (bug #2420).</li>
  <li>Fix warnings and crashes when F5 is held down and during other operations (bug #2426, bug #2272, bug #2123, bug #2280).</li>
  <li>Delete action trashes files by default, falls back to a confirmed delete if d-bus isn't working. shift+delete (for both keyboard and mouse) will force delete (bug #2185).</li>
  <li>Show warning about need to save the session when both disabling and enabling xfdesktop (before it only warned the user when disabling) (bug #1902).</li>
  <li>Fix some icon drawing glitches (bug #2017).</li>
  <li>Make use of Thunar's application chooser dialog (bug #1811).</li>
  <li>Make just about all dialogs have a proper 'parent' window, so focus should correctly return to the desktop after closing them </li>
  <li>Fix volume icons not getting mounted correctly on activation (bug #2206).</li>
  <li>Fix normal file icons not activation on double click or open (bug #2452).</li>
  <li>Fix crash on xrandr screen size change (bug #2457).</li>
  <li>Rework DnD code so during most drags we know if the source and dest are compatible for a given action (move, copy, or link). </li>
  <li>Change cursor to hourglass when making some d-bus calls (bug #2491).</li>
  <li>Don't allow linking root items (such as '/') to the desktop or folders on the desktop, as thunar-vfs crashes when you try to do this (bug #2160).</li>
  <li>Connect to ThunarVfsVolume::changed to more easily catch mount point changes of removable volumes (bug #2489).</li>
  <li>Most likely fix 100% CPU issue when ~/Desktop gets deleted while xfdesktop is running (bug #2160).</li>
  <li>Fix multiple DnD not working when the target was another desktop icon (bug #2437).</li>
  <li>Lots of code cleanup and simplification, fix a bunch of warnings.</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>Add new option to enable/disable borderless maximization (bug #2257).</li>
  <li>Rework keyboard shortcuts grabs, saving a lot of grabs and fixing keyboard shortcuts not working on shaded windows (bug #2291).</li>
  <li>Fix compiler warning when build w/out compositor support (bug #2335).</li>
  <li>Fix restore of original size/position of maximized windows restored by session management, do not match windows that aren't placed by the WM, that avoids some misplacements.). </li>
  <li>Add cancel option when cycling (bug #2373).</li>
  <li>Add new window operations menu shortcut (bug #2400).</li>
  <li>Set focus on desktop with showing desktop (bug #2410).</li>
  <li>Improve workspace switch, reduce expose events (bug #2409).</li>
  <li>Improve focus transition (bug #2408).</li>
  <li>Rework error handling in pixbuf loading, fixes a crash.</li>
  <li>Do not raise on WM_TRANSIENT_FOR property change, required for Java 1.6 (bug #2483).</li>
  <li>Add support for XSync protocol.</li>
  <li>Add support to NET_WM_MOVERESIZE.</li>
  <li>New SVG based default theme (using PNG for speend and compatibility although xfwm4 is able to use SVG theme), previous theme renamed as "Sassandra". </li>
  <li>Fix compositor unredirect with Xorg 7.1 (bug #64115 in Ubuntu Launchpad).</li>
  <li>Fix compositor availability check (bug #2418, bug #2428).</li>
  <li>Fix visual/depth/colormap with and without render (bug #1617).</li>
  <li>Rework focus management to fix some issues (bug #2472).</li>
  <li>Allow use of Alt+C in shortcuts.</li>
  <li>Lot of optimizations and code cleanup.</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>New way to specify internal plugin name with just the basename (launcher -&gt; liblauncher.so) combined with X-XFCE-Module-Path entry to specifiy the location. The old way is still supported, so this change is 100% backward compatible. </li>
  <li>Add checks for empty selection.</li>
  <li>Use new-style atom to check for compositing manager. Only check default screen.</li>
  <li>Use only small size for LED clock in vertical mode.</li>
  <li>Properly finish drags (bug #2417).</li>
  <li>Be a little more careful when saving that we still have a valid configuration. (bug #2405).</li>
  <li>Call plugin contructor after default realize signal handler.</li>
  <li>Use G_MODULE_BIND_LOCAL for internal plugins. (bug #2314).</li>
  <li>Fix problem with right-click menu on windowlist (bug #2305).</li>
  <li>Convert to unix line endings (bug #2253).</li>
</ul>

<h2>Print Frontend <em>(xfprint)</em></h2>
<ul>
  <li>Prevent xfprint4 from removing the printed file when the filters aren't applied.</li>
  <li>Fix incompatibility with CUPS 1.2 (bug #2107).</li>
  <li>Add shortcuts in printer queue dialog.</li>
  <li>Use themable 'printer' icon.</li>
  <li>Fix compilation warnings.</li>
  <li>Remove useless returns generating errors with Sun Studio compiler (bug #2282).</li>
</ul>

<h2>Menu Editor <em>(xfce4-menueditor)</em></h2>
<ul>
  <li>Use the icon chooser if libexo is available (bug #2220).</li>
  <li>Prevent endless loop if DnD of an element into itself (bug #2287).</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
  <li>Regenerate the Tips'n'Tricks database.</li>
  <li>Remove references to xftaskbar4 and xfce4-iconbox and rename xffm to Thunar in Tips database (bug #1332).</li>
  <li>Be sure to start Thunar prior to xfdesktop on first login to avoid the trash error from xfdesktop if the session bus is not configured properly (bug #2447).</li>
  <li>Fix argv array allocation (bug #2315).</li>
  <li>Handle failed applications faster on session startup and reduce the overhead caused by handing them over to init.</li>
  <li>Merge the sudo and the HAL shutdown helpers into a single shutdown helper, which tries to use HAL first, and falls back to sudo. </li>
</ul>

<h2>Terminal Emulator <em>(Terminal)</em></h2>
<ul>
  <li>Don't install the symlink from Terminal to terminal on Win32 platforms (bug #2433).</li>
  <li>Fix incorrect english in usage (bug #2381).</li>
  <li>Add "Paste Selection" action to the "Edit" menu (bug #2242).</li>
  <li>Update the user manual.</li>
  <li>Ignore SIGPIPE (bug #2349).</li>
  <li>Accept drops from the Thunar path bar (bug #2284).</li>
</ul>

<h2>File Manager <em>(Thunar)</em></h2>
<ul>
  <li>Add a "Trash" menu entry to the "Go" menu (bug #2486).</li>
  <li>Add a drop-down menu to the toolbar-style location bar to enable quick access to the shortcuts even if the classic file manager look'n'feel is being used (bug #2024).</li>
  <li>Add support for HAL on FreeBSD. Make HAL the preferred volume manager on FreeBSD.</li>
  <li>Adjust the preferences dialog to match the look of the other Xfce preferences dialogs (bug #2379).</li>
  <li>Allow to change the icon of .desktop files (bug #2150).</li>
  <li>Allow Thunar extensions to add menu items to the Drag'n'Drop context menu. This is for example used by the thunar-archive-plugin to add an "Extract Here" action, which extracts a dragged archive file at the drop location. </li>
  <li>Display the real mime type as tooltip for the "Kind" label in the properties dialog (bug #2369).</li>
  <li>Keep the modification time when copying files (bug #2244).</li>
  <li>Make sure emblems don't get too large with SVG icon themes (bug #2466).</li>
  <li>Make sure Thunar is restarted prior to xfdesktop, so the trash support in xfdesktop works as expected even if D-Bus autoactivation is not setup properly. </li>
  <li>Place automake options into configure.in.in instead of Makefile.am and add the tar-ustar option to fix building distributions on system where tar defaults to the deprecated V7 format (bug #2304).</li>
  <li>Place cursor on the first selected file after a new file or folder was created (bug #2368).</li>
  <li>Place focus on the main view after changing the current directory (bug #2367).</li>
  <li>Properly clean up the path bar when a folder that is currently displayed  on the path bar is deleted.</li>
  <li>Properly validate the Name of .desktop files (bug #2227).</li>
  <li>Update the icon mime icon lookup to try icon names from Icon Naming Spec first, and fallback to legacy GNOME icon names. </li>
  <li>Use default dbus connection timeout (bug #2243).</li>
  <li>Use exo-open for the default "Open Terminal Here" action (bug #2256).</li>
  <li>Use the thumbnail database to load SVG icons from the icon theme, because loading SVG is quite slow and takes a lot more memory than loading and scaling PNG icons from the thumbnail database. </li>
  <li>Fix usage of deprecated HAL policy functions (bug #2475).</li>
  <li>Fix crash with newer GtkTreeView's if the "row-has-child-toggled" signal is emitted even if the child state of a node did not change (bug #2372).</li>
  <li>Fix several race conditions that were introduced over time and prevented the "new-files" job handling from working properly with Gamin and automatic folder reload (bug #2199).</li>
  <li>Fix invalid calculation of free space on OpenBSD/amd64 (bug #2383).</li>
  <li>Fix crash due to invalid handling of file names with printf(3)-style format arguments (bug #2468).</li>
  <li>Fix crash on systems with small per-thread stacks (bug #2269).</li>
  <li>Fix installation on Win32 platforms (bug #2432).</li>
  <li>Fix build with GLib 2.6.x (bug #2317).</li>
  <li>Fix build with latest dbus-glib (bug #2263).</li>
</ul>

<h2>Archive Manager <em>(xarchiver)</em></h2>
<ul>
  <li>Greatly improved speed and memory usage.</li>
  <li>Added comment support for ARJ and ZIP. The rar one is more difficult since it's compressed in the archive itself.</li>
  <li>Extracting files in encrypted archives with DnD no more fails since the password it's now asked.</li>
  <li>Better behaviour of the GUI while archive operations are in progress.</li>
  <li>Fixed unsuccessful open of rpm archives when the cpio archive was compressed with bzip2.c.</li>
  <li>Changed View Window title as the filename of the ASCII file whose content the user wants to see.</li>
  <li>Added ability to convert archives to self-extracting.</li>
  <li>Fixed bug preventing to add files by drag and drop when no archive has been created.</li>
  <li>Fixed Xarchiver rar problem when only unrar is available.</li>
  <li>Fixed creation of directory with "\ " when extracting an iso whose filename has spaces.</li>
  <li>Added LHA archive and DEB format (without dpkg executable).</li>
  <li>Fixed code to compile under Solaris.</li>
  <li>Changed some strings for a better usability.</li>
  <li>A lot of other small bug fixes; thanks to baze for notifying most of them.</li>
  <li>Fix issue with password protected archives (bug #2434).</li>
  <li>ix new dialog not adding file extension (bug #2321).</li>
  <li>Fix wrong behaviour when trying to create a new archive and with already opened archives (bug #2247).</li>
  <li>Fix crash when opening arj archives (bug #1736).</li>
</ul>

<h2>Internationalization</h2>
<ul>
  <li>Basque, Brazilian Portuguese, Catalan, Chinese, Czech, Dutch, Esperanto, Finnish, French, Finnish, German, Greek, Hugarian, Italian, Korean, Lituanian, Polish, Russian, Swedish, Vietnamese translations. </li>
  <li>New French translation of Exo documentation</li>
  <li>New Dzongkha translations</li>
</ul>
