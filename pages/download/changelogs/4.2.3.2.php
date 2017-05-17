<?php $head['title'] = 'Xfce 4.2.3.2 Changelog'; ?>

<h1>Xfce 4.2.3.2 Changelog</h1>

<h2>General</h2>
<ul>
  <li>New languages (in ISO 639 language code order): Afrikaans (af), Armenian (hy), Slovenian (sl).</li>
  <li>New documentation: Hebrew (he).</li>
  <li>Updated languages (in ISO 639 language code order): Belorussian (be), Catalan (ca), German (de), Greek (el), Esperanto (eo), Basque (eu), Finnish (fi), Hebrew (he), Hungarian (hu), Italian (it), Japanese (ja), Korean (ko), Lithuanian (lt), Dutch (nl), Polish (pl), Brazilian Portuguese (pt_BR), Romanian (ro), Swedish (sv), Traditional Chinese (zh_TW).</li>
</ul>

<h2>Libraries<em> (lib*)</em></h2>
<ul>
  <li>Add gui-enum-types to make pyxfce enums work nicer.</li>
  <li>Fix leak in xfce icon theme (opendir handle not closed sometimes, using up all available file descriptors for the process).</li>
  <li>Make apps startup on correct workspace.</li>
  <li>Properly run command with arguments in terminal.</li>
  <li>Make dialog windows appears on the correct screen.</li>
  <li>Memory leak fix.</li>
  <li>Ellipsize text in taskbar buttons with gtk+ 2.6 and later (required for gtk+ 2.8, fixes bug #1099, bug #1124, bug #1131, bug #1210).</li>
  <li>Fix file descriptor leak in xfceicontheme (bug #1082).</li>
</ul>

<h2>Window Manager <em>(xfwm4)</em></h2>
<ul>
  <li>Fix frame corners not being properly updated in some case.</li>
  <li>Fix startup notification properties not being applied.</li>
  <li>Fix theme list not being updated (bug #1024).</li>
  <li>Don't unset the maximize flag unless the actual window size has changed (fix bug #1129).</li>
  <li>Don't follow NET_CURRENT_DESKTOP event if specified value is out of range. This fixes issues with KDE systray apps (bug #1140).</li>
  <li>Be smarter when showing/hiding sidewalk windows, that greatly improves panel autohide feature.</li>
  <li>Check for version 0.2 instead of 1.0 for xcomposite extension as suggested by bcowan@gentoo.org (bug #1177).</li>
  <li>Backport compositor fix from SVN trunk.</li>
  <li>Check if the requested workspace is within the current limits before switching.</li>
  <li>Make the WM more permissive with above/below states for transients, fixes issues with a few KDE apps (bug #1207).</li>
</ul>

<h2>Desktop Manager <em>(xfdesktop)</em></h2>
<ul>
  <li>Menueditor: allow right clicking on separators to delete them (fix bug #989).</li>
  <li>Backdrop: if the currently-active backdrop is removed from the backdrop  list, reload a new backdrop after saving the new list (bug #929).</li>
  <li>Backdrop: fix problem where systemwide mcs_settings/desktop.xml isn't used (bug #1108).</li>
</ul>

<h2>Panel <em>(xfce4-panel)</em></h2>
<ul>
  <li>Remove button insensitivity after click, since it doesn't play well with newer gtk+.</li>
</ul>

<h2>File Manager <em>(xffm)</em></h2>
<ul>
  <li>Fix the ownership problem with smbfs mounts.</li>
  <li>Fix a bug with the remember command remembering full path and not  file extension.</li>
  <li>Fix visual confirmation of permissions changes on files (bug #1061).</li>
  <li>Fix compilation error when configured with --disable-smb (bug #1053).</li>
  <li>Fix for the debian smb mount problem (wasn't really debian but all linux versions).</li>
</ul>

<h2>Printing Helper <em>(xfprint)</em></h2>
<ul>
  <li>Get the cups server from the cups config (bug #918).</li>
  <li>Add support for CUPS instances (bug #1096).</li>
</ul>

<h2>Utilities <em>(xfce-utils)</em></h2>
<ul>
  <li>Don't crash if the MCS plugin is unable to store the settings, a warning telling whats wrong will be emitted by libxfce4util (bug #1033).</li>
</ul>

<h2>Application Finder <em>(xfce4-appfinder)</em></h2>
<ul>
  <li>Corrected a misspelling (bug #1164).</li>
</ul>
