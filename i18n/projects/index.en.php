<h1>Projects</h1>
<p>Piece of text about the Xfce components</p>

<h2 id="core">Core Components</h2>
<table width="99%" border="0" cellspacing="10" cellpadding="0">
<!-- Blank Row
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/"></a></h3>
	    <p></p>
	<td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/"></a></h3>
	    <p></p>
	<td>
    </tr>
-->
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfwm4">Window manager</a></h3>
	    <!-- Drop Shadows, improved compositing, shortcut editor is removed from xfwm4 -->
	    <p>The Xfce 4 window manager. It manages the placement of application windows on the screen, 
	    provides window decorations and manages workspaces or virtual desktops. Xfwm4 natively
	    supports multihead mode. It provides its own compositing manager (a manager for the Xorg Composite 
	    extension, which brings true transparency to the Xfce desktop). The themes support image
	    composition with PNG images as layers, which means that one can do gradients or anything else, 
	    and that applies to any pixmap that make the window frame. Xfwm4 includes a keyboard shorcuts editor. 
	    Moreover, users can shade windows and switch desktops using the mouse wheel.</p>
	</td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfce4-panel">Panel</a></h3>
	    <!-- Complete rewrite, so new text -->
	    <p>It provides both vertical and horizontal modes, a workspace switcher, a clock, an auto-hide feature, 
	    easy-to-setup detachable menus and application launchers. The panel supports transparency when the X Composite extension is enabled. It offers an easy 
	    way to add a plugin, using a dialog and mouse double-click. It's compatible with the numerous plugins 
	    available from the <a href="http://xfce-goodies.berlios.de/" target="_blank">Xfce Goodies Project</a> page.</p>
	</td>
    </tr>
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfdesktop">Desktop manager</a></h3>
	    <!-- Minimized icons or Launcher icons (Thunar-vfs) -->
	    <p>The desktop background manager. This program sets the background image and provides a root window menu. It 
	    includes gradient support for background color, saturation support for background image, real multiscreen 
	    and xinerama support, a desktop menu editor with DND support from xfce4-appfinder and .desktop files from Rox, 
	    Konqueror, Nautilus, Xffm... The desktop menu and the window list have optional support for icons, so you can 
	    use icons only if you want, and if your computer has enough resources to handle them. Moreover, Xfdesktop4 
	    provides a desktop menu plugin for the panel: you can get standard menu from either the panel or the desktop.</p>
	</td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfce4-session">Session manager</a></h3>
	    <!-- No big changes -->
	    <p> The session manager. The session manager controls the startup and shutdown of the Xfce Desktop Environment. On
	    logout it can save the running application and start them again the next time you log in. It's compatible with 
	    Gnome/KDE, supports multihead modes (Xinerama and multiscreen), doesn't rely on smproxy (or any rewrite like gnome-smproxy), 
	    but provides (partial) session management even for non-sm or X11R5-sm aware apps. Moreover, it supports nice themes.</p>
	</td>
    </tr>
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfprint4">Printing Helper</a></h3>
	    <!-- No big changes -->
	    <p>Provides a graphical frontend for printing. It includes xfprint4 and xfprint-manager. Xfprint can use either 
	    CUPS, BSD-LPR or a file as destination, and printers are retrieved from the printing system you choosed.</p>
	</td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfce-mcs-manager">Settings manager</a></h3>
	    <!-- No big changes -->
	    <p>Provides the Multi-Channel Settings, a modular, host independent, network transparent and centralized configuration 
	    system. It runs in the background and provides global settings information to other Xfce components. There is a main control 
	    panel to access the configuration dialogs of Xfce components. Its icons are customizable. The MCS plugins provide settings 
	    dialogs for general items that are not part of a package, e.g. GTK, mouse, fonts, keyboard and display settings.</p>
	</td>
    </tr>
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfce-utils">Utilities</a></h3>
	    <!-- New run dialog?? -->
	    <p>Essential utilities and scripts. Provides a taskbar, an &quot;about&quot; dialog, a run dialog and several important 
	    scripts that are used by other packages including the panel (startxfce4, xfhelp4, xflock4, xfmountdev4, and xfterm4). 
	    Also contains the user guide. The taskbar includes an &quot;always group tasks&quot; option, a selectable  left/center/right 
	    alignment and variable width, and a right-click action menu.</p>
	</td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/libxfce">Xfce Libraries</a></h3>
	    <!-- 1 piece of text about the 3 core libs -->
	    <p></p>
	    <!--
	    Libxfce4util:
	    This component is the basic utilitiy library for the Xfce Desktop Environment. Everything else is build on top of this 
	    library and the functionality provided by it.
	    
	    Libxfcegui4:
	    The basic widget library for the Xfce Desktop Environment,it contains additional widgets, that extend the basic widget 
	    set provided by Gtk+, functions to communicate with other NET compliant Xclients and various utility functions and modules.
	    
	    Libxfce4mcs:
	    This package contains the modules used in the Xfce Multi-Channel Settings (MCS) system. The manual 
	    describes both the manager-side API - used when creating plugins for the Xfce MCS Manager - and the client-side 
	    API - used in creation of clients that access their settings using the MCS system
	    -->
	</td>
    </tr>
