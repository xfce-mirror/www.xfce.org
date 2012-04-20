

<h1>Xfce 4.6 ALPHA (4.5.90) Changelog</h1>

<h2>Development tools <em>(xfce4-dev-tools)</em></h2>
<ul>
  <li>Add intltool-merge.in patch to xdt-autogen.in to fix merging translations
        to .desktop keys that have dashes in them.</li>
</ul>

<h2>Utility Library <em>(libxfce4util)</em></h2>
<ul>
  <li>Do not use GMemChunk for XfceRc due to memory leaks (bug #2427).</li>
  <li>Fix buglet when deleting XfceRc groups.</li>
  <li>Fix invalid g_slice_free1() in XfceRc (bug #2854).</li>
  <li>Add support for function names in debug messages on Solaris (bug #3090).</li>
  <li>New util functions for setting up POSIX signal handling using pipe(), 
        GIOChannel and the glib main loop.</li>
  <li>Strip trailing slashes to avoid directories appearing multiple times in
        resource lookup functions.</li>
</ul>

<h2>Widget Library <em>(libxfcegui4)</em></h2>
<ul>
  <li>Fix XfceAppMenuItem's lazy icon loading so menus don't overlap after
        the icons load (bug #3081).</li>
  <li>Add gladeui and libglade support so Xfce widgets can be added to an
        interface using the Glade Interface Designer, and can be accessed using
        libglade.</li>
  <li>Fix menu crash if NULL icon file name.</li>
  <li>Deprecate XfceClock and XfceSystemTray.</li>
  <li>Deprecate all libnetk objects and functionality (library users should
        migrate to libwnck).</li>
</ul>

<h2>Extension Library <em>(exo)</em></h2>
<ul>
  <li>Include preferred apps dialog in the new settings manager.</li>
  <li>Add support for mounting and unmounting encrypted volumes. (bug #3349)</li>
  <li>Don't strip text between nodes with --strip-content, this will make stripping work on glade files.</li>
</ul>

<h2>Menu Library <em>(libxfce4menu)</em></h2>
<ul>
  <li>Initial release as part of Xfce.</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>Add button prelight in window frames (bug #3219)</li>
  <li>Add resize from top of window</li>
  <li>Rework the event filter to avoid passing all events top gtk+</li>
  <li>Treat dialogs and utility windows as transients for group (bug #3102)</li>
  <li>Add support for shape input with XShape extension 1.1 (bug #3092)</li>
  <li>Make the title button in the xfwm4 settings manager dragable (bug #3000)</li>
  <li>Fix a misinterpretation of ICCCM about when to send a synthetic configureNotify event (bug #2977)</li>
  <li>Add new hidden option to instruct xfwm4 not to bring window back on current workspace when activated (bug #2961)</li>
  <li>Place splash screen windows on the normal layer, so that dialogs that get mapped during startup have a chance to be placed above the splash screen.</li>
  <li>Raise focused window on workspace switch (bug #2960)</li>
  <li>Sort Z-order on workspace change (bug #2960)</li>
  <li>Fix the small lag before icon update at first map and when updating all frames at once.</li>
  <li>Use timeout for frame redraw, check actual WM name changes to work around apps that falsely update their WM name property (bug #2810).</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>Redo how the menu system works so menus can be embedded in other
        menus.  This makes it possible for the right-click context menu
        to be the 'normal' applications menu when icons are disabled,
        but set to the desktop's own context menu when file icons are
        enabled.  In this latter case, the applications menu becomes a
        submenu of the desktop context menu (bug #2531).</li>
  <li>Ditch the custom semi-fd.o-compliant menu system in favor of
        XfceMenu, our new fd.o-compliant menu implementation written by
        Jannis Pohlmann.</li>
  <li>Fix URI parsing in .desktop files when launching an application so
        that the "field codes" (%-codes) are either properly ignored or
        are substituted properly.  This should fix a lot of problems where
        some apps were expecting some command-line arguments but the menu
        was just throwing them all away (bug #2942).</li>
  <li>Add support for 'zoomed' backdrop mode: fill the screen with the
        backdrop edge-to-edge by scaling and/or cropping as necessary.
        This doesn't mess with the aspect ratio and is pretty nifty.  Patch
        is from (bug #3138).</li>
  <li>Stop using our forked libnetk from libxfcegui4, and use the much
        better supported original libwnck.  Patch is from Nick Schermer
        (bug #3487).</li>
  <li>Support the GdkScreen::monitors-changed signal present in gtk+ 2.13
        and above.  This allows xfdesktop to notice if the user plugs or
        unplugs a monitor when using an xrandr1.2-capable X server and video
        driver.</li>
  <li>Support the new tooltips framework present in gtk 2.12 for
        XfdesktopIconView.  This is mostly user-invisible, but does decrease
        code size and memory usage ever so slightly, and removes a possible
        source of bugs.</li>
  <li>Remove all old MCS settings manager code and start using Xfconf,
        Xfce's new configuration system.</li>
  <li>New redesigned settings dialog, with hopefully some better usability.</li>
  <li>Move hidden options for showing special icons on the desktop into
        the settings dialog GUI.</li>
  <li>Add a color saturation adjustment to the backdrop image settings.</li>
  <li>Add "transparent" color style for the backdrop; if you already have
        another application drawing the backdrop, you can disable xfdesktop's
        image drawing and color drawing and "see through" to the window
        beneath it while still having desktop icons and the desktop menu
        available.  Requires ARGB windows (bug #4061).</li>
  <li>Fix font size used to draw desktop icons when the size isn't an
        integer point size (bug #4295).</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>Fix window manager hints reporting width 1 pixel too wide (bug #3402).  (Jasper)</li>
  <li>Make itembar not care about expanded items when panel is not full width.  (Jasper)</li>
  <li>Separator can have different styles: space, expanded space, line (default),
        handle and old-style dotted handle. Initial patch by Landry Breuil. (Jasper)</li>
  <li>Complete rewrite of the clock plugin. (Nick)</li>
  <li>Rewrite of the system tray plugin. This should fix the icon size problems
        (bug #3213, #3176, #962, #3478 and #3417), add option to hide icons in the
        tray, sort icons by application name and support multiple lines based on the
        panel size. The tray manager code is now integrated in the plugin, so it
        can be removed from libxfcegui4. (Nick)</li>
  <li>Fix area that is off-limits to other windows (_NET_WM_STRUT hints) for a
        Xinerama setup with differently sized monitors (bug #3097). (Jasper)</li>
  <li>Completely rewritten launcher (bug #2336, #2365, #1323, #2262 and #1225)</li>
  <li>Various improvements in libxfce4panel (memory leaks, G_GNUC_INTERNAL,
        GSList, visibility support, canonical strings and fixed pedantic warnings).</li>
  <li>Libxfce4panel does no longer depend on libxfcegui4. This might cause
        some problems with plugins. Plugin developers should add libxfcegui4
        to the dependencies of their package (including cflags and libadd in
        the makefiles).</li>
  <li>Some new Tango icons.</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
  <li>Modified settings-dialogs to work with the new settings-manager</li>
  <li>Fix compile-issues with -Wall -Werror in mice theme-engine and settings-dialogs</li>
  <li>Let xfce4-session start xfsettingsd automatically</li>
  <li>Remove dependency on deprecated NETK</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em></h2>
<ul>
  <li>Initial release as part of Xfce.</li>
  <li>Replaces the front-end of the xfce-mcs-manager that came
        with previous versions of xfce.</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em></h2>
<ul>
  <li>Initial release as part of Xfce.</li>
  <li>Replaces the back-end of the xfce-mcs-manager that came
        with previous versions of xfce.</li>
</ul>

<h2>File Manager <em>(thunar)</em></h2>
<ul>
  <li>Fix .desktop file to launch thunar-settings dialog with 
        xfce4-settings-manager</li>
</ul>


<h2>Mixer <em>(xfce4-mixer)</em></h2>
<ul>
  <li>Complete rewrite based on GStreamer 0.10.</li>
  <li>Supports all sound systems supported by GStreamer (ALSA, OSS, PulseAudio and many more).</li>
  <li>Support for multiple sound cards.</li>
  <li>New panel plugin especially designed for easy use with the mouse scroll wheel.</li>
</ul>

<h2>Printing Helper <em>(xfprint)</em></h2>
<ul>
  <li>Convert the settings to use xfconf instead of mcs</li>
  <li>Make the settings-dialogs stand-alone apps instead of mcs-plugins</li>
  <li>Fix segfault when there is no default printer selected in backend (bug #3816)</li>
</ul>

<h2>Utilities <em>(xfce-utils)</em></h2>
<ul>
  <li>Use gnome-screensaver if xscreensaver is not available (bug #3131)</li>
  <li>Fix syntax error in startxfce script (bug #3089).</li>
  <li>Fix insecure use of temporary file in startup script.</li>
  <li>Put /usr/local/share first (bug #2967).</li>
  <li>Fix an issue with the syntax in startxfce4 script (bug #2967).</li>
  <li>Use real GtkComboBoxEntry instead of separate GtkEntry/Button for
        xfrun4 dialog (bug #3820).</li>
  <li>Remove Xft.dpi fallback setting since xfsettingsd handles this now.</li>
  <li>Update xinitrc to run xfsettingsd instead of xfce-mcs-manager (only
        used when the user has disabled the session manager).</li>
  <li>Add MCS to Xfconf settings migration script.</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>
  <li>Rewrite based on libxfce4menu.</li>
</ul>
