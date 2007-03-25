<h1>Xfce系统要求</h1>
<p>所有软件包(除了xfce4-dev-tools)依赖gtk+&nbsp;&gt;=&nbsp;2.6以及glib&nbsp;&gt;=&nbsp;2.6.4。依赖关系表的顺序也是推荐的安装顺序。<br />
同样推荐安装的组件均取自相同版本。</p>

<h2>软件包依赖表：</h2>
<table width="100%">
  <tr>
    <th width="20%" align="left"><h3>软件包</h3></th>
    <th width="40%" align="left"><h3>依赖</h3></th>
    <th width="40%" align="left"><h3>可选依赖</h3></th>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce4-dev-tools</td>
    <td>autoconf, automake, gettext, libtool, pkgconfig, intltool</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>libxfce4util</td>
    <td>pkgconfig</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>libxfcegui4</td>
    <td>libxfce4util</td>
    <td>libstartup-notification</td>
  </tr>
  <tr>
    <td>libxfce4mcs</td>
    <td>libx11, libsm, libxfce4util</td>
    <td>libstartup-notification</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>libexo</td>
    <td>libxfce4util</td>
    <td>xfce-mcs-manager, python &gt;= 2.2</td>
  </tr>
  <tr>
    <td>xfce-mcs-manager</td>
    <td>libxfcegui4, libxfce4mcs</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce-mcs-plugins</td>
    <td>libx11, libxfcegui4, xfce-mcs-manager</td>
    <td>libxcursor, libxxf86misc, libxkbfile, libxrandr, libxxf86vm</td>
  </tr>
  <tr>
    <td>xfce4-panel</td>
    <td>libx11, libsm, libxfce4mcs, libxfce4util, libxfcegui4, xfce-mcs-manager</td>
    <td>libstartup-notification</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>thunar</td>
    <td>libexo&nbsp;&gt;=&nbsp;0.3.1.4, libpng&nbsp;&gt;=&nbsp;1.2.0, libxfce4util</td>
    <td>dbus&nbsp;&gt;=&nbsp;0.34, gconf&nbsp;&gt;=&nbsp;2.4.0, libjpeg</td>
  </tr>
  <tr>
    <td>xfce4-session</td>
    <td>libx11, libsm, libxfce4util, libxfce4mcs, libxfcegui4, xfce-mcs-manager </td>
    <td>libgnome&nbsp;&gt;=&nbsp;2.4.0</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfwm4</td>
    <td>libx11, libxpm, libsm, libxfce4mcs, libxfce4util, libxfcegui4, xfce-mcs-manager </td>
    <td>libxrender, libxrandr, libxcomposite, libxfixes, libxdamage</td>
  </tr>
  <tr>
    <td>xfdesktop</td>
    <td>libx11, libsm, libxfce4util, libxfcegui4, libxfce4mcs, xfce-mcs-manager, xfce4-panel</td>
    <td>thunar&nbsp;&gt;=&nbsp;0.2.0, libexo&nbsp;&gt;=&nbsp;0.3.1</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce-utils</td>
    <td>libx11, libxfce4mcs, libxfce4util, libxfcegui4, xfce-mcs-manager</td>
    <td>gdm</td>
  </tr>
  <tr>
    <td>xfprint</td>
    <td>libxfcegui4, libxfce4util, libxfce4mcs, xfce-mcs-manager</td>
    <td>cups, bsdlpr</td>
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
    <td>xarchiver</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfburn</td>
    <td>libxfcegui4, libexo&nbsp;&gt;=&nbsp;0.3.0</td>
    <td>cdrecord, readcd, cdrdao, mkisofs</td>
  </tr>
  <tr>
    <td>xfcalendar</td>
    <td>perl, libxfce4mcs, libxfcegui4, xfce-mcs-manager </td>
    <td>ical, db&nbsp;&gt;=&nbsp;4.0</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce4-appfinder</td>
    <td>libxfcegui4</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>xfce4-mixer</td>
    <td>libxml-2&nbsp;&gt;=&nbsp;2.4.0, libxfce4util, libxfcegui4, libxfce4mcs, xfce-mcs-manager</td>
    <td>ossaudio, alsa, sun, sgi, audio</td>
  </tr>
  <tr bgcolor="#eeeeee">
    <td>xfce4-terminal</td>
    <td>libxfcegui4, libxfce4mcs, vte&nbsp;&gt;=&nbsp;0.11.0, xfce-mcs-manager</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>xfmedia</td>
    <td>libx11, libsm, libxfce4util, libxfcegui4, libxine&nbsp;&gt;=&nbsp;1.0.0</td>
    <td>libexo&nbsp;&gt;=&nbsp;0.2.0, libstartup-notification, dbus&nbsp;&gt;=&nbsp;0.22, taglib </td>
  </tr>
</table>

<h2>推荐软件包：</h2>
<ul>
    <li>librsvg (support for scalable icons)</li>
    <li>hicolor-icon-theme (better support for icon themes)</li>
    <li>openssh</li>
    <li>xscreensaver (locking the screen)</li>
</ul>
