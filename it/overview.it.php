<a name="whatis"></a>

<h2>Cos'è Xfce 4.2 ?</h2>

<p>Xfce è un ambiente desktop leggero per sistemi operativi unix-like.
Il suo scopo è quello di essere veloce e leggero rimanendo al contempo visivamente gradevole e 
facile da usare.</p>

<p>Xfce 4.2 incorpora la tradizionale filosofia della modularità e usabilità tipica di UNIX. Consiste in un numero di componenti che assieme forniscono totale funzionalità all'ambiente desktop. Sono pachetti separati che puoi scegliere da quelli disponibili per creare un ambiente di lavoro personalizzato in base alle tue esigenze.</p>

<p>Un'altra delle priorità di Xfce 4 è quella di aderire allo specifico standard definito da <a href="http://www.freedesktop.org/">
freedesktop.org</a>.</p>

<p>Xfce 4 può essere installato su molteplici piattaforme UNIX. E' possibile compilarlo su Linux, NetBSD, FreeBSD, Solaris, Cygwin e MacOS X, su x86, PPC, Sparc, Alpha...</p>

<br>

<a name="features"></a>

<h2>Caratteristiche e componenti di Xfce 4</h2>

<h3>Generale</h3>

<ul class="submenu">

		<li>Specifiche <a href="http://www.freedesktop.org/">Freedesktop</a>  
		per Window Manager, menu, temi di icone, Specifiche XDG Basedir, 
		protocollo Xsettings, drag and drop...</li>

		<li>Multischermo reale e supporto Xinerama.</li>

		<li>Supporto per la modalità "kiosk mode" in modo che le azioni degli utenti 
		possano essere ristrette in xfce4-session, xfce4-panel e xfdesktop.</li>

		<li>Piattaforma di sviluppo per le applicazioni.</li>

		<li>Supporto per l'anti-aliasing dei font Xft.</li>

		<li>Puoi installare/lanciare ogni modulo di Xfce separatamente. Veramente utile se non hai  
		necessità di utilizzarli tutti oppure se hai limitate risorse di sistema.</li>

		<li>Tradotto in oltre 40 lingue...</li>

</ul>

<h3>Librerie (libxfce4util, libxfcegui4, libxfce4mcs)</h3>

<ul class="submenu">

<li>libxfce4util : libreria con funzioni d'aiuto non grafiche.</li>
<li>libxfcegui4 : funzioni per creare una interfaccia utente in modalità grafica.</li>
<li>libxfce4mcs : libreria per gestire le impostazioni utilizzate da molti componenti di Xfce 4.</li>

</ul>

