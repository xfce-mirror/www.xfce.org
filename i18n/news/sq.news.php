<?php

/* The following bb codes are available:
   [link=/downloads/]download[/link] <- used for internal links, always starting from root (/)
   [url=http://link.com]link[/url]   <- external links (new window)
   [b]bold[/b]
   [i]italic[/i]
   [br]

   All full http://, https://, ftp:// and email adresses are converted into link
*/
$date_format = "%e %B %Y";
$posted_by = "Postuar nga";

$news_translated = array (
/*
    array (
        'title'   => '<title>',
        'content' => '<stuff you want to say>',
    ),
*/
    => 11 array (
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
    => 10 array (
        'title'   => 'Xfce 4.2.4 released',
        'content' => 'A new bug fix release of Xfce 4.2 is available. This release is supposed '.
                     'to be the last release for the 4.2 branch. It includes several fixes ported '.
                     'from the current developpment branch.[br]'.
                     'This release should not be confused with the upcoming Xfce 4.4 release, '.
                     'it\'s a bug fix release of the previous stable branch. Get it from '.
                     '[link=/download/]this page[/link].',
    ),
    9 => array (
        'title'   => 'Qarkulloi Xfce 4.4 Release Candidate 2 (4.3.99.2)',
        'content' => 'Kandidati i dytë për qarkullim dhe shpresojmë i fundit për desktopin Xfce 4.4 tani është '.
                     'e mundur të shkarkohet.[br]Ky version përqëndrohet së pari ne ndreqje të metash dhe përmirësim. '.
                     'Për një listë të ndreqjeve dhe ndryshimeve, ju lutemi shihni [link=/documentation/changelogs/4.3.99.2]regjistrin e ndryshimeve[/link]'.
                     'Ju lutemi na ndihmoni që ta bëjmë Xfce 4.4 versionin më të mirë deri më sot për Xfce-në, shkarkojeni, '.
                     'provojeni, na ndihmoni ta ndreqim! Merreni prej [link=/download/]kësaj faqeje[/link].',
    ),
    8 => array (
        'title'   => 'Qarkulloi Xfce 4.4 Release Candidate 1 (4.3.99.1)',
        'content' => 'Kandidati i parë për qarkullim i desktopit të ardhshëm Xfce 4.4 tani është e mundur të shkarkohet. '.
                     'Ky version ndreq plot të meta që ishin të pranishme te qarkullimi i dytë beta, por po aq edhe '.
                     'fut anë të reja, si mbulim për hedhurina në Thunar dhe xfdesktop. Përtej këtyre, ky '.
                     'version përfshin gjithashtu Xarchiver 0.4.0. Shihni [link=/documentation/changelogs/4.3.99.1]shënime versioni[/link] '.
                     'për një listë të hollësishme të ndryshimeve nga 4.4 beta2 te 4.4 rc1. Ju lutemi na ndihmoni që ta '.
                     'bëjmë Xfce 4.4 versionin më të mirë deri më sot për Xfce-në, shkarkojeni, provojeni, na ndihmoni'.
                     ' ta ndreqim! Merreni prej [link=/download/]kësaj faqeje[/link].',
    ),
    7 => array (
        'title'   => 'Qarkulloi Xfce 4.4 beta 2 (4.3.90.2)',
        'content' => 'Xfce 4.4 beta2 (4.3.90.2) tani është e mundur të shkarkohet. Përtej Mousepad-it dhe Thunar-it, '.
                     'ky version përfshin gjithashtu përgjegjësin e ri të arkivave për Xfce-në, Xarchiver. Tjetër veç kësaj, u ndreqën '.
                     'një numër i madh të metash, dhe u përmirësuan disa prej prej përbërësve themelorë. Një përshkrim i hollësishëm '.
                     'i ndryshimeve midis 4.4 beta1 dhe 4.4 beta2 mund të kihet prej '.
                     '[link=/documentation/changelogs/4.3.90.2]këtu[/link]. Ju lutemi na ndihmoni që ta bëjmë '.
                     'Xfce 4.4 versionin më të mirë deri më sot për Xfce-në, shkarkojeni, provojeni, na ndihmoni ta ndreqim! '.
                     'Merreni prej [link=/download/]kësaj faqeje[/link].',
    ),
    6 => array (
        'title'   => 'Qarkulloi Xfce 4.4 beta 1 (4.3.90.1)',
        'content' => 'Xfce 4.4 beta1 (4.3.90.1) tani është e mundur të shkarkohet. Xfce 4.4 sjell mjete të reja si '.
                     'i shumëprituri përgjegjës kartelash "Thunar" e po ashtu edhe disa përmirësime shumë të mëdhaja në '.
                     'përbërësit e vet thelbësorë. Ju lutemi na ndihmoni që ta bëjmë Xfce 4.4 versionin më të mirë për Xfce-në, '.
                     'shkarkojeni, provojeni, na ndihmoni ta ndreqim! Merreni prej kësaj faqeje.',
    ),
    5 => array (
        'title'   => 'Qarkulloi Xfce 4.2.3.2',
        'content' => 'Një mikroqarkullim për të ndrequr një hap prapa në rregullimet për përgjegjësin e dritareve, merreni '.
                     'prej një prej vendeve për shkarkim te kjo faqe, regjistri i ndryshimeve për 4.2.3 mbetet këtu.',
    ),
    4 => array (
        'title'   => 'Qarkulloi 4.2.3.1',
        'content' => 'Një qarkullim i ri me ndreqje të metash për Xfce mundet të kihet më së fundi, pas gati pothuaj 6 muajsh! Xfce 4.2.3.1 '.
                     'tani mund të shkarkohet prej vendeve të zakonshme të radhitur në këtë faqe, dhe një regjistër ndryshimesh '.
                     'mund të kihet prej këtu.',
    ),
    3 => array (
        'title'   => 'Qarkulloi Xfce 4.2.2',
        'content' => 'Xfce 4.2.2 është i passhëm. Vendet për shkarkim mund t\'i gjeni në këtë faqe, dhe një regjistër ndryshimesh '.
                     'mund të kihet prej këtu.',
    ),
    2 => array (
        'title'   => 'Qarkulloi Xfce 4.2.1.1',
        'content' => 'Xfce 4.2.1.1 qarkulloi shpejt pas 4.2.1. përfshin një ndreqje për një kandërr të shpifur për '.
                     'shkak të të cilit paneli humb formësimin e vet kur ruhet sesioni nën 4.2.1. Shërbyesi te Sourceforge '.
                     'u përditësua, dhe pasqyra të tjera do ta pasojnë së shpejti.',
    ),
    1 => array (
        'title'   => 'Qarkulloi 4.2.1',
        'content' => 'Xfce 4.2.1 mund të kihet tani. Ky është një version mirëmbajtje. Vendndodhjet për shkarkim mund të gjenden '.
                     'në këtë faqe, dhe po ashtu edhe një regjistër ndryshimesh.',
    ),
);
?>
