
<h1><a name="xfwm4"></a>XFce 4 Window Manager</h1>

<h3>Fran&#231;ois Le Clainche</h3>

<p><tt>&lt;<a href=
"mailto:fleclainche@wanadoo.fr">fleclainche@wanadoo.fr</a>&gt;</tt></p>
This manual describes <b><tt>xfwm4</tt></b> version 4.0<br />
<br />

<p>Copyright &#169; 2003 Fran&#231;ois Le Clainche</p>

<p>Copyright &#169; 2003 Jasper Huijsmans</p>
<hr />

<p><b>Table of Contents</b></p>

<dl>
<dt><a href="#wm-intro">Introduction</a></dt>

<dt><a href="#wm-using">Using xfwm4</a></dt>

<dd>
<dl>
<dt><a href="#wm-windows">Manage windows</a></dt>

<dt><a href="#wm-keybindings">Keyboard shortcuts
summary</a></dt>
</dl>
</dd>

<dt><a href="#wm-settings">Customizing xfwm4</a></dt>

<dd>
<dl>
<dt><a href="#wm-style">Decoration style</a></dt>

<dt><a href="#wm-focus">Keyboard and focus</a></dt>

<dt><a href="#wm_advanced">Advanced settings</a></dt>
</dl>
</dd>

<dt><a href="#workspace-margins">Customizing workspace
margins</a></dt>

<dt><a href="#wm-copyright">About xfwm4</a></dt>
</dl>

<p>&nbsp;</p>

<h2><a name="wm-intro"></a>Introduction</h2>

<p>The XFce 4 Window Manager is part of the <a href=
"http://www.xfce.org">XFce Desktop Environment</a>.
The actual command to run is <b><tt>xfwm4</tt></b>. To run it in
the background use <b><tt>xfwm4</tt> --daemon</b>. The window
manager is responsible for the placement of windows on the
screen, provides the window decorations and allows you for
instance to move, resize or close them.</p>

<p>If you are familiar with previous versions of XFce you will
find many changes. First of all, <b><tt>xfwm4</tt></b> adheres
strongly to the standards defined on <a href=
"http://www.freedesktop.org">freedesktop.org</a>.
Consequently, special features such as making windows borderless,
or providing an icon for the application must now be implemented
in the application; you can no longer use the window manager to
force different behaviour. Most visible change is probably the
themeability. The window decorations (borders, title bar and
window buttons) can be configured by using window manager
themes.</p>

<p><b><tt>xfwm4</tt></b> offers Xinerama support, useful when you
have more than one monitor connected to your computer, but you
have to make sure <b><tt>libxfcegui4</tt></b> is compiled with
<tt>--enable-xinerama</tt>.</p>

<p><b><tt>xfwm4</tt></b> can be run stand-alone, but if you use
it this way, you will need the <a href="xfce-mcs-manager"
target="_top">XFce 4 Settings Manager</a> if you want GUI
settings management. Tasks other than managing windows, like
setting a background image or launching programs, need to be
performed by other programs.</p>

<p>&nbsp;</p>

<h2><a name="wm-using"></a>Using
<b><tt>xfwm4</tt></b></h2>

<h3><a name="wm-windows"></a>Manage windows</h3>

<p>The window manager provides borders, a title bar and window
buttons to application windows. The look is defined by the window
manager theme.</p>

<p>In the default theme <b><tt>xfwm4</tt></b> shows six buttons
and a title on regular application windows. The six buttons
perform these basic functions:</p><a name="titlebar-fig"></a>

<p><b>Figure&nbsp;1.&nbsp;<tt>xfwm4</tt> title bar
buttons</b></p><img src="/images/documentation/4.0/titlebar.png" alt=
"xfwm4 title bar buttons and functions" />

<p>You can open the window menu with a left-click on the menu
button on the title bar, or with a right-click on the window
title area itself.</p>

<p>&nbsp;</p>

<dl>
<dt>Give focus to a window</dt>

<dd>
<p>You need to give the focus to a window if you want it to
receive keyboard and mouse input. Window decorations colors
will change, following the focus. To obtain more details
about focus options, please refer to <a href="#wm-focus"
title="Keyboard and focus">the section called &#8220;Keyboard
and focus&#8221;</a> above.</p>

<p>A keyboard shortcut allows to switch the focus from a
window to others : Hold Alt and then you can press Tab
repeatedly untill you get to the window you want to focus. If
you use it, you will see a small popup with the window title
and also <b><tt>xfwm4</tt></b> will highlight the outline of
the window that will receive the focus.</p>

<p>If you want the panel, and apps that do not appear in the
taskbar, to be included when you switch the focus using the
Alt+Tab shortcut, edit your $HOME/.xfce4/xfwm4rc (or create
an new one) and add this line : cycle_minimum=false</p>

