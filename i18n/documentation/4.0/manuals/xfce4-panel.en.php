<h1><a name="xfce4-panel"></a>XFce 4 Panel</h1>

<h3>Jasper Huijsmans</h3>

<p><tt>&lt;<a href=
"mailto:huysmans@users.sourceforge.net">huysmans@users.sourceforge.net</a>&gt;</tt></p>
This manual describes <b><tt>xfce4-panel</tt></b> version 4.0. Last
updated: Sep 2003<br>
<br>

<p>Copyright &#169; 2003 Jasper Huijsmans</p>
<hr>

<p><b>Table of Contents</b></p>

<dl>
<dt><a href="#panel-intro">Introduction</a></dt>

<dt><a href="#panel-getting-started">Getting Started</a></dt>

<dt><a href="#panel-items">Panel Items</a></dt>

<dd>
<dl>
<dt><a href="#launcher-item">Launcher</a></dt>

<dt><a href="#clock-item">XFce Clock</a></dt>

<dt><a href="#mailcheck-item">Mail Check</a></dt>

<dt><a href="#switcher-item">Desktop Switcher and Graphical Pager</a></dt>

<dt><a href="#systembuttons-item">System Buttons</a></dt>

<dt><a href="#separator-item">Separator</a></dt>
</dl>
</dd>

<dt><a href="#subpanels">Panel Menus</a></dt>

<dt><a href="#panel-settings">Panel Preferences</a></dt>

<dd>
<dl>
<dt><a href="#panel-apearance">Appearance</a></dt>

<dt><a href="#panel-position">Position</a></dt>
</dl>
</dd>

<dt><a href="#panel-copyright">About xfce4-panel</a></dt>
</dl>

<p>&nbsp;</p>

<h2 style="clear: both"><a name=
"panel-intro"></a>Introduction</h2>

<p>The XFce 4 panel is part of the <a href="http://www.xfce.org"
>XFce 4 Desktop Environment</a> and features program
launchers, panel menus, a clock, a desktop switcher and more. The
actual command to run is <b><tt>xfce4-panel</tt></b>. Many
aspects of the panel can be configured through graphical
dialogs.</p>

<p>If you are familiar with previous versions of XFce you will
find many new features. Most visible are probably the vertical
panel mode, the icon themes, the new graphical pager and the
configurable position of the panel menu popup buttons. The way
preferences are handled has changed completely, so it may take
some time to get used to. This manual should provide you with all
necessary information on how to adjust the panel to your
liking.</p>

<p>&nbsp;</p>

<h2><a name="panel-getting-started"></a>Getting Started</h2>

<p>When you start the panel you will see a bar apearing at the
bottom of your screen, looking like this:</p><a name=
"default-panel-fig"></a>

<p><b>Figure&nbsp;1.&nbsp;Default XFce panel</b></p><img src=
"/images/documentation/4.0/default_panel.png" alt=
"Shows XFce panel default configuration. Contains several launchers, a new mail monitor, a clock and a desktop pager. Also shows an opened panel menu. ">

<p>The figure shows the default panel configuration with one open
panel menu and the mouse hovering over a launcher button, making
it show a tooltip.</p>

<p>There is a move handle on each side of the panel. You can use
it to drag the panel anywhere on the screen. Clicking with the
right mouse button (or Shift + left click) on one of them shows a
popup menu ... Go on, try it ;-)</p><a name=
"handle-popup-fig"></a>

<p><b>Figure&nbsp;2.&nbsp;Move handle popup menu</b></p><img src=
"/images/documentation/4.0/handle-popup.png" alt="Shows move handle popup menu.">

<p>The area between the move handles contains panel items. The
available items are are described in the "<a href="#panel-items"
>Panel Items</a>" section. Most items perform an
action when clicked. Configuration of panel items is done from a
right-click popup menu.</p>

<p>Right-clicking on an item will popup a menu from which you can
open a properties dialog, remove the item or add a new item.
Items can also be added from the right-click menu on one of the
move handles (see above). A submenu shows a list of available
item types that you can choose from. When you add a new item, the
panel will imediately open its properties dialog, so you can
change the item's options and position on the panel.</p><a name=
"item-popup-fig"></a>

<p><b>Figure&nbsp;3.&nbsp;Item popup menu</b></p><img src=
"/images/documentation/4.0/item-popup.png" alt="Shows item popup menu.">

<p>Global panel preferences can be changed from the XFce 4
Settings Manager, which can be started either from a panel
laucher, or by choosing the 'Properties...' entry from the
right-click menu on the move handles. See "<a href=
"#panel-settings">Panel Preferences</a>" for an
explanation of the available options.</p>