<img src="images/mcs.png" width="238" height="157" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">

		<h3>Settings manager (xfce-mcs-manager and xfce-mcs-plugins</h3>
		
		<p>
		
		Fornisce varie Impostazioni Multi-canale, un sistema di configurazione centralizzato con 
		trasparenza di rete, host indipendente e modularità. Gira in background e fornisce 
		informazioni globali sulle impostazioni anche di altri componenti di Xfce. C'è un pannello per il controllo 
		principale al pannello per accedere alle finestre di configurazione dei componenti di Xfce. Le sue icone 
		sono personalizzabili. I plugins MCS forniscono una finestra delle impostazioni per oggetti generali che  
		non fanno parte del pacchetto, ad esempio GTK, mouse, caratteri, 
		tastiera e impostazioni di visualizzazione.</p>
				
<img src="images/wm.png" width="187" height="151" border="0" alt=""  style="float: left; margin-right: 30px; margin-bottom: 20px; ">

		<h3>Window manager (xfwm4)</h3>
		
		<p>
		
		Il window manager di Xfce. Gestisce il posizionamento  
		delle finestre delle applicazioni sullo schermo, fornisce la decorazione per le finestre e 
		gestisce gli spazi di lavoro o i desktop virtuali. Xfwm4 supporta in maniera nativa la modalità multihead. 
		Fornisce un compositing manager (un gestore per le estensioni composite di Xorg, 
		che includono una reale trasparenza per il desktop di Xfce). I temi quindi supportano 
		composizioni di immagini con immagini PNG con livelli. Xfwm4 include un editor per le scorciatoie da tastiera. 
		Inoltre gli utenti possono nascondere/scorrere le finestre e cambiare i desktop utilizzando la rotella del mouse.</p>

		<h3>Panel (xfce4-panel)</h3>

<img src="images/panel.png" width="235" height="46" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">
		
		<p>
	
		Il pannello di Xfce 4. Fornisce una visualizzazione verticale e 
		orizzontale, uno switcher per gli spazi di lavoro, un orologio, la caratteristica auto-nascondimento, 
		menu riposizionabili facili da impostare e un launcher per le applicazioni, un controllo posta 
		con mbox, Maildir e supporto POP3. Il pannello supporta la 
		transparenza quando le estensioni composite di X sono abilitate.
		Offre inoltre un facile metodo per aggiungere plugin utilizzando la finestra di dialogo e 
		il doppio click con il mouse. E' compatibile con i numerosi plugins disponibili dalla pagina di 
		<a href="http://xfce-goodies.berlios.de/" target="_new">Xfce Goodies 
		Project</a>.</p>
		
<img src="images/menu.png" width="101" height="153" border="0" alt=""  style="float: left; margin-right: 30px; margin-bottom: 20px;">	
	
		<h3>Desktop manager (xfdesktop)</h3>
		
		<p>
		
		Il gestore dello sfondo del desktop. Questo programma 
		imposta l'immagine di background e fornisce una finestra per il menu principale.  
		Include il supporto per i colori con gradazione per il background, 
		il supporto per la saturazione per l'immagine di sfondo, un multischermo reale e il supporto  
		a xinerama, un editor per il menu del desktop con supporto DND da 
		xfce4-appfinder e files .desktop da Rox, Konqueror, Nautilus, Xffm...
		Il menu del desktop e la lista delle finestre hanno il supporto opzionale per le icone, 
		così da poter permettere il loro utilizzo solo nel caso l'utente lo voglia, e se il tuo computer non ha sufficienti 
		risorse da poter permettere la visualizzazione delle icone. Inoltre, Xfdesktop4 fornisce un plugin con menu del desktop 
		per il pannello: puoi prendere i menu standard sia dal pannello, sia dal desktop.</p>

<img src="images/taskbar.png" width="275" height="112" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">

<h3>Utilities (xfce-utils)</h3>

		<p>
		
		Utilità e script essenziali. Fornisce una barra dei processi, 
		una finestra "info su", una finestra d'esecuzione e molti importanti script che vengono utilizzati 
		da altri pacchetti, incluso il pannello (startxfce4, xfhelp4, xflock4, 
		xfmountdev4, and xfterm4). Inoltre contiene la guida utente. La barra dei processi 
		include un opzione "always group tasks", allineamento selezionabile 
		sinistra/centro/destra e la variabile di lunghezza, e un menu azione da tasto destro del mouse.
		</p>

<img src="images/xffm.png" width="207" height="164" border="0" alt=""  style="float: left; margin-right: 30px; margin-bottom: 20px;">	

<h3>File manager (xffm)</h3>

		<p>
		
		Un veloce file manager, con due differenti finestre, integra 
		un browser per il network samba e ha la possibilità di montare/smontare i dispositivi utilizzando i dati inclusi in fstab. 
		Include inoltre un editor per il tema di icone.</p>
		
<h3>Printing Helper (xfprint)</h3>

		<p>Finestra di dialogo con la stampante. Fornisce un frontend grafico per stampare. 
		Questo include <tt>xfprint4</tt> e <tt>xfprint-manager</tt>. Xfprint può 
		utilizzare CUPS, BSD-LPR oppure un file come destinazione. Le stampanti sono prese 
		dal sistema di stampa che hai scelto.</p>

<img src="images/appfinder.png" width="252" height="198" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">

<h3>Application finder (xfce4-appfinder)</h3>
		
		<p>
		
		Un'applicazione di ricerca che permette di trovare, lanciare e 
		trovare informazioni riguardo le applicazioni installate nel tuo sistema.</p>
		
<h3>Session manager (xfce4-session)</h3>
		
		<p>
				
		Il gestore della sessione. Il session manager 
		controlla l'avvio e l'arresto dell'Ambiente Desktop Xfce. Al momento del  
		logout può salvare le applicazioni in esecuzione e riavviarle di nuovo al successivo 
		log in. E' compatibile com Gnome/KDE, supporta la modalità multihead 
		(Xinerama e multischermo).</p>

<img src="images/toys.png" width="46" height="198" border="0" alt=""  style="float: left; margin-right: 30px; margin-bottom: 20px;">	

<h3>Mixer del Suono (xfce4-mixer)</h3>

		<p>Un controllo per il volume per il pannello. Include una finestra per il mixer  
		con supporto ad ALSA, OSS e Sun audio.</p>
		
<h3>Area di Notifica (xfce4-systray)</h3>

		<p>Un'area di notifica (oppure "system tray") per il pannello.</p>
		
<h3>Toys (xfce4-toys)</h3>

		<p>
		Utilità poco seria in aggiunta al pannello. 
		Contiene suggerimenti/finestre con frasi famose e una implementazione di xeyes per il pannello.
		</p>

<h3>Calendario e Appunti (xfcalendar)</h3>

		<p>Un semplice calendario con appunti per ricordare.</p>

<h3>Plugin per i bottoni rimovibili (xfce4-trigger-launcher)</h3>

		<p>Fornisce bottoni rimovibili con stato on/off per il pannello. Possono essere utilizzati per avviare o terminare, ad esempio, una connessione di rete.</p>

<img src="images/iconbox.png" width="192" height="57" border="0" alt=""  style="float: right; margin-left: 30px; margin-bottom: 20px;">

<h3>Icon Box (xfce4-iconbox)</h3>

		<p>Un box per le icone che può essere usato come alternativa  
		per la barra dei processi fornita nel pacchetto xfce-utils. Il suo livello di 
		trasparenza è configurabile quando si utilizzano le estensioni composite di X.</p>
		
<h3>Temi per il Window Manager (xfwm4-themes)</h3>

		<p>
		
		Più di 60 diversi temi per decorare le finestre di xfwm4.</p>		

<h3>Temi delle Icone (xfce4-icon-theme)</h3>

		<p>E' il tema predefinito di Xfce 4. Include sia icone in formato PNG che SVG</p>
		
<h3>GTK Theme Engine (gtk-xfce-theme-engine)</h3>

		<p>Il motore dei temi per GTK2. Non richiesto per  
		il desktop ma è un grazioso motore per i temi che merita di essere provato.</p>

<div align="right"><a href="#top" style="color: #154374; "><b>In alto nella pagina</b></a></div><br>

