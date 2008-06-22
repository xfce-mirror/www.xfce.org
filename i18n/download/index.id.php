<?php
    include ("version.php");
?>
<h1>Unduh versi stabil (<?php echo $version; ?>) </h1>
<p>Kebanyakan distribusi telah menyertakan Xfce. Tapi jika anda menginginkan versi yang lebih baru atau anda ingin membangun Xfce dari nol, anda dapat mencari paketnya di bawah. Anda dapat pula melihat senarai distribusi berorientasi Xfce di <a href="/download/distros">sini</a>.</p>

<h2 id="source">Kode sumber</h2>
<p>Semua modul Xfce tersedia dalam tarball tunggal dari gudang SourceForge kami, serta dari beberapa cermin (dalam tarball tunggal <em>atau</em> beberapa tarball):</p>
<?php printServers("", $servers); ?>


<h2 id="installer">Penginstal grafik</h2>
<p> Xfce-Installers adalah kumpulan paket yang akan menyederhanakan proses instalasi Xfce dan beberapa ekstensi. Baca lebih lanjut tentang penginstal di <a href="/documentation/installers/xfce/index.html">sini</a>. </p>
<?php printServers("installers", $servers); ?>


<h2 id="binaries">Biner</h2>
<table cellspacing="5">
  <tr>
    <td><img src="../../images/download/debian.png" alt="Debian" width="40" height="40" /></td>
    <td><strong>Debian Testing / Unstable</strong><br />
      <a href="http://pkg-xfce.alioth.debian.org/" target="_blank">Grup Debian Xfce</a></td>
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
      <a href="http://en.opensuse.org/X11:xfce" target="_blank">Gudang untuk openSUSE (SUSE Linux)</a></td>
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
