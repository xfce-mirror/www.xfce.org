<h1>Een visuele rondleiding door Xfce 4.4.0</h1>
<p align="justify">
Langverwacht en nu beschikbaar: versie 4.4.0 van desktopomgeving Xfce. Ik zal de belangrijkste nieuwe functies sinds de vorige stabiele versie laten zien.
</p>


<h2>Bureaubladiconen<a name="desktop-icons"></a></h2>

<p align="justify">
Eén van de meestgevraagde functies in de tijd van versie 4.0 en 4.2 was de mogelijkheid om iconen op het bureaublad te plaatsen.
Nu, in versie 4.4.0 is deze functionaliteit eindelijk toegevoegd aan de bureaubladbeheerder, <b>Xfdesktop</b>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-desktop-icons.png" alt="Desktop Icons" /></p>

<p align="justify">
De bureaubladbeheerder gebruikt de libraries van <b>Thunar</b> voor de snelstarters van programma's
en voor gewone bestanden en mappen op het bureaublad. De bureaubladbeheerder heeft ook de mogelijkheid om
de iconen van geminimaliseerde programma's op het bureaublad te zetten, een vrij populaire functie uit CDE.
Natuurlijk kun je de iconen op het bureaublad ook uitzetten, als je liever een schoon bureablad hebt.
</p>

<p align="center"><img src="/images/about/tour/xfce44-desktop-settings.png" alt="Desktop Settings" /></p>

<p align="justify">
<b>Xfdesktop</b> geeft nog steeds toegang tot het menu met applicaties, 
net als in vorige versies van Xfce.
</p>


<h2>Bestandsbeheerder<a name="file-manager"></a></h2>

<p align="justify">
De ondersteuning van bureaubladiconen gaat hand in hand met de introductie van de nieuwe bestandsbeheerder <a href="http://thunar.xfce.org/">Thunar</a>,
die de oude bestandsbeheerder <b>Xffm</b> vervangt.
</p>

<p align="center"><img src="/images/about/tour/xfce44-thunar.png" alt="Thunar File Manager" /></p>

<p align="justify">

<b>Thunar</b> is van de grond af herschreven om tot een gemakkelijk te gebruiken, maar tegelijk lichtgewicht
bestandsbeheerder voor Xfce te komen. De gebruikersinterface van Thunar is ontworpen om er ongeveer hetzelfde uit te zien
als de bestandskiezer die werd geïntroduceerd met GTK+ 2.4. Andere bestandsbeheerders zoals <b>Nautilus</b> en <b>pcmanfm</b>
hebben dit idee overgenomen.
</p>

<p align="justify">
<b>Thunar</b> heeft alle functionaliteit die je van een bestandsbeheer kunt verwachten, en ook
een aantal geavanceerde functies. Bijvoorbeeld de zogenaamde <i>Bulk Renamer</i> die het gebruikers
mogelijk maakt meerdere bestanden tegelijk te hernoemen door gebruik te maken van een bepaald criterium waaraan de bestanden moeten voldoen.
</p>

<p align="center"><img src="/images/about/tour/xfce44-thunar-bulk-rename.png" alt="Thunar Bulk Rename" /></p>


<h2>Verwisselbare schijven<a name="removable-drives-and-media"></a></h2>

<p align="justify">
Xfce 4.4.0 zorgt voor makkelijke toegang tot verwisselbare schijven. Stop de schijf in het station
of steek het nieuwe medium in de computer en er verschijnt een icoontje voor dit verwisselbare medium
op het bureaublad en ook in het zijscherm van <b>Thunar</b>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-removable-volumes.png" alt="Removable Volumes" /></p>

<p align="justify">
Klik op het icoontje om het medium automatisch aan te laten koppelen. Klik met de rechtermuisknop op het medium om hem af
te koppelen of om de schijf uit het station te laten werpen. Houd er hierbij wel rekening mee dat deze functie <a
href="http://freedesktop.org/wiki/Software_2fhal">HAL</a> nodig heeft en daarom alleen beschikbaar is voor Linux 2.6.x
en FreeBSD 6.x of hoger op de tijd van schrijven (er is een gelimiteerde ondersteuning voor verwisselbare media in 
FreeBSD 4.x en 5.x, waarvoor HAL niet nodig is).
</p>


<h2>Tekstverwerken<a name="text-editor"></a></h2>

<p align="justify">
De nieuwe tekstverwerker <b>MousePad</b> is meergeleverd met deze versie van Xfce. <b>MousePad</b> verschaft
de basisfunctionaliteit om een tekstbestanden te bewerken: niets meer, niets minder.
</p>

<p align="center"><img src="/images/about/tour/xfce44-mousepad.png" alt="MousePad" /></p>

<p align="justify">

Je zou <b>MousePad</b> kunnen zien als het equivalent van <b>NotePad/Kladblok</b> in Windows. Hij start erg snel op,
meestal in minder dan een seconde, zelfs op oudere computers.
</p>


<h2>Window Manager<a name="window-manager"></a></h2>

<p align="justify">

<b>Xfwm4</b> blijft onze vertrouwde window manager.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-argb32.png" alt="Xfwm4 ARGB32" /></p>

