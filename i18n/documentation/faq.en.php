<h1>Xfce FAQs </h1>

<ul>
	<h3 id="starting">Getting started</h3>
	<li><a href="#1-1">What is &quot;Xfce&quot; and why should I use it?</a></li>
	<li><a href="#1-2">How is Xfce pronounced and what does it mean? </a></li>
	<li><a href="#1-3">What does the logo symbolize?</a></li>
	<li><a href="#1-4">On what platforms does Xfce currently run? </a></li>
</ul>
<ul>
	<h3 id="installation">Installation</h3>
	<li><a href="#2-1">How do I install Xfce? </a></li>
	<li><a href="#2-2">What is the &quot;use startup notification&quot; option?</a></li>
	<li><a href="#2-3">The graphical installer fails with &quot;C++ preprocessor fails sanity check&quot;</a></li>
	<li><a href="#2-4">The graphical installer fails with &quot;Unable to connect to Xserver&quot;</a></li>
	<li><a href="#2-5">Is it possible to use Xfce with DM's? </a></li>
	<li><a href="#2-6">Is it possible to start Xfce when I login on the console? </a></li>
</ul>
<ul>
	<h3 id="usage">Usage</h3>
	<li><a href="#3-1">How do I start Xfce. </a></li>
	<li><a href="#3-2">I want to use Xfce in a corporate environment and don't let users to modify their menu.</a></li>
	<li><a href="#3-3">How do I display a list of all windows?</a></li>
	<li><a href="#3-4">How do I disable the taskbar in Xfce 4.2?</a></li>
	<li><a href="#3-5">When I start Xfce a dialog pops up saying &quot;Could not look up internet address for&quot; ... </a></li>
	<li><a href="#3-6">How do I get numlock to start on login?</a></li>
	<li><a href="#3-7">Is it possible to use Media keys in the Shortcut Editor? </a></li>
	<li><a href="#3-8">I'm unable to shutdown or restart my computer when running Xfce. </a></li>
	<li><a href="#3-9">The left-click to get the menu on the title bar menu button seems a little slow. How do I change that?</a></li>
</ul>
<ul>
	<h3 id="appearance">Visual Appearance</h3>
	<li><a href="#4-1">How do I set the panel layer in Xfce 4.2 and 4.4?</a></li>
	<li><a href="#4-2">How do I enable panel transparency and windows shadows? </a></li>
	<li><a href="#4-3">My Xfce Desktop doesn't has any shortcut icons, why? </a></li>
	<li><a href="#4-4">The gtk-xfce-engine themes do not appear in the &quot;user interface&quot; settings dialog. </a></li>
	<li><a href="#4-5">Is it possible to change the icon used by the iconbox or taskbar for a given application?</a></li>
	<li><a href="#4-6">I've installed a plugin for the panel, but the indicators don't use different colors. What can I do?</a></li>
</ul>
<ul>
	<h3 id="development">Development</h3>
	<li><a href="#5-1">How can I report bugs?</a></li>
	<li><a href="#5-2">How often are new releases made? </a></li>
</ul>
<hr />

<h2>Getting started</h2>
<dl>
	<dt id="1-1">What is &quot;Xfce&quot; and why should I use it?</dt>
	<dd>Xfce is a desktop environment for Unix and other Unix-like platforms, such as Linux, Solaris or BSD. The design philosophy "Designed for productivity, it loads and executes applications fast, while conserving system resources" (Olivier Fourdan) should appeal anyone looking for a fast, modern and efficient working environment for his *NIX box.</dd>
	
	<dt id="1-2">How is Xfce pronounced and what does it mean?</dt>
	<dd>The name Xfce originally stood for XForms Common Environment, but since then, Xfce war rewritten twice and doesn't use XForms toolkit anymore. The name survived, but is no longer capitalized as "XFce" , but "Xfce". Currently the acronym doesn't stand for anything any more.</dd>
	
	<dt id="1-3">What does the logo symbolize?</dt>
	<dd>You really didn't see??? You got to be joking... it's a mouse for all kind of obvious reasons like World Domination and other monsters out there</dd>
	
	<dt id="1-4">On what platforms does Xfce currently run?</dt>
	<dd>Xfce has been developped with versatility in mind and currently is supported on Linux, Solaris and BSD.</dd>
</dl>

