<h1>A Visual Tour of Xfce 4.4.0</h1>
<p>
As of today, the long awaited version 4.4.0 of the Xfce Desktop Environment is finally
available. I will try to highlight some of the new features which have been added since
the last stable release.
</p>


<h2>Desktop Icons<a name="desktop-icons"></a></h2>

<p>
One of the most often requested features during the 4.0 and 4.2 was support for icons
on the desktop. Now, with Xfce 4.4.0, this feature was finally added to the desktop
manager <b>Xfdesktop</b>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-desktop-icons.png" alt="Desktop Icons" /></p>

<p>
The desktop manager utilizes <b>Thunar</b>'s libraries to handle application launchers
and regular files/folders on the desktop. The desktop manager is also able to display
icons for minimized windows on the desktop, which is quite a popular feature from the CDE
world. Of course, you can disable the desktop icons altogether if you prefer a clean
desktop.
</p>

<p align="center"><img src="/images/about/tour/xfce44-desktop-settings.png" alt="Desktop Settings" /></p>

<p>
<b>Xfdesktop</b> also continues to provide access to the applications menu, as it did in
the previous Xfce releases.
</p>


<h2>File Manager<a name="file-manager"></a></h2>

<p>
The desktop icon support goes hand in hand with the new file manager <a href="http://thunar.xfce.org/">Thunar</a>
which replaces the previous file manager <b>Xffm</b>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-thunar.png" alt="Thunar File Manager" /></p>

<p>

<b>Thunar</b> was written from scratch to provide an easy to use, but still very lightweight
file manager for Xfce. Its user interface was designed to look similar to the file chooser
which was introduced with GTK+ 2.4, and other file managers such as <b>Nautilus</b> and <b>pcmanfm</b>
already picked up that idea as well.
</p>

<p>
<b>Thunar</b> supports all the file management functionality which users will expect, and also
several advanced features. For example, a so-called <i>Bulk Renamer</i> is included which allows
users to rename multiple files at once using a certain criterion.
</p>

<p align="center"><img src="/images/about/tour/xfce44-thunar-bulk-rename.png" alt="Thunar Bulk Rename" /></p>


<h2>Removable Drives and Media<a name="removable-drives-and-media"></a></h2>

<p>
Xfce 4.4.0 provides easy access to data on removable drives and media. Just insert the media into the
drive or plug the new drive in to the computer and an icon representing the removable volume will
appear on the desktop and in <b>Thunar</b>'s side pane.
</p>

<p align="center"><img src="/images/about/tour/xfce44-removable-volumes.png" alt="Removable Volumes" /></p>

<p>
Click on the icon to automatically mount the volume. Right-click the icon to unmount the drive or eject
the media from the drive. Note however that this feature requires <a
href="http://freedesktop.org/wiki/Software_2fhal">HAL</a> and is therefore only available for Linux 2.6.x
and FreeBSD 6.x and above at the time of this writing (there is limited removable media support for FreeBSD
4.x and 5.x which does not require HAL).
</p>


<h2>Text Editor<a name="text-editor"></a></h2>

<p>
The new text editor <b>MousePad</b> is included with this release. <b>MousePad</b> provides all the basic
editor functionality, nothing more, nothing less.
</p>

<p align="center"><img src="/images/about/tour/xfce44-mousepad.png" alt="MousePad" /></p>

<p>

You can think of <b>MousePad</b> as the equivalent to <b>NotePad</b> on Windows. It starts up very fast,
usually in less than one second, even on older systems.
</p>


<h2>Window Manager<a name="window-manager"></a></h2>

<p>

<b>Xfwm4</b> continues to be the window manager of the hearts.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-argb32.png" alt="Xfwm4 ARGB32" /></p>

<p>
This release features an enhanced compositor, supporting transparent ARGB windows, shadows,
window frame transparency and much more.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-switcher.png" alt="Xfwm4 Switcher" /></p>

<p>
<b>Xfwm4</b> also includes a brand new application switcher, as shown in the screenshot above,
which displays all windows from the current workspace with icons and window titles.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-themes.png" alt="Xfwm4 Themes" /></p>

<p>
Further on support for multiple image formats for window decoration themes was added, including
<tt>PNG</tt>, <tt>GIF</tt> and <tt>SVG</tt> images.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-tweaks.png" alt="Xfwm4 Tweaks" /></p>

<p>
Advanced controls for the window manager were also added, allowing thorough tweaking of window
behavior.
</p>


<h2>Panel<a name="panel"></a></h2>

<p>

The <b>Xfce4-panel</b> was completely rewritten for the Xfce 4.4 release. Multiple panels are
supported <i>out of the box</i> now and can easily be configured using the new <b>Panel
Manager</b> shown in the screenshot below.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-manager.png" alt="Panel Manager" /></p>

<p>

One of the major problems in previous Xfce releases was that every plugin had to be run
in the same process as the panel, and hence every plugin was able to crash the whole
panel. To address this issue, support for external plugins was added to the panel.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-additem.png" alt="Panel Add Item Dialog" /></p>

<p>
Developers of panel plugins can now decide whether the plugin should run as external
process or as part of the panel process, depending on the stability of the plugin.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-iconbox.png" alt="Panel Icon Box Plugin" /></p>

<p>