<p>&nbsp;</p>

<h2><a name="panel-items"></a>Panel Items</h2>

<p>The XFce 4 panel has the possibility to load external plugins
as well as builtin ones. In this section we will only decribe
panel items that are installed with the panel.</p>

<p>The properties dialog for a panel item can be opened from the
right-click menu on the item. Each type of panel item has its own
configuration dialog. Every dialog offers at least these
options:</p>

<ul type="disc">
<li>Change the position of the item on the panel.</li>

<li>Remove the item.</li>
</ul>

<h3><a name="launcher-item"></a>Launcher</h3>

<p>The most common panel item is the launcher item. It allows you
to start programs from the panel. The properties dialog offers
the following options:</p>

<dl>
<dt>Command</dt>

<dd>You can type the command to run or browse the file system.
There is an option to start in a terminal and one to use
startup notification. This last option means that the window
manager can show an hourglass while the program is loading.
But, the application has to support that and not many program
do at the moment. Programs build with Gtk 2.2, should support
it.</dd>

<dt>Icon</dt>

<dd>The panel provides a number of standard icons that can be
used. These icons will also follow the icon theme you choose
from the <a href="#panel-settings">global
preferences dialog</a>. Of course you can also choose a custom
icon, either by browsing the file system from the button next
to the entry or by dropping an image on the preview area from a
file manager.</dd>

<dt>Tooltip</dt>

<dd>The panel item will show this tooltip if you hold the mouse
over it.</dd>

<dt>Menu</dt>

<dd>A launcher can have a panel menu attached to it. When this
option is selected a small button with an arrow will appear
next to the item. Look <a href="#subpanels">here</a> for more info on panel menus. The position of
the menu button can be changed from the global settings
dialog.</dd>
</dl><a name="launcher-fig"></a>

<p><b>Figure&nbsp;4.&nbsp;Launcher item</b></p><img src=
"/images/documentation/4.0/launcher-properties.png" alt=
"Shows properties dialog for launcher item.">

<h3><a name="clock-item"></a>XFce Clock</h3>

<p>The Xfce Clock has a number of options to change the way it
looks. There are three clock types available: analog, digital and
LED. There is an option to show seconds and for the digital and
LED clock types you can choose whether the clock will be in 24
hour mode, 12 hour mode, or 12 hour mode with AM/PM indication.
The clock shows the current date as a tooltip. Clicking on the
clock will not perform any action.</p><a name="clock-fig"></a>

<p><b>Figure&nbsp;5.&nbsp;Clock item</b></p><img src=
"/images/documentation/4.0/lock-properties.png" alt=
"Shows properties dialog for clock item.">

<h3><a name="mailcheck-item"></a>Mail Check</h3>

<p>The mailcheck item monitors your inbox, or any other mailbox
you want, as long as it is in mbox format. The mailbox icon will
follow your icon theme. You can choose the location of the
mailbox, the command to run when you click on the button and the
interval between checks. The command has the same options as the
launcher item command (see <a href="#launcher-item"
>above</a>).</p><a name="mailcheck-fig"></a>

<p><b>Figure&nbsp;6.&nbsp;Mailcheck item</b></p><img src=
"/images/documentation/4.0/ailcheck-properties.png" alt=
"Shows properties dialog for mailcheck item.">

<h3><a name="switcher-item"></a>Desktop Switcher and Graphical
Pager</h3>

<p>The panel provides two items that deal with virtual desktops.
A CDE-like desktop switcher, that shows buttons with the desktop
name and a graphical pager that shows a miniature view of the
desktops and even allows you to move windows to another workspace
by dragging the mini-window in the pager. The graphical pager
also allows you to change workspaces by using the mouse
scrollwheel, when you hold the mouse over it.</p><a name=
"nooptions-fig"></a>

<p><b>Figure&nbsp;7.&nbsp;Item without options</b></p><img src=
"/images/documentation/4.0/ooptions-properties.png" alt=
"Shows properties dialog for item without options. ">

<h3><a name="systembuttons-item"></a>System Buttons</h3>

<p>A systembuttons item shows one or two buttons wich can perform
special system actions. The buttons follow your panel icon theme.
There are four buttons available:</p>

<dl>
<dt>Lock</dt>

<dd>Runs the <b><tt>xfrun4</tt></b> script that will attempt to
lock the screen using either xscreensaver or if that fails
xlock.</dd>

<dt>Exit</dt>

<dd>This will exit the panel and usually also end your X
session (when you used <b><tt>startxfce4</tt></b> or put the
panel at the end of your X startup file).</dd>

<dt>Info</dt>

<dd>The info button will show the <em>About XFce 4</em>
dialog.</dd>

