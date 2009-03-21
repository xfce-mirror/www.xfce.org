<?php
    include_once ("version.php");
?>
<a name="stable"></a>

<h1>Hent den stabile version (<?php echo $version; ?>) </h1>

<p>
De fleste distributioner bliver leveret med Xfce. Men hvis du gerne vil have en nyere version
eller du har lyst til at bygge Xfce op fra bunden af, kan du finde pakkerne herunder. Du kan også
tage et kig på en liste over distributioner, der er baseret på Xfce <a href="/download/distros">her</a>.
</p>

<h2 id="source">Kildekode</h2>

<p>
Alle Xfce-moduler er tilgængelige i et enkelt tar-arkiv, fra vores SourceForge-arkiv,
og fra adskillige spejle (i et enkelt tar-arkiv <em>eller</em> separate  tar-arkiver):
</p>

<?php printServers("", $servers); ?>

<h2 id="installer">Grafiske installatører</h2>

<p>
Installatører til Xfce er en samling af pakker, der gør installationsprocessen
af Xfce og nogle udvidelser betydelig nemmere. Læs mere om installatørerne
<a href="/documentation/installers/xfce/index.html">her</a>.
</p>

<?php printServers("installers", $servers); ?>

<h2 id="binaries">Binære</h2>

<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian testing / Ustabil</strong><br />
      <a href="http://pkg-xfce.alioth.debian.org/">Xfce-gruppe i Debian</a></td>
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
      <a href="http://en.opensuse.org/X11:xfce">Arkiver til openSUSE (SUSE Linux)</a></td>
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

<h1>Hent ustabil version (<?php echo $version_unstable; ?>) </h1>

<p>
Herunder kan du finde steder du kan hente den seneste udviklings/ustabile
udgivelse af Xfce. Bemærk at dette programmel højst sandsynligt indeholder fejl,
hvoraf mange kan påvirke dit ønske, om at bruge det i et produktionsmiljø. Du bør 
lave en sikkerhedskopi af alle dine konfigurationsfiler, før du installerer og bruger
disse udgivelselser. Hvis du er usikker på, hvorvidt du skal hente denne udgivelse, bør du 
nok bruge den <a href="#stable">stabile version</a>, som vist ovenfor i stedet.

</p>

<h2 id="source-unstable">Kildekode</h2>

<p>
Alle Xfce-moduler er tilgængelige i et enkelt tar-arkiv, fra vores SourceForge-arkiv,
og fra adskillige spejle (i et enkelt tar-arkiv <em>eller</em> separate tar-arkiver):
</p>

<?php printServers("", $servers_unstable); ?>

<?php } /* isset($version_unstable) */ ?>
