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
$posted_by = "Posted by";

$news_translated = array (
/*
    array (
        'id'      => <previous id number + 1>
        'date'    => '<day> <month> <year>',
        'author'  => '<you>',
        'title'   => '<title>',
        'content' => '<stuff you want to say>',
    ),
*/
  22 => array (
        'title'   => "Xfce 4.6.1 er udgivet",
        'content' => "Den første fejlrettelsesudgivelse til xfce 4.6 er nu udgivet.".
                     "[br][br]".
                     "Tak til alle der har brugt Xfce 4.6 ".
                     "og har taget tid og energi til at indsende fejlrapporter til".
                     "ting der ikke fungerede helt som det skulle. ".
                     "Vi har været i stand til at rette adskillige fejl ".
                     "de sidste par uger.".
                     "[br][br]".
                     "For en komplet liste over ændringer, se da ".
                     "[link=/documentation/changelogs/4.6.1]her[/link]. ".
                     "[br][br]".
                     "Også tak til alle oversætterne, adskillige ".
                     "oversættelser er forbedret og færdiggjort siden udgivelsen ".
                     "af 4.6.0.".
                     "[br][br]".
                     "Hæder til jer alle og hav det sjovt med denne nye version,".
                     "der kan findes på: ".
                     "[link=/download]http://www.xfce.org/download[/link]".
                     "[br][br]".
                     "Hilsen,[br]".
                     "Udviklingsholdet bag Xfce.".
                     "",
        ),
   21 => array (
        'title'   => "Xfce 4.6 Endelig version er udgivet",
        'content' => "Efter mere end to års udvikling, er Xfce 4.6.0 netop blevet udgivet".
                     "[br][br]".
                     "Xfce 4.6 indeholder en hel ny konfigurationsmotor, en ny indstillingshåndtering, ".
                     "en spritny lydmikser, og adskillige andre store forbedrelser til sessionshåndteringen ".
                     "og resten af hovedkomponenterne i Xfce. En liste over alle ændringer siden  ".
                     "den sidste udgivelseskandidat kan findes på  ".
                     "[link=/documentation/changelogs/4.6.0]denne side[/link]. ".
                     "[br][br]".
                     "En visuel gennemgang af Xfce 4.6 er tilgængelig her:[br]".
                     "[link=/about/tour]http://www.xfce.org/about/tour[/link]".
                     "[br][br]".
                     "Hent Xfce 4.6 fra Hent-sektionen på netstedet for Xfce:[br]".
                     "[link=/download]http://www.xfce.org/download[/link]".
                     "[br][br]".
                     "Hilsen,[br]".
                     "Udviklingsholdet bag Xfce.".
                     "",
    ),
  20 => array (
        'title'   => "Xfce 4.6 Udgivelseskandidat 1 (Capybara) er udgivet",
        'content' => "Hej allesammen,".
                     "[br][br]".
                     "Kort efter Beta 3, er det en fornøjelse at bekendtgøre den første udgivelseskandidat til Xfce 4.6. ".
                     "Hvis ingen seriøse fejl er fundet, vil dette være den endelige udgaves tilstand (plus ".
                     "oversættelsesopdateringer). ".
                     "Denne udgivelseskandidat er den første 4.6-udgivelse der bliver leveret med en grafisk instllatør til ".
                     "hovedkomponenterne samt Goodies.".
                     "[br][br]".
                     "Udgivelsen kommer med adskillige fejlrettelser til kritiske fejl og nedbrud fundet i Beta 3. ".
                     "Der var, desværre, flere lejligheder hvor vi måtte bryde strengfrysningen for at ".
                     "forbedre fejlrapporteringen (undskyld til oversætterne). ".
                     "[br][br]".
                     "Goodies-installationsprogrammet inkluderer følgende goodies:[br]".
                     "- Verve-udvidelsesmodul (0.3.6)[br]".
                     "- Disk Performance-udvidelsesmodul (2.2.0)[br]".
                     "- Keyboard Layout Switcher (0.5.2)[br]".
                     "- Timer-udvidelsesmodul (0.6.1)[br]".
                     "- Dato- og tidudvidelsesmodul med kalender (0.6.1)[br]".
                     "- Steder-udvidelsmodul (1.1.0)[br]".
                     "- Montér enheder (0.5.5)[br]".
                     "- Mail Watch-udvidelsesmodul (1.1.0)[br]".
                     "- Noter-udvidelsesmodul (1.6.3)[br]".
                     "- Free Space Checker-udvidelsesmodul (0.4.2)[br]".
                     "- MusicPD klient-udvidelsesmodul (0.3.3)[br]".
                     "- Wavelan-udvidelsesmodul (0.5.4)[br]".
                     "- V4l Radio-udvidelsesmodul (0.3.1)[br]".
                     "- Screenshooter (1.5.0)[br]".
                     "- Xfburn (0.4.0)[br]".
                     "- Opgavehåndtering (0.4.1)[br]".
                     "- Ordbog (0.5.2)[br]".
                     "- Påmindelsestjeneste (0.1.0)[br]".
                     "- Ristretto (0.0.21)".
                     "[br][br]".
                     "Du kan hente kildekoden til hver enkelt af hovedkomponenterne, ".
                     "et samlet arkiv der indeholder dem alle og installatørerne ".
                     "[link=/download#unstable]here[/link]. En liste over ændringerne kan findes på ".
                     "[link=/documentation/changelogs/4.5.99.1]denne side[/link]. ".
                     "[br][br]".
                     "Med Venlig Hilsen,[br]".
                     "Udviklingsholdet bag Xfce".
                     "",
    ),
   19 => array (
        'title'   => "Xfce 4.6 Beta 3 (Tuco-Tuco) er udgivet",
        'content' => "".
                     "Det er mig en fornøjelse at annoncere udgivelsen af Xfce 4.6 beta-3.".
                     "[br][br]".
                     "Ligesom den tidligere beta, indeholder denne udgivelse en masse".
                     "fejlrettelser men det kan ikke forventes, at den er 100 % stabil. Det er derfor, vi gerne vil ".
                     "opfordre dig til at afprøve denne udgivelse til dens grænser og fortælle os, hvad".
                     "der ikke fungerer.".
                     "[br][br]".
                     "Da dette er en udviklingsudgivelse råder vi selvfølgelig ikke nogen til at ".
                     "bruge denne i et produktionsmiljø endnu.".
                     "[br][br]".
                     "Med denne udgivelse går vi ind i en strengfrysningsperiode, indtil udgivelse ".
                     "af den endelige udgave af 4.6.0. Dette vil give oversætterne et par uger til at ".
                     "opdatere deres oversættelser.".
                     "[br][br]".
                     "Du kan finde en komplet liste over ændringer på ".
                     "[link=/documentation/changelogs/4.5.93]denne henvisnig[/link]. Og du ".
                     "kan hente denne udgivelse [link=/download#unstable]her[/link].".
                     "[br][br]".
                     "Nyd den!,[br]".
                     "udviklingsholdet bag Xfce".
                     "",
    ),
  18 => array (
        'title'   => "Xfce 4.6 Beta 2 (Hopper) er udgivet",
        'content' => "Den anden beta var forsinket med 2 uger, men det var dét værd.[br]".
                     "Alle de funktioner vi lavede undtagelser for, ifbm. frysningen, er kommet med i denne udgivelse.[br]".
                     "Dette betyder at også mange fejl er blevet rettet:".
                     "[br][br]".
                     "- Tastaturgenveje i xfwm4 kan du konfigureres igen. (nu med konflikthåndtering)[br]".
                     "- Sesssionshåndtering er blevet forbedret, programmer vil nu genstarte automatisk, hvis de dør uventet[br]".
                     "- Det er nu muligt at indstille baggrundsbilledet med Thunars højrekliksmenu[br]".
                     "[br][br]".
                     "Dette er bare et par ændringer de fleste vil lægge mærke til.[br]".
                     "En komplet liste af ændringer kan findes på ".
                     "[url=http://www.xfce.org/documentation/changelogs/4.5.92]denne side[/url].[br]".  
                     "Endnu en gang har oversætterne gjort et fantastisk stykke arbejde med at oversætte Xfce til deres eget sprog.[br]".
                     "Vi vil højst sandsynligt se Xfce 4.6 oversat til flere sprog end nogensinde før, takket være deres hårde arbejde.".
                     "[br][br]".
                     "Spændt? Du kan hente Xfce 4.6-beta-2 ".  
                     "[link=download/#unstable]her[/link].".  
                     "Vi håber i får det sjovt med at afprøve denne nye udgave af Xfce.".
                     "Hvis du finder nogle fejl, skal du ikke tøve med at bruge vores [url=http://bugzilla.xfce.org/]fejlrapporteringssystem[/url] ".
                     "for at lede efter fejlen, eller indsende en ny rapport, hvis dine fejl ikke allerede er nævnt.".
                     "[br][br]".
                     "Venlige hilsner,[br]".
                     "Udviklingsholdet bag Xfce",
                     "",
    ),
  17 => array (
        'title'   => 'Xfce 4.4.3 er udgivet',
        'content' => "Bare fordi vi er ved gøre klar til at udgive Xfce. 4.6.0, betyder det ikke, ".
                     "at vi har glemt 4.4-udgaven. En ordentlig stak fejlrettelser ".
                     "har hobet sig op siden 4.4.2, så vi har nu en ny udgivelse til jer.[br]".
                     "[br]".
                     "Som sædvanligt, indeholder den stabile udgave kun fejlrettelser, og ingen nye ".
                     "funktioner. Listen over ændringer siden 4.4.2 er tilgængelig ".
                     "[link=/documentation/changelogs/4.4.3]her[/link].[br]".
                     "[br]".
                     "Besøg [link=/download#stable]hentningssiden[/link] til ".
                     "dit nærmeste spejl.",
    ),
  16 => array(
        'title'   => 'Xfce 4.6 BETA-1 (\'Fuzzy\') er udgivet',
        'content' => "Hej allesammen,".
                     "[br][br]".
                     "Det er gået en måned siden udgivelsen af Xfce 4.6 alpha. Og nu er det tid til at ".
                     "udgive den første beta, med kodenavnet 'Fuzzy'.".
                     "[br][br]".
                     "[b]Mange[/b] fejl er blevet rettet i denne udgivelse; et par højdepunkter:".
                     "[br]".
                     "- Xfwm4 kan nu opdage om et program ikke længere svarer. Den viser en dialog, der giver brugeren mulighed for at dræbe den.[br]".
		                 "for at lede efter fejlen, eller indsende en ny rapport hvis dine fejl ikke allerede er nævnt.".
                     "- Xfce4-session starter markant hurtigere op, ved at starte programmer op parallelt, hvor det er muligt.[br]".
                     "- Det er nu muligt at konfigurere tastaturlayoutet.[br]".
                     "- Indstilling af lydbegivenheder med libcanberra + gtk 2.14 er nu mulig (hvilket betyder, at du kan slukke for dem).".
                     "[br][br]".
                     "Og lad os ikke glemme oversættelserne, takket være dem vil Xfce 4.6.0 være tilgængelig for mange mennesker, ".
                     "på deres modersmål. ".
                     "[br][br]".
                     "Dette er selvfølgelig stadig en beta. Det betyder, at ikke alt virker helt perfekt endnu.[br]".
                     "En liste over kendte problemer, kan findes [url=http://wiki.xfce.org/releng/4.6/known-issues]her[/url].".
                     "[br][br]".
                     "En komplet liste af ændringer kan findes på".
                     "[url=http://www.xfce.org/documentation/changelogs/4.5.91]dennne side[/url].[br]".  
                     "[br][br]".
                     "Spændt? Du kan hente Xfce 4.6-beta-1 ".  
                     "[link=download/#unstable]her[/link].".  
                     "[br][br]".
                     "Vi håber, i får det sjovt med at afprøve denne nye udgave af Xfce.".
                     "Hvis du finder nogle fejl, skal du ikke tøve med at bruge vores [url=http://bugzilla.xfce.org/]fejlrapporteringssystem[/url] ".
		     "for at lede efter fejlen, eller indsende en ny rapport hvis dine fejl ikke allerede er nævnt.".

                     "[br][br]".
                     "Venlige hilsner,[br]".
                     "Udviklingsholdet bag Xfce",
    ),
  15 => array (
        'title'   => 'Xfce 4.6 alpha (\'Pinkie\') er udgivet',
        'content' => "Hej allesammen,".
                     "[br][br]".
                     "Efter ca. 18 måneders udvikling, er det os en fornøjelse at annoncere udgivelsen ".
                     "af Xfce 4.6 alpha, med kodenavnet 'Pinkie'.".
                     "[br][br]".
                     "Xfce 4.6 vil være den næste store udgivelse af skrivebordsmiljøet ".
                     "Xfce. Den forrige udgivelse var 4.4. og den seneste fejlrettelsesudgivelse ".
                     "var 4.4.2. der blev udgivet i december 2007.".
                     "[br][br]".
                     "Udgivelsesplanen for Xfce 4.6 er tilgængelig for offentligheden på ".
                     "[url=http://wiki.xfce.org/milestones_to_46]wiki'en[/url].".
                     "[br][br][br]".  
                     "Xfce 4.6 indeholder en masse nye komponenter, hvoraf nogle af dem erstatter gammel ".
                     "kode og andre er helt nye. En foreløbig ændringslog for".
                     "alphaudgivelsen kan findes på ".
                     "[url=http://www.xfce.org/documentation/changelogs/4.5.90]denne side[/url][br]".  
                     "Der er også en side, der indeholder nogle generelle informationer om ".
                     "komponenterne i Xfce 4.6 og ændringer der skal være med i 4.6:[br][br]".
                     "[url=http://wiki.xfce.org/general_info_46]http://wiki.xfce.org/general_info_46[/url][br][br]".
                     "Da dette er en udviklingsudgivelse, påstår vi ikke at den er perfekt. ".
                     "[url=http://wiki.xfce.org/known_issues_46]Her[/url] ".
                     "er en liste over de problemer, vi allerede har fundet.[br][br]".
                     "Spændt? Du kan hente Xfce 4.6-alpha ".  
                     "[link=download/#unstable]her[/link].".  
                     "[br][br]".
                     "Vi håber i får det sjovt med at afprøve denne nye udgave af Xfce.".
                     "Hvis du finder nogle fejl, skal du ikke tøve med at bruge vores [url=http://bugzilla.xfce.org/]fejlrapporteringssystem[/url] ".
		     "for at lede efter fejlen, eller indsende en ny rapport, hvis dine fejl ikke allerede er nævnt.".
                     "[br][br]".
                     "Venlige hilsner,[br]".
                     "Udviklingsholdet bag Xfce",
    ),
     14 => array (
        'title'   => 'Google Summer of Code 2008',
        'content' => "Selvom om vi endnu ikke er accepteret i ordningen, har vi søgt om at blive optaget i [url=http://code.google.com/soc/]Google Summer of Code[/url] 2008 som en mentororganisation. Se venligst [url=http://wiki.xfce.org/gsoc-2008-ideas]vores wikiside[/url] for mere information, og tilføj dit navn på en af elevlisterne hvis du vil arbejde på en af projekterne. Du er også velkommen til at tilføje ideer til listen over projektideer.",
    ),
  13 => array (
        'title'   => 'Xfce 4.4.2 er udgivet',
        'content' => 'Hi all,'.
                     '[br][br]'.
                     "Beklager ventetiden, men nu er Xfce 4.4.2 tilgængelig. Det er den anden vedligeholdesesudgivelse i 4.4-stabilserien, der fokuserer på at rette fejl og opdatere oversættelser.".
                     '[br][br]'.
                     'Du kan hente den på [link=/download/]Netstedet for Xfce[/link].'.
                     '[br][br]'.
                     'En oversigt over ændringer er tilgængelig i [link=/documentation/changelogs/4.4.2]i ændringsloggen[/link].'.
                     '[br][br]'.
                     'Nyd den!,[br]'.
                     'udviklingsholdet bag Xfce',
    ),
  12 => array (
        'title'   => 'Xfce 4.4.1 er udgivet',
        'content' => 'Hej allesammen,'.
                     '[br][br]'.
                     'Xfce 4.4.1 er udgivet. Det er den første vedligeholdelsesudgivelses af Xfce 4.4 '.
                     '(den nuværende stabile udgave af Xfce) og er målrettet på rette kritiske fejl '.
                     'og opdatere oversættelser.'.
                     '[br][br]'.
                     'Hent Xfce 4.4.1 fra [link=/download/]Netstedet for Xfce.[/link]'.
                     '[br][br]'.
                     'En oversigt over ændringer er tilgængelig i [link=/documentation/changelogs/4.4.1]ændringsloggen[/link].'.
                     '[br][br]'.
                     'Nyd den![br]'.
                     'Udviklingsholdet bag Xfce.',
    ),
   11 => array (
        'title'   => 'Xfce 4.4.0 er udgivet',
        'content' => 'Efter mere end to års udvikling, er Xfce 4.4.0 netop udgivet.'.
                     '[br]'.
                     'Xfce 4.4 tilbyder nye værktøjer, så som den længe ventede Thunar filhåndtering '.
                     'såvel som adskillige store forbedrelser i hovedkomponenterne.'.
                     '[br][br]'.
                     'En grafisk gennemgang af Xfce 4.4 er tilgængelig her:[br]'.
                     '[link=/about/tour]http://www.xfce.org/about/tour4.4/tour[/link]'.
                     '[br][br]'.
                     'Hent Xfce 4.4 fra det nye netsted for Xfce:[br]'.
                     '[link=/download]http://www.xfce.org/download[/link]',
    ),
  10 => array (
        'title'   => 'Xfce 4.2.4 er udgivet',
        'content' => 'En ny fejlrettelsesudgivelse af Xfce 4.2 er tilgængelig. Denne udgivelse vil '.
                     'være den sidste udgave af 4.2-udgaven. Den indeholder flere rettelser der er eksporteret '.
                     'fra den nuværende udviklingsudgave.[br]'.
                     'Denne udgivelse må ikke forveklses med den kommende Xfce 4.4-udgivelse, '.
                     'dette er en fejlrettelsesudgivelse til den tidligere stabile udgave. Få den fra '.
                     '[link=/download/]denne side[/link].',
    ),
   9 => array (
        'title'   => 'Xfce 4.4 udgivelseskandidat 2 (4.3.99.2) er udgivet',
        'content' => 'Den anden, og forhåbentlig sidste, udgivelseskandidat til Xfce 4.4-skrivebordet er nu '.
                     'tilgængelig til hentning.[br] Denne udgivelse fokuserer primært på rejlrettelser og optimeringer. '.
                     'Se venligst [link=/documentation/changelogs/4.3.99.2]ændringslog[/link] for en liste over '.
                     'rettelser og ændringer. Hjælp os med at gøre Xfce 4.4, den bedste Xfce-udgivelse nogensinde, hent den, '.
                     'prøv den, hjælp os med at fejlrette den! Få den på [link=/download/]denne side[/link].',
    ),
   8 => array (
        'title'   => 'Xfce 4.4 udgivelseskandidat 1 (4.3.99.1) er udgivet',
        'content' => 'Den første udgivelseskandidat af det kommende Xfce 4.4-skrivebord er nu tilgængelig til hentning. '.
                     'Den udgivelse retter en masse fejl, der var til stede i den anden betaudgivelse, men '.
                     'introducerer også nye funktioner, så som papirkurvssunderstøttelse i Thunar og Xfdesktop. Derudover '.
                     'indeholder denne udgivelse også Xarchiver 0.4.0. Se [link=/documentation/changelogs/4.3.99.1]udgivelsesnoter[/link] '.
                     'for en detaljeret liste over ændringer mellem 4.4 beta-2 and 4.4-rc1. Hjælp os med at gøre Xfce 4.4, den bedste '.
		     'Xfce-udgivelse nogensinde, hent den, '.
                     'prøv den, hjælp os med at fejlrette den! Få den på [link=/download/]denne side[/link].',
    ),
   7 => array (
        'title'   => 'Xfce 4.4 beta 2 (4.3.90.2) er udgivet',
        'content' => 'Xfce 4.4 beta-2 (4.3.90.2) er nu tilgængelig til hentning. Foruden Mousepad og Thunar, '.
                     'indeholder denne udgivelse også den nye arkivhåndtering til Xfce. Derudover er en '.
                     'række fejl blevet rettet, og adskillige hovedkomponenter er blevet forbedret. En detaljeret oversigt '.
                     'over ændringerne mellem 4.4 beta-1 og 4.4 beta-2 er tilgængelig '.
                     '[link=/documentation/changelogs/4.3.90.2]her[/link]. Hjælp os med at gøre Xfce 4.4, den bedste '.
		     'Xfce-udgivelse nogensinde, hent den, '.
                     'prøv den, hjælp os med at fejlrette den! Få den på [link=/download/]denne side[/link].',
    ),
   6 => array (
        'title'   => 'Xfce 4.4 beta-1 (4.3.90.1) er udgivet',
        'content' => 'Xfce 4.4 beta-1 (4.3.90.1) er nu tilgængelig til hentning. Xfce 4.4 indeholder nye værktøjer '.
                     'så som den længe ventede Thunar-filhåndtering, såvel som mange store forbedringer af dets'.
                     'hovedkomponenter. Hjælp os med at gøre Xfce 4.4, den bedste '.
		     'Xfce-udgivelse nogensinde, hent den, '.
                     'prøv den, hjælp os med at fejlrette den! Få den på denne side.',
    ),
   5 => array (
        'title'   => 'Xfce 4.2.3.2 er udgivet',
        'content' => 'En mikroudgivelse for at rette et tilbagefald i indstillingerne til vindueshåndteringen, få den fra et af'.
                     'hentningstederne på denne side, ændringsloggen til 4.2.3 forbliver her.',
    ),
   4 => array (
        'title'   => 'Xfce 4.2.3.1 er udgivet',
        'content' => 'En ny fejlrettelsesudgave til Xfce er endelig tilgængelig, efter næsten 6 måneder! Xfce 4.2.3.1 '.
                     'er tilgængelig til hentning fra de sædvanlige steder, vist på denne side, og en ændringslog er  '.
                     'tilgængelig her.',
    ),
   3 => array (
        'title'   => 'Xfce 4.2.2 er udgivet',
        'content' => 'Xfce 4.2.2 er tilgængelig. Hentning kan findes på denne side, og en ændringslog '.
                     'er tilgængelig her.',
    ),
   2 => array (
        'title'   => 'Xfce 4.2.1.1 er udgivet',
        'content' => 'Xfce 4.2.1.1 er udgiver hurtigt efter 4.2.1. Den inkluderer en rettelelse til en fejl '.
                     'hvor et panel glemmer dens indstilling efter at sessionen er gemt i 4.2.1. Sourceforge-serveren '.
                     'er opdateret, og de andre vil følge trop snarest.',
    ),
   1 => array (
        'title'   => 'Xfce 4.2.1 er udgivet',
        'content' => 'Xfce 4.2.1 er tilgængelig. Dette er en fejlrettelsesudgivelse. Hentning kan findes på denne side, og en ændringslog '.
                     'er tilgængelig her.',
    ),
);
?>
