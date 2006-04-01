
<h2><a name="xfce4-install" id= "xfce4-install"></a>Installing XFce4</h2>

<h3><a name="id2452637" id="id2452637"></a>Components of XFce
4</h3>

<p>The XFce 4 components are packaged separately. At the time of
this writing the following modules are available.</p>

<h4><a name="id2452647" id="id2452647"></a>Libraries</h4>

<p>Unlike previous versions, XFce 4 provides a development
platform consisting of a set of libraries that provide helper
functions and widgets to make a program fit in nicely with the
XFce 4 environment.</p>

<dl>
<dt>libxfce4util</dt>

<dd>
<p>Library with non-graphical helper functions.</p>
</dd>

<dt>libxfcegui4</dt>

<dd>
<p>Widget library and X Window System interaction.</p>
</dd>

<dt>libxfce4mcs</dt>

<dd>
<p>Settings management library used by most XFce 4
modules.</p>
</dd>
</dl>

<h4><a name="id2452707" id="id2452707"></a>Desktop</h4>

<p>These modules provide the basic functionality of the desktop
environment.</p>

<dl>
<dt>xfce-mcs-manager</dt>

<dd>
<p>Settings manager. Provides a control center for settings
manager plugins that are installed by other modules.</p>
</dd>

<dt>xfce-mcs-plugins</dt>

<dd>
<p>Settings manager plugins. These plugins provide settings
dialogs for general items that are not part of a package,
e.g. GTK settings, mouse settings and keyboard settings.</p>
</dd>

<dt>xfwm4</dt>

<dd>
<p>The XFce 4 window mananger. Manages the placement of
application windows on the screen, provides window
decorations and manages workspaces or virtual desktops.</p>
</dd>

<dt>xfce4-panel</dt>

<dd>
<p>The XFce 4 panel. Provides program lauchers, a workspace
switcher, a clock, panel menus and more.</p>
</dd>

<dt>xfdesktop</dt>

<dd>
<p>Desktop background manager. This program sets the
background image and/or color, and provides a root window
menu. The module also provides two settings manager dialogs
that allow you to change the background and change number of
workspaces.</p>
</dd>

<dt>xfce-utils</dt>

<dd>
<p>Essential utilities and scripts. Provides a taskbar, the
XFce 4 about dialog, a run dialog and several important
scripts that are used by other packages including the panel.
Also contains this user guide.</p>
</dd>

<dt>xffm</dt>

<dd>
<p>File manager with integrated samba network browser.</p>
</dd>

<dt>xfprint</dt>

<dd>
<p>Print dialog. Provides a graphical frontend for printing.
Includes <b><tt>xfprint4</tt></b> and
<b><tt>xfprint-manager</tt></b>.</p>
</dd>

<dt>gtk-xfce-engine-2</dt>

<dd>
<p>Theme engine for GTK2. Not required for the desktop, but
it's a nice theme engine so you might just as well give it a
try.</p>
</dd>
</dl>

<h4><a name="id2454648" id="id2454648"></a>Extras</h4>

<p>There are a number of additional packages that are not part of
the main desktop release that provide themes or extra
functionality.</p>

<dl>
<dt>xfwm4-themes</dt>

<dd>
<p>Window decoration themes for xfwm4.</p>
</dd>

<dt>xffm-icons</dt>

<dd>
<p>Icon themes for the xffm file manager.</p>
</dd>

<dt>xfce4-themes</dt>

<dd>
<p>Icon themes for the XFce 4 panel.</p>
</dd>

<dt>xfce4-iconbox</dt>

<dd>
<p>An iconbox that can be used as an alternative for the
taskbar provided in the xfce-utils package. See <a href=
"xfce4-use#xfce4-getting-started" title=
"Getting started">the section called &ldquo;Getting
started&rdquo;</a> to find out how to modify the startup
script.</p>
</dd>

<dt>xfce4-mixer</dt>

<dd>
<p>Volume control for the panel. Includes simple mixer
dialog.</p>
</dd>

