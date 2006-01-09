<a name="doc"></a>

<h2>Online documentation</h2>

<p>Xfce 4 online documentation is <a
href="/documentation/">available online</a>. 
</p><br>

<a name="requirements"></a>

<h2>Xfce 4 requirements</h2>

Building Xfce 4 modules depends on :

<ul class="submenu">

		<li><a href="http://www.freedesktop.org/software/pkgconfig/"><b>pkgconfig
		</b></a>, a system for managing library compile/link flags that works with 
		automake and autoconf.</li>
		
		<li><a href="http://www.gtk.org/"><b>GTK+</b></a> >= 2.2 (also dev 
		packages), the GIMP multi-platform toolkit designed for creating graphical 
		user interfaces.</li>
		
		<li><a href="http://xmlsoft.org/"><b>libxml2</b></a>, a XML C library 
		developed for the <a href="http://www.gnome.org/">Gnome</a> project.</li>
		
		<li><a href="http://sourceforge.net/projects/dbh/"><b>libdbh</b></a>, 
		the "Disk based hashtables" library, is needed for xffm, the file manager.</li>

</ul>

<p>Make sure you have these packages (and their *-devel packages) installed.</p>

Optional dependencies :

<ul class="submenu">

	<li><b><u>librsvg</u></b> >= 2.2.x, a SAX-based renderer library for SVG 
	files, that has to be installed if you want to use SVG icons for the panel.</li>
	
	<li><b><u>libstartup-notification</u></b> >= 0.5, a library that has to be 
	installed if you want to use the 
	<a href="index.php?page=documentation&lang=ru#startup">	startup notification
	</a> feature.</li>

</ul><br>

<a name="install"></a>

<!-- install guide -->

<h2>Installation guide</h2>

<p>There are at least three ways to install Xfce :</p>

<ul class="submenu">
<li>from source code, building the environment by yourself.</li>
<li>using the binaries provided for your OS, see the <a href="index.php?page=download&lang=ru">download page</a> to find them.</li>
<li>using the graphical installer provided by os-cillation; see <a href="http://www.os-cillation.com/article.php?sid=42">this page</a> for download links and instructions.</li>
</ul>

<h3>Installation from source code</h3>

<p>If you want to build Xfce from source code, you can either download the source tarballs of a released version of Xfce from our <a href="index.php?page=download&lang=ru">download page</a>, or try a development version, by downloading it from subversion (only for the adventurous). Please note that installing two different versions of Xfce (ie. stable and development) is not supported.</p>

<h4>Getting the source from SVN</h4>

<p>Here are the general instructions to get modules from SVN. To check which
modules are avalable you can look at the <a
href="http://svn.xfce.org/svn/xfce/">web interface</a>
interface to our SVN repository.</p>

<p>You can download the full tree using the following command:</p>
<table width="100%"><tbody><tr><td bgcolor="E0E0E0"><tt>
svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</tt></td></tr></tbody></table>

<p>Please read <a href="http://svn.xfce.org/svn/xfce/modules/README">this file</a> to learn more about the Xfce 
Subversion repository shortcuts.</p>

<p>You can check out the appropriate modules:</p>
<table width="100%"><tbody><tr><td bgcolor="E0E0E0"><tt>
			svn co http://svn.xfce.org/svn/xfce/<i>$modulename</i>/trunk <i>$modulename</i></tt></td></tr></tbody></table>

<p>$modulename can be any of the following modules:</p>
<ul class="submenu">
		<?php include "edit/svn_modules_list.php"; ?>
</ul>

<h4>Building the modules</h4>

<p>If you have downloaded the source tarballs, unpack them.</p>

<p>If you install into a different prefix from pkg-config, you have to set the
PKG_CONFIG_PATH variable to include the path to the *.pc files installed by the
Xfce 4 libraries, which is ${prefix}/lib/pkgconfig.  For example:</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0"><tt>export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</tt><td></tr></tbody></table><br>

<p>Building the modules should be a simple matter of typing :</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0"><tt>./configure &amp;&amp; make &amp;&amp; make install</tt></td></tr></tbody></table>

<p>in the top directory of each module, in the following build order :</p>

<ol>
<li>xfce4-dev-tools</li>
<li>libxfce4util</li>
<li>libxfcegui4</li>
<li>libxfce4mcs</li>
<li>xfce-mcs-manager</li>
<li>all other modules (you have to install xfce4 panel before compiling panel plugins).<br></li>
</ol>

