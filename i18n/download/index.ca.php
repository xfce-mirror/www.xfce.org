<?php
    include_once ("version.php");
?>
<a name="stable"></a>

<h1>Descarregar la darrera versió estable (<?php echo $version; ?>) </h1>

<p>
La majoria de distribucions inclouen Xfce. Però si voleu una nova versió, o bé, voleu
instal·lar-vos Xfce des del codi font, podeu trobar els paquets més avall. A més. podeu donar
un cop d'ull a la llista de distribucions basades en Xfce <a href="/download/distros">aquí</a>.
</p>

<h2 id="source">Codi font</h2>

<p>
Tots els mòduls de Xfce estan disponibles en un sol paquet del nostre repositori SourceForge i
en diversos miralls (en un sol paquet <em>o</em> en paquets separats).
</p>

<?php printServers("", $servers); ?>

<h2 id="installer">Instal·ladors gràfics</h2>

<p>
Els instal·ladors de Xfce són una col·lecció de paquets que simplifiquen notablement
el procés d'instal·lació de Xfce i algunes de les seves extensions. Podeu llegir més sobre
aquest tipus d'instal·ladors <a href="/documentation/installers/xfce/index.html">aquí</a>.
</p>

<?php printServers("installers", $servers); ?>

<h2 id="binaries">Binaris</h2>

<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian Testing / Unstable</strong><br />
      <a href="http://pkg-xfce.alioth.debian.org/">Grup Xfce de Debian</a></td>
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
      <a href="http://en.opensuse.org/X11:xfce">Repositories for openSUSE (SUSE Linux)</a></td>
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

<h1>Descarregar la darrera versió inestable (<?php echo $version_unstable; ?>) </h1>

<p>
A sota podreu trobar els llocs de descarrega per a la darrera versió de 
desenvolupament/inestable de Xfce. Tingueu present que aquest programari 
contindrà errors que podrien afectar el vostre interès en usar-lo en un
entorn de producció. Feu còpies de seguretat dels vostres fitxers de 
configuració abans d'instal·lar i usar alguna d'aquestes versions. Si no
esteu segurs si heu de descarregar aquesta versió, molt probablement 
hauríeu d'usar la <a href="#stable">versió estable</a> esmentada anteriorment.
</p>

<h2 id="source-unstable">Codi font</h2>

<p>
Tots els mòduls de Xfce estan disponibles en un sol paquet del nostre repositori SourceForge i
en diversos miralls (en un sol paquet <em>o</em> en paquets separats).
</p>

<?php printServers("", $servers_unstable); ?>

<?php } /* isset($version_unstable) */ ?>