Since there is now support for multiple panels, the separate <b>Xftaskbar4</b> and
<b>Xfce4-iconbox</b> utilities are no longer required. Instead, both the taskbar and
the iconbox are available as panel plugins now.
</p>

<p>
Most of the additional panel plugins, available via the <a href="http://goodies.xfce.org/">Xfce
Goodies Project</a>, have been updated for the new panel, and several new plugins were added.
For example, the brand new <b>xfce4-xfapplet-plugin</b> allows users to add GNOME panel applets
to the Xfce panel.
</p>


<h2>Time Management<a name="time-management"></a></h2>

<p>
The new time management application <b>Orage</b> replaces the <b>Xfcalendar</b>, which was introduced with
Xfce 4.2.0. <b>Orage</b> provides several features to efficiently manage your time.
</p>

<p align="center"><img src="/images/about/tour/xfce44-orage.png" alt="Orage" /></p>

<p>
While <b>Orage</b> is very lightweight and easy to use, it supports all the important features found in
larger calendar applications like <b>Outlook</b> or <b>Evolution</b>. While <b>Xfcalendar</b> used the
custom <tt>dbh</tt> format in the past to store your settings, <b>Orage</b> is based on <tt>ical</tt>

and therefore compatible with other calendar applications.
</p>


<h2>Terminal Emulator<a name="terminal-emulator"></a></h2>

<p>
While <b>Terminal</b> was already available during the 4.2 days, it was not mature enough at
that time to be part of the core. With this major release, it was moved into the core.
</p>

<p align="center"><img src="/images/about/tour/xfce44-terminal.png" alt="Terminal" /></p>

<p>
Besides the basic features which you expect from a terminal emulator, it includes some nice
additional features, like multiple tabs per window, customizable toolbars and the ability
to configure nearly every aspect of the application via <i>hidden options</i>. As can be
seen in the screenshot above, this release also supports real transparency using <b>Xfwm4</b>'s
integrated composition manager.
</p>


<h2>Printing<a name="printing"></a></h2>

<p>
<b>Xfprint</b>, the Xfce printing management application, saw several small improvements with
this release. First, the <tt>a2ps</tt> converter is not mandatory anymore, but it is still
recommended, support for <tt>CUPS</tt> 1.2 was added and it is now able to display the printer
state with the <tt>CUPS</tt>-backend.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfprint.png" alt="Xfce Printing" /></p>

<p>
<b>Xfprint</b> also integrates with <b>MousePad</b> to provide generic printing support for
different kinds of text documents using the <tt>a2ps</tt> converter.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfprint-dialog.png" alt="Xfce Print Dialog" /></p>

<p>
As you can see the print dialog still looks relatively similar to that of Xfce 4.2, but the internal
workings of the printing support were improved, especially the <tt>CUPS</tt> support. Besides that,
the printing management functionality was moved to a library, so other applications can use the
API to access the printer configuration.
</p>


<h2>Autostart<a name="autostart"></a></h2>

<p>

Xfce 4.4.0 implements the new <a href="http://freedesktop.org/wiki/Standards_2fautostart_2dspec">Autostart
Specification</a> - actually Xfce was the first desktop to implement said feature, but the others were faster
to release. ;-)
</p>

<p align="center"><img src="/images/about/tour/xfce44-autostart.png" alt="Xfce Autostart Editor" /></p>

<p>
The specification consists of two parts, the <i>Autostart of Applications During Startup</i>, which is
implemented in <b>xfce4-session</b> and the <i>Autostart Of Applications After Mount</i> which is
implemented in <a href="http://foo-projects.org/~benny/projects/thunar-volman/index.html">thunar-volman</a>.
This release also includes the <b>xfce4-autostart-editor</b>, shown in the screenshot above, which allows
users to easily add, remove or disable autostarted applications.
</p>


<h2>Settings<a name="settings"></a></h2>

<p>
This release introduces new options to customize the desktop to your needs. Some examples of new settings
dialogs were already shown in the sections above.
</p>

<p align="center"><img src="/images/about/tour/xfce44-preferences-applications.png" alt="Preferred Applications" /></p>

<p>

The preferred applications framework, which was previously only available in <b>Terminal</b>, was imported
into Xfce, so users no longer need to edit shell profiles to specify which browser and terminal emulator
should be used by Xfce applications. The goal was to make it as easy as possible to change an application
for a certain category (GNOME users may have already noticed that GNOME adopted this approach, because
it is such simple).
</p>

<p align="center"><img src="/images/about/tour/xfce44-preferences-keyboard.png" alt="Keyboard Shortcuts" /></p>

<p>
And then there was the problem with the keyboard shortcuts in Xfce 4.2... Xfce 4.2 limited the number
of freely available keyboard shortcuts, while people wanted to assign any number of keyboard shortcuts.
With Xfce 4.4 this limitation is history and the application shortcuts were separated from the window
manager shortcuts.
</p>


<h2>Feedback<a name="feedback"></a></h2>

<p>
Please post comments on this article in my <a href="http://xfce-diary.blogspot.com/">blog</a> and use
the <a href="/community/lists">xfce</a> mailinglist if you have questions about Xfce 4.4.0 or
trouble with the installation.
</p>


<h2>Links<a name="links"></a></h2>

<ul>
<li><a href="http://www.xfce.org/">Xfce website</a></li>
<li><a href="http://thunar.xfce.org/">Thunar website</a></li>
</ul>
