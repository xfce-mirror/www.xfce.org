<h1>System requirements for Xfce</h1>

<h3>Building Xfce 4 modules depends on:</h3>
<ul>
    <li>pkgconfig , a system for managing library compile/link flags that works with automake and autoconf.</li>
    <li>GTK+ &gt;= 2.6.4 (also dev packages), the GIMP multi-platform toolkit designed for creating graphical user interfaces.</li>
    <li>libxml2, a XML C library developed for the Gnome project.</li>
</ul>
<p>Make sure you have these packages (and their *-devel packages) installed.</p>

<h3>Recommended dependencies:</h3>
<ul>
    <li>librsvg &gt;= 2.2.x, a SAX-based renderer library for SVG files, that has to be installed if you want to use SVG icons for the panel.</li>
    <li>libstartup-notification &gt;= 0.5, a library that has to be installed if you want to use the startup notification feature.</li>
</ul>

<h1>Package dependencies table:</h1>
<!--
<p>
		Wanneer the 1 van de volgende pakketen maakt, wordt er naar de dependencies gezocht zoals aangegeven in de tabel.
		Wanneer je Xfce van svn compiled is het aanbevolen om alle libs ook vanaf svn te compilen.
</p>
-->
<table width="100%">
  <tr>
    <th width="20%" align="left"><h3>Package</h3></th>
    <th width="40%" align="left"><h3>Dependency(-ies)</h3></th>
    <th width="40%" align="left"><h3>Optional Dependency(-ies)</h3></th>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce4-dev-tools</td>
    <td>autoconf, automake, gettext, libtool, pkgconfig, intltool</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>libxfce4util</td>
    <td>glib2&nbsp;&gt;=&nbsp;2.2.0, pkgconfig </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>libxfcegui4</td>
    <td> libxfce4util, gtk+-2.0&nbsp;&gt;=&nbsp;2.2.0, libxml-2&nbsp;&gt;=&nbsp;2.4.0</td>
    <td>libstartup-notification&nbsp;&gt;=&nbsp;0.5 </td>
  </tr>
  <tr>
    <td>libxfce4mcs</td>
    <td>libx11, libsm, glib2&nbsp;&gt;=&nbsp;2.4.0, libxfce4util</td>
    <td>libstartup-notification&nbsp;&gt;=&nbsp;0.5</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>libexo</td>
    <td>glib2&nbsp;&gt;=&nbsp;2.6.4, gtk+-2.0&nbsp;&gt;=&nbsp;2.6.0, libxfce4util </td>
    <td>xfce-mcs-manager, python,&nbsp;&gt;=&nbsp;2.2, </td>
  </tr>
  <tr>
    <td>xfce-mcs-manager</td>
    <td>libxfcegui4, libxfce4mcs </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce-mcs-plugins</td>
    <td>libx11, gtk+-2.0&nbsp;&gt;=&nbsp;2.6.0, libxfcegui4, xfce-mcs-manager </td>
    <td>libxcursor, libxxf86misc, libxkbfile, libxrandr, libxxf86vm</td>
  </tr>
  <tr>
    <td>xfce4-panel</td>
    <td>libx11, libsm, libxfce4mcs, libxfce4util, libxfcegui4, gtk+-2.0&nbsp;&gt;=&nbsp;2.6.0, xfce-mcs-manager </td>
    <td>libstartup-notification&nbsp;&gt;=&nbsp;0.5</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>thunar</td>
    <td>libexo&nbsp;&gt;=&nbsp;0.3.1.4, glib2&nbsp;&gt;=&nbsp;2.6.4, gtk+-2.0&nbsp;&gt;=&nbsp;2.6.0, libpng&nbsp;&gt;=&nbsp;1.2.0, libxfce4util </td>
    <td>dbus&nbsp;&gt;=&nbsp;0.34, gconf&nbsp;&gt;=&nbsp;2.4.0, libstartup-notification&nbsp;&gt;=&nbsp;0.4, libjpeg</td>
  </tr>
  <tr>
    <td>xfce4-session</td>
    <td>libx11, libsm, libxfce4util, libxfce4mcs, libxfcegui4, xfce-mcs-manager </td>
    <td>libgnome&nbsp;&gt;=&nbsp;2.4.0 </td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfwm4</td>
    <td>libx11, libxpm, libsm, gtk+-2.0&nbsp;&gt;=&nbsp;2.2.0, libxfce4mcs, libxfce4util, libxfcegui4, xfce-mcs-manager </td>
    <td>libstartup-notification&nbsp;&gt;=&nbsp;0.5, libxrender, libxrandr, libxcomposite, libxfixes, libxdamage</td>
  </tr>
  <tr>
    <td>xfdesktop</td>
    <td>libx11, libsm, glib2&nbsp;&gt;=&nbsp;2.2.0, gtk+-2.0&nbsp;&gt;=&nbsp;2.2.0, libxfce4util, libxfcegui4, libxfce4mcs, xfce-mcs-manager, xfce4-panel </td>
    <td>thunar&nbsp;&gt;=&nbsp;0.2.0, libexo&nbsp;&gt;=&nbsp;0.3.1 </td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce-utils</td>
    <td>libx11, gtk+-2.0&nbsp;&gt;=&nbsp;2.6.0, libxfce4mcs, libxfce4util, libxfcegui4, xfce-mcs-manager </td>
    <td>gdm</td>
  </tr>
  <tr>
    <td>xfprint</td>
    <td>glib2&nbsp;&gt;=&nbsp;2.6.0, gtk+-2.0&nbsp;&gt;=&nbsp;2.6.0, libxfcegui4, libxfce4util, libxfce4mcs, xfce-mcs-manager</td>
    <td>cups, bsdlpr </td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>gtk-xfce-engine-2</td>
    <td>glib2&nbsp;&gt;=&nbsp;2.0.0, gtk+-2.0&nbsp;&gt;=&nbsp;2.0.0</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>mousepad</td>
    <td>gtk+-2.0&nbsp;&gt;=&nbsp;2.2.0, libxfcegui4, libxfce4util </td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>terminal</td>
    <td>libexo&nbsp;&gt;=&nbsp;0.3.0, gtk+-2.0&nbsp;&gt;=&nbsp;2.6.0, vte&nbsp;&gt;=&nbsp;0.11.11 </td>
    <td>libstartup-notification&nbsp;&gt;=&nbsp;0.5, dbus&nbsp;&gt;=&nbsp;0.22 </td>
  </tr>
  <tr>
    <td>xarchiver</td>
    <td>glib2&nbsp;&gt;=&nbsp;2.2.0, gtk+-2.0&nbsp;&gt;=&nbsp;2.2.0</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfburn</td>
    <td>gtk+-2.0&nbsp;&gt;=&nbsp;2.6.0, libxfcegui4, libexo&nbsp;&gt;=&nbsp;0.3.0 </td>
    <td>cdrecord, readcd, cdrdao, mkisofs</td>
  </tr>
  <tr>
    <td>xfcalendar</td>
    <td>perl, libxfce4mcs, libxfcegui4, xfce-mcs-manager </td>
    <td>ical, db&nbsp;&gt;=&nbsp;4.0 </td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce4-appfinder</td>
    <td>libxfcegui4</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>xfce4-mixer</td>
    <td>libxml-2&nbsp;&gt;=&nbsp;2.4.0, libxfce4util, libxfcegui4, gtk+-2.0&nbsp;&gt;=&nbsp;2.2.0, libxfce4mcs, xfce-mcs-manager </td>
    <td>ossaudio, alsa, sun, sgi, audio </td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce4-terminal</td>
    <td>libxfcegui4, libxfce4mcs, vte&nbsp;&gt;=&nbsp;0.11.0, xfce-mcs-manager </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>xfmedia</td>
    <td>libx11, libsm, glib2&nbsp;&gt;=&nbsp;2.2.0, gtk+-2.0&nbsp;&gt;=&nbsp;2.4.0, libxfce4util, libxfcegui4, libxine&nbsp;&gt;=&nbsp;1.0.0 </td>
    <td>libexo&nbsp;&gt;=&nbsp;0.2.0, libstartup-notification&nbsp;&gt;=&nbsp;0.5, dbus&nbsp;&gt;=&nbsp;0.22, taglib </td>
  </tr>
</table>
