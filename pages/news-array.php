<?php
/* title:      use R_() for translations, can be null in case @version is set.
 * version:    version number, will autoprepend download link and set a title.
 * date:       release date
 * author:     only used in feed
 * paragraphs: array of <p></p> in the article.
 * */

$news = array (
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
			R_('This release incorporates major changes to the core of the Xfce desktop environment and hopefully succeeds in fulfilling a number of long time requests. Among the most notable updates is that we have ported the entire Xfce core (Thunar, xfdesktop and thunar-volman in particular) from ThunarVFS to GIO, bringing remote filesystems to the Xfce desktop. The panel has been rewritten from scratch and provides better launcher management and improved multi-head support. The list of new panel features is too long to mention in its entirety here. Thanks to the new menu library garcon (formerly known as libxfce4menu, but rewritten once again) we now support menu editing via a third-party menu editor such as Alacarte (we do not ship our own yet). Our core libraries have been streamlined a bit, a good examplle being the newly introduced libxfce4ui library which is meant to replace libxfcegui4.'),
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


