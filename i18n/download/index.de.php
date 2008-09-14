<?php
    $top=true;
    include ("version.php");
?>
<a name="stable"></a>
<h1>Laden Sie die aktuelle stabile Version (<?php echo $version; ?>) herunter.</h1>
<p>Die meisten Distributionen werden bereits mit Xfce ausgeliefert. Falls Sie allerdings eine neuere Version verwenden oder Xfce von Grund auf selbst kompilieren möchten, können Sie weiter unten die notwendigen Pakete herunterladen. Sie können sich auch <a href="/download/distros">hier</a> über auf Xfce ausgerichtete Distributionen informieren.</p>

<h2 id="source">Quellcode</h2>
<p>Alle Module stehen als komplettes Tar-Archiv  in unseren Paketquellen bei SourceForge  zur Verfügung, oder auch auf diversen Spiegelseiten (als ein Tar-Archiv <em>oder</em> als mehrere Einzelarchive):</p>
<ul>
  <li><a href="<?php echo $sf_net; ?>" target="_blank">SourceForge.net</a></li>
  <li><a href="/archive/xfce-<?php echo $version; ?>" target="_blank">xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> </li>
  <li><a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/" target="_blank">p0llux.be</a></li>
  <!-- <li><a href="http://public.fh-wolfenbuettel.de/~luedickj/xfce4/xfce-<?php echo $version; ?>/">http://public.fh-wolfenbuettel.de/~luedickj/xfce4/xfce-<?php echo $version; ?>/</a></li> -->
  <li><a href="http://hannelore.f1.fhtw-berlin.de/mirrors/xfce4/xfce-<?php echo $version; ?>/" target="_blank">Hannelore</a></li>
</ul>
<h2 id="installer">Graphische Installationsassistenten</h2>
<p>Die Xfce-Installationsassistenten sind eine Sammlung von Paketen, die den Installationsprozess von Xfce und einigen Xfce-Erweiterungen spürbar erleichtern. <a href="http://www.os-cillation.com/index.php?id=31&amp;L=5" target="_blank">Hier</a> erfahren Sie mehr über den Xfce-Installationsassistenten.</p>
<ul>
  <li>Xfce-Installationsassistent
    <ul>
      <li><a href="http://prdownloads.sourceforge.net/xfce/xfce4-<?php echo $version; ?>-installer.bin?download" target="_blank">SourceForge.net</a></li>
      <li><a href="/archive/xfce-<?php echo $version; ?>/installers/" target="_blank">xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>/installers/" target="_blank">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> </li>
      <li><a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/installers/" target="_blank">p0llux.be</a></li>
      <li><a href="http://hannelore.f1.fhtw-berlin.de/mirrors/xfce4/xfce-<?php echo $version; ?>/installers/" target="_blank">Hannelore</a></li>
    </ul>
  </li>
  <li><a href="http://www.os-cillation.com/index.php?id=32&amp;L=5" target="_blank">Xfce-GTK-Engine-Installationsassistent</a></li>
  <li><a href="http://www.os-cillation.com/index.php?id=33&amp;L=5" target="_blank">Xfce-Goodies-Installationsassistent</a></li>
  <li><a href="http://www.os-cillation.com/index.php?id=34&amp;L=5" target="_blank">Terminal-Installationsassistent</a></li>
</ul>
<h2 id="binaries">Binärdateien</h2>
<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian Testing / Unstable</strong><br />
      <a href="http://os-cillation.de/index.php?id=23&amp;L=5" target="_blank">os-cillation.de</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/fedora.png" alt="Fedora" width="40" height="40" /></td>
    <td><strong>Redhat &amp; Fedora</strong><br />
    <a href="<?php echo $sf_net; ?>" target="_blank">SourceForge.net<br />
    </a><a href="/archive/xfce-<?php echo $version; ?>" target="_blank">xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> <br />
    <a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/installers/" target="_blank">p0llux.be</a><br />
    <a href="http://hannelore.f1.fhtw-berlin.de/mirrors/xfce4/xfce-<?php echo $version; ?>/installers/" target="_blank">Hannelore</a><a href="http://hannelore.f1.fhtw-berlin.de/mirrors/xfce4/xfce-4.2.2/" target="_blank"></a></td>
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

<?php if(isset($version_unstable)) { ?>

<a name="unstable"></a>
<h1>Download Unstable version (<?php echo $version_unstable; ?>) </h1>
<p>
Below you can find download locations for the latest development/unstable
release of Xfce.  Note that this software almost certainly contains bugs,
many of which might affect your desire to use it in a production
environment.  You should back up all configuration files before installing
and using these releases.  If you're uncertain about downloading this
release, you should probably use the <a href="#stable">stable version</a>
above.
</p>

<h2 id="source-unstable">Source code</h2>
<p>All Xfce modules are available in one single tarball from our SourceForge  repository, and from several mirrors (in one single tarball <em>or</em> separate  tarballs):</p>
<?php printServers("", $servers_unstable); ?>

<?php } /* isset($version_unstable) */ ?>
