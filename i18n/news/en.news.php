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