<h2>Installation</h2>
<dl>
	<dt id="2-1">How do I install Xfce?</dt>
	<dd>Xfce can be installed in at least three different ways.
		<ul>
		  <li> From source code, building the environment by yourself </li>
		  <li> Use the package manager of your distro, it will provide you the precompiled binaries or install instructions to build from source </li>
      <li> Use the graphical installer provided by <a href="http://www.os-cillation.com/index.php?id=31&L=5">os-cillation</a>. Follow instructions on <a href="http://www.os-works.com/documentation/xfce-installers/4.2.1/xfce-installer/">this</a> page to use the installer.</li>
		</ul>
	</dd>
	
	<dt id="2-2">What is the &quot;use startup notification&quot; option?</dt>
	<dd>If you select this option, the window-manager will show an hourglass while the program is loading. The startup-notification libraries have to be installed. They are probably available with your distibution. This feature is only supported by modern applications (Gtk2.x and Qt3.x based).
		<br />
		Please note that the API is not yet frozen, and therefore Xfce 4 is only garantied to work with the startup-notification library version &gt;= 0.5.</dd>
	
	<dt id="2-3">The graphical installer fails with &quot;C++ preprocessor fails sanity check&quot;</dt>
	<dd>This error message tells you that the configure  script was unable to verify that the C++ preprocessor is setup properly on your system. You can most probably fix this problem by installing the g++ package for your distribution.</dd>
	
	<dt id="2-4">The graphical installer fails with &quot;Unable to connect to Xserver&quot;</dt>
	<dd> For some reason the installation wizard is not able to connect to an Xserver, which is required for the installer. This usually happens when you use su, and su in turn doesn't pass the DISPLAY environment variable properly. Try to use the commands:
	<br />
	<br />
	  <code>
	    $ xhost +localhost <br />
	    $ su --preserve-environment <br />
	    # ./xfce4-4.2.1.1-installer.bin <br />
	  </code>
		<br />
	  or 
		<br />
		<br />
			<code>
			$ xhost +localhost <br />
			$ su <br />
				# env DISPLAY=:0 ./xfce4-4.2.1.1-installer.bin <br /><br />
			</code>
      instead (replace :0 with your display name if required).</dd>
	<dt id="2-5">Is it possible to use Xfce with DM's?</dt>
	<dd>Sure, both gdm and kdm can start Xfce. <br />
	<p><strong>Setting up GDM</strong><br />
	If you installed Xfce system-wide and you want to use the GNOME Display Manager (gdm) to start your Xfce session, you will have to create a .desktop file to teach gdm how to start the Xfce session. This is a sample desktop file, Xfce.desktop:<br />
	<code>
	[Desktop Entry]<br />
	Encoding=UTF-8<br />
	Name=Xfce 4.4 Session<br />
	Comment=Use this session to run Xfce 4.4 as your desktop environment<br />
	Exec=/usr/local/bin/startxfce4<br />
	Icon=/usr/local/share/pixmaps/xfce4_xicon1.png<br />
	Type=Application<br />
	</code><br/>
	It is usually enough to simply copy the example file to the Session directory used by gdm; this directory is usually located in /etc/dm/Sessions, /etc/X11/gdm/Sessions, /usr/share/xsessions, /usr/X11/share/gnome/xsessions or some other location, refer to the documentation of your system for details. You need to restart gdm after you created the file.<br />
	</p>
	<p>
	<strong>Setting up KDM</strong><br />
	If you installed Xfce system-wide and you want to use the KDE Display Manager (gdm) to start your Xfce session, you will have to create a .desktop file to teach kdm how to start the Xfce session. <br />
	First you need to find where kdm searches for its .desktop files:<br />
	<code>locate kde.desktop</code><br />
	Common locations are /usr/share/apps/kdm/sessions or /usr/local/share/kdm/sessions. Once you found the kdm session directory, you need to create a new file Xfce.desktop with the following:<br />
	<code>
	[Desktop Entry]<br />
	Encoding=UTF-8<br />
	Type=XSession<br />
	Exec=/usr/local/bin/startxfce4<br />
	TryExec=/usr/local/bin/startxfce4<br />
	Name=Xfce 4.4<br />
	Comment=The Xfce 4.4 Desktop Environment<br />
	</code>
	</dd>
	
	<dt id="2-6">Is it possible to start Xfce when I login on the console?</dt>
	<dd>There are two different ways to do this:<br />
	<ul>
	<li>You can just login with the command <code>startxfce4</code></li>
	<li>You put the following in your .bash_profile/.bashrc if you want that Xfce is started automatically when you login on tty1:<br />
	<code>
	if [ "$(tty)" = "/dev/tty1" -o  "$(tty)" = "/dev/vc/1" ] ; then<br />
	startxfce4<br />
	fi<br />
	</code>
	</li>
	</ul>
	
	
	</dd>
