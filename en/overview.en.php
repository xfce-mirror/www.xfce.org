<a name="whatis"></a>

<h2>What is Xfce 4.2 ?</h2>

<p>Xfce is a lightweight desktop environment for unix-like operating systems. 
It aims to be fast and lightweight, while still being visually appealing and easy 
to use.</p>

<p>Xfce 4.2 embodies the traditional UNIX philosophy of modularity and 
re-usability. It consists of a number of components that together provide the full 
functionality of the desktop environment. They are packaged separately 
and you can pick and choose from the available packages to create the best 
personal working environment.</p>

<p>Another priority of Xfce 4 is adhereance to standards, specifically those 
defined at <a href="http://www.freedesktop.org/Standards/Home">
freedesktop.org</a>.</p>

<p>Xfce 4 can be installed on several UNIX platforms. It is known to compile 
on Linux, NetBSD, FreeBSD, Solaris, Cygwin and MacOS X, on x86, PPC, Sparc, Alpha...</p>

<br>

<a name="features"></a>

<h2>Xfce 4 features and components</h2>

<h3>General</h3>

<ul class="submenu">

		<li><a href="http://www.freedesktop.org/">Freedesktop</a> specifications 
		compliance for Window Manager hints, menus, icons themes, XDG Basedir 
		Specification, Xsettings protocol, drag and drop...</li>

		<li>Real multiscreen and Xinerama support.</li>

		<li>Support for "kiosk mode" in which the allowed user actions can be
		restricted in xfce4-session, xfce4-panel, and xfdesktop.</li>

		<li>Development framework for applications.</li>

		<li>Xft fonts anti-aliasing support.</li>

		<li>You can install/launch each Xfce module separately. Very useful if you do not 
		need them all or if you have very limited system resources.</li>

		<li>More than 40 languages translations...</li>

</ul>

<h3>Libraries (libxfce4util, libxfcegui4, libxfce4mcs)</h3>

<ul class="submenu">

<li>libxfce4util : library with non-graphical helper functions.</li>
<li>libxfcegui4 : widgets and convenience functions to create graphical user interfaces.</li>
<li>libxfce4mcs : settings management library used by most Xfce 4 components.</li>

</ul>