<p>After installing a library you should run <tt>ldconfig</tt>. It may be
necessary to add /usr/local to /etc/ld.so.conf.</p>

<p>If there are errors, try to run <tt>./autogen.sh</tt> instead of
<tt>./configure</tt>. In that case you need to have automake, autoconf and
libtool installed. If this doesn't work please report to the xfce mailing list:
xfce4-dev@xfce.org.</p>

<p>The gtk-xfce-engine-2 theme engine has to be installed using the same path as your GTK+ installation, usually /usr. In that case you have to use the following command in the gtk-xfce-engine-2 top directory :</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0"><tt>./configure --prefix=/usr &amp;&amp; make &amp;&amp; make install</tt></td></tr></tbody></table>

<p>Some Xfce modules offer optional features which can be enabled or disabled at build time using a specific configure option. Here is a list of the modules and the corresponding option:</p>

<table cellpadding="5" cellspacing="0" border="1" width="80%" align="center" style="font-family: arial, helvetica, sans-serif; font-size: 12px; ">

<tr>
<td>xfwm4</td>
<td>--enable-compositor</td>
<td>enables the xfwm4 compositing manager (if Xorg >= 6.8 is installed)</td>
</tr>

<tr><td>xfce4-session</td><td>--enable-session-screenshots</td><td>enables screenshots of sessions on logout</td></tr>

<tr><td rowspan="2">xfdesktop</td><td>--disable-panel-plugin</td><td>do not build the panel plugin</td></tr>

<tr><td>--disable-desktop-menu</td><td>do not build the desktop menu module</td></tr>

<tr><td>xfce4-panel</td><td>--disable-startup-notification</td><td>disable checking for startup notification library</td></tr>

<tr><td rowspan="6">xffm</td><td>--disable-extendprefs</td><td>reduce the amount of preferences configurable by the user</td></tr>

<tr><td>--disable-smbbranch</td><td>disable samba branch</td></tr>

<tr><td>--disable-filter</td><td>disable the readtime filter for folder contents</td></tr>

<tr><td>--disable-menu</td><td>include visible main menu</td></tr>

<tr><td>--enable-scrambledir</td><td>allow scramble to act on directories</td></tr>

<tr><td>--enable-panel</td><td>include a dnd toolbar with panel launchers</td></tr>

</table>

<br><div align="right"><a href="#top" style="color: #154374; "><b>Top of the page</b></a></div>

<a name="start">

<h2>Running Xfce 4</h2>

<p>Use <tt>startxfce4</tt> to start an Xfce session; this includes the session manager, the panel,
the window manager and the desktop background manager. All programs, or
symbolic links to programs, in <tt>~/Desktop/Autostart/</tt> will be run by
startxfce4 on startup.</p>

<p>To customize the behaviour of <tt>startxfce4</tt> copy
<tt>${sysconfdir}/xdg/xfce4/xinitrc</tt> to your personal <tt>~/.config/xfce4/xinitrc</tt> 
and edit that file. If you install from source,
<tt>${sysconfdir}</tt> defaults to <tt>/usr/local/etc</tt>; for binary packages
it is often set to <tt>/etc</tt>.</p>

<!-- <p>Alternatively, you can make your own <tt>~/.xinitrc</tt> file or
<tt>~/.xsession</tt> if you use a graphical login manager.</p> -->

<p>The settings manager (xfce-mcs-manager) and the window manager run in
'daemon' mode which means they will run in the background. So don't add an
'&amp;' after the command. For xfwm4 you have to add the <tt>--daemon</tt>
option when you run the program. </p>

<p>If you don't want to use the taskbar, but the iconbox, and if you use xfce4-session, just kill xftaskbar4 and run xfce4-iconbox, but don't forget to save the session on logout.</p>

<h4>Postinstallation Tasks</h4>

<p>After installing Xfce, you may want to set the $BROWSER and $TERMCMD environment variable which point out respectively your favorite brower and terminal. They will notably be used by the xfhelp4 and xfterm4 script provided by Xfce. Just add the following lines to your ~/.bash_profile, then logout/login:</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0">
<tt>export BROWSER="your_favorite_browser"</tt><br>
<tt>export TERMCMD="your_favorite_terminal"</tt>
</td></tr></table>

<h4>Setting up GDM</h4>

