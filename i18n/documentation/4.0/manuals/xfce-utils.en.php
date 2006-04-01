<h1><a name="xfce-utils"></a>XFce 4 Utilities and Scripts</h1>

<h3>Jasper Huijsmans</h3>

<p><tt>&lt;<a href=
"mailto:huysmans@users.sourceforge.net">huysmans@users.sourceforge.net</a>&gt;</tt></p>

<h3>Benedikt Meurer</h3>

<p><tt>&lt;<a href=
"mailto:benedikt.meurer@unix-ag.uni-siegen.de">benedikt.meurer@unix-ag.uni-siegen.de</a>&gt;</tt></p>
This manual describes the <b><tt>xfce-utils</tt></b> package, version
4.0.<br>
<br>

<p>Copyright &#169; 2003 Jasper Huijsmans</p>

<p>Copyright &#169; 2003 Benedikt Meurer</p>
<hr>

<p><b>Table of Contents</b></p>

<dl>
<dt><a href="#utils-intro">Introduction</a></dt>

<dt><a href="#utils-taskbar">Taskbar</a></dt>

<dt><a href="#utils-run">Run Dialog</a></dt>

<dt><a href="#utils-about">About Dialog</a></dt>

<dt><a href="#utils-scripts">Scripts</a></dt>

<dt><a href="#utils-copyright">About xfce-utils</a></dt>
</dl>

<p>&nbsp;</p>

<h2><a name=
"utils-intro"></a>Introduction</h2>

<p>The <b><tt>xfce-utils</tt></b> package provides a taskbar, the
about dialog for XFce 4, a run dialog and several useful scripts
that are also used by other XFce 4 components such as the panel
and the desktop menu.</p>

<p>&nbsp;</p>

<h2><a name="utils-taskbar"></a>Taskbar</h2>

<p>The taskbar is either at the top or the bottom of the screen
and shows all running programs. The behaviour of the taskbar can
be changed from the settings manager. Run <b>xfce-setting-show
taskbar</b>, or start the settings manager from the panel. In
addition to the tasklist, the taskbar also features a simple
graphical pager and a notification area (also known as the system
tray). Both can be disabled from the settings dialog.</p>

<p>&nbsp;</p>

<h2><a name="utils-run"></a>Run
Dialog</h2><a name="run-dialog-fig"></a>

<p><b>Figure&nbsp;1.&nbsp;Run dialog</b></p><img src=
"/images/documentation/4.0/run-dialog.png" alt="Shows the run dialog.">

<p>The run dialog allows the user to launch applications.
Applications can be run in a Terminal emulator (xterm by default,
see xfterm4 script below).</p>

<p>In a default XFce 4 environment, the key combination will open
the run dialog.</p>

<p>&nbsp;</p>

<h2><a name="utils-about"></a>About
Dialog</h2><a name="about-dialog-fig"></a>

<p><b>Figure&nbsp;2.&nbsp;About dialog</b></p><img src=
"/images/documentation/4.0/about-dialog.png" alt=
"Shows the About Dialog displaying the credits page. ">

<p>The About Dialog is used to display information about XFce 4,
including a list of components, a credits page for all people who
helped to create XFce 4 and license information.</p>

<p>&nbsp;</p>

<h2><a name="utils-scripts"></a>Scripts</h2>

<dl>
<dt>startxfce4</dt>

<dd>
<p>The <b><tt>startxfce4</tt></b> is a convenient script to
start an XFce 4 session from the console. It will give you a
session with a taskbar and a panel and with the desktop
manager and window manager running.</p>

<p>All programs, or symbolic links to programs, in
<tt>~/Desktop/Autostart/</tt> will be run by
<b><tt>startxfce4</tt></b> on startup.</p>

<p>To customize the behaviour of <b><tt>startxfce4</tt></b>,
copy the file <tt>${sysconfdir}/xfce4/xinitrc</tt> to your
personal <tt>~/.xfce4/</tt> directory and edit that file. If
you install from source, <tt>${sysconfdir}</tt> defaults to
<tt>/usr/local/etc</tt>; for binary packages it is often set
to <tt>/etc</tt>. The file has to be executable:</p>

<table border="0" bgcolor="#E0E0E0" width="100%">
<tr>
<td>
<pre>
chmod u+x ~/.xfce4/xinitrc
</pre>
</td>
</tr>
</table>
</dd>

<dt>xfhelp4</dt>

<dd>
<p>This script is used to open the local XFce 4 documentation
in a browser. By default it will use <b><tt>mozilla</tt></b>,
but you can change that by setting the $BROWSER environmental
variable. For instance in your <tt>~/.bash_profile</tt> put
the following line:</p>

<table border="0" bgcolor="#E0E0E0" width="100%">
<tr>
<td>
<pre>
export BROWSER="galeon -w"
</pre>
</td>
</tr>
</table>

<p>You will need to log out of your shell and log back in to
make this work.</p>

<p>If there is documentation installed in the language of
your current locale, xfhelp4 will open that instead of the
default English documentation.</p>
</dd>

<dt>xflock4</dt>

<dd>
<p>This script is used by the panel to lock the screen using
xscreensaver if available and falling back to xlock.</p>
</dd>

<dt>xfmountdev4</dt>

<dd>
<p><b>xfmountdev4 <tt>/dev/mountpoint</tt></b> will mount the
given mountpoint and open xffm in that location. When you
close the xffm window the filesystem will be unmounted. Note
that you can use <b><tt>xffstab4</tt></b> provided with xffm
for the same purpose.</p>
</dd>

<dt>xfterm4</dt>

<dd>
<p>This is a convenient terminal script. It uses the $TERMCMD
environmental variable as terminal command if available and
falls back to using xterm. Especially useful in the panel
where you can drag file or directories to it that will be
viewed by the appropriate console application (less for text
files, lynx for html).</p>
</dd>
</dl>

<p>&nbsp;</p>

<h2><a name="utils-copyright"></a>About
xfce-utils</h2>

<p><b><tt>xfce-utils</tt></b> was written by Jasper Huijsmans
(<tt>&lt;<a href=
"mailto:huysmans@users.sourceforge.net">huysmans@users.sourceforge.net</a>&gt;</tt>),
Olivier Fourdan (<tt>&lt;<a href=
"mailto:fourdan@xfce.org">fourdan@xfce.org</a>&gt;</tt>) and
Benedikt Meurer (<tt>&lt;<a href=
"mailto:benedikt.meurer@unix-ag.uni-siegen.de">benedikt.meurer@unix-ag.uni-siegen.de</a>&gt;</tt>).
To find more information, please visit the <a href=
"http://www.xfce.org">XFce web site</a>.</p>

<p>To report a bug or make a suggestion regarding this
application or this manual, send an email to the <a href=
"http://www.moongroup.com/mailman/listinfo/xfce4-dev/"
>xfce4-dev</a> mailing list &#8212; this is the preferred
method &#8212; or use the bug tracking system at the <a href=
"http://sourceforge.net/projects/xfce">XFce
SourceForge project site</a>. If you have questions about the use
or installation of this package, please ask on the <a href=
"http://www.moongroup.com/mailman/listinfo/xfce/"
>xfce</a> mailing list.</p>

<p>This program is distributed under the terms of the GNU General
Public License as published by the Free Software Foundation;
either version 2 of the License, or (at your option) any later
version.</p>

<p>You should have received a copy of the GNU General Public
License along with this program; if not, write to the Free
Software Foundation, Inc., 59 Temple Place - Suite 330, Boston,
MA 02111-1307, USA.</p>


