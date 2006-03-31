
<h1><a name="xfdesktop"></a>XFce 4 Desktop Manager</h1>

<h3>Jasper Huijsmans</h3>

<p><tt>&lt;<a href=
"mailto:huysmans@users.sourceforge.net">huysmans@users.sourceforge.net</a>&gt;</tt></p>

<h3>Fran&#231;ois Le Clainche</h3>

<p><tt>&lt;<a href=
"mailto:fleclainche@wanadoo.fr">fleclainche@wanadoo.fr</a>&gt;</tt></p><span xmlns="http://www.w3.org/TR/xhtml1/transitional">This
manual describes <b><tt>xfdesktop</tt></b> version 4.0.<br>
<br></span>

<p><span xmlns=
"http://www.w3.org/TR/xhtml1/transitional">Copyright &#169; 2003
Jasper Huijsmans</span></p>

<p>Copyright &#169; 2003 Fran&#231;ois Le Clainche</p>
<hr>

<p><b>Table of Contents</b></p>

<dl>
<dt><a href="#xfdesktop-intro">Introduction</a></dt>

<dt><a href="#xfdesktop-background">Background</a></dt>

<dt><a href="#xfdesktop-workspace">Workspaces</a></dt>

<dt><a href="#xfdesktop-menu">xfdesktop root menu</a></dt>

<dt><a href="#xfdesktop-copyright">About xfdesktop</a></dt>
</dl>

<h2 style="clear: both"><a name=
"xfdesktop-intro"></a>Introduction</h2>

<p>The <b><tt>xfdesktop</tt></b> application manages the desktop
background. It sets a background image and/or color and it pops
up a menu when you click on it with your right or middle mouse
button. Along with the application, two settings dialogs are
installed for use with the <em>XFce 4 Settings Manager</em>.
These dialogs allow you to change the background image and color
and manage the number of workspaces.</p>

<h2 style="clear: both"><a name=
"xfdesktop-background"></a>Background</h2>

<p>You can start the background properties dialog by clicking on
the "Desktop: backdrop" button in the <a href=
"xfce-mcs-manager.html#manager-dialog" target="_top">settings
manager dialog</a>.</p><a name="xfdesktop-background-fig"></a>

<p><b>Figure&nbsp;1.&nbsp;Background Settings</b></p><img src=
"images/xfdesktop-background.png" alt=
"Shows background settings dialog. ">

<dl>
<dt>Color</dt>

<dd>
<p>Click the "Background color" button, and a new dialog will
appear :</p><a name="select_bg_color-fig"></a>

<p><b>Figure&nbsp;2.&nbsp;Select background
color</b></p><img src="images/select_bg_color.png" alt=
"Shows the Select background color dialog">

<p>This dialog allows you to choose a color for the desktop
background. This color will fill the entire root window, and
will remain visible through a transparent background image.
There are several ways to do that:</p>

<ul type="disc">
<li>you can use the colored ring with a triangle inside:
select the color you want from the outer ring, then select
the darkness or lightness of that color using the inner
triangle. Corresponding values of brightness, deepness, and
amount of red, green and blue light in the color appear
through the entries on the right side of the window.</li>

<li>you can click the eyedropper, then click anywhere on
your screen to select the color.</li>

<li>you can enter an HTML-style hexadecimal color value, or
simply a color name, in the "Color Name" entry</li>
</ul>

<p>Select the "Use color only" option if you want
<b><tt>xfdesktop</tt></b> to ignore the backgroung image and
only use the choosen color.</p>
</dd>

<dt>Image</dt>

<dd>
<p>The "File" entry shows the path to the currently selected
background image. If you want to change it, just drop and
image on the dialog from a file manager, or edit the path, or
click the "Browse" button, and a classic file-browsing dialog
will appear.</p>

<p>Three Style options (Tiled, Scaled, and Centered) can be
used to specify the fitting of the background image on the
screen, depending on its size. You can also select the
"Automatic" item if you want to let <b><tt>xfdesktop</tt></b>
take care of this setting.</p>

<p>You can create a list of background images that will be
randomly used at startup. Click the "New list" button to open
the list editing dialog:</p><a name="xfdesktop-list-fig"></a>

<p><b>Figure&nbsp;3.&nbsp;Backdrop List</b></p><img src=
"images/xfdesktop-list.png" alt=
"Shows backdrop list manager.">

<p>You may want to change the default path and name of your
custom list of backdrops in the "List file" entry.</p>

<p>You can easily add an image file by clicking the "plus"
button. That action will open a file-browsing window. You can
remove a file, if you select it in the list and click the
"minus" button. When your list is complete, click the "Save"
button to save it. If you want to modify its content later,
use the "Edit list" button of the Background settings
manager.</p>

<p>You can recover an older list by dropping its name.list
file on the background settings dialog from a file
manager.</p>

