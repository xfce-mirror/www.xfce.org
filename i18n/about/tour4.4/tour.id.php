<h1>Tur Visual Keliling Xfce 4.4.0</h1>
<p align="justify">
Saat ini, versi 4.4.0 Lingkungan Destop Xfce yang telah lama dinanti akhirnya tersedia. 
Saya akan coba menyoroti beberapa fitur baru yang telah ditambahkan sejak rilis
stabil terakhir.
</p>


<h2>Ikon Destop<a name="desktop-icons"></a></h2>

<p align="justify">
Salah satu fitur yang paling banyak diminta selama versi 4.0 dan 4.2 adalah dukungan untuk
ikon di destop. Sekarang dengan hadirnya Xfce 4.4.0, fitur ini akhirnya ditambahkan ke
manajer destop <b>Xfdesktop</b>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-desktop-icons.png" alt="Ikon Destop" /></p>

<p align="justify">
Manajer destop menggunakan pustaka <b>Thunar</b> untuk menangani peluncur aplikasi dan
berkas/folder reguler di destop. Manajer destop juga dapat menampilkan ikon untuk
jendela yang diminimalkan di destop, yang merupakan fitur yang cukup populer dari dunia
CDE. Tentu saja anda dapat menonaktifkan ikon destop jika anda lebih menginginkan destop
yang bersih.
</p>

<p align="center"><img src="/images/about/tour/xfce44-desktop-settings.png" alt="Pengaturan Destop" /></p>

<p align="justify">
<b>Xfdesktop</b> juga tetap memberikan akses ke aplikasi menu, seperti yang telah diberikan
di rilis Xfce sebelumnya.
</p>


<h2>Manajer Berkas<a name="file-manager"></a></h2>

<p align="justify">
Dukungan ikon destop bekerja dengan baik pada manajer berkas baru <a href="http://thunar.xfce.org/">Thunar</a>
yang menggantikan manajer berkas sebelumnya yaitu <b>Xffm</b>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-thunar.png" alt="Manajer Berkas Thunar" /></p>

<p align="justify">

<b>Thunar</b> ditulis dari nol untuk memberikan kemudahan penggunaan, tapi tetap merupakan manajer
berkas yang sangat ringan untuk Xfce. Antarmukanya didesain agar tampak mirip seperti pemilih berkas
yang diperkenalkan pada GTK+ 2.4, dan manajer berkas lain seperti <b>Nautilus</b> dan <b>pcmanfm</b>
juga telah menerapkan ide tersebut.
</p>

<p align="justify">
<b>Thunar</b> mendukung semua fungsionalitas manajemen berkas yang diharapkan oleh pengguna, dan juga
beberapa fitur canggih lain. Misalnya, apa yang dinamakan <i>Pengganti Nama Bulk</i> ikut disertakan, dan
memungkinkan pengguna untuk menamai ulang banyak berkas sekaligus dengan menggunakan kriteria tertentu.
</p>

<p align="center"><img src="/images/about/tour/xfce44-thunar-bulk-rename.png" alt="Pengganti Nama Bulk Thunar" /></p>


<h2>Penggerak dan Media Dapat Dilepas<a name="removable-drives-and-media"></a></h2>

<p align="justify">
Xfce 4.4.0 memberikan kemudahan akses ke penggerak dan media dapat dilepas. Cukup masukkan media ke
penggerak atau colokkan penggerak baru ke komputer maka sebuah ikon yang mewakili volume dapat dilepas
akan tampak di destop dan di panel sisi <b>Thunar</b>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-removable-volumes.png" alt="Volume Dapat Dilepas" /></p>