<dt>xfce4-systray</dt>

<dd>
<p>Notification area or system tray for the panel. Note that
there can be only one system tray running at the time, so you
have to disable the system tray on the taskbar to use this
panel plugin.</p>
</dd>

<dt>xfce4-toys</dt>

<dd>
<p>Less serious utilities and additions for the panel.
Currently contains a tips/fortunes dialog and an xeyes
implementation for the panel.</p>
</dd>

<dt>xfce4-trigger-laucher</dt>

<dd>
<p>Provides a toggle button for the panel, showing on or off
state. Check the README file provided in the package for more
information.</p>
</dd>
</dl>

<p>&nbsp;</p>

<h3><a name="id2454790" id="id2454790"></a>Binary packages</h3>

<p>The XFce 4 project officially only releases source code for
the desktop environment. However, binary packages may have been
contributed by other people for your OS or distribution.</p>

<p>Martin Loschwitz is the debian developer who maintains the
XFce 4 packages for Debian unstable. Up-to-date versions should
be available soon after the release.</p>

<p>Look at the XFce site for <a href=
"http://www.xfce.org/download" target="_top">download
locations</a> and additional information about available binary
packages.</p>

<p>If you could not find binary packages for your OS, they may be
available from your OS vendor or distributor, or you can install
XFce 4 from source.</p>

<p>&nbsp;</p>

<h3><a name="id2454838" id="id2454838"></a>Building from
source</h3>

<p>Look at the XFce site for <a href=
"http://www.xfce.org/download" target="_top">download
locations</a> for the source tarballs.</p>

<p>Building the packages should be a simple matter of unpacking
the tarballs and, from the top source directory, typing:</p>

<table border="0" bgcolor="#E0E0E0" width="100%">
<tr>
<td>
<pre>
./configure &amp;&amp; make &amp;&amp; make install
</pre>
</td>
</tr>
</table>

<p>Some package will have extra configure options available. You
can find them by typing <b>./configure <tt>--help</tt></b>.</p>

<p>XFce 4 depends on pkg-config, GTK+ &gt;= 2.0.6, libxml2 and,
for xffm, on libdbh, which is available from <a href=
"http://sf.net/projects/libdbh" target="_top">SourceForge</a>. If
you installed these from a binary package, make sure you have the
corresponding <tt>-dev</tt> packages installed as well.</p>

<p>Optionally you can install librsvg &gt;= 2.2, for SVG icon
support, and libstartup-notification, to have a busy cursor when
loading applications that support this standard.</p>

<p>If you install into a different prefix from pkg-config, you
have to set the PKG_CONFIG_PATH variable to include the path to
the *.pc files installed by the XFce 4 libraries, which is
${prefix}/lib/pkgconfig. For example:</p>

<table border="0" bgcolor="#E0E0E0" width="100%">
<tr>
<td>
<pre>
export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig
</pre>
</td>
</tr>
</table>

<p>All source tarballs also contain a so called spec file that
allows you to build your own rpm's:</p>

<table border="0" bgcolor="#E0E0E0" width="100%">
<tr>
<td>
<pre>
rpmbuild -ta <tt>module-x.y.z.tar.gz</tt>
</pre>
</td>
</tr>
</table>

<p>&nbsp;</p>

<h3><a name="id2454938" id="id2454938"></a>Using CVS</h3>

<p>The latest development sources for XFce 4 are available from
CVS.</p>

<p>Look <a href="http://sourceforge.net/cvs/?group_id=19869"
target="_top">here</a> for information on how to obtain the
latest development updates from CVS. You can also use the WebCVS
link to browse the CVS tree.</p>

<p>&nbsp;</p>

<h3><a name="id2454967" id="id2454967"></a>Additional
software</h3>The <a href="http://xfce-goodies.berlios.de" target=
"_top">XFce Goodies</a> project collects third-party
contributions for XFce 4. There are some excellent panel plugins
available that greatly enhance the functionality of XFce 4.

