<?php
    include ("version.php");
?>
<h1>Shkarkoni version të Qëndrueshëm (<?php echo $version; ?>) </h1>
<p>Shumica e shpërndarjeve qarkullojnë me Xfce-në. Por nëse doni një version më të ri ose
 doni të formoni Xfce-në nga fillimi, mund t'i gjeni paketat më poshtë. <a href="/download/distros">Këtu</a> 
 mund t'u hidhni një sy shpërndarjeve me bazë Xfce-në.</p>

<h2 id="source">Kod burim</h2>
<p>Tërë modulet Xfce janë të passhëm brenda një arkive të vetme të ngjeshur prej depozitës sonë në SourceForge, dhe prej disa pasqyrash (në një arkivë të vetme <em>ose</em> si arkiva të ndara veçmas):</p>
<?php printServers("", $servers); ?>


<h2 id="installer">Instaluesa grafikë</h2>
<p> Xfce-Installers është një grumbull paketash që thjeshtësojnë dukshëm procesin e instalimit të Xfce-së
 dhe të disa zgjerimeve. Lexoni më tepër rreth instaluesit <a href="http://www.os-cillation.com/index.php?id=31&amp;L=5" target="_blank">këtu</a>. </p>
<?php printServers("installers", $servers); ?>


<h2 id="binaries">Dyorë</h2>
<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Për provë me Debian/ I paqëndrueshëm</strong><br />
      <a href="http://pkg-xfce.alioth.debian.org/" target="_blank">Debian Xfce Group</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/fedora.png" alt="Fedora" width="40" height="40" /></td>
    <td><strong>Redhat &amp; Fedora</strong><br />
    <a href="<?php echo $sf_net; ?>" target="_blank">SourceForge.net<br />
    </a><a href="/archive/xfce-<?php echo $version; ?>" target="_blank">xfce.org</a> | <a href="http://www.us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">us.xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> <br />
    <a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/installers/" target="_blank">p0llux.be</a><br />
    <a href="http://hannelore.f1.fhtw-berlin.de/mirrors/xfce4/xfce-<?php echo $version; ?>/installers/" target="_blank">Hannelore</a><a href="http://hannelore.f1.fhtw-berlin.de/mirrors/xfce4/xfce-4.2.2/" target="_blank"></a></td>
  </tr>
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