<p align="justify">
Klik pada ikon akan secara otomatis memount volume. Klik kanan pada ikon untuk lepas mount penggerak atau keluarkan 
media dari penggerak. Perlu dicatat bahwa fitur ini membutuhkan <a
href="http://freedesktop.org/wiki/Software_2fhal">HAL</a> dan oleh karenanya hanya tersedia bagi Linux 2.6.x
dan FreeBSD 6.x atau versi di atasnya pada waktu penulisan ini (ada dukungan terbatas untuk media dapat dilepas 
pada FreeBSD 4.x dan 5.x yang tidak membutuhkan HAL).
</p>


<h2>Penyunting Teks<a name="text-editor"></a></h2>

<p align="justify">
Penyunting teks baru <b>MousePad</b> ikut disertakan pada rilis ini. <b>MousePad</b> memberikan semua fungsionalitas
dasar penyunting, tak lebih, tak kurang.
</p>

<p align="center"><img src="/images/about/tour/xfce44-mousepad.png" alt="MousePad" /></p>

<p align="justify">

Anda dapat menganggap <b>MousePad</b> sama seperti <b>NotePad</b> di Windows. Proses hidupkannya sangat cepat,
biasanya kurang dari satu detik, bahkan pada sistem lama.
</p>


<h2>Manajer Jendela<a name="window-manager"></a></h2>

<p align="justify">

<b>Xfwm4</b> tetap melanjutkan kiprahnya sebagai manajer jendela favorit.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-argb32.png" alt="Xfwm4 ARGB32" /></p>

<p align="justify">
Rilis ini menghadirkan kompositor yang diperkaya, mendukung transparansi jendela ARGB, bayangan,
transparansi bingkai jendela dan masih banyak lagi.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-switcher.png" alt="Pemindah Xfwm4" /></p>

<p align="justify">
<b>Xfwm4</b> juga menyertakan pemindah aplikasi baru, seperti tampak pada gambar layar diatas,
yang menampilkan semua jendela dari ruang kerja saat ini dengan ikon dan judul jendela.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-themes.png" alt="Tema Xfwm4" /></p>

<p align="justify">
Lebih lanjut pada dukungan untuk banyak format gambar untuk tema dekorasi jendela juga ditambah,
termasuk gambar <tt>PNG</tt>, <tt>GIF</tt> dan <tt>SVG</tt>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfwm4-tweaks.png" alt="Tweak Xfwm4" /></p>

<p align="justify">
Kendali tingkat mahir untuk manajer jendela juga ditambah, memungkinkan tweak terhadap semua perilaku
jendela.
</p>


<h2>Panel<a name="panel"></a></h2>

<p align="justify">

<b>Xfce4-panel</b> telah ditulis ulang sepenuhnya untuk rilis Xfce 4.4. Multi panel didukung
<i>sepenuhnya</i> sekarang dan mudah diatur menggunakan <b>Manajer Panel</b> seperti yang
tampak pada gambar layar di bawah.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-manager.png" alt="Manajer Panel" /></p>

<p align="justify">

Salah satu kendala utama pada rilis Xfce sebelumnya adalah semua plugin harus dijalankan
dalam proses yang sama sebagai panel, sehingga setiap plugin dapat memacetkan seluruh
panel. Untuk mengatasi masalah ini, dukungan untuk plugin eksternal ditambah ke panel.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-additem.png" alt="Dialog Panel Tambah Item" /></p>

<p align="justify">
Pengembang plugin panel sekarang dapat memutuskan apakah plugin ingin dijalankan sebagai
proses eksternal atau sebagai bagian dari proses panel, tergantung dari stabilitas plugin.
</p>

<p align="center"><img src="/images/about/tour/xfce44-panel-iconbox.png" alt="Plugin Kotak Ikon Panel" /></p>

<p align="justify">

Karena sekarang telah ada dukungan untuk multi panel, utilitas <b>Xftaskbar4</b> dan
<b>Xfce4-iconbox</b> yang terpisah tak lagi diperlukan. Malah sekarang, batang tugas dan
kotak ikon tersedia sebagai plugin panel.
</p>