<p>If you installed Xfce 4.2 system-wide and use the GNOME Display Manager (gdm) to start your X session, you will have to create a .desktop file to teach gdm about your new Xfce install. Here is a sample xfce42.desktop:</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0">
<tt>[Desktop Entry]</tt><br>
<tt>Encoding=UTF-8</tt><br>
<tt>Name=Xfce 4.2 Session</tt><br>
<tt>Comment=Use this session to run Xfce 4.2 as your desktop environment</tt><br>
<tt>Exec=/usr/local/bin/startxfce4</tt><br>
<tt>Icon=/usr/local/share/pixmaps/xfce4_xicon1.png</tt><br>
<tt>Type=Application</tt></td>
</tr></table>

<p>It is usually enough to simply copy the example file to the Sessions directory used by gdm; this directory is usually located in /etc/dm/Sessions, /etc/X11/gdm/Sessions, /usr/share/xsessions, /usr/X11R6/share/gnome/xsessions or some other location, refer to the documentation of your system for details. You need to restart gdm after you copied the file.</p>

<p>Lets say, your system looks for available sessions in /usr/share/xsessions, then you will need to perform the following step (as superuser) to register Xfce with gdm:</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0">
<tt>cp /path/to/your/xfce42.desktop /usr/share/xsessions/xfce42.desktop</tt>
</td></tr></table>

<h4>Setting up KDM</h4>

<p>If you installed Xfce 4.2 system-wide and use the KDE Display Manager (kdm) to start your X session, you will have to create a .desktop file to teach kdm about your new Xfce install. First, you will have to locate the directory where kdm searches for its .desktop files. The commands:</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0">
<tt>locate kde.desktop</tt><br>
<tt>locate mwm.desktop</tt>
</td></tr></table>

<p>may help to find this directory. Common locations are /usr/share/apps/kdm/sessions or /usr/local/share/apps/kdm/sessions. Once you found the kdm session directory, you need to create a new file xfce42.desktop in this directory, with the following content:</p>

<table width="100%"><tbody><tr><td bgcolor="E0E0E0">
<tt>[Desktop Entry]</tt><br>
<tt>Encoding=UTF-8</tt><br>
<tt>Type=XSession</tt><br>
<tt>Exec=/usr/local/bin/startxfce4</tt><br>
<tt>TryExec=/usr/local/bin/startxfce4</tt><br>
<tt>Name=Xfce 4.2</tt><br>
<tt>Comment=The Xfce 4.2 Desktop Environment</tt>
</td></tr></table>

<p>If you didn't install Xfce into /usr/local, then you'll have to adjust the Exec and TryExec lines to match your installation.</p>

<p>Now you can login to your new Xfce desktop using kdm. If Xfce doesn't show up in kdm afterwards, check the paths you put in the xfce42.desktop file and try to restart kdm.</p><br>

<a name="faq"></a>

<h2>Xfce FAQ</h2>

<blockquote>

<a href="#startup">1. What is the "use startup notification" option ?</a><br>

<a href="#themes">2. I've installed gtk-xfce-engine-2, but the themes do not
appear in the "user interface" settings dialog. Why ?</a><br>

<a href="#iconbox">3. Is it possible to change the icon used by the iconbox
for a given application ?</a><br>

<a href="#taskbar">4. How do I disable the taskbar ?</a><br>

<a href="#plugins_colors">5. I've installed a plugin for the panel, but the
indicators don't use different colors. What can I do?</a><br>

<a href="#window_menu">6. The left-click to get the menu on the title bar menu
button seems a little slow. How do I change that?</a><br>

<a href="#corporate">7. I want to use Xfce in a corporate environment and
don't let users to modify their menu.</a><br>

<a href="#hidden_option_2">8. Is there a way to disable the ability to move 
and resize windows using the Alt button + mouse click shortcut?</a><br>

<a href="#xfterm4">9. Can I make the xfce terminal (xfterm4) look like...</a><br>

<a href="#apps">10. Are there other applications based on the Xfce development framework?</a><br>

<a href="#goodies">11. Where can I find all the monitoring tools visible on the panel screenshots?</a><br>

<a href="#xcomposite">12. How do I enable panel transparency and windows shadows?</a><br>

<a href="#icons">13. Where are the icons themes that used to be provided along with Xfce 4.0?</a><br>

<a href="#stock">14. How do I use the stock icons of the xfce4-icon-theme package?</a><br>

<a href="#logout">15. How do I enable the shutdown/reboot action in the session-manager 
logout dialog?</a><br>

<a href="#layer">16. How do I set the panel layer in Xfce 4.2?</a><br>

<a href="#xfprint">17. How do I configure xfprint?</a><br>