</table>

<h2 id="projects">Projects</h2>
<table>
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/mousepad">Mousepad</a></h3>
	    <p>Mousepad is a text editor for Xfce based on Leafpad. The initial reason for Mousepad was to provide 
	    printing support, which would have been difficult for Leafpad for various reasons.</p>
	<td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/intallit">Intallit</a></h3>
	    <p>nstallIt is the official approach of transforming the famous Xfce installer into a more generic 
	    software management and installation tool. It is written in Python using Python-GTK.</p>
	<td>
    </tr>
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/terminal">Terminal</a></h3>
	    <p>Terminal is a modern terminal emulator for the Unix/Linux desktop - primarly for the Xfce 
	    desktop environment. We developed it because we saw the need for a lightweight and easy to use 
	    terminal emulator in the Xfce desktop environment, that doesn't require the user to install the GNOME 
	    plattform, but still provides a worthy alternative to the GNOME terminal emulator.</p>
	<td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/thunar">File manager (Thunar)</a></h3>
	    <p>Thunar is a new modern file manager for the Xfce Desktop Environment. Thunar has been designed 
	    from the ground up to be fast and easy-to-use. Its user interface is clean and intuitive, and does 
	    not include any confusing or useless options. Thunar is fast and responsive with a good start up time 
	    and directory load time. Thunar is accessible using Assistive Technologies and is fully standards complaint.</p>
	<td>
    </tr>
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfburn">Xfburn</a></h3>
	    <p>Xfburn is a frontend burning application that uses cdrtools (cdrecord, cdrdao, mkisofs) to create 
	    and burn CD's and DVD's. The easy gui frontent should make it an attractive and usable CD burning application.</p>
	<td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/orage">Orage</a></h3>
	    <p>A simple calendar application with reminders.</p>
	<td>
    </tr>
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfce4-appfinder">Application finder</a></h3>
	    <p>Allows you to search, launch and find information about applications installed on your system.</p>
	<td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfce4-mixer">Sound Mixer</a></h3>
	    <p>A volume control for the panel. It includes a mixer dialog wich supports ALSA, OSS and Sun audio.</p>
	<td>
    </tr>
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfce4-terminal">Xfce4-terminal</a></h3>
	    <p>XFce4-terminal is a terminal emulator for xfce4, based on vte libs.</p>
	<td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfmedia">Xfmedia</a></h3>
	    <p>Xfmedia is a simple, easy-to-use media player based on the xine engine. The GTK+ GUI focuses on playing and 
	    managing audio files, but, being based on xine, supports video as well.</p>
	<td>
    </tr>
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xffm">File Manager (Xffm)</a></h3>
	    <p>A fast file manager, with two independent panes, integrated samba network browser and mount/umount capabilities 
	    using fstab data. It includes an icon theme editor.</p>
	<td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/libexo">Libexo</a></h3>
	    <p>Libexo is an extension library for Xfce, developed by os-cillation. While the core Xfce libraries are targeted 
	    at desktop development, libexo is targeted at application developement - in particular, developing applications 
	    for the Xfce Desktop Environment.</p>
	<td>
    </tr>
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/pyxfce">Pyxfce</a></h3>
	    <p>Pyxfce are xfce bindings for python. You can use python to create xfce programs, after you installed pyxfce.</p>
	<td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfc">Xfce Foundation Classes</a></h3>
	    <p>The Xfce Foundation Classes is a set of integrated C++ classes for developing Xfce applications on UNIX-like 
	    operating systems such as Linux. The classes combine the power of GTK+ and the power of C++ into a state-of-the-art 
	    application development framework for the Xfce Desktop Environment.</p>
	<td>
    </tr>
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfce-gtk-engine">GTK Theme Engine</a></h3>
	    <p>A theme engine for GTK2. Not required for the desktop, but it's a nice theme engine so you might just as well give it a try.</p>
	<td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfce-icon">Icon Theme</a></h3>
	    <p>Default icon theme for Xfce 4. It includes both PNG and SVG icons</p>
	<td>
    </tr>
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/xfce4-dev-tools">Xfce development tools</a></h3>
	    <p>The Xfce developer tools provide a collection of scripts and M4 macros that are required to build the Xfce core desktop 
	    components and various other software packages straight from SVN/CVS. You do not need the developer tools if you are building 
	    from the release tarballs.</p>
	<td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/"></a></h3>
	    <p></p>
	<td>
    </tr>
</table>

<h2 id="related">Related</h2>
<table>
    <tr>
	<td width="50%" valign="top">
	    <h3><a href="/projects/"></a></h3>
	    <p></p>
	<td>
	<td width="50%" valign="top">
	    <h3><a href="/projects/"></a></h3>
	    <p></p>
	<td>
    </tr>
</table>
