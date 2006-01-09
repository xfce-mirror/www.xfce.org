<meta http-equiv="content-type" content="text/html;charset=utf-8">
<a name="doc"></a>
<h2>Documentazione online</h2>
<p>La <a href="/documentation/">documentazione online</a> di Xfce 4.</p>
<br>
<a name="requirements"></a>
<h2>Requisiti di Xfce 4</h2>
La compilazione di Xfce 4 richiede le seguenti dipendenze :
<ul class="submenu">
	<li><a href="http://www.freedesktop.org/software/pkgconfig/"><b>pkgconfig </b></a>, un sistema per gestire le librerie, compilare e linkare applicazioni che lavorano con automake e autoconf.
	<li><a href="http://www.gtk.org/"><b>GTK+</b></a> &gt;= 2.2 (inclusi i pacchetti dev), il GIMP multi-platform toolkit sviluppato per creare una interfaccia grafica per gli utenti.
	<li><a href="http://xmlsoft.org/"><b>libxml2</b></a>, una libreria C XML sviluppata per il progetto <a href="http://www.gnome.org/">Gnome</a>.
	<li><a href="http://sourceforge.net/projects/dbh/"><b>libdbh</b></a>, la libreria &quot;Disk based hashtables&quot;, è necessaria per xffm, il file manager.
</ul>
<p>Accertati di avere installato questi pacchetti (e i loro pacchetti *-devel).</p>
Dipendenze opzionali :
<ul class="submenu">
	<li><b><u>librsvg</u></b> &gt;= 2.2.x, una libreria di renderer basata su SAX per i file SVG. Deve essere installata nel caso tu voglia utilizzare icone in formato SVG all'interno del pannello.
	<li><b><u>libstartup-notification</u></b> &gt;= 0.5, una libreria che deve essere installata se vuoi utilizzare la caratteristica <a href="index.php?page=documentation&lang=it#startup">notifica d'avvio </a>.
</ul>
<br>
<a name="install"></a><!-- install guide -->
<h2>Guida all'installazione</h2>
<p>Esistono tre metodi per installare Xfce :</p>
<ul class="submenu">
	<li>dal codice sorgente, la compilazione sarà eseguita tutta da te.
	<li>utilizzando i binari forniti per il tuo OS. Guarda la <a href="index.php?page=download&lang=it">pagina di download</a> per trovarli.
	<li>utilizzando l'installer grafico fornito da os-cillation; guarda <a href="http://www.os-cillation.com/article.php?sid=42">questa pagina</a> per i link di download e le istruzioni.
</ul>
<h3>Installazione da codice sorgente</h3>
<p>Se vuoi costruire Xfce da codice sorgente devi prima scaricare le tarball del sorgente della versione di Xfce di tuo interesse dalla nostra <a href="index.php?page=download&lang=it">pagina di download</a>, oppure prova una versione di sviluppo, scaricandola dal subversion (solamente per i più coraggiosi). Per favore ricorda che non è supportato installare due differenti versioni di Xfce (ad esempio la versione stabile e quella in sviluppo).</p>
<h4>Procurarsi il sorgente attraverso SVN</h4>
<p>Qui trovi le istruzioni basilari per prendere i moduli dal SVN. Per scoprire i moduli disponibili puoi utilizzare l'interfaccia <a href="http://svn.xfce.org/svn/xfce/">web</a> nel nostro archivio SVN.</p>

<p>You can download the full tree using the following command:</p>
<table width="100%"><tbody><tr><td bgcolor="E0E0E0"><tt>
svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</tt></td></tr></tbody></table>

<p>Please read <a href="http://svn.xfce.org/svn/xfce/modules/README">this file</a> to learn more about the Xfce 
Subversion repository shortcuts.</p>

<p>You can check out the appropriate modules:</p>
<table width="100%">
	<tbody>
		<tr>
			<td bgcolor="E0E0E0"><tt>
			svn co http://svn.xfce.org/svn/xfce/<i>$modulename</i>/trunk <i>$modulename</i></tt></td></tr></tbody></table>
			
