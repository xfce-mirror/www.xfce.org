<h1>Un viaggio visivo in Xfce 4.6.0</h1>

<p>
Dopo una lunga attesa è finalmente disponibile la versione 4.6.0 dell'ambiente grafico Xfce.
Di seguito verranno descritte alcune delle nuove caratteristiche inserite dall'ultima 
versione stabile.
</p>

<h2>Esperienza desktop migliorata con Xfdesktop<a name="xfdesktop"></a></h2>

<p>Dall'introduzione delle icone della scrivania in Xfce 4.4, gli utenti hanno espresso
il bisogno di selezionare più icone contemporaneamente (rubber banding). Con 
<b>Xfce 4.6</b>, il gestore <b>Xfdesktop</b> implementa finalmente questa caratteristica: 
è possibile selezionare più icone, rimuoverle, ecc...</p>

<p class="image"><img src="/images/about/tour/4.6/xfdesktop-rubberbanding.png"
  alt="Selezione multipla di icone" /></p>

<p>
<b>Xfce 4.6</b> introduce un nuovo menu della scrivania che consente all'utente 
di manipolare i file come avviene con il menu contestuale del gestore di file 
<b>Thunar</b>, ma anche di aprire applicazioni, uscire dalla sessione o accedere
alla documentazione di aiuto.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfdesktop-menu.png" 
  alt="Nuovo menu della scrivania" /></p>

<h2>Pannello<a name="panel"></a></h2>

<p>Sono stati corretti una ampia serie di bug anche di lunga data presenti in <b>Xfce4 Panel</b>,
in particolare a riguardo delle configurazioni con più schermi. Questo rilascio porta con sè anche
un insieme di plugin per il pannello profondamente migliorati.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-panel-clock.png" 
  alt="Nuovo orologio binario" /></p>

<p>
Il <b>plugin dell'orologio</b> è stato riscritto per consumare meno risorse di sistema
e per correggere alcuni problemi di visualizzazione, ma è stata anche inserita una nuova
modalità per "geek": l'orologio binario! Il nuovo <b>plugin dell'area di notifica</b> permette di
nascondere l'icona di notifica selezionata per mantenere l'area di notifica pulita 
e leggibile.
</p>

<h2>Nuovo mixer del suono<a name="sound-mixer"></a></h2>

<p>
<b>Xfce4 Mixer</b> è stato completamente riscritto per usare
<a href="http://www.gstreamer.net/">Gstreamer</a>. Cià ha permesso di supportare
con più facilità sistemi audio multipli, l'interfaccia è più curata ed è possibile
gestire diverse schede sonore. In più, un plugin del pannello consente di impostare
rapidamente il suono del sistema con la rotella del mouse.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-mixer.png" 
  alt="Il nuovo mixer del suono" /></p>

<h2>Gestore della sessione migliorato<a name="session-manager"></a></h2>

<p>
<b>Xfce 4.6</b> fornisce un gestore della sessione migliorato: la sessione dovrebbe
avviarsi più rapidamente e la finestra delle impostazioni è stata ristrutturata per
rendere più intuitiva la gestione delle applicazioni relative alla sessione.
Inoltre, il gestore della sessione avvierà ora automaticamente le applicazioni
della sessione che sono andate in crash in modo che non si venga lasciati
senza scrivania, pannello, gestore delle finestre ecc.. nel caso si verifichino dei 
problemi.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-session-settings.png"
  alt="Finestra delle impostazioni della sessione" /></p>

<p>
Il gestore della sessione include ora "di serie" una nuova caratteristica attesa da molti:
il supporto per la <b>sospensione</b> e per l'<b>ibernazione</b>. La finestra di uscita
visualizza ora due pulsanti aggiuntivi che permettono di sospendere e di ibernare il 
proprio computer.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-session-logout.png" 
  alt="Finestra di uscita dalla sessione" /></p>

<h2>Gestore delle finestre<a name="window-manager"></a></h2>

<p>
Come solito, <b>Xfwm4</b> è decisamente maturato durante questo ciclo di rilascio:
diversi bug sono stati corretti, è stato aggiunto il supporto agli schermi multipli e
le prestazioni in generale sono state migliorate.</p>

