<h1>Codice sorgente della versione in sviluppo di Xfce</h1>

<p>
Per compilare Xfce da codice sorgente, si possono scaricare i pacchetti compressi di
una versione rilasciata di Xfce dalla <a href="/download">pagina di scaricamento</a>,
oppure provare una versione in sviluppo, scaricandola da subversion (solo per i più
avventurosi). Si noti che non è possibile installare contemporaneamente due versioni 
differenti di Xfce (per esempio stabile e in sviluppo).</p>

<h3>Ultima versione rilasciata (4.6.x)</h3>

<p>
Questa versione contiene le correzioni ai bug più recenti senza le ultime nuove funzionalità. 
Dovrebbe essere più stabile della versione in sviluppo (e dell'ultima versione ufficiale rilasciata)
ma non è fornita alcuna garanzia sull'assenza di bug.
</p>

<h3>Ultima versione in sviluppo (4.7.x) </h3>

<p>
Questa versione contiene gli ultimi aggiornamenti e correzioni di bug. Non è fornita
alcuna garanzia sul buon funzionamento di questa versione.
</p>

<h2>Ottenere il codice sorgente</h2>

<p>
Per consultare un elenco dei moduli e componenti disponibili, è possibile
<a href="http://git.xfce.org/" class="external">sfogliare il deposito GIT</a>.
</p>

<h3>Ultima versione rilasciata (4.6.x) dal deposito GIT</h3>

<p>È possibile scaricare il modulo desiderato con il seguente comando:</p>

<p>
<code class="code">git clone -b xfce-4.6 git://git.xfce.org/category/$nome-del-modulo</code>
</p>

<p>Per esempio:</p>

<p>
<code class="code">git clone -b xfce-4.6 git://git.xfce.org/xfce/xfce4-panel</code>
</p>

<h3>Ultima versione in sviluppo (4.7.x) dal deposito GIT</h3>

<p>È possibile scaricare il modulo desiderato con il seguente comando:</p>

<p>
<code class="code">git clone git://git.xfce.org/category/$nome-del-modulo</code>
</p>

<p>Per esempio:</p>

<p>
<code class="code">git clone git://git.xfce.org/xfce/xfce4-panel</code>
</p>

<div class="tip">Per sincronizzare la propria copia locale (checkout) della struttura della 
versione in sviluppo o di rilascio con la versione sul server, usare il comando
<code>git pull</code> in luogo di <code>git clone</code>. Questo renderà il processo più veloce
e minimizzerà il carico sul server di Xfce.
</div>

<h2>Compilare i moduli</h2>

<p>
Se è stato scaricato il pacchetto compresso, è necessario decomprimerlo prima di proseguire.
</p>

<p>
Se si intende installare in un prefisso diverso da pkg-config, è necessario impostare la
variabile PKG_CONFIG_PATH per includere il percorso ai file di estensione .pc installati
dalle librerie XFce, che è ${prefix}/lib/pkgconfig. Per esempio:
</p>

<p>
<code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code>
</p>

<p>Per compilare il modulo proveniente da un pacchetto compresso eseguire:</p>

<p>
<code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code>
</p>

<p>Per compilare i moduli provenienti da GIT eseguire il seguente comando (è richiesto il pacchetto xfce4-dev-tools): </p>

<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>

<p>La pagina dei <a href="/documentation/requirements">requisiti</a> elenca tutte le dipendenze
richieste e l'ordine di compilazione dei singoli moduli.</p>
