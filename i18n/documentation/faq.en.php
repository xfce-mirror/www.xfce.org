<h1>Xfce FAQ</h1>
<p></p>

<h2>Questions:</h2>
<ol>
    <li><a href="#1">What is the "use startup notification" option?</a></li>
    <li><a href="#2">I've installed gtk-xfce-engine-2, but the themes do not appear in the "user interface" settings dialog. Why?</a></li>
    <li><a href="#3">Is it possible to change the icon used by the iconbox or taskbar for a given application?</a></li>
    <li><a href="#4">How do I disable the taskbar ?</a></li>
    <li><a href="#5">I've installed a plugin for the panel, but the indicators don't use different colors. What can I do?</a></li>
    <li><a href="#6">The left-click to get the menu on the title bar menu button seems a little slow. How do I change that?</a></li>
    <li><a href="#7">I want to use Xfce in a corporate environment and don't let users to modify their menu.</a></li>
    <li><a href="#8">Is there a way to disable the ability to move and resize windows using the Alt button + mouse click shortcut?</a></li>
    <li><a href="#9">Can I make the xfce terminal (xfterm4) look like...</a></li>
    <li><a href="#10">Are there other applications based on the Xfce development framework?</a></li>
    <li><a href="#11">Where can I find all the monitoring tools visible on the panel screenshots?</a></li>
    <li><a href="#12">How do I enable panel transparency and windows shadows?</a></li>
    <li><a href="#13">Where are the icons themes that used to be provided along with Xfce 4.0?</a></li>
    <li><a href="#14">How do I use the stock icons of the xfce4-icon-theme package?</a></li>
    <li><a href="#15">How do I enable the shutdown/reboot action in the session-manager logout dialog?</a></li>
    <li><a href="#16">How do I set the panel layer in Xfce 4.2?</a></li>
    <li><a href="#17">How do I configure xfprint?</a></li>
    <li><a href="#18">Can I change the transparency value for the panel (or the iconbox)?</a></li>
</ol>

<h2>Answeres:</h2>