<p align="justify">
Deze versie bevat een geavanceerde compositor, die ondersteuning biedt voor transparante ARGB vensters, schaduwen,
transparantie van de vensterrand en nog veel meer.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-switcher.png" alt="Xfwm4 Switcher" /></p>

<p align="justify">
<b>Xfwm4</b> bevat ook een brandnieuw programma om tussen verschillende applicaties te wisselen, 
te zien in bovenstaande schermafdruk, die alle vensters op het huidige werkblad laat zien met icoontje en venstertitel.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-themes.png" alt="Xfwm4 Themes" /></p>

<p align="justify">
Verder is er nog ondersteuning van verschillende afbeeldingsformaten toegevoegd voor het aanpassen van hetthema van de window manager, onder andere
<tt>PNG</tt>, <tt>GIF</tt> en <tt>SVG</tt> afbeeldingen.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-tweaks.png" alt="Xfwm4 Tweaks" /></p>

<p align="justify">
Ook geavanceerde instellingsmogelijkheden voor de window manager zijn toegevoegd, wat grondig instellen aan het gedrag van 
vensters mogelijk maakt.
</p>


<h2>Paneel<a name="panel"></a></h2>

<p align="justify">

Het <b>Xfce4-panel</b> is compleet herschreven voor Xfce versie 4.4. Ondersteuning voor meerdere panelen
is nu <i>standaard</i> en kan eenvoudig worden ingesteld met de nieuwe <b>Panel
Manager</b>, te zien in de schermafdruk hieronder.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-manager.png" alt="Panel Manager" /></p>

<p align="justify">
Eén van de grootste problemen in vorige versies van Xfce was dat elke plugin in hetzelfde
proces als het paneel zelf moest lopen, zodat iedere plugin het hele
panel kon laten crashen. Om dit probleem op te lossen, is ondersteuning voor externe plugins
toegevoegd aan het paneel.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-additem.png" alt="Panel Add Item Dialog" /></p>

<p align="justify">
Ontwikkelaars van panel-plugins kunnen nu kiezen of de plugin als extern proces of als onderdeel van het proces van 
het panel moet lopen, afhankelijk van de stabiliteit van de plugin.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-iconbox.png" alt="Panel Icon Box Plugin" /></p>

<p align="justify">

Omdat er nu ondersteuning is voor meerdere panelen, zijn de aparte hulpprogramma's <b>Xftaskbar4</b> en
<b>Xfce4-iconbox</b> niet meer nodig. In plaats daarvan zijn nu de taakbalk
en de iconenbalk beschikbaar als panel-plugins.
</p>

<p align="justify">
De meeste extra panel-plugins, beschikbaar gesteld via het <a href="http://goodies.xfce.org/">Xfce
Goodies Project</a>, zijn aangepast aan het nieuwe paneel en er zijn een aantal nieuwe plugins toegevoegd.
Bijvoorbeeld de nieuwe <b>xfce4-xfapplet-plugin</b> die het gebruikers mogelijk maakt om
Gnome panel applets aan het Xfce paneel toe te voegen.
</p>


<h2>Tijdsbeheer<a name="time-management"></a></h2>

<p align="justify">
De nieuwe agenda/kalender-applicatie <b>Orage</b> vervangt <b>Xfcalendar</b>, die in
Xfce 4.2.0 werd geïntroduceerd. <b>Orage</b> biedt diverse functies om je tijd goed te beheren.
</p>

<p align="center"><img src="/images/about/tour/xfce44-orage.png" alt="Orage" /></p>

<p align="justify">
Hoewel <b>Orage</b> lichtgewicht en gemakkelijk te gebruiken is, ondersteunt het toch de dezelfde belangrijke functies
als grotere kalender-programma's zoals <b>Outlook</b> en <b>Evolution</b>. Terwijl <b>Xfcalendar</b> het
 <tt>dbh</tt> formaat gebruikte om je instellingen op te slaan, is <b>Orage</b> gebaseerd op <tt>ical</tt>

en daardoor compatibel met andere kalender-applicaties.
</p>


<h2>Terminal Emulator<a name="terminal-emulator"></a></h2>

<p align="justify">
Hoewel <b>Terminal</b> al beschikbaar was in de tijd van Xfce 4.2, was hij nog niet volwassen
genoeg om deel uit te maken van de Xfce core. In deze grote release is Terminal wel verplaatst naar de core desktop.
</p>

<p align="center"><img src="/images/about/tour/xfce44-terminal.png" alt="Terminal" /></p>

<p align="justify">
Behalve de standaard functionaliteit die je al wel verwacht van een terminal emulator, bevat de Xfce Terminal
nog meer mogelijkheden, zoals meerdere tabs per venster, aan eigen smaak aanpasbare werkbalken en de mogelijkheid
om bijna ieder aspect aan het programma in te stellen door middel van <i>hidden options</i>. Zoals
te zien is in bovenstaande schermafdruk, ondersteunt deze versie van Xfce terminal ook echte transparantie 
door middel van de geïntegreerde composition manager van <b>Xfwm4</b>.
</p>