<p align="justify">
Mayoritas plugin panel tambahan, tersedia via <a href="http://goodies.xfce.org/">Proyek
Goodies Xfce</a>, telah dimutakhirkan untuk panel anyar, dan beberapa plugin baru telah ditambah.
Misalnya <b>xfce4-xfapplet-plugin</b> baru yang memungkinkan pengguna untuk menambah applet panel 
GNOME ke panel Xfce.
</p>


<h2>Manajemen Waktu<a name="time-management"></a></h2>

<p align="justify">
Aplikasi manajemen waktu baru <b>Orage</b> hadir menggantikan <b>Xfcalendar</b>, yang diperkenalkan pada
Xfce 4.2.0. <b>Orage</b> memberikan beberapa fitur untuk mengatur waktu anda secara efisien.
</p>

<p align="center"><img src="/images/about/tour/xfce44-orage.png" alt="Orage" /></p>

<p align="justify">
Walaupun <b>Orage</b> sangat ringan dan mudah digunakan, <b>Orage</b> mendukung semua fitur penting yang
ditemukan di aplikasi kalender yang lebih besar seperti <b>Outlook</b> atau <b>Evolution</b>. Sementara
<b>Xfcalendar</b> di masa lalu menggunakan format suai <tt>dbh</tt> untuk menyimpan pengaturan anda, 
<b>Orage</b> dibuat berbasiskan <tt>ical</tt>

sehingga cocok bila digunakan pada aplikasi kalender lain.
</p>


<h2>Emulator Terminal<a name="terminal-emulator"></a></h2>

<p align="justify">
Walaupun <b>Terminal</b> telah tersedia sejak rilis 4.2, tapi belum cukup matang pada
waktu itu untuk menjadi bagian dari inti. Dengan adanya rilis mayor ini, akhirnya 
<b>Terminal</b> dipindah ke dalam destop inti.
</p>

<p align="center"><img src="/images/about/tour/xfce44-terminal.png" alt="Terminal" /></p>

<p align="justify">
Selain fitur dasar yang mungkin anda harapkan dari sebuah emulator terminal, <b>Terminal</b>
juga menyertakan beberapa fitur tambahan yang bagus, seperti banyak tab per jendela, batang
alat yang dapat disuaikan, serta kemampuan untuk mengatur hampir setiap aspek dari aplikasi
via <i>opsi tersembunyi</i>. Seperti tampak pada gambar layar di atas, rilis ini juga mendukung
transparansi nyata menggunakan manajer komposisi terintegrasi <b>Xfwm4</b>.
</p>


<h2>Pencetakan<a name="printing"></a></h2>

<p align="justify">
<b>Xfprint</b>, aplikasi manajemen pencetakan Xfce, menyaksikan beberapa peningkatan kecil di
rilis ini. Pertama, pengonversi <tt>a2ps</tt> bukan lagi sebuah keharusan, walaupun masih
direkomendasikan. Dukungan untuk <tt>CUPS</tt> 1.2 ditambah dan <b>Xfprint</b> sekarang dapat menampilkan
kondisi printer dengan sistem <tt>CUPS</tt>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfprint.png" alt="Pencetakan Xfce" /></p>

<p align="justify">
<b>Xfprint</b> juga berintegrasi dengan <b>MousePad</b> untuk memberikan dukungan pencetakan
generik untuk bermacam jenis dokumen teks menggunakan pengonversi <tt>a2ps</tt>.
</p>

<p align="center"><img src="/images/about/tour/xfce44-xfprint-dialog.png" alt="Dialog Cetak Xfce" /></p>

<p align="justify">
Seperti yang dapat anda lihat, dialog pencetakan masih tampak mirip seperti Xfce 4.2, tapi kinerja
internal dari dukungan pencetakan telah ditingkatkan, terutama dukungan <tt>CUPS</tt>. Selain itu,
fungsionalitas manajemen pencetakan dipindah ke pustaka, sehingga aplikasi lain dapat
menggunakan API untuk mengakses konfigurasi pencetak.
</p>