<img src="images/mcs.png" width="238" height="157" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">

		<h3>Settings manager (xfce-mcs-manager and xfce-mcs-plugins</h3>
		
		<p>
		
		Provides the Multi-Channel Settings, a modular, host independent, 
		network transparent and centralized 
		configuration system. It runs in the background and provides global 
		settings information to other Xfce components. There is a main control 
		panel to access the configuration dialogs of Xfce components. Its icons 
		are customizable. The MCS plugins provide settings dialogs 
		for general items that are not part of a package, e.g. GTK, mouse, fonts, 
		keyboard and display settings.</p>
				
<img src="images/wm.png" width="187" height="151" border="0" alt=""  style="float: left; margin-right: 30px; margin-bottom: 20px; ">

		<h3>Window manager (xfwm4)</h3>
		
		<p>
		
		The Xfce 4 window manager. It manages the placement 
		of application windows on the screen, provides window decorations and 
		manages workspaces or virtual desktops. Xfwm4 natively supports multihead mode. 
		It provides its own compositing manager (a manager for the Xorg Composite extension, 
		which brings true transparency to the Xfce desktop). The themes support 
		image composition with PNG images as layers, which means that one can 
		do gradients or anything else, and that applies to any pixmap that 
		make the window frame. Xfwm4 includes a keyboard shorcuts editor. 
		Moreover, users can shade windows and switch desktops using 
		the mouse wheel.</p>

		<h3>Panel (xfce4-panel)</h3>

<img src="images/panel.png" width="235" height="46" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">
		
		<p>
	
		The Xfce 4 panel. It provides both vertical and 
		horizontal 	modes, a workspace switcher, a clock, an auto-hide feature, 
		easy-to-setup detachable menus and application launchers, and a mail 
		checker with mbox, Maildir and POP3 support. The panel supports 
		transparency when the X Composite extension is enabled.
		It offers an easy way to add a plugin, using a dialog and 
		mouse double-click. It's compatible with the numerous plugins available 
		from the <a href="http://xfce-goodies.berlios.de/" target="_new">Xfce Goodies 
		Project</a> page.</p>
		
<img src="images/menu.png" width="101" height="153" border="0" alt=""  style="float: left; margin-right: 30px; margin-bottom: 20px;">	
	
		<h3>Desktop manager (xfdesktop)</h3>
		
		<p>
		
		The desktop background manager. This program 
		sets the background image and provides a root window menu. It 
		includes gradient support for background color, 
		saturation support for background image, real multiscreen and xinerama 
		support, a desktop menu editor with DND support from 
		xfce4-appfinder and .desktop files from Rox, Konqueror, Nautilus, Xffm...
		The desktop menu and the window list have optional support for icons, 
		so you can use icons only if you want, and if your computer has enough 
		resources to handle them. Moreover, Xfdesktop4 provides a desktop 
		menu plugin for the panel: you can get standard menu from either 
		the panel or the desktop.</p>

<img src="images/taskbar.png" width="275" height="112" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">

<h3>Utilities (xfce-utils)</h3>

		<p>
		
		Essential utilities and scripts. Provides a taskbar, 
		an "about" dialog, a run dialog and several important scripts that are used 
		by other packages including the panel (startxfce4, xfhelp4, xflock4, 
		xfmountdev4, and xfterm4). Also contains the user guide. The taskbar 
		includes an "always group tasks" option, a selectable 
		left/center/right alignment and variable width, and a right-click action menu.
		</p>

<img src="images/xffm.png" width="207" height="164" border="0" alt=""  style="float: left; margin-right: 30px; margin-bottom: 20px;">	

<h3>File manager (xffm)</h3>

		<p>
		
		A fast file manager, with two independent panes, integrated 
		samba network browser and mount/umount capabilities using fstab data. 
		It includes an icon theme editor.</p>
		
<h3>Printing Helper (xfprint)</h3>

		<p>Print dialog. Provides a graphical frontend for printing. 
		It includes <tt>xfprint4</tt> and 	<tt>xfprint-manager</tt>. Xfprint can 
		use either CUPS, BSD-LPR or a file as destination, and printers are retrieved 
		from the printing system you choosed.</p>

<img src="images/appfinder.png" width="252" height="198" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">

<h3>Application finder (xfce4-appfinder)</h3>
		
		<p>
		
		An application finder, which allows you to 
		search, launch and find information about applications installed on your 
		system.</p>
		
<h3>Session manager (xfce4-session)</h3>
		
		<p>
				
		The session manager. The session manager 
		controls the startup and shutdown of the Xfce Desktop Environment. On 
		logout it can save the running application and start them again the next 
		time you log in. It's compatible with Gnome/KDE, supports multihead modes 
		(Xinerama and multiscreen), doesn't rely on smproxy (or any rewrite like 
		gnome-smproxy), but provides (partial) session management even for 
		non-sm or X11R5-sm aware apps. Moreover, it supports nice themes.</p>

<img src="images/toys.png" width="46" height="198" border="0" alt=""  style="float: left; margin-right: 30px; margin-bottom: 20px;">	

<h3>Sound Mixer (xfce4-mixer)</h3>

		<p>A volume control for the panel. It includes a mixer dialog wich 
		supports ALSA, OSS and Sun audio.</p>
		
<h3>Notification area (xfce4-systray)</h3>

		<p>Notification area (or "system tray") for the panel.</p>
		
<h3>Toys (xfce4-toys)</h3>

		<p>
		Less serious utilities and additions for the panel. 
		Contains a tips/fortunes dialog and an xeyes implementation for the panel.
		</p>

<h3>Calendar and Appointments (xfcalendar)</h3>

		<p>A simple calendar application with reminders.</p>

<h3>Toggle Button plugin (xfce4-trigger-launcher)</h3>

		<p>Provides a toggle button for the panel, 
		showing on or off state. May be used for starting or ending network connections 
		for example.</p>

<img src="images/iconbox.png" width="192" height="57" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">

<h3>Icon Box (xfce4-iconbox)</h3>

		<p>An icon box that can be used as an alternative 
		for the taskbar provided in the xfce-utils package. Its transparency 
		level is configurable when using the X Composite extension.</p>
		
<h3>Themes for the Window Manager (xfwm4-themes)</h3>

		<p>
		
		More than 60 window decoration themes for xfwm4.</p>		

<h3>Icon Theme (xfce4-icon-theme)</h3>

		<p>Default icon theme for Xfce 4. It includes both PNG and SVG icons</p>
		
<h3>GTK Theme Engine (gtk-xfce-theme-engine)</h3>

		<p>A theme engine for GTK2. Not required for 
		the desktop, but it's a nice theme engine so you might just as well give it a 
		try.</p>

<div align="right"><a href="#top" style="color: #154374; "><b>Top of the page</b></a></div><br>

