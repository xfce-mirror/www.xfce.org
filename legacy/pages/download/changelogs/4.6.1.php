<?php $head['title'] = 'Xfce 4.6.1 Changelog'; ?>

<h1>Xfce 4.6.1 Changelog</h1>

<h2>Utility Library <em>(libxfce4util)</em></h2>
<ul>
  <li>Updated translations: Japanese, Spanish, Galician, Slovenian, Polish, Romanian.</li>
</ul>

<h2>Widget Library <em>(libxfcegui4)</em></h2>
<ul>
  <li>Updated translations: Polish, Japanese, Galician, Portuguese, Norwegian, Spanish.</li>
</ul>

<h2>Extension Library <em>(exo)</em></h2>
<ul>
  <li>Quote arguments passed to exo-open (bug #5132).</li>
  <li>Add gettext() call around two strings which are already as translatable with N_() (bug #5203).</li>
  <li>Fix broken build due to incomplete integration of the Danish and Galician manual translations.</li>
</ul>

<h2>Menu Library <em>(libxfce4menu)</em></h2>
<ul>
  <li>Remove gtk+-2.0 from the dependency field of pkg-config file.  Add glib-2.0 and gthread-2.0 instead.</li>
  <li>Update translations: Spanish, Italian, Japanese, Galician</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>Reduce repaint timeout in the compositor (bug #5080)</li>
  <li>Fix applications getting focused when focus on map is unset even without focus stealing prevention enabled (bug #5044)</li>
  <li>Reduce minimum timeout for focus delay in focus follow mouse (100ms was way too much)</li>
  <li>Fix raise delay settings in xfwm4 dialog being totally ignored</li>
  <li>Avoid unecessary warnings about timestamps at startup</li>
  <li>Fix a long standing bug in xfwm4 4.6 were activating a transient would not regrab the mouse on parent window.</li>
  <li>Do not go over adjacent windows with fill (bug #5152)</li>
  <li>Do not actually change window layer when status is above, below or fullscreen (bug #5030)</li>
  <li>Check fullscreen status against each monitor and not just the overall screen size in the compositor. </li>
  <li>Fix remaining active grab if shortcut is not used (bug #5207) </li>
  <li>Plug various memory leaks</li>
  <li>Updated translations: Polish, Swedish, Brazilian Portuguese, English (GB), Spanish, Czech, Turkish.</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>Fix desktop menu failing to load on FreeBSD (bug #3370).</li>
  <li>Ensure root window properties get deleted when xfdesktop quits (bug #5154).</li>
  <li>Reload the backdrop and icon view when 'xfdesktop --reload' is run (bug #5156).</li>
  <li>Make default button in 'delete multiple' dialog consistent with default in 'delete single' dialog (bug #5140).</li>
  <li>Reload the desktop when the first image is added to an image list (bug #5001).</li>
  <li>Auto-select new images as they are added to the settings dialog's image list (bug #5014).</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>Migrate launcher category icons from 4.4 panels (bug #5067).</li>
  <li>Fix compilation with -Wl,--as-needed (bug #5103).</li>
  <li>Don't crash when the quit action button is pressed (bug #5118).</li>
  <li>Properly set the systray orientation property (bug #5149).</li>
  <li>Fix xfce-hvbox not working with gtk 2.16 (bug #5166).</li>
  <li>Don't crash the launcher plugin when the launcher entry list is empty.</li>
  <li>Add icon-name fallback to the show desktop plugin (bug #5117).</li>
  <li>Disconnect the icon theme changed signal from a launcher when it is destroyed to avoid crash when the icon theme changes.</li>
  <li>Fix drawing dots mode of the seperator plugin in a vertical panel (bug #5162).</li>
  <li>Fix a possible crash when setting the session restart style on an uninitialized client session.</li>
  <li>A whole bunch of translation updated (Polish, Spanish, Portuguese, Japanese, Galician, Norwegian).</li>
</ul>

<h2>Session Manager <em>(xfce4-session)</em></h2>
<ul>
  <li>Fix crash in settings dialog when a .desktop file with a missing Application key is opened (bug #5020).</li>
  <li>Ensure networked session handling over TCP is disabled by default (bug #5126).</li>
</ul>

<h2>Settings Manager <em>(xfce4-settings)</em></h2>
<ul>
  <li>Use the folder name for selecting the icon- and style-theme in the appearance dialog (bug #4997).</li>
  <li>Make sure inputproto 1.4.2 is available before enabling device hotplugging in the code (bug #5084).</li>
  <li>Remove unsigned clamp macro that broke applying the display settings and select the correct refresh rate (bug #4966).</li>
  <li>Make sure that the same .desktop file does not appear in the settings-manager more then once if it occurs in different locations in XDG_DATA_DIRS (bug #5159)</li>
</ul>

<h2>Configuration Manager <em>(xfconf)</em></h2>
<ul>
  <li>Be a bit safer when writing out channel xml files: flush data to disk using fdatasync()/fsync() before renaming over the old file.</li>
  <li>Updated translations: pl, es, it, gl, pl, pt, uk</li>
</ul>

<h2>File Manager <em>(thunar)</em></h2>
<ul>
  <li>Put quotes around filenames in thunar-wallpaper-plugin (bug #5056)</li>
  <li>Apply umask properly when creating files/directories.  Patch by Giovanni Bechis (bug #3532).</li>
</ul>

<h2>Mixer <em>(xfce4-mixer)</em></h2>
<ul>
  <li>Make &lt;Control&gt;q and &lt;Control&gt;s trigger the corresponding actions.</li>
  <li>Minor cosmetic fixes (row spacing of 6px in tables).</li>
  <li>Add missing AudioVideo category which is obligatory if you use the Audio category (bug #4933).</li>
  <li>Display mute/record state properly on startup (bug #5002). </li>
  <li>Fix segfault when destroying the plugin</li>
  <li>Move capture track check into xfce_mixer_track_update_record().</li>
  <li>Don't increment the reference count on GObjects when passing them to GValue using g_value_set_object().</li>
  <li>Fix crash with backends where the GstMixer implementation has no "device-name" property (bug #5201).</li>
  <li>Include libxfcegui4.h to avoid implicit declaration of xfce_err().</li>
  <li>Translation updates: Spanish, Polish, Galician, Portuguese, Italian</li>
</ul>

<h2>Utilities <em>(xfce-utils)</em></h2>
<ul>
  <li>Reset icon theme name if the migrated icon theme name (possibly 'Rodent') doesn't exist anymore.</li>
  <li>Remove a bash-ishm ('source') from xinitrc.</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>
  <li>Translation updates: Polish, Spanish, Portuguese</li>
</ul>
