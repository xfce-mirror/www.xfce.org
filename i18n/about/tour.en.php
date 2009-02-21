<h1>A Visual Tour of Xfce 4.6.0</h1>

<p align="justify">
The long awaited 4.6.0 version of the Xfce Desktop Environment is finally
available. We will try to highlight some of the new features which have been added since
the last stable release.
</p>

<h2>Improved desktop experience with Xfdesktop<a name="xfdesktop"></a></h2>

<p align="justify">Since desktop icons have been introduced in Xfce 4.4, people have expressed
the need to allow the selection of multiple icons (rubber banding). With <b>Xfce 4.6</b>, the
<b>Xfdesktop</b> manager finally implements this feature: you can select multiple icons, move
them, remove them...</p>

<p align="center"><img src="/images/about/tour/4.6/xfdesktop-rubberbanding.png" alt="Multiple icons selection" /></p>

<p align="justify"><b>Xfce 4.6</b> also features a brand new desktop menu which allows you to manipulate files
as with the <b>Thunar</b> filemanager contextual menu, but also to open applications, exit your session or
access to the help.</p>

<p align="center"><img src="/images/about/tour/4.6/xfdesktop-menu.png" alt="New desktop menu" /></p>

<h2>Panel <a name="panel"></a></h2>

<p align="justify">A lot of long standing bugs have been fixed in <b>Xfce4 Panel</b>,
particularly for multiple screen setups, but this new release also brings an improved set
of panel plugins.
</p>

<p align="center"><img src="/images/about/tour/4.6/xfce4-panel-clock.png" alt="New binary clock" /></p>

<p align="justify">
The <b>clock plugin</b> has been rewritten to consume less ressources and to fix some display bugs,
but there is also a new clock mode for the geek in you: binary clock ! The new
<b>notification area plugin</b> allows you to hide the notification icons
you do not want to be displayed to keep your notification area clean and readable.
</p>

<h2>New sound mixer <a name="sound-mixer"></a></h2>

<p align="justify"><b>Xfce4 Mixer</b> has been rewritten from scratch to use
<a href="http://www.gstreamer.net/">Gstreamer</a> which support multiple sound systems, the
user interface is more polished, you can manage several sound cards and a panel plugin allows
you to set the system sound quickly using the mouse scroll wheel.
</p>

<p align="center"><img src="/images/about/tour/4.6/xfce4-mixer.png" alt="New sound mixer" /></p>

<h2>Improved session manager <a name="session-manager"></a></h2>

<p align="justify">
<b>Xfce 4.6</b> comes with an enhanced session manager: your session should be started faster
and the setting dialog has been reworked to ease the management of session aware applications.
Moreover, the session manager will now restart session applications which crashed automatically so
that you are not left without desktop, panel, window manager, etc, if a crash occurs.
</p>

<p align="center"><img src="/images/about/tour/4.6/xfce4-session-settings.png" alt="Session settings dialog" /></p>

<p align="justify">
It also brings a long wanted feature: out of the box <b>suspend</b> and <b>hibernate</b> support. The logout
dialog now has two additionnal buttons to suspend your computer or hibernate it.
</p>

<p align="center"><img src="/images/about/tour/4.6/xfce4-session-logout.png" alt="Session settings dialog" /></p>

<h2>Window manager <a name="window-manager"></a></h2>

<p align="justify">
As usual, <b>Xfwm4</b> has matured a lot during this release cycle:
many bugs have been fixed, multidisplay support and performances have been
improved and some nice features have also been implemented.</p>

<p align="justify"><b>Xfwm4</b> is now able to detect windows that do not respond and offers
you to terminate them.</p>

<p align="center"><img src="/images/about/tour/4.6/xfwm4-net-ping.png" alt="Dialog to terminate busy applications" /></p>

<p align="justify">
There is also a new actions menu with additionnal items to quickly move and resize windows,
to put them above or below other windows, or to fullscreen them.
</p>

<p align="center"><img src="/images/about/tour/4.6/xfwm4-new-menu.png" alt="New actions menu" /></p>

<p align="justify">
A new "fill" operation has been implemented, it expands a given window to the available
space without overlapping other adjacent windows.
</p>

<p align="center"><img src="/images/about/tour/4.6/xfwm4-fill-operation.png" alt="Fill operation" /></p>

<p align="justify">The compositor has been optimized to reduce window flickering during
resize operations.</p>

<p align="center"><img src="/images/about/tour/4.6/xfwm4-resize.png" alt="Flicker free resizing" /></p>

<p align="justify">
Moreover, some tweakable options have been added: for example you can now disable the blinking
of windows when they receive an urgency hint.
</p>

<p align="center"><img src="/images/about/tour/4.6/xfwm4-new-tweaks.png" alt="New tweakable options" /></p>

<h2>File manager <a name="file-manager"></a></h2>

