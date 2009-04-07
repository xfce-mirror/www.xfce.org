<h1>Systemkrav til Xfce</h1>

<p>
Alle pakker (med undtagelse af xfce4-dev-tools) afhænger af både gtk+&nbsp;&gt;=&nbsp;2.10
og glib&nbsp;&gt;=&nbsp;2.12.
</p>

<p>
Det anbefales også at bygge alle Xfce-komponenter ud fra den samme udgivelsesversion.
</p>

<h2>Byggerækkefølge</h2>

<ol>
  <li>xfce4-dev-tools</li>
  <li>libxfce4util</li>
  <li>xfconf</li>
  <li>libxfcegui4, libxfce4menu, libexo</li>
  <li>xfce4-panel</li>
  <li>thunar</li>
  <li>xfce4-settings, xfce4-session, xfdesktop, xfwm4, xfce-utils, xfce4-mixer, xfprint, xfce4-appfinder</li>
</ol>

<h2>Pakkeafhængighedstabel:</h2>
<table width="100%" cellpadding="3">
  <tr>
    <th width="20%" align="left"><h3>Pakke</h3></th>
    <th width="40%" align="left"><h3>Afhængighed(er)</h3></th>
    <th width="40%" align="left"><h3>Valgfri afhængighed(er)</h3></th>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce4-dev-tools</td>
    <td>autoconf, automake, intltool, pkgconfig </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>libxfce4util</td>
    <td>glib, gobject </td>
    <td>&nbsp;</td>
  </tr>
   <tr bgcolor="#eeeeee">
    <td>xfconf</td>
    <td>libxfce4util, dbus, dbus-glib, gtk+ </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>libxfcegui4</td>
    <td>libxfce4util, gtk+, libglade</td>
    <td>libstartup-notification, libgladeui, xfconf</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>libxfce4menu</td>
    <td>libxfce4util, gtk+</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>libexo</td>
    <td>libxfce4util, gtk+, p5-uri </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce4-panel</td>
    <td>libxfce4util, libxfcegui4, libexo, cairo, libwnck</td>
    <td>libstartup-notification</td>
  </tr>
  <tr>
    <td>thunar</td>
    <td>libxfce4util, libexo, libpng, gtk+</td>
    <td>libexif, dbus, gconf, libstartup-notification, freetype, libjpeg, gamin/fam, hal-storage, libxfce4panel, xfconf</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce4-settings</td>
    <td>libxfce4util, libxfcegui4, libexo, xfconf, libglade, dbus-glib, libXi, libXrandr</td>
    <td>libXcursor, libnotify</td>
  </tr>
  <tr>
    <td>xfce4-session</td>
    <td>libxfce4util, libxfcegui4, p5-xml-parser, libwnck</td>
    <td>libgnome&nbsp;&gt;=&nbsp;2.4.0, dbus</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfwm4</td>
    <td>libxfce4util, libxfcegui4, libxfconf, dbus-glib, libwnck</td>
    <td>libstartup-notification</td>
  </tr>
  <tr>
    <td>xfdesktop</td>
    <td>libxfce4util, libxfcegui4, libxfconf, libwnck, libglade</td>
    <td>dbus-glib, thunar-vfs, libexo, thunarx, libxfce4menu, libxfce4panel</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce4-appfinder</td>
    <td>libxfce4util, libxfce4menu, , thunar-vfs, gtk+ </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>xfce4-mixer</td>
    <td>libxfce4util, libxfcegui4, libxfce4panel, gst-plugins-base-0.10</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce-utils</td>
    <td>libxfce4util, libxfcegui4, perl w/XML::Parser</td>
    <td>gdm, dbus</td>
  </tr>
  <tr>
    <td>xfprint</td>
    <td>libxfce4util, libxfcegui4, xfconf</td>
    <td>cups, lpr</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>gtk-xfce-engine-2</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>mousepad</td>
    <td>libxfcegui4, libxfce4util</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>terminal</td>
    <td>libexo&nbsp;&gt;=&nbsp;0.3.0, vte&nbsp;&gt;=&nbsp;0.11.11</td>
    <td>libstartup-notification, dbus&nbsp;&gt;=&nbsp;0.22 </td>
  </tr>
  <tr>
    <td>xfcalendar</td>
    <td>perl, libxfce4mcs, libxfcegui4</td>
    <td>ical, db&nbsp;&gt;=&nbsp;4.0</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfmedia</td>
    <td>libx11, libsm, libxfce4util, libxfcegui4, libxine&nbsp;&gt;=&nbsp;1.0.0</td>
    <td>libexo&nbsp;&gt;=&nbsp;0.2.0, libstartup-notification, dbus&nbsp;&gt;=&nbsp;0.22, taglib </td>
  </tr>
</table>

<p>Byggeafhængighedstræet er også tilgængeligt som en <a href="/images/documentation/xfce-bdeps.svg">SVG-fil</a>.</p>

<h2>Anbefalede pakker:</h2>
<ul>
    <li>librsvg (understøttelse af skalérbare ikoner)</li>
    <li>hicolor-icon-theme (bedre understøttelse af ikontemaer)</li>
    <li>openssh</li>
    <li>xscreensaver (låser skærmen)</li>
</ul>
