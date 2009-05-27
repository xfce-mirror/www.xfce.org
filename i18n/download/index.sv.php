<?php
    include_once ("version.php");
?>
<a name="stable"></a>

<h1>Hämta stabil version (<?php echo $version; ?>) </h1>

<p>
De flesta distributioner levereras med Xfce. Om du istället vill ha en senare version eller om du vill
bygga Xfce från grunden så kan du hitta paketen här nedan. Du kan äve ta en titt på listan över
Xfce-baserade distributioner <a href="/download/distros">här</a>.
</p>

<h2 id="source">Källkod</h2>

<p>
Alla Xfce-moduler finns tillgängliga i ett enda tararkiv från vårt SourceForge-förråd,
och från flera spegelservrar (i ett enda tararkiv <em>eller</em> separata tararkiv):
</p>

<?php printServers("", $servers); ?>

<!--
<h2 id="installer">Grafiska installerare</h2>

<p>
Xfce-Installers är en samling paket som nämnvärt förenklar installationsprocessen
för Xfce och vissa utökningar. Läs mer om installeraren
<a href="/documentation/installers/xfce/index.html">här</a>.
</p>

<?php printServers("installers", $servers); ?>
-->

<h2 id="binaries">Binärfiler</h2>

<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian Testing / Unstable</strong><br />
      <a href="http://pkg-xfce.alioth.debian.org/">Debian Xfce Group</a></td>
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
      <a href="http://en.opensuse.org/X11:xfce">Förråd för openSUSE (SUSE Linux)</a></td>
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

<h1>Hämta instabil version (<?php echo $version_unstable; ?>) </h1>

<p>
Nedan kan du hitta hämtningsplatser för den senaste utvecklingsutgåvan/instabila
utgåvan av Xfce.  Observera att denna programvara nästan helt säkert innehåller felaktigheter,
som många kan påverka din dator i en produktionsmiljö.
Du bör säkerhetskopiera alla konfigurationsfiler innan du installerar och använder
dessa utgåvor.  Om du är osäker på om du ska hämta ner denna utgåva, 
så ska du antagligen använda den <a href="#stable">stabila versionen</a>
istället.
</p>

<h2 id="source-unstable">Källkod</h2>

<p>
Alla Xfce-moduler finns tillgängliga i ett enda tararkiv från vårt SourceForge-förråd,
och från flera spegelservrar (i ett enda tararkiv <em>eller</em> separata tararkiv):
</p>

<?php printServers("", $servers_unstable); ?>

<?php } /* isset($version_unstable) */ ?>