<p>In aggiunta ad altre nuove caratteristiche, <b>Xfwm4</b> è ora in grado di identificare
le finestre che non rispondono ai comandi e chiedere se si vuole terminarle.</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-net-ping.png" 
  alt="Finestra per terminare le applicazioni occupate" /></p>

<p>
È stato anche introdotto un nuovo <b>menu delle azioni</b> che permette di muovere e
ridimensionare velocemente le finestre, di spostarle sopra o sotto le altre o di
visualizzarle a schermo intero.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-new-menu.png" 
  alt="Nuovo menu delle azioni" /></p>

<p> È stata implementata una nuova operazione di <b>riempimento</b>; questa espande
una data finestra fino a farle occupare tutto lo spazio disponibile senza sovrapporla alle 
altre finestre adiacenti.</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-fill-operation.png" 
  alt="Operazione di riempimento" /></p>

<p>Il <b>compositore</b> è stato ottimizzato per ridurre lo sfarfallio della finestra durante le
operazioni di ridimensionamento.</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-resize.png" 
  alt="Ridimensionamento senza sfarfallio" /></p>

<p>Sono state anche introdotte delle <b>opzioni di aggiustamento</b>: per esempio è possibile
disabilitare il lampeggiamento delle finestre che richiedono attenzione.</p>

<p class="image"><img src="/images/about/tour/4.6/xfwm4-new-tweaks.png" 
  alt="Nuove opzioni di aggiustamento" /></p>

<h2>Gestore di file<a name="file-manager"></a></h2>

<p>
In <b>Thunar</b> sono stati corretti diversi bug e sono state migliorate le prestazioni.
Può utilizzare i pulsanti "avanti" e "indietro" del mouse (se disponibili) per navigare e
include un nuovo plugin che permette di impostare un'immagine come sfondo direttamente
dal menu contestuale.
</p>

<p class="image"><img src="/images/about/tour/4.6/thunar-wallpaper-plugin.png" 
  alt="Impostazione come sfondo di un'immagine in una cartella di Thunar" /></p>

<p><b>Thunar</b> rispetta ora le specifiche
<a href="http://freedesktop.org/wiki/Software/xdg-user-dirs">
XDG per le cartelle utente</a>; grazie a questo si possano avere delle cartelle utente 
localizzate e tematizzate per immagazzinare musica, documenti, video, modelli, ecc...
</p>

<p class="image"><img src="/images/about/tour/4.6/thunar-xdg-user-dirs.png" 
  alt="Menu di Thunar per le cartelle dell'utente" /></p>

<p>
<b>Thunar</b> visualizza ora un'icona semitrasparente per le unità e i volumi che non
sono montati, in modo che l'utente possa distinguerli da quelli montati.
</p>

<p class="image"><img src="/images/about/tour/4.6/thunar-mounting.png" 
  alt="Icone semitrasparenti per i volumi e le unità non montati" /></p>

<p>In ultimo, ma non meno importante, <b>Thunar</b> supporta ora i dispositivi cifrati! </p>

<p class="image"><img src="/images/about/tour/4.6/thunar-encrypted.png" 
  alt="Supporto di Thunar ai dispositivi cifrati" /></p>

<h2>Nuove finestre di configurazione<a name="configuration-dialogs"></a></h2>

<p>
Xfce 4.6 ha una nuova interfaccia delle impostazioni, <b>il gestore delle impostazioni
di Xfce</b>, che permette di configurare il proprio ambiente grafico con maggiore
semplicità rispetto al passato. Le finestre, accessibili con un singolo clic 
sull'icona, sono state progettate per essere più compatte e per rendere più 
immediata e intuitiva la personalizzazione dell'ambiente grafico.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-settings-manager.png" 
  alt="Gestore delle impostazioni di Xfce4" /></p>

<h3>Impostazioni di accessibilità<a name="accessibility"></a></h3>
<p class="image">
  <img src="/images/about/tour/4.6/xfce4-accessibility-settings.png" 
  alt="Finestra delle impostazioni di accessibilità" /></p>