<h2>Afdrukken<a name="printing"></a></h2>

<p align="justify">
<b>Xfprint</b>, het printerbeheerprogramma van Xfce, heeft een paar kleine veranderingen ondergaan.
Ten eerste is de <tt>a2ps</tt> converter niet meer noodzakelijk, hoewel nog steeds wel
aanbevolen. Ondersteuning voor <tt>CUPS</tt> 1.2 is toegevoegd en <b>Xfprint</b> heeft nu de mogelijkheid de status
van de printer weer te geven met de <tt>CUPS</tt>-backend.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfprint.png" alt="Xfce Printing" /></p>

<p align="justify">
<b>Xfprint</b> werkt ook goed samen met <b>MousePad</b> om algemene afdrukondersteuning te bieden voor 
verschillende soorten tekstdocumenten met behulp van de <tt>a2ps</tt> converter.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfprint-dialog.png" alt="Xfce Print Dialog" /></p>

<p align="justify">
Zoals je kunt zien lijkt het afdrukvenster nog aardig op dat van Xfce 4.2, maar de interne werking
van het afdrukken is verbeterd, vooral de ondersteuning voor <tt>CUPS</tt>.
Behalve dat is de functionaliteit van het afdrukbeheer verplaatst naar een aparte library, zodat andere applicaties
de API kunnen gebruiken om toegang te krijgen tot de printerconfiguratie.
</p>


<h2>Automatisch opstarten<a name="autostart"></a></h2>

<p align="justify">
Xfce 4.4.0 gebruikt de nieuwe <a href="http://freedesktop.org/wiki/Standards_2fautostart_2dspec">Autostart
Specificatie</a> - eigenlijk was Xfce de eerste desktopomgeving die deze functie implementeerde, maar
de andere desktopomgevingen waren gewoon sneller met het uitgeven ervan. ;-)
</p>

<p align="center"><img src="/images/about/tour/xfce44-autostart.png" alt="Xfce Autostart Editor" /></p>

<p align="justify">
Deze specificatie bestaat uit twee delen: het <i>automatisch starten van applicaties tijdens en opstarten</i>, wat
geïmplementeerd is in <b>xfce4-session</b> en het <i>automatisch opstarten van programma's na het aankoppelen van een schijf</i>,
wat geïmplementeerd is in <a href="http://foo-projects.org/~benny/projects/thunar-volman/index.html">thunar-volman</a>.
De huidige versie van Xfce bevat ook <b>xfce4-autostart-editor</b> (zie ovenstaande screenshot), die
het gebruikers mogelijk maakt gemakkelijk automatisch gestarte programma's toe te voegen, te verwijderen of uit te schakelen.
</p>


<h2>Instellingen<a name="settings"></a></h2>

<p align="justify">
In deze uitgave van Xfce worden nieuwe opties geïntroduceerd om de desktopomgeving aan je wensen aan te passen. Een aantal voorbeelden
van nieuwe instellingsvensters waren al te zien in voorgaande onderdelen van deze rondleiding.
</p>

<p align="center"><img src="/images/about/tour/xfce44-preferences-applications.png" alt="Preferred Applications" /></p>

<p align="justify">

Het systeem voor het instellen van standaard programma's, dat vroeger alleen maar beschikbaar was via de <b>Terminal</b>, is
binnengehaald in Xfce, zodat gebruikers geen shell profiles meer hoeven te bewerken om in te stellen welke browser en terminal emulator
moet worden gebruikt door Xfce applicaties. Het doel was om het zo makkelijk mogelijk te maken om een ingesteld programma voor een
voor een bepaalde categorie te veranderen (gebruikers van GNOME hebben misschien al opgemerkt dat GNOME deze manier heeft overgenomen, omdat
het gewoon zo gemakkelijk werkt).
</p>

<p align="center"><img src="/images/about/tour/xfce44-preferences-keyboard.png" alt="Keyboard Shortcuts" /></p>

<p align="justify">
En dan was er nog het probleem met de sneltoetsen in Xfce 4.2... Xfce 4.2 beperkte het aantal
beschikbare sneltoetsen, terwijl mensen een onbeperkt aantal sneltoetsen wilden kunnen toewijzen.
In Xfce 4.4 is deze beperking verleden tijd en de sneltoetsen van de applicaties zijn nu gescheiden van de sneltoetsen
van de window manager.
</p>


<h2>Feedback<a name="feedback"></a></h2>

<p align="justify">
Plaats graag commentaar op dit artikel op mijn <a href="http://xfce-diary.blogspot.com/2007/01/visual-tour-of-xfce-440.html">blog</a> en gebruik
de <a href="/community/lists">xfce</a> mailinglist als je vragen hebt over Xfce 4.4.0 of als je 
problemen hebt met de installatie.
</p>


<h2>Links<a name="links"></a></h2>

<ul>
<li><a href="http://www.xfce.org/">Xfce website</a></li>
<li><a href="http://thunar.xfce.org/">Thunar website</a></li>
</ul>

<h2>Credits<a name="credits"></a></h2>
<p align="justify">Written by Benedikt Meurer, 21 Jan 2007</p>
