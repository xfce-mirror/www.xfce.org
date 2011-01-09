<?php
    include ("version.php");
?>
<a name="stable"></a>

<h1>安定版のダウンロード(<?php echo $version; ?>) </h1>

<p>
ほとんどのディストリビューションは Xfce を提供していますが、より新しいバージョンが欲しいときや、自分で一からビルドしたいときは以下からパッケージを入手できます。
また、Xfce に特化したディストリビューションを<a href="/download/distros">ここ</a>で見つけることができます。
</p>

<h2 id="source">ソースコード</h2>

<p>
すべての Xfce モジュールは私たちの SourceForge リポジトリからの一つの tar ボールで、またはいくつかのミラーから (一つ、<em>または</em>いくつかに分けられた tar ボールで) 入手できます:
</p>

<?php printMirror($version); ?>

<!--
<h2 id="installer">グラフィカルインストーラ</h2>

<p>
Xfce-Installer は、Xfce といくつかのエクステンションをインストールするとてもシンプルなパッケージのコレクションです。
インストーラについての詳細は<a href="/documentation/installers/xfce/index.html">ここ</a>を読んでください。</p>

<?php printServers("installers", $servers); ?>
-->

<h2 id="binaries">バイナリ</h2>
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
    </a><a href="http://mocha.xfce.org/archive/xfce-<?php echo $version; ?>">xfce.org</a> | <a href="http://www.ca-us.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">ca-us.xfce.org</a> | <a href="http://www.de.xfce.org/archive/xfce-<?php echo $version; ?>" target="_blank">de.xfce.org</a> <br />
    <a href="http://www.p0llux.be/xfce/xfce-<?php echo $version; ?>/installers/">p0llux.be</a></td>
  </tr>
  -->
  <tr>
    <td><img src="../../images/download/suse.png" alt="Suse" width="40" height="40" /></td>
    <td><strong>openSUSE (SUSE Linux)</strong><br />
      <a href="http://en.opensuse.org/X11:xfce">Repositories for openSUSE (SUSE Linux)</a></td>
  </tr>
  <tr>
    <td><img src="../../images/download/mandriva.png" alt="Mandriva" width="40" height="40" /></td>
    <td><strong>Mandriva &amp; Mandrake</strong><br />
      <a href="ftp://mandrivauser.de/rpm/GPL/">ftp://mandrivauser.de/rpm/GPL/</a><br />
      <a href="http://www.eslrahc.com/">http://www.eslrahc.com/</a></td>
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

<h1>開発版のダウンロード (<?php echo $version_unstable; ?>)</h1>

<p>
以下の場所から最新の開発/不安定版の Xfce をダウンロードできます。
このソフトウェアは、ほとんどの場合間違いなくバグを含んでおり、その多くはあなたがこれを使いたい環境に影響を及ぼすかもしれないことに注意してください。
これらの版をインストールおよび使用する前にすべての設定ファイルのバックアップを取ってください。
もしあなたがこの版のダウンロードにためらいを感じるのでしたら、上の<a href="#stable">安定版</a>を使用してください。
</p>

<h2 id="source-unstable">ソースコード</h2>

<p>
すべての Xfce モジュールは私たちの SourceForge リポジトリから一つの tar ボールで、またはいくつかのミラーから (一つ、<em>または</em>いくつかに別れた tar ボール) で入手できます:
</p>

<?php printMirror($version_unstable); ?>

<?php } /* isset($version_unstable) */ ?>
