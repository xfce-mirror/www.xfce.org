<?php

/* The following bb codes are available:
   [link=/downloads/]download[/link] <- used for internal links, always starting from root (/)
   [url=http://link.com]link[/url]   <- external links (new window)
   [b]bold[/b]
   [i]italic[/i]
   [br]

   All full http://, https://, ftp:// and email adresses are converted into link
*/

$date_format = "%e %B %Y";
$posted_by = "Dikirim oleh";

$news_translated = array (
/*
    array (
        'id'      => <previous id number + 1>
        'date'    => '<day> <month> <year>',
        'author'  => '<you>',
        'title'   => '<title>',
        'content' => '<stuff you want to say>',
    ),
*/
    array (
        'id'      => 14,
        'date'    => '4 Maret 2008',
        'author'  => 'Brian Tarricone',
        'title'   => 'Kode Musim Panas Google 2008',
        'content' => "Walaupun saat ini kami belum diterima di program, kami telah mendaftar untuk berpartisipasi dalam [url=http://code.google.com/soc/]Kode Musim Panas Google[/url] sebagai organisasi mentor. Silakan lihat [url=http://wiki.xfce.org/gsoc-2008-ideas]halaman wiki kami[/url] untuk informasi lebih lanjut, dan tambahkan nama anda ke senarai murid jika anda ingin bekerja pada salah satu proyek. Jangan merasa sungkan untuk menambah ide pada senarai ide proyek.",
    ),
    array (
        'id'      => 13,
        'date'    => '2 Desember 2007',
        'author'  => 'Brian Tarricone',
        'title'   => 'Xfce 4.4.2 dirilis',
        'content' => 'Hai semua,'.
                     '[br][br]'.
                     "Maaf atas keterlambatannya, tapi Xfce 4.4.2 sekarang telah tersedia. Ini adalah rilis pengelolaan kedua dari seri stabil 4.4, yang fokus pada perbaikan kutu dan pemutakhiran terjemahan.".
                     '[br][br]'.
                     'Unduh tersedia dari [link=/download/]situs web Xfce[/link].'.
                     '[br][br]'.
                     'Senarai perubahan tersedia [link=/documentation/changelogs/4.4.2]di catatan perubahan[/link].'.
                     '[br][br]'.
                     'Selamat menikmati,[br]'.
                     'Tim pengembang Xfce',
    ),
    array (
        'id'      => 12,
        'date'    => '10 April 2007',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.4.1 dirilis',
        'content' => 'Hai semua,'.
                     '[br][br]'.
                     'Xfce 4.4.1 telah dirilis. Ini adalah rilis pengelolaan pertama dari Xfce 4.4 '.
                     '(cabang stabil Xfce saat ini) yang bertujuan untuk memperbaiki kutu penting dan '.
                     'pemutakhiran terjemahan.'.
                     '[br][br]'.
                     'Unduh Xfce 4.4.1 dari [link=/download/]situs web Xfce.[/link]'.
                     '[br][br]'.
                     'Senarai perubahan tersedia di [link=/documentation/changelogs/4.4.1]catatan perubahan[/link].'.
                     '[br][br]'.
                     'Selamat menikmati![br]'.
                     'Tim pengembang Xfce.',
    ),
    array (
        'id'      => 11,
        'date'    => '21 Januari 2007',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.4.0 dirilis',
        'content' => 'Setelah lebih dari dua tahun pengembangan, Xfce 4.4.0 telah baru saja dirilis.'.
                     '[br]'.
                     'Xfce 4.4 menghadirkan alat baru seperti manajer berkas Thunar yang '.
                     'sangat dinantikan serta beberapa peningkatan besar pada komponen intinya.'.
                     '[br][br]'.
                     'Tampilan visual Xfce 4.4 tersedia di sini:[br]'.
                     '[link=/about/tour]http://www.xfce.org/about/tour[/link]'.
                     '[br][br]'.
                     'Unduh Xfce 4.4 dari situs web baru Xfce:[br]'.
                     '[link=/download]http://www.xfce.org/download[/link]',
    ),
    array (
        'id'      => 10,
        'date'    => '15 Januari 2007',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.4 dirilis',
        'content' => 'Rilis perbaikan kutu untuk Xfce 4.2 telah tersedia. Rilis ini ditujukan '.
                     'sebagai rilis terakhir untuk cabang 4.2. Rilis meliputi beberapa perbaikan yang '.
                     'diambil dari cabang pengembangan terkini.[br]'.
                     'Rilis ini jangan disalahartikan sebagai rilis Xfce 4.4 yang akan datang, '.
                     'ini adalah rilis perbaikan kutu dari cabang stabil sebelumnya. Dapatkan '.
                     '[link=/download/]dari halaman ini[/link].',
    ),
    array (
        'id'      => 9,
        'date'    => '5 November 2006',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Kandidat Rilis Xfce 4.4 kedua (4.3.99.2) dirilis',
        'content' => 'Kandidat rilis destop Xfce 4.4 kedua dan semoga yang terakhir sekarang telah '.
                     'tersedia untuk diunduh.[br]Fokus utama rilis ini adalah pada perbaikan kutu dan optimasi. '.
                     'Silakan merujuk pada [link=/documentation/changelogs/4.3.99.2]catatan perubahan[/link] untuk senarai '.
                     'perbaikan dan perubahan. Tolong bantu kami untuk membuat Xfce 4.4 menjadi rilis Xfce terbaik sampai saat ini, unduh, '.
                     'coba, dan bantu kami memperbaikinya! Dapatkan segera dari [link=/download/]halaman ini[/link].',
    ),
    array (
        'id'      => 8,
        'date'    => '3 September 2006',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Kandidat Rilis Xfce 4.4 pertama (4.3.99.1) dirilis',
        'content' => 'Kandidat rilis pertama dari destop Xfce 4.4 yang akan datang saat ini telah tersedia untuk diunduh. '.
                     'Rilis ini memperbaiki banyak kutu yang ada di rilis beta kedua, dan juga '.
                     'memperkenalkan fitur baru, seperti dukungan kotak sampah pada Thunar dan xfdesktop. Selain itu, rilis '.
                     'ini juga menyertakan Xarchiver 0.4.0. Lihat [link=/documentation/changelogs/4.3.99.1]catatan rilis[/link] '.
                     'untuk senarai lengkap perbedaan antara versi 4.4 beta2 dan 4.4 rc1. Tolong bantu kami dalam membuat Xfce '.
                     '4.4 sebagai rilis terbaik Xfce sampai saat ini, unduh, coba, bantu kami memperbaikinya! Dapatkan dari '.
                     '[link=/download/]halaman ini[/link].',
    ),
    array (
        'id'      => 7,
        'date'    => '10 Agustus 2006',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.4 beta 2 (4.3.90.2) dirilis',
        'content' => 'Xfce 4.4 beta2 (4.3.90.2) sekarang telah tersedia untuk diunduh. Selain Mousepad dan Thunar, '.
                     'rilis ini juga menyertakan manajer arsip Xfce baru yakni Xarchiver. Selain itu sejumlah besar '.
                     'kutu telah diperbaiki, dan beberapa komponen inti telah ditingkatkan. Senarai lengkap '.
                     'perubahan yang terjadi antara 4.4 beta1 dan 4.4 beta2 tersedia di '.
                     '[link=/documentation/changelogs/4.3.90.2]sini[/link]. Tolong bantu kami dalam membuat '.
                     'Xfce 4.4 sebagai rilis Xfce terbaik sampai saat ini, unduh, coba, dan bantu kami memperbaikinya! Dapatkan dari '.
                     '[link=/download/]halaman ini[/link].',
    ),
    array (
        'id'      => 6,
        'date'    => '17 April 2006',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.4 beta 1 (4.3.90.1) dirilis',
        'content' => 'Xfce 4.4 beta1 (4.3.90.1) sekarang telah tersedia untuk diunduh. Xfce 4.4 menghadirkan alat baru seperti '.
                     'manajer berkas "Thunar" yang sangat dinantikan dan juga beberapa peningkatan besar di inti '.
                     'komponennya. Tolong bantu kami dalam membuat Xfce 4.4 sebagai rilis Xfce terbaik sampai saat ini, unduh, '.
                     'coba , dan bantu kami memperbaikinya! Dapatkan dari halaman ini.',
    ),
    array (
        'id'      => 5,
        'date'    => '15 November 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.3.2 dirilis',
        'content' => 'Rilis "mikro" untuk memperbaiki regresi di pengaturan manajer jendela, dapatkan dari salah satu '.
                     'lokasi unduh dari halaman ini, catatan perubahan untuk 4.2.3 tetap di sini.',
    ),
    array (
        'id'      => 4,
        'date'    => '08 November 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.3.1 dirilis',
        'content' => 'Rilis perbaikan kutu baru Xfce akhirnya tersedia, setelah hampir 6 bulan! Xfce 4.2.3.1 '.
                     'tersedia untuk diunduh dari lokasi biasanya di halaman ini, dan catatan perubahan '.
                     'tersedia di sini.',
    ),
    array (
        'id'      => 3,
        'date'    => '17 Mei 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.2 dirilis',
        'content' => 'Xfce 4.2.2 telah tersedia. Lokasi unduh dapat ditemukan di halaman ini, dan catatan perubahan '.
                     'tersedia di sini.',
    ),
    array (
        'id'      => 2,
        'date'    => '17 Maret 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.1.1 dirilis',
        'content' => 'Xfce 4.2.1.1 telah dirilis cepat setelah 4.2.1. Rilis meliputi perbaikan untuk kutu jahat yang '.
                     'menyebabkan panel kehilangan konfigurasinya ketika menyimpan sesi di 4.2.1. Server Sourceforge '.
                     'telah dimutakhirkan, dan cermin lainnya akan segera menyusul.',
    ),
    array (
        'id'      => 1,
        'date'    => '16 Maret 2005',
        'author'  => 'Olivier Fourdan',
        'title'   => 'Xfce 4.2.1 dirilis',
        'content' => 'Xfce 4.2.1 telah tersedia. Ini adalah rilis pengelolaan. Lokasi unduh dapat ditemukan '.
                     'di halaman ini, dan catatan perubahan tersedia di sini.',
    ),
);
?>