<p>NOTE: the use of a keyboard shortcut in an application
needs the application window to have the focus :)</p>
</dd>

<dt>Maximize / unmaximize windows</dt>

<dd>
<p>If you maximize a window, it will expand on your display
and use all avaible space (as it is defined by <a href=
"xfdesktop#xfdesktop-workspace">workspace
settings</a>). Moreover, you can maximize a window only
vertically ou horizontally.</p>

<p>To maximize a window, perform one of those actions:</p>

<ul type="disc">
<li>click the maximize button of the title bar</li>

<li>open the window menu from the title bar and choose the
&quot;maximize&quot; item</li>

<li>use Alt + F5 keyboard shortcut</li>
</ul>

<p>To maximize a window vertically :</p>

<ul type="disc">
<li>middle-click the maximize button of the title bar</li>

<li>use Alt + F6 keyboard shortcut</li>
</ul>

<p>To maximize a window horizontally :</p>

<ul type="disc">
<li>right-click the maximize button of the title bar</li>

<li>use Alt + F7 keyboard shortcut</li>
</ul>

<p>When a window has been maximized in a way or another, it
can be restored to its previous size doing one of these
actions :</p>

<ul type="disc">
<li>click the unmaximize button of the title bar</li>

<li>use the same keyboard shortcut once again</li>

<li>choose the &quot;Unmaximize&quot; item in the window menu</li>
</ul>

<p>&nbsp;</p>
</dd>

<dt>Resize windows</dt>

<dd>
<p>Although certain special windows can not be resized, you
are able to resize most of them to fit your needs.</p>

<ul type="disc">
<li>you can use the edges and corners of the window frame
to modify its size, dragging them with the mouse</li>

<li>you can use the Alt + right click shortcut while you
hold the mouse pointer anywhere over the window frame; it
will act as if you were dragging the bottom-right corner of
the window</li>

<li>you can use practical keyboard shortcuts : Shift + Alt
+ (up, down, right or left) Arrow</li>
</ul>

<p>&nbsp;</p>
</dd>

<dt>Hide / unhide windows</dt>

<dd>
<p>You can hide a window performing one of these actions
:</p>

<ul type="disc">
<li>click the hide button of the title bar</li>

<li>open the window menu from the title bar and choose the
&quot;Hide&quot; item</li>

<li>use Alt + F8 keyboard shortcut</li>
</ul>

<p>Alternatively, you can hide all windows of current
workspace, excepted the one you are using, in only one action
: click the menu button of the title bar and choose &quot;Hide all
others&quot;.</p>

<p>To &quot;unhide&quot; a window, you will have to select its name or
its icon in one of those XFce 4 components :</p>

<ul type="disc">
<li><b><tt>xftaskbar4</tt></b></li>

<li>the <b><tt>xfce4-iconbox</tt></b></li>

<li>the list of windows, accessible with a middle-click on
the desktop background. This list shows all opened windows,
classified by workspaces. Windows that are currently hidden
are marked between [ ].</li>
</ul>

<p>&nbsp;</p>
</dd>

<dt>Shade / unshade windows</dt>

<dd>
<p>If you &quot;shade&quot; a window, it will be reduced to the size of
its title bar. The same repeated action makes a window to
shade/unshade :</p>

<ul type="disc">
<li>click the shade/unshade button of the title bar</li>

<li>open the window menu from the title bar and choose
&quot;Shade&quot; or &quot;Unshade&quot; item</li>

<li>use the mouse scrollwheel while you hold the pointer
over the title bar</li>

<li>use the Alt + F9 keyboard shortcut</li>
</ul>

<p>&nbsp;</p>
</dd>

<dt>Stick / unstick windows</dt>

<dd>
<p>If you &quot;stick&quot; a window, it will be visible at the same
place on all your workspaces. The same repeated action make a
window to stick/unstick :</p>

<ul type="disc">
<li>click the stick/unstick button of the title bar</li>

<li>open the window menu button from the title bar and
choose &quot;Stick&quot; or &quot;Unstick&quot; item</li>

<li>use the Alt + F10 keyboard shortcut</li>
</ul>

<p>&nbsp;</p>
</dd>

<dt>Move windows</dt>

<dd>
<p>There are several ways to move windows :</p>

<ul type="disc">
<li>left or right click on the title bar of the window and
drag it</li>

<li>use Alt + left click while the pointer is anywhere over
the window frame and move the mouse</li>

<li>use Control + Alt + Shift + (up, down, left or right)
Arrow keyboard shortcut</li>
</ul>

<p>&nbsp;</p>
</dd>

<dt>Move a window to another workspace</dt>

<dd>
<p>You can send a window to another workspace by performing
one of these actions :</p>

<ul type="disc">
<li>stick the window, move to another workspace, then
unstick the window.</li>

