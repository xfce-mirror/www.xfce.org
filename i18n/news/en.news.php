<?php

/* The following bb codes are available:
   [link=/downloads/]download[/link] <- used for internal links, always starting from root (/)
   [url=http://link.com]link[/url]   <- external links (new window)
   [b]bold[/b]
   [i]italic[/i]
   [br]

   All full http://, https://, ftp:// and email adresses are converted into link
*/

/*
 TO ALL TRANSLATORS: NEVER TRANSLATE THIS DOCUMENT, BUT TAKE A LOOK AT THE OTHER TRANSLATED NEWS
 FILES!!!!!!!!!
 */
$date_format = "%e %B %Y";
$posted_by = "Posted by";

$news = array (
/*
    array (
        'id'      => <previous id number + 1>
        'date'    => '<day> <month> <year>',
        'author'  => '<you>',
        'title'   => '<title>',
        'content' => '<stuff you want to say>',
    ),
*/

    array (
        'id'      => 21,
        'date'    => "01 Jan 1970",
        'author'  => "Stephan Arts",
        'title'   => "Xfce 4.6 Final Released",
        'content' => "It has been a while since the world has seen a new major version of Xfce. ".
                     "But after a little more then 2 years of development, Xfce 4.6 is finally a reality.[br]".
                     "[br]".
                     "Many of the changes in this release happened under the ".
                     "hood, changes like:[br]".
                     "- A new settings manager, the old mcs-manager has been ".
                     "replaced by a combination of the D-BUS based xfconf + xfce4-settings[br]".
                     "- A new menu implementation, based on the freedesktop.org menu spec.[br]".
                     "- A new XSETTINGS daemon, supporting many more XSETTINGS then the mcs-manager ".
                     "did in previous versions of Xfce, including the key required to disable event-sounds from Gtk+ >= 2.14[br]".
                     "[br]".
                     "And many changes that where more visible to the user:[br]".
                     "- A new mixer, based on gstreamer it now supports more ".
                     "audion back-ends, and is easier to maintain in future ".
                     "releases.[br]".
                     "- Rubberbanding selection on the desktop, it is now possible to select icons on the desktop by dragging a ".
                     "box around them, just like in the file-manager.[br]".
                     "- NET_WM_PING support in the window-manager, the window-manager will now notify the user if an application ".
                     "does not respond, and kindly asks the user if he wants to terminate the application.[br]".
                     "[br]".
                     "These are just a few highlights, for a complete list of changes, you can take a look ".
                     "[link=/documentation/changelogs/4.6.0]herelink]. ".
                     "Check out the [link=/download#stable]downloads page[/link] for ".
                     "your closest mirror.",
                     "",
    ),
    array (
        'id'      => 20,
        'date'    => "26 jan 2009",
        'author'  => "Stephan Arts",
        'title'   => "Xfce 4.6 Release Candidate 1 (Capybara) released",
        'content' => "Hello everybody,".
                     "[br][br]".
                     "Shortly after Beta 3, we are pleased to announce the first Release Candidate for Xfce 4.6. ".
                     "If no serious bugs are found, this is going to be the state of the final release (plus ".
                     "translation updates). ".
                     "This Release Candidate is the first 4.6 release that comes with graphical installers for ".
                     "the main components and goodies.".
                     "[br][br]".
                     "The release comes with several fixes for critical bugs and crashes found in Beta 3. ".
                     "Unfortunately, there were a few occasions where we had to break the string-freeze in ".
                     "order to improve error reporting (sorry to the translators). ".
                     "[br][br]".
                     "The goodies installer comes with the following goodies:[br]".
                     "- Verve Plugin (0.3.6)[br]".
                     "- Disk Performance Plugin (2.2.0)[br]".
                     "- Keyboard Layout Switcher (0.5.2)[br]".
                     "- Timer Plugin (0.6.1)[br]".
                     "- Date and Time Plugin with Calendar (0.6.1)[br]".
                     "- Places Plugin (1.1.0)[br]".
                     "- Mount devices (0.5.5)[br]".
                     "- Mail Watch Plugin (1.1.0)[br]".
                     "- Notes Plugin (1.6.3)[br]".
                     "- Free Space Checker Plugin (0.4.2)[br]".
                     "- MusicPD Client Plugin (0.3.3)[br]".
                     "- Wavelan Plugin (0.5.4)[br]".
                     "- V4l Radio Plugin (0.3.1)[br]".
                     "- Screenshooter (1.5.0)[br]".
                     "- Xfburn (0.4.0)[br]".
                     "- Taskmanager (0.4.1)[br]".
                     "- Dictionary (0.5.2)[br]".
                     "- Notification Daemon (0.1.0)[br]".
                     "- Ristretto (0.0.21)".
                     "[br][br]".
                     "You can download the source code of the individual main components, ".
                     "a fat tarball containing all of them and the installers ".
                     "[link=/download#unstable]here[/link]. A list of changes can be found on ".
                     "[link=/documentation/changelogs/4.5.99.1]this page[/link]. ".
                     "[br][br]".
                     "Regards,[br]".
                     "The Xfce development team".
                     "",
    ),
    array (
        'id'      => 19,
        'date'    => "14 jan 2009",
        'author'  => "Stephan Arts",
        'title'   => "Xfce 4.6 Beta 3 (Tuco-Tuco) released",
        'content' => "".
                     "I am pleased to announce the release of Xfce 4.6 BETA-3.".
                     "[br][br]".
                     "Just like with the previous BETA, this release comes with a lot of ".
                     "bugfixes but is not expected to be 100% stable. This is why we want to ".
                     "encourage you to test this release to it's limits and tell us what ".
                     "breaks.".
                     "[br][br]".
                     "Ofcourse, as this is a development release, we do not advise anyone to ".
                     "use this on a production environment just yet.".
                     "[br][br]".
                     "With this release, we enter a string-freeze period until the release ".
                     "of 4.6.0 final. This will give the translators a few weeks time to ".
                     "update their translations.".
                     "[br][br]".
                     "You can find a complete list of changes at ".
                     "[link=/documentation/changelogs/4.5.93]this location[/link]. And you ".
                     "can download this release from [link=/download#unstable]here[/link].".
                     "[br][br]".
                     "Have fun,[br]".
                     "The Xfce Development Team".
                     "",
    ),
    array (
        'id'      => 18,
        'date'    => "15 nov 2008",
        'author'  => "Stephan Arts",
        'title'   => "Xfce 4.6 Beta 2 (Hopper) released",
        'content' => "The second Beta was delayed for 2 weeks, but it was worth it.[br]".
                     "every feature we made a freeze-exception for has made it into this release.[br]".
                     "This means a lot of bugs have been fixed this time aswell:".
                     "[br][br]".
                     "- The keyboard-shortcuts for xfwm4 can be configured again. (now with conflict handling)[br]".
                     "- Session-management has been improved, apps will now be automatically restarted if they die unexpected[br]".
                     "- It is now possible to set the desktop wallpaper from the thunar right-click menu[br]".
                     "[br][br]".
                     "This are just a few changes everybody is likely to notice.[br]".
                     "A complete list of changes can be found at ".
                     "[url=http://www.xfce.org/documentation/changelogs/4.5.92]this location[/url].[br]".  
                     "Once again, the translators have done a great job on translating Xfce in their native language.[br]".
                     "We will probably see Xfce 4.6 be translated in more languages then ever before thanks to their hard work.".
                     "[br][br]".
                     "Getting excited? You can download Xfce 4.6 BETA-2 from ".  
                     "[link=download/#unstable]here[/link].".  
                     "We hope you have a lot of fun trying out this new Xfce.".
                     "If you find any issues, don't hesitate to check out our [url=http://bugzilla.xfce.org/]bug tracking system[/url] ".
                     "and look for the bug, or submit a new report if your issues are not already mentioned.".
                     "[br][br]".
                     "Kind regards,[br]".
                     "The Xfce development team",
                     "",
    ),
    array (
        'id'      => 17,
        'date'    => '30 oct 2008',
        'author'  => 'Brian Tarricone',
        'title'   => 'Xfce 4.4.3 released',
        'content' => "Just because we're gearing up to release 4.6.0, it doesn't mean ".
                     "we've forgotten the 4.4 branch.  A bunch of bug fixes had ".
                     "accumulated since 4.4.2, so we have a new release for you.[br]".
                     "[br]".
                     "As usual, the stable branch only contains bug fixes, and no new ".
                     "features.  The list of changes from 4.4.2 is available ".
                     "[link=/documentation/changelogs/4.4.3]here[/link].[br]".
                     "[br]".
                     "Check out the [link=/download#stable]downloads page[/link] for ".
                     "your closest mirror.",
    ),
    array(
        'id'      => 16,
        'date'    => '15 oct 2008',
        'author'  => 'Stephan Arts',
        'title'   => 'Xfce 4.6 BETA-1 (\'Fuzzy\') released',
        'content' => "Hello everybody,".
                     "[br][br]".
                     "We are one month since the release of Xfce 4.6 ALPHA. And now it's time to ".
                     "release the first BETA, codename 'Fuzzy'.".
                     "[br][br]".
                     "A [b]lot[/b] of bugs have been fixed in this release; a few highlights:".
                     "[br]".
                     "- Xfwm4 can now detect if a program is unresponsive. It will show a dialog to let the user kill it.[br]".
                     "- Xfce4-session will start up significantly faster by starting apps in parallel where possible.[br]".
                     "- It is possible to configure the keyboard layout.[br]".
                     "- Toggling event-sounds with libcanberra + gtk 2.14 is now possible (meaning: you can turn them off).".
                     "[br][br]".
                     "And lets not forget the translations, thanks to them Xfce 4.6.0 will be available to a lot of people ".
                     "in their native language. ".
                     "[br][br]".
                     "Of course, this is still a beta. This means that not everything is working perfectly yet.[br]".
                     "A list of known issues can be found [url=http://wiki.xfce.org/releng/4.6/known-issues]here[/url].".
                     "[br][br]".
                     "A complete list of changes can be found at ".
                     "[url=http://www.xfce.org/documentation/changelogs/4.5.91]this location[/url].[br]".  
                     "[br][br]".
                     "Getting excited? You can download Xfce 4.6 BETA-1 from ".  
                     "[link=download/#unstable]here[/link].".  
                     "[br][br]".
                     "We hope you have a lot of fun trying out this new Xfce.".
                     "If you find any issues, don't hesitate to check out our [url=http://bugzilla.xfce.org/]bug tracking system[/url] ".
                     "and look for the bug, or submit a new report if your issues are not already mentioned.".
                     "[br][br]".
                     "Kind regards,[br]".
                     "The Xfce development team",
    ),
    array (
        'id'      => 15,
        'date'    => '14 sep 2008',
        'author'  => 'Stephan Arts, Jannis Pohlmann and Brian Tarricone',
        'title'   => 'Xfce 4.6 ALPHA (\'Pinkie\') released',
        'content' => "Hello everybody,".
                     "[br][br]".
                     "After about 18 months of development, we are pleased to announce the release ".
                     "of Xfce 4.6 ALPHA, codename 'Pinkie'.".
                     "[br][br]".
                     "Xfce 4.6 is going to be the next major release of the Xfce desktop ".
                     "environment. The previous release was 4.4 with the last bugfix release ".
                     "being 4.4.2 released in December 2007.".
                     "[br][br]".
                     "The release schedule for Xfce 4.6 is available to the public on ".
                     "[url=http://wiki.xfce.org/milestones_to_46]the wiki[/url].".
                     "[br][br][br]".  
                     "Xfce 4.6 comes with a lot of new components, some of them replacing old ".
                     "code and some of them being completely new. A preliminary ChangeLog for ".
                     "the alpha release can be found at ".
                     "[url=http://www.xfce.org/documentation/changelogs/4.5.90]this location[/url][br]".  
                     "There is also a page which contains general information about the ".
                     "components of Xfce 4.6 and changes that are supposed to go into 4.6:[br][br]".
                     "[url=http://wiki.xfce.org/general_info_46]http://wiki.xfce.org/general_info_46[/url][br][br]".
                     "As this is a development-release, we do not claim it is perfect. ".
                     "[url=http://wiki.xfce.org/known_issues_46]Here[/url] ".
                     "is a list of issues we have already identified.[br][br]".
                     "Getting excited? You can download xfce 4.6 alpha from ".  
                     "[link=download/#unstable]here[/link].".  
                     "[br][br]".
                     "We hope you have a lot of fun trying out this new Xfce.".
                     "If you find any issues, don't hesitate to check out [url=http://bugzilla.xfce.org/]bug tracking system[/url] ".
                     "and look for the bug, or submit a new report if your issues are not already mentioned.".
                     "[br][br]".
                     "Kind regards,[br]".
                     "The Xfce development team",
    ),
        array (
        'id'      => 14,
        'date'    => '4 mar 2008',
        'author'  => 'Brian Tarricone',
        'title'   => 'Google Summer of Code 2008',
        'content' => "While we haven't been accepted into the program yet, we're applying to participate in the 2008 [url=http://code.google.com/soc/]Google Summer of Code[/url] as a mentoring organization.  Please see [url=http://wiki.xfce.org/gsoc-2008-ideas]our wiki page[/url] for more information, and add your name to the students list if you'd like to work on one of the projects.  Feel free to add to the project ideas list as well.",
    ),
    array (
        'id'      => 13,
        'date'    => '2 dec 2007',
        'author'  => 'Brian Tarricone',
        'title'   => 'Xfce 4.4.2 released',
        'content' => 'Hi all,'.
                     '[br][br]'.
                     "Sorry for the delay, but Xfce 4.4.2 is now available.  It's the second maintenance release in the 4.4 stable series, focusing on fixing bugs and updating translations.".
                     '[br][br]'.
                     'Downloads are available from the [link=/download/]Xfce website[/link].'.
                     '[br][br]'.
                     'An overview of changes is available [link=/documentation/changelogs/4.4.2]in the changelog[/link].'.
                     '[br][br]'.
                     'Enjoy,[br]'.
                     'The Xfce development team',
    ),
    array (
        'id'      => 12,
        'date'    => '10 apr 2007',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.4.1 released',
        'content' => 'Hi all,'.
                     '[br][br]'.
                     'Xfce 4.4.1 has been released. It\'s the first maintenance release of Xfce 4.4 '.
                     '(the current stable branch of Xfce) aimed at fixing important bugs and '.
                     'update translations.'.
                     '[br][br]'.
                     'Download Xfce 4.4.1 from the [link=/download/]Xfce website.[/link]'.
                     '[br][br]'.
                     'An overview of the changes is available in the [link=/documentation/changelogs/4.4.1]changelog[/link].'.
                     '[br][br]'.
                     'Enjoy![br]'.
                     'The Xfce development team.',
    ),
    array (
        'id'      => 11,
        'date'    => '21 jan 2007',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.4.0 released',
        'content' => 'After more than two years of development, Xfce 4.4.0 has just been released.'.
                     '[br]'.
                     'Xfce 4.4 features new tools such as the much awaited Thunar file '.
                     'manager as well as several huge improvements of its core components.'.
                     '[br][br]'.
                     'A visual overview of Xfce 4.4 is available here:[br]'.
                     '[link=/about/tour]http://www.xfce.org/about/tour[/link]'.
                     '[br][br]'.
                     'Download Xfce 4.4 from the new Xfce website:[br]'.
                     '[link=/download]http://www.xfce.org/download[/link]',
    ),
    array (
        'id'      => 10,
        'date'    => '15 jan 2007',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.4 released',
        'content' => 'A new bug fix release of Xfce 4.2 is available. This release is supposed '.
                     'to be the last release for the 4.2 branch. It includes several fixes ported '.
                     'from the current developpment branch.[br]'.
                     'This release should not be confused with the upcoming Xfce 4.4 release, '.
                     'it\'s a bug fix release of the previous stable branch. Get it from '.
                     '[link=/download/]this page[/link].',
    ),
    array (
        'id'      => 9,
        'date'    => '5 nov 2006',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.4 Release Candidate 2 (4.3.99.2) released',
        'content' => 'The second and hopefully last release candidate of the Xfce 4.4 desktop is now '.
                     'available for download.[br]This release focuses primarily on bug fixes and optimizations. '.
                     'Please refer to the [link=/documentation/changelogs/4.3.99.2]changelog[/link] for a list of '.
                     'fixes and changes. Please help us making Xfce 4.4 the best Xfce release ever, download it, '.
                     'try it, help us fixing it! Get it from [link=/download/]this page[/link].',
    ),
    array (
        'id'      => 8,
        'date'    => '3 sep 2006',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.4 Release Candidate 1 (4.3.99.1) released',
        'content' => 'The first release candidate of the upcoming Xfce 4.4 desktop is now available for download. '.
                     'This release fixes a lot of bugs that were present in the second beta release, but also '.
                     'introduces new features, like the trash support in Thunar and xfdesktop. Besides that, this '.
                     'release also includes Xarchiver 0.4.0. See the [link=/documentation/changelogs/4.3.99.1]release notes[/link] '.
                     'for a detailed list of changes between 4.4 beta2 and 4.4 rc1. Please help us making Xfce '.
                     '4.4 the best Xfce release ever, download it, try it, help us fixing it! Get it from '.
                     '[link=/download/]this page[/link].',
    ),
    array (
        'id'      => 7,
        'date'    => '10 aug 2006',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.4 beta 2 (4.3.90.2) released',
        'content' => 'Xfce 4.4 beta2 (4.3.90.2) is now available for download. Besides Mousepad and Thunar, '.
                     'this release also includes the new Xfce archive manager Xarchiver. Other than that a large '.
                     'number of bugs were fixed, and several core components were improved. A detailed overview '.
                     'of the changes between 4.4 beta1 and 4.4 beta2 is available '.
                     '[link=/documentation/changelogs/4.3.90.2]here[/link]. Please help us making '.
                     'Xfce 4.4 the best Xfce release ever, download it, try it, help us fixing it! Get it from '.
                     '[link=/download/]this page[/link].',
    ),
    array (
        'id'      => 6,
        'date'    => '17 apr 2006',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.4 beta 1 (4.3.90.1) released',
        'content' => 'Xfce 4.4 beta1 (4.3.90.1) is now available for download. Xfce 4.4 features new tools such '.
                     'as the much anticipated "Thunar" file manager as well as several huge improvements of its '.
                     'core components. Please help us making Xfce 4.4 the best Xfce release ever, download it, '.
                     'try it, help us fixing it! Get it from this page.',
    ),
    array (
        'id'      => 5,
        'date'    => '15 nov 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.3.2 released',
        'content' => 'A "micro" release to fix a regression in the window manager settings, get it from one of '.
                     'the download locations from this page, the change log for 4.2.3 remains here.',
    ),
    array (
        'id'      => 4,
        'date'    => '08 nov 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.3.1 released',
        'content' => 'A new bug fix release of Xfce is finally available, after almost 6 months! Xfce 4.2.3.1 '.
                     'is available for download from the usual locations listed on this page, and a changelog '.
                     'is available here.',
    ),
    array (
        'id'      => 3,
        'date'    => '17 may 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.2 released',
        'content' => 'Xfce 4.2.2 is available. Download locations can be found on this page, and a changelog '.
                     'is available here.',
    ),
    array (
        'id'      => 2,
        'date'    => '17 mar 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.1.1 released',
        'content' => 'Xfce 4.2.1.1 has been released quickly after 4.2.1. It includes a fix for a bad bug where '.
                     'panel loses its configuration when saving the session in 4.2.1. The Sourceforge server '.
                     'has been updated, and other mirrors will follow soon.',
    ),
    array (
        'id'      => 1,
        'date'    => '16 mar 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.1 released',
        'content' => 'Xfce 4.2.1 is available. This is a maintenance release. Download locations can be found '.
                     'on this page, and a changelog is available here.',
    ),
);
?>
