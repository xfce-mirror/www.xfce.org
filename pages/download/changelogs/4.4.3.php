<h1>Xfce 4.4.3 Changelog</h1>

<h2>Panel <em>(xfce4-panel)</em>:</h2>
<ul>
  <li>Quite a bit code changed in the dnd code. Mostly to fix a segfault in FreeBSD-amd64, but more problems were discovered and a lot of code was simplified.</li>
  <li>Don't respond the uri drags, we don't use it and it only causes problems like hiding the panel when a file was dragged over the panel (bug #3815).</li>
  <li>Fix crash with xrandr 1.2 (bug #3620)</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em>:</h2>
<ul>
  <li>Make menu panel plugin honor CustomizeDesktopMenu kiosk setting (bug #1026).</li>
  <li>Fix incorrect initial desktop font size when setting custom font size if a custom font was never set before (bug #3957).</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em>:</h2>
<ul>
  <li>Fix automaximize on move</li>
  <li>Remove trailing \0 in UTF-8 strings, that causes libwnck to rightfully complain that NET_WM_NAME contains invalid UTF-8</li>
  <li>Exit on SelectionClear event so that xfwm4 exits even with WM who do not send a ClientMessage event such as Openbox (bug #2374)</li>
  <li>Backport overlay and compositor support from trunk (bug #3849)</li>
  <li>Filter out grab/ungrab events so we don't end up redrawing the frame twice</li>
  <li>Set monitor when positionning menu (bug #4162)</li>
  <li>Reduce flickering during resize (bug #4283)</li>
  <li>Fix NET_WM_STATE claiming maximization vertical and horizontal even if only horizontal of vertical is actually set (Should fix bug #3969)</li>
  <li>Loosen the rule that prevents an application from iconifying itself when  skip_taskbar is set (bug #4434)</li>
  <li>Rework visual depth selection of the frame window (bug #4452)</li>
  <li>Add support for NET_MOVERESIZE_WINDOW</li>
  <li>Take gravity bit into account in configure resize only requests to comply  with standard (bug #3634)</li>
  <li>Add client windows to save set to avoid loosing all windows in case of crash</li>
  <li>Use guint32 instead of Time internally to avoid potential issues in 64bits</li>
  <li>Add a "--replace" command line option to replace ICCCM2 compliant window  managers (bug #3731)</li>
</ul>

<h2>Widget Library <em>(libxfcegui4)</em>:</h2>
<ul>
  <li>Fix format-string vulnerability in dialog code</li>
</ul>

<h2>Terminal emulator <em>(Terminal)</em>:</h2>
<ul>
  <li>Update to latest trunk translations.</li>
</ul>

<h2>File manager <em>(Thunar)</em>:</h2>
<ul>
  <li>Update to latest trunk translations.</li>
</ul>

<h2>Text editor <em>(mousepad)</em>:</h2>
<ul>
  <li>Sort recent items by most recently used.</li>
</ul>

<h2>Utilities <em>(xfce-utils)</em>:</h2>
<ul>
  <li>Fix missing translated chars (bug #3543)</li>
</ul>

<h2>Updated translations:</h2>
<ul>
  <li>Basque</li>
  <li>Brazilian Portuguese</li>
  <li>Catalan</li>
  <li>Chinese Traditional</li>
  <li>Danish</li>
  <li>Estonian</li>
  <li>Finnish</li>
  <li>French</li>
  <li>Galician</li>
  <li>German</li>
  <li>Indonesian</li>
  <li>Japanese</li>
  <li>Korean</li>
  <li>Kurdish</li>
  <li>Latvian</li>
  <li>Norwegian</li>
  <li>Polish</li>
  <li>Sinhala</li>
  <li>Slovak</li>
  <li>Slovene</li>
  <li>Spanish</li>
  <li>Turkish</li>
  <li>Urdu</li>
</ul>