<li>use the window menu and choose one of the &quot;Send to&quot;
submenu items.</li>

<li>left or right click on the title bar of the window,
drag it to the screen edge : the pointer will then go to
the next workspace, still holding the window. Corresponding
option needs to be selected in the <a href=
"xfwm4#wm_misc">Window Manager
Preferences dialog</a>.</li>

<li>use keyboard shortcuts :

<ul type="circle">
<li>Alt + Control + End will move a window to the next
workspace</li>

<li>Alt + Control + Home will move a window to the
previous workspace</li>

<li>Alt + Control + Keypad-Number will move the current
window to corresponding workspace</li>
</ul>
</li>

<li>use the <a href="xfce4-panel#switcher-item"
target="_top">graphical pager</a> by clicking on the
representation of the window, and move it to the desired
workspace.</li>
</ul>

<p>&nbsp;</p>
</dd>

<dt>Close a window</dt>

<dd>
<p>To close a window :</p>

<ul type="disc">
<li>click the close button of the title bar</li>

<li>Open the window menu from the title bar and choose the
&quot;Close&quot; item</li>

<li>or use Alt + F4 keyboard shortcut</li>
</ul>
</dd>
</dl>

<h3><a name="wm-keybindings"></a>Keyboard shortcuts summary</h3>

<p>In the default configuration the following keybindings are
defined:</p>

<ul type="disc">
<li>close window : Alt + F4</li>

<li>Maximize window : Alt + F5</li>

<li>Maximize vertically : Alt + F6</li>

<li>Maximize horizontally : Alt + F7</li>

<li>Hide window : Alt + F8</li>

<li>Shade window : Alt + F9</li>

<li>Stick window : Alt + F10</li>

<li>Cycle windows focus : Alt + Tab</li>

<li>Move window : Control + Shift + Alt + Arrow (up, down,
left, or right)</li>

<li>Resize window : Shift + Alt + Arrow (up, down, left, or
right)</li>

<li>Next workspace : Control + Alt + Arrow right arrow</li>

<li>Previous workspace : Control + Alt + Arrow left</li>

<li>Add a workspace : Alt + Inser</li>

<li>Delete a workspace : Alt + Delete</li>

<li>Go to workspace number N (1-9) : Control + F(N)</li>

<li>Move the window to previous|next workspace : Alt + Control
+ Home|End</li>

<li>Move a window to workspace number N (1-9) : Alt + Control +
keypad key number N</li>

<li>Start xfhelp4 : Alt + F1</li>

<li>Start xfrun4 : Alt + F2</li>

<li>Lock the screen : Alt + Control + Delete</li>
</ul>

<p>&nbsp;</p>

<h2><a name="wm-settings"></a>Customizing
<b><tt>xfwm4</tt></b></h2>

<p>To open the Window Manager preferences dialog, click the
button labelled &quot;Window Manager&quot; in the <a href=
"xfce-mcs-manager#manager-dialog">XFce 4
Settings manager</a>. The dialog shows three tabs : Decoration
style, Keyboard and focus, Advanced. All modifications will have
an immediate effect on the behaviour of the selected module.</p>

<h3><a name="wm-style"></a>Decoration style</h3><a name=
"wm_decoration_style-fig"></a>

<p><b>Figure&nbsp;2.&nbsp;Decoration style
preferences</b></p><img src="/images/documentation/4.0/decoration_style.png" alt=
"The decoration style tab" />

<dl>
<dt>Window style</dt>

<dd>
<p>The list on the left side of the dialog shows all avaible
window decorations. The xfwm 4 module offers the choice
between 10 different themes, but there are more than 50
supplementary themes avaible in xfwm4-themes extra package.
You can preview all of them on the official <a href=
"http://www.xfce.org">XFce Website</a></p>
</dd>

<dt>Title font</dt>

<dd>
<p>The &quot;Font select&quot; button shows the family font currently
in use for the window title appearance. Click this button if
you want to change it, and a &quot;Font selection&quot; dialog will
appear. It works like the font selection dialog of the
<a href="xfce-mcs-plugins#id2811474">user
interface settings manager plugin</a>.</p>
</dd>

<dt>Title alignment</dt>

<dd>
<p>Whatever the buttons layout is, you can choose the
alignment of the title inside the title bar, selecting one of
those simple options : align it to the left, center or
right.</p>
</dd>

<dt>Button layout</dt>

<dd>
<p>The button layout configuration uses an intuitive
interface with radio buttons. Just imagine that all selected
items project themselves on the baseline of the frame.
Moreover, all modifications will have an immediate effet on
the title bar buttons position.</p>
</dd>
</dl>

<h3><a name="wm-focus"></a>Keyboard and focus</h3><a name=
"wm_focus-fig"></a>

