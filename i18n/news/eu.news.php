<?php

/* The following bb codes are available:
   [link=/downloads/]download[/link] <- used for internal links, always starting from root (/)
   [url=http://link.com]link[/url]   <- external links (new window)
   [b]bold[/b]
   [i]italic[/i]
   [br]

   All full http://, https://, ftp:// and email adresses are converted into link
*/

$news = array (
/*
    array (
        'date'    => '<day> <month> <year>',
        'author'  => '',
        'title'   => '',
        'content' => '',
    ),
*/
    array (
        'date'    => '5 nov 2006',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.4 2. Argitaratze Hautagaia (4.3.99.2) argitaraturik',
        'content' => 'Xfce 4.4 idazmahaiaren bigarren eta ziurrenik azkenengo argitaratzee hautagaia orain '.
		     'Deskargatzeko eskuragarri.[br]Bertsio hau gehienbat errore konponketa eta optimizazioari '.
		     'begira egin da. Begiratu [link=/documentation/changelogs/4.3.99.2]Aldaketa erregistroa[/link]'.
		     ' aldaketa eta konponketa guztien zerrendarako. Mesedez lagun iezaguzu Xfce 4.4 inoiz egon '.
		     'den bertsio hoberena izan dadin, proba ezazu eta konpontzen lagundu! [link=/download/]Orrialde'.
		     ' Honen[/link] bidez eskuratu dezakezu.',
    ),
    array (
        'date'    => '3 sep 2006',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.4 1. Argitaratze Hautagaia (4.3.99.1) argitaraturik',
        'content' => 'Xfce 4.4 idazmahaiaren lehenengo argitaratze hautagaia deskargatzeko eskuragarri. '.
		     'Bertsio honek errore bigarren beta bertsioan zeuden errore asko konpontzen ditu, baina '.
		     'baita ezaugarri berriak gehitu, fdesktop eta Thunar-en zakarrontzi onarpena adibidez. Honez '.
		     'gain bertsio honek Xarchiver 0.4.0 dakar. Begiratu [link=/documentation/changelogs/4.3.99.1]Aldaketa'.
		     ' erregistroa[/link]4.4 beta2 eta RC1 arteko  aldaketa eta konponketa guztien zerrendarako. '.
		     'Mesedez lagun iezaguzu Xfce 4.4 inoiz egon den bertsio hoberena izan dadin, proba ezazu eta '.
		     'konpontzen lagundu! [link=/download/]Orrialde Honen[/link] bidez eskuratu dezakezu.',
    ),
    array (
        'date'    => '10 aug 2006',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.4 beta 2 (4.3.90.2) argitaraturik',
        'content' => 'Xfce 4.4 beta2 (4.3.90.2) deskargatzeko eskuragarri dago. Mousepad eta Thunar-ez gain, '.
		     'bertsio honek Xarchiver Xfce pakete kudeatzaile berria dakar. Errore konponketa eta '.
		     'muin osagai askotan hobekuntzak ere ditu. Begiratu [link=/documentation/changelogs/4.3.90.2]'.
		     'Aldaketa erregistroa[/link] 4.4 beta1 eta 4.4 beta2 arteko  aldaketa eta konponketa guztien '.
		     'zerrendarako. Mesedez lagun iezaguzu Xfce 4.4 inoiz egon den bertsio hoberena izan dadin, '.
		     'proba ezazu eta konpontzen lagundu! [link=/download/]Orrialde Honen[/link] bidez eskuratu dezakezu.',
    ),
    array (
        'date'    => '17 apr 2006',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.4 beta 1 (4.3.90.1) argitaraturik',
        'content' => 'Xfce 4.4 beta1 (4.3.90.1) deskargatzeko eskuragarri dago. Xfce 4.4-ak lanabes berriak ditu '.
		     'hainbeste itxoindako "thunar" fitxategi kudeatzailea edo muin osagaietan hobekuntza sakonak. '.
		     'Mesedez lagun iezaguzu Xfce 4.4 inoiz egon den bertsio hoberena izan dadin, proba ',
		     'ezazu eta konpontzen lagundu!',
    ),
    array (
        'date'    => '15 nov 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.3.2 argitaraturik',
        'content' => '"Micro" argitaratze bat leiho kudeatzaile ezarpenetan egondako atzerapen bat konpontzeko. '.
		     'Eskuratu ezazu orri honetatik, 4.2.3-aren aldaketa erregistro ere hemen dago.',
    ),
    array (
        'date'    => '08 nov 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.3.1 argitaraturik',
        'content' => 'Xfce-ren errore konponketa bertsio berria azkenik eskuragarri,ia 6 hilabete ondoren!. '.
		     'Xfce 4.2.3.1 orrialde honetan zerrendaturiko betiko lekuetan aurki dezakezu, eta aldaketa '.
 	 	     'erregistroa hemen. ',
    ),
    array (
        'date'    => '17 may 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.2 argitaraturik',
        'content' => 'Xfce 4.2.2 eskuragarri dago. Deskarga lekuak orrialde honetan aurki daitezke , eta aldaketa '.
                     'erregistroa hemen. ',
    ),
    array (
        'date'    => '17 mar 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.1.1 argitaraturik',
        'content' => 'Xfce 4.2.1.1 bertsioa 4.2.1-aren ondoren oso bizkor kaleratua izan da. Bertan saioa gordetzerakoan '.
		     '4.2.1 bertsioan panelak konfigurazioa galdu arazten zuen errorea konpondu da. Sourceforge '.
		     'zerbitzaria eguneratua izan da eta beste ispiluak aurki jarraituko diote.',
    ),
    array (
        'date'    => '16 mar 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.1 argitaraturik',
        'content' => 'Xfce 4.2.1 eskuragarri dago. Hau mantenu bertsio bat da. Deskarga lekuak orrialde honetan aurki '.
		     'daitezke eta aldaketa erregistroa hemen.',

    ),
);
?>