<dt>Setup</dt>

<dd>Pressing the setup button will open the XFce settings
manager dialog, from which you have acces to the settings for
all XFce components as well as some system settings, such as
mouse behaviour and user interface settings.</dd>
</dl><a name="systembuttons-fig"></a>

<p><b>Figure&nbsp;8.&nbsp;Systembuttons item</b></p><img src=
"/images/documentation/4.0/ystembuttons-properties.png" alt=
"Shows properties dialog for systembuttons item. ">

<h3><a name="separator-item"></a>Separator</h3>

<p>This item simply adds a separator line to the panel. It has no
options to set except its position.</p>

<p>Note that it may be a bit hard to popup the right-click menu,
because you only have a small area to click on.</p>

<p>&nbsp;</p>

<h2 style="clear: both"><a name="subpanels"></a>Panel Menus</h2>

<p>Panel launcher items can have a menu associated with it, which
can be opened by clicking on the small arrow button next to the
item. The actual position of these popup buttons is configurable
from the global preferences dialog. You can also open the menu by
pressing the laucher button and holding it down. After a short
delay the menu will open.</p>

<p>Use the 'Add launcher' item at the top of a panel menu to add
a new item or drag an executable to this item from a file
manager. To remove items from a subpanel use the 'Remove' button
in the item properties dialog.</p>

<p>A special feature of panel menus is that they can be detached
from the panel and live in their own window. To detach a menu
click on the small line at the bottom of the menu (see the
<a href="#default-panel-fig">screenshot</a> of the
default panel).</p>

<p>The properties dialog for a menu item is opened immediately
when clicking the right mouse button (or Shift+left click). The
dialog itself is very similar to the dialog for launcher type
panel items.</p><a name="menuitem-fig"></a>

<p><b>Figure&nbsp;9.&nbsp;Menu Item</b></p><img src=
"/images/documentation/4.0/enuitem-properties.png" alt=
"Shows properties dialog for menu items. ">

<p>&nbsp;</p>

<h2 style="clear: both"><a name="panel-settings"></a>Panel
Preferences</h2>

<p>The properties dialog for the XFce 4 Panel can be opened from
the XFce 4 Settings Manager, which can be started from a panel
launcher or from the right-click menu on the panel handles. The
menu also provides direct access to the panel properties
dialog.</p><a name="panel-settings-fig"></a>

<p><b>Figure&nbsp;10.&nbsp;Panel Settings</b></p><img src=
"/images/documentation/4.0/anel-settings.png" alt=
"Shows properties dialog for global panel preferences. ">

<h3><a name="panel-apearance"></a>Appearance</h3>

<dl>
<dt>Size</dt>

<dd>
<p>There are four panel sizes available: tiny, small, medium
and large. Small is the default.</p>
</dd>

<dt>Orientation</dt>

<dd>
<p>An exciting new feature of the XFce 4 Panel is the ability
to put it in a vertical orientation as well as the standard
horizontal layout.</p>
</dd>

<dt>Popup position</dt>

<dd>
<p>This option change the position of the buttons that open a
panel menu. It can be above, below, to the left or to the
right of the panel item.</p>
</dd>

<dt>Icon theme</dt>

<dd>
<p>Also new in XFce 4 are icon themes for the panel. The
predefined icons for launcher items and the icons of other
types of panel items follow the panel icon theme.</p>
</dd>
</dl>

<h3><a name="panel-position"></a>Position</h3>

<dl>
<dt>Layer</dt>

<dd>
<p>The panel layer determines its behaviour relative to other
windows. The panel can be always below or above other windows
or act the same as other windows. By default the panel will
be on top.</p>
</dd>

<dt>Centering</dt>

<dd>
<p>It is very easy to move the panel around the screen. The
settings dialog provides an easy way to center the panel on
one of the four edges of the screen. Note that the panel will
also 'snap' to the screen corners as well as the center of
the screen edges when you drag it close enough to those
positions.</p>
</dd>

<dt>Behaviour</dt>

<dd>
<p>If you choose autohide, the panel will collapse to a thin
bar. Moving the mouse over it will unhide the panel. This
works best when the panel is on the edge of the screen (this
makes the target much easier to hit).</p>
</dd>
</dl>

<p>&nbsp;</p>

<h2 style="clear: both"><a name="panel-copyright"></a>About
<b><tt>xfce4-panel</tt></b></h2>

<p><b><tt>xfce4-panel</tt></b> was written by Jasper Huijsmans
(<tt>&lt;<a href=
"mailto:huysmans@users.sourceforge.net">huysmans@users.sourceforge.net</a>&gt;</tt>).
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


