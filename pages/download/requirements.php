<?php $head['title'] = R_('System requirements') ?>

<h1><?php echo $head['title'] ?></h1>
<p>
  <?php printf (R_('All packages (except xfce4-dev-tools) depend on both gtk+ %s and glib %s.'), '&gt;= 2.10', '&gt;= 2.12') ?>
</p>

<p>
  <?php E_('It is also recommended to build all Xfce components from the same release version.') ?>
</p>

<h2><?php E_('Build order') ?></h2>
<ol>
  <li>xfce4-dev-tools</li>
  <li>garcon</li>
  <li>libxfce4util</li>
  <li>xfconf</li>
  <li>libxfce4ui, libexo</li>
  <li>xfce4-panel</li>
  <li>thunar</li>
  <li>xfce4-settings, xfce4-session, xfdesktop, xfwm4, xfce-utils, xfce4-mixer, xfce4-appfinder</li>
</ol>

<h2><?php E_('Package dependencies') ?></h2>
<table>
  <tr>
    <th><?php E_('Package') ?></th>
    <th><?php E_('Dependency(-ies)') ?></th>
    <th><?php E_('Optional Dependency(-ies)') ?></th>
  </tr>
  <tr>
    <td>xfce4-dev-tools</td>
    <td>autoconf, automake, intltool, pkgconfig </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>garcon</td>
    <td>glib</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>libxfce4util</td>
    <td>glib, gobject </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>xfconf</td>
    <td>libxfce4util, dbus, dbus-glib, gtk+ </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>libxfce4ui</td>
    <td>libxfce4util, gtk+, glib</td>
    <td>libstartup-notification, libgladeui, xfconf</td>
  </tr>
  <tr>
    <td>libexo</td>
    <td>libxfce4util, gtk+, p5-uri </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>xfce4-panel</td>
    <td>libxfce4util, libxfce4ui, libexo, cairo, libwnck</td>
    <td>libstartup-notification</td>
  </tr>
  <tr>
    <td>thunar</td>
    <td>libxfce4util, libxfce4ui, libexo, libpng, gtk+, gdk-pixbuf</td>
    <td>libexif, dbus-glib, gconf, libstartup-notification, libnotify, freetype, libjpeg, gio-unix, gudev, libxfce4panel, xfconf</td>
  </tr>
  <tr>
    <td>xfce4-settings</td>
    <td>libxfce4util, libxfce4ui, libexo, xfconf, dbus-glib, libXi, libXrandr</td>
    <td>libXcursor, libnotify</td>
  </tr>
  <tr>
    <td>xfce4-session</td>
    <td>libxfce4util, libxfce4ui, p5-xml-parser, libwnck</td>
    <td>libgnome&nbsp;&gt;=&nbsp;2.4.0, dbus</td>
  </tr>
  <tr>
    <td>xfwm4</td>
    <td>libxfce4util, libxfce4ui, libxfconf, dbus-glib, libwnck</td>
    <td>libstartup-notification</td>
  </tr>
  <tr>
    <td>xfdesktop</td>
    <td>libxfce4util, libxfce4ui, libxfconf, libwnck, gtk+, glib</td>
    <td>dbus-glib, gio-unix, garcon, libexo, libnotify, thunarx</td>
  </tr>
  <tr>
    <td>xfce4-appfinder</td>
    <td>libxfce4util, garcon, gtk+, glib</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>xfce4-mixer</td>
    <td>libxfce4util, libxfce4ui, libxfce4panel, gst-plugins-base-0.10</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>xfce-utils</td>
    <td>libxfce4util, libxfce4ui, perl w/XML::Parser</td>
    <td>gdm, dbus</td>
  </tr>
  <tr>
    <td>gtk-xfce-engine-2</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

<p><?php E_('The build dependencies tree is also available as a <a href="/images/documentation/xfce-bdeps.svg">SVG file</a>.') ?></p>

<h2><?php E_('Recommended packages') ?></h2>
<ul>
    <li>librsvg (<?php E_('support for scalable icons') ?>)</li>
    <li>hicolor-icon-theme (<?php E_('better support for icon themes') ?>)</li>
    <li>openssh</li>
    <li>xscreensaver (<?php E_('locking the screen') ?>)</li>
</ul>