<p>Il nome del modulo può essere uno dei seguenti moduli:</p>
<ul class="submenu">
		<?php include "edit/svn_modules_list.php"; ?>
</ul>
<h4>Costruire/compilare i moduli</h4>
<p>Se hai scaricato il tarball sorgente dovrai prima decomprimerlo.</p>
<p>Se installi in un prefisso differente da pkg-config, dovrai impostare la variabile PKG_CONFIG_PATH per includere il percorso dei files *.pc installati dalle librerie di Xfce 4 come $(prefix)/lib/pkgconfig. Ad esempio:</p>
<table width="100%">
	<tbody>
		<tr>
			<td bgcolor="E0E0E0"><tt>export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</tt></td>
			<td></td>
		</tr>
	</tbody>
</table>
<br>
<p>Per compilare i moduli non dovrai far altro che eseguire questi semplici comandi (uno alla volta) :</p>
<table width="100%">
	<tbody>
		<tr>
			<td bgcolor="E0E0E0"><tt>./configure &amp;&amp; make &amp;&amp; make install</tt></td>
		</tr>
	</tbody>
</table>
<p>nella cartella primaria di ogni singolo modulo, nel seguente ordine di compilazione :</p>
<ol>
<li>xfce4-dev-tools</li>
	<li>libxfce4util
	<li>libxfcegui4
	<li>libxfce4mcs
	<li>xfce-mcs-manager
	<li>tutti gli altri moduli (devi installare il pannello di xfce4 prima di compilare i plugin relativi a questo).<br>
</ol>
<p>Dopo aver installato una libreria, devi eseguire <tt>ldconfig</tt>. Questo è necessario per aggiungere /usr/local a /etc/ld.so.conf.</p>
<p>Se sorgono degli errori prova ad eseguire <tt>./autogen.sh</tt> al posto di <tt>./configure</tt>. In questo caso hai bisogno di aver installati automake, autoconf e libtool. Se non dovesse funzionare neanche in questo caso per favore riportail problema alla mailing list di xfce: xfce4-dev@xfce.org.</p>
<p>Il motore gtk-xfce-engine-2 deve essere installato utilizzando lo stesso percorso di installazione di GTK+, normalmente /usr. In questo caso devi utilizzare il seguente comando nella directory principale di gtk-xfce-engine-2 :</p>
<table width="100%">
	<tbody>
		<tr>
			<td bgcolor="E0E0E0"><tt>./configure --prefix=/usr &amp;&amp; make &amp;&amp; make install</tt></td>
		</tr>
	</tbody>
</table>
<p>Molti moduli di Xfce offrono caratteristiche opzionali che possono essere abilitate oppure disabilitate al momento della compilazione utilizzando specifiche opzioni nel comando configure. Qui troverai una lista dei moduli e delle rispettive opzioni:</p>
<table style="font-family: arial, helvetica, sans-serif; font-size: 12px; " width="80%" border="1" cellspacing="0" cellpadding="5" align="center">
	<tr>
		<td>xfwm4</td>
		<td>--enable-compositor</td>
		<td>abilita il compositing manager di xfwm4 (se Xorg &gt;= 6.8 è installato)</td>
	</tr>
	<tr>
		<td>xfce4-session</td>
		<td>--enable-session-screenshots</td>
		<td>abilita gli screenshots delle sessione al logout</td>
	</tr>
	<tr>
		<td rowspan="2">xfdesktop</td>
		<td>--disable-panel-plugin</td>
		<td>non compila i plugin del pannello</td>
	</tr>
	<tr>
		<td>--disable-desktop-menu</td>
		<td>non compila il modulo per il menu del desktop</td>
	</tr>
	<tr>
		<td>xfce4-panel</td>
		<td>--disable-startup-notification</td>
		<td>disabilita la libreria del controllo per la notifica d'avvio</td>
	</tr>
	<tr>
		<td rowspan="6">xffm</td>
		<td>--disable-extendprefs</td>
		<td>riduce la quantità di impostazioni configurabili dall'utente</td>
	</tr>
	<tr>
		<td>--disable-smbbranch</td>
		<td>disabilita samba</td>
	</tr>
	<tr>
		<td>--disable-filter</td>
		<td>disabilita il filtro realtime per i contenuti della cartella</td>
	</tr>
	<tr>
		<td>--disable-menu</td>
		<td>include un menu principale visibile</td>
	</tr>
	<tr>
		<td>--enable-scrambledir</td>
		<td>allow azioni e scambio tra directory</td>
	</tr>
	<tr>
		<td>--enable-panel</td>
		<td>include una toolbar con i launcher per il pannello</td>
	</tr>