<p><b>Figure&nbsp;3.&nbsp;Keyboard and focus
preferences</b></p><img src="/images/documentation/4.0/keyboard_and_focus.png" alt=
"The keyboard and focus tab" />

<dl>
<dt>Keyboard Shortcuts</dt>

<dd>
<p>The list on the left side of the dialog shows all avaible
shortcuts themes, using the name of directories that contain
a keythemerc file.</p>

<p>By default, there's only one theme :
$(prefix)/share/xfwm4/themes/default.keys/keythemerc</p>

<p>You can customize keyboard shortcuts by editing this
default keythemerc file (seven shorcuts entries are left
empty for your convenience), or you can create a new theme,
either like this one :
$(prefix)/share/xfwm4/themes/custom.keys/keythemerc, or like
this one (in your $HOME directory) :
$HOME/.themes/xfwm4/custom.keys/keythemerc.</p>

<p>NOTE : $prefix is the install-prefix you used during xfwm
4 setup, usually /usr or /usr/local.</p>

<p>If you do not know the names of your keyboard modifier
keys, you can launch the &quot;xev&quot; application from a terminal
and test them.</p>
</dd>

<dt>Focus model</dt>

<dd>
<p>A focused window receives the keyboard and mouse input.
You have the choice between two focus models :</p>

<ul type="disc">
<li>Click to focus : select this option if you want a
window to receive the focus only when you click anywhere on
its frame.</li>

<li>Focus follow mouse : select this option if you want a
window to receive the focus as soon as the mouse pointer is
over its frame.</li>
</ul>

<p>&nbsp;</p>
</dd>

<dt>New window focus</dt>

<dd>
<p>Selecting this option will automatically give the focus to
newly created windows, without the need to click or move the
mouse pointer.</p>
</dd>

<dt>Raise on focus</dt>

<dd>
<p>If this option is selected, the frame of a newly focused
window will automatically appear over all other frames, after
an amount of time that you can adjust with the &quot;delay&quot;
slider.</p>
</dd>

<dt>Raise on click</dt>

<dd>
<p>Choose this option if you want a window to pass over the
others when you click anywhere on its frame. If this option
is not selected, you will have to click somewhere on its
decorations (title bar, borders or corners) to raise it.</p>
</dd>
</dl>

<h3><a name="wm_advanced"></a>Advanced settings</h3><a name=
"misc_wm_prefs-fig"></a>

<p><b>Figure&nbsp;4.&nbsp;Advanced preferences</b></p><img src=
"/images/documentation/4.0/misc_wm_prefs.png" alt="Advanced tab" />

<dl>
<dt>Windows snapping</dt>

<dd>
<p>You can choose the windows borders to be attracted by the
borders of other windows, or by the screen edges, when they
are moved. The distance from which this effect will be
applied can be specified with the &quot;Distance&quot; slider.</p>
</dd>

<dt>Wrap workspaces</dt>

<dd>
<p>Select the first option if you want to switch to the next
workspace when the mouse pointer reaches the screen edges.
Select the second one if you want the same behaviour while
dragging a window. You can specify the screen edges
resistance using the corresponding slider.</p>
</dd>

<dt>Opaque move and resize</dt>

<dd>
<p>Two options allow you to choose if the content of a window
will appear or not, when you move or resize it (not
displaying the content will save some system resources).</p>
</dd>

<dt>Double click action</dt>

<dd>
<p>Select what must be the behaviour of the window manager
when you double-click on the title bar of a window : shade
window, hide window, maximize window or none.</p>
</dd>
</dl>

<p>&nbsp;</p>

<h2><a name=
"workspace-margins"></a>Customizing workspace
margins</h2><a name="workspace_margins-fig"></a>

<p><b>Figure&nbsp;5.&nbsp;The workspace margins
dialog</b></p><img src="/images/documentation/4.0/workspace_margins.png" alt=
"The workspace margins dialog" />

<p>To open the Workspace Margins dialog, click the button
labelled &quot;Workspace Margins&quot; in the <a href=
"xfce-mcs-manager#manager-dialog">settings
manager dialog</a>.</p>

<p>Margins are areas on the edges of the screen that maximized
windows won't cover. You can adjust the size, in pixels, of all
margins (left, right, top and bottom). Use this feature, for
example, if you do not want maximized windows to overlap panel or
iconbox frames.</p>

<p>&nbsp;</p>

<h2><a name="wm-copyright"></a>About
<b><tt>xfwm4</tt></b></h2>

<p><b><tt>xfwm4</tt></b> was written Olivier Fourdan
(<tt>&lt;<a href=
"mailto:fourdan@xfce.org">fourdan@xfce.org</a>&gt;</tt>). To find
more information, please visit the <a href="http://www.xfce.org"
target="_top">XFce web site</a>.</p>

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


