<?php
    include ("version.php");
?>
<h1>安定版のダウンロード(<?php echo $version; ?>) </h1>
<p>ほとんどのディストリビューションはXfceを一緒にして出荷していますが、より新しいバージョンが欲しいときや、自分で一からビルドしたいときは
以下でパッケージを見つけることができます。また、Xfceに特化したディストリビューションを<a href="/download/distros">ここ</a>で
見ることができます。</p>

<h2 id="source">ソースコード</h2>
<p>すべてのXfceモジュールは一つのSourceForgeレポジトリからのtarボール一つで、またはいくつかのミラーから(一つのtarボールから<em>または</em>いくつかに別れたtarボール)で利用できます。：</p>
<?php printServers("", $servers); ?>


<h2 id="installer">グラフィカルインストーラ</h2>
<p> Xfce-InstallerはXfceといくつかのエクステンションのインストールの手順をすぐにわかるくらい簡潔にするパッケージのコレクションです。
インストーラについての詳細は<a href="/documentation/installers/xfce/index.html">ここ</a>を読んでください。</p>
<?php printServers("installers", $servers); ?>


<h2 id="binaries">バイナリ</h2>
<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian Testing / Unstable</strong><br />
      <a href="http://pkg-xfce.alioth.debian.org/" target="_blank">Debian Xfce Group</a></td>
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
