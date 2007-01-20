<?php
    include ("version.php");
?>
<h1>Bertsio Egonkorra deskargatu (<?php echo $version; ?>) </h1>
<p>Banaketa gehienek Xfce dakarte. Baina bertsio berriago bat nahiago edo Xfce maila 
baxuenetik eraiki nahi izanez gero beharrezko paketeak beherago aurki ditzakezu. Xfce erabiltzen duten banaketei ere 
begirada bota diezaiekezu <a href="/download/distros">hemen</a>.</p>

<h2 id="source">Iturburu kodea</h2>
<p>Xfce modulu guztiak gure SourceForge errepositorioan pakete bakar batetan daude eskuragarri, baita ispilu anitzen 
bitartez (pakete bakar batetan <em>edo</em> ezberdinetan:</p>
<?php printServers("", $servers); ?>


<h2 id="installer">Instalatzaile grafikoak</h2>
<p> Xfce-Instalatzailea Xfce eta zenbait hedapen instalatzeko prozesua asko errazten duten pakete bilduma da. 
Instalatzaileaz gehiago irakurri nahi izanez gero <a href="http://www.os-cillation.com/index.php?id=31&amp;L=5" 
target="_blank">hemen</a> egin dezakezu.</p>
<?php printServers("installers", $servers); ?>


<h2 id="binaries">Bitarrak</h2>
<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian Probak / Ezegonkorra</strong><br />
      <a href="http://os-cillation.de/index.php?id=23&amp;L=5" target="_blank">os-cillation.de</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/fedora.png" alt="Fedora" width="40" height="40" /></td>
    <td><strong>Redhat eta Fedora</strong><br />
    <a href="<?php echo $sf_net; ?>" target="_blank">SourceForge.net<br />
    </a><a href="http://mocha.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">xfce.org</a> | <a href="http://www.us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">us.xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> <br />
    <a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/installers/" target="_blank">p0llux.be</a><br />
    <a href="http://hannelore.f1.fhtw-berlin.de/mirrors/xfce4/xfce-<?php echo $version; ?>/installers/" target="_blank">Hannelore</a><a href="http://hannelore.f1.fhtw-berlin.de/mirrors/xfce4/xfce-4.2.2/" target="_blank"></a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/suse.png" alt="Suse" width="40" height="40" /></td>
    <td><strong>openSUSE (SUSE Linux)</strong><br />
      <a href="http://en.opensuse.org/X11:xfce" target="_blank">openSUSE Errepositorioa (SUSE Linux)</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/mandriva.png" alt="Mandriva" width="40" height="40" /></td>
    <td><strong>Mandriva eta  Mandrake</strong><br />
      <a href="ftp://mandrivauser.de/rpm/GPL/" target="_blank">ftp://mandrivauser.de/rpm/GPL/</a><br />
      <a href="http://www.eslrahc.com/" target="_blank">http://www.eslrahc.com/</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/solaris.png" alt="Solaris" width="40" height="40" /></td>
    <td><strong>Solaris SPARC/x86/AMD</strong><br />
      <a href="http://www.blastwave.org" target="_blank">http://www.blastwave.org</a></td>
  </tr>
</table>