<a href="#transparency">18. Can I change the transparency value for the panel (or the iconbox)?</a><br>

</blockquote>

<br>

<a name="startup">
<p><b>1. What is the "use startup notification" option ?</b></p>

		<p>If you select this option, the window-manager will show an hourglass while the
		program is loading.  The startup-notification libraries have to be installed.
		They are probably available with your distibution.  This feature is only
		supported by modern applications (Gtk2.x and Qt3.x based).<br> Please note
		that the API is not yet frozen, and therefore Xfce 4 is only garantied to work
		with the startup-notification library version >= 0.5.</p>


<a name="themes">
<p><b>2. I've installed gtk-xfce-engine-2, but the themes do not appear in the
"user interface" settings dialog. Why ?</b></p>

		<p>The gtk-xfce-engine-2 package has to be installed using same prefix as Gtk2
		itself. When installed from sources, the engine is, by default, installed in
		/usr/local, while Gtk2 is often installed in /usr. Just install
		gtk-xfce-engine-2 again using <code>./configure --prefix=/usr</code>, and the
		themes will hopefully become available.</p>


<a name="iconbox">
<p><b>3. Is it possible to change the icon used by the iconbox for a given
application?</b></p>

		<p>It's not possible. This setting has to be managed by the application
		itself.</p>


<a name="taskbar">
<p><b>4. How do I disable the taskbar?</b></p>

		<p>Just don't run it at startup...</p>
		
		<p>If you use the session-manager, kill the taskbar, save your session on logout, 
		and the taskbar will be gone when you'll log back in.</p>
		
		<p>If you don't use the session manager, comment out the <tt>xftaskbar4&amp;</tt> line in
		your <tt>$sysconfdir/xdg/xfce4/xinitrc</tt> or <tt>~.config/xfce4/xinitrc</tt>.</p>
		
		<p>If you use the session manager and want to remove the taskbar system-wide, comment out the 
		taskbar line in the $sysconfdir/xdg/xfce4-session/xfce4-session.rc file.</p>


<a name="plugins_colors">
<p><b>5. I've installed a plugin for the panel, but the indicators don't use
different colors. What can I do?</b></p>

		<p>First, try another Gtk theme, since some themes override the color. If it
		doesn't solve the problem, you probably have an old ~/.gtkrc-2.0 : remove it
		and try again.</p>


<a name="window_menu">
<p><b>6. The left-click to get the menu on the title bar menu button seems a
little slow. How do I change that?</b></p>

		<p>The left-button single-click menu button display speed is linked to the double
		click speed. If one wants the menu to appear quicker, just change the double
		click speed in the Xfce 4 Settings Manager Mouse properties to be faster. Or,
		one can right click on the title bar to get the menu displayed almost instantly
		without adjusting the double-click speed. The menu will display both ways.</p>


<a name="corporate">
<p><b>7. I want to use Xfce in a corporate environment and don't let users to
modify their menu.</b></p>

		<p>Use kiosk mode (see panel and xfce4-session docs).</p>


<a name="hidden_option_2">
<p><b>8. Is there a way to disable the ability to move 
and resize windows using the Alt button + mouse click shortcut?</b></p>

		<p>Just edit your $HOME/.xfce4/xfwm4rc (or create an new one) and add this line:<br><br>
		easy_click=false<br><br>
		Then simply kill -HUP [pid of xfwm4]</p>
		
		<p>There are several other hidden options for xfwm4. They are listed in its documentation.</p>

		
<a name="xfterm4">
<p><b>9. Can I make the xfce terminal (xfterm4) look like...</b></p>

		<p>xfterm4 is a script that calls the terminal defined in TERMCMD or xterm by default.</p>
		
		<p>If you use xterm, <a href="various/Xresources.txt">here's</a> an example of a 
		nice ~/.Xresources file which will make it look good.</p>


<a name="apps">
<p><b>10. Are there other applications based on the Xfce development framework?</b></p>

		<p>Visit <a href="http://www.xfce.org/~benny/apps.html">this page</a> to discover Xfce-related 
		applications.</p>


<a name="goodies">
<p><b>11. Where can I find all the monitoring tools visible on the panel screenshots?</b></p>

		<p>There are available frome the <a href="http://xfce-goodies.berlios.de/">Xfce Goodies</a> 
		page.</p>
		

