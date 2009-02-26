<h1>Kode sumber pengembangan Xfce</h1>
<p>Jika anda ingin membangun Xfce dari kode sumber, anda dapat mengunduh tarball sumber versi rilis Xfce dari <a href="/download">halaman unduh</a> kami, atau mencoba versi pengembangan, dengan mengunduhnya dari subversion (hanya bagi yang gemar berpetualang). Perlu dicatat bahwa menginstal dua versi Xfce (misalnya stabil dan pengembangan) tidak didukung.</p>
<h3>Versi rilis terakhir (4.4.x)</h3>
<p>Versi ini berisi perbaikan kutu terakhir, tanpa adanya fitur mayor apapun. Versi ini lebih stabil dari versi pengembangan (dan bahkan dari rilis resmi terakhir), tapi tak ada jaminan kalau versi ini bebas kutu.</p>
<h3>Versi pengembangan terakhir (4.5.x) </h3>
<p>Versi ini berisi pemutakhiran pengembangan terakhir dan perbaikan kutu. Tak ada jaminan kalau versi ini akan bekerja penuh dan bebas kutu.</p>
<h2>Mendapatkan kode sumber</h2>
<h3>Versi rilis terakhir (4.4.x) dari SVN</h3>
<p>Anda dapat mengunduh struktur rilis penuh dengan perintah berikut:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/4.4</code></p>
<p>Atau modul yang diinginkan:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/branches/xfce_4_4 $namamodul</code></p>
<h3>Versi pengembangan terakhir (4.5.x) dari SVN </h3>
<p>Anda dapat mengunduh struktur rilis penuh dengan perintah berikut:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/modules/trunk</code></p>
<p>Atau modul yang diinginkan:</p>
<p><code class="code">svn checkout http://svn.xfce.org/svn/xfce/$modulename/trunk $modulename</code></p>
<div class="tip">Untuk menyinkronisasi salinan (checkout) lokal struktur rilis stabil atau pengembangan anda dengan salah satu server, anda dapat menjalankan <code>svn update</code> ketimbang <code>svn checkout</code>. Ini akan meningkatkan kecepatan proses dan meminimalkan transfer server Xfce</div>
<h3>Tarball pengembangan harian</h3>
<p>Jika anda tak ingin mencoba versi pengembangan Xfce secara rutin atau anda belum punya pengalaman membangun sumber dari SVN, anda dapat mengunduh tarball pengembangan harian di <a href="http://mocha.xfce.org/downloads/svn-snapshots/">sini</a>.</p>
<h2>Membangun modul</h2>
<p>Jika anda telah mengunduh tarball, anda perlu membongkarnya terlebih dahulu sebelum melanjutkan.</p>
<p>Jika anda menginstal ke prefiks yang berbeda dari pkg-config, anda harus mengatur variabel PKG_CONFIG_PATH untuk menyertakan alamat ke berkas *.pc yang diinstal oleh pustaka Xfce 4, yaitu ${prefiks}/lib/pkgconfig. Misalnya:</p>
<p><code class="code">export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig</code></p>
<p>Untuk membangun modul dari tarball cukup jalankan:</p>
<p><code class="code">./configure --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
<p>Untuk membangun modul svn (anda memerlukan paket xfce4-dev-tools) jalankan perintah ini: </p>
<p><code class="code">./autogen.sh --prefix=/usr/local &amp;&amp; make &amp;&amp; make install</code></p>
