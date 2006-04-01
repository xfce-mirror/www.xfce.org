
<h1><a name="xfce-mcs-manager"></a>XFce 4 Settings Manager</h1>

<h3>Fran&#231;ois Le Clainche</h3>

<p><tt>&lt;<a href=
"mailto:fleclainche@wanadoo.fr">fleclainche@wanadoo.fr</a>&gt;</tt></p>

<h3>Jasper Huijsmans</h3>

<p><tt>&lt;<a href=
"mailto:huysmans@users.sourceforge.net">huysmans@users.sourceforge.net</a>&gt;</tt></p>This
manual describes <b><tt>xfce-mcs-manager</tt></b> version 4.0<br>
<br>

<p>
Copyright &#169; 2003 Fran&#231;ois Le Clainche</p>

<p>Copyright &#169; 2003 Jasper Huijsmans</p>
<hr>

<p><b>Table of Contents</b></p>

<dl>
<dt><a href="#manager-intro">Introduction</a></dt>

<dt><a href="#manager-dialog">Settings Manager Dialog</a></dt>

<dd>
<dl>
<dt><a href="#id2820533">Opening the dialog</a></dt>

<dt><a href="#id2818826">Using the dialog</a></dt>
</dl>
</dd>

<dt><a href="#manager-backend">Settings Manager
Backend</a></dt>

<dt><a href="#manager-copyright">About XFce 4 Settings
Manager</a></dt>
</dl>

<p>&nbsp;</p>

<h2><a name=
"manager-intro"></a>Introduction</h2>

<p>The XFce 4 settings manager provides access to the settings of
all XFce 4 components. The application consists of two parts. The
settings manager dialog, which is the only part a user should
need to know about, and the settings manager backend that
<em>talks</em> to the XFce 4 programs and informs them of changes
to the preferences.</p>

<p>On a technical note, the settings manager backend uses an the
XSETTINGS protocol as defined on freedesktop.org, adapted to
allow multiple channels, so a module can listen only to changes
it is interested in; The mcs in the name stands for
<em>multichannel settings</em>.</p>

<p>&nbsp;</p>

<h2><a name="manager-dialog"></a>Settings
Manager Dialog</h2>

<h3><a name="id2820533"></a>Opening the dialog</h3>

<p>There are several ways to open the settings manager
dialog.</p>

<p>First of all, you can open it from the XFce 4 panel. There is
a launcher on the panel in the default configuration. If you want
you can also add a special setup button that is part of the
Systemsbuttons item.</p><a name="smgr-setup-button-fig"></a>

<p><b>Figure&nbsp;1.&nbsp;Setup button on XFce 4
panel</b></p><img src="images/smgr_from_setup_button.png" alt=
"Shows setup button on XFce 4 panel, used to open the settings manager dialog. ">

<p>Alternatively, you can right-click (or Shift-click) on one of
the move handles of the panel, and choose the "Settings manager"
item from the popup menu.</p><a name="smgr-panel-menu-fig"></a>

<p><b>Figure&nbsp;2.&nbsp;Mouse menu of XFce 4
panel</b></p><img src="images/smgr_from_panel.png" alt=
"Shows mouse menu of XFce 4 panel, used to open the settings manager dialog. ">

<p>The root window menu provided by the XFce 4 Desktop Manager
(<b><tt>xfdesktop</tt></b>) contains an entry to open the
settings manager dialog. Right-click on the desktop background
and choose <b>All Settings</b> in the <b>Settings</b>
sub-menu.</p><a name="smgr-root-menu-fig"></a>

<p><b>Figure&nbsp;3.&nbsp;Root window mouse menu</b></p><img src=
"images/smgr_from_root_menu.png" alt=
"Shows root window mouse menu, used to open the settings manager dialog. ">

<p>Finally, you can open the settings manager dialog by running
<b><tt>xfce-setting-show</tt></b>.</p>

<h3><a name="id2818826"></a>Using the dialog</h3>

<p>The XFce 4 Settings Manager dialog provides centralized access
to the preferences of all installed XFce 4 components. They don't
necessarily have to be running.</p><a name="smgr-dialog-fig"></a>

<p><b>Figure&nbsp;4.&nbsp;Settings Manager
Dialog</b></p><img src="images/settings_manager.png" alt=
"Shows settings manager dialog. ">

<p>Just click on the button corresponding to the module that you
want to configure. This action will open a new properties dialog.
Usually, all modifications will have an immediate effect on the
behaviour of the selected module (<em>instant apply</em>). Once
you have finished changing the options, you can close the dialog
by clicking on the <b>Close</b> button. Note that there is no
<b>Cancel</b>; if you change your mind about a setting you will
manually have to change it back.</p>

<p>Please refer to the <a href="../manuals/"
>manuals</a> of the different XFce 4 components to learn
more about their configuration options.</p>

<p>&nbsp;</p>

<h2><a name="manager-backend"></a>Settings
Manager Backend</h2>

<p>The <b><tt>xfce-mcs-manager</tt></b> application should be
started before the other XFce 4 components. In fact, the panel
and the windowmanager both will try to run the manager if it is
not already running.</p>

<p>The <b><tt>startxfce4</tt></b> script provided with XFce 4
(part of the <em>xfce-utils</em> package) takes care of running
it at the start of an X session. If you don't use that add it to
your <tt>~/.xinitrc</tt> file. The manager will run in the
background after it has initialized, so there is no need to add
an '&amp;' after the command.</p>

<p>After installing a new package that provides a settings
dialog, you can make the manager reread its configuration by
sending a SIGUSR1 signal:</p>

<table border="0" bgcolor="#E0E0E0" width="100%">
<tr>
<td>
<pre>
$ killall -USR1 xfce-mcs-manager
</pre>
</td>
</tr>
</table>

<p>&nbsp;</p>

<h2><a name="manager-copyright"></a>About
XFce 4 Settings Manager</h2>

<p>This package was written by Olivier Fourdan (<tt>&lt;<a href=
"mailto:fourdan@xfce.org">fourdan@xfce.org</a>&gt;</tt>). To find
more information, please visit the <a href="http://www.xfce.org"
>XFce web site</a>.</p>

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

<p>This program is distributed under the terms of the GNU Lesser
General Public License as published by the Free Software
Foundation; either version 2 of the License, or (at your option)
any later version.</p>

<p>You should have received a copy of the GNU Lesser General
Public License along with this program; if not, write to the Free
Software Foundation, Inc., 59 Temple Place - Suite 330, Boston,
MA 02111-1307, USA.</p>