<p>
La finestra delle <b>impostazioni di accessibilità</b> permette di impostare le opzioni 
di accessibilità relative a mouse e tastiera come i tasti appiccicosi, i tasti elastici o
l'emulazione del mouse.
</p>

<h3>Impostazioni dell'aspetto<a name="appearance"></a></h3>
<p class="image">
  <img src="/images/about/tour/4.6/xfce4-appearance-settings.png" 
  alt="Finetsra di impostazione dell'aspetto" /></p>

<p>
La finestra di <b>impostazione dell'aspetto</b> consente di configurare lo stile dei widget, 
il tema delle icone, lo stile del carattere, la barra degli strumenti e le opzioni del menu.
</p>

<h3>Impostazioni dello schermo<a name="display"></a></h3>
<p class="image"><img src="/images/about/tour/4.6/xfce4-display-settings.png" 
  alt="Finestra delle impostazioni dello schermo" /></p>

<p>La finestra delle <b>impostazioni dello schermo</b> consente di impostare la risoluzione, 
la frequenza di aggiornamento e la rotazione di ogni schermo connesso.</p>


<h3>Impostazioni della tastiera<a name="keyboard"></a></h3>
<p class="image">
  <img src="/images/about/tour/4.6/xfce4-keyboard-settings-layout.png" 
  alt="Finestra delle impostazioni della tastiera, scheda della disposizione" /></p>

<p>La finestra delle <b>impostazioni della tastiera</b> permette di impostare le preferenze della tastiera
come la ripetizione dei tasti, le scorciatoie e la disposizione della propria tastiera.
</p>

<p class="image">
  <img src="/images/about/tour/4.6/xfce4-keyboard-settings-shortcuts.png" 
  alt="Finestra delle impostazioni della tastiera, scheda delle scorciatoie" /></p>

<p>
Le scorciatoie possono essere configurate più semplicemente e ogni conflitto è rilevato automaticamente.
</p>

<h3>Impostazioni del mouse<a name="mouse"></a></h3>
<p class="image"><img src="/images/about/tour/4.6/xfce4-mouse-settings.png" 
  alt="Finestra delle impostazioni del mouse" /></p>

<p>
La finestra delle <b>impostazioni del mouse</b> permette di configurare i diversi mouse collegati
al computer: l'ordine dei pulsanti, l'accelerazione, la velocità del doppio clic,
il tema dei cursori, ecc...
</p>

<h3>Impostazioni della scrivania <a name="desktop-settings"></a></h3>

<p class="image"><img src="/images/about/tour/4.6/xfdesktop-settings.png" 
  alt="Finestra delle impostazioni della scrivania" /></p>

<p>
La finestra delle <b>impostazioni della scrivania</b> è più compatta; permette di configurare
le impostazioni per ogni schermo: sfondo, luminosità, menu della scrivania, icone visualizzate,
ecc...</p>

<h2>Nuovo ricercatore di applicazioni<a name="appfinder"></a></h2>

<p>
<b>Xfce 4.6</b> porta con sè anche un nuovo ricercatore di applicazioni che si presenta con
un'interfaccia più pulita. Risulta anche più semplice da utilizzare con la tastiera e
monitora le applicazioni installate per aggiornare l'elenco "al volo". Permette anche di creare
velocemente degli avviatori per il pannello trascinando l'icona dell'applicazione nella finestra
di creazione dell'avviatore.
</p>

<p class="image"><img src="/images/about/tour/4.6/xfce4-appfinder.png" 
  alt="Nuovo ricercatore di applicazioni" /></p>

<h2>Collegamenti<a name="links"></a></h2>

<ul>
  <li><a href="http://www.xfce.org/">Sito web di Xfce</a></li>
  <li><a href="http://thunar.xfce.org/">Sito web di Thunar</a></li>
</ul>

<h2>Ringraziamenti<a name="credits"></a></h2>

<ul>
  <li>Scritto da Jérôme Guelfucci (Febbraio 2009) </li>
  <li>Immagini di Jannis Pohlmann </li>
  <li>Tradotto in Italiano da Cristian Marchi </li>
</ul>