<ol>
    <li id="1"><strong>What is the "use startup notification" option?</strong>
	<p>If you select this option, the window-manager will show an hourglass while the
	program is loading.  The startup-notification libraries have to be installed.
	They are probably available with your distibution.  This feature is only
	supported by modern applications (Gtk2.x and Qt3.x based).<br> Please note
	that the API is not yet frozen, and therefore Xfce 4 is only garantied to work
	with the startup-notification library version >= 0.5.</p>
    </li>
    
    <li id="2"><strong>I've installed gtk-xfce-engine-2, but the themes do not appear in the "user interface" settings dialog. Why?</strong>
	<p>The gtk-xfce-engine-2 package has to be installed using same prefix as Gtk2
	itself. When installed from sources, the engine is, by default, installed in
	/usr/local, while Gtk2 is often installed in /usr. Just install
	gtk-xfce-engine-2 again using <code>./configure --prefix=/usr</code>, and the
	themes will hopefully become available.</p>
    </li>
    
    <li id="3"><strong>Is it possible to change the icon used by the iconbox or taskbar for a given application?</strong>
	<p>It's not possible. This setting has to be managed by the application
	itself.</p>
    </li>
    
    <li id="4"><strong>How do I disable the taskbar ?</strong>
	<p>Just don't run it at startup...</p>
	
	<p>If you use the session-manager, kill the taskbar, save your session on logout, 
	and the taskbar will be gone when you'll log back in.</p>
	
	<p>If you don't use the session manager, comment out the <tt>xftaskbar4&amp;</tt> line in
	your <tt>$sysconfdir/xdg/xfce4/xinitrc</tt> or <tt>~.config/xfce4/xinitrc</tt>.</p>

	
	<p>If you use the session manager and want to remove the taskbar system-wide, comment out the 
	taskbar line in the $sysconfdir/xdg/xfce4-session/xfce4-session.rc file.</p>
    </li>
    
    <li id="5"><strong>I've installed a plugin for the panel, but the indicators don't use different colors. What can I do?</strong>
	<p>First, try another Gtk theme, since some themes override the color. If it
	doesn't solve the problem, you probably have an old ~/.gtkrc-2.0 : remove it
	and try again.</p>
    </li>
    
    <li id="6"><strong>The left-click to get the menu on the title bar menu button seems a little slow. How do I change that?</strong>
	<p>The left-button single-click menu button display speed is linked to the double
	click speed. If one wants the menu to appear quicker, just change the double
	click speed in the Xfce 4 Settings Manager Mouse properties to be faster. Or,
	one can right click on the title bar to get the menu displayed almost instantly
	without adjusting the double-click speed. The menu will display both ways.</p>
    </li>
    
    <li id="7"><strong>I want to use Xfce in a corporate environment and don't let users to modify their menu.</strong>
	<p>Use kiosk mode (see panel and xfce4-session docs).</p>
    </li>
    
    <li id="8"><strong>Is there a way to disable the ability to move and resize windows using the Alt button + mouse click shortcut?</strong>
	<p>Just edit your $HOME/.xfce4/xfwm4rc (or create an new one) and add this line:<br><br>
	easy_click=false<br><br>
	Then simply kill -HUP [pid of xfwm4]</p>
	
	<p>There are several other hidden options for xfwm4. They are listed in its documentation.</p>
    </li>
    
    <li id="9"><strong>Can I make the xfce terminal (xfterm4) look like...</strong>
	<p>xfterm4 is a script that calls the terminal defined in TERMCMD or xterm by default.</p>
	
	<p>If you use xterm, <a href="various/Xresources.txt">here's</a> an example of a 
	nice ~/.Xresources file which will make it look good.</p>
    </li>
    
    <li id="10"><strong>Are there other applications based on the Xfce development framework?</strong>
	<p>Visit <a href="http://www.xfce.org/~benny/apps.html">this page</a> to discover Xfce-related applications.</p>
    </li>
    
    <li id="11"><strong>Where can I find all the monitoring tools visible on the panel screenshots?</strong>
	<p>There are available frome the <a href="http://xfce-goodies.berlios.de/">Xfce Goodies</a> 
	page.</p>
    </li>
    
    <li id="12"><strong>How do I enable panel transparency and windows shadows?</strong>
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
    </li>
    
    <li id="13"><strong>Where are the icons themes that used to be provided along with Xfce 4.0?</strong>
	<p>Xfce 4.2 now only provides one icon theme, called xfce4-icon-theme. The 4.2 version 
	of the panel follows the general icon theme. You can select it in the "Icon theme" tab of the 
	User Interface settings dialog, which lists all themes installed in the $datadir/icons and 
	~/.icons directories.</p>
    </li>
    
    <li id="14"><strong>How do I use the stock icons of the xfce4-icon-theme package?</strong>
	<p>xfce4-icon-theme provides a $datadir/icons/Rodent/iconrc file (for SVG icons) and a 
	$datadir/icons/Rodent/iconrc-png file (for PNG icons, if you don't want to use SVG, or 
	don't have support for this format). If you want to use the Gtk stock icons provided 
	with the xfce4-icon-theme, add the following line to your 
	$datadir/themes/<em>favorite_theme</em>/gtk-2.0/gtkrc file:<br><br>
	include "path/to/iconrc"<br><br>
	then select your favorite theme.</p>
    </li>
    
    <li id="15"><strong>How do I enable the shutdown/reboot action in the session-manager logout dialog?</strong>
	<p>You have to allow the user(s) to execute $installdir/libexec/xfsm-shutdown-helper with 
	sudo. Please install sudo, and refer to xfce4-session and sudo documentation.</p>
    </li>
    
    <li id="16"><strong>How do I set the panel layer in Xfce 4.2?</strong>
	<p>This option is gone is Xfce 4.2, in order to improve focus management.</p>
    </li>
    
    <li id="17"><strong>How do I configure xfprint?</strong>
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
    </li>
    
    <li id="18"><strong>Can I change the transparency value for the panel (or the iconbox)?</strong>
	<p>If you use <a href="http://xorg.freedesktop.org/wiki/">X.org</a> >= X11R6.8.0 with the 
	Composite extension enabled, you can create the file ~.config/xfce4/transparency if you want to 
	change the transparency value for the panel (or the iconbox). Create the file and add a line with 
	the format panel=<i>value</i>, where value is a number between 0 and 100. Setting it to 0 
	effectively turns transparency off.</p>
	<p>There are several options to change the compositing manager behaviour. Check the 
	xfwm4 and xfce4-panel documentation to learn more.</p
    </li>
</ol>