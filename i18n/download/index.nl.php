<?php
    include ("version.php");
?>
<h1>Download de stabiele versie (<?php echo $version; ?>) </h1>
<p>De meeste distributies hebben Xfce in hun pakkettenlijst, maar wanneer je een nieuwere versie van Xfce wilt gebruiken (of je wilt Xfce gewoon zelf compilen), dan kan je hieronder de laatste pakketten downloaden. Je kan ook <a href="/download/distros">hier</a> kijken naar de Xfce georienteerde distributies.</p>

<h2 id="source">Broncode</h2>
<p>Alle Xfce modules zijn beschikbaar in losse archieven van de SourceForge servers of op 1 van de Xfce servers:</p>
<?php printServers("", $servers); ?>


<h2 id="installer">Installatiepakketten</h2>
<p>De Xfce installatiepekketten zijn een grafische installatie methode die het installeren van Xfce, en andere extensies, aanzienlijk moeten versimpelen. Je kan <a href="http://www.os-cillation.com/index.php?id=31&amp;L=5" target="_blank">hier</a> meer lezen over deze installer.</p>
<?php printServers("installers", $servers); ?>


<h2 id="binaries">Binaries</h2>
<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian Testing / Unstable</strong><br />
      <a href="http://pkg-xfce.alioth.debian.org/" target="_blank">Debian Xfce Group</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/fedora.png" alt="Fedora" width="40" height="40" /></td>
    <td><strong>Redhat &amp; Fedora</strong><br />
    <a href="http://sourceforge.net/project/showfiles.php?group_id=19869&package_id=187881&release_id=<?php echo $sf_release_id; ?>" target="_blank">SourceForge.net<br />
    </a><a href="http://mocha.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">xfce.org</a> | <a href="http://www.us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">us.xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> <br />
    <a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/installers/" target="_blank">p0llux.be</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/suse.png" alt="Suse" width="40" height="40" /></td>
    <td><strong>openSUSE (SUSE Linux)</strong><br />
      <a href="http://en.opensuse.org/X11:xfce" target="_blank">Repositories for openSUSE (SUSE Linux)</a></td>
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