</dl>

<h2>Usage</h2>
<dl>
	<dt id="3-1">How do I start Xfce.</dt>
	<dd>Xfce comes with a startup script: startxfce4. You can add "exec startxfce4" to your .xinitrc in your home directory and simply use "startx" or you can simply use startxfce4 if you prefer that.</dd>
	
	<dt id="3-2">I want to use Xfce in a corporate environment and don't let users to modify their menu.</dt>
	<dd>Use kiosk mode (see panel and xfce4-session docs).</dd>
	
	<dt id="3-3">How do I display a list of all windows?</dt>
	<dd>There are two possibilities. The first is by middle clicking on the desktop (if you have xfdesktop runnig) or you can add the window list plugin to the panel.</dd>
	
	<dt id="3-4">How do I disable the taskbar in Xfce 4.2?</dt>
	<dd>Just don't run it at startup...<br />
  If you use the session-manager, kill the taskbar, save your session on logout, and the taskbar will be gone when you'll log back in.<br />
  If you don't use the session manager, comment out the xftaskbar4 line in your $sysconfdir/xdg/xfce4/xinitrc or ~/.config/xfce4/xinitrc.<br />
  If you use the session manager and want to remove the taskbar system-wide, comment out the taskbar line in the $sysconfdir/xgd/xfce4-session/xfce4-session.rc file.</dd>
	
	<dt id="3-5">When I start Xfce a dialog pops up saying &quot;Could not look up internet address for&quot; ...</dt>
	<dd>&nbsp;</dd>
	
	<dt id="3-6">How do I get numlock to start on login?</dt>
	<dd>There are two possibilities to achieve this. Or you should use a display manager that turns the numlock on (eg. gdm, check the settings) or you can use a little program called numlockx <a href="http://ktown.kde.org/~seli/numlockx/">numlockx</a>adding <code>numlockx on</code> in your .xinitrc will do the job.</dd>
	
	<dt id="3-7">Is it possible to use Media keys in the Shortcut Editor?</dt>
	<dd>&nbsp;</dd>
	
	<dt id="3-8">I'm unable to shutdown or restart my computer when running Xfce.</dt>
	<dd>&nbsp;</dd>
	
	<dt id="3-9">The left-click to get the menu on the title bar menu button seems a little slow. How do I change that?</dt>
	<dd>The left-button single-click menu button display speed is linked to the double click speed. If one wants the menu to appear quicker, just change the double click speed in the Xfce 4 Settings Manager Mouse properties to be faster. Or, one can right click on the title bar to get the menu displayed almost instantly without adjusting the double-click speed. The menu will display both ways.</dd>
</dl>

<h2>Visual Appearance</h2>
<dl>
	<dt id="4-1">How do I set the panel layer in Xfce 4.2 and 4.4?</dt>
	<dd>&nbsp;</dd>
	
	<dt id="4-2">How do I enable panel transparency and windows shadows?</dt>
	<dd>&nbsp;</dd>
	
	<dt id="4-3">My Xfce Desktop doesn't has any shortcut icons, why?</dt>
	<dd>&nbsp;</dd>
	
	<dt id="4-4">The gtk-xfce-engine themes do not appear in the &quot;user interface&quot; settings dialog</dt>
	<dd>The gtk-xfce-engine-2 package has to be installed using same prefix as Gtk2 itself. When installed from sources, the engine is, by default, installed in /usr/local, while Gtk2 is often installed in /usr. Just install gtk-xfce-engine-2 again using <code>./configure --prefix=/usr</code>, and the themes will hopefully become available.</dd>
	
	<dt id="4-5">Is it possible to change the icon used by the iconbox or taskbar for a given application?</dt>
	<dd>It's not possible. This setting has to be managed by the application itself.</dd>
	
	<dt id="4-6">I've installed a plugin for the panel, but the indicators don't use different colors. What can I do?</dt>
	<dd>First, try another Gtk theme, since some themes override the color. If it doesn't solve the problem, you probably have an old ~/.gtkrc-2.0 : remove it and try again.</dd>
</dl>
<h2>Development</h2>

	<dt id="5-1">How can I report bugs?</dt>
	<dd>Your can report bugs <a href="http://bugzilla.xfce.org/" target="_blank">here</a> or ask on the<a href="/community/lists"> mailing lists</a> or <a href="http://forum.xfce.org/" target="_blank">forums</a> for help. </dd>
	
	<dt id="5-2">How often are new releases made?</dt>
	<dd>&nbsp;</dd>
	