<a name="xcomposite">
<p><b>12. How do I enable panel transparency and windows shadows?</b></p>

		<p>Xfwm4 includes its own compositing manager, which allows transparency for the panel and 
		shadows for the windows. The compositing manager uses the 
		<a href="http://xorg.freedesktop.org/wiki/">X.org</a> >= X11R6.8.0 
		Xcomposite extension, so you first have to be running this version of the graphical 
		server.</p>
		
		<p>The composite extension has to be activated in you /etc/X11/xorg.conf using the 
		following section:<br><br>
		Section "Extensions"<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Option "Composite" "Enable"<br>
		EndSection</p>
		
		<p>Xfwm4 has to be built with the <em>--enable-compositor</em> configure option, since 
		it's not enabled by default. If you installed Xfce using binaries provided for your 
		distribution, you'll probably have to rebuild xfwm4.</p>
		
		<p>Please be aware that the X.org Composite extension is still under development, so 
		it includes bugs. Using the compositing manager can slow down your environment 
		if your video card does not support RENDER in hardware. It's known to work well with NVidia cards 
		and NVidia drivers, especially if you add the <em>Option "RenderAccel" "true"</em> option 
		in the Device section of your xorg.conf file. But note that Xinerama and TwinView don't 
		play well with Composite, so, for now, you can either use dual-head or Composite.</p>
		
<a name="icons">
<p><b>13. Where are the icons themes that used to be provided along with Xfce 4.0?</b></p>

		<p>Xfce 4.2 now only provides one icon theme, called xfce4-icon-theme. The 4.2 version 
		of the panel follows the general icon theme. You can select it in the "Icon theme" tab of the 
		User Interface settings dialog, which lists all themes installed in the $datadir/icons and 
		~/.icons directories.</p>
		

<a name="stock">
<p><b>14. How do I use the stock icons of the xfce4-icon-theme package?</b></p>
		
		<p>xfce4-icon-theme provides a $datadir/icons/Rodent/iconrc file (for SVG icons) and a 
		$datadir/icons/Rodent/iconrc-png file (for PNG icons, if you don't want to use SVG, or 
		don't have support for this format). If you want to use the Gtk stock icons provided 
		with the xfce4-icon-theme, add the following line to your 
		$datadir/themes/<em>favorite_theme</em>/gtk-2.0/gtkrc file:<br><br>
		include "path/to/iconrc"<br><br>
		then select your favorite theme.
		</p>


<a name="logout">
<p><b>15. How do I enable the shutdown/reboot action in the session-manager logout dialog?</b></p>
		
		<p>You have to allow the user(s) to execute $installdir/libexec/xfsm-shutdown-helper with 
		sudo. Please install sudo, and refer to xfce4-session and sudo documentation.</p>


<a name="layer">
<p><b>16. How do I set the panel layer in Xfce 4.2?</b></p>

		<p>This option is gone is Xfce 4.2, in order to improve focus management.</p>


<a name="xfprint">
<p><b>17. How do I configure xfprint?</b></p>

		<p>Xfprint is not a printer configuration tool. It's a graphical interface between Xfce 
		and a functional printing system. It supports CUPS, BSD-LPR (minimal support) and 
		File (ps). In order to build and install Xfprint, you need the a2ps and psutils packages, 
		and the CUPS devel packages if you use this printing system (the ./configure checks for 
		presence of BSD-LPR on your system). Xfprint provides xfprint4 and xfprint-manager tools.</p>
		
		<p>You can start the Xfprint settings dialog from the Xfce settings manager, and select 
		the printing system that you want to use. Configured printers should then 
		automatically become available through Xfprint.</p>
		
		<p>The xfprint4 command allows you to send files to the printer from the command line. 
		If you add it to a panel launcher, it allows you to start a file chooser dialog, or to 
		drag and drop files from a file manager.</p>
		
		<p>The xfprint-manager gives access to the printer informations and to the jobs queue 
		if you are using CUPS.</p>

<a name="transparency">
<p><b>18. Can I change the transparency value for the panel (or the iconbox)?</b></p>

<p>If you use <a href="http://xorg.freedesktop.org/wiki/">X.org</a> >= X11R6.8.0 with the Composite extension enabled, you can create the file ~.config/xfce4/transparency if you want to change the transparency value for the panel (or the iconbox). Create the file and add a line with the format panel=<i>value</i>, where value is a number between 0 and 100. Setting it to 0 effectively turns transparency off.</p>

<p>There are several options to change the compositing manager behaviour. Check the xfwm4 and xfce4-panel documentation to learn more.</p>



<div align="right"><a href="#top" style="color: #154374; "><b>Top of the page</b></a></div><br><br>
