<?php
    include ("version.php");
?>
<h1>Télécharger la version stable (<?php echo $version; ?>) </h1>
<p>La plupart des distributions contiennent Xfce. Mais si vous voulez une version plus récente ou si vous désirez compiler Xfce vous même, vous trouverez les paquets ci-dessous. Vous pouvez aussi voir les distributions qui fournissent un environnement de bureau Xfce par défaut <a href="/download/distros">ici</a>.</p>

<h2 id="source">Code source</h2>
<p>Tous les modules Xfce sont disponibles dans un fichier archive depuis notre dépôt SourceForge et différents autres mirroirs (dans une unique archive <em>ou</em> dans plusieurs fichiers séparés) :</p>
<?php printServers("", $servers); ?>


<h2 id="installer">Installeur graphique</h2>
<p> Xfce-Installers est une collection de paquets mis ensemble pour simplifier grandement l'installation de Xfce et certaines extensions. Apprenez-en plus à propos de l'installateur <a href="/documentation/installers/xfce/index.html">ici</a>. </p>
<?php printServers("installers", $servers); ?>


<h2 id="binaries">Paquets</h2>
<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian Testing / Unstable</strong><br />
      <a href="http://pkg-xfce.alioth.debian.org/" target="_blank">Groupe Debian Xfce</a></td>
  </tr>
  <!--
  <tr>
    <td><img src="../../images/download/fedora.png" alt="Fedora" width="40" height="40" /></td>
    <td><strong>Redhat &amp; Fedora</strong><br />
    <a href="http://sourceforge.net/project/showfiles.php?group_id=19869&package_id=187881&release_id=<?php echo $sf_release_id; ?>" target="_blank">SourceForge.net<br />
    </a><a href="http://mocha.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> <br />
    <a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/installers/" target="_blank">p0llux.be</a></td>
  </tr>
  -->
  <tr>
    <td><img src="../../images/download/suse.png" alt="Suse" width="40" height="40" /></td>
    <td><strong>openSUSE (SUSE Linux)</strong><br />
      <a href="http://en.opensuse.org/X11:xfce" target="_blank">Dépôt pour openSUSE (SUSE Linux)</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/mandriva.png" alt="Mandriva" width="40" height="40" /></td>
    <td><strong>Mandriva &amp; Mandrake</strong><br />
      <a href="ftp://mandrivauser.de/rpm/GPL/" target="_blank">ftp://mandrivauser.de/rpm/GPL/</a><br />
      <a href="http://www.eslrahc.com/" target="_blank">http://www.eslrahc.com/</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/solaris.png" alt="Solaris" width="40" height="40" /></td>
    <td><strong>Solaris SPARC/x86/AMD</strong><br />
      <a href="http://www.blastwave.org" target="_blank">http://www.blastwave.org</a></td>
  </tr>
</table>