<p>To refresh the background with a new random image from the
list just run the <b><tt>xfdesktop</tt></b> command again,
e.g. from a terminal or the run dialog.</p>
</dd>
</dl>

<h2 style="clear: both"><a name=
"xfdesktop-workspace"></a>Workspaces</h2>

<p>You can start the Workspace Settings manager by clicking on
the "Desktop: workspaces" button in the <a href=
"xfce-mcs-manager.html#manager-dialog" target="_top">settings
manager dialog</a>.</p><a name="xfdesktop-workspace-fig"></a>

<p><b>Figure&nbsp;4.&nbsp;Workspace Settings</b></p><img src=
"images/xfdesktop-workspace.png" alt=
"Shows workspace settings dialog. ">

<dl>
<dt>Workspaces</dt>

<dd>
<p>This option allows you too choose the number of workspaces
you want to use (between 1 and 32).</p>
</dd>

<dt>Worspace names</dt>

<dd>
<p>This field shows the list of avaible workspaces. If you
want to edit the name of one of them, click its number and a
fill the entry of the dialog that will then appear. When it's
done, click the "Apply" button, or just press the Enter key,
to return to the list.</p>
</dd>
</dl>

<h2 style="clear: both"><a name=
"xfdesktop-menu"></a><b><tt>xfdesktop</tt></b> root menu</h2>

<p><b><tt>xfdesktop</tt></b> provides a mouse menu that appears
when you click on the desktop background with your right or
middle mouse button.</p>

<p>A right-click on the desktop background opens a menu that
allows you to start some applications. Its configuration file,
menu.xml, can be found under the path
<tt>$sysconfdir/xfce4/menu.xml</tt>. For binary packages
$sysconfdir is often <tt>/etc</tt> and for source compiles it
defaults to <tt>/usr/local/etc</tt>.</p>

<p>Currently the only way to change the menu is to edit the menu
file manually. Hopefully, future versions of XFce 4 will provide
a graphical menu editor. For now, you should copy the
<tt>menu.xml</tt> file to <tt>~/.xfce4/menu.xml</tt> and edit
that. It is not difficult; just have a good look at the file and
the commented out examples. Being a little bit familiar with
reading xml or html files will make it easier. Icons are
currently not supported in the menu, so the icon field won't have
any effect.</p>

<p>NOTE: The menu.xml file has to be in utf-8 encoding for the
toolkit to be able to display accented or other non-ASCII
characters. Therefore, you need an editor that supports utf-8,
like <b><tt>gedit</tt></b>.</p><a name="root-menu-fig"></a>

<p><b>Figure&nbsp;5.&nbsp;<tt>xfdesktop</tt> right-click mouse
menu</b></p><img src="images/root_menu.png" alt=
"Shows xfdesktop right-click mouse menu. ">

<p>A middle-click on the desktop background shows a list of all
opened windows ordered by workspace. It also allows you to add or
remove a workspace.</p><a name="root-menu2-fig"></a>

<p><b>Figure&nbsp;6.&nbsp;<tt>xfdesktop</tt> middle-click mouse
menu</b></p><img src="images/root_menu2.png" alt=
"Shows xfdesktop middle-click mouse menu. ">

<h2 style="clear: both"><a name="xfdesktop-copyright"></a>About
xfdesktop</h2>

<p><b><tt>xfdesktop</tt></b> was written by Jasper Huijsmans
(<tt>&lt;<a href=
"mailto:huysmans@users.sourceforge.net">huysmans@users.sourceforge.net</a>&gt;</tt>),
Olivier Fourdan (<tt>&lt;<a href=
"mailto:fourdan@xfce.org">fourdan@xfce.org</a>&gt;</tt>) and Biju
Chacko (<tt>&lt;<a href=
"mailto:botsie@myrealbox.com">botsie@myrealbox.com</a>&gt;</tt>).
To find more information, please visit the <a href=
"http://www.xfce.org" target="_top">XFce web site</a>.</p>

<p>To report a bug or make a suggestion regarding this
application or this manual, send an email to the <a href=
"http://www.moongroup.com/mailman/listinfo/xfce4-dev/" target=
"_top">xfce4-dev</a> mailing list &#8212; this is the preferred
method &#8212; or use the bug tracking system at the <a href=
"http://sourceforge.net/projects/xfce" target="_top">XFce
SourceForge project site</a>. If you have questions about the use
or installation of this package, please ask on the <a href=
"http://www.moongroup.com/mailman/listinfo/xfce/" target=
"_top">xfce</a> mailing list.</p>

<p>This program is distributed under the terms of the GNU General
Public License as published by the Free Software Foundation;
either version 2 of the License, or (at your option) any later
version.</p>

<p>You should have received a copy of the GNU General Public
License along with this program; if not, write to the Free
Software Foundation, Inc., 59 Temple Place - Suite 330, Boston,
MA 02111-1307, USA.</p>