<p align="justify">
There have been a bunch of bug fixes, performance improvements in <b>Thunar</b>. It can also
use the mouse forward and backward buttons - if available - to navigate and a plugin allowing
you to set an image as wallpaper has been added.
</p>

<p align="center"><img src="/images/about/tour/4.6/thunar-wallpaper-plugin.png" alt="Set an image in a Thunar folder as wallpaper" /></p>

<p align="justify"><b>Thunar</b> now follows the
<a href="http://freedesktop.org/wiki/Software/xdg-user-dirs">XDG user directories</a>
specification which allows you to have themed and localised user folders to store your
music, documents, videos, templates...
</p>

<p align="center"><img src="/images/about/tour/4.6/thunar-xdg-user-dirs.png" alt="Thunar menu for user directories" /></p>

<p align="justify"><b>Thunar</b> will also display a translucent icon for drives or volumes
that are not mounted, so that you can distinguish them from the mounted ones.</p>

<p align="center"><img src="/images/about/tour/4.6/thunar-mounting.png" alt="Translucent icons for unmounted drives and volumes" /></p>

<h2>New configuration dialogs <a name="configuration-dialogs"></a></h2>

<p align="justify">
Xfce 4.6 features a new settings interface, <b>Xfce Settings Manager</b>,
which allows you to set your desktop in an easier way : the dialogs accessible by single
clicking on the icons have been designed to be more compact, to be more intuitive so that
you can customize your desktop quickly and in a more intuitive way.
</p>

<p align="center"><img src="/images/about/tour/4.6/xfce4-settings-manager.png" alt="Xfce4 Settings Manager" /></p>

<h3>Accessibility settings <a name="accessibility"></a></h3>
<p align="center"><img src="/images/about/tour/4.6/xfce4-accessibility-settings.png" alt="Accessibility settings dialog" /></p>

<p align="justify">
The <b>Accessibility settings</b> dialog allows you to set the accessibility related
mouse and keyboard options, such as sticky or bounce keys, or mouse emulation.
</p>

<h3>Appearance settings <a name="appearance"></a></h3>
<p align="center"><img src="/images/about/tour/4.6/xfce4-appearance-settings.png" alt="Appearance settings dialog" /></p>

<p align="justify">The <b>Appearance settings</b> dialog allows you to set the widgets
style, the icon theme, font, toolbar and menu options.</p>

<h3>Display settings <a name="display"></a></h3>
<p align="center"><img src="/images/about/tour/4.6/xfce4-display-settings.png" alt="Display settings dialog" /></p>

<p align="justify">The <b>Display settings</b> dialog allows you to set the resolution, the
refresh rate and the rotation for each screen that is plugged in.</p>


<h3>Keyboard settings <a name="keyboard"></a></h3>
<p align="center"><img src="/images/about/tour/4.6/xfce4-keyboard-settings-layout.png" alt="Keyboard settings dialog, layout tab" /></p>

<p align="justify">The <b>Keyboard settings</b> dialog allows you to set the keyboard
preferences such as key repeating, keyboard shortcuts and your keyboard layout.
</p>

<p align="center"><img src="/images/about/tour/4.6/xfce4-keyboard-settings-shortcuts.png" alt="Keyboard settings dialog, shortcuts tab" /></p>

<p align="justify">You can now set shortcuts in a simplified way and shortcut conflicts
are detected automatically.</p>

<h3>Mouse settings <a name="mouse"></a></h3>
<p align="center"><img src="/images/about/tour/4.6/xfce4-mouse-settings.png" alt="Mouse settings dialog" /></p>

<p align="justify">The <b>Mouse settings</b> dialog allows you to configure the different
mouses plugged to your computer : button order, acceleration, double clic speed, mouse theme...</p>

<h3>Desktop settings <a name="desktop-settings"></a></h3>

<p align="center"><img src="/images/about/tour/4.6/xfdesktop-settings.png" alt="Desktop settings dialog" /></p>

<p align="justify">The <b>Desktop settings</b> dialog is now much more compact, it allows
you to set per screen settings: wallpaper, brightness, desktop menu, displayed icons...</p>

<h2>New Application finder <a name="appfinder"></a></h2>

<p align="justify">
<b>Xfce 4.6</b> also comes with a brand new application finder which features a cleaner user
interface. It is also easier to use it with the keyboard and it monitors installed applications
to update the list on the fly.
</p>

<p align="center"><img src="/images/about/tour/4.6/xfce4-appfinder.png" alt="New application finder" /></p>

<h2>Links<a name="links"></a></h2>

<ul>
<li><a href="http://www.xfce.org/">Xfce website</a></li>
<li><a href="http://thunar.xfce.org/">Thunar website</a></li>
</ul>

<h2>Credits<a name="credits"></a></h2>
<p align="justify">Written by Jérôme Guelfucci, screenshots by Jannis Pohlmann, February 2009</p>
