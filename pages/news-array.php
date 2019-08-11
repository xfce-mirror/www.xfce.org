<?php
/* title:      use R_() for translations, can be null in case @version is set.
 * version:    version number, will autoprepend download link and set a title.
 * date:	release date
 * author:     only used in feed
 * paragraphs: array of <p></p> in the article.
 * */

$news = array (
	array ('title' => R_('Xfce 4.14 released'),
		'version' => null,
		'date' => '12 aug 2019',
		'author' => 'Release Manager',
		'paragraphs' => array (
			R_('Today, after 4 years and 5 months of work, we are pleased to announce the release of the Xfce desktop 4.14, a new stable version that supersedes Xfce 4.12.'),
			R_('In this 4.14 cycle the main goal was to port all core components to Gtk3 (over Gtk2) and GDBus (over D-Bus GLib). Most components also received GObject Introspection support. Along the way we ended up polishing our user experience and introducing quite a few new features and improvements (read below).'),
			R_('The <strong>main highlights of this release</strong> are:'),
			array(
				'<ul>',
					'<li>'.R_('The <a href="https://docs.xfce.org/xfce/xfwm4/start">window manager</a> received a slew of updates and features, including support for VSync (using either Present or OpenGL as backend) to reduce or remove display flickering, HiDPI support, improved GLX support with NVIDIA proprietary/closed source drivers, support for XInput2, various compositor improvements and a new default theme.').'</li>',
					'<li>'.R_('The <a href="https://docs.xfce.org/xfce/xfce4-panel/start">panel</a> got support for RandR\'s primary monitor feature, improved window grouping in the tasklist plugin (better UX, visual group indicator etc), a per-panel “icon-size” setting, a new default clock format and clock format evaluator as well as an improved default panel layout.').'</li>',
					'<li>'.R_('The <a href="https://docs.xfce.org/xfce/xfdesktop/start">desktop</a> now has support for RandR\'s primary monitor feature, an orientation option for icon arrangement, a “Next Background” context menu option to advance the wallpaper and it now syncs the user\'s wallpaper selection to AccountsService.').'</li>',
					'<li>'.R_('A completely new settings dialog to <a href="https://docs.xfce.org/xfce/xfce4-settings/color">manage color profiles</a> has been created. For most users this means out of the box support for color-managed printing (through cupsd) and scanning (through saned). For monitor profiles you will have to install an additional service like xiccd.').'</li>',
					'<li>'.R_('The <a href="https://docs.xfce.org/xfce/xfce4-settings/display">display dialog</a> received a lot of attention during this cycle and a big feature: Users are now able to save and (automatically) restore complete multi-display configurations, which is especially helpful for those who frequently connect their laptop to varying docking stations or setups. Furthermore a lot of time was spent on making the user interface more intuitive and a hidden option was added to support RandR display scaling (configured via Xfconf).').'</li>',
					'<li>'.R_('We added an option to enable Gtk window scaling to the <a href="https://docs.xfce.org/xfce/xfce4-settings/appearance">appearance dialog</a> and a monospace font option as well. However we had to drop theme previews as they didn\'t produce consistent results with Gtk3.').'</li>',
					'<li>'.R_('While we decided to drop splash screens from the <a href="https://docs.xfce.org/xfce/xfce4-session/start">session manager</a>, we added lots of features and fixes instead. Among them are hybrid sleep support, improvements to the default session startup avoiding race conditions, a feature to add and edit autostart entries, a switch user button in the logout dialog and improved session chooser and settings dialogs (the latter with a new tab that shows saved sessions). Furthermore you can now run commands not only "autostart style" at login time, but also when your computer suspends, logs out etc. Finally Gtk applications are now session-managed over DBus and screensavers are also communicated with (e.g. inhibited) over DBus.').'</li>',
					'<li>'.R_('As always, <a href="https://docs.xfce.org/xfce/thunar/start">Thunar</a> - our file manager - received a lot of features and fixes. Among the visible changes are the completely reworked pathbar, support for larger thumbnails as well as support for a "folder.jpg" file altering the folder\'s icon (e.g. for music album covers). Power users will also notice the improved keyboard navigation (zooming, tab navigation). Thunar\'s volume manager has gained Bluray support.').'</li>',
					'<li>'.R_('Our <a href="https://docs.xfce.org/xfce/thunar/tumbler">thumbnailing service tumbler</a> received a lot of fixes and support for the Fujifilm RAF format.').'</li>',
					'<li>'.R_('The <a href="https://docs.xfce.org/xfce/xfce4-power-manager/start">power manager</a> received a lot of bugfixes and some smaller features, including support for the XF86Battery button and for the newly created xfce4-screensaver. The panel plugin also saw several improvements: it can now optionally show the remaining time and/or percentage and it now relies on UPower\'s standard icon names to work with more icon themes out of the box. With LXDE moving on to a QT base the LXDE panel plugin was dropped.').'</li>',
				'</ul>'
			),
			R_('A lot of <strong>applications and plugins</strong> that are part of the Xfce eco-system - often dubbed "goodies" - are part of what makes Xfce great. A lot of those have also seen important changes along the timeline of the 4.14 release. To highlight a few:'),
			array(
				'<ul>',
					'<li>'.R_('Our <a href="https://docs.xfce.org/apps/notifyd/start">notification service</a> has gained support for persistence - in other words: notification logging - and a "Do Not Disturb" mode, which suppresses all notifications. A new panel plugin was created that shows missed notifications (especially helpful during "Do Not Disturb" mode) and gives quick access to toggling "Do Not  Disturb" mode. Finally support for showing notifications on RandR\'s primary monitor was added.').'</li>',
					'<li>'.R_('Our media player <a href="https://docs.xfce.org/apps/parole/start">Parole</a> received improved support for network streams and podcasts, as well as a new "mini mode" and automatic choosing of the best available video backend. Furthermore it also inhibits both screensavers and power managers during video playback now, making sure users don\'t have to go wiggle their mouse periodically while enjoying a movie.').'</li>',
					'<li>'.R_('Our image viewer <a href="https://docs.xfce.org/apps/parole/start">Ristretto</a> has seen various user interface improvements and support for setting the desktop wallpaper. It has recently also seen its first Gtk3-based development release.').'</li>',
					'<li>'.R_('The <a href="https://docs.xfce.org/apps/screenshooter/start">screenshooter</a> now allows users to move the selection rectangle and at the same time displays its width and height. The imgur upload dialog was revamped and the command line allows for more flexibility.').'</li>',
					'<li>'.R_('Our <a href="https://docs.xfce.org/panel-plugins/clipman/start">clipboard manager</a> now has improved keyboard shortcut support (through a port to GtkApplication), improved and more consistent icon sizing as well as a new application icon.').'</li>',
					'<li>'.R_('The <a href="https://docs.xfce.org/apps/pulseaudio-plugin/start">pulseaudio panel plugin</a> received MPRIS2 support to be able to remotely control media players and desktop-wide multimedia key support, essentially rendering xfce4-volumed-pulse a superfluous additional daemon.').'</li>',
				'</ul>',
			),
			R_('There is also a group of <strong>new projects</strong> that have become part of our project. Say hi to:'),
			array(
				'<ul>',
					'<li>'.R_('We finally have our own <a href="https://docs.xfce.org/apps/screensaver/start">screensaver</a> (yes - we realize it\'s 2019 ;)). With lots of features and tight Xfce integration (obviously) it is a great addition to our catalog.').'</li>',
					'<li>'.R_('The status notifier plugin provides a next-generation system tray where applications can show indicators. It supersedes the Ubuntu-centric xfce4-indicator-plugin for most application indicators.').'</li>',
					'<li>'.R_('<a href="https://docs.xfce.org/apps/catfish/start">Catfish file search</a> is like an old friend for most Xfce users - now it\'s officially part of Xfce!').'</li>',
					'<li>'.R_('Finally Panel Profiles, which allows you to backup and restore your panel layouts, has moved under the Xfce umbrella.').'</li>',
				'</ul>',
			),
			R_('An online tour of the changes in Xfce 4.14 can be viewed here:'),
			'<a href="https://xfce.org/about/tour">https://xfce.org/about/tour</a>',
			R_('A detailed overview of the changes between Xfce 4.12 and Xfce 4.14 releases can be found on the following page:'),
			'<a href="https://xfce.org/download/changelogs">https://xfce.org/download/changelogs</a>',
			R_('This release can be downloaded either as a set of individual packages or as a single fat tarball including all these individual versions:'),
			'<a href="http://archive.xfce.org/xfce/4.14">http://archive.xfce.org/xfce/4.14</a>',
			R_('Best regards,<br />The Xfce development team'))
		),
	array ('title' => R_('Xfce 4.12 released'),
		'version' => null,
		'date' => '28 feb 2015',
		'author' => 'Release Manager',
		'paragraphs' => array (
			R_('Xfce 4.12 is be the best release ever (yes, we like to party!)!'),
			R_('Source : Internet comments.'),
			R_('Today, after 2 years and 10 months of work, we are pleased to announce the release of the Xfce desktop 4.12, a new stable version that supersedes Xfce 4.10.'),
			R_('This long period can only be explained by how awesome Xfce 4.10 was. But as all things, it needed some refreshing -  and for that we saw lots of new contributors providing valuable feedback, features and bugfixes. As always, Xfce follows its steady pace of evolution without revolution that seems to match our users\' needs.'),
			R_('In this 4.12 cycle, we mainly focused on polishing our user experience on the desktop and window manager, and on updating some components to take advantage of newly available technologies.'),
			R_('The main highlights of this release are:'),
			array(
				'<ul>',
					'<li>'.R_('The window manager gained a new themable Alt+Tab dialog with optional windows preview and a list mode. Initial Client side decoration support was implemented, window tiling mode was improved providing support for corner-tiling, and a new zooming mode was added. A HiDPI Xfwm theme was also added.').'</li>',
					'<li>'.R_('The panel can now intelligently hide itself, supports Gtk3 plugins, and saw lots of its third-party plugins updated to take full advantage of the features added in 4.10.').'</li>',
					'<li>'.R_('The desktop has a new wallpaper settings dialog, per workspace wallpaper support, and better multi-monitor handling. It also supports displaying folder cover art and emblems on icons now.').'</li>',
					'<li>'.R_('Our session manager was updated to use logind and/or upower if available for hibernate/suspend support. For portability and to respect our users\' choices, fallback modes were implemented relying on os-specific backends.').'</li>',
					'<li>'.R_('Support for multi-monitor use was improved in a new display settings dialog and a quick setup popup on monitor plugging.').'</li>',
					'<li>'.R_('The appearance dialog now showcases previews for icons and themes.').'</li>',
					'<li>'.R_('Xfsettingsd now supports libinput.').'</li>',
					'<li>'.R_('Power management was not forgotten: A new panel plugin was created, logind/upower support was added to handle battery/lid/brightness events, and locking via light-locker was implemented. The settings dialog was also revamped, and support for X11 screenblanking was added.').'</li>',
					'<li>'.R_('Our file manager, the beloved Thunar, saw an insane amount of improvements: tab support, tons of bug fixes, speed-ups, key shortcuts for custom actions, better naming of file copies and links, nice freespace bar in properties, tweaks for the renamer and other dialogs, improved keyboard navigation, fixes for the treeview pane, better wallpaper support, Gtk3 bookmarks support, multiple file properties... need we say more?').'</li>',
					'<li>'.R_('To prepare the future of Xfce with Gtk3, which no longer requires theme engines, we are stopping the development of our Gtk theme engine, and dropping our Gtk3 engine - theme makers, please update your themes  to CSS if you want them to work on the next Xfce version.').'</li>',
					'<li>'.R_('Due to gstreamer1.0 having dropped the mixer-interface entirely, and xfce4-mixer and xfce4-volumed relying on this interface with gstreamer0.10, our mixer application and volume daemon cannot be ported to 1.0 and are consequently not maintained anymore.').'</li>',
				'</ul>'
			),
			R_('Xfce wouldn\'t be what it is right now without all its goodies. In this area, we also saw a flurry of activity, most notably:'),
			array(
				'<ul>',
					'<li>'.R_('Xfburn gained BluRay Disc burning support.').'</li>',
					'<li>'.R_('Task manager UI was totally revamped, and got ported to Gtk3.').'</li>',
					'<li>'.R_('Parole\'s UI was totally redone, parts of it rewritten with many features added. Furthermore it was ported to Gtk3 and gstreamer1.0.').'</li>',
					'<li>'.R_('Mousepad was totally rewritten and got an initial port to Gtk3.').'</li>',
					'<li>'.R_('Imgur.com support was added to the screenshooter.').'</li>',
					'<li>'.R_('A new GNOME-Shell-like dashboard named xfdashboard is now available.').'</li>',
					'<li>'.R_('A new alternative menu for the panel named whiskermenu was added.').'</li>',
					'<li>'.R_('The GNOME2 hardware monitor plugin was ported to our panel.').'</li>',
					'<li>'.R_('Weather plugin got a totally new user interface with powerful customization options and provides tons of detailed information.').'</li>',
					'<li>'.R_('Eyes plugin uses 3D coordinates to calculate its eye position, so even more sometimes scary, sometimes funny eyes will spy on you!').'</li>',
					'<li>'.R_('Netload plugin works with the new udev net interface names and can be configured to show transfer rates in the panel.').'</li>',
					'<li>'.R_('Clipboard manager plugin optionally displays a QR code.').'</li>',
					'<li>'.R_('Cpufreq plugin now supports the intel pstate driver and can adapt better for different panel sizes and information displayed.').'</li>',
					'<li>'.R_('Nearly all plugins have been improved to give the same look and feel and to support the new deskbar panel mode.').'</li>',
				'</ul>',
			),
			R_('An online tour of the changes in Xfce 4.12 can be viewed here:'),
			'<a href="https://xfce.org/about/tour">https://xfce.org/about/tour</a>',
			R_('A detailed overview of the changes between Xfce 4.10 and Xfce 4.12 releases can be found on the following page:'),
			'<a href="https://xfce.org/download/changelogs">https://xfce.org/download/changelogs</a>',
			R_('This release can be downloaded either as a set of individual packages or as a single fat tarball including all these individual versions:'),
			'<a href="http://archive.xfce.org/xfce/4.12">http://archive.xfce.org/xfce/4.12</a>',
			R_('A warm thank you all the contributors, translators and packagers for your efforts in making this release possible. We would also like to thank our fantastic users and occasional contributors who submitted bug reports, helped us find issues and sometimes provided patches. We are currently reviewing all patches sent to us and will include many more fixes to Xfce in the next release. We would also like to thank the many people who donated money to our project via <a href="https://www.bountysource.com/teams/xfce">Bounty Source</a>. This will help us meet and hack on Xfce in the future!'),
			R_('As always, we welcome everyone who would like to contribute to the development of Xfce! You can either <a href="https://docs.xfce.org/xfce/building">test Xfce</a> and <a href="https://bugzilla.xfce.org">report bugs</a>, you can help us with <a href="https://www.transifex.com/tag/xfce/">translations</a> and <a href="https://docs.xfce.org">documentation</a>, with <a href="https://wiki.xfce.org/design/start">usability and user experience</a> by packaging Xfce into your distribution, and by <a href="https://wiki.xfce.org/dev/howto/contribute">submitting patches</a> or entirely new features! You can get in touch with us on the Freenode IRC channel #xfce-dev and our <a href="https://mail.xfce.org/mailman/listinfo/xfce4-dev">mailing list</a>.'),
			R_('Best regards,<br />The Xfce development team'))
		),
	array ('title' => R_('Xfce 4.10 released'),
		'version' => null,
		'date' => '28 apr 2012',
		'author' => 'Release Manager',
		'paragraphs' => array (
			R_('Today, after 1 year and 4 months of work, we are pleased to announce the release of the Xfce desktop 4.10, a new stable version that supersedes Xfce 4.8.'),
			R_('In the 4.10 cycle we mainly focused on polishing the desktop and improving the user experience in various ways. Highlights of this release are:'),
			'<ul>'.
				'<li>'. R_('A new application finder that has been completely rewritten and combines the functionality of the old xfce4-appfinder and xfrun4.') .'</li>'.
				'<li>'. R_('The panel now has an alternative vertical display mode (a deskbar). What is more, panel plugins can be arranged in multiple rows, which is particularly useful in the deskbar mode.') .'</li>'.
				'<li>'. R_('A new MIME type editor that allows you to easily change applications used for opening different file types. The mouse and touchpad settings dialog and the settings editor were extended in terms of functionality. The former now supports tablets in a much better way.') .'</li>'.
				'<li>'. R_('It is now possible to launch applications and open files on the desktop with a single click of the mouse. In addition, the 4.10 desktop can display thumbnails and automatically advance through the wallpaper list.') .'</li>'.
				'<li>'. R_('The window manager can be configured to tile windows when dragging them to the screen edges. The tab window (Alt+Tab) supports more flexible theming and cursor key navigation.') .'</li>'.
			'</ul>',
			R_('An online tour of the changes in Xfce 4.10 can be viewed here:'),
			'<a href="https://xfce.org/about/tour">https://xfce.org/about/tour</a>',
			R_('A detailed overview of the changes compared to Xfce 4.8 and Xfce 4.10 preview releases can be found on the following page:'),
			'<a href="https://xfce.org/download/changelogs">https://xfce.org/download/changelogs</a>',
			R_('This release can be downloaded either as a set of individual packages or as a single fat tarball including all these individual versions:'),
			'<a href="http://archive.xfce.org/xfce/4.10">http://archive.xfce.org/xfce/4.10</a>',
			R_('Thank you all the contributors, bug reporters, as well as translators and packagers for your efforts in making this release possible.'),
			R_('Best regards,<br />The Xfce development team'))
		),
	array ('title' => R_('Xfce 4.10pre2 released'),
		'version' => '4.10pre2',
		'date' => '14 apr 2012',
		'author' => 'Release Manager',
		'paragraphs' => array (
			R_('The Xfce development team is proud to announce the second preview release for Xfce 4.10. Together with this preview release, the Xfce project announces the string and code (only critical bug fixes or regressions) freeze for the final 4.10 release which is set to be pushed out to the world on April 28th, 2012.'),
			R_('This release incorporates some new features like improved responsiveness of file operations in Thunar and tiling improvements in Xfwm4. Everything else is bug fixes and a _lot_ of translation updates.'),
			R_('We hope you will enjoy this release. Please give us feedback by sharing your thoughts, blogging, tweeting or by filing bug reports! With your help, 4.10 will be the best release ever (at least until 4.12)!'),
			R_('Kind regards and thanks to everyone who has contributed to this release,<br />The Xfce development team'))
		),
	array ('title' => R_('Xfce 4.10pre1 released'),
		'version' => '4.10pre1',
		'date' => '1 apr 2012',
		'author' => 'Release Manager',
		'paragraphs' => array (
			R_('The Xfce development team is proud to announce the first preview release for Xfce 4.10. Together with this preview release, the Xfce project announces the feature freeze for the final 4.10 release which is set to be pushed out to the world on April 28th, 2012.'),
			R_('This release incorporates major changes to the core of the Xfce desktop environment and hopefully succeeds in fulfilling a number of long time requests. Among the most notable updates is the new application finder that merges the functionality of the old appfinder and xfrun4. The Panel also has a new vertical mode [aka Deskbar] for better space usage on wide-screen monitors and a new actions plugin. On the settings side the settings helper is integrated in xfsettingsd, saving 1 running process. There is also a reworked settings dialog with categories and pluggable dialogs enabled by default. Basic Synaptics and Wacom settings in the Mouse settings and a new MIME-Type editor. Thunar gained a more polished layout to reduce space usage and more responsive interaction with the thumbnail generator. Because we have not decided on how to merge the desktop functionality into Thunar yet, Xfdesktop has instead received various improvements, including single-click support, desktop icon thumbnails and better pasting of files. The Session Manager has improved power management code, tips have been removed and cleanup sessions from the interface. Last but not least, the Window Manager now has support for tiling windows and arrow key navigation in the task switcher.'),
			R_('Another big change for users is the removal of user documentation of the packages and introduction of <a href="https://docs.xfce.org">docs.xfce.org</a>. The reason for this change is the limited contribution of documentation since Xfce 4.8, so we hope the wiki will attract more contributors. The help buttons in the interface still work, but you\'ll be asked to open the documentation website in your web browser.'),
			R_('Furthermore we dropped xfce-utils. Its content has either been removed or moved to other Xfce packages. All other dependency changes are listed in the 4.10pre1 ChangeLog. The Xfce core also gained a couple of new components because we think they are critical for a minimal desktop: xfce4-power-manager (power management), tumbler (thumbnail generation for Thunar and other components), garcon (menu library, was already a dependency in 4.8), thunar-volman (volume manager for Thunar).'),
			R_('Of course translations also improved a lot, thanks to the amazing work of our translation teams.'),
			R_('We hope you will enjoy this release. Please give us feedback by sharing your thoughts, blogging, tweeting, denting or by filing bug reports. With your help, 4.10 will be the best release ever (at least until 4.12)!'),
			R_('Kind regards and thanks to everyone who has contributed to this release,<br />The Xfce development team'))
		),
	array ( 'title' => R_('Xfce 4.8 released'),
		'version' => null, /* no auto download links */
		'date' => '16 jan 2011',
		'author' => 'Release Manager',
		'paragraphs' => array (
			R_('Today, after almost two years of work, we have the special pleasure of announcing the much awaited release of Xfce 4.8, the new stable version that supersedes Xfce 4.6.'),
			R_('We hope that everyone will enjoy this release as much as we do. Sadly, this will not be the case as the folks using any of the BSD systems will notice a sudden loss of features. We think that this announcement is a good opportunity to express our disagreement with the recent "Linux-only" developments in the open source ecosystem, especially with regards to the utilities we need in desktop environments.'),
			R_('Xfce 4.8 is our attempt to update the Xfce code base to all the new desktop frameworks that were introduced in the past few years. We hope that our efforts to drop pieces like ThunarVFS and HAL with GIO, udev, ConsoleKit and PolicyKit will help bringing the Xfce desktop to modern distributions.'),
			R_('With Xfce 4.8 our users will be able to browse remote shares using a variety of protocols (SFTP, SMB, FTP and many more). The window clutter has been reduced by merging all file progress dialogs into a single one.'),
			R_('Our panel application has been rewritten, thereby improving positioning, transparency, item and launcher management. It also introduces a new menu plugin to view directories. Its plugin framework remains compatible with 4.6 plugins.'),
			R_('We also improved our settings dialogs. The display configuration dialog now supports RandR 1.2, detects screens automatically and allows our users to pick their favorite resolution, refresh rate, rotation. Screens can be configured to either work in clone mode or be placed next to each other. Keyboard selection has become easier and more user-friendly. Also, the manual settings editor has been updated to be more functional.'),
			R_('Aside from the features implemented in Xfce, the 4.8 development cycle brought us a bunch of other goodies. For the first time we had a serious release strategy formed after the "Xfce Release and Development Model" developed at the Ubuntu Desktop Summit in May 2009. A new web application made release management a lot easier. We worked hard on improving the situation of Xfce translators which led us to setting up our own Transifex server. Something else you will hopefully notice is that our server and mirroring infrastructure has been improved so that our servers hopefully will not suddenly surrender shortly after this release announcement.'),
			R_('There is a lot more to discover and we hope a lot of you will give Xfce 4.8 a try! There is a brief tour online on'),
			'<a href="https://xfce.org/about/tour48">https://xfce.org/about/tour48</a>',
			R_('A summary of the changes since the 4.8pre3 preview release is available on the following URL (it also includes links to the changes introduced in all preview releases):'),
			'<a href="https://xfce.org/download/changelogs/4.8">https://xfce.org/download/changelogs/4.8</a>',
			R_('The release can be downloaded either as individual releases or as a fat tarball including all these individual versions:'),
			'<a href="http://archive.xfce.org/xfce/4.8/">http://archive.xfce.org/xfce/4.8/</a>',
			R_('2011 has just begun and we are already planning for the future. The 4.10 schedule will be worked on soon and hopefully, we will be able to turn Xfce into a non-profit organization at this year\'s FOSDEM, so stay tuned!'),
			R_('But until then we hope you will enjoy today\'s release and join us in celebrating. Thanks go out to all our contributors, bug reporters as well as the awesome efforts of our translators and packagers. '),
			R_('Best regards,<br />The Xfce development team'))
		),
	array ( 'title' => null,
		'version' => '4.8pre3',
		'date' => '2 jan 2011',
		'author' => 'Release Manager',
		'paragraphs' => array (
			R_('Today we are pleased to announce the third and hopefully final preview release of Xfce 4.8 which is set to be pushed out to the public on January 16th, 2011. Compared to Xfce 4.8pre2 this release mostly features translation updates and bug fixes.'),
			R_('With christmas and new year\'s eve between 4.8pre2 and 4.8pre3 it comes as no surprise that for most components only a few issues were tackled.'),
			R_('Among other things we updated the default keyboard shortcuts to include monitor keys. The status icon of the file manager\'s progress dialog is now properly hidden when the dialog is destroyed. It\'s wallpaper plugin is now capable of handling filenames with spaces. The environment variables of commands launched from the Xfce run dialog were not set properly, so we fixed that so that commands launched from the dialog always inherit the environment of the Xfce session.'),
			R_('We also made the --reboot and --halt parameters of xfce4-session-logout work again which previously simply logged out the active user. In order to avoid a race condition at session startup and in order to speed things up a little more we no longer use xrdb to update xft and cursor settings and instead, update the related XSETTINGS properties ourselves.'),
			R_('In the window manager xfwm4, we aligned the time period required for a double click with that of normal applications. Via the hidden option /general/mousewheel_rollup one can now disable windows being rolled up via the mouse wheel. The window manager now also properly handles resolution changes in fullscreen windows like those appearing in games. Xfwm4\'s application switcher now only appears once in cloned mode.'),
			R_('This may sound like a few useful fixes but it\'s nothing compared to the amount of work that went into the new Xfce panel once again. Around 20+ known bugs and regressions were fixed. Here is a short excerpt of the complete changelog: Translation domains were fixed for external plugins, plugins can be reordered with DND again, double-clicking items in the item editor shows their preferences, dragging items to the item editor dialog removes them from the panel again, tasklist windows can now be filtered by monitor. Another issue that appeared recently and has now been fixed is the icon sizing in the notification area, also known as the systray.'),
			R_('Xfce 4.8pre3 also features a lot of translation updates, as can be seen in the complete changelog.'),
			R_('Since we\'re following the Xfce <a href="/about/releasemodel">release model</a> for 4.8, we\'d normally announce code freeze and the creation of early lifecycle support branches today. We decided against this because there are not enough people active to take care of all this at the moment. So we will continue fixing bugs in master branches as we did between 4.8pre2 and 4.8pre3.'))
		),
	array ( 'title' => null,
		'version' => '4.8pre2',
		'date' => '5 dec 2010',
		'author' => 'Release Manager',
		'paragraphs' => array (
			R_('We are pleased to announce the second preview release of Xfce 4.8. This release marks the beginning of the string freeze. From today on until the final release, strings may no longer be changed in the master branch of Xfce core components. This will help translators to prepare their translations for the final release scheduled on January 16th, 2011.'),
			R_('For this release we focused on fixing bugs in all Xfce components. We managed to close a great number of them thanks to all the persons who reported them and tested proposed fixes quickly.'),
			R_('A few minor panel features were added despite feature freeze. We also managed to work on two long time requests: proper support for editing the application menu with menu editors (Alacarte being the one that we tested) and integration with the Compiz viewport. Of course, this release also features a lot of new and improved translations thanks to the amazing work of our translation teams.'))
		),
	array ( 'title' => null,
		'version' => '4.8pre1',
		'date' => '7 nov 2010',
		'author' => 'Release Manager',
		'paragraphs' => array (
			R_('The Xfce development team is proud to announce the first preview release for Xfce 4.8. Together with this preview release, the Xfce project announces the feature freeze for the final 4.8 release which is set to be pushed out to the world on January 16th, 2011.'),
			R_('This release incorporates major changes to the core of the Xfce desktop environment and hopefully succeeds in fulfilling a number of long time requests. Among the most notable updates is that we have ported the entire Xfce core (Thunar, xfdesktop and thunar-volman in particular) from ThunarVFS to GIO, bringing remote filesystems to the Xfce desktop. The panel has been rewritten from scratch and provides better launcher management and improved multi-head support. The list of new panel features is too long to mention in its entirety here. Thanks to the new menu library garcon (formerly known as libxfce4menu, but rewritten once again) we now support menu editing via a third-party menu editor such as Alacarte (we do not ship our own yet). Our core libraries have been streamlined a bit, a good example being the newly introduced libxfce4ui library which is meant to replace libxfcegui4.'),
			R_('Perhaps the most important achievement we will accomplish with Xfce 4.8 is that, despite suffering from the small size of the development team from time to time, the core of the desktop environment has been aligned with today\'s desktop technologies such as GIO, ConsoleKit, PolicyKit, udev and many more. A lot of old cruft like has been stripped from the core as well, as has happened with HAL and ThunarVFS (which is still around for compatibility reasons).'),
			R_('Thanks to the awesome Transifex translation platform, our language teams have been able to update their translations at an incredible pace. Please include them when praising this release!'))
	),
	array ( 'title' => null,
		'version' => '4.6.2',
		'date' => '23 may 2010',
		'author' => 'Release Manager',
		'paragraphs' => array (
			R_('The second bugfix-release of xfce 4.6 has been released.').
			R_('This release features a lot of updated translations and fixes some bugs or regressions with new GTK+ versions.'))
		),
	array ( 'title' => null,
		'version' => '4.6.1',
		'date' => '19 apr 2009',
		'author' => 'Release Manager',
		'paragraphs' => array (
			R_('The first bugfix-release of xfce 4.6 has been released.'),
			R_('Thanks to all the people who have been using xfce 4.6 and took the time and effort to submit bugreports for stuff that wasn\'t quite working the way it is supposed to. We have been able to fix several issues during the past few weeks.'),
			R_('thanks to all the translators, several translations have been improved and completed since the release of 4.6.0.'))
		),
	array ( 'title' => null,
		'version' => '4.6.0',
		'date' => '27 feb 2009',
		'author' => 'Release Manager',
		'paragraphs' => array (
			R_('After more than two years of development, Xfce 4.6.0 has just been released.'),
			R_('Xfce 4.6 features a new configuration backend, a new settings manager, a brand new sound mixer, and several huge improvements to the session manager and the rest of Xfce\'s core components. A list of all the changes since the last release candidate can be found on this page.'),
			R_('A visual overview of Xfce 4.6 is available <a href="/about/tour46">here</a>.'))
		)
)
?>
