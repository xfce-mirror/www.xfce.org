<?php
    include_once ("version.php");
?>
<a name="stable"></a>

<h1>Scaricamento della versione stabile (<?php echo $version; ?>) </h1>

<p>
La maggior parte delle distribuzioni contiene già Xfce. Se però si desidera avere una 
nuova versione o si intende compilarlo da sorgente, più avanti sono indicati i pacchetti 
per farlo.
È anche possibile consultare un <a href="/download/distros">elenco di distribuzioni</a>
che integrano Xfce.
</p>

<h2 id="source">Codice sorgente</h2>

<p>
Tutti i moduli di Xfce sono disponibili in un unico archivio dal deposito SourceForge e
da altri mirror (in un unico archivio <em>o</em> in archivi separati):
</p>

<?php printServers("", $servers); ?>

<!--
<h2 id="installer">Installatori grafici</h2>

<p>
Xfce-Installer è una collezione di pacchetti che semplificano notevolmente il processo di
installazione di Xfce e di alcune sue estensioni. Maggiori informazioni sull'installatore
sono raggiungibili <a href="/documentation/installers/xfce/index.html">qui</a>.
</p>

<?php printServers("installers", $servers); ?>
-->

<h2 id="binaries">Binari</h2>

<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian Testing / Instabile</strong><br />
      <a href="http://pkg-xfce.alioth.debian.org/">Gruppo Xfce di Debian</a></td>
  </tr>
  <!--
  <tr>
    <td><img src="../../images/download/fedora.png" alt="Fedora" width="40" height="40" /></td>
    <td><strong>Redhat &amp; Fedora</strong><br />
    <a href="http://sourceforge.net/project/showfiles.php?group_id=19869&package_id=187881&release_id=<?php echo $sf_release_id; ?>">SourceForge.net<br />
    </a><a href="http://mocha.xfce.org/archive/xfce-<?php echo $version; ?>">xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> <br />
    <a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/installers/">p0llux.be</a></td>
  </tr>
  -->
  <tr>
    <td><img src="../../images/download/mandriva.png" alt="Mandriva" width="40" height="40" /></td>
    <td><strong>Mandriva &amp; Mandrake</strong><br />
      <a href="ftp://mandrivauser.de/rpm/GPL/">ftp://mandrivauser.de/rpm/GPL/</a><br />
      <a href="http://www.eslrahc.com/">http://www.eslrahc.com/</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/suse.png" alt="Suse" width="40" height="40" /></td>
    <td><strong>openSUSE (SUSE Linux)</strong><br />
      <a href="http://en.opensuse.org/X11:xfce">Desposito per openSUSE (SUSE Linux)</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/solaris.png" alt="Solaris" width="40" height="40" /></td>
    <td><strong>Solaris SPARC/x86/AMD</strong><br />
      <a href="http://www.blastwave.org">http://www.blastwave.org</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/xubuntu.png" alt="Xubuntu" width="40" height="40" /></td>
    <td><strong>Xubuntu</strong><br />
      <a href="http://www.xubuntu.org">http://www.xubuntu.org</a></td>
  </tr>
</table>

<?php if(isset($version_unstable)) { ?>

<a name="unstable"></a>

<h1>Scaricamento della versione instabile (<?php echo $version_unstable; ?>) </h1>

<p>
Nel seguito sono riportate le posizioni di scaricamento per l'ultima versione instabile e in 
sviluppo di Xfce. Questa versione contiene sicuramente dei bug, molti dei quali probabilmente
renderanno problematico l'utilizzo di questa versione in ambiente produttivo. 
Si consiglia di effettuare una copia di sicurezza di tutti i file di configurazione prima di
installare ed utilizzare questa versione.
Se non si è certi di voler scaricare questa versione, allora si consiglia di utilizzare
la <a href="#stable">versione stabile</a>.
</p>

<h2 id="source-unstable">Codice sorgente</h2>

<p>
Tutti i moduli di Xfce sono disponibili in un unico archivio dal deposito SourceForge e
da altri mirror (in un unico archivio <em>o</em> in archivi separati):
</p>

<?php printServers("", $servers_unstable); ?>

<?php } /* isset($version_unstable) */ ?>