<h2>Start Otomatis<a name="autostart"></a></h2>

<p align="justify">
Xfce 4.4.0 mengimplementasikan <a href="http://freedesktop.org/wiki/Standards_2fautostart_2dspec">Spesifikasi
Start Otomatis</a> baru - sebenarnya Xfce adalah destop pertama yang mengimplementasikan fitur tersebut, tapi
yang lain lebih cepat merilisnya. ;-)
</p>

<p align="center"><img src="/images/about/tour/xfce44-autostart.png" alt="Penyunting Start Otomatis Xfce" /></p>

<p align="justify">
Spesifikasi ini terdiri dari dua bagian, <i>Start Otomatis Aplikasi Ketika Hidupkan</i>, yang
diimplementasikan di <b>xfce4-session</b> dan <i>Start Otomatis Aplikasi Setelah Mount</i> yang
diimplementasikan di <a href="http://foo-projects.org/~benny/projects/thunar-volman/index.html">thunar-volman</a>.
Rilis ini juga menyertakan <b>xfce4-autostart-editor</b>, seperti tampak pada gambar layar di atas, yang
memungkinkan pengguna untuk dengan mudah menambah, menghapus atau menonaktifkan aplikasi start otomatis.
</p>


<h2>Pengaturan<a name="settings"></a></h2>

<p align="justify">
Rilis ini mengenalkan opsi baru untuk menyesuaikan destop sesuai kebutuhan anda. Beberapa contoh dialog 
pengaturan baru telah diperlihatkan di atas.
</p>

<p align="center"><img src="/images/about/tour/xfce44-preferences-applications.png" alt="Aplikasi Favorit" /></p>

<p align="justify">

Kerangka kerja aplikasi favorit, yang sebelumnya hanya tersedia di <b>Terminal</b>, telah diimpor
ke dalam Xfce, sehingga pengguna tak perlu lagi menyunting profil shell untuk menentukan peramban atau
emulator terminal apa yang harus digunakan oleh aplikasi Xfce. Tujuannya adalah untuk membuatnya semudah
mungkin dalam mengganti sebuah aplikasi bagi kategori tertentu (pengguna GNOME mungkin telah memperhatikan
bahwa GNOME telah mengadopsi pendekatan ini, karena itu sangat mudah).
</p>

<p align="center"><img src="/images/about/tour/xfce44-preferences-keyboard.png" alt="Jalan Pintas Papan Ketik" /></p>

<p align="justify">
Kemudian ada pula kendala pada jalan pintas papan ketik di Xfce 4.2... Xfce 4.2 membatasi jumlah
jalan pintas papan ketik yang bebas tersedia, sementara orang-orang ingin menerapkan jumlah jalan pintas
papan ketik sesuka hati mereka. Dengan Xfce 4.4 pembatasan ini tinggal sejarah dan jalan pintas aplikasi
sekarang terpisah dari jalan pintas manajer jendela.
</p>


<h2>Umpan Balik<a name="feedback"></a></h2>

<p align="justify">
Silakan berikan komentar terhadap artikel ini di <a href="http://xfce-diary.blogspot.com/2007/01/visual-tour-of-xfce-440.html">blog</a> saya dan gunakan
milis <a href="/community/lists">xfce</a> jika anda memiliki pertanyaan seputar Xfce 4.4.0 atau
permasalahan terkait proses instalasi.
</p>


<h2>Taut<a name="links"></a></h2>

<ul>
<li><a href="http://www.xfce.org/">Situs web Xfce</a></li>
<li><a href="http://thunar.xfce.org/">Situs web Thunar</a></li>
</ul>

<h2>Kredit<a name="credits"></a></h2>
<p align="justify">Ditulis oleh Benedikt Meurer, 21 Jan 2007</p>