</table>
<br>
<div align="right">
	<a style="color: #154374; " href="#top"><b>In alto nella pagina</b></a></div>
<a name="start">
	<h2>Eseguire Xfce 4</h2>
	<p>Utilizza <tt>startxfce4</tt> per avviare una sessione di Xfce; questa include un session manager, il pannello, il window manager e il manager dello sfondo del desktop. tutti i programmi oppure i relativi link simbolici all'interno di <tt>~/Desktop/Autostart/</tt> saranno eseguiti da startxfce4 al momento dell'avvio.</p>
	<p>Per personalizzare il comportamento di <tt>startxfce4</tt> copia <tt>${sysconfdir}/xdg/xfce4/xinitrc</tt> nel tuo personale <tt>~/.config/xfce4/xinitrc</tt> e modifica questo file. Se installi tramite codice sorgente <tt>${sysconfdir}</tt> per default è in <tt>/usr/local/etc</tt>; per i pacchetti binari è normalmente posizionata in <tt>/etc</tt>.</p>
	<!-- <p>In alternetiva, puoi creare il tuo file <tt>~/.xinitrc</tt> oppure
<tt>~/.xsession</tt> se utilizzi una login manager grafico.</p> -->
	<p>Il settings manager (xfce-mcs-manager) e il window manager vengono eseguiti in modalità 'daemon' che permette ai due di essere eseguiti in background. Quindi non aggiungere una '&amp;' dopo il comando. Per xfwm4 puoi aggiungere l'opzione <tt>--daemon</tt> oquando esegui il programma.</p>
	<p>Se non vuoi utilizzare la barra dei processi (taskbar), ma l'iconbox, e se utilizzi xfce4-session, devi uccidere xftaskbar4 ed eseguire xfce4-iconbox, ricorda di salvare la sessione al momento del logout.</p>
	<h4>Postinstallation Tasks</h4>
	<p>Dopo aver installato Xfce, puoi impostare le variabili d'ambiente $BROWSER e $TERMCMD per puntare rispettivamente al tuo browser e al tuo terminale preferito. Saranno utilizzati dagli script xfhelp4 e xfterm4 forniti da Xfce. Quindi aggiungi le seguenti linee al tuo ~/.bash_profile, quindi logout/login:</p>
	<table width="100%">
		<tbody>
			<tr>
				<td bgcolor="E0E0E0"><tt>export BROWSER=&quot;your_favorite_browser&quot;</tt><br>
					<tt>export TERMCMD=&quot;your_favorite_terminal&quot;</tt></td>
			</tr>
		</tbody>
	</table>
	<h4>Impostare GDM</h4>
	<p>Se hai installato Xfce 4.2 system-wide e utilizzi il Display Manager di GNOME (gdm) per avviare la tua sessione di X, devi creare un file .desktop per dire a gdm che è disponibile una nuova installazione di Xfce. Questo è un esempio di xfce42.desktop:</p>
	<table width="100%">
		<tbody>
			<tr>
				<td bgcolor="E0E0E0"><tt>[Desktop Entry]</tt><br>
					<tt>Encoding=UTF-8</tt><br>
					<tt>Name=Sessione Xfce 4.2</tt><br>
					<tt>Comment=Utilizza questa sessione per avviare Xfce 4.2 come tuo ambiente desktop</tt><br>
					<tt>Exec=/usr/local/bin/startxfce4</tt><br>
					<tt>Icon=/usr/local/share/pixmaps/xfce4_xicon1.png</tt><br>
					<tt>Type=Application</tt></td>
			</tr>
		</tbody>
	</table>
	<p>Puoi copiare il codice riportato come esempio nella directory per Sessione utilizzata da gdm;; questa directory normalmente è localizzata in /etc/dm/Sessions, /etc/X11/gdm/Sessions, /usr/share/xsessions, /usr/X11R6/share/gnome/xsessions oppure altri posti, fai riferimento alla documentazione del tuo sistema per maggiori dettagli. Hai inoltre bisogno di riavviare gdm dopo aver copiato il file.</p>
	<p>in questo modo, il tuo sistema cercherà la sessione disponibile in /usr/share/xsessions, quindi hai bisogno di completare questi ultimi passi (come super-utente) per registrare Xfce con gdm:</p>
	<table width="100%">
		<tbody>
			<tr>
				<td bgcolor="E0E0E0"><tt>cp /path/to/your/xfce42.desktop /usr/share/xsessions/xfce42.desktop</tt></td>
			</tr>
		</tbody>
	</table>
	<h4>Impostare KDM</h4>
	<p>Se hai installato Xfce 4.2 system-wide e utilizzi il Display Manager di KDE (kdm) per avviare la tua sessione di X, devi creare un file .desktop per dire a kdm che è disponibile una nuova installazione di Xfce. Devi localizzare la directory dove kdm andrà a cercare il file .desktop . Utilizza i seguenti comandi:</p>
	<table width="100%">
		<tbody>
			<tr>
				<td bgcolor="E0E0E0"><tt>locate kde.desktop</tt><br>
					<tt>locate mwm.desktop</tt></td>
			</tr>
		</tbody>
	</table>
	<p>Un aiuto per cercare queste directory. Normalmente sono posizionate in /usr/share/apps/kdm/sessions oppure /usr/local/share/apps/kdm/sessions. Una volta trovata la directory della sessione di kde, hai necessità di creare un nuovo file  xfce42.desktop in questa directory. All'interno deve contenere le seguenti righe:</p>
	<table width="100%">
		<tbody>
			<tr>
				<td bgcolor="E0E0E0"><tt>[Desktop Entry]</tt><br>
					<tt>Encoding=UTF-8</tt><br>
					<tt>Type=XSession</tt><br>
					<tt>Exec=/usr/local/bin/startxfce4</tt><br>
					<tt>TryExec=/usr/local/bin/startxfce4</tt><br>
					<tt>Name=Xfce 4.2</tt><br>
					<tt>Comment=The Xfce 4.2 Desktop Environment</tt></td>
			</tr>
		</tbody>
	</table>
	<p>Se non hai installato Xfce all'interno di /usr/local dovrai correggere le linee Exec e TryExec e farle puntare nella directory della tua installazione.</p>
	<p>Ora puoi fare il login per il nuovo desktop di Xfce utilizzando kdm. Se Xfce non viene visualizzato nell'interfaccia di kdm dovrai verificare il percorso dove hai posizionato il file xfce42.desktop e quindi riavviare kdm.</p>
	<br>
	
	
	<a name="faq"></a>
	
