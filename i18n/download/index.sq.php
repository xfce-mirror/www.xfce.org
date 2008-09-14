<?php
    include ("version.php");
?>
<a name="stable"></a>
<h1>Shkarkoni versionin e Qëndrueshëm (<?php echo $version; ?>) </h1>
<p>Shumica e shpërndarjeve qarkullojnë me Xfce-në të përfshirë. Por nëse doni një version më të ri, ose 
 doni të formoni Xfce-në nga fillimi, paketat mund t'i gjeni më poshtë. <a href="/download/distros">Këtu</a> 
 mund t'u hidhni një sy shpërndarjeve me bazë Xfce-në.</p>

<h2 id="source">Kod burim</h2>
<p>Tërë modulet Xfce janë të passhëm prej depozitës sonë në SourceForge, brenda një arkive të vetme të ngjeshur, dhe prej disa pasqyrash (në një arkivë të vetme <em>ose</em> si arkiva të ndara veçmas):</p>
<?php printServers("", $servers); ?>

<h2 id="installer">Instaluesa grafikë</h2>
<p> Xfce-Installers është një grumbull paketash që thjeshtësojnë dukshëm procesin e instalimit të Xfce-së
 dhe të disa zgjerimeve. Lexoni më tepër rreth instaluesit <a href="/documentation/installers/xfce/index.html">këtu</a>. </p>
<?php printServers("installers", $servers); ?>

<h2 id="binaries">Dyorë</h2>
<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Për provë me Debian/ I paqëndrueshëm</strong><br />
      <a href="http://os-cillation.de/index.php?id=23&amp;L=5" target="_blank">os-cillation.de</a></td>
  </tr>
  <!--
  <tr>
    <td><img src="../../images/download/fedora.png" alt="Fedora" width="40" height="40" /></td>
    <td><strong>Redhat &amp; Fedora</strong><br />
    <a href="<?php echo $sf_net; ?>" target="_blank">SourceForge.net<br />
    </a><a href="/archive/xfce-<?php echo $version; ?>" target="_blank">xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> <br />
    <a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/installers/" target="_blank">p0llux.be</a><br />
    <a href="http://hannelore.f1.fhtw-berlin.de/mirrors/xfce4/xfce-<?php echo $version; ?>/installers/" target="_blank">Hannelore</a><a href="http://hannelore.f1.fhtw-berlin.de/mirrors/xfce4/xfce-4.2.2/" target="_blank"></a></td>
  </tr>
  -->
  <tr>
    <td><img src="../../images/download/suse.png" alt="Suse" width="40" height="40" /></td>
    <td><strong>openSUSE (SUSE Linux)</strong><br />
      <a href="http://en.opensuse.org/X11:xfce" target="_blank">Depozita për openSUSE (SUSE Linux)</a></td>
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