<h2>Xfce FAQ</h2>

<blockquote>

<a href="#startup">1. Cos'è l'opzione "use startup notification" (utilizza notifica d'avvio) ?</a><br>

<a href="#themes">2. Ho installato gtk-xfce-engine-2 ma i temi non figurano nella finestra delle impostazioni dell'interfaccia utente. Perché ?</a><br>

<a href="#iconbox">3. E' possibile cambiare l'icona usata nella iconbox associata ad una data applicazione ?</a><br>

<a href="#taskbar">4. Come disattivo la barra dei processi ?</a><br>

<a href="#plugins_colors">5. Ho installato un plugin per il pannello ma gli indicatori non utilizzano colori differenti. Cosa devo fare?</a><br>

<a href="#window_menu">6. Il menu che appare quando si clicca con il tasto sinistro sul menu della barra del titolo sembra essere lento. Come posso cambiare la velocità ?</a><br>

<a href="#corporate">7. Voglio utilizzare Xfce in un ambiente produttivo ma non voglio che gli utenti possano modificare i loro menu.</a><br>

<a href="#hidden_option_2">8. C'è un modo per disabilitare la possibilità di muovere e ridimensionare le finestre utilizzando il Bottone Alt + Click del mouse ?</a><br>

<a href="#xfterm4">9. Posso posso impostare un terminale di xfce (xfterm4) simile a...</a><br>

<a href="#apps">10. Esistono altre applicazioni basate sul framework di sviluppo di Xfce?</a><br>

<a href="#goodies">11. Dove posso trovare tutti i tools di monitorizzazione visibili sulle schermate del pannello?</a><br>

<a href="#xcomposite">12. Come posso abilitare la trasparenza del pannello e le ombre delle finestre?</a><br>

<a href="#icons">13. Dove sono i temi di icone che erano fornite ed utilizzavo durante l'uso di Xfce 4.0?</a><br>

<a href="#stock">14. Come posso utilizzare le icone stock del pacchetto xfce4-icon-theme?</a><br>

<a href="#logout">15. Come posso abilitare l'opzione shutdown/reboot nella finestra di dialogo di logout del session-manager?</a><br>

<a href="#layer">16. Come posso impostare i livelli del pannello in Xfce 4.2?</a><br>

<a href="#xfprint">17. Come posso configurare xfprint?</a><br>

<a href="#transparency">18. Posso cambiare il valore della trasparenza per il pannello (oppure l'iconbox)?</a><br>

</blockquote>

<br>

<a name="startup">
<p><b>1. Cos'è l'opzione "use startup notification" (utilizza notifica d'avvio) ?</b></p>

		<p>Se selezioni questa opzione, il window manager mostrerà una clessidra mentre un programma viene caricato. La libreria startup-notification deve essere installata. Probabilmente è disponibile all'interno della tua distribuzione. Questa caratteristica è supportata solamente dalle nuove applicazioni (basate su Gtk2.x e Qt3.x).<br>Per favore, nota che Xfce 4 garantisce il corretto funzionamento solamente con la versione 0.5 della libreria startup-notification.</p>


<a name="themes">
<p><b>2. Ho installato gtk-xfce-engine-2 ma i temi non figurano nella finestra delle impostazioni dell'interfaccia utente. Perché ?</b></p>

		<p>Il pacchetto gtk-xfce-engine-2 deve essere installato utilizzando lo stesso prefisso usato per Gtk2. Quando installi da sorgente, il motore, per default, viene installato in /usr/local, mentre Gtk2 è installato in /usr. Devi nuovamente installare gtk-xfce-engine-2 utilizzando <code>./configure --prefix=/usr</code>, i temi in questo modo saranno disponibili.</p>


<a name="iconbox">
<p><b>3. E' possibile cambiare l'icona usata nella iconbox associata ad una data applicazione ?</b></p>

		<p>Non è possibile. Questa impostazione è gestita direttamente dall'applicazione.</p>


<a name="taskbar">
<p><b>4. Come disattivo la barra dei processi ?</b></p>

		<p>Essa non viene avviata all'avvio</p>
		
		<p>Se utilizzi il session-manager, uccidi la taskbar, salva la tua sessione e fai il logout, 
		al tuo ritorno non sarà più presente.</p>
		
		<p>Se non utilizzi il session manager, commenta la linea <tt>xftaskbar4&amp;</tt> nel
		tuo <tt>$sysconfdir/xdg/xfce4/xinitrc</tt> oppure <tt>~.config/xfce4/xinitrc</tt>.</p>
		
		<p>Se utilizzi il session manager e vuoi rimuovere la taskbar system-wide, commenta la linea 
		della taskbar nel tuo file $sysconfdir/xdg/xfce4-session/xfce4-session.rc.</p>


<a name="plugins_colors">
<p><b>5. Ho installato un plugin per il pannello ma gli indicatori non utilizzano colori differenti. Cosa devo fare?</b></p>

		<p>Primo, prova un altro tema di Gtk, poiché molti temi sovrascrivono i colori. Se questo non risolve il problema probabilmente hai un vecchio ~/.gtkrc-2.0 : rimuovilo e prova ancora.</p>


<a name="window_menu">
<p><b>6. Il menu che appare quando si clicca con il tasto sinistro sul menu della barra del titolo sembra essere lento. Come posso cambiare la velocità ?</b></p>

		<p>La velocità del menù che appare con il singolo click del tasto sinistro è collegata alla velocità del doppio click. Se vuoi che il menù appaia velocemente, devi modificare la velocità del doppio click nelle proprietà del mouse nel Gestore delle impostazioni. Altrimenti puoi cliccare sulla barra del titolo utilizzando il tasto destro del mouse, ciò farà si che il menù compaia instantaneamente senza che tu debba modificare le impostazioni del doppio click. Il medesimo menù può essere visualizzato in questi due modi.</p>


<a name="corporate">
<p><b>7. Voglio utilizzare Xfce in un ambiente produttivo ma non voglio che gli utenti possano modificare i loro menu.</b></p>

		<p>Utilizza la modalità kiosk mode (leggi la documentazione del pannello).</p>


<a name="hidden_option_2">
<p><b>8. C'è un modo per disabilitare la possibilità di muovere e ridimensionare le finestre utilizzando il Bottone Alt + Click del mouse ?</b></p>

		<p>Devi semplicemente modificare il tuo $HOME/.xfce4/xfwm4rc (oppure crearne uno nuovo) e aggiungere questa linea:<br><br>
		easy_click=false<br><br>
		Oppure semplicemente uccidendo -HUP [pid di xfwm4]</p>
		
		<p>Esistono numerose altre opzioni nascoste per xfwm4. Sono riportate nella sua documentazione.</p>

		
<a name="xfterm4">
<p><b>9. Posso posso impostare un terminale di xfce (xfterm4) simile a...</b></p>

		<p>xfterm4 è uno script che ha il compito di chiamare il terminale definito su TERMCMD oppure, per default, xterm.</p>
		
		<p>Se utilizzi xterm, <a href="various/Xresources.txt">qui</a> trovi un
esempio di un grazioso file ~/.Xresources che imposta un look molto bello.</p>


<a name="apps">
<p><b>10. Esistono altre applicazioni basate sul framework di sviluppo di Xfce?</b></p>

		<p>Visita <a href="http://www.xfce.org/~benny/apps.html">questa pagina</a> per scoprire altre applicazioni lagate ad Xfce.</p>


<a name="goodies">
<p><b>11. Dove posso trovare tutti i tools di monitorizzazione visibili sulle schermate del pannello?</b></p>

		<p>Sono disponibili nella pagina degli <a href="http://xfce-goodies.berlios.de/">Xfce Goodies</a>.</p>
		

<a name="xcomposite">
<p><b>12. Come posso abilitare la trasparenza del pannello e le ombre delle finestre?</b></p>

		<p>Xfwm4 include un suo compositing manager che permette la trasparenza per il pannello e le ombre per le finestre. Il compositing manager utilizza le estensioni Xcomposite di 
		<a href="http://xorg.freedesktop.org/wiki/">X.org</a> >= X11R6.8.0, prima però devi aver avviato questa versione del server grafico.</p>
		
		<p>Le estensioni composite vengono attivate nel tuo /etc/X11/xorg.conf utilizzando la 
		seguente sezione:<br><br>
		Section "Extensions"<br>
		&nbsp;&nbsp;&nbsp;&nbsp;Option "Composite" "Enable"<br>
		EndSection</p>
		
		<p>Xfwm4 è stato configurato con l'opzione di configurazione <em>--enable-compositor</em>, anche se non è abilitata di default. Se hai installato Xfce utilizzando i binari forniti per la tua distribuzione, dovrai, con ogni probabilità, ricompilare xfwm4.</p>
		
		<p>Fai attenzione, le estensioni composite di X.org Composite extension sono tuttora in sviluppo e possono contenere degli errori. Utilizzare il compositing manager può far rallentare il tuo ambiente se la scheda video montata sul tuo computer non supporta il RENDER hardware. Questo funziona molto bene con le schede video e drivers NVidia, in special modo se se aggiungi l'opzione <em>Option "RenderAccel" "true"</em> nella sezione specifica al dispositivo nel file xorg.conf. Tieni presente però che Xinerama e TwinView non girano bene con il composite.</p>
		
<a name="icons">
<p><b>13. Dove sono i temi di icone che erano fornite ed utilizzavo durante l'uso di Xfce 4.0?</b></p>

		<p>Xfce 4.2 ora fornisce soltanto un tema di icone, chiamato xfce4-icon-theme. La versione 4.2  
		del pannello segue il tema di icone generale. Puoi selezionarle nel tab "Icon theme" nella finestra di dialogo delle impostazioni dell'interfaccia utente, qui troverai una lista di tutti i temi installati nelle directories $datadir/icons e 
		~/.icons.</p>
		

<a name="stock">
<p><b>14. Come posso utilizzare le icone stock del pacchetto xfce4-icon-theme?</b></p>
		
		<p>xfce4-icon-theme fornisce un file $datadir/icons/Rodent/iconrc (per le icone SVG) e un 
		file $datadir/icons/Rodent/iconrc-png (per le icone PNG, se non vuoi utilizzare le SVG, oppure 
		non hai il supporto per questo formato). Se vuoi utilizzare le icone Gtk stock fornite 
		con xfce4-icon-theme, aggiungi la seguente linea nel tuo file 
		$datadir/themes/<em>favorite_theme</em>/gtk-2.0/gtkrc:<br><br>
		include "path/to/iconrc"<br><br>
		ora seleziona il tuo tema preferito.
		</p>


<a name="logout">
<p><b>15. Come posso abilitare l'opzione shutdown/reboot nella finestra di dialogo di logout del session-manager?</b></p>
		
		<p>Devi permettere all'utente(i) di eseguite $installdir/libexec/xfsm-shutdown-helper con 
		sudo. Per favore installa sudo, e leggi la documentazione di xfce4-session e sudo.</p>


<a name="layer">
<p><b>16. Come posso impostare i livelli del pannello in Xfce 4.2?</b></p>

		<p>Questa opzione è stata eliminata da Xfce 4.2 in modo di migliorare il focus management.</p>


<a name="xfprint">
<p><b>17. Come posso configurare xfprint?</b></p>

		<p>Xfprint non è un tool per la configurazione della stampante. E' un interfaccia grafica tra Xfce e il sistema di stampa. Supporta CUPS, BSD-LPR (supporto minimo) e 
		File (ps). Per compilare ed installare Xfprint, hai bisogno dei pacchetti a2ps e psutils, 
		e i pacchetti devel di CUPS se utilizzi questo sistema di stampa (./configure controlla la 
		presenza di BSD-LPR nel tuo sistema). Xfprint fornisce i tools xfprint4 e xfprint-manager.</p>
		
		<p>Puoi avviare la finestra delle impostazioni di Xfprint dal settings manager di Xfce, e 
		selezionare il sistema di stampa che vuoi utilizzare. Le stampanti configurare saranno automaticamente trovare e rese disponibili in Xfprint.</p>
		
		<p>Il comando xfprint4 ti permette di inviare alla stampante attraverso l'utilizzo della linea di comando. 
		Se aggiungi questo in un laugher del pannello, ti permette di inizializzare una finestra di dialogo per la scelta del file, oppure di fare il drag and drop di file dal file manager.</p>
		
		<p>Il xfprint-manager da assesso alle informazioni di stampa e alla coda dei processi di stampa (se utilizzi CUPS).</p>

<a name="transparency">
<p><b>18. Posso cambiare il valore della trasparenza per il pannello (oppure l'iconbox)?</b></p>

<p>Se utilizzi <a href="http://xorg.freedesktop.org/wiki/">X.org</a> >= X11R6.8.0 con le estensioni Composite abilitate, puoi creare il file ~.config/xfce4/transparency se vuoi cambiare il valore della trasparenza per il pannello (oppure l'iconbox). Crea il file e aggiungi una linea con il "format panel=<i>value</i>", dove il valore è un numero compreso tra 0 e 100. Impostato a 0 porta la trasparenza su off.</p>

<p>Esistono numerose opzioni per cambiare il comportamento del compositing manager. Leggi la documentazione di xfwm4 e xfce4-panel per saperne di più.</p>



<div align="right"><a href="#top" style="color: #154374; "><b>In alto nella pagina</b></a></div><br><br>
